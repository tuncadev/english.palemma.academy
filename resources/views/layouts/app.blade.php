<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@400;700&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css','resources/js/app.js'])
        <script src="https://kit.fontawesome.com/d4521e1f6c.js" crossorigin="anonymous"></script>
    </head>
    @php
    $locale = session('locale', 'uk');
    $currentLocale = session('locale', 'uk');
  @endphp
    <body class="bg-gray-100">
        <div class="dashboard min-h-screen bg-gray-100 dark:bg-gray-900 z-10">
            <div class="w-full bg-top_bar shadow-md l1_top ">
                <nav class="md:max-w-3xl m-auto border-gray-200 dark:bg-gray-900 ">
                  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                    <x-top-logo />
                    <x-user-menu :currentLocale="$currentLocale"  />
                    <x-menu />
                  </div>
                </nav>
              </div>
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
