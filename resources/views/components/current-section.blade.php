@props(['name', 'locked', 'id', 'course_id', 'current_id', 'section_en', 'courseNameEn'])
<li {{ $attributes->merge(['class' => 'mt-4 mb-10 ms-6 text-center tracked-component']) }}>
    <div class="text-xs justify-center text-green-900 px-2 flex items-center gap-2">
        <i class="fa-solid fa-angles-right text-xs  "></i>
            Active section
        <i class="fa-solid fa-angles-left"></i>
    </div>
    <div class="p-2 rounded-lg bg-sky-200 ">
        <span class="absolute flex items-center justify-center w-8 h-8 bg-lime-400 rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-gray-700">
            <svg class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
            </svg>
        </span>
        <div class="text-center ">
            <p class="text-gray-500 text-xs bg-lime-400 px-2 py-1 font-semibold uppercase rounded-lg text-center">
                @lang('sidebar.section') # {{$id}}
            </p>
            <div class="text-white text-sm bg-pink-700 px-2 py-1 mt-2 rounded-lg text-center">
                <h3 class="font-medium leading-tight  ">{{ $section_en }}</h3>
            </div>
            <span class="text-xs font-normal text-gray-600  text-center">( {{ $name }} )</span>
            <div class="max-w-96 mt-2 rounded md:rounded-t-none rounded-t-none overflow-hidden shadow-lg">
                <img class="max-h-full rounded " src="{{asset('images/courses/c'.$course_id.'/s'. $id.'.jpg')}}" alt="{{$courseNameEn}}">
            </div>
            @if ($current_id == $id)
                <div class="flex flex-col">
                    <button class="button_steps_sections mt-2 {{ Route::currentRouteName() === 'course.show' ? 'bg-sky-200 border-pink-700/50 border' : ' bg-white' }}" onclick="window.location.href='{{ route('course.show', ['course_id' => $course_id, 'section_id' => $id]) }}'">Phrasal Verbs</button>
                    <button class="button_steps_sections mt-2 {{ Route::currentRouteName() === 'course.practice' ? 'bg-sky-200  border-pink-700/50 border' : ' bg-white' }}" onclick="window.location.href='{{ route('course.practice', ['course_id' => $course_id, 'section_id' => $id]) }}'">Practice</button>
                    <button class="button_steps_sections mt-2 {{ Route::currentRouteName() === 'course.quiz' ? 'bg-sky-200  border-pink-700/50 border' : ' bg-white' }}" onclick="window.location.href='{{ route('course.quiz', ['course_id' => $course_id, 'section_id' => $id]) }}'">Quiz</button>
                </div>

            @else
                <a href="{{ route('course.show', ['course_id' => $course_id, 'section_id' => $id]) }}">
                    <div class="bg-red-300 mt-1 py-1 px-2 rounded-lg">
                        @lang('sidebar.nextsection')
                    </div>
                </a>
            @endif
        </div>
    </div>
</li>
