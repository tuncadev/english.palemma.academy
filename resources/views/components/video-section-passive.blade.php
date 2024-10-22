@props(['course_id', 'current_id'])
<li class="rounded-lg rounded-tl-none rounded-bl-none border-r-2 border-y-2 border-gray-200 bg-sky-100 mt-4">
    <div class="ms-6 py-3 flex flex-col items-center justify-center">
        <span class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-gray-700">
            <svg style="max-width: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/></svg>
        </span>
        <h3 class="font-medium leading-tight">Video Tutorials</h3>
        <a class="hover:bg-sky-400 tracked-component button_steps_sections mt-2 {{ Route::currentRouteName() === 'course.tutorials' ? 'bg-sky-200' : ' bg-white' }}" href="{{ route('course.tutorials', ['course_id' => $course_id, 'section_id' => $current_id]) }}">
            Видеоуроки
        </a>
    </div>
</li>
