@php
$locale = session('locale', 'uk');
$currentLocale = session('locale', 'uk');
@endphp
@extends('layouts.layout')
    @section('navigation')
            <div class="w-full bg-top_bar shadow-md">
                <nav class="md:max-w-3xl m-auto border-gray-200 dark:bg-gray-900 ">
                    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                    <x-top-logo />
                    <x-user-menu :currentLocale="$currentLocale" />
                    <x-menu />
                    </div>
                </nav>
            </div>
    @endsection
    @section('content')
    <div class="py-6 ">
        <div class="md:max-w-3xl m-auto mx-auto">
            <div class="container mx-auto p-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-gray-900 dark:text-gray-100">
                    @foreach ($courses as $course)
                    @php $active = $course->active == 1; @endphp
                        @if (!$active)
                            <x-paid-courses-cards :href="'javascript:void(0)'" :course="$course" :locale="$locale" />
                        @else
                            <x-paid-courses-cards :href="route('course.sections', ['course_id' => $course->id, 'section_id' => 1])" :course="$course" :locale="$locale" />
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
