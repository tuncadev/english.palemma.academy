@php
$locale = session('locale', 'uk');
$currentLocale = session('locale', 'uk');
@endphp
@extends('layouts.layout')
@section('navigation')
    <div class="relative w-full bg-top_bar shadow-md">
        <x-nav :locale="$locale"  :currentLocale="$currentLocale" class="m-auto border-gray-200 dark:bg-gray-900" />
    </div>
    @endsection
@section('content')
@php
    $courseNameLocale = 'course_name_'.$locale
@endphp
    <div class="mt-4 flex flex-col max-w-2xl m-auto bg-[#E3EBFE] p-4 rounded-lg shadow-md">
        <div class="flex max-w-96 m-auto justify-between items-center gap-4">
            <x-orange-bubble class="text-xl sm:text-2xl font-semibold">
            @lang('general.course')
            </x-orant-bubble>
            <x-purple-bubble class="text-2xl sm:text-4xl font-semibold">
                {{ $course->course_name_en }}
            </x-purple-bubble>
        </div>
        <x-blue-gradient-box-up class="max-w-96 mt-4 p-8 text-gray-800 text-lg font-semibold">
        @lang('course1.section1_p')
        </x-blue-gradient-box-up>
        <x-purple-button href="#subscribe">
            @lang('course1.join_btn')
        </x-purple-button>
        <div class="flex m-auto">
            <img src="{{asset('images/emma/emma-01.png')}}" class="rounded-2xl shadow-md" alt="" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 50% 90%, 0 100%);">
        </div>
        <x-orange-gradient-box-up class="max-w-96 m-auto p-8 text-md font-semibold">
            @lang('course1.section5_p')
        </x-orange-gradient-box-up>
    </div>
    <div class="bg-blue-200/50 max-w-2xl m-auto  p-4 relative flex flex-col mt-4 items-center rounded-xl overflow-show">
        <div id='vid_placeholder' class="bubble absolute -top-3 pl-2 pr-4 py-4 right-4 sm:right-44 z-10">
            @lang('general.watch_video')
        </div>
        <div class="relative max-h-96 max-w-96 m-auto  overflow-hidden rounded-xl mt-4">
            <img class="" src="{{ asset('images/emma/emma-video.png') }}" alt="Emma Video Placeholder">
            <div class="bg-white/60 absolute top-0 w-full h-full items-center justify-center flex inset-0 text-white cursor-pointer" data-modal-target="videoModal" data-modal-toggle="videoModal">
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
    {{-- Why you need --}}
    <div class="max-w-96 m-auto  p-4 relative flex flex-col mt-4 items-center ">
        <x-purple-gradient-box>
            <h2 class="text-lg font-semibold text-white p-2 mt-1">
                <i class="absolute text-gray-400 -top-4 left-1/2 transform -translate-x-1/2 text-3xl fa-solid fa-clipboard-question"></i>
                @lang('course1.section3_h')
            </h2>
            <p class="text-md text-gray-200 p-2">
                @lang('course1.section3_p')
            </p>
        </x-purple-gradient-box>
        <x-purple-button  href="#subscribe">
            @lang('course1.subscribe_btn')
        </x-purple-button>
        {{-- What you get --}}
        <h2 class="text-3xl font-bold uppercase text-center text-gray-500 p-2">
            @lang('course1.section4_h')
        </h2>
    </div>
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
                <i class="bg-red-700 text-gray-200 mt-4 p-1 text-2xl rounded-md fa-solid fa-spell-check"></i>
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

    </div>
    <!--  Subscribe -->
    <div id="subscribe" class=" max-w-96 relative shadow-md flex flex-col sm:max-w-xl m-auto rounded-lg border border-purple-500 p-6 mt-8 mb-6">
        <h2 class=" uppercase font-geometria font-black text-4xl sm:text-5xl text-sky-700 ">
            @lang('course1.course_name')
        </h2>
        <ul class="ml-6 mt-6">
            <li class="list-image-[url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMTIiIHZpZXdCb3g9IjAgMCAxNCAxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBmaWxsPSIjMzhiZGY4Ij48cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0xMy42ODUuMTUzYS43NTIuNzUyIDAgMCAxIC4xNDMgMS4wNTJsLTggMTAuNWEuNzUuNzUgMCAwIDEtMS4xMjcuMDc1bC00LjUtNC41YS43NS43NSAwIDAgMSAxLjA2LTEuMDZsMy44OTQgMy44OTMgNy40OC05LjgxN2EuNzUuNzUgMCAwIDEgMS4wNS0uMTQzWiIgLz48L3N2Zz4=)]">
                <span class="font-semibold text-amber-700">  {{ $phrases }} </span> -  <span class="font-semibold text-sky-800"> @lang('course1.phrasal_verbs')</span>
            </li>
            <li class="list-image-[url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMTIiIHZpZXdCb3g9IjAgMCAxNCAxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBmaWxsPSIjMzhiZGY4Ij48cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0xMy42ODUuMTUzYS43NTIuNzUyIDAgMCAxIC4xNDMgMS4wNTJsLTggMTAuNWEuNzUuNzUgMCAwIDEtMS4xMjcuMDc1bC00LjUtNC41YS43NS43NSAwIDAgMSAxLjA2LTEuMDZsMy44OTQgMy44OTMgNy40OC05LjgxN2EuNzUuNzUgMCAwIDEgMS4wNS0uMTQzWiIgLz48L3N2Zz4=)]">
               <span class="font-semibold text-amber-700"> {{ $practices }} </span> -  <span class="font-semibold text-sky-800"> @lang('course1.practice_questions') </span>
            </li>
            <li class="list-image-[url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMTIiIHZpZXdCb3g9IjAgMCAxNCAxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBmaWxsPSIjMzhiZGY4Ij48cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0xMy42ODUuMTUzYS43NTIuNzUyIDAgMCAxIC4xNDMgMS4wNTJsLTggMTAuNWEuNzUuNzUgMCAwIDEtMS4xMjcuMDc1bC00LjUtNC41YS43NS43NSAwIDAgMSAxLjA2LTEuMDZsMy44OTQgMy44OTMgNy40OC05LjgxN2EuNzUuNzUgMCAwIDEgMS4wNS0uMTQzWiIgLz48L3N2Zz4=)]">
                <span class="font-semibold text-amber-700"> {{ $quizes }} </span> -  <span class="font-semibold text-sky-800"> @lang('course1.quiz_questions') </span>
            </li>
            <li class="list-image-[url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMTIiIHZpZXdCb3g9IjAgMCAxNCAxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBmaWxsPSIjMzhiZGY4Ij48cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0xMy42ODUuMTUzYS43NTIuNzUyIDAgMCAxIC4xNDMgMS4wNTJsLTggMTAuNWEuNzUuNzUgMCAwIDEtMS4xMjcuMDc1bC00LjUtNC41YS43NS43NSAwIDAgMSAxLjA2LTEuMDZsMy44OTQgMy44OTMgNy40OC05LjgxN2EuNzUuNzUgMCAwIDEgMS4wNS0uMTQzWiIgLz48L3N2Zz4=)]">
                <span class="font-semibold text-amber-700"> {{ $videos }} </span> -  <span class="font-semibold text-sky-800"> @lang('course1.video_lessons') </span>
            </li>
        </ul>
        <div class="mt-8 flex flex-col flex-col-reverse sm:flex-row items-center justify-between">
            <button data-modal-target="payment-modal" data-modal-toggle="payment-modal"  type="button" class="text-center hover:cursor-pointer uppercase sm:px-2 px-6 py-4 rounded-lg hover:bg-violet-800 hover:shadow-md bg-violet-500 max-w-52 text-xl text-gray-100 font-bold ">
                @lang('general.buy') @lang('general.course')
            </button>
            <div class="  mb-6 rounded-lg">
                <span class="font-geometria font-black text-5xl uppercase font-geometria text-gray-600 sm:text-6xl">{{ $course->course_price }}&nbsp;</span><span class="text-orange-600  text-xl font-semibold">₴</span>
                <div class=" text-center rounded-lg">
                    <span class="font-geometria line-through font-geometria text-2xl text-gray-600">{{ ($course->course_price)+700 }}</span>&nbsp;<span class="text-orange-600  text-xl font-semibold">₴</span>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col max-w-xl m-auto rounded-lg p-6 mt-4 mb-6">
        <!-- Footer -->
    </div>
    <!-- Modal -->
    <div id="videoModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-2 w-full max-w-full md:max-w-full h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        {{$course->$courseNameLocale}} - {{ $course->course_name_en}}
                    </h3>
                    <button id="closeModalBtn" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="videoModal" >
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 space-y-6 flex justify-center">
                    <div class="video-container">
                        <video id="modalVideo" controls>
                            <source src="{{ url('video/welcome_' . $locale . '.webm') }}" type="video/webm">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-payment-pop :course="$course" :courseNameLocale="$course->$courseNameLocale" :price="$course->course_price" :invoice_number="$invoice_number" />
    <script>

        document.addEventListener('DOMContentLoaded', function () {
            const videoModal = document.getElementById('videoModal');
            const closeModalBtn = document.getElementById('closeModalBtn');
            const modalVideo = document.getElementById('modalVideo');

            closeModalBtn.addEventListener('click', function () {
                videoModal.classList.add('hidden');
                modalVideo.pause();
            });

            videoModal.addEventListener('click', function (event) {
                if (event.target === videoModal) {
                    videoModal.classList.add('hidden');
                    modalVideo.pause();
                }
            });

        });

    </script>
@endsection
