@props(['href', 'course', 'locale'])
@php
    $active = $course->active == 1;
    $opacity = $active ? "opacity-100" : "opacity-50";

    $courseName = $course['course_name_' . $locale];
    $courseDescription = $course['course_description_' . $locale];
    $courseNameEn = $course['course_name_en'];
    $hidden = $active ? "" : "hidden";
    $subscribed = $course['subscribed'] ? "general.start" : "general.more";
@endphp

<div class="cursor-default  mb-4 hover:opacity-100 {{ $active ? 'opacity-90' : '' }} container relative flex flex-col m-auto overflow-hidden border border-teal-300 rounded-lg max-w-md">
  @if (!$active)
    <div class="flex p-2 font-bold text-rose-500 bg-blue-500/50">
      <p class="bg-white px-2 rounded">
        вскоре
      </p>
    </div>
    <div class="stat absolute right-4 top-4">
      <i class="fa-solid fa-circle-minus"></i>
    </div>
  @else
    <div class="stat absolute right-4 top-4">
      <i class="fa-solid fa-fire" style="color: #fcd997;"></i>
    </div>
  @endif
  <div class="top bg-blue-500 pt-10 pb-5 px-4 {{ $opacity }}">
    <h1 class="font-bold text-gray-200 text-2xl">{{ $courseNameEn }}</h1>
    <h2 class="font-bold text-white text-4xl mb-6">{{ $courseName }}</h2>
    @if ($course->totalSections > 0)
        <div class="flex flex-col flex-wrap content-center justify-center gap-x-4 text-xs text-gray-900">
        <span><i class="fa-regular fa-circle-check mr-4" style="color: #B197FC;"></i>  Total of {{$course->totalSections}} sections</span>
        <span><i class="fa-regular fa-circle-check mr-4" style="color: #97d4fc;"></i> {{$course->totalPhrases}} phrases in {{$course->totalSections}} sections</span>
        <span><i class="fa-regular fa-circle-check mr-4" style="color: #97fca4;"></i> {{$course->totalPractice}} practice questions</span>
        <span><i class="fa-regular fa-circle-check mr-4" style="color: #fcd997;"></i> {{$course->totalQuiz}} quiz questions</span>
        </div>
    @endif
  </div>
  <div class="bottom flex flex-row gap-x-6 pt-4 px-4 pb-6 {{ $opacity }}">
    <div class="text-gray-900 text-sm w-3/5">
      {{ $courseDescription }}
    </div>
    <div class="btn w-2/5 flex items-center justify-center {{$hidden}}">
      <a {{$attributes->merge(['class' => 'font-bold bg-green-400 rounded-lg text-gray-900 py-2 px-4 text-sm hover:text-white hover:bg-blue-500'])}} href="{{ $href }}">
        @lang("$subscribed")
      </a>
    </div>
  </div>
</div>
