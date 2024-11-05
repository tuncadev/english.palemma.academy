<?php
// app/Http/Controllers/PaymentController.php

namespace App\Http\Controllers;

use App\Services\MonopayService;
use App\Models\Transactions;
use App\Models\Course;
use App\Models\WebHook;
use App\Models\User;

use Carbon\Carbon;


use Illuminate\Validation\Rules;

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

    public function createInvoice(Request $request, $course_id)
    {
        $course = Course::findOrFail($course_id);
        $formData = $request->input('personalInfo'); // Access personal details as an array
        $amount = $course->course_price * 100; // Convert to minimal units
        $transactionID = Str::uuid()->toString();
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
            "redirectUrl" => route('payment.callback', ['transaction_id' => $transactionID]),
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

    public function callback(Request $request)
    {
       return $this->getInvoiceStatus($request);

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

    public function getInvoiceStatus(Request $request){

        $transactionID = $request->query('transaction_id');
        $transaction = Transactions::where('transaction_id', $transactionID)->firstOrFail();

        $payment = Transactions::where('transaction_id', $transactionID)->firstOrFail();

        $response = $this->monopayService->getInvoiceStatus($payment->invoice_id);
        $data = $response->json();
        $status = $data['status'];

        $failure_reason = $data['failureReason'] ?? null;

        if($status) {

            $transaction->update([
                'status' => $status,
                'response' => $response->body(),
                'failure_reason' => $failure_reason,
                'update_date' => now(),
            ]);

            if($status === "success") {

                $this->addInvoiceCache($payment);
                $invoiceId =  $data['invoiceId'];

                return redirect()->route('payment.success', ['invoiceId' => $invoiceId]);
            }
            if($status === "failure") {
                echo "Failure: " . $failure_reason;
            }
        }
    }

    public function webhook(Request $request)
{
    $data = $request->json();
    if ($data) {
        $invoice_id = $data->get('invoiceId');
        $failure_reason = $data->get('failureReason', null);

        WebHook::updateOrCreate(
            ['invoice_id' => $invoice_id],
            [
                'status' => $data->get('status', 'pending'),
                'response' => $request->getContent(),
                'failure_reason' => $failure_reason,
                'update_date' => now(),
                'transaction_id' => $data->get('transactionId', ''),
                'ip_address' => $request->ip(),
                'first_name' => $data->get('firstName', 'Unknown'),
                'last_name' => $data->get('lastName', 'Unknown'),
                'email' => $data->get('email', ''),
                'phone' => $data->get('phone', ''),
                'amount' => $data->get('amount', 0),
                'course_id' => $data->get('courseId'),
            ]
        );
    }

    // Return a JSON response to confirm receipt
    return response()->json(['status' => 'success', 'message' => 'Webhook processed successfully.']);
}


public function saveUser(Request $request) {
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ]);
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'password' => Hash::make($request->password),
        'role' => 'subscriber'
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

    return redirect()->route('course.index');

}



}
