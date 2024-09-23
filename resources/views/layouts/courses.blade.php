<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <x-meta-section :pageTitle="$pageTitle ?? ''" />
  </head>
  @php
    $locale = session('locale', 'uk');
    $currentLocale = session('locale', 'uk');
  @endphp
  <body class="bg-gray-100 ">
    <div class="w-full bg-top_bar shadow-md l1_top ">
      <nav class=" ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          <x-top-logo />
          <x-user-menu :currentLocale="$currentLocale"  />
          <x-menu />
        </div>
      </nav>
    </div>
    <main class="relative flex flex-col m-auto justify-center sm:items-center p-4 gap-y-6 max-w-md md:max-w-2xl">
      @yield('content')
    </main>
    @unless (auth()->check())
      <x-authorize-pop />
    @endunless
  </body>
</html>
