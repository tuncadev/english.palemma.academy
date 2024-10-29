@php
    $locale = session('locale', 'uk');
    $currentLocale = session('locale', 'uk');
    $section_bg = asset('images/courses/c'.$course_id.'/s'. $section_id.'.jpg');
@endphp
@auth
  @extends('layouts.layout')
    @section('navigation')
    <div class="{{ $hasSubscription ? 'sm:ml-64' : ''}}">
        <div class="relative w-full bg-top_bar shadow-md">
            <x-nav :locale="$locale" :currentLocale="$currentLocale" />
        </div>
    </div>
    @endsection
    @section('content')
    @if ($hasSubscription)
        <div class=" sm:ml-64">
            <div class="mt-4 rounded-lg">
                @php
                if ( !in_array($section_id - 1, $completedSections ) && $section_id != 1 ) {
                    $locked = true;
                } else {
                    $locked = false;
                }
                 @endphp
                <div class=" flex flex-col items-center justify-center mb-4 gap-6 rounded bg-gray-100 dark:bg-gray-800">
                    <x-sidebar-responsive />
                    <x-steps-sidebar :courseNameEn="$courseNameEn" :current="$section_id" :allSections="$allSections" :locale="$locale" :completedSections="$completedSections" :course_id="$course_id" />
                    @if (!$locked)
                        <div class="bg-[url('{{$section_bg}}')] lg:bg-none max-w-2xl lg:max-w-full bg-cover flex items-center text-gray-900 justify-between p-4 w-full flex-col lg:flex-row items-start min-h-60 rounded-lg border-gray-300 border shadow-lg">
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
                                <h3 class="text-2xl mt-4 font-bold text-amber-600 px-4 border-amber-600 border rounded">
                                    Practice
                                </h3>
                                <div class="flex items-center gap-x-5 justify-between my-4 max-w-80 bg-blue-200 p-4 rounded-xl shadow-md">
                                    <i class="text-4xl text-red-600 fa-solid fa-triangle-exclamation"></i>
                                    <ul class="text-xs list-outside ">
                                    <li><i class="fa-regular fa-thumbs-up mr-2" style="color: #2583cb;"></i>@lang('practice.s1-rule-1')</li>
                                    <li><i class="fa-regular fa-thumbs-down mr-2" style="color: #2583cb;"></i>@lang('practice.s1-rule-2')</li>
                                    <li><i class="fa-solid fa-check-double mr-1" style="color: #2583cb;"></i>@lang('practice.s1-rule-3')</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="max-w-96 rounded overflow-hidden shadow-lg">
                                <img class="max-h-full hidden lg:block md:hidden" src="{{asset('images/courses/c'.$course_id.'/s'. $section_id.'.jpg')}}" alt="{{$courseNameEn}}">
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
                                {{ $highesPUpdate }}
                                </span>
                            </div>
                        @endif
                        <div class="flex flex-row gap-x-4">
                            <button class="uppercase button_steps_sections-top mt-2 {{ Route::currentRouteName() === 'course.show' ? 'bg-sky-200' : ' bg-white' }}" onclick="window.location.href='{{ route('course.show', ['course_id' => $course_id, 'section_id' => $section_id]) }}'">Phrasal Verbs</button>
                            <button class="uppercase button_steps_sections-top mt-2 {{ Route::currentRouteName() === 'course.practice' ? 'bg-sky-200' : ' bg-white' }}" onclick="window.location.href='{{ route('course.practice', ['course_id' => $course_id, 'section_id' => $section_id]) }}'">Practice</button>
                            <button class="uppercase button_steps_sections-top mt-2 {{ Route::currentRouteName() === 'course.quiz' ? 'bg-sky-200' : ' bg-white' }}" onclick="window.location.href='{{ route('course.quiz', ['course_id' => $course_id, 'section_id' => $section_id]) }}'">Quiz</button>
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
                        <form name="practice-form" action="{{ route('course.quiz', ['course_id' => $course_id, 'section_id' => $section_id]) }}" class="w-full md:w-10/12 pb-20" id="practice-form" >
                            @csrf
                            <input type="hidden" name="practice_score" id="practice_score" value="{{ isset($highestPracticeScore) ? $highestPracticeScore : 0 }}">
                            <input type="hidden" name="type" value="practice">
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
                                                $dropdownValues[$subKey] = [
                                                    $subKey => $subValue,
                                                    "point" => 2.5,
                                                ];
                                            }
                                        } else {
                                            // Otherwise, just add the original key-value pair
                                            foreach ($value as $aKey => $aValue) {
                                                $dropdownValues[$aKey] = [
                                                    $aKey => $aValue,
                                                    "point" => 5,
                                                ];
                                            }


                                        }
                                    }
                                }
                            // dd($dropdownValues);
                                @endphp
                                @foreach ($questions as $index => $question)

                                @php

                                    $id = $question->id;
                                    $options = json_decode($question->answers, true); // Convert JSON string to array
                                    shuffle($options);
                                    //dd($correctAnswers);
                                    $questionText = $question->question;
                                    $underscoreCount = substr_count($questionText, '_');
                                    $points = "";
                                                                    if ($underscoreCount === 2) {
                                        // Split the question text into parts (at underscores)
                                        $parts = explode('_', $questionText);
                                        $points = 2.5;
                                        $doubleID = $question->id;

                                        // Separate the answer options into first and second parts based on whether they contain a comma
                                        $firstOptions = [];
                                        $secondOptions = [];

                                        foreach ($options as $option) {
                                            if (strpos($option, ',') !== false) {
                                                // Option contains a comma, split by comma for two dropdowns
                                                $phrases = explode(', ', $option);
                                                $firstOptions[] = $phrases[0];  // First part before the comma
                                                $secondOptions[] = $phrases[1]; // Second part after the comma
                                            } else {
                                                // Option doesn't contain a comma, split by space for two dropdowns
                                                $words = explode(' ', $option);
                                                $firstOptions[] = $words[0];  // First word
                                                $secondOptions[] = isset($words[1]) ? $words[1] : '';  // Second word if available
                                            }
                                        }

                                        // Now generate the question HTML with two select components
                                        $questionText = $parts[0] .
                                                        view('components.practice-select', [
                                                            'answer' => base64_encode($correctAnswers[$doubleID]['part1']),
                                                            'points' => $points,
                                                            'dropdownValues' => $dropdownValues[(int)($id . "1")][(int)($id . "1")] ?? '',
                                                            'id' => (int)($id . "1"),
                                                            'options' => $firstOptions
                                                        ])->render() .
                                                        $parts[1] .
                                                        view('components.practice-select', [
                                                            'answer' => base64_encode($correctAnswers[$doubleID]['part2']),
                                                            'points' => $points,
                                                            'dropdownValues' => $dropdownValues[(int)($id . "2")][(int)($id . "2")] ?? '',
                                                            'id' => (int)($id . "2"),
                                                            'options' => $secondOptions
                                                        ])->render() .
                                                        $parts[2];
                                    } else {
                                        $answer = base64_encode($question->correct_answer);
                                        $points = 5;
                                        $selectComponent = view('components.practice-select', compact('answer', 'points', 'dropdownValues', 'id', 'options'))->render();
                                        $questionText = str_replace('_', $selectComponent, $questionText);
                                    }

                                                                    $localizedQuestion = $localizedQuestions[$index]['localizedQuestion'] ?? '';

                                @endphp

                                    <div class="flex flex-col pl-2 pr-2 py-4 bg-white phrase_card rounded-lg w-full mb-2 items-center">
                                        <div class="flex w-full">
                                            <span class="shadow-md text-xs flex items-center justify-center w-6 h-6 mr-2 p-4 border border-1 border-sky-200 rounded-full">{{$qnum}}</span>
                                            <div class="flex flex-col md:flex-row justify-between w-full ">
                                                <div class="text-[12px] leading-8">
                                                    {!! $questionText !!}
                                                </div>
                                                <div class="flex items-center pl-2 justify-end">
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
                                        </div>
                                        <div id="translation-{{ $id }}" style="display: none;" class="bg-sky-200/50 rounded p-2 mt-2 text-sm w-full">
                                            <p class="text-gray-800"><i class="fa-solid fa-circle-arrow-right mr-2"></i>{{ $localizedQuestion }}</p>
                                        </div>
                                    </div>


                                @php
                                    $qnum += 1;
                                @endphp
                            @endforeach

                            <span class="" id="score"></span>
                            <div class="flex flex-col md:flex-row gap-y-4 md:justify-between items-center mt-4">
                                <button id="checkanswers"
                                    onclick="checkAnswers()"
                                    data-modal-target="modal_answers"
                                    class="p-2 m-auto text-sm rounded-md text-white uppercase font-semibold w-btn_purple h-btn_purple bg-btn_purple  shadow-md m-auto"
                                    type="button">
                                        @lang('lesson.check')
                                </button>
                                <button id="continue"
                                type="submit"
                                class=" p-2 md:p-4 text-sm m-auto rounded-md text-white uppercase font-semibold w-btn_purple h-btn_purple bg-btn_green  shadow-md m-auto">
                                    @lang('lesson.next')
                                </button>
                            </div>
                        </form>
                    @else
                        <div class="text-lg font-semibold flex flex-col  gap-8">
                            <div class="flex flex-col items-center justify-center gap-8 p-4">
                                <i class="text-8xl text-pink-600 fa-regular fa-face-frown-open"></i>
                                <span>@lang('course.section_locked')</span>
                            </div>
                            <div class="p-4">
                                <span class="py-3 px-2 bg-green-100 text-green-800 text-xs font-medium rounded dark:bg-gray-700 dark:text-green-400 border border-green-400">
                                    @lang('course.unlocked')
                                </span>
                                @foreach ($unlockedSections as $section)
                                    <x-sections-card :isUnlocked="1" :course_id="$course_id" :section_id="$section->id" :section_name_en="$section->section_name_en" :section_name="$section->localized_name" />
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <x-overlay />
        <x-spinner class="w-16 h-16" />
        <x-popmsg :section_id="$section_id"  :course_id="$course_id" />
        <script>
            function redirectToSection(button) {
                var url = button.getAttribute('data-url');
                window.location.href = url;
            }
            </script>
       <script>
        function closeModal() {
            const modal = new Modal(document.getElementById('modal_answers'));
            modal.hide();
        }

        document.addEventListener('DOMContentLoaded', function() {

            let practiceScore = 0;
            let translationsOpened = new Set();
            var practiceInputs = document.querySelectorAll('#practice-form select');

            window.toggleTranslation = function(id) {
                var element = document.getElementById('translation-' + id);
                if (element.style.display === 'none') {
                    element.style.display = 'block';
                    if (!translationsOpened.has(id)) {
                        translationsOpened.add(id);
                        practiceScore -= 1;
                    }
                } else {
                    element.style.display = 'none';
                }
                updatePracticeScore();
            };

            function updatePracticeScore() {
                let totalScore = 0;


                practiceInputs.forEach(input => {
                    let answer = atob(input.getAttribute('data-check')); // Decode the base64 encoded answer
                    let point = parseFloat(input.getAttribute('data-point'));

                    if (input.value.toLowerCase() === answer) {
                        totalScore += point;
                    }
                });

                totalScore -= translationsOpened.size;
                practiceScore = totalScore;
                document.getElementById('score').innerText = 'Score: ' + practiceScore;
                document.getElementById('practice_score').value = practiceScore;
            }

            window.handlePracticeAnswerChange = function(input) {
                let answer = atob(input.getAttribute('data-check')); // Decode the base64 encoded answer

                if (input.value.toLowerCase() === answer) {
                    input.classList.add('border-green-500');
                    input.classList.remove('border-gray-400', 'border-sky-200');
                } else {
                    input.classList.add('border-gray-400');
                    input.classList.remove('border-green-500');
                }

                updatePracticeScore();
            };

            window.checkAnswers = function() {
                const modal = new Modal(document.getElementById('modal_answers'));

                let allFilled = true;
                let correctCount = 0;
                let incorrectCount = 0;


                practiceInputs.forEach(function(input) {
                    let answer = atob(input.getAttribute('data-check')); // Decode the base64 encoded answer

                    if (input.value.toLowerCase() === "") {
                        allFilled = false;
                        input.classList.add('border-red-500');
                        input.classList.remove('border-green-500', 'border-gray-400',  'border-sky-200',  'border-dashed', 'border-1');

                        document.getElementById("continue").classList.add('hidden');
                        var warn = document.getElementById('warn');
                        warn.style.display = 'flex';
                        location.href = "#top";
                    } else if (input.value.toLowerCase() !== answer) {
                        input.classList.add('border-red-500');
                        input.classList.remove('border-0');
                        input.classList.remove('border-green-500', 'border-gray-400',  'border-sky-200',  'border-dashed', 'border-1');

                        incorrectCount++;
                    } else {
                        input.classList.add('border-green-500', 'border-2');
                        input.classList.remove('border-0');
                        input.classList.remove('border-red-500', 'border-sky-200', 'border-dashed', 'border-1');
                        correctCount++;
                    }
                });

                window.translations = {
                    correct: "{{ __('general.correctanswers') }}",
                    incorrect: "{{ __('general.wronganswers') }}"
                };

                document.getElementById("continue").classList.remove('hidden');

            };

            practiceInputs.forEach(function(input) {
                input.addEventListener('change', function() {
                    handlePracticeAnswerChange(this);
                });
            });

            document.querySelectorAll('[data-translation-button]').forEach(function(button) {
                button.addEventListener('click', function() {
                    const id = button.dataset.translationButton;
                    toggleTranslation(id);
                });
            });

            window.validatePracticeForm = function() {
                let allFilled = true;

                document.querySelectorAll('input[type="text"]').forEach(function(input) {
                    if (input.value.toLowerCase() === "") {
                        allFilled = false;
                        var warn = document.getElementById('warn');
                        warn.style.display = 'flex';
                        location.href = "#top";
                    }
                });
                    //document.getElementById('practice_score').value = practiceScore; // Set practice score
                    return true; // Allow form submission

            };
        });
    </script>
            <script>

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('practice-form');

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        document.body.classList.add('overflow-hidden');

        const overlay = document.getElementById('overlay');
        const spinner = document.getElementById('spinner');

        overlay.classList.remove('hidden');
        spinner.classList.remove('hidden');


        var currentPracticeScore = document.getElementById('practice_score').value;

        const practiceScore = document.getElementById('practice_score').value;

        const score = document.getElementById('practice_score').value;
        const dropdowns = document.querySelectorAll('select');
        const data = Array.from(dropdowns).map(dropdown => ({
            id: dropdown.id.replace('sentence_', ''),
            value: dropdown.value,
        }));


        fetch('{{ route("course.savePracticeProgress", ["course_id" => $course_id, "section_id" => $section_id]) }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                dropdownValues: data,
                practiceScore: currentPracticeScore,
                score : score
            })
        }).then(response => response.json())
          .then(data => {
              if (data.success) {
                  //window.location.href = '{{ route("course.quiz", ["course_id" => $course_id, "section_id" => $section_id]) }}';
                 document.getElementById('practice-form').submit(); // Submit the form
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
