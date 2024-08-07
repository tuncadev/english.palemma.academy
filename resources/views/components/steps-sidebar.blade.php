@props(['course_id', 'allSections', 'locale', 'completedSections', 'current'])
<aside id="cta-button-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full p-12 bg-gray-50 dark:bg-gray-800 overflow-y-auto">
        <ol class="relative text-sm text-gray-500 border-s border-gray-200 dark:border-gray-700 dark:text-gray-400">
            @foreach ($allSections as $index => $mySection)
                @php
                    echo $mySection->id;
                    $colors = [
                        'bg-s_card-blue text-white',
                        'bg-s_card-gray text-gray-800',
                        'bg-s_card-green text-gray-200',
                        'bg-s_card-rose text-gray-200',
                        'bg-s_card-yellow text-gray-700',
                        'bg-s_card-sky text-gray-700',
                        'bg-s_card-white text-gray-200',
                    ];
                    $sectionColorClass = $colors[$index % count($colors)];
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
                <li class="mb-10 ms-6">
                    @if ($locked)
                        <x-locked-section  :name="$name" :id="$id" :course_id="$course_id" />
                    @elseif($current_section)
                        <x-current-section :class="$sectionColorClass" :name="$name" :id="$id" :course_id="$course_id" :current_id="$current" />
                    @elseif(!$current_section && !$locked)
                        <x-previous-section  :class="$sectionColorClass" :name="$name" :id="$id" :course_id="$course_id" :current_id="$current"/>
                    @endif
                </li>
            @endforeach
        </ol>
    </div>
</aside>
