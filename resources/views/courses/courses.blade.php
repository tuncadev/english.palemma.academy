@extends('layouts.courses')
@section('content')
  <div class="contents">
    <div class="bg-s_card-blue/50 rounded-lg p-6 shadow-md"  style="background: url('{{asset('images/bg/wave.jpg')}}'); background-size:cover">
      <h2 class="p-4 font-semibold text-2xl max-w-24 bg-red-400 rounded-lg shadow-md">@lang('general.course')</h2>
      <h1 class="text-4xl font-semibold p-4 bg-white/75 mt-4 rounded-lg shadow-inner shadow-md">{{ $courseName }}</h1>
    </div>
    <p class="max-w-96 m-auto p-2 text-center text-lg">@lang('course1.course_desc')</p>
  </div>
  <div class="bg-blue-200/50  p-4 relative flex flex-col mt-4 items-center rounded-xl overflow-show">
    <div id='vid_placeholder' class="bubble absolute -top-8 pl-2 pr-4 py-4 right-2 z-10">
      @lang('general.watch_video')
    </div>
    <div class="relative max-h-96 overflow-hidden rounded-xl">
      <img class="" src="{{asset('images/emma.jpg')}}" alt="Emma Video Placeholder">
      <div class="bg-white/60 absolute top-0 w-full h-full items-center justify-center flex inset-0 text-white">
        <i class="text-8xl fa-solid fa-play"></i>
      </div>
    </div>
    <div class="mt-4  rounded-xl">
      <p class="text-3xl max-w-96 m-auto uppercase font-semibold text-rose-800">@lang('course1.text_1')</p>
      <p class="text-3xl max-w-96 m-auto uppercase  font-semibold text-blue-500">@lang('course1.text_2')</p></div>
  </div>
@endsection
