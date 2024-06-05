@php
$locale = session('locale', 'uk');
$currentLocale = session('locale', 'uk');
@endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 dark:text-gray-200 leading-tight">
            {{ __('dashboard.paidcourses') }}
        </h2>
    </x-slot>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container mx-auto p-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-gray-900 dark:text-gray-100">
                    @foreach ($courses as $course)
                    @php $active = $course->active == 1; @endphp

                        @if (!$active)
                            <x-paid-courses-cards :href="'javascript:void(0)'" :course="$course" :locale="$locale" />
                        @else
                            <x-paid-courses-cards :href="route('course.sections', ['course_id' => $course->id, 'section_id' => 1])" :course="$course" :locale="$locale" />
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

