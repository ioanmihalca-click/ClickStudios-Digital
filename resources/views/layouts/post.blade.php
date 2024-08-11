<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta property="og:title" content="@yield('og_title')">
    <meta property="og:description" content="@yield('og_description')">
    <meta property="og:image" content="@yield('og_image')">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="{{ url()->current() }}">

    <link rel="canonical" href="{{ url()->current() }}">
    <!-- Favicon -->
    <link rel="icon" href="/assets/favicon-click-studios-digital.jpg" type="image/x-icon" />
    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon-click-studios-digital.jpg" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QFL38JS6PJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-QFL38JS6PJ');
    </script>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="font-sans bg-white " x-data="{ scrollToTop: false }" x-on:scroll.window="scrollToTop = window.scrollY > 100">
<x-header-nav />

    <main class="max-w-5xl py-6 mx-auto sm:px-6 lg:px-8">
        {{ $slot }}
    </main>


  <footer class="py-4 text-xs text-center bg-gray-100 md:text-sm">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
       
            <p class="text-gray-700">
                &copy; <span x-text="new Date().getFullYear()"></span> <strong>Click Studios Digital</strong>. Toate drepturile rezervate.
            </p>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button 
        x-show="scrollToTop" 
        @click="window.scrollTo({ top: 0, behavior: 'smooth' })" 
        class="fixed p-2 text-white transition-all duration-300 bg-blue-500 rounded-full shadow-lg bottom-4 right-4 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600"
        aria-label="Scroll to top"
    >
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
        </svg>
    </button>

    @livewireScripts
    @vite('resources/js/app.js')
</body>
</html>