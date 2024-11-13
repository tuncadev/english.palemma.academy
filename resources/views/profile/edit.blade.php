@php
$locale = session('locale', 'uk');
@endphp
@extends('layouts.app')
    @section('navigation')
        <div class="relative w-full bg-top_bar shadow-md">
            <x-nav :locale="$locale" />
        </div>
    @endsection
    @section('content')

            <h1 class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8 font-bold text-3xl text-gray-700 capitalize dark:text-gray-200 leading-tight">
                {{ __('profile.profile_settings') }}
            </h1>

            <div class="py-6">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        <div class="max-w-xl ">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>

                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>

                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>
            </div>
    @endsection
