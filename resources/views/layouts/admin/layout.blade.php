<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-meta-section :title="$pageTitle ?? 'English with Emma'" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body class="bg-white p-0 m-0 relative flex flex-col h-screen justify-between">
        @php
            if(!isset($error)) { $error = ""; }
        @endphp
        <x-admin.sidebar />
        <main class="px-2 sm:pl-64 m-auto flex-grow w-full">
            <div class="w-full p-4">
                @if (session('message'))
                    <div class="alert alert-danger">
                        {{ session('message') }}
                    </div>
                @endif
                @yield('content')
            </div>
        </main>
        @unless (auth()->check())
            <x-authorize-pop />
        @endunless
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Select all elements with data-href attribute
                document.querySelectorAll('[data-href]').forEach(element => {
                    element.addEventListener('click', function () {
                        const url = element.getAttribute('data-href');
                        if (url) {
                            window.location.href = url;
                        }
                    });
                });
            });
        </script>
    </body>
</html>
