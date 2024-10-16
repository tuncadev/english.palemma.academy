@props(['course'])
<x-info-msg message_bold="{{ __('course.available_message') }}" />
<div class="flex flex-wrap items-center justify-start gap-2">
    <span class="text-xs">@lang('course.available_sections'):</span>
    @foreach ($course->allSections as $section)
        @if ( !in_array($section->id - 1, $course->completedSections ) && $section->id != 1 )
            <span class="hover:cursor-default px-2 py-1 bg-gray-200 rounded text-xs">{{$section->section_name_en}}</span>
        @else
        <a href="{{ route('course.show', ['course_id' => $course->id, 'section_id' => $section->id]) }}">
            <span class="hover:bg-sky-300 px-2 py-1 bg-green-200 rounded text-xs">{{$section->section_name_en}}</span>
        </a>
        @endif
    @endforeach
</div>
