<?php

namespace App\Mail;

use App\Enums\Status;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PaymentStatusMail extends Mailable
{
    use Queueable, SerializesModels;

    public $emailData;

    /**
     * Create a new message instance.
     */
    public function __construct($emailData)
    {
        $this->emailData = $emailData;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        $status = $this->emailData['status'] === Status::SUCCESS->value ? 'Payment Successful' : 'Payment Failed';
        return $this->subject($status)
                    ->view('emails.payment_status')  // Ensure this view exists
                    ->with('emailData', $this->emailData);
    }
}
