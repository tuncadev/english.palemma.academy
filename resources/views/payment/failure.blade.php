
@php
$locale = session('locale', 'uk');
@endphp
@extends('layouts.layout')
    @section('navigation')

        <div class="relative w-full bg-top_bar shadow-md">
            <x-nav :locale="$locale" />
        </div>

    @endsection

    @section('content')
        <div class="py-10 mt-10 max-w-4xl m-auto  flex items-center justify-center px-4">
            <div class="bg-white rounded-lg shadow-lg p-10 text-center">
                <i class="fa-solid fa-ban text-red-500 text-6xl mb-4"></i>
                <h1 class="text-2xl font-semibold mb-2">
                    {{ __('payment.bank_response') }}
                </h1>
                <p class="text-gray-700 leading-6">
                    <p>{{ $failure_reason }}</p>
                </p>
            </div>
        </div>
        <div class="flex text-center justify-center max-w-4xl m-auto">
            <p class="flex items-center text-center flex-col">
                <a href="javascript:history.back()" class="flex flex-row items-center justify-center w-56 py-2 rounded-lg mb-4 text-sm font-semibold text-white bg-[#6638dd] hover:bg-[#7955D4]">
                    @lang('payment.repeat') <i class="fa-solid fa-retweet ml-2"></i>
                </a>
                <a href="{{ route('course.index', ['course_id' => $course_id]) }}" class="mt-4 text-sm hover:text-amber-800 hover:font-semibold hover:bg-gray-200 px-6 py-3 rounded-lg">
                    <i class="fa-solid fa-circle-arrow-left"></i> @lang('payment.backto') <span class="text-sky-700 font-semibold">{{  $course_name }}</span>
                </a>
            </p>
        </div>
    @endsection
