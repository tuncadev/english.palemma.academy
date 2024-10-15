@auth
@php
$locale = session('locale', 'uk');
$currentLocale = session('locale', 'uk');
@endphp
@extends('layouts.layout')
    @section('navigation')
        <div class="relative w-full bg-top_bar shadow-md">
            <x-nav :locale="$locale" :currentLocale="$currentLocale" />
        </div>
    @endsection
    @section('content')
        @if ($hasSubscription)
        <div class="flex flex-col text-center w-full justify-center pb-4 border-b-2 border-gray-300 m-auto pt-6">
            <div class="flex items-center md:flex-row  text-center flex-col shadow-md px-4 py-8 justify-center">
                <h1 class="w-full md:text-left text-center  p-2 rounded-md text-rose-500 text-xl md:text-3xl font-bold">
                {{$courseNameEn}} | <span class="text-amber-500">{{ $courseName }}</span>
                </h1>
                <p class="flex">
            Description about the course. What it aims, who it is for, what will the user gain after complating....
            </p>
            </div>

            <div id="alert-border-1" class="mt-4 flex items-center p-4 mb-4 text-blue-800 border-t-4 border-blue-300 bg-blue-50 dark:text-blue-400 dark:bg-gray-800 dark:border-blue-800" role="alert">
            <div class="flex flex-col gap-y-2">
                <div class="flex w-full">
                <i class=" fa-solid fa-lock text-red-600"></i>
                <div class=" ms-3 text-sm font-medium text-left">
                    <strong>@lang('lesson.locked-first')</strong>@lang('lesson.locked-second')
                </div>
                </div>
                <div class="flex w-full">
                <i class=" font-bold text-green-700 fa-regular fa-square-check"></i>
                <div class=" ms-3 text-sm font-medium text-left">
                    <strong>@lang('lesson.completed')</strong>
                </div>
                </div>
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-1" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
            </div>

            <div class="grid grid-cols-1 gap-6 justify-items-center md:pt-4 ">
            @foreach ($localizedSections as $index => $section)
                @php
                    $howManyDone = DB::table('user_progress')
                        ->where('user_id', $user_id)
                        ->where('course_id', $course_id)
                        ->where('section_id', $section['id'])
                        ->whereNull('phrase_id')
                        ->where(function ($query) {
                            $query->where('dropdown_value', '!=', "")
                                ->orWhere('input_value', '!=', "");
                        })
                        ->count();

                    $percentage = ($howManyDone / 20) * 100;

                // dd(  $howManyDone . " | ". $percentage . " | ". $user_id . " | " . $course_id ." | ". $section['id']);
                    $isCompleted = in_array($section['id'], $completedSections);
                    $isUnlocked = $isCompleted || $section['id'] == 1 || in_array($section['id'] - 1, $completedSections);

                @endphp

                @if($isUnlocked)
                    <a href="{{ route('course.show', ['course_id' => $course_id, 'section_id' => $section['id']]) }}"
                    class="w-full flex flex-col sm:flex-row relative btn btn-primary course-card py-3 px-2 md:px-6 md:py-4">
                        <img src="{{asset('images/courses/c'.$course_id.'/s'.$section['id'].'.jpg')}}" class="max-w-40 sm:max-w-48 rounded shadow-lg" alt="Section {{$section['en']}}">
                        <div class="w-full block md:text-left text-gray-900 shadow-secondary-1 {{ $isUnlocked ? 'opacity-100' : 'opacity-50' }}">
                            <div class="p-6">
                                <h5 class="mb-2 justify-around md:justify-between text-xs md:text-xl font-semibold leading-tight">
                                    <span class=text-sky-900>{{$section['id']}}. {{$section['en']}} </span>|  <span>{{ $section['section_name']}}</span>
                                </h5>
                                <p class="text-[9px] sm:text-xs flex flex-col ">
                                    <span class="text-amber-600">| {{  $section['totalPhrasesInSection']  }} phrases |</span>
                                    <span class="text-emerald-700">| {{  $section['totalPracticeInSection']  }} practice questions |</span>
                                    <span class="text-indigo-700">| {{  $section['totalQuizInSection']  }}  quiz question |</span>
                                </p>
                            </div>
                        </div>
                        <div class="set-size charts-container">
                            @if ($percentage === 0 &&  $howManyDone <20 )
                                <x-0-percent />
                            @elseif ($percentage <= 15)
                                <x-15-percent />
                            @elseif ($percentage <= 30)
                                <x-30-percent />
                            @elseif ($percentage <= 45)
                                <x-45-percent />
                            @elseif ($percentage <= 60)
                                <x-60-percent />
                            @elseif ($percentage <= 75)
                                <x-75-percent />
                            @elseif ($percentage <= 90)
                                <x-90-percent />
                            @elseif ($percentage <= 100 OR $howManyDone >= 20 )
                                <x-checkmark-circle />
                            @else
                                <x-checkmark-circle />
                            @endif
                        </div>
                    </a>
                @else
                <div class="c_container relative w-full flex relative btn btn-primary course-card px-2 md:px-6 md:py-4">
                    <img src="{{asset('images/courses/c'.$course_id.'/s'.$section['id'].'.jpg')}}" class="{{ $isUnlocked ? 'opacity-100' : 'opacity-50' }} max-w-40 sm:max-w-48 rounded shadow-lg" alt="Section {{$section['en']}}">
                    <div class="w-full block text-left text-gray-900 shadow-secondary-1 {{ $isUnlocked ? 'opacity-100' : 'opacity-50' }}">
                        <div class="p-6">
                            <h5 class="mb-2 text-xs md:text-xl font-semibold leading-tight">
                                <span class=text-sky-900>{{$section['id']}}. {{$section['en']}} </span>|  <span>{{ $section['section_name']}}</span>
                            </h5>
                        </div>
                    </div>
                    <div class="set-size charts-container">
                    </div>
                </div>
                @endif

            @endforeach
            </div>
        </div>
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
