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
<div class=" sm:ml-64">
    <div class="mt-4 rounded-lg">
        <div class="p-2 flex flex-col items-center justify-center mb-4 gap-6 rounded bg-gray-50 dark:bg-gray-800">
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
                <div id="top" class="w-full md:w-10/12 flex p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800" role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
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
                <form class="w-full md:w-10/12 pb-20" id="quiz-form" action="{{ route('course.updateQuizScore', ['course_id' => $course_id, 'section_id' => $section_id]) }}" method="POST" onsubmit="return validateQuizForm()">
                @csrf
                <input type="hidden" name="quiz_score" id="quiz_score" value="0">
                <input type="hidden" name="type" value="quiz">
                <ul>
                    @php
                        $qnum = 1;
                    @endphp
                    @foreach ($questions as $index => $question)
                    @php
                        $id = $question->id;
                        $questionText = $question->question;
                        $localizedQuestion = $localizedQuestions[$index]['localizedQuestion'] ?? '';
                        $inputs = explode('_', $questionText);
                        $formattedQuestion = '';
                        // echo "PIN : " . $inputs;
                        // print_r($inputs);
                        foreach ($inputs as $key => $part) {
                            $formattedQuestion .= $part;
                            if ($key < count($inputs) - 1) {
                            $qid = $id;
                            if ($key == 1) {
                                $id = $id . "-2";
                            }

                                $points = $correctAnswers[$question->id]['points'][$key] ?? 5; // Default to 5 if points not found.

                                $formattedQuestion .= view('components.quiz-input', ['name' => "answer_{$id}", 'id' => $id,'points' => $points])->render();
                            }
                        }
                    @endphp
                    <li class="p-4 bg-blue-300 rounded-lg w-full mb-2">
                        <div class="flex justify-between">
                            <div class="text-sm flex w-full justify-start items-center">
                                {{ $qnum }}. {!! $formattedQuestion !!}
                            </div>
                            <div class="flex items-center">
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
                        <div id="translation-{{ $id }}" style="display: none;" class="bg-white rounded p-2 mt-2 text-sm">
                            <p class="text-gray-800"><i class="fa-solid fa-circle-arrow-right mr-2"></i>
                                {{ $localizedQuestion }}
                            </p>
                        </div>
                    </li>
                    @php
                        $qnum += 1;
                    @endphp
                    @endforeach
                </ul>
                <span class="hidden" id="score"></span>
                <div class="flex flex-col md:flex-row gap-y-4 md:justify-between items-center mt-4">
                    <button id="checkanswers" onclick="checkQuizAnswers()" data-modal-target="modal_answers" class="p-2 md:p-4 m-auto rounded-md text-white uppercase font-semibold w-btn_purple h-btn_purple bg-btn_purple  shadow-md m-auto" type="button">
                        Check Answers
                    </button>
                    <button id="continue" type="submit" class="hidden p-2 md:p-4 m-auto rounded-md text-white uppercase font-semibold w-btn_purple h-btn_purple bg-btn_green  shadow-md m-auto">
                        @lang('lesson.next')
                    </button>
                </div>
                </form>
            </div>
        </div>
        <x-popmsg :section_id="$section_id"  :course_id="$course_id" />
        <script>
            function closeModal(){
            const modal = new Modal(document.getElementById('modal_answers'));
            modal.hide();
        }
 document.addEventListener('DOMContentLoaded', function() {
    // Original correctAnswers object
    const correctAnswers = @json($correctAnswers);


    // Transformed correctAnswers object
    const transformedAnswers = {};

    Object.keys(correctAnswers).forEach(key => {
        const { answers, points } = correctAnswers[key];

        if (answers.length === 2) {
            // If there are two answers, split into two separate entries
            transformedAnswers[`${key}`] = {
                answers: [answers[0]],
                points: [points[0]]
            };
            transformedAnswers[`${key}-2`] = {
                answers: [answers[1]],
                points: [points[1]]
            };
        } else {
            // If there's only one answer, keep it as is
            transformedAnswers[key] = correctAnswers[key];
        }
    });



    let quizScore = 0;
    let translationsOpened = new Set();
    let selectedAnswers = {};

    window.toggleTranslation = function(id) {
        var element = document.getElementById('translation-' + id);
        if (element.style.display === 'none') {
            element.style.display = 'block';
            if (!translationsOpened.has(id)) {
                translationsOpened.add(id);
                quizScore -= 1;
            }
        } else {
            element.style.display = 'none';
        }
        updateQuizScore();
    };

    function updateQuizScore() {
        let totalScore = 0;
        Object.keys(selectedAnswers).forEach(function(key) {
            if (transformedAnswers[key]) {
                const { answers, points } = transformedAnswers[key];
                const userAnswers = selectedAnswers[key] || [];


                userAnswers.forEach((answer, index) => {

                    if (answer === answers[index]) {
                        totalScore += points[index];

                    }
                });
            }
        });
        totalScore -= translationsOpened.size;
        quizScore = totalScore;
        document.getElementById('score').innerText = 'Score: ' + quizScore;

    }

    window.handleQuizAnswerChange = function(input) {
        const baseId = input.id;
        if (!selectedAnswers[baseId]) {
            selectedAnswers[baseId] = [];
        }
        selectedAnswers[baseId][0] = input.value.toLowerCase();

        updateQuizScore();
    };

    window.checkQuizAnswers = function() {
        const modal = new Modal(document.getElementById('modal_answers'));

        let allFilled = true;
        let correctCount = 0;
        let incorrectCount = 0;

        document.querySelectorAll('input[type="text"]').forEach(function(input) {
            const baseId = input.id;

            if (transformedAnswers[baseId]) {
                const { answers } = transformedAnswers[baseId];
                const userAnswer = selectedAnswers[baseId] ? selectedAnswers[baseId][0] : "";



                if (userAnswer === "") {
                    allFilled = false;
                    document.getElementById("continue").classList.add('hidden');
                    var warn = document.getElementById('warn');
                    warn.style.display = 'flex';
                    location.href = "#top";
                } else if (userAnswer !== answers[0]) {

                    input.classList.add('border-red-500');
                    input.classList.remove('border-0');
                    incorrectCount++;
                } else {

                    input.classList.add('border-green-500');
                    input.classList.remove('border-0');
                    input.classList.remove('border-red-500');
                    correctCount++;
                }
            }
        });

        window.translations = {
            correct: "{{ __('general.correctanswers') }}",
            incorrect: "{{ __('general.wronganswers') }}"
        };

      //  if (allFilled) {
            modal.show();
            document.getElementById("continue").classList.remove('hidden');
            document.getElementById('correct_answers').innerText = `${window.translations.correct}: `;
            document.getElementById('wrong_answers').innerText = `${window.translations.incorrect}:`;
            document.getElementById('correct_count').innerText = `${correctCount}`;
            document.getElementById('wrong_count').innerText = `${incorrectCount}`;
        //}
    };

    document.querySelectorAll('input[type="text"]').forEach(function(input) {
        input.addEventListener('change', function() {
            handleQuizAnswerChange(this);
        });
    });

    document.querySelectorAll('[data-translation-button]').forEach(function(button) {
        button.addEventListener('click', function() {
            const id = button.dataset.translationButton;
            toggleTranslation(id);
        });
    });

    window.validateQuizForm = function() {
        let allFilled = true;

        document.querySelectorAll('input[type="text"]').forEach(function(input) {
            if (input.value.toLowerCase() === "") {
                allFilled = false;
                var warn = document.getElementById('warn');
                warn.style.display = 'flex';
                location.href = "#top";
            }
        });

        if (allFilled) {
            document.getElementById('quiz_score').value = quizScore; // Set quiz score
            return true; // Allow form submission
        } else {
            return false; // Prevent form submission
        }
    };
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

