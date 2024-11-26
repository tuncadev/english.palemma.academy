@php
$locale = session('locale', 'uk');
@endphp
@extends('layouts.admin.layout')
    @section('content')
        <div class=" mx-auto p-4">
            <div class="flex  items-center gap-2 ">
                <h1 class="text-xl font-semibold">Edit Practice Questions</h1>
                <a href="{{ route('admin.sections',['course_id' => $course_id, 'section_id' => $section_id]) }}" class="text-xs text-sky-700  hover:text-amber-800">< Back to Section Details</a>
            </div>
            @php $i = 1; @endphp
            @foreach ($questions as $question)
                <div class="flex gap-2 flex-row items-center py-3 pl-3  border-b border-b-sky-400 hover:bg-gray-200">
                    <div class="text-xs flex">
                        <span class="inline-flex items-center justify-center w-3 h-3 p-3 text-sm font-medium text-blue-100 bg-blue-700 rounded-full mr-4">
                            {{ $i }}
                        </span>
                    </div>
                    <form action="{{ route('admin.update', ['id' => $question->id, 'model' => urlencode(App\Models\Practice::class)]) }}" method="POST"
                        class="flex flex-wrap gap-2 items-center max-w-full pb-4">
                        @csrf
                        <input type="hidden" id="updated_at" name="updated_at" value="{{ now() }}" />
                            @foreach ($question->getAttributes() as $column => $value)
                                <div class="{{ $column === 'id' || $column === 'created_at' || $column === 'updated_at' || $column === 'course_id' || $column === 'section_id' ? 'flex-none hidden' : ''}}">

                                    @if ($column === 'id' || $column === 'created_at' || $column === 'updated_at' || $column === 'course_id' || $column === 'section_id')
                                        <input type="hidden" id="{{ $column }}" name="{{ $column }}" value="{{ $value }}" readonly
                                            class="text-[10px]  disabled:bg-gray-200 mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 bg-gray-100">
                                    @elseif (is_bool($value))
                                    <label for="{{ $column }}" class="block text-[10px] font-medium text-gray-700 capitalize">{{ $column }}</label>
                                        <select id="{{ $column }}" name="{{ $column }}"
                                                class="text-[10px] mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                            <option value="1" {{ $value ? 'selected' : '' }}>True</option>
                                            <option value="0" {{ !$value ? 'selected' : '' }}>False</option>
                                        </select>
                                    @else
                                    <label for="{{ $column }}" class="block text-[10px] font-medium text-gray-700 capitalize">{{ $column }}</label>
                                        <input type="text" id="{{ $column }}" name="{{ $column }}" value="{{ $value }}" style="width: {{ mb_strlen($value) + 2 }}ch;"
                                            class="text-[10px] px-2 py-1 mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                    @endif
                                </div>
                            @endforeach
                            <div class="flex-1 max-w-[80px] mt-4">
                                <button type="submit" class="  text-green-600  hover:text-red-700" title="Save">
                                    <i class="text-xl  fa-solid fa-floppy-disk"></i>
                                </button>
                            </div>
                    </form>
                </div>
                @php $i += 1; @endphp
            @endforeach
        </div>

    @endsection
