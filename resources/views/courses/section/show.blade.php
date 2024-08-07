
@php
$locale = session('locale', 'uk');
$currentLocale = session('locale', 'uk');
@endphp
@extends('layouts.layout')
    @section('content')
    @section('navigation')
    <div class="sm:ml-64">
        <div class="w-full bg-top_bar shadow-md">
            <nav class="md:max-w-3xl m-auto border-gray-200 dark:bg-gray-900 ">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <x-top-logo />
                <x-user-menu :currentLocale="$currentLocale" />
                <x-menu />
                </div>
            </nav>
        </div>
    </div>
    @endsection
    <div class="sm:ml-64">
        <div class="mt-2 rounded-lg">
           <div class="p-2 flex flex-col items-center justify-center mb-4 gap-6 rounded bg-gray-50 dark:bg-gray-800">
                <div class="flex w-full items-left">
                    <button data-drawer-target="cta-button-sidebar" data-drawer-toggle="cta-button-sidebar" aria-controls="cta-button-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">
                            @lang('sidebar.opensidebar')
                        </span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                        </svg>
                        <div class="ml-2 text-lg">
                            @lang('sidebar.allsections')
                        </div>
                    </button>
                </div>
                <x-steps-sidebar :current="$section_id" :allSections="$allSections" :locale="$locale" :completedSections="$completedSections" :course_id="$course_id" />
                <div class="flex w-full justify-center p-4 max-w-md flex-col items-end min-h-60 dsection rounded-lg border-gray-300 border shadow-lg">
                    <h1  id="top" class="text-xl">
                        {{ $courseName }} -
                    </h1>
                    <h2 class="{{$colorClass}} text-gray-200 text-xl font-bold  px-4 py-2 rounded-xl capitalize shadow-md">
                        {{ $section_id }} - {{ $sectionName }}
                    </h2>
                    <ul class="text-xs mt-4 max-w-80 list-outside {{$colorClass}}  p-4 rounded-xl shadow-md">
                        <li><i class="fa-solid fa-language mr-1" style="color: #e7e7e7;"></i>@lang('lesson.click')</li>
                        <li><i class="mr-2 fa-regular fa-circle-check mr-1" style="color: #e7e7e7;"></i>@lang('lesson.check')</li>
                        <li><i class="fa-solid fa-check-double mr-1" style="color: #e7e7e7;"></i>@lang('lesson.all_done')</li>
                    </ul>
                </div>

                <div id="warn" class="hidden max-w-3xl w-full  flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <div class="ms-3 text-sm font-medium">
                    @lang('lesson.not_checked')
                </div>
                </div>
                <form class="w-full max-w-3xl pb-20" id="phrases-form" action="{{ route('course.practice', ['course_id' => $course_id, 'section_id' => $section_id]) }}" method="GET" onsubmit="return validateForm()">
                    <ul class="md:grid md:grid-cols-2 md:gap-2">
                        @foreach ($localizedPhrases as $phrase)
                            <x-phrase-card :phrase="$phrase"  class="w-full text-gray-900"/>
                        @endforeach
                    </ul>
                    <div class="flex justify-between items-center">
                    <span id="score"></span>
                    <button type="submit" class="my-4 p-4 m-auto rounded-md text-white uppercase font-semibold w-btn_purple h-btn_purple bg-btn_purple  shadow-md m-auto">
                        @lang('lesson.next') <i class="fa-solid fa-circle-right"></i>
                    </button>
                    </div>
                </form>
           </div>
        </div>
     </div>


        <script>
        function toggleTranslation(id) {
            var element = document.getElementById('translation-' + id);
            if (element.style.display === 'none') {
                element.style.display = 'block';
            } else {
                element.style.display = 'none';
            }
        }

        function validateForm() {
            var checkboxes = document.querySelectorAll('.phrase-checkbox');
            var allChecked = true;
/*
            checkboxes.forEach(function(checkbox) {
                if (!checkbox.checked) {
                    allChecked = false;
                }
            });
            if (allChecked) {
              return true;
            } else {
              var warn = document.getElementById('warn');
              warn.style.display = 'flex';
              location.href = "#top";
              return false;
            }
*/
            return true
        }
        </script>
    @endsection
