<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descoperiți cele mai noi tendințe și informații din dezvoltare web si marketing digital.">
    <meta name="keywords" content="Click Studios Digital, blog, marketing digital, sfaturi SEO, dezvoltare web, e-commerce, marketing online, web design, blog marketing">
    
    <!-- Open Graph Tags -->
    <meta property="og:title" content="Blogul Click Studios Digital - Dezvoltare Web, Marketing Digital, SEO">
    <meta property="og:description" content="Descoperiți cele mai noi tendințe și informații din marketingul digital si Web Development pe blogul Click Studios Digital. Rămâneți la curent cu sfaturi despre SEO, dezvoltare web și multe altele.">
    <meta property="og:image" content="https://clickstudios-digital.com/assets/blog-og-image.webp">
    <meta property="og:url" content="https://clickstudios-digital.com/blog">
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

    <title>Blogul Click Studios Digital - Dezvoltare Web, Marketing Digital, SEO</title>
    <link rel="canonical" href="https://clickstudios-digital.com/blog">
    <link rel="icon" href="/assets/favicon-click-studios-digital.jpg" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon-click-studios-digital.jpg">

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    @vite('resources/css/app.css')
    @livewireStyles

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QFL38JS6PJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-QFL38JS6PJ');
    </script>
</head>

<body class="font-sans bg-white min-h-screen flex flex-col" x-data="{ scrollToTop: false }" x-on:scroll.window="scrollToTop = window.scrollY > 100">
    <x-header-nav />

    <main class="flex-grow max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        {{ $slot }}
    </main>

    <footer class="bg-gray-100 py-4 text-center text-xs md:text-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
       
            <p class="text-gray-700">
                &copy; <span x-text="new Date().getFullYear()"></span> <strong>Click Studios Digital</strong>. Toate drepturile rezervate.
            </p>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button 
        x-show="scrollToTop" 
        @click="window.scrollTo({ top: 0, behavior: 'smooth' })" 
        class="fixed bottom-4 right-4 p-2 bg-blue-500 text-white rounded-full shadow-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600 transition-all duration-300"
        aria-label="Scroll to top"
    >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
        </svg>
    </button>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @livewireScripts
    @vite('resources/js/app.js')
</body>
</html>