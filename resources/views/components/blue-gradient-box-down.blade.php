@props(['angle'])
@php $angle = $angle ?? 10 @endphp

<div {{ $attributes->merge(['class' => 'overflow-visible relative bg-[#C3DDFD] text-black  rounded-lg m-auto text-center']) }} style="clip-path: polygon(0 0, 49% {{ $angle }}%, 100% 0, 100% 100%, 0 100%);">
    {{ $slot }}
</div>
