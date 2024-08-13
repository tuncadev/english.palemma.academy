<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Palemma Academy</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@400;700&display=swap" rel="stylesheet">

    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://kit.fontawesome.com/d4521e1f6c.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  </head>
  <body class="bg-gray-100 p-0 m-0">
    @yield('navigation')
    <main class="px-2">
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
