<?php

namespace App\Http\Controllers;

use App\Enums\Status;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\FormSubmission;
use App\Models\Transactions;
use App\Models\User;
use App\Mail\PaymentStatusMail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;

class MailController extends Controller
{
    public function setupToken($data) {
        $setupToken = Crypt::encrypt($data);
        return $setupToken;
    }

    /**
     * Handle and send form submission to admin email.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendForm(Request $request)
    {
        Log::info("sendForm initiated", ['request_data' => $request->all()]);

        $user_id = Auth::id() ?? "";
        $ipAddress = $request->ip();

        $messageData = [
            'name' => $request->name,
            'user_id' => $user_id,
            'ip' => $ipAddress,
            'email' => $request->email,
            'subject' => $request->subject,
            'userMessage' => $request->userMessage,
        ];

        // Save form submission
        $saveMessage = FormSubmission::create($messageData);
        Log::info("Form submission saved", ['message_data' => $messageData, 'saved' => $saveMessage]);

        // Send email notification to admin
        $sendEmail = $this->sendAdminNotificationEmail($messageData);
        Log::info("Admin notification email send status", ['send_status' => $sendEmail]);

        if ($saveMessage && $sendEmail) {
            Log::info("Form submitted and email sent successfully");
            return response()->json(['status' => 'success', 'message' => 'Form submitted and email sent successfully.']);
        } else {
            Log::error("Failed to submit form or send email", ['save_message' => $saveMessage, 'send_email' => $sendEmail]);
            return response()->json(['status' => 'error', 'message' => 'Failed to submit form or send email.'], 500);
        }
    }

    /**
     * Send an email notification to admin upon form submission.
     *
     * @param array $messageData
     * @return bool
     */
    public function sendAdminNotificationEmail(array $messageData)
    {
        $adminEmail = config('mail.admin_email', 'admin@example.com'); // Ensure this is configured in .env
        $fromEmail = config('mail.from.address'); // Use the authenticated email
        $userEmail = $messageData['email'] ?? config('mail.from.address');

        try {
            Mail::send('emails.admin_notification', $messageData, function ($message) use ($adminEmail, $messageData, $fromEmail, $userEmail) {
                $message->to($adminEmail)
                        ->from($fromEmail, config('mail.from.name', 'App Name')) // Static from email
                        ->replyTo($userEmail, $messageData['name'] ?? 'User') // User email as reply-to
                        ->subject("Contact Form from site:" . $messageData['subject'] ?? 'No Subject');
            });
            return true; // Email sent successfully
        } catch (\Exception $e) {
            Log::error("Failed to send admin notification email", ['error' => $e->getMessage()]);
            return false;
        }
    }

    /**
     * Send payment status email to user.
     *
     * @param Transactions $transaction
     * @param string $status
     * @param string|null $failureReason
     * @return void
     */



    public function sendPaymentStatusEmail(Transactions $transaction, string $status, ?string $failureReason = null)
    {
        Log::info("sendPaymentStatusEmail initiated", ['transaction_id' => $transaction->transaction_id, 'status' => $status]);

        $status = $transaction->status;
        $failureReason = $transaction->failure_reason;
        Log::info("sendPaymentStatusEmail initiated", ['transaction_id' => $transaction->transaction_id, 'status' => $status]);

        $cryptData = [
            'email' => $transaction->email,
            'transaction_id' => $transaction->transaction_id,
            'status' =>  $transaction->status,
            'email_verified' => true,
        ];
        $token = $this->setupToken($cryptData);
        $callback = route('payment.callback', ['token' => $token]);

        $emailData = [
            'status' => $status,
            'failureReason' => $failureReason,
            'transactionId' => $transaction->transaction_id,
            'callbackUrl' => $callback,
        ];

        try {
            Mail::to($transaction->email)->send(new PaymentStatusMail($emailData));
            Log::info("Payment status email sent", ['email' => $transaction->email, 'status' => $status]);
        } catch (\Exception $e) {
            Log::error("Failed to send payment status email", ['error' => $e->getMessage(), 'transaction_id' => $transaction->transaction_id]);
        }
    }
}


