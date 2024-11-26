@php
$locale = session('locale', 'uk');
@endphp
@extends('layouts.admin.layout')
    @section('content')
    <div class=" mx-auto p-4">
        <h1 class="text-xl font-semibold mb-4">Edit Course</h1>
        <div class="py-4 border-y mb-4 ">
            <ul class="flex flex-row gap-2 flex-wrap">
                @foreach ($sections as $section)
                    <a href="{{ route('admin.sections', ['course_id'=>$course->id, 'section_id' => $section->id ]) }}">
                        <li class="text-xs ">
                            {{ $section->section_name_en }} |
                        </li>
                    </a>
                @endforeach
            </ul>
        </div>
        <form action="{{ route('admin.update', ['id' => $course->id, 'model' => ''.urlencode(App\Models\Course::class).'']) }}" method="POST" class="max-w-3xl">
            @csrf
            <input type="hidden" id="updated_at" name="updated_at" value="{{ now() }}" />
            @foreach ($course->getAttributes() as $column => $value)
                <div class="mb-4">
                    <label for="{{ $column }}" class="block text-xs font-medium text-gray-700 capitalize">{{ $column }}</label>
                    @if ($column === 'id')
                        <input type="text" id="{{ $column }}" name="{{ $column }}" value="{{ $value }}" disabled readonly
                            class="text-xs  mt-1 disabled:bg-gray-200 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-xs bg-gray-100">
                    @elseif ($column === 'created_at' || $column === 'updated_at')
                        <input type="text" id="{{ $column }}" name="{{ $column }}" value="{{ $value }}" disabled readonly
                            class="text-xs  mt-1 disabled:bg-gray-200 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-xs bg-gray-100">
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
