<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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


    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}" />
    <meta name="apple-mobile-web-app-title" content="ClickStudiosDigital" />
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}" />

    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/669bfeabc1.js" crossorigin="anonymous"></script>

    <!-- Font Roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">

    <!-- Font Volkov -->
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">


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


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="flex flex-col min-h-screen bg-white font-roboto-condensed" x-data="{ scrollToTop: false }"
    x-on:scroll.window="scrollToTop = window.scrollY > 100">
    <x-navigation-main />

    <main class="max-w-5xl py-6 mx-auto sm:px-6 lg:px-8">
        {{ $slot }}
    </main>


    <x-footer />


    <!-- Scroll to Top Button -->
    <button x-show="scrollToTop" @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
        class="fixed flex items-center justify-center w-8 h-8 text-xs text-black bg-gray-300 rounded-sm animate-pulse hover:bg-white bottom-4 right-4 ">
        <i class="fa-solid fa-angles-up"></i>
    </button>

    @livewireScripts

</body>

</html>
