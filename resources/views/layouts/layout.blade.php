<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <x-meta-section :title="$pageTitle ?? ''" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body class="bg-gray-100 p-0 m-0 relative flex flex-col h-screen justify-between">
    @yield('navigation')
        <main class="px-2 max-w-screen-xl m-auto flex-grow w-full">
            @if (session('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
        @endif
            @yield('content')
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
        @unless (auth()->check())
        <x-authorize-pop />
        @endunless
  </body>
</html>
