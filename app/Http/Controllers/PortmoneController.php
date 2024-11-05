<?php

// app/Http/Controllers/PortmoneController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PortmoneController extends Controller
{
    // app/Http/Controllers/PortmoneController.php

    public function sendTestRequest()
    {
        // Define the test URL for Portmone
        $portmoneUrl = "https://www.portmone.com.ua/gateway/";

        // Define the parameters
        $payload = [
            'payee_id' => 'YOUR_PAYEE_ID', // Replace with your actual payee ID
            'shop_order_number' => '123456', // Unique order number
            'bill_amount' => '1.50',         // Test amount in UAH
            'bill_currency' => 'UAH',        // Currency
            'description' => 'Test order for API connection',
            'success_url' => route('portmone.callback'), // Success URL
            'failure_url' => route('portmone.callback'), // Failure URL
            'lang' => 'uk',                  // Language
            'encoding' => 'UTF-8',           // Encoding
            'preauth_flag' => 'N',           // No preauthorization
        ];

        // Send the POST request
        $response = Http::asForm()->post($portmoneUrl, $payload);

        // Check if the response is HTML (based on content type or other indicators)
        $contentType = $response->header('Content-Type');
        $isHtml = strpos($contentType, 'text/html') !== false || strpos($response->body(), '<html') !== false;

        // Return a view based on the response type
        if ($isHtml) {
            return view('html_response', ['htmlContent' => $response->body()]);
        }

        return response()->json([
            'status' => $response->status(),
            'body' => $response->json() ?? $response->body(),
        ]);
    }

    public function handleCallback(Request $request)
    {
        // Capture the full response sent by Portmone
        $data = $request->all();

        // Check for a successful status (e.g., based on a field in the response, such as 'status')
        // Here we assume a 'status' field where "SUCCESS" means a successful payment
        $isSuccess = isset($data['status']) && $data['status'] === 'SUCCESS';

        // Return the appropriate view based on the payment result
        if ($isSuccess) {
            return view('success')->with('data', $data);
        } else {
            return view('failure')->with('data', $data);
        }
    }
}
