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
            <x-footer />
        </footer>
        @unless (auth()->check())
            <x-authorize-pop />
        @endunless
  </body>
</html>
