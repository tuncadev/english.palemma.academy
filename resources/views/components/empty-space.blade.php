@props(['height'])
@php
    $heightClass = isset($height) ? "h-$height" : "h-32";
@endphp
<div {{ $attributes->class(['w-full'])->merge(['class' => "$heightClass"]) }}></div>
