@php
    $locale = session('locale', 'uk');
    $currentLocale = session('locale', 'uk');
@endphp
@extends('layouts.layout')
@auth
    @section('navigation')
        <div class="relative w-full bg-top_bar shadow-md">
            <x-nav :locale="$locale"  :currentLocale="$currentLocale" class="m-auto border-gray-200 dark:bg-gray-900" />
        </div>
        @endsection
        @section('content')
            @if ($hasSubscription)
            <div class="min-h-screen flex items-start justify-center bg-gray-100 dark:bg-gray-800 mt-8">
                <div class="bg-white dark:bg-gray-900 shadow-lg rounded-lg p-8 max-w-2xl text-center">
                    <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-4">
                        🎉 @lang('general.finish_title') 🎉
                    </h1>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                        @lang('general.finish_msg')
                    </p>

                    <div class="mb-4">
                        <p class="text-xl font-semibold text-gray-700 dark:text-gray-200">
                            Your Practice Score: <span class="text-blue-500">{{ $scores['practice'] }}</span>
                        </p>
                        <p class="text-xl font-semibold text-gray-700 dark:text-gray-200 mt-2">
                            Your Quiz Score: <span class="text-blue-500">{{ $scores['quiz'] }}</span>
                        </p>
                    </div>

                    <a href="{{ route('dashboard.courses') }}"
                       class="mt-6 inline-flex items-center px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium text-lg rounded-lg shadow transition duration-150">
                        <i class="fas fa-redo mr-2"></i>
                        @lang('general.start_over')
                    </a>
                </div>
            </div>
            @else
                <x-error-msg :message="'You haven\'t purchased the ' . $courseName .' course yet.'" />
            @endif
    @endsection
@else
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = new Modal(document.getElementById('authentication-modal'));
            modal.show();
        });
    </script>
@endauth
