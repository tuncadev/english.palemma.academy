@auth
  @extends('layouts.layout')

  @section('content')

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
  <div class="flex">
    <button data-url="{{ route('course.show', ['course_id' => $course_id, 'section_id' => $section['id']]) }}" onclick="redirectToSection(this)" class="text-sm bg-blue-200 p-4 font-semibold shadow-md rounded-lg">
        @lang("practice.backtophrase", ["course" => $courseName])
    </button>
  </div>
  <form class="w-full md:w-10/12 pb-20" id="practice-form" action="{{ route('course.updatePracticeScore', ['course_id' => $course_id, 'section_id' => $section_id]) }}" method="POST" onsubmit="return validateForm()">
    @csrf
    <input type="" name="practice_score" id="practice_score" >
    <input type="hidden" name="type" value="practice">
    <ul>
        @php
            $qnum = 1;
        @endphp
        @foreach ($questions as $index => $question)
        @php
            $id = $index + 1;
            $options = json_decode($question->answers, true); // Convert JSON string to array
            shuffle($options);
            $selectComponent = view('components.practice-select', compact('id', 'options'))->render();
            $questionText = str_replace('_', $selectComponent, $question->question);
        @endphp
        <li class="p-4 bg-blue-300 rounded-lg w-full mb-2">
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
            <div id="translation-{{ $id }}" style="display: none;" class="bg-white rounded p-2 mt-2 text-sm">
                <p class="text-gray-800"><i class="fa-solid fa-circle-arrow-right mr-2"></i>@lang('practice'.$section_id.'.trnslt'.$id.'')</p>
            </div>
        </li>
        @php
            $qnum += 1;
        @endphp
        @endforeach
    </ul>
    <span class="hidden" id="score"></span>
    <div class="flex justify-between items-center">
        <button id="checkanswers" onclick="checkAnswers()" data-modal-target="modal_answers" class="block font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            Check Answers
        </button>
        <button id="continue" type="submit" class="hidden block font-semibold text-white bg-green-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            @lang('lesson.next') <i class="fa-solid fa-circle-right"></i>
        </button>
    </div>
</form>

<x-popmsg />
<script>
    function redirectToSection(button) {
        var url = button.getAttribute('data-url');
        window.location.href = url;
    }
    </script>
  <script>
 document.addEventListener('DOMContentLoaded', function() {
    const correctAnswers = @json($correctAnswers);

    let score = 0;
    let translationsOpened = new Set();
    let selectedAnswers = {};

    window.toggleTranslation = function(id) {
        var element = document.getElementById('translation-' + id);
        if (element.style.display === 'none') {
            element.style.display = 'block';
            if (!translationsOpened.has(id)) {
                translationsOpened.add(id);
                score -= 1;
            }
        } else {
            element.style.display = 'none';
        }
        updateScore();
    };

    function updateScore() {
        let totalScore = 0;
        Object.keys(selectedAnswers).forEach(function(key) {

            if (selectedAnswers[key] === correctAnswers[key]) {
                totalScore += 5;
            }
        });
        totalScore -= translationsOpened.size;
        score = totalScore;
        document.getElementById('score').innerText = 'Score: ' + score;
    }

    window.handleAnswerChange = function(select) {
        const id = select.name.replace('sentence_', '');
        selectedAnswers[id] = select.value.toLowerCase();
        updateScore();
    };

    window.checkAnswers = function() {
        const modal = new Modal(document.getElementById('modal_answers'));

        let allFilled = true;
        let correctCount = 0;
        let incorrectCount = 0;

        document.querySelectorAll('select').forEach(function(select) {
            const id = select.name.replace('sentence_', '');

            if (select.value.toLowerCase() === "") {
                allFilled = false;
                document.getElementById("continue").classList.add('hidden');
                var warn = document.getElementById('warn');
                warn.style.display = 'flex';
                location.href = "#top";
            } else if (select.value.toLowerCase() !== correctAnswers[id]) {
                select.classList.add('border-red-500');
                select.classList.remove('border-0');
                incorrectCount++;
            } else if (select.value.toLowerCase() === correctAnswers[id]) {
                select.classList.add('border-green-500');
                select.classList.remove('border-0');
                select.classList.remove('border-red-500');
                correctCount++;
            }
        });

        window.translations = {
            correct: "{{ __('general.correctanswers') }}",
            incorrect: "{{ __('general.wronganswers') }}"
        };

        if (allFilled) {
            modal.show();
            document.getElementById("continue").classList.remove('hidden');
            document.getElementById('correct_answers').innerText = `${window.translations.correct}: `;
            document.getElementById('wrong_answers').innerText = `${window.translations.incorrect}:`;
            document.getElementById('correct_count').innerText = `${correctCount}`;
            document.getElementById('wrong_count').innerText = `${incorrectCount}`;
            modal.classList.remove('hidden');
            modal.classList.add('block');
        }
    };

    document.querySelectorAll('select').forEach(function(select) {
        select.addEventListener('change', function() {
            handleAnswerChange(this);
        });
    });

    document.querySelectorAll('[data-translation-button]').forEach(function(button) {
        button.addEventListener('click', function() {
            const id = button.dataset.translationButton;
            toggleTranslation(id);
        });
    });

    window.validateForm = function() {
        let allFilled = true;

        document.querySelectorAll('select').forEach(function(select) {
            if (select.value.toLowerCase() === "") {
                allFilled = false;
                var warn = document.getElementById('warn');
                warn.style.display = 'flex';
                location.href = "#top";
            }
        });

        if (allFilled) {
            document.getElementById('practice_score').value = score; // Set practice score
            return true; // Allow form submission
        } else {
            return false; // Prevent form submission
        }
    };
});


</script>
  @endsection
@else
  <script>
     document.addEventListener('DOMContentLoaded', function() {
        const modal = new Modal(document.getElementById('authentication-modal'));
        modal.show();
     });
</script>
@endauth
