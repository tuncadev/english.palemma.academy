@php
    $locale = session('locale', 'uk');
    $currentLocale = session('locale', 'uk');
@endphp
    <div class="relative w-full bg-top_bar shadow-md l1_top">
        <x-nav :locale="$locale" :currentLocale="$currentLocale" />
    </div>
