@php
    $locale = session('locale', 'uk');
    $currentLocale = session('locale', 'uk');
@endphp
@auth
@extends('layouts.layout')
    @section('navigation')
    <div class="{{ $hasSubscription ? 'sm:ml-64' : ''}}">
        <div class="relative w-full bg-top_bar shadow-md">
            <x-nav :locale="$locale" :currentLocale="$currentLocale" />
        </div>
        </div>
    </div>
    @endsection
    @section('content')
        @if ($hasSubscription)
            <div class="sm:ml-64">
                <div class="mt-2 rounded-lg">
                    @php
                    if ( !in_array($section_id - 1, $completedSections ) && $section_id != 1 ) {
                        $locked = true;
                    } else {
                        $locked = false;
                    }
                     @endphp
                    <div class="p-2 flex flex-col items-center justify-center mb-4 gap-6 rounded {{ $locked ? "bg-gray-100" : "bg-gray-50" }} dark:bg-gray-800">
                        <x-sidebar-responsive />
                        <x-steps-sidebar :current="$section_id" :allSections="$allSections" :locale="$locale" :completedSections="$completedSections" :course_id="$course_id" :courseNameEn="$courseNameEn" />
                        @if (!$locked)
                            <div class="flex items-center text-gray-900 justify-between p-4 w-full flex-col md:flex-row items-start min-h-60 rounded-lg border-gray-300 border shadow-lg">
                                <div class="">
                                    <h2 class="text-xl mb-2 max-w-48 font-bold text-sky-600 px-4">
                                        {{$courseNameEn}}
                                    </h2>
                                    <p  id="top" class="px-4 mb-4 text-xl text-left">
                                    Section {{ $section_id }} <br />
                                    </p>
                                    <h1 class="flex  border-sky-600 border rounded flex-col text-gray-900 text-gray-200  text-left font-bold  px-4 py-2 rounded-t-xl rounded-t-xl rounded-b-none lg:rounded-xl md:rounded-t-xl md:rounded-b-none capitalize shadow-md">
                                        <span class="font-bold text-2xl">{{$sectionNameEn}}</span>
                                        <span class="font-bold"> {{ $sectionName }}</span>
                                    </h1>
                                    <div class="max-w-96 lg:hidden md:block rounded md:rounded-t-none rounded-t-none overflow-hidden shadow-lg">
                                        <img class="max-h-full lg:hidden md:block" src="{{asset('images/courses/c'.$course_id.'/s'. $section_id.'.jpg')}}" alt="{{$courseNameEn}}">
                                    </div>
                                    <ul class="text-xs mt-4 max-w-80 list-outside text-gray-900  p-4 rounded-xl shadow-md">
                                        <li><i class="fa-solid fa-language mr-1 text-blue-900"></i>@lang('lesson.click')</li>
                                        <li><i class="mr-2 fa-regular fa-circle-check mr-1 text-blue-900"></i>@lang('lesson.check')</li>
                                        <li><i class="fa-solid fa-check-double mr-1 text-blue-900"></i>@lang('lesson.all_done')</li>
                                    </ul>
                                </div>
                                <div class="max-w-96 rounded overflow-hidden shadow-lg">
                                    <img class="max-h-full hidden lg:block md:hidden" src="{{asset('images/courses/c'.$course_id.'/s'. $section_id.'.jpg')}}" alt="{{$courseNameEn}}">
                                </div>
                            </div>
                            <div class="flex flex-row gap-x-4">
                                <a class="uppercase  button_steps_sections-top mt-2 {{ Route::currentRouteName() === 'course.show' ? 'bg-sky-200' : ' bg-white' }}" href="{{ route('course.show', ['course_id' => $course_id, 'section_id' => $section_id]) }}">Phrasal Verbs</a>
                                <a class="uppercase button_steps_sections-top mt-2 {{ Route::currentRouteName() === 'course.practice' ? 'bg-sky-200' : ' bg-white' }}" href="{{ route('course.practice', ['course_id' => $course_id, 'section_id' => $section_id]) }}">Practice</a>
                                <a class="uppercase button_steps_sections-top mt-2 {{ Route::currentRouteName() === 'course.quiz' ? 'bg-sky-200' : ' bg-white' }}" href="{{ route('course.quiz', ['course_id' => $course_id, 'section_id' => $section_id]) }}">Quiz</a>
                            </div>
                            <div id="warn" class="hidden max-w-3xl w-full  flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800" role="alert">
                            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <div class="ms-3 text-sm font-medium">
                                @lang('lesson.not_checked')
                            </div>
                            </div>

                            <form onsubmit="return validateForm()" class="w-full max-w-3xl pb-20" id="phrases-form" method="GET">
                                <ul class="md:grid md:grid-cols-2 md:gap-2">
                                    @foreach ($localizedPhrases as $phrase)
                                        <x-phrase-card :phrase="$phrase"  class="text-sm w-full text-gray-900"/>
                                    @endforeach
                                </ul>
                                <div class="flex justify-between items-center">
                                <span id="score"></span>
                                <button type="submit" class="my-4 p-4 text-sm m-auto rounded-md text-white uppercase font-semibold w-btn_purple h-btn_purple bg-btn_purple  shadow-md m-auto">
                                    @lang('lesson.next')
                                </button>
                                </div>
                            </form>
                        @else
                        <i class="text-8xl text-pink-600 fa-regular fa-face-frown-open"></i>
                        <div id="alert-additional-content-1" class="p-4 mb-4 text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800" role="alert">
                            <x-alert-info :msg_header="__('course.section_locked_head')" :msg_text="__('course.section_locked_msg')" />
                            <div class="text-lg text-center font-semibold w-full items-center justify-center flex flex-col  gap-8">
                                <span class="text-sm  text-sky-900  bg-lime-200 max-w-52 text-center p-2 rounded shadow-md">
                                    <i class="fa-solid fa-caret-down"></i>
                                    @lang('course.available_sections')
                                    <i class="fa-solid fa-caret-down"></i>
                                </span>

                                <div class="p-4">
                                    @foreach ($unlockedSections as $section)
                                        <x-sections-card :isUnlocked="1" :course_id="$course_id" :section_id="$section->id" :section_name_en="$section->section_name_en" :section_name="$section->localized_name" />
                                    @endforeach
                                </div>
                            </div>
                        @endif
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


