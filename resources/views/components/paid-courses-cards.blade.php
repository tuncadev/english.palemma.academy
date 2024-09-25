@php
    $active = $course->active == 1;
    $opacity = $active ? "opacity-100" : "opacity-50";
    $cursor = $active ? "hover:cursor-pointer" : "hover:cursor-default";
    $courseName = $course['course_name_' . $locale];
    $courseDescription = $course['course_description_' . $locale];
    $hidden = $active ? "" : "hidden";
    $courseNameEn = $course['course_name_en'];
@endphp

<div {{$attributes->merge(['data-href' => ''])}} onclick="navigateTo(this)" data-text="{{$badge}}" class="card-sticker card-sticker--{{$badgeClass}} {{$cursor }} hover:opacity-100 {{ $active ? 'opacity-90' : '' }}  relative  overflow-hidden border border-teal-300 rounded-lg">
  @if (!$active)
        <div class="flex absolute w-full p-2 font-bold text-rose-500 bg-red-500/50">
            <p class="bg-white px-2 rounded">
                вскоре
            </p>
        </div>
        <div class="stat absolute right-4 top-2">
            <i class="fa-solid fa-circle-minus"></i>
        </div>
  @else
    <div class="stat absolute right-4 top-4">
      <i class="fa-solid fa-fire" style="color: #fcd997;"></i>
    </div>
  @endif
    <div class="md:flex-row flex-col flex items-center justify-start">
        <img src="{{asset("images/course1.jpg")}}" class="w-full md:max-w-64 rounded md:m-2" />
        <div class="rounded w-full top bg-white p-4 {{ $opacity }}">
            <h1 class="font-bold text-gray-600 text-2xl">{{ $courseNameEn }}</h1>
            <h2 class="font-bold text-sky-900 text-2xl mb-2">{{ $courseName }}</h2>
            <p class="text-xs font-semibold text-sky-800">
                <i class="fa-solid fa-star mr-1 text-amber-200"></i>{{$course->totalPhrases}} phrases in {{$course->totalSections}} sections
            </p>
            <p class="text-xs font-semibold text-sky-800">
                <i class="fa-solid fa-star mr-1 text-amber-200"></i>{{$course->totalPractice}} practice questions
            </p>
            <p class="text-xs font-semibold text-sky-800">
                <i class="fa-solid fa-star mr-1 text-amber-200"></i>{{$course->totalQuiz}} quiz questions
            </p>
        </div>
    </div>
    <div class="w-11/12 m-auto mt-4 flex items-center gap-2">
        <div class="w-full bg-gray-200 rounded-full h-1.5 dark:bg-gray-700">
            <div class="bg-blue-600 h-1.5 rounded-full dark:bg-blue-500" style="width: {{$course->completionPercentage}}%"></div>
        </div>
        <span class="text-xs p-2 bg-green-200 rounded-lg font-semibold">{{$course->completionPercentage}}%</span>
    </div>
    <div class="w-full text-center">
        <p class="text-xs">{{ $course->completionPercentage > 0 ? __('general.completed') : __('general.not_started') }}</p>
    </div>
  <div class="bottom items-center flex flex-col md:flex-row gap-x-6 pt-4 px-4 pb-6 {{ $opacity }}">
    <div class="flex w-full justify-center md:justify-start items-center gap-2 text-gray-900 text-sm w-3/5">
      <img src="{{ asset('images/flagBlue.svg') }}" /> {{ date('Y-m-d', strtotime($course->subscribtionDate)) }}
      <img src="{{ asset('images/rightArrow.svg') }}" />
      <img src="{{ asset('images/flagGreen.svg') }}" /> {{ date('Y-m-d', strtotime($course->expiryDate)) }}
    </div>
    <div class="btn mt-3 w-2/5 flex items-center justify-center {{$hidden}}">
      <a {{$attributes->merge(['class' => 'font-bold bg-green-400 rounded-lg text-gray-900 py-2 px-6 hover:text-white hover:bg-blue-500', 'href' => ''])}}>
        @if ( $course->completionPercentage > 0 )
            @lang('general.continue')
        @else
            @lang('general.start')
        @endif
      </a>
    </div>
  </div>
</div>

<script>
    function navigateTo(element) {
    const href = element.getAttribute('data-href');
    if (href) {
        window.location.href = href;
    }
}
</script>
