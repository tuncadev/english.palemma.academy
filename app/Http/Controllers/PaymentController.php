<?php
// app/Http/Controllers/PaymentController.php

namespace App\Http\Controllers;

use App\Enums\Status;

use App\Constants\AppConstants;

use App\Services\MonopayService;

use App\Http\Controllers\MailController;

use App\Models\Transactions;
use App\Models\Course;
use App\Models\WebHook;
use App\Models\User;
use App\Models\PendingUser;
use App\Models\Subscribtion; // assuming you have a Subscription model

use Carbon\Carbon;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    protected $monopayService;

    public function __construct(MonopayService $monopayService)
    {
        $this->monopayService = $monopayService;
    }

    public function setupToken($data) {
        $setupToken = Crypt::encrypt($data);
        return $setupToken;
    }

    public function createInvoice(Request $request, $course_id)
    {

        $course = Course::findOrFail($course_id);
        $formData = $request->input('personalInfo'); // Access personal details as an array
         // Convert to minimal units
        $transactionID = Str::uuid()->toString();
        if ($course->course_discount > 0) {
            $discountAmount = ($course->course_price * $course->course_discount) / 100;
            $coursePriceWithDiscount = $course->course_price - $discountAmount;
        } else {
            $coursePriceWithDiscount = $course->course_price; // No discount, keep original price
        }
        $cryptData = [
            'email' => $formData['email'],
            'transaction_id' => $transactionID,
            'status' => Status::PENDING->value,
        ];
        $amount = $coursePriceWithDiscount * 100;

        $token = $this->setupToken($cryptData);

        $callback = route('payment.callback', ['token' => $token]);
        // Payload for Monobank API
        $payload = [
            "amount" => $amount,
            "ccy" => AppConstants::CURRENCY_CODE_UAH,
            "merchantPaymInfo" => [
                "reference" => uniqid(),
                "destination" => $course->name,
                "comment" => "Course purchase",
                "customerEmails" => [$formData['email']],
                "basketOrder" => [
                    [
                        "name" => $course->name,
                        "qty" => 1,
                        "sum" => $amount,
                        "total" => $amount,
                        "unit" => "pcs",
                    ]
                ]
            ],
            "redirectUrl" => $callback,
            "webHookUrl" => route('payment.webhook'), // Webhook URL for status updates
            "validity" => 3600,
        ];

        // Create invoice via Monopay API
        $response = $this->monopayService->createInvoice($payload);

        if ($response->successful()) {

            $data = $response->json();
            $invoiceUrl = $data['pageUrl'];

            // Record payment operation in database
            Transactions::create([
                'invoice_id' => $data['invoiceId'],
                'transaction_id' => $transactionID,
                'ip_address' => $request->ip(),
                'first_name' => $formData['first_name'],
                'last_name' => $formData['last_name'],
                'email' => $formData['email'],
                'phone' => $formData['phonenumber'],
                'amount' => $course->course_price,
                'course_id' => $course_id,
                'status' => Status::PENDING->value,
            ]);

            // Redirect to the Monobank payment URL
            return redirect($invoiceUrl);
        } else {
            return back()->withErrors(['error' => 'Failed to create invoice.']);
        }
    }

    public function createPendingUser($data) {
        if($data) {
            $transaction_id = $data['transaction_id'];
            $email = $data['email'];
            $invoice_id = $data['invoice_id'];
            $status = true;
            $exists = PendingUser::where('email', $email)->exists();
            if (!$exists) {
                PendingUser::create([
                    'email' => $email,
                    'invoice_id' => $invoice_id,
                    'transaction_id' => $transaction_id,
                    'status' => $status,
                ]);
                Log::info("Created Pending User");
                return true; // Created
            } else {
                Log::warning("Not created exists");
                return false; // Not created exists
            }
        } else {
            Log::error("No data: " . $data);
            return false;
        }
    }

    public function callback(Request $request)
    {
        $locale = session('locale', config('app.locale'));
        $token = Crypt::decrypt($request['token']);
        $transactionID = $token['transaction_id'];
        $data = Transactions::where('transaction_id', $transactionID)->first();
        $payment = Transactions::where('transaction_id', $transactionID)->firstOrFail();
        $email = $token['email'];
        $invoiceId = $payment->invoice_id;

        $userData = [
            'transaction_id' => $transactionID,
            'email' => $email,
            'invoice_id' => $invoiceId,
            'status' => 1,
        ];

        $createPendingUser = $this->createPendingUser($userData);

        $checkInvoice =  $this->getInvoiceStatus($request);

        $data = $checkInvoice['data'];
        $isSuccess = $data['status'];
        $failure_reason = $data['failure_reason'];
        $course_name = $data['course_name'];
        $course_id = $data['course_id'];
        $token = Crypt::encrypt($token);
        if($isSuccess === Status::SUCCESS->value) {
            return redirect()->route('payment.success', ['invoiceId' => $invoiceId, 'token' => $token]);
        } else {
            return view('payment.failure', ['invoiceId' => $invoiceId, 'failure_reason' => $failure_reason, 'course_name' => $course_name, 'course_id' => $course_id]);
        }

    }

    public function getInvoiceStatus(Request $request){
        $locale = session('locale', config('app.locale'));

        $token = Crypt::decrypt($request['token']);
        $transactionID = $token['transaction_id'];
        $email = $token['email'];
        $transaction = Transactions::where('transaction_id', $transactionID)->firstOrFail();

        $payment = Transactions::where('transaction_id', $transactionID)->firstOrFail();

        $response = $this->monopayService->getInvoiceStatus($payment->invoice_id);
        $data = $response->json();
        $status = $data['status'];

        $failure_reason = $data['failureReason'] ?? null;
        $course_name_locale = "course_name_" . $locale;
        $course_id = $payment->course_id;
        $course_name = Course::where('id', $course_id)->value($course_name_locale);
        if($status) {
            $invoiceId =  $data['invoiceId'];
            $transaction->update([
                'status' => $status,
                'response' => $response->body(),
                'failure_reason' => $failure_reason,
                'update_date' => now(),
            ]);

            if($status === Status::SUCCESS->value) {
                $invoiceData = [
                    'status' => $status,
                    'response' => $response->body(),
                    'failure_reason' => $failure_reason ?? null,
                    'course_name' => $course_name,
                    'invoiceId' =>  $invoiceId,
                    'course_id' => $course_id
                ];
                $this->addInvoiceCache($payment);

                return [
                    'success' => true,
                    'data' => $invoiceData
                ];

            }
            if($status ===  Status::FAILED->value) {

                $invoiceData = [
                    'status' => $status,
                    'response' => $response->body(),
                    'failure_reason' => $failure_reason ?? null,
                    'course_name' => $course_name,
                    'invoiceId' =>  $invoiceId,
                    'course_id' => $course_id
                ];

                return [
                    'success' => false,
                    'data' => $invoiceData
                ];

            }
        }
    }

    public function checkUserExists($email) {
        $exists = User::where('email', $email)->exists();
        return $exists;
    }

    public function success(Request $request, $invoiceId, $token)
    {
        $token = Crypt::decrypt($token);
        $email = $token['email'];

        $userExists = $this->checkUserExists($email);
        $transactionDetails = Transactions::where('invoice_id',$invoiceId)->firstOrFail();
        $transaction_id = $transactionDetails->transaction_id;
        if(!$userExists) {
            if($invoiceId) {

                $locale = session('locale', config('app.locale'));


                $first_name = $transactionDetails['first_name'];
                $last_name = $transactionDetails['last_name'];
                $phone = $transactionDetails['phone'];
                $email = $transactionDetails['email'];

                $course_id = $transactionDetails['course_id'];
                $course_name_locale = "course_name_" . $locale;
                $course_name = Course::where('id', $course_id)->value($course_name_locale);
                $token = Crypt::encrypt($token);
                return view('payment.success', compact('token','course_name', 'invoiceId', 'email', 'first_name', 'last_name', 'phone', 'course_id'));

            }
        } else {

            $pendingUserStatus = $this->checkPendingUserStatus($transaction_id);
            if($pendingUserStatus) {
                $this->updatePendingUserStatus($transaction_id, false);
            }

            return redirect()->route('dashboard.courses')->with('success', 'Registration and subscription successful!');
        }


    }

    public function checkPendingUserStatus($transaction_id)
    {

        $pendingUser = PendingUser::where('transaction_id', $transaction_id)->where('status', 1)->exists();

        if ($pendingUser) {
            return true; // Returns the status if found
        }

        return null; // Returns null if no record is found
    }

    // Function 2: Update the status of a pending user by transaction ID
    public function updatePendingUserStatus($transaction_id, $status)
    {

        $updated = PendingUser::where('transaction_id', $transaction_id)->update(['status' => $status]);

        return true; // Returns the number of affected rows (0 if none found)
    }

    public function finalize(Request $request, $course_id, $token)
    {
        $token = Crypt::decrypt($token);
        $transactionID = $token['transactionID'];
        $invoiceNumber = $token['invoiceNumber'];
        $formData = $request->input('personalInfo'); // Access personal details as an array
        $course = Course::find($course_id);

        // Set a flag to determine if we need to redirect for an existing transaction
        $existingTransaction = false;

        DB::transaction(function () use ($request, $course_id, $invoiceNumber, $transactionID, $formData, $course, &$existingTransaction) {
            $existingTransaction = Transactions::where('invoice_id', $invoiceNumber)->lockForUpdate()->exists();

            if (!$existingTransaction) {
                Transactions::create([
                    'invoice_id' => $invoiceNumber,
                    'transaction_id' => $transactionID,
                    'ip_address' => $request->ip(),
                    'first_name' => $formData['first_name'],
                    'last_name' => $formData['last_name'],
                    'email' => $formData['email'],
                    'phone' => $formData['phonenumber'],
                    'amount' => $course->course_price,
                    'discount' => $course->course_discount,
                    'course_id' => $course_id,
                    'status' => Status::PENDING->value,
                ]);
            }
        });

        // Encrypt the token after the transaction
        $token = Crypt::encrypt([
            'transactionID' => $transactionID,
            'invoiceNumber' => $invoiceNumber
        ]);

        // Perform the redirect outside of the transaction
        return redirect()->route('payment.direct', [
            'course_id' => $course_id,
            'token' => $token
        ]);
    }

    public function directPay(Request $request, $course_id, $token)
    {
        $qrCode = QrCode::size(300)->generate('https://english.palemma.academy');
        $token = Crypt::decrypt($token);
        $transactionID = $token['transactionID'];
        $invoiceNumber = $token['invoiceNumber'];
        $formData = $request->input('personalInfo'); // Access personal details as an array
        $course = Course::find($course_id);

        return view('payment.direct', compact('qrCode', 'token', 'invoiceNumber', 'transactionID', 'formData', 'course'));
    }

    public function addInvoiceCache($payment)
    {
        // Get the current timestamp
        $currentTimestamp = now()->timestamp;

        // Find and delete any expired cache entries with the "invoice_" prefix
        $expiredEntries = DB::table('cache')
            ->where('key', 'like', 'invoice_%')
            ->where('expiration', '<', $currentTimestamp)
            ->pluck('key');

        foreach ($expiredEntries as $key) {
            Cache::forget($key); // Delete each expired cache entry
        }

        // Add the new cache entry with a 15-minute expiration
        Cache::put('invoice_' . $payment->invoice_id, $payment->invoice_id, now()->addHours(24));
    }



        public function webhook(Request $request)
        {
            Log::info("Webhook connection established");

            $data = $request->json();

            if ($data) {
                Log::info("Invoice ID: " . $data->get('invoiceId'));
                Log::info("Status: " . $data->get('status'));
                $invoice_id = $data->get('invoiceId');
                $failure_reason = $data->get('failureReason', null);
                $status = $data->get('status') ?? Status::PENDING->value;

                // Retrieve the transaction
                $transaction = Transactions::where('invoice_id', $invoice_id)->firstOrFail();
                $transaction_id = $transaction->transaction_id;
                $email = $transaction->email;
                Log::info("Webhook Status Retrieved: " . $status);
                // Update transaction status and related fields
                $transaction->update([
                    'status' => $status,
                    'response' => $request->getContent(),
                    'failure_reason' => $failure_reason,
                    'updated_at' => now(),
                ]);

                try {
                    WebHook::updateOrCreate(
                        ['invoice_id' => $invoice_id],
                        [
                            'status' => $status,
                            'response' => $request->getContent(),
                            'failure_reason' => $failure_reason,
                            'update_date' => now(),
                            'transaction_id' => $transaction_id,
                            'ip_address' => $request->ip(),
                            'first_name' => $transaction->first_name,
                            'last_name' => $transaction->last_name,
                            'email' => $email,
                            'phone' => $transaction->phone,
                            'amount' => $data->get('amount', 0),
                            'course_id' => $transaction->course_id,
                        ]
                    );
                    Log::info("Webhook entry successfully updated or created for Invoice ID: " . $invoice_id);
                } catch (\Exception $e) {
                    Log::error("Error in WebHook updateOrCreate: " . $e->getMessage());
                    return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
                }
                // Check and update pending user status

                if (!$this->checkPendingUserStatus($transaction_id)) {
                    $this->updatePendingUserStatus($transaction_id, true);
                }

                // Send email based on payment status
                if ($status === Status::SUCCESS->value || $status === Status::FAILED->value) {
                    (new MailController)->sendPaymentStatusEmail($transaction, $status, $failure_reason);
                }
                return response()->json(['status' => 'received'], 200);
            }

        }



    public function saveUser(Request $request, $token) {

        $token = Crypt::decrypt($token);
        $email = $token['email'];
        $transaction_id = $token['transaction_id'];
        $invoiceId = Transactions::where('transaction_id', $transaction_id)->first();
        $course_name = Course::where('id', $request->course_id)->first() ?? "";
        $userExists = $this->checkUserExists($email);

        if (!$userExists) {
                // Step 1: Validate the request data
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'phone' => 'required|string|max:20',
                'password' => 'required|string|min:8|confirmed',
                'course_id' => 'required|integer|exists:courses,id', // Ensure course exists
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // Step 2: Use a transaction to ensure data consistency
            DB::beginTransaction();

            try {
                // Create the user
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'password' => Hash::make($request->password),
                    'role' => 'subscriber',
                    'status' => Status::COMPLETE->value,
                ]);

                // Fire the Registered event for any actions that follow user registration
                event(new Registered($user));

                // Log in the user
                Auth::login($user);
                $user_id = $user->id;

                // Set subscription dates
                $currentDate = Carbon::now();
                $plusOneYear = $currentDate->copy()->addYear();

                // Create the subscription
                Subscribtion::create([
                    'user_id' => $user_id,
                    'course_id' => $request->course_id,
                    'payment_status' => Status::COMPLETE->value,
                    'subscription_date' => $currentDate,
                    'expiry_date' => $plusOneYear,
                ]);



                // Commit the transaction
                DB::commit();

                $pendingUserStatus = $this->checkPendingUserStatus($transaction_id);
                if($pendingUserStatus) {
                    $this->updatePendingUserStatus($transaction_id, false);
                }

                // Redirect to the dashboard
                return redirect()->route('dashboard.courses')->with('success', 'Registration and subscription successful!');

            } catch (\Exception $e) {


                // Rollback the transaction in case of an error
                DB::rollBack();
                // Log the error message for debugging
                Log::error('User registration failed: '.$e->getMessage());
                $failure_reason = "An error occurred during registration. Please try again.";
                // Redirect back with an error message
                return view('payment.failure', ['invoiceId' => $invoiceId, 'failure_reason' => $failure_reason, 'course_name' => $course_name, 'course_id' => $request->course_id]);

            }
        } else {
            return redirect()->route('dashboard.courses')->with('success', 'Registration and subscription successful!');
        }

    }



}
