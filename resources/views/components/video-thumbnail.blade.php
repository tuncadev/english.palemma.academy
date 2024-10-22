@props(['video'])
<div {{ $attributes->merge(['class'=>'relative']) }} id="{{$video->id}}">
    <i class="absolute text-3xl fa-regular fa-circle-play top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 text-white"></i>
    <img src="{{asset('video/course1/img/thumb2.png')}}" class="border border-sky-500 p-1   rounded shadow-lg" alt="">
</div>
