@php
    function base64Encode($string) {
    return base64_encode($string);
    }
    $section_bg = asset('images/courses/c'.$course_id.'/s'. $section_id.'.jpg');
@endphp
@php
//dd($inputValues);
    $locale = session('locale', 'uk');
    $currentLocale = session('locale', 'uk');
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
            @php
                shuffle($inputValues);
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
                    <x-steps-sidebar  :current="$section_id" :allSections="$allSections" :locale="$locale" :completedSections="$completedSections" :course_id="$course_id" />
                    <div class="flex items-center text-gray-900 justify-between p-4 w-full flex-col lg:flex-row items-start min-h-60 rounded-lg border-gray-300 border shadow-lg">
                        <div class="">
                            <h2 class="text-xl mb-2 max-w-48 font-bold text-sky-600 px-4">
                                {{$courseNameEn}}
                            </h2>
                            <p id="top" class="rounded px-4 mb-4 text-xl text-left">
                            Section {{ $section_id }} <br />
                            </p>

                            <h1 class=" flex  border-sky-600 border rounded flex-col text-gray-900 text-gray-200  text-left font-bold  px-4 py-2 rounded-t-xl rounded-t-xl rounded-b-none lg:rounded-xl md:rounded-t-xl md:rounded-b-none capitalize shadow-md">
                                <span class="font-bold text-2xl">{{$sectionNameEn}}</span>
                                <span class="font-bold"> {{ $sectionName }}</span>
                            </h1>
                            <div class="max-w-96 lg:hidden md:block rounded md:rounded-t-none rounded-t-none overflow-hidden shadow-lg">
                                <img class="max-h-full lg:hidden md:block" src="{{asset('images/courses/c'.$course_id.'/s'. $section_id.'.jpg')}}" alt="{{$courseNameEn}}">
                            </div>
                            <h3 class="  text-2xl mt-4 font-bold text-rose-600 px-4 border-rose-600 border rounded">
                                Quiz
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
                                {{ $highestQuizScore ?? 0 }}
                            </span>
                            <i class="fa-solid text-blue-600 fa-arrow-right mr-2"></i>
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">
                                {{ $update_at }}
                            </span>
                        </div>
                    @endif

                    <div class="flex flex-row gap-x-4  ">
                        <button class="uppercase button_steps_sections-top mt-2 {{ Route::currentRouteName() === 'course.show' ? 'bg-sky-200' : ' bg-white' }}" onclick="window.location.href='{{ route('course.show', ['course_id' => $course_id, 'section_id' => $section_id]) }}'">Phrasal Verbs</button>
                        <button class="uppercase button_steps_sections-top mt-2 {{ Route::currentRouteName() === 'course.practice' ? 'bg-sky-200' : ' bg-white' }}" onclick="window.location.href='{{ route('course.practice', ['course_id' => $course_id, 'section_id' => $section_id]) }}'">Practice</button>
                        <button class="uppercase button_steps_sections-top mt-2 {{ Route::currentRouteName() === 'course.quiz' ? 'bg-sky-200' : ' bg-white' }}" onclick="window.location.href='{{ route('course.quiz', ['course_id' => $course_id, 'section_id' => $section_id]) }}'">Quiz</button>
                    </div>
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


                    <!-- Answers Pack with draggable inputs -->
                    <div id="answers" class="w-full bg-gray-100 sticky top-0 py-3  border-b-2 md:max-w-3xl px-2 flex mb-6 flex justify-center items-center w-full  flex-wrap gap-2">
                        @foreach ($inputValues as $key => $answerSet)
                                <input type="text"
                                id="answer-{{ $answerSet["id"] }}"
                                value="{{ isset($prevInputValues) &&  in_array($answerSet['answer'], $prevInputValues) ? "" : $answerSet['answer']}}"
                                class=" answer-input p-2 border-1 rounded cursor-pointer max-w-32 text-xs text-center {{ isset($prevInputValues) &&  in_array($answerSet['answer'], $prevInputValues) ? "border-gray-400 bg-gray-300" : "border-sky-400 bg-sky-300"}}"
                                draggable="true"
                                disabled
                                ondragstart="drag(event)"
                                ondrop="drop(event)"
                                ondragover="allowDrop(event)">
                        @endforeach
                    </div>
                    <!-- Questions with empty draggable inputs -->
                    <form id="quiz-form" method="GET"
                        action="{{ route('course.show', ['course_id' => $course_id, 'section_id' => $section_id+1]) }}">
                        <input type="hidden" name="quiz_score" id="quiz_score" value="">
                            @csrf
                            @php
                               // dd($correctAnswers[11]['answers'][0]);
                                $qnum = 1;
                                //dd($correctAnswers);
                                //dd($prevInputValues);
                            @endphp
                            @foreach ($questions as $index => $question)
                                @php
                                    $pnum =  $qnum -1;

                                    $id = $question->id;
                                    $questionText = $question->question;
                                    $answers = explode(', ', $question->correct_answer);
                                    $points = $correctAnswers[$question->id]['points'];
                                    $parts = explode('_', $questionText);

                                    $formattedQuestion = '';
                                    $underscoreCount = substr_count($questionText, '_');
                                    $points = "";
                                    if ($underscoreCount === 2) {
                                        $questionText = $parts[0] . view('components.quiz-input', [
                                            'name' => "answer_{$id}_part{$key}",
                                            'id' => "question-{$id}1",
                                            'answer' => base64_encode($correctAnswers[$id]['answers'][0]),
                                            'point' => 2.5,
                                            'prevValue' => $prevInputValues["question-".$id."1"] ?? null,
                                        ])->render() .
                                        $parts[1] .
                                        view('components.quiz-input', [
                                            'name' => "answer_{$id}_part{$key}",
                                            'id' => "question-{$id}2",
                                            'answer' => base64_encode($correctAnswers[$id]['answers'][1]),
                                            'point' => 2.5,
                                            'prevValue' => $prevInputValues["question-".$id."2"] ?? null,
                                        ])->render() .
                                        $parts[2];

                                    } else {
                                        $questionText = $parts[0] . view('components.quiz-input', [
                                            'name' => "answer_{$id}_part{$key}",
                                            'id' => "question-{$id}",
                                            'answer' => base64_encode($correctAnswers[$id]['answers'][0]),
                                            'point' => 5,
                                            'prevValue' => $prevInputValues["question-".$id] ?? null,
                                        ])->render() .
                                        $parts[1];
                                    }


                                @endphp
                                    <div class="flex flex-col pl-2 pr-2 py-4 bg-white phrase_card rounded-lg w-full mb-2 items-center">
                                        <div class="flex w-full">
                                          <span class="shadow-md flex items-center justify-center w-6 h-6 mr-3 p-2 bg-sky-200 rounded-full">{{$qnum}}</span>
                                            <div class="flex justify-between w-full ">
                                                <div class="text-sm leading-9">
                                                    {!!$questionText!!}
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
                                        </div>
                                        <div id="translation-{{ $id }}" style="display: none;" class="w-full bg-sky-200/50   rounded p-2 mt-2 text-sm">
                                            <p class="text-gray-800"><i class="fa-solid fa-circle-arrow-right mr-2"></i>
                                                {{ $localizedQuestions[$index]['localizedQuestion'] ?? '' }}
                                            </p>
                                        </div>
                                    </div>
                                @php
                                    $qnum += 1;
                                @endphp
                            @endforeach

                            <span class="" id="score"></span>
                            <div class="flex flex-col text-sm md:flex-row gap-y-4 md:justify-between items-center mt-4">
                                <button
                                    id="checkanswers"
                                    onclick="checkQuizAnswers()"
                                    data-modal-target="modal_answers"
                                    class="p-2 m-auto text-sm rounded-md text-white uppercase font-semibold w-btn_purple h-btn_purple bg-btn_purple  shadow-md m-auto"
                                    type="button">
                                        @lang('lesson.check')
                                </button>
                                <button id="continue" type="submit" class="text-sm hidden p-2 md:p-4 m-auto rounded-md text-white uppercase font-semibold w-btn_purple h-btn_purple bg-btn_green  shadow-md m-auto">
                                    @lang('lesson.next')
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <x-overlay />
        <x-spinner class="w-16 h-16" />
        <x-popmsg :section_id="$section_id"  :course_id="$course_id" />
<script>
    $(document).ready(function() {
        console.log("Debug");
        // Form submit event to gather and display all answers
        $('#quiz-form').on('submit', function(event) {
            event.preventDefault(); // Prevent the form from actually submitting
            document.body.classList.add('overflow-hidden');

            const overlay = document.getElementById('overlay');
            const spinner = document.getElementById('spinner');

            overlay.classList.remove('hidden');
            spinner.classList.remove('hidden');
            const score = document.getElementById('quiz_score').value;

            let answers = [];
            $('#quiz-form input[type="text"]').each(function() {
                if ($(this).val()) {
                    answers.push({
                        name: $(this).attr('name'),
                        id: $(this).attr('id'),
                        value: $(this).val()
                    });
                }
            });

            // Display the collected answers in the console

            fetch('{{ route("course.saveQuizProgress", ["course_id" => $course_id, "section_id" => $section_id]) }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                answers: answers,
                score : score
            })
        }).then(response => response.json())
          .then(data => {
              if (data.success) {
                  //window.location.href = '{{ route("course.quiz", ["course_id" => $course_id, "section_id" => $section_id]) }}';
                 document.getElementById('quiz-form').submit(); // Submit the form
              } else {
                  alert('Failed to save progress. Please try again.');
              }
          });

            // Optionally, you can submit the form here if needed
            // this.submit(); // Uncomment this line if you want to submit the form after logging the answers
        });
    });

  // Function to log changes to the input value

  function allowDrop(ev) {
      ev.preventDefault();
  }

  function drag(ev) {
      ev.dataTransfer.setData("text", ev.target.id);
      var data = ev.dataTransfer.getData("text");
      var draggedElement = document.getElementById(data);
      draggedElement.blur();
  }

  function drop(ev) {
      ev.preventDefault();
      var data = ev.dataTransfer.getData("text");
      var draggedElement = document.getElementById(data);

      var targetElement = ev.target;

   //   var inputElement = document.getElementById(targetElement.id);



        if (targetElement.tagName === 'INPUT' && draggedElement !== targetElement) {
            // Swap values between dragged element and target element
            var tempValue = targetElement.value;


            targetElement.classList.add("border-sky-400", "bg-sky-300");
            targetElement.classList.remove("border-gray-400", "bg-gray-300");

            // Reset the dragged element style to empty
            draggedElement.classList.add("border-gray-400", "bg-gray-300");
            draggedElement.classList.remove("border-sky-400", "bg-sky-300");

            targetElement.value = draggedElement.value;

            draggedElement.value = tempValue;
            draggedElement.blur();

            // Update styles to reflect changes
            updateInputStyle(targetElement);
            updateInputStyle(draggedElement);

            handleQuizAnswerChange(targetElement);
        }
    }

  function updateInputStyle(inputElement) {
      if (inputElement.value === "") {
          inputElement.classList.remove('bg-blue-200');
          inputElement.classList.add('border-gray-300');
      } else {
          inputElement.classList.add('bg-blue-200');
          inputElement.classList.remove('border-gray-300');
      }
  }
</script>
<script>
    function closeModal() {
        const modal = new Modal(document.getElementById('modal_answers'));
        modal.hide();
    }

    document.addEventListener('DOMContentLoaded', function() {
        let quizScore = 0;
        let translationsOpened = new Set();
        var questionInputs = document.querySelectorAll('#quiz-form input');

        questionInputs.forEach(function(input) {
        if (input.id.startsWith('question-') && input.value) {
            updateQuizScore();
        }
    });


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
            questionInputs.forEach(input => {
                let answer = atob(input.getAttribute('data-check')); // Decode the base64 encoded answer
                let point = parseFloat(input.getAttribute('data-point'));

                if (input.value.toLowerCase() === answer) {

                    totalScore += point;
                }
            });
            totalScore -= translationsOpened.size;
            quizScore = totalScore;
            document.getElementById('score').innerText = 'Score: ' + quizScore;
            document.getElementById('quiz_score').value = quizScore;
        }

        window.handleQuizAnswerChange = function(input) {
            let answer = atob(input.getAttribute('data-check')); // Decode the base64 encoded answer

            if (input.value.toLowerCase() === answer) {
                input.classList.add('border-green-500');
                input.classList.remove('border-gray-400', 'border-sky-400');
            } else {
                input.classList.add('border-gray-400');
                input.classList.remove('border-green-500');
            }

            updateQuizScore();
        };

        window.checkQuizAnswers = function() {
            const modal = new Modal(document.getElementById('modal_answers'));

            let allFilled = true;
            let correctCount = 0;
            let incorrectCount = 0;


            questionInputs.forEach(function(input) {
                let answer = atob(input.getAttribute('data-check')); // Decode the base64 encoded answer

                if (input.value.toLowerCase() === "") {
                    allFilled = false;
                    input.classList.add('border-red-500');
                    input.classList.remove('border-green-500', 'border-gray-400',  'border-sky-400',  'border-dashed', 'border-1');

                    document.getElementById("continue").classList.add('hidden');
                    var warn = document.getElementById('warn');
                    warn.style.display = 'flex';
                    location.href = "#top";
                } else if (input.value.toLowerCase() !== answer) {
                    input.classList.add('border-red-500');
                    input.classList.remove('border-0');
                    input.classList.remove('border-green-500', 'border-gray-400',  'border-sky-400',  'border-dashed', 'border-1');

                    incorrectCount++;
                } else {
                    input.classList.add('border-green-500', 'border-2');
                    input.classList.remove('border-0');
                    input.classList.remove('border-red-500', 'border-sky-400', 'border-dashed', 'border-1');
                    correctCount++;
                }
            });

            window.translations = {
                correct: "{{ __('general.correctanswers') }}",
                incorrect: "{{ __('general.wronganswers') }}"
            };

            document.getElementById("continue").classList.remove('hidden');

        };

        questionInputs.forEach(function(input) {
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
