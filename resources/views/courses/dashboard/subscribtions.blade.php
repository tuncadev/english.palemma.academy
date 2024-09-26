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

        <div class="py-6 ">
            <div class=" m-auto mx-auto">
                <div class="container mx-auto p-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="pb-4 p-y-4 text-xl text-red-700 uppercase font-bold">@lang('dashboard.courses')</h2>
                    <div class="flex flex-col gap-4 text-gray-900 dark:text-gray-100">

                    @foreach ($courses as $course)
                            @if ($course->hasSubscription)
                            @php $badge = "Available"; @endphp
                            @php $badgeClass = "badgeGreen"; @endphp
                                <x-paid-courses-cards :badgeClass="$badgeClass" :badge="$badge" :data-href="route('course.sections', ['course_id' => $course->id, 'section_id' => 1])" :course="$course" :locale="$locale" :href="route('course.sections', ['course_id' => $course->id, 'section_id' => 1])" :course="$course" :locale="$locale" />
                            @elseif ($course->pending)
                            @php $badge = "Pending"; @endphp
                            @php $badgeClass = "badgeOrange"; @endphp
                                <x-pending-courses-cards :badgeClass="$badgeClass" :badge="$badge" :course="$course" :locale="$locale" />
                            @elseif ($course->isExpired)
                            @php $badge = "Expired"; @endphp
                            @php $badgeClass = "badgeRed"; @endphp
                                <x-expired-courses-cards :badgeClass="$badgeClass" :badge="$badge" :course="$course" :locale="$locale" />
                            @else
                                <div class="p-4 max-w-96 m-auto">
                                    <div id="alert-additional-content-2" class="p-4 mb-4 text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
                                        <div class="flex items-center">
                                        <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                        </svg>
                                        <span class="sr-only">Info</span>
                                        <h3 class="text-lg font-medium">Ooops!</h3>
                                        </div>
                                        <div class="mt-2 mb-4 text-sm">
                                            You haven't purchased any courses yet.
                                        </div>
                                        <div class="flex">
                                        <button onclick="window.location.href='{{ route('home') }}'" type="button" class="text-white bg-red-800 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                            <svg class="me-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                            <path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                                            </svg>
                                            View courses
                                        </button>
                                        <button type="button" class="text-red-800 bg-transparent border border-red-800 hover:bg-red-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-red-600 dark:border-red-600 dark:text-red-500 dark:hover:text-white dark:focus:ring-red-800" data-dismiss-target="#alert-additional-content-2" aria-label="Close">
                                            Dismiss
                                        </button>
                                        </div>
                                    </div>
                                </div>
                            @endif

                    @endforeach
                </div>
                </div>
            </div>
        </div>




@endsection
