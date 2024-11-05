<?php
// app/Services/MonopayService.php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class MonopayService
{
    protected $baseUrl;
    protected $token;

    public function __construct()
    {
        $this->baseUrl = config('services.monobank.base_url');
        $this->token = config('services.monobank.token');
    }

    public function createInvoice($payload)
    {
        $response = Http::withHeaders([
            'X-Token' => $this->token,
            'X-Cms' => 'FOP ',
            'X-Cms-Version' => 'v1.0',
        ])->post($this->baseUrl . 'invoice/create', $payload);

        return $response;
    }

    public function getInvoiceStatus($invoiceId)
    {
        $response = Http::withHeaders([
            'X-Token' => $this->token,
            'X-Cms' => 'FOP',
            'X-Cms-Version' => 'v1.0',
        ])->get("{$this->baseUrl}invoice/status?invoiceId={$invoiceId}");

        return $response;
    }

}
