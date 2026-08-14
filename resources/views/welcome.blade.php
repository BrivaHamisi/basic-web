<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Briva Digital - Full-Stack Digital Partner. Strategy, design, development, and ongoing support under one roof.">

    <title>{{ config('app.name', 'Briva Digital') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=dm-sans:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* Minimal fallback styles */
            * { box-sizing: border-box; margin: 0; padding: 0; }
            html { font-family: 'DM Sans', ui-sans-serif, system-ui, sans-serif; -webkit-font-smoothing: antialiased; }
            body { background: #FDFDFC; color: #1b1b18; line-height: 1.5; }
            .sr-only { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0, 0, 0, 0); white-space: nowrap; border: 0; }
        </style>
    @endif
</head>
<body class="font-sans antialiased bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] min-h-screen flex flex-col">
    <!-- Skip Link -->
    <a href="#main-content" class="sr-only focus:not-sr-only fixed top-4 left-4 z-50 px-4 py-2 bg-[#f53003] text-white rounded-sm font-medium">Skip to main content</a>

    <header class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between" role="banner">
        @if (Route::has('login'))
            <nav class="flex items-center gap-4" aria-label="Primary navigation">
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC] bg-white dark:bg-[#161615] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg hover:border-[#19140035] dark:hover:border-[#62605b] transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-[#f53003] focus:ring-offset-2 dark:focus:ring-offset-[#161615]"
                    >
                        Dashboard
                    </a>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC] bg-transparent border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-lg transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-[#f53003] focus:ring-offset-2 dark:focus:ring-offset-[#0a0a0a]"
                    >
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC] bg-white dark:bg-[#161615] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg hover:border-[#19140035] dark:hover:border-[#62605b] transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-[#f53003] focus:ring-offset-2 dark:focus:ring-offset-[#161615]"
                        >
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    <main id="main-content" class="flex-1 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-20 flex items-center justify-center">
        <div class="w-full max-w-3xl mx-auto text-center">
            <!-- Logo/Brand -->
            <div class="mb-10">
                <a href="{{ url('/') }}" class="inline-flex items-center gap-3" aria-label="Briva Digital Home">
                    <svg class="w-10 h-10 text-[#f53003] dark:text-[#FF4433]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <rect x="0.5" y="0.5" width="31" height="31" rx="2" stroke="currentColor" stroke-width="1.5"/>
                        <path d="M8 10h16M8 16h16M8 22h10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    <span class="text-2xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">Briva Digital</span>
                </a>
                <p class="mt-2 text-sm text-[#706f6c] dark:text-[#A1A09A] font-mono uppercase tracking-wider">Full-Stack Digital Partner</p>
            </div>

            <!-- Hero Content -->
            <h1 class="text-4xl lg:text-5xl font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-4 leading-tight">
                Let&rsquo;s build something that matters
            </h1>
            <p class="text-lg text-[#706f6c] dark:text-[#A1A09A] mb-10 max-w-xl mx-auto leading-relaxed">
                Strategy, design, development, and ongoing support &mdash; under one roof. We build digital products that scale.
            </p>

            <!-- Primary Actions -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16">
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-white bg-[#1b1b18] dark:bg-white border border-transparent rounded-lg hover:bg-[#373737] dark:hover:bg-[#e5e5e5] focus:outline-none focus:ring-2 focus:ring-[#f53003] focus:ring-offset-2 dark:focus:ring-offset-[#0a0a0a] transition-colors duration-150"
                    >
                        Go to Dashboard
                    </a>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-[#1b1b18] dark:text-[#EDEDEC] bg-white dark:bg-[#161615] border border-[#1b1b18] dark:border-white rounded-lg hover:bg-[#f5f5f5] dark:hover:bg-[#262626] focus:outline-none focus:ring-2 focus:ring-[#f53003] focus:ring-offset-2 dark:focus:ring-offset-[#0a0a0a] transition-colors duration-150"
                    >
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-white bg-[#f53003] dark:bg-[#FF4433] border border-transparent rounded-lg hover:bg-[#e02b02] dark:hover:bg-[#e02b02] focus:outline-none focus:ring-2 focus:ring-[#f53003] focus:ring-offset-2 dark:focus:ring-offset-[#0a0a0a] transition-colors duration-150"
                        >
                            Get Started
                        </a>
                    @endif
                @endauth
            </div>

            <!-- Resources -->
            <nav aria-label="Resources" class="space-y-6">
                <div class="grid sm:grid-cols-2 gap-6 text-left">
                    <article class="p-6 bg-white dark:bg-[#161615] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-xl hover:border-[#19140035] dark:hover:border-[#62605b] transition-colors duration-150">
                        <div class="inline-flex items-center justify-center w-10 h-10 rounded-lg bg-[#FDFDFC] dark:bg-[#161615] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] border border-[#e3e3e0] dark:border-[#3E3E3A] mb-4">
                            <svg class="w-5 h-5 text-[#dbdbd7] dark:text-[#3E3E3A]" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <h3 class="font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-1">Documentation</h3>
                        <p class="text-sm text-[#706f6c] dark:text-[#A1A09A] mb-4">Comprehensive guides and API reference</p>
                        <a href="https://laravel.com/docs" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 font-medium underline underline-offset-4 text-[#f53003] dark:text-[#FF4433] text-sm">
                            <span>Read the docs</span>
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M10.5 9.5L5 4M5 4h5.5M5 4v5.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </a>
                    </article>

                    <article class="p-6 bg-white dark:bg-[#161615] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-xl hover:border-[#19140035] dark:hover:border-[#62605b] transition-colors duration-150">
                        <div class="inline-flex items-center justify-center w-10 h-10 rounded-lg bg-[#FDFDFC] dark:bg-[#161615] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] border border-[#e3e3e0] dark:border-[#3E3E3A] mb-4">
                            <svg class="w-5 h-5 text-[#dbdbd7] dark:text-[#3E3E3A]" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-1">Laracasts</h3>
                        <p class="text-sm text-[#706f6c] dark:text-[#A1A09A] mb-4">Video tutorials and skill training</p>
                        <a href="https://laracasts.com" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 font-medium underline underline-offset-4 text-[#f53003] dark:text-[#FF4433] text-sm">
                            <span>Watch tutorials</span>
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M10.5 9.5L5 4M5 4h5.5M5 4v5.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </a>
                    </article>
                </div>

                <div class="mt-6">
                    <a href="https://cloud.laravel.com" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-white bg-[#1b1b18] dark:bg-white border border-[#1b1b18] dark:border-white rounded-lg hover:bg-[#373737] dark:hover:bg-[#e5e5e5] focus:outline-none focus:ring-2 focus:ring-[#f53003] focus:ring-offset-2 dark:focus:ring-offset-[#0a0a0a] transition-colors duration-150">
                        Deploy with Laravel Cloud
                    </a>
                </div>
            </nav>
        </div>
    </main>

    <footer class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 border-t border-[#e3e3e0] dark:border-[#3E3E3A]" role="contentinfo">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 text-sm text-[#706f6c] dark:text-[#A1A09A]">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'Briva Digital') }}. All rights reserved.</p>
            <nav aria-label="Footer links" class="flex items-center gap-6">
                <a href="#" class="hover:text-[#1b1b18] dark:hover:text-[#EDEDEC] transition-colors duration-150">Privacy</a>
                <a href="#" class="hover:text-[#1b1b18] dark:hover:text-[#EDEDEC] transition-colors duration-150">Terms</a>
                <a href="#" class="hover:text-[#1b1b18] dark:hover:text-[#EDEDEC] transition-colors duration-150">Contact</a>
            </nav>
        </div>
    </footer>
</body>
</html>