<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MonopayService;
use App\Models\Transactions;
use App\Models\Course;
use App\Models\WebHook;
use App\Models\User;
use App\Models\FormSubmission;

use Carbon\Carbon;


use Illuminate\Validation\Rules;

use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class FormController extends Controller
{
    public function sendForm(Request $request) {
        $user_id = Auth::id() ?? "";
        $ipAddress = $request->ip();

        $messageData = [
            'name' => $request->name,
            'user_id' => $user_id ?? null,
            'ip' => $ipAddress ?? null,
            'email' => $request->email,
            'subject' => $request->subject,
            'userMessage' => $request->userMessage, // Use 'message' here
            'is_read' => false,
        ];


        $save_message = FormSubmission::create($messageData);

        $send_email = $this->sendEmail($messageData);

        if ($save_message && $send_email) {
            return response()->json(['status' => 'success', 'message' => 'Form submitted and email sent successfully.']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Failed to submit form or send email.'], 500);
        }
    }

    public function sendEmail(array $messageData) {

        $admin_email = config('mail.admin_email'); // Or set this as needed
        $user_email = $messageData['email'] ?? config('mail.from.address'); // Use user's email or default to the configured sender email

        Mail::send('emails.admin_notification', $messageData, function ($message) use ($admin_email, $messageData, $user_email) {
            $message->to($admin_email)
                    ->from($user_email, $messageData['name'] ?? 'User') // Set the user's email and name
                    ->subject($messageData['subject'] ?? 'No Subject');
        });

        return response()->json(['status' => 'Email sent successfully']);

    }
}
