@extends('layouts.layout')
@section('content')
  <div class="flex flex-col max-w-96 m-auto bg-[#E3EBFE] p-6 rounded-lg shadow-md">
      <div class="flex justify-between">
        <x-orange-bubble class="text-2xl font-semibold">
          @lang('general.course')
        </x-orant-bubble>
        <x-purple-bubble class="text-4xl font-semibold">
            {{ $course->course_name_en }}
        </x-purple-bubble>
      </div>
    <x-blue-gradient-box-up class="mt-4 p-8 text-gray-800 text-lg font-semibold">
      @lang('course1.section1_p')
    </x-blue-gradient-box-up>
    <x-purple-button>
        @lang('course1.join_btn')
    </x-purple-button>
    <img src="{{asset('images/emma/emma-01.png')}}" class="rounded-2xl shadow-md" alt="" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 50% 90%, 0 100%);">
    <x-orange-gradient-box-up class="p-8 text-md font-semibold">
      @lang('course1.section5_p')
    </x-orange-gradient-box-up>
  </div>
  <div class="bg-blue-200/50  p-4 relative flex flex-col mt-4 items-center rounded-xl overflow-show">
    <div id='vid_placeholder' class="bubble absolute -top-3 pl-2 pr-4 py-4 right-2 z-10">
      @lang('general.watch_video')
    </div>
    <div class="relative max-h-96 overflow-hidden rounded-xl mt-4">
      <img class="" src="{{asset('images/emma.jpg')}}" alt="Emma Video Placeholder">
      <div class="bg-white/60 absolute top-0 w-full h-full items-center justify-center flex inset-0 text-white">
        <i class="text-8xl fa-solid fa-play"></i>
      </div>
    </div>
    <div class="mt-4  rounded-xl">
      <p class="text-3xl max-w-96 m-auto uppercase font-semibold text-rose-800">
        @lang('course1.section2_h_1')
      </p>
      <p class="text-3xl max-w-96 m-auto uppercase  font-semibold text-blue-500">
        @lang('course1.section2_h_2')
      </p>
    </div>
  </div>
  <x-purple-gradient-box>
    <h2 class="text-lg font-semibold text-white p-2 mt-1">
      <i class="absolute text-gray-400 -top-4 left-44 text-3xl fa-solid fa-clipboard-question"></i>
      @lang('course1.section3_h')
    </h2>
    <p class="text-md text-gray-200 p-2">
      @lang('course1.section3_p')
    </p>
  </x-purple-gradient-box>
  <x-purple-button>
    @lang('course1.subscribe_btn')
  </x-purple-button>
  <h2 class="text-3xl font-bold uppercase text-center text-gray-500 p-2">
    @lang('course1.section4_h') {{-- What you get --}}
  </h2>

  <div class="flex flex-col max-w-96 m-auto rounded-lg ">
    <ul>
      <x-blue-gradient-box-up class="mt-4 text-gray-600">
        <i class="bg-green-700 text-gray-200 p-1 text-2xl rounded-md fa-solid fa-spell-check"></i>
        <li class="text-md text-gray-800 p-2">

          <span class="font-bold">
            @lang('course1.section4_li_1')&nbsp;
          </span>
          @lang('course1.section4_li_1_txt')
        </li>
      </x-blue-gradient-box-up>
      <x-blue-gradient-box-down class="text-gray-600">
        <i class="bg-red-700 text-gray-200 mt-2 p-1 text-2xl rounded-md fa-solid fa-spell-check"></i>
      <li class="text-md text-gray-800 p-2">
        <span class="font-bold">

          @lang('course1.section4_li_2')&nbsp;
        </span>
        @lang('course1.section4_li_2_txt')
      </li>
    </x-blue-gradient-box-down>
    <x-blue-gradient-box-up class="mt-4 text-gray-600">
      <i class="bg-blue-700 text-gray-200 p-1 text-2xl rounded-md fa-solid fa-spell-check"></i>
      <li class="text-md text-gray-800 p-2">
        <span class="font-bold">

          @lang('course1.section4_li_3')&nbsp;
        </span>
        @lang('course1.section4_li_3_txt')
      </li>
    </x-blue-gradient-box-up>
    </ul>
    <x-purple-button>
      @lang('course1.getpass_btn')
    </x-purple-button>

  </div>
@endsection
