<?php
// app/Http/Controllers/PaymentController.php

namespace App\Http\Controllers;

use App\Services\MonopayService;
use App\Models\Transactions;
use App\Models\Course;
use App\Models\WebHook;
use App\Models\User;
use App\Models\PendingUser;

use Carbon\Carbon;

use SimpleSoftwareIO\QrCode\Facades\QrCode;


use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Crypt;

use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;



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
            'status' => 'pending',
        ];
        $amount = $coursePriceWithDiscount * 100;

        $token = $this->setupToken($cryptData);

        $callback = route('account.setup', ['token' => $token]);
        // Payload for Monobank API
        $payload = [
            "amount" => $amount,
            "ccy" => 980,
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
                'status' => 'pending',
            ]);

            // Redirect to the Monobank payment URL
            return redirect($invoiceUrl);
        } else {
            return back()->withErrors(['error' => 'Failed to create invoice.']);
        }
    }

    public function createPendingUser($data) {
        $transaction_id = $data['transaction_id'];
        $email = $data['email'];
        $invoice_id = $data['invoice_id'];
        $status = 1;
        $exists = PendingUser::where('email', $email)->exists();
        if (!$exists) {
            PendingUser::create([
                'email' => $email,
                'invoice_id' => $invoice_id,
                'transaction_id' => $transaction_id,
                'status' => $status,
            ]);
            return true; // Created
        } else {
            return false; // Not created exists
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

        $checkInvoice =  $this->getInvoiceStatus($request);

        $data = $checkInvoice['data'];
        $isSuccess = $data['status'];
        $failure_reason = $data['failure_reason'];
        $course_name = $data['course_name'];
        $course_id = $data['course_id'];

        if($isSuccess) {
            return redirect()->route('payment.success', ['invoiceId' => $invoiceId]);
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

            if($status === "success") {
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
            if($status === "failure") {

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

    public function success($invoiceId)
    {
        if($invoiceId) {

            $locale = session('locale', config('app.locale'));

            $transactionDetails = Transactions::where('invoice_id',$invoiceId)->firstOrFail();
            $first_name = $transactionDetails['first_name'];
            $last_name = $transactionDetails['last_name'];
            $phone = $transactionDetails['phone'];
            $email = $transactionDetails['email'];

            $course_id = $transactionDetails['course_id'];
            $course_name_locale = "course_name_" . $locale;
            $course_name = Course::where('id', $course_id)->value($course_name_locale);

            return view('payment.success', compact('course_name', 'invoiceId', 'email', 'first_name', 'last_name', 'phone', 'course_id'));

        }
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
                    'status' => 'pending',
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
            $invoice_id = $data->get('invoiceId');
            $failure_reason = $data->get('failureReason', null);
            $transaction = Transactions::where('invoice_id', $invoice_id)->first();

            WebHook::updateOrCreate(
                [
                    'invoice_id' => $invoice_id,  // Match by invoice_id only
                ],
                [
                    'status' => $data->get('status', 'pending'),
                    'response' => $request->getContent(),
                    'failure_reason' => $failure_reason,
                    'update_date' => now(),
                    'transaction_id' => $transaction->transaction_id,
                    'ip_address' => $request->ip(),
                    'first_name' => $transaction->first_name,
                    'last_name' => $transaction->last_name,
                    'email' => $transaction->email,
                    'phone' => $transaction->phone,
                    'amount' => $data->get('amount', 0),
                    'course_id' => $transaction->course_id,
                ]
            );

            // User create if not created
            $user_check = User::where('email',  $transaction->email)->exists();
            $randomPassword = Str::random(10);

            if(!$user_check &&  $transaction) {

                $user = User::create([
                    'name' => $transaction->first_name . " " . $transaction->last_name,
                    'email' => $transaction->email,
                    'password' => Hash::make($request->password),
                    'role' => 'subscriber',
                    'status' => 'complete',
                ]);

                event(new Registered($user));

                Auth::login($user);

                return redirect(route('dashboard', absolute: false));
            }

        }
    }


    public function saveUser(Request $request) {
      dd($request);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'subscriber',
            'status' => 'complete',
        ]);


        event(new Registered($user));

        Auth::login($user);

        $user_id = Auth::id();

        $currentDate = Carbon::now();
        $plusOneYear = (clone $currentDate)->addYear();
        $minusOneYear = (clone $currentDate)->subYear();
        $minusOneMonth = (clone $currentDate)->subMonth();

        DB::table('subscribtions')->insert([
            [
                'user_id' => $user_id,
                'course_id' => $request->course_id,
                'payment_status' => 'completed',
                'subscription_date' =>  now(),
                'expiry_date' => $plusOneYear,
                'created_at' => now(),
            ],
        ]);

        return redirect()->route('dashboard.courses');

    }



}
