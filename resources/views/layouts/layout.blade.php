<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Palemma Academy</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://kit.fontawesome.com/d4521e1f6c.js" crossorigin="anonymous"></script>
  </head>
  @php
    $locale = session('locale', 'uk');
    $currentLocale = session('locale', 'uk');
  @endphp
  <body class="bg-gray-100 p-0 m-0">
    <div class="w-full bg-top_bar shadow-md">
      <nav class="md:max-w-3xl m-auto border-gray-200 dark:bg-gray-900 ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          <x-top-logo />
          <x-user-menu :currentLocale="$currentLocale" />
          <x-menu />
        </div>
      </nav>
    </div>
    <main class="relative flex flex-col m-auto justify-center sm:items-center p-4 gap-y-6">
      @yield('content')
    </main>
    @unless (auth()->check())
      <x-authorize-pop />
    @endunless
  </body>
</html>
