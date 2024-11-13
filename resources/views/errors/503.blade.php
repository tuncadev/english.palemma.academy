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
            <!-- Main Card -->
            <div class="max-w-md mt-10 mx-auto w-full bg-white rounded-lg shadow-lg p-6 text-center">
                <div class="text-yellow-500 text-6xl mb-4">
                    <i class="fas fa-tools"></i>
                </div>
                <h1 class="text-3xl font-semibold text-gray-800 mb-2">Under Construction</h1>
                <p class="text-gray-600 mb-6">
                    We're currently working on something awesome. Please check back soon!
                </p>

                <div class="flex items-center justify-center space-x-4 mt-4">
                    <!-- Button for Contact or Return -->
                    <a href="/" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition">
                        <i class="fas fa-home mr-2"></i>Return to Home
                    </a>
                    <a href="/contact" class="bg-gray-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-lg transition">
                        <i class="fas fa-envelope mr-2"></i>Contact Us
                    </a>
                </div>
            </div>
        @endsection
