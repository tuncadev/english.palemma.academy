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
        <h1 class="text-2xl sm:mt-6 font-bold p-6 text-center text-gray-600">
            @lang('payment.direct_payment_h1')
        </h1>
        <p class="text-gray-800 text-center max-w-2xl m-auto mb-4">
            @lang('payment.direct_howto')
        </p>
        <div id="alert-additional-content-2" class="p-4 mb-4 text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
            <div class="flex items-center">
              <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
              </svg>
              <span class="sr-only">Info</span>
              <h3 class="text-lg font-medium uppercase">
                @lang('payment.important_note')<i class="fa-solid fa-envelope ml-4"></i>
            </h3>
            </div>
            <div class="mt-2 mb-4 text-sm text-left">
                @lang('payment.after_payment') <a href="mailto:sale@palemma.academy" class="text-sky-800 font-semibold">sale@palemma.academy</a>
            </div>
        </div>

        <x-empty-space :height="10" class="border-b border-b-sky-600" />
        <x-mono-account class="p-2" tableTextSize="text-xs" :transactionID="$transactionID" :invoiceNumber="$invoiceNumber" />
        <x-qr-code  class="p-2" :qrCode="$qrCode" />
    @endsection
