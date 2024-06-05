@extends('layouts.layout')

@section('content')

  <x-personal-card />

  @foreach ($courses as $course)
    <x-course-card :href="route('course.index', ['course_id' => $course->id])" :course="$course" :locale="$locale" />
  @endforeach

@endsection
