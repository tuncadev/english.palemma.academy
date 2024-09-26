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
        <div class="relative w-full bg-top_bar shadow-md">
            <x-nav :locale="$locale"  :currentLocale="$currentLocale" class="m-auto border-gray-200 dark:bg-gray-900" />
        </div>
    </div>
    @endsection
    @section('content')
        @if ($hasSubscription)
        <div class="container">
            <h2>Phrasal Verbs Quiz</h2>

            <!-- Answers Pack with draggable inputs -->
            <div id="answers" class="flex space-x-4 mb-6">
                @foreach ($correctAnswers as $key => $answerSet)
                    <input type="text"
                           id="answer-{{ $key }}"
                           value="{{ $answerSet['answers'][0] }}"
                           class="answer-input p-2 border-1 rounded cursor-pointer max-w-24 text-xs text-center border-sky-400 bg-sky-300"
                           draggable="true"
                           ondragstart="drag(event)"
                           ondrop="drop(event)"
                           ondragover="allowDrop(event)">
                @endforeach
            </div>

            <!-- Questions with empty draggable inputs -->
            <form id="quiz-form" method="POST"
                  action="{{ route('course.updateQuizScore', ['course_id' => $course_id, 'section_id' => $section_id]) }}">
                @csrf
                @foreach ($questions as $index => $question)
                    <div class="question mb-4">
                        <label for="question-{{ $index }}">{{ $question['question'] }}</label>
                        <input type="text"
                               id="question-{{ $index }}"
                               name="answers[{{ $index }}]"
                               class="dropzone p-2 border-1 border-dashed rounded cursor-pointer max-w-24 text-xs text-center border-gray-400 bg-gray-300 "
                               draggable="true"
                               ondragstart="drag(event)"
                               ondrop="drop(event)"
                               ondragover="allowDrop(event)">
                    </div>
                @endforeach

                <button type="submit" class="mt-4 p-2 bg-green-500 text-white rounded">Submit Answers</button>
            </form>
        </div>

        <script>
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

                if (targetElement.tagName === 'INPUT' && draggedElement !== targetElement) {
        // Swap values between dragged element and target element
        var tempValue = targetElement.value;
        targetElement.value = draggedElement.value;

        targetElement.classList.add("border-sky-400", "bg-sky-300");
        targetElement.classList.remove("border-gray-400", "bg-gray-300");

        // Reset the dragged element style to empty
        draggedElement.classList.add("border-gray-400", "bg-gray-300");
        draggedElement.classList.remove("border-sky-400", "bg-sky-300");
        draggedElement.value = tempValue;
        draggedElement.blur();

        // Update styles to reflect changes
        updateInputStyle(targetElement);
        updateInputStyle(draggedElement);
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

