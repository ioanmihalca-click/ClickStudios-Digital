<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogul Click Studios Digital - Dezvoltare Web, Marketing Digital, SEO</title>
    <link rel="canonical" href="{{ url()->current() }}">

    <meta name="description"
        content="Descoperiți cele mai noi tendințe și informații din dezvoltare web si marketing digital.">
    <meta name="keywords"
        content="Click Studios Digital, blog, marketing digital, sfaturi SEO, dezvoltare web, e-commerce, marketing online, web design, blog marketing">

    <!-- Open Graph Tags -->
    <meta property="og:title" content="Blogul Click Studios Digital - Dezvoltare Web, Marketing Digital, SEO">
    <meta property="og:description"
        content="Descoperiți cele mai noi tendințe și informații din marketingul digital si Web Development pe blogul Click Studios Digital. Rămâneți la curent cu sfaturi despre SEO, dezvoltare web și multe altele.">
    <meta property="og:image" content="https://clickstudios-digital.com/assets/blog-og-image.webp">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="ro_RO">
    <meta property="og:site_name" content="Blogul Click Studios Digital">

    <!-- Schema Markup -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Blog",
            "name": "Blogul Click Studios Digital",
            "description": "Descoperiți cele mai noi tendințe și informații din marketingul digital si Web Development pe blogul Click Studios Digital. Rămâneți la curent cu sfaturi despre SEO, dezvoltare web și multe altele.",
            "url": "https://clickstudios-digital.com/blog/blog-index.html",
            "image": "https://clickstudios-digital.com/assets/blog-og-image.webp",
            "inLanguage": "ro_RO",
            "publisher": {
                "@type": "Organization",
                "name": "Click Studios Digital",
                "url": "https://clickstudios-digital.com",
                "logo": {
                    "@type": "ImageObject",
                    "url": "https://clickstudios-digital.com/assets/logo.jpg"
                }
            }
        }
    </script>


    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#10b981">
    <meta name="theme-color" content="#ffffff">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/669bfeabc1.js" crossorigin="anonymous"></script>

    <!-- Font Roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">

    <!-- Font Volkov -->
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">

    <!-- Google Analytics -->
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

<body class="flex flex-col min-h-screen font-sans bg-white" x-data="{ scrollToTop: false }"
    x-on:scroll.window="scrollToTop = window.scrollY > 100">

    <x-navigation-main />

    <main class="flex-grow px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
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
