<!DOCTYPE html>
@php
    $locale = session('locale', 'uk');
    $currentLocale = session('locale', 'uk');
@endphp
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-meta-section :title="$pageTitle ?? 'English with Emma'" :locale="$locale" robots="index, follow"  />
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body class="bg-gray-100 p-0 m-0 relative flex flex-col h-screen justify-between">
        @php
            if(!isset($error)) { $error = ""; }
        @endphp
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
                <x-footer />
            </footer>
            @unless (auth()->check())
                <x-authorize-pop />
            @endunless
    </body>
</html>
