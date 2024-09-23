@php
    $locale = session('locale', 'uk');
    $currentLocale = session('locale', 'uk');
@endphp
    <div class="w-full bg-top_bar shadow-md l1_top ">
    <nav class=" ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <x-top-logo />
        <x-user-menu :currentLocale="$currentLocale"  />
        <x-menu />
        </div>
    </nav>
    </div>
