@props(['name', 'locked', 'id', 'course_id', 'current_id', 'class'])
<div class="relative -start-6">
<span class="absolute flex items-center justify-center w-8 h-8 bg-green-200 rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
    <svg class="w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
    </svg>
</span>
<span class="absolute flex items-center justify-center w-6 h-6 {{$class}} rounded-full -start-4 top-10 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
    <svg class="w-3.5 h-3.5 text-gray-200 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
        <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
    </svg>
</span>
</div>
<a href="{{ route('course.show', ['course_id' => $course_id, 'section_id' => $id, 'colorClass' => $class]) }}">
<div class="">
<h3 class="font-medium leading-tight">{{ $name }}</h3>
<p class="text-sm">
    @lang('sidebar.section') # {{$id}}
</p>

@if ($current_id == $id)
<div class=" mt-1 py-1 px-2 rounded-lg flex flex-col">
    <div class="{{$class}} mt-1 text-xsm py-1 px-2 rounded-lg flex flex-col">
        @lang('sidebar.currentsection')
        </div>
@else

<div class="bg-green-300 mt-1 py-1 px-2 rounded-lg">
@lang('sidebar.completed')
</div>

@endif



</div>
</a>
