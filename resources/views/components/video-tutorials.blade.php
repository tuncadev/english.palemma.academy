
@php
    $video_short_description = "video_short_description_" . $locale;
    $video_name = "video_name_" . $locale;
@endphp
<li class="flex bg-gray-100 group flex-col justify-start text-center items-center p-4 rounded-md shadow-md border border-gray-300 hover:cursor-pointer h-full">
    <x-video-thumbnail :video="$video" class="max-w-52 shadow-md" />
    <div class="max-w-lg grid text-left flex-1">
        <span class="flex items-center group-hover:bg-green-200 bg-green-100 my-4 text-sm rounded shadow-md font-semibold text-gray-700 p-2">{{ $video->$video_name }}</span>
        <span class="flex items-center text-sm text-teal-600 p-2 group-hover:text-teal-900"> {{ $video->$video_short_description }} </span>
    </div>
</li>

