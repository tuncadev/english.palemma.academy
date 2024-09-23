@props(['course_id', 'allSections', 'locale', 'completedSections', 'current'])
<aside id="cta-button-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full p-12 bg-gray-50 dark:bg-gray-800 overflow-y-auto">
        <ol class="relative text-sm text-gray-500 border-l-2 border-gray-200 dark:border-gray-700 dark:text-gray-400">
            <li class="rounded-lg rounded-tl-none rounded-bl-none border-r-2 border-y-2 border-gray-200 bg-sky-100">
                <div class="ms-6 py-3">
                    <span class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-gray-700">
                        <svg style="max-width: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/></svg>
                    </span>
                    <h3 class="font-medium leading-tight">Introduction</h3>
                    <button class="button_steps_sections mt-2 {{ Route::currentRouteName() === 'course.coure_intro' ? 'bg-sky-200' : ' bg-white' }}" onclick=""> Course Intro</button>
                    <button class="button_steps_sections mt-2 {{ Route::currentRouteName() === 'course.course_instructions' ? 'bg-sky-200' : ' bg-white' }}" onclick="">Instructions</button>
                </div>
            </li>
            @foreach ($allSections as $index => $mySection)
                @php
                    $section_name = "section_name_" . $locale;
                    $name  = $mySection->$section_name;
                    $id = $mySection->id;
                    $current_section = false;
                    if ( $current == $id ) {
                        $current_section = true;
                    }
                    if ( !in_array($mySection->id - 1, $completedSections ) && $mySection->id != 1 ) {
                        $locked = true;
                    } else {
                        $locked = false;
                    }
                @endphp
                <li class="mt-4 mb-10 ms-6">
                    @if ($locked)
                        <x-locked-section  :name="$name" :id="$id" :course_id="$course_id" />
                    @elseif($current_section)
                        <x-current-section :name="$name" :id="$id" :course_id="$course_id" :current_id="$current" />
                    @elseif(!$current_section && !$locked)
                        <x-previous-section  :name="$name" :id="$id" :course_id="$course_id" :current_id="$current"/>
                    @endif
                </li>
            @endforeach
        </ol>
    </div>
</aside>
