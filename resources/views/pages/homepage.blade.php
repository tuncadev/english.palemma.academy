@extends('layouts.layout')

@section('content')

  <x-personal-card />

  @foreach ($courses as $course)
    <x-course-card :course="$course" :locale="$locale" />
  @endforeach

@endsection
