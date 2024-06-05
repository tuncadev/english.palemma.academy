<!-- resources/views/components/gradient-box.blade.php -->
<div class="relative bg-gradient-to-b from-pink-500 to-orange-500 text-white p-5 rounded-t-3xl rounded-b-lg max-w-96 m-auto text-center">
    <div class="absolute inset-x-0 top-0 -mt-1 h-8  " style="background-color:#F3F4F6; clip-path: polygon(50% 100%, 0% 0%, 100% 0%);"></div>
    {{ $slot }}
</div>
