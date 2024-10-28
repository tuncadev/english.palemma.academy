<?php

namespace App\Http\Controllers;

use App\Services\PaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

use Exception;

use App\Models\Practice;
use App\Models\Section;
use App\Models\Score;
use App\Models\Course;
use App\Models\UserProgress;
use App\Models\Subscribtion;
use App\Models\Phrase;
use App\Models\Quiz;
use App\Models\CompletedSection;
use App\Models\Video;
use App\Models\Submission;

use App\Helpers\MonobankHelper;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class PaymentController extends Controller
{
    protected $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    /**
     * Handle the payment request form submission.
     */
    public function create(Request $request)
    {
        $monobankUrl = config('services.monobank.url');
        $token = config('services.monobank.token');
        $reference = Str::uuid()->toString();
        $expiryDate = str_replace('/', '', $request->input('cardData.exp'));

        $payload = [
            "amount" => 500,
            "ccy" => 980,
            "cardData" => [
                "pan" => str_replace(" ", "", $request->input('cardData.pan')),
                "exp" => $expiryDate,
                "cvv" => $request->input('cardData.cvv')
            ],
            "merchantPaymInfo" => [
                "reference" => $reference,
                "basketOrder" => [
                    [
                        "name" => "Phrasal Verbs",
                        "qty" => 1,
                        "sum" => 500,
                        "total" => 500,
                        "unit" => "шт.",
                        "code" => "d21da1c47f3c45fca10a10c32518bdeb"
                    ]
                ]
            ],
            "redirectUrl" => $request->input('redirectUrl'),
            "initiationKind" => "merchant",
        ];

        $headers = [
            "X-Token" => $token,
            "X-Cms" => "Laravel",
            "X-Cms-Version" => "1.0"
        ];

        try {
            $response = Http::withHeaders($headers)->post($monobankUrl, $payload);

            // Determine status and message based on the response
            $responseBody = $response->json(); // Get the full response as an associative array
            $status = $response->successful();
            $responseJson = json_encode($responseBody);

            if ($response->successful() && $responseBody['status'] === 'success' && empty($responseBody['failureReason'])) {
                $response_msg = $status ?  $responseJson : MonobankHelper::getErrorMessage($response->json()['errCode'] ?? null);
                $message = 'Payment created successfully.';
            } else {
                // Handle the failure using the failureReason
                $error  = MonobankHelper::getErrorMessage($response->json()['errCode'] ?? 'Unknown error');
                $message = "En error  occured: " . $error;
            }
            // Store the submission in the database
            Submission::create([
                'ip_address' => $request->ip(),
                'session_id' => session()->getId(),
                'form_data' => [
                    'first_name' => $request->input('personalInfo.first_name'),
                    'last_name' => $request->input('personalInfo.last_name'),
                    'email' => $request->input('personalInfo.email'),
                    'phonenumber' => $request->input('personalInfo.phonenumber'),
                    'amount' => $payload['amount'],
                    'reference' => $reference,
                    'last_four' => substr($request->input('cardData.pan'), -4),  // Last 4 digits only
                    'method' => 'Monobank',  // Example metadata
                ],
                'response_status' => $status,
                'response_message' => $message,
                'response_body' => $responseJson,
            ]);

            // Redirect based on the response success or failure
            return $status
                ? redirect()->route('payment.callback')->with('success', $message)
                : redirect()->route('payment.callback')->with('error', 'Error: ' . $message);

        } catch (Exception $e) {
            // Handle general exceptions and save in the database
            $message = 'An error occurred: ' . $e->getMessage();

            Submission::create([
                'ip_address' => $request->ip(),
                'session_id' => session()->getId(),
                'form_data' => [
                    'first_name' => $request->input('personalInfo.first_name'),
                    'last_name' => $request->input('personalInfo.last_name'),
                    'email' => $request->input('personalInfo.email'),
                    'phonenumber' => $request->input('personalInfo.phonenumber'),
                    'amount' => $payload['amount'],
                    'reference' => $reference,
                    'last_four' => substr($request->input('cardData.pan'), -4),  // Last 4 digits only
                    'method' => 'Monobank',  // Example metadata
                ],
                'response_status' => false,
                'response_message' => "NO",
            ]);

            return redirect()->route('payment.callback')->with('error', $response_msg);
        }
    }

    /**
     * Handle the Monobank callback (webhook).
     */
    public function handleCallback(Request $request)
    {

       // Get the data from the request
       $callbackData = $request->all();

       // Pass the callback data to the view for display
       return view('callback', compact('callbackData'));
    }

    public function showPaymentForm($course_id)
    {
        $locale = session('locale', config('app.locale'));
        $user_id = Auth::id();
        $allSections = Section::where('course_id', $course_id)->get();
        $completedSections = CompletedSection::where('user_id', $user_id)
                                          ->where('course_id', $course_id)
                                          ->pluck('section_id')
                                          ->toArray();
        $course = Course::where('id', $course_id)->firstOrFail();
        $course_price = Course::where('id', $course_id)->pluck('course_price')->first();
        $courseNameEn = $course->course_name_en;
        $subscription = Subscribtion::where('user_id', $user_id)
        ->where('course_id', $course_id)
        ->first();
        $course->localized_name = $course->{"course_name_" . $locale};


        $hasSubscription = $subscription && $subscription->payment_status === 'completed';
        return view('payment', compact('course', 'course_price', 'user_id', 'courseNameEn', 'course_id', 'completedSections', 'allSections', 'hasSubscription'));  // This corresponds to the payment.blade.php template
    }

}
