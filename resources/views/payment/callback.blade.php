@php
$locale = session('locale', 'uk');
$currentLocale = session('locale', 'uk');
@endphp
@extends('layouts.layout')
@section('navigation')
    <div class="relative w-full bg-top_bar shadow-md">
        <x-nav :locale="$locale"  :currentLocale="$currentLocale" class="m-auto border-gray-200 dark:bg-gray-900" />
    </div>
    @endsection
@section('content')
<div class="container mx-auto p-4">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-xl font-bold text-green-600 mb-4">Payment Status</h2>

        <!-- Display Payment Status -->
        <div class="mb-4">
            <h3 class="text-lg font-semibold text-gray-700">Status: {{ ucfirst($payment->status) }}</h3>
            @if ($payment->failure_reason)
                <p class="text-red-600">Reason for failure: {{ $payment->failure_reason }}</p>
            @endif
        </div>

        <!-- Display User's Entered Information -->
        <div class="mb-4">
            <h3 class="text-lg font-semibold text-gray-700">Payment Information</h3>
            <ul class="text-sm text-gray-600">
                <li><strong>Invoice ID:</strong> {{ $payment->invoice_id }}</li>
                <li><strong>First Name:</strong> {{ $payment->first_name }}</li>
                <li><strong>Last Name:</strong> {{ $payment->last_name }}</li>
                <li><strong>Email:</strong> {{ $payment->email }}</li>
                <li><strong>Phone:</strong> {{ $payment->phone }}</li>
                <li><strong>Course ID:</strong> {{ $payment->course_id }}</li>
                <li><strong>Amount Paid:</strong> {{ number_format($payment->amount, 2) }} ₴</li>
            </ul>
        </div>

        <!-- Display Response Data from Monobank -->
        <div class="mb-4">
            <h3 class="text-lg font-semibold text-gray-700">Payment Response</h3>
            <pre class="bg-gray-100 p-3 rounded-lg text-gray-600">
                {{ json_encode($payment->response, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) }}
            </pre>
        </div>

        <div class="text-center">
            <a href="{{ url('/') }}" class="text-blue-500 hover:text-blue-700 underline">
                Return to Home
            </a>
        </div>
    </div>
</div>
@endsection
