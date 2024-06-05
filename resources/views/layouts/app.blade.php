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
        @vite(['resources/css/app.css','resources/js/app.js'])


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://kit.fontawesome.com/d4521e1f6c.js" crossorigin="anonymous"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="dashboard min-h-screen bg-gray-100 dark:bg-gray-900 z-10">
            @auth
            @include('layouts.navigation')
            <!-- Page Heading -->
            @isset($header)
                <header class="bg-gray-600 dark:bg-blue-800 shadow z-10">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 z-10">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            @else
                @include('auth.login')
            @endauth
        </div>
    </body>
</html>
