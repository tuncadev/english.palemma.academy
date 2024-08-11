@php
$locale = session('locale', 'uk');
$currentLocale = session('locale', 'uk');
@endphp
@auth
  @extends('layouts.layout')
    @section('navigation')
    <div class="{{ $hasSubscription ? 'sm:ml-64' : ''}}">
        <div class="w-full bg-top_bar shadow-md">
            <nav class="md:max-w-3xl m-auto border-gray-200 dark:bg-gray-900 ">
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
        @php
        $sectionColors = [
            '1' => 'bg-s_card-blue text-white',
            '2' => 'bg-s_card-gray text-gray-800',
            '3' => 'bg-s_card-green text-gray-200',
            '4' => 'bg-s_card-rose text-gray-200',
            '5' => 'bg-s_card-yellow text-gray-700',
            '6' => 'bg-s_card-sky text-gray-700',
            '7' => 'bg-s_card-white text-gray-200',
        ];

        $colorClass = $sectionColors[($section['id'] - 1) % count($sectionColors) + 1];
        @endphp
        <div class=" sm:ml-64">
            <div class="mt-4 rounded-lg">
                <div class="p-2 flex flex-col items-center justify-center mb-4 gap-6 rounded bg-gray-100 dark:bg-gray-800">
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
                    <div class="flex w-full justify-center p-4 max-w-md flex-col items-end min-h-60 dsection rounded-lg border-gray-300 border shadow-lg">
                        <h1 class="text-xl">
                        {{ $courseName }}

                        </h1>
                        <h1 class="text-4xl px-4 py-1 bg-green-200 rounded-xl mb-2 shadow-md">
                            @lang('lesson.practice')
                        </h1>
                        <h2 class="text-2xl font-bold bg-blue-600/25 px-4 py-2 rounded-xl capitalize shadow-md">
                            {{ $section_id }} - {{ $sectionName }}
                        </h2>
                        <div class="flex items-center gap-x-5 justify-between mt-4 max-w-80 bg-blue-200 p-4 rounded-xl shadow-md">
                            <i class="text-4xl text-red-600 fa-solid fa-triangle-exclamation"></i>
                            <ul class="text-xs list-outside ">
                            <li><i class="fa-regular fa-thumbs-up mr-2" style="color: #2583cb;"></i>@lang('practice.s1-rule-1')</li>
                            <li><i class="fa-regular fa-thumbs-down mr-2" style="color: #2583cb;"></i>@lang('practice.s1-rule-2')</li>
                            <li><i class="fa-solid fa-check-double mr-1" style="color: #2583cb;"></i>@lang('practice.s1-rule-3')</li>
                            </ul>
                        </div>
                    </div>
                    @if ($highestPracticeScore > 0)
                        <div class="alert alert-info flex items-center">
                            <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400">
                            @lang('practice.highest')
                            </span>
                            <span class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-yellow-300 border border-yellow-300">
                            {{ $highestPracticeScore }}
                            </span>
                            <i class="fa-solid text-blue-600 fa-arrow-right mr-2"></i>
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">
                            {{ $update_at }}
                            </span>
                        </div>
                    @endif
                    <div class="flex flex-row gap-x-4">
                        <button class="button_steps_sections-top mt-2 {{ Route::currentRouteName() === 'course.show' ? 'bg-sky-200' : ' bg-white' }}" onclick="window.location.href='{{ route('course.show', ['course_id' => $course_id, 'section_id' => $section_id, 'colorClass' => $colorClass]) }}'">Phrasal Verbs</button>
                        <button class="button_steps_sections-top mt-2 {{ Route::currentRouteName() === 'course.practice' ? 'bg-sky-200' : ' bg-white' }}" onclick="window.location.href='{{ route('course.practice', ['course_id' => $course_id, 'section_id' => $section_id, 'colorClass' => $colorClass]) }}'">Practice</button>
                        <button class="button_steps_sections-top mt-2 {{ Route::currentRouteName() === 'course.quiz' ? 'bg-sky-200' : ' bg-white' }}" onclick="window.location.href='{{ route('course.quiz', ['course_id' => $course_id, 'section_id' => $section_id, 'colorClass' => $colorClass]) }}'">Quiz</button>
                    </div>
                    <div id="top" class="w-full md:w-10/12 flex p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <span class="sr-only"></span>
                        <div>
                        @lang('lesson.choose')
                        </div>
                    </div>
                    <div id="warn" class="hidden w-full md:w-10/12 flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800" role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <div class="ms-3 text-sm font-medium">
                        @lang('lesson.not_filled')
                        </div>
                    </div>
                    <form name="practice-form" class="w-full md:w-10/12 pb-20" id="practice-form" >
                        @csrf
                        <input type="hidden" name="practice_score" id="practice_score" >
                        <input type="hidden" name="type" value="practice">
                        <ul>
                            @php
                                $qnum = 1;
                            @endphp
                            @php
                            $dropdownValues = [];
                            if( is_array($dropdownVals) && !empty($dropdownVals) ) {
                                foreach ($dropdownVals as $key => $value) {
                                    if (is_array($value) && count($value) > 1) {
                                        // If it's an array with more than one item, add each item separately
                                        foreach ($value as $subKey => $subValue) {
                                            $dropdownValues[$subKey] = [$subKey => $subValue];
                                        }
                                    } else {
                                        // Otherwise, just add the original key-value pair
                                        $dropdownValues[$key] = $value;
                                    }
                                }
                            }
                            @endphp
                            @foreach ($questions as $index => $question)

                            @php

                                $id = $question->id;
                                $options = json_decode($question->answers, true); // Convert JSON string to array
                                shuffle($options);

                                $questionText = $question->question;
                                $underscoreCount = substr_count($questionText, '_');

                                if ($underscoreCount === 2) {
                                    // Split the question text into parts
                                    $parts = explode('_', $questionText);

                                    // Generate the options for the two dropdowns
                                    $firstOptions = array_map(function($option) {
                                        $words = explode(' ', $option);
                                        return $words[0];
                                    }, $options);

                                    $secondOptions = array_map(function($option) {
                                        $words = explode(' ', $option);
                                        $secondPart = isset($words[2]) ? $words[1] . " " . $words[2] : (isset($words[1]) ? $words[1] : "");
                                        return $secondPart;
                                    }, $options);
                                    // Generate the question HTML with two select components
                                    $questionText = $parts[0] .
                                                    view('components.practice-select', ['dropdownValues' => $dropdownValues[(int)($id . "1")][(int)($id . "1")] ?? '', 'id' =>  (int)($id . "1"), 'options' => $firstOptions, ])->render() .
                                                    $parts[1] .
                                                    view('components.practice-select', ['dropdownValues' => $dropdownValues[(int)($id . "2")][(int)($id . "2")] ?? '', 'id' =>  (int)($id . "2"), 'options' => $secondOptions])->render() .
                                                    $parts[2];

                                } else {
                                    $selectComponent = view('components.practice-select', compact('dropdownValues', 'id', 'options'))->render();
                                    $questionText = str_replace('_', $selectComponent, $questionText);
                                }

                                $localizedQuestion = $localizedQuestions[$index]['localizedQuestion'] ?? '';

                            @endphp
                            <li class="p-6 bg-white phrase_card rounded-lg w-full mb-2">
                                <div class="flex justify-between divide-gray-800/25 divide-x">
                                    <div class="pr-2 text-sm">
                                        {{ $qnum }}. {!! $questionText !!}
                                    </div>
                                    <div class="flex items-center pl-2">
                                        <a data-tooltip-target="tooltip-left-{{ $id }}" data-tooltip-placement="left" href="javascript:void(0);" onclick="toggleTranslation({{ $id }})" class="r-0 text-gray-800 text-xs flex flex-col items-center hover:text-blue-800">
                                            <i class="fa-solid fa-language mr-1"></i>
                                            @lang('lesson.translate')
                                        </a>
                                        <div id="tooltip-left-{{ $id }}" role="tooltip" class="text-yellow-300 absolute z-10 invisible inline-block px-2 py-1 text-xs font-medium bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                            -1 @lang('lesson.point')
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                    </div>
                                </div>
                                <div id="translation-{{ $id }}" style="display: none;" class="bg-gray-100 rounded p-2 mt-2 text-sm">
                                    <p class="text-gray-800"><i class="fa-solid fa-circle-arrow-right mr-2"></i>{{ $localizedQuestion }}</p>
                                </div>
                            </li>
                            @php
                                $qnum += 1;
                            @endphp
                        @endforeach
                        </ul>
                        <span class="" id="score"></span>
                        <div class="flex flex-col md:flex-row gap-y-4 md:justify-between items-center mt-4">
                            <button id="checkanswers" onclick="checkAnswers()" data-modal-target="modal_answers" class="p-2 md:p-4 m-auto rounded-md text-white uppercase font-semibold w-btn_purple h-btn_purple bg-btn_purple  shadow-md m-auto" type="button">
                                Check Answers
                            </button>
                            <button id="continue" type="submit"  class=" p-2 md:p-4 m-auto rounded-md text-white uppercase font-semibold w-btn_purple h-btn_purple bg-btn_green  shadow-md m-auto">
                                @lang('lesson.next')
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <x-popmsg :section_id="$section_id"  :course_id="$course_id" />
        <script>
            function redirectToSection(button) {
                var url = button.getAttribute('data-url');
                window.location.href = url;
            }
            </script>
        <script>


            function closeModal(){
                const modal = new Modal(document.getElementById('modal_answers'));
                modal.hide();
            }
            </script>
            <script>

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('practice-form');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        const dropdowns = document.querySelectorAll('select');
        const data = Array.from(dropdowns).map(dropdown => ({
            id: dropdown.id.replace('sentence_', ''),
            value: dropdown.value,
        }));
        console.log(data);
        fetch('{{ route("course.savePracticeProgress", ["course_id" => $course_id, "section_id" => $section_id]) }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ dropdownValues: data })
        }).then(response => response.json())
          .then(data => {

              if (data.success) {
                  //window.location.href = '{{ route("course.quiz", ["course_id" => $course_id, "section_id" => $section_id]) }}';
              } else {
                  alert('Failed to save progress. Please try again.');
              }
          });
    });
});




            </script>
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
