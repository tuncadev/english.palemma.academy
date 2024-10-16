@props(['course_id', 'section_id', 'section_name_en', 'section_name', 'isUnlocked'])
<a href="{{ route('course.show', ['course_id' => $course_id, 'section_id' => $section_id]) }}"
    class="w-full flex flex-col sm:flex-row relative btn btn-primary course-card py-3 px-2 md:px-6 md:py-4 mt-4">
    <img src="{{asset('images/courses/c'.$course_id.'/s'.$section_id.'.jpg')}}" class="max-w-40 sm:max-w-48 rounded shadow-lg" alt="Section {{$section_name_en}}">
    <div class="w-full block md:text-left text-gray-900 shadow-secondary-1 {{ $isUnlocked ? 'opacity-100' : 'opacity-50' }}">
        <div class="p-6">
            <h5 class="mb-2 justify-around md:justify-between text-xs md:text-xl font-semibold leading-tight">
                <span class=text-sky-900>{{$section_id}}. {{$section_name_en}} </span>|  <span>{{ $section_name}}</span>
            </h5>
        </div>
    </div>
</a>
