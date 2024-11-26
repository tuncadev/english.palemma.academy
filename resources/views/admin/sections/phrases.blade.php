@php
$locale = session('locale', 'uk');
@endphp
@extends('layouts.admin.layout')
    @section('content')
    <div class=" mx-auto p-4">
        <div class="flex  items-center mb-4 gap-2 ">
             <h1 class="text-xl font-semibold">Edit Phrases</h1>
             <a href="{{ route('admin.sections',['course_id' => $course_id, 'section_id' => $section_id]) }}" class="text-xs text-sky-700  hover:text-amber-800">< Back to Section Details</a>
         </div>
         @foreach ($phrases as $phrase)
            <form action="{{ route('admin.update', ['id' => $phrase->id, 'model' => urlencode(App\Models\Phrase::class)]) }}" method="POST" class="flex items-center max-w-full mb-4 border-b pb-4">
                @csrf
                <input type="hidden" id="updated_at" name="updated_at" value="{{ now() }}" />
                <div class="flex gap-4 flex-wrap w-full items-center">
                    @foreach ($phrase->getAttributes() as $column => $value)
                        <div class="{{ $column === 'id' || $column === 'created_at' || $column === 'updated_at' || $column === 'course_id' || $column === 'section_id' ? 'max-w-[80px] flex-none' : 'flex-1' }}">
                            <label for="{{ $column }}" class="block text-[10px] font-medium text-gray-700 capitalize">{{ $column }}</label>

                            @if ($column === 'id' || $column === 'created_at' || $column === 'updated_at' || $column === 'course_id' || $column === 'section_id')
                                <input type="text" id="{{ $column }}" name="{{ $column }}" value="{{ $value }}" disabled readonly
                                    class="text-xs disabled:bg-gray-200 mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 bg-gray-100">
                            @elseif (is_bool($value))
                                <select id="{{ $column }}" name="{{ $column }}"
                                        class="text-xs mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                    <option value="1" {{ $value ? 'selected' : '' }}>True</option>
                                    <option value="0" {{ !$value ? 'selected' : '' }}>False</option>
                                </select>
                            @else
                                <input type="text" id="{{ $column }}" name="{{ $column }}" value="{{ $value }}"
                                    class="text-xs mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                            @endif
                        </div>
                    @endforeach
                    <div class="flex-1">
                        <button type="submit" class="mt-4 px-4 py-2 text-xs bg-blue-500 text-white rounded hover:bg-blue-600">
                            Save Changes
                        </button>
                    </div>

                </div>
            </form>
        @endforeach
     </div>
    @endsection
