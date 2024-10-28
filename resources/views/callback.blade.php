
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
        <div class="container">
            <div class="relative flex flex-col m-auto justify-center max-w-5xl p-6 divide-y-2 divide-blue-200">
                <!-- Display success or error messages -->
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @elseif (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
        </div>
    @endsection
