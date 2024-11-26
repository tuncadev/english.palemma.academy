<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PaymentService
{
    protected $apiUrl;
    protected $token;

    public function __construct()
    {
        // Load the Monobank API details from config
        $this->apiUrl = config('services.monobank.base_url');
        $this->token = config('services.monobank.token');
    }

    /**
     * Create a payment request with Monobank.
     *
     * @param  int    $amount        The amount to charge (in minor units, e.g. kopecks for UAH)
     * @param  string $currency      Currency code (e.g., 'UAH')
     * @param  string $description   Description of the payment
     * @param  string $redirectUrl   The URL to redirect the user after payment
     * @param  string $callbackUrl   The URL for Monobank to send the webhook
     * @return array|false           Response data from Monobank or false on failure
     */
    public function createPayment($amount, $currency, $description, $redirectUrl)
    {
        // Prepare the request data
        $requestData = [
            'amount' => $amount, // Amount in minor units
            'currency' => $currency, // e.g., 'UAH'
            'description' => $description, // Payment description
            'redirectUrl' => $redirectUrl, // User will be redirected here after payment
        ];



        // Send the request to Monobank API
        $response = Http::withToken($this->token)
            ->post($this->apiUrl . 'personal/payment', $requestData);

        // Check if the response was successful
        if ($response->successful()) {
            return $response->json(); // Return the response as an array
        } else {
            // Log the error for debugging
            Log::error('Monobank API request failed', [
                'status' => $response->status(),
                'response' => $response->body(),
            ]);

            return false; // Return false on failure
        }
    }
}
