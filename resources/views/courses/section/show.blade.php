
@php
$locale = session('locale', 'uk');
$currentLocale = session('locale', 'uk');

@endphp

@auth
@extends('layouts.layout')
    @section('navigation')
    <div class="{{ $hasSubscription ? 'sm:ml-64' : ''}}">
        <div class="w-full bg-top_bar shadow-md">
            <nav class=" ">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <x-top-logo />
                <x-user-menu :currentLocale="$currentLocale" />
                <x-menu />
                </div>
            </nav>
        </div>
    </div>
    @endsection
    @section('content')

    @if ($hasSubscription)
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
                <div class="flex items-center text-gray-900 justify-between p-4 w-full flex-col md:flex-row items-start min-h-60 rounded-lg border-gray-300 border shadow-lg">
                    <div class="">
                        <h2 class="text-xl mb-2 max-w-48 font-bold text-sky-600 px-4">
                            {{$courseNameEn}}
                        </h2>
                        <p  id="top" class="px-4 mb-4 text-xl text-left">
                        Section {{ $section_id }} <br />
                        </p>
                        <h1 class="flex  border-sky-600 border rounded flex-col text-gray-900 text-gray-200  text-left font-bold  px-4 py-2 rounded-xl capitalize shadow-md">
                            <span class="font-bold text-2xl">{{$sectionNameEn}}</span>
                            <span class="font-bold"> {{ $sectionName }}</span>
                        </h1>

                        <ul class="text-xs mt-4 max-w-80 list-outside text-gray-900  p-4 rounded-xl shadow-md">
                            <li><i class="fa-solid fa-language mr-1 text-blue-900"></i>@lang('lesson.click')</li>
                            <li><i class="mr-2 fa-regular fa-circle-check mr-1 text-blue-900"></i>@lang('lesson.check')</li>
                            <li><i class="fa-solid fa-check-double mr-1 text-blue-900"></i>@lang('lesson.all_done')</li>
                        </ul>
                    </div>
                    <div class="max-w-96 rounded overflow-hidden shadow-lg">
                        <img class="max-h-full" src="{{asset('images/courses/c'.$course_id.'/s'. $section_id.'.jpg')}}" alt="{{$courseNameEn}}">
                    </div>
                </div>
                <div class="flex flex-row gap-x-4">
                    <button class="uppercase  button_steps_sections-top mt-2 {{ Route::currentRouteName() === 'course.show' ? 'bg-sky-200' : ' bg-white' }}" onclick="window.location.href='{{ route('course.show', ['course_id' => $course_id, 'section_id' => $section_id]) }}'">Phrasal Verbs</button>
                    <button class="uppercase button_steps_sections-top mt-2 {{ Route::currentRouteName() === 'course.practice' ? 'bg-sky-200' : ' bg-white' }}" onclick="window.location.href='{{ route('course.practice', ['course_id' => $course_id, 'section_id' => $section_id]) }}'">Practice</button>
                    <button class="uppercase button_steps_sections-top mt-2 {{ Route::currentRouteName() === 'course.quiz' ? 'bg-sky-200' : ' bg-white' }}" onclick="window.location.href='{{ route('course.quiz', ['course_id' => $course_id, 'section_id' => $section_id]) }}'">Quiz</button>
                </div>
                <div id="warn" class="hidden max-w-3xl w-full  flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <div class="ms-3 text-sm font-medium">
                    @lang('lesson.not_checked')
                </div>
                </div>

                <form onsubmit="return validateForm()" class="w-full max-w-3xl pb-20" id="phrases-form" >
                    <ul class="md:grid md:grid-cols-2 md:gap-2">
                        @foreach ($localizedPhrases as $phrase)
                            <x-phrase-card :phrase="$phrase"  class="w-full text-gray-900"/>
                        @endforeach
                    </ul>
                    <div class="flex justify-between items-center">
                    <span id="score"></span>
                    <button type="submit" class="my-4 p-4 text-sm m-auto rounded-md text-white uppercase font-semibold w-btn_purple h-btn_purple bg-btn_purple  shadow-md m-auto">
                        @lang('lesson.next')
                    </button>
                    </div>
                </form>
           </div>
        </div>
     </div>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('phrases-form');

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        document.body.classList.add('overflow-hidden');

        const overlay = document.getElementById('overlay');
        const spinner = document.getElementById('spinner');

        overlay.classList.remove('hidden');
        spinner.classList.remove('hidden');
        const checkboxes = document.querySelectorAll('.phrase-checkbox');
        const data = Array.from(checkboxes).map(checkbox => ({
            phrase_id: checkbox.id.replace('phrase-', ''),
            checked: checkbox.checked ? 1 : 0
        }));

        fetch('{{ route("course.savePhraseProgress", ["course_id" => $course_id, "section_id" => $section_id]) }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ phrases: data })
        }).then(response => response.json())
          .then(data => {
                console.log(data);
              if (data.success) {
                  window.location.href = '{{ route("course.practice", ["course_id" => $course_id, "section_id" => $section_id]) }}';
              } else {
                  alert('Failed to save progress. Please try again.');
              }
          });
    });
});


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
        <x-overlay />
        <x-spinner class="w-16 h-16" />
        @else
        <x-error-msg :message="'You haven\'t purchased the ' . $courseName .' course yet.'" />
        @endif
    @endsection
@else
    <script>
       document.addEventListener('DOMContentLoaded', function() {
          const modal = new Modal(document.getElementById('authentication-modal'));
          modal.show();
       });
      </script>
  @endauth
