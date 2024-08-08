
@php
$locale = session('locale', 'uk');
@endphp
@extends('layouts.layout')
    @section('navigation')

        <div class="w-full bg-top_bar shadow-md">
            <nav class="md:max-w-3xl m-auto border-gray-200 dark:bg-gray-900 ">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <x-top-logo />
                <x-user-menu :currentLocale="$locale" />
                <x-menu />
                </div>
            </nav>
        </div>

    @endsection
    @section('content')
        @if (session('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
    @endif

        <x-personal-card />

        @foreach ($courses as $course)
            <x-course-card :href="route('course.index', ['course_id' => $course->id])" :course="$course" :locale="$locale" />
        @endforeach

    @endsection
