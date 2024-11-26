@php
$locale = session('locale', 'uk');
@endphp
@extends('layouts.admin.layout')
    @section('content')
    <div class=" mx-auto p-4">
       <div class="flex  items-center mb-4 gap-2 ">
            <h1 class="text-xl font-semibold">Edit Section</h1>
            <a href="{{ route('admin.courses', ['course_id' => $course_id]) }}" class="text-xs text-sky-700  hover:text-amber-800">< Back to Course Details</a>
        </div>
        <div class="py-4 border-y mb-4 ">
            <ul class="flex flex-row gap-2 flex-wrap">
                 <a href="{{ route('admin.phrases', ['course_id' => $course_id, 'section_id' => $section->id]) }}" class="border-sky-300 border px-4 py-2 rounded-lg text-sky-900 hover:text-amber-800 hover:bg-gray-200">
                    <li class="text-xs ">
                        Phrases
                    </li>
                </a>

                <a href="{{ route('admin.practice', ['course_id' => $course_id, 'section_id' => $section->id]) }}" class="border-sky-300 border px-4 py-2 rounded-lg text-sky-900 hover:text-amber-800 hover:bg-gray-200 ">
                    <li class="text-xs ">
                        Practice Questions
                    </li>
                </a>

                <a href="{{ route('admin.quiz', ['course_id' => $course_id, 'section_id' => $section->id]) }}" class="border-sky-300 border px-4 py-2 rounded-lg text-sky-900 hover:text-amber-800 hover:bg-gray-200 ">
                    <li class="text-xs ">
                        Quiz Questions
                    </li>
                </a>
            </ul>
        </div>
        <form action="{{ route('admin.update', ['id' => $section->id, 'model' => ''.urlencode(App\Models\Section::class).'']) }}" method="POST" class="max-w-3xl">
            @csrf
            <input type="hidden" id="updated_at" name="updated_at" value="{{ now() }}" />
            @foreach ($section->getAttributes() as $column => $value)
                <div class="mb-4">
                    <label for="{{ $column }}" class="cursor:default block text-xs font-medium text-gray-700 capitalize">{{ $column }}</label>
                    @if ($column === 'id' || $column === 'created_at' || $column === 'updated_at' || $column === 'course_id')
                        <input type="text" id="{{ $column }}" name="{{ $column }}" value="{{ $value }}" readonly
                            class="text-xs  mt-1 bg-gray-200 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-xs bg-gray-100">
                    @elseif (is_bool($value))
                        <select id="{{ $column }}" name="{{ $column }}" class=" text-xs mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-xs">
                            <option value="1" {{ $value ? 'selected' : '' }}>True</option>
                            <option value="0" {{ !$value ? 'selected' : '' }}>False</option>
                        </select>
                    @else
                        <input type="text" id="{{ $column }}" name="{{ $column }}" value="{{ $value }}"
                            class="text-xs  mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-xs">
                    @endif
                </div>
            @endforeach

            <div class="mt-4">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                    Save Changes
                </button>
            </div>
        </form>
    </div>
    @endsection
