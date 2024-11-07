<!-- resources/views/components/box-with-bottom-arrow.blade.php -->
<div {{ $attributes->merge(['class' => 'bg-[#C3DDFD] text-black m-auto text-center']) }} style="clip-path: polygon(0 0, 100% 0%, 100% 90%, 50% 100%, 0 90%); border-radius: 20px;">
    {{ $slot }}
</div>
