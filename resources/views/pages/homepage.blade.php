
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
