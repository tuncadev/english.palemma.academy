@php
    function base64Encode($string) {
    return base64_encode($string);
    }
@endphp
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
                shuffle($inputValues);
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
                    <h2>Phrasal Verbs Quiz</h2>
                    <!-- Answers Pack with draggable inputs -->
                    <div id="answers" class="md:max-w-3xl px-2 flex mb-6 flex justify-center items-center w-full  flex-wrap gap-2">
                        @foreach ($inputValues as $key => $answerSet)
                        @php $iVal = isset($prevInputValues) ? "" : $answerSet['answer']; @endphp
                        @php $bgClass = isset($prevInputValues) ? "border-gray-400 bg-gray-300" : "border-sky-400 bg-sky-300"; @endphp
                            <input type="text"
                            id="answer-{{ $key }}"
                            value="{{ $iVal }}"
                            class=" answer-input p-2 border-1 rounded cursor-pointer max-w-24 text-xs text-center {{$bgClass}}"
                            draggable="true"
                            ondragstart="drag(event)"
                            ondrop="drop(event)"
                            ondragover="allowDrop(event)">
                        @endforeach
                    </div>
                    <!-- Questions with empty draggable inputs -->
                    <form id="quiz-form" method="POST"
                        action="{{ route('course.show', ['course_id' => $course_id, 'section_id' => $section_id+1]) }}">
                        <input type="hidden" name="quiz_score" id="quiz_score" value="{{ isset($highestQuizScore) ? $highestQuizScore : 0 }}">
                        <ul>
                            @csrf
                            @php
                                $qnum = 1;

                                //dd($prevInputValues['question-0']);
                            @endphp
                            @foreach ($questions as $index => $question)
                                @php
                                    $pnum =  $qnum -1;
                                    $id = $question->id;
                                    $questionText = $question->question;
                                    $answers = explode(', ', $question->correct_answer);
                                    $points = $correctAnswers[$question->id]['points'];
                                    $inputs = explode('_', $questionText);
                                    $formattedQuestion = '';
                                    foreach ($inputs as $key => $part) {
                                        $formattedQuestion .= $part;
                                        if ($key < count($inputs) - 1) {
                                            $answer = base64_encode($answers[$key]);
                                            $point = $points[$key] ?? 5; // Default to 5 if points not found
                                            $formattedQuestion .= view('components.quiz-input', [
                                            'name' => "answer_{$id}_part{$qnum}",
                                            'id' => "{$id}-{$qnum}",
                                            'answer' => $answer,
                                            'point' => $point,
                                            'index' => $index,
                                            'prevValue' => $prevInputValues['question-'. $pnum]
                                            ])->render();
                                            }
                                    }
                                @endphp
                                <li class="px-5 py-3 bg-white phrase_card rounded-lg w-full mb-2">
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
                                            {{ $localizedQuestions[$index]['localizedQuestion'] ?? '' }}
                                        </p>
                                    </div>
                                </li>
                                @php
                                    $qnum += 1;
                                @endphp
                            @endforeach

                            <span class="" id="score"></span>
                            <div class="flex flex-col md:flex-row gap-y-4 md:justify-between items-center mt-4">
                                <button id="checkanswers" onclick="checkQuizAnswers()" data-modal-target="modal_answers" class="p-2 md:p-4 m-auto rounded-md text-white uppercase font-semibold w-btn_purple h-btn_purple bg-btn_purple  shadow-md m-auto" type="button">
                                    Check Answers
                                </button>
                                <button id="continue" type="submit" class="hidden p-2 md:p-4 m-auto rounded-md text-white uppercase font-semibold w-btn_purple h-btn_purple bg-btn_green  shadow-md m-auto">
                                    @lang('lesson.next')
                                </button>
                            </div>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
        <x-popmsg :section_id="$section_id"  :course_id="$course_id" />
<script>
    $(document).ready(function() {
        // Form submit event to gather and display all answers
        $('#quiz-form').on('submit', function(event) {
            event.preventDefault(); // Prevent the form from actually submitting
            const score = document.getElementById('quiz_score').value;
            // Collect all values from the question inputs
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
            console.log("Collected Answers:", answers);
            console.log("Quiz score: ", score)
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
