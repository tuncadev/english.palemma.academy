<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-meta-section :title="$pageTitle ?? ''" />
    </head>
    @php
    $locale = session('locale', 'uk');
    $currentLocale = session('locale', 'uk');
  @endphp
    <body class="bg-gray-100">
        <div class="dashboard min-h-screen bg-gray-100 dark:bg-gray-900 z-10">
            <div class="relative w-full bg-top_bar shadow-md l1_top">
                <x-nav :locale="$locale" :currentLocale="$currentLocale" />
            </div>
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
