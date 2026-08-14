<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Briva Digital') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=dm-sans:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-50 dark:bg-gray-900">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <div class="mb-6">
                <a href="/" class="inline-flex items-center gap-2" aria-label="Briva Digital Home">
                    <svg class="w-8 h-8 text-[#f53003] dark:text-[#FF4433]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <rect x="0.5" y="0.5" width="31" height="31" rx="2" stroke="currentColor" stroke-width="1.5"/>
                        <path d="M8 10h16M8 16h16M8 22h10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    <span class="text-xl font-semibold text-gray-900 dark:text-gray-100">Briva Digital</span>
                </a>
            </div>

            <div class="w-full sm:max-w-md px-6 py-8 bg-white dark:bg-gray-800 shadow-sm rounded-xl">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
