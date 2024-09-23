<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <x-meta-section :title="$pageTitle ?? ''" />
  </head>
  <body class="bg-gray-100 p-0 m-0">
    @yield('navigation')
    <main class="px-2 max-w-screen-xl m-auto">
        @if (session('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
    @endif
        @yield('content')
    </main>
    @unless (auth()->check())
      <x-authorize-pop />
    @endunless
  </body>
</html>
