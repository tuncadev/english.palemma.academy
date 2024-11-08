
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
    <div class="min-h-screen bg-blue-50 flex  justify-center p-6 items-start">
        <div class="flex flex-col">
            <x-personal-card />
            <h1 class="text-4xl font-bold text-blue-800 mb-6 text-center uppercase">
                @lang('menu.about')
            </h1>

            <div class="w-full max-w-4xl bg-white rounded-lg shadow-md p-8">
                <p class="text-center text-gray-700 mb-10">
                    @lang('general.about')
                </p>
            </div>
            <h2 class="text-center py-6 text-2xl font-semibold text-sky-600 uppercase">
                <i class="fa-solid fa-circle-down text-center mr-4"></i>@lang('dashboard.mycourses')<i class="ml-4 fa-solid fa-circle-down text-center"></i>
            </h2>

            @foreach ($courses as $course)
                @php
                    $subscribed = $course['subscribed'];
                    $href = $subscribed ? "dashboard.courses" : "course.index";
                @endphp
                <x-course-card :href="route($href, ['course_id' => $course->id])" :course="$course" :locale="$locale" />
            @endforeach
        </div>
    </div>
@endsection
