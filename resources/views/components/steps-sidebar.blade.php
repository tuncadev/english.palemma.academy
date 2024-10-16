@props(['course_id', 'allSections', 'locale', 'completedSections', 'current', 'courseNameEn'])
<aside id="cta-button-sidebar" class="fixed top-0 left-0 z-40 w-64 h-full transition-transform -translate-x-full sm:translate-x-0 overflow-auto" aria-label="Sidebar">
    <div class="   p-6 bg-gray-50 dark:bg-gray-800 overflow-y-auto">
        <ol class="relative text-sm text-gray-500 border-l-2 border-gray-200 dark:border-gray-700 dark:text-gray-400">
            @php

                if ($current == 0) {
                    $introduction = true;
                } else {

                    $introduction = false;
                    $current = $current;
                }
            @endphp
            @if ( $introduction )
                <x-introduction-section-active  :course_id="$course_id" :current_id="$current" />
            @else
                <x-introduction-section-passive  :course_id="$course_id" :current_id="$current" />
            @endif
            @foreach ($allSections as $index => $mySection)
                @php
                    $section_name = "section_name_" . $locale;
                    $name  = $mySection->$section_name;
                    $section_en = $mySection->section_name_en;
                    $id = $mySection->id;
                    $current_section = false;
                    if ( $current == $id) {
                        $current_section = true;
                    }
                    if ( !in_array($mySection->id - 1, $completedSections ) && $mySection->id != 1 ) {
                        $locked = true;
                    } else {
                        $locked = false;
                    }
                @endphp
                    @if ($locked)
                        <x-locked-section :section_en="$section_en" :name="$name" :id="$id" :course_id="$course_id"  :courseNameEn="$courseNameEn" />
                    @elseif($current_section)
                        <x-current-section   :section_en="$section_en" :name="$name" :id="$id" :course_id="$course_id" :current_id="$current" :courseNameEn="$courseNameEn" />
                    @elseif(!$current_section && !$locked)
                        <x-previous-section :section_en="$section_en" :name="$name" :id="$id" :course_id="$course_id" :current_id="$current"  :courseNameEn="$courseNameEn" />
                    @endif
            @endforeach

        </ol>

    </div>
</aside>
<script>
    document.addEventListener('DOMContentLoaded', function() {

        const element = document.getElementById('cta-button-sidebar');
        const savedScrollPosition = localStorage.getItem('sidebarScrollPosition');
        console.log('position: ' + savedScrollPosition);
        if (element) {
            element.scrollTop =  savedScrollPosition - 270;
            localStorage.removeItem('sidebarScrollPosition');
        }

    });

        </script>
