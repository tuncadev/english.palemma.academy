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
