@if($isUnlocked)
    <a href="{{ route('course.show', ['course_id' => $id, 'section_id' => $section['id'], 'colorClass' => $colorClass]) }}"
    class="relative btn btn-primary ">
    <i class="absolute right-3 top-3 font-bold text-white fa-regular fa-square-check"></i>
    <div class="md:max-w-[18rem] md:min-h-72 md:min-h-56 hover:shadow-xl border shadow-md hover:border-gray-500 hover:border block rounded-lg {{$colorClass}} text-white shadow-secondary-1 {{ $isUnlocked ? 'opacity-100' : 'opacity-50' }}">
        <div class="border-b-2 border-black/20 px-6 py-3 text-white font-semibold uppercase">
        @lang('lesson.section') - {{ $section['id']}}
        </div>
        <div class="p-6">
        <h5 class="mb-2 text-xl font-semibold leading-tight">
            {{ $section['section_name']}}
        </h5>
        <p class="text-sm">
            Here must be a Short Description About This Section, not less than 12 and not more than 18 words.
        </p>
        </div>
    </div>
    </a>
@else
    <div class="c_container relative">
    <i class="absolute fa-solid fa-lock z-10 top-3 right-3" style="color: #3b71ca"></i>
    <div class="md:max-w-[18rem] md:min-h-72 md:min-h-56 border shadow-md  block rounded-lg {{$colorClass}} text-white shadow-secondary-1 {{ $isUnlocked ? 'opacity-100' : 'opacity-50' }}">
        <div class="border-b-2 border-black/20 px-6 py-3 text-white font-semibold uppercase">
        @lang('lesson.section') - {{ $section['id']}}
        </div>
        <div class="p-6">
        <h5 class="mb-2 text-xl font-medium leading-tight">
            {{ $section['section_name']}}
        </h5>
        <p class="text-sm">
            Here must be a Short Description About This Section, not less than 12 and not more than 18 words.
        </p>
        </div>
    </div>
    </div>
@endif
