<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Descoperiți cele mai noi tendințe și informații din dezvoltare web si marketing digital." />
    <meta name="keywords"
        content="Click Studios Digital, blog, marketing digital, sfaturi SEO, dezvoltare web, e-commerce, marketing online, web design, blog marketing" />

    <!-- Etichete Open Graph pentru partajarea pe rețelele sociale -->
    <meta property="og:title" content="Blogul Click Studios Digital - Dezvoltare Web, Marketing Digital, SEO" />
    <meta property="og:description"
        content="Descoperiți cele mai noi tendințe și informații din marketingul digital si Web Development pe blogul Click Studios Digital. Rămâneți la curent cu sfaturi despre SEO, dezvoltare web și multe altele." />
    <meta property="og:image" content="https://clickstudios-digital.com/assets/blog-og-image.webp" />
    <meta property="og:image:type" content="image/webp" />
    <!-- <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" /> -->
    <meta property="og:image:alt" content="Blogul Click Studios Digital" />
    <meta property="og:url" content="https://clickstudios-digital.com/blog" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="ro_RO" />
    <meta property="og:site_name" content="Blogul Click Studios Digital" />

    <!-- Markup Schema pentru Blog -->
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

    <link rel="canonical" href="https://clickstudios-digital.com/blog" />

    <!-- Favicon -->
    <link rel="icon" href="/assets/favicon-click-studios-digital.jpg" type="image/x-icon" />
    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon-click-studios-digital.jpg" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>


    <!-- AOS Animation Library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

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



    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        {{ $slot }}
    </main>

   <footer class="text-center bg-gray-100" x-data>
   
    <hr class="my-6 border-t border-gray-300">
    <p class="text-gray-700">
      &copy; <span x-text="new Date().getFullYear()"></span> <strong>Click Studios Digital</strong>. Toate drepturile rezervate.
    </p>
  </div>
</footer>



 <!-- Arrow Up Button -->
    <button x-show="scrollToTop" @click="window.scrollTo({ top: 0, behavior: 'smooth' })" class="fixed flex items-center justify-center w-10 h-10 text-white bg-blue-500 rounded-full bottom-4 right-4 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
        </svg>
    </button>
    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

      @livewireScripts
    @vite('resources/js/app.js')
</body>
</html>
