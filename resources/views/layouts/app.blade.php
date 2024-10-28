<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-meta-section :title="$pageTitle ?? ''" />
    </head>
    @php
    $locale = session('locale', 'uk');
    $currentLocale = session('locale', 'uk');
  @endphp
    <body class="bg-gray-100 relative flex flex-col h-screen justify-between">
        <div class="dashboard min-h-screen bg-gray-100 dark:bg-gray-900 z-10">
            <div class="relative w-full bg-top_bar shadow-md l1_top">
                <x-nav :locale="$locale" :currentLocale="$currentLocale" />
            </div>
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            <footer class="flex flex-col w-full justify-center text-center pt-2 bg-sky-100 border-t border-t-gray-300">
                <div class="flex flex-row w-full justify-center gap-6 text-gray-400 items-center pb-2">
                    <a href="/terms" class="text-xs text-sky-700 hover:text-red-800"> Terms </a>
                    <span class="text-sm">•</span>
                    <a href="/privacy" class="text-xs text-sky-700 hover:text-red-800">Privacy</a>
                </div>
                <div class="w-full text-center py-1 items-center bg-sky-900 border-t border-t-sky-500">
                    <span class="text-xs text-gray-200">
                        <i class="text-gray-200 fa-solid fa-copyright"></i> 2024 - english.palemma.academy
                    </span>
                </div>
            </footer>
        </div>
    </body>
</html>
