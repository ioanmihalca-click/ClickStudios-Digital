<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Click Studios - Dezvoltare Web & Marketing Digital</title>
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="description"
        content="Agentia Click Studios Digital din Baia Mare, dezvoltatori Laravel si TALL Stack, aplicatii web complexe, web design, marketing digital, SEO, și producție audio-video." />
    <meta name="keywords"
        content="Click Studios Digital, Laravel, TALL stack, agenție marketing digital, dezvoltare web, servicii SEO, web design responsiv, e-commerce, strategii marketing online, optimizare site, creștere trafic organic, campanii PPC, social media marketing, content marketing, consultanță digitală, agenție web Baia Mare" />

    <!-- Open Graph Tags for Social Media Sharing -->
    <meta property="og:title" content="Click Studios - Dezvoltare Web & Marketing Digital" />
    <meta property="og:description"
        content="Agentia Click Studios Digital din Baia Mare, dezvoltatori Laravel si TALL Stack, aplicatii web complexe, web design, marketing digital, SEO, și producție audio-video." />
    <meta property="og:image" content="{{ asset('assets/OG-Click-Studios-Digital.webp') }}" />
    <meta property="og:image:type" content="image/webp">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Click Studios - Dezvoltare Web si Marketing Digital" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="ro_RO" />
    <meta property="og:site_name" content="Click Studios Digital" />

    <!-- Local Business Schema Markup -->
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ProfessionalService",
  "name": "Click Studios Digital",
  "description": "Agentia Click Studios Digital din Baia Mare, dezvoltatori Laravel si TALL Stack, aplicatii web complexe, web design, marketing digital, SEO, și producție audio-video.",
  "image": "{{ asset('assets/logo.jpg') }}",
  "url": "{{ url('/') }}",
  "telephone": "+40734411115",
  "email": "contact@clickstudios-digital.com",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Nisiparilor 35",
    "addressLocality": "Baia Mare",
    "addressRegion": "Maramures",
    "postalCode": "430122",
    "addressCountry": "RO"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "47.6573",
    "longitude": "23.5705"
  },
  "openingHours": [
    "Mo-Fr 09:00-17:00"
  ],
  "sameAs": [
    "https://web.facebook.com/profile.php?id=61560427317860",
    
    "https://www.instagram.com/clickstudios_digital"
  ],
  "priceRange": "$$",
  "paymentAccepted": ["cash", "credit card"],
  "currenciesAccepted": "RON",
  "logo": {
    "@type": "ImageObject",
    "url": "{{ asset('assets/logo.jpg') }}"
  },
  "services": [
    "Web Design",
    "Dezvoltare Web",
    "SEO",
    "Marketing Digital",
    "Social Media Marketing",
    "Content Marketing",
    "PPC Advertising"
  ],
  "areaServed": {
    "@type": "Country",
    "name": "Romania"
  }
}
</script>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#10b981">
    <meta name="theme-color" content="#ffffff">



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


<body class="font-sans bg-white" x-data="{
    scrollToTop: false,
    loading: true,
    showContactModal: false,
    handleScroll() {
        this.scrollToTop = window.pageYOffset > 100;
    }
}" x-on:scroll.window.throttle.50ms="handleScroll()"
    x-init="$nextTick(() => {
        setTimeout(() => loading = false, 700);
        handleScroll();
        window.addEventListener('touchmove', handleScroll, { passive: true });
    })">
    <x-navigation-main />

    <!-- Hero Section Modern -->
    <section class="relative flex items-center justify-center min-h-screen text-white">
        <!-- Loading Spinner -->
        <div x-show="loading" class="absolute inset-0 z-50 flex items-center justify-center bg-black">
            <div class="w-16 h-16 border-t-4 border-solid rounded-full border-emerald-700 animate-spin"></div>
        </div>

        <!-- Video background cu overlay gradient -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden">
            <video src="/assets/bg-video-new.mp4" autoplay muted loop
                class="absolute object-cover w-full h-full scale-125 -z-20"></video>
            <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/70 to-gray-900 -z-10"></div>
        </div>

        <!-- Hero Content -->
        <div class="container relative z-10 px-4 mx-auto text-center">
            <span
                class="inline-block px-4 py-1.5 mb-6 text-sm font-medium text-emerald-400 bg-emerald-500/10 rounded-full">
                Web Development & Digital Marketing
            </span>
            <h1 class="max-w-4xl mx-auto mb-6 text-4xl font-bold md:text-5xl lg:text-6xl">
                Transformăm idei în
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-cyan-400">
                    experiențe digitale
                </span>
                memorabile
            </h1>
            <p class="max-w-2xl mx-auto mb-8 text-lg text-gray-300 md:text-xl">
                Specializați în dezvoltare Laravel și integrări AI, creăm soluții web inovatoare care propulsează
                afacerea ta în era digitală.
            </p>
            <div class="flex flex-col justify-center gap-4 sm:flex-row">
                <a href="#about"
                    class="px-8 py-3 text-sm font-medium tracking-wider text-white uppercase transition-all duration-300 rounded-lg bg-emerald-600 hover:bg-emerald-700">
                    Descoperă Click Studios
                </a>
                <button @click="$dispatch('open-contact-modal')"
                    class="px-8 py-3 text-sm font-medium tracking-wider text-white uppercase transition-all duration-300 border rounded-lg border-white/30 hover:bg-white/10">
                    Contactează-ne
                </button>
            </div>
        </div>

        <!-- Slider News (păstrat conform cerințelor) -->
        <div class="fixed left-0 z-50 transition-all duration-300 ease-in-out bottom-4 md:bottom-10">
            <x-slider-news />
        </div>
    </section>

    <!-- Despre Section Modernizat -->
    <section id="about" class="relative z-30 py-20 bg-gradient-to-b from-gray-900 to-gray-800">
        <div class="container px-4 mx-auto">
            <div class="max-w-3xl mx-auto text-center">
                <span
                    class="inline-block px-4 py-1.5 mb-6 text-sm font-medium text-emerald-400 bg-emerald-500/10 rounded-full">
                    Despre Noi
                </span>
                <h2 class="mb-6 text-3xl font-bold text-white md:text-4xl">
                    Expertiză în Dezvoltare Web și Marketing Digital
                </h2>
                <p class="mb-12 text-gray-300">
                    Cu focus pe tehnologii moderne și rezultate măsurabile, suntem partenerul ideal pentru prezența ta
                    digitală.
                </p>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 gap-8 mb-16 md:grid-cols-3">
                <div class="p-6 text-center bg-gray-800/50 rounded-xl">
                    <div class="text-3xl font-bold text-emerald-400">100%</div>
                    <div class="mt-2 text-gray-300">Satisfacție Clienți</div>
                </div>
                <div class="p-6 text-center bg-gray-800/50 rounded-xl">
                    <div class="text-3xl font-bold text-emerald-400">50+</div>
                    <div class="mt-2 text-gray-300">Proiecte Finalizate</div>
                </div>
                <div class="p-6 text-center bg-gray-800/50 rounded-xl">
                    <div class="text-3xl font-bold text-emerald-400">24/7</div>
                    <div class="mt-2 text-gray-300">Suport Tehnic</div>
                </div>
            </div>

            <!-- Feature Grid -->
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div
                    class="p-6 transition-all duration-300 border group bg-gray-800/50 rounded-xl border-gray-700/50 hover:border-emerald-500/50">
                    <div
                        class="flex items-center justify-center w-12 h-12 mb-4 rounded-lg text-emerald-500 bg-emerald-500/10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-semibold text-white">Dezvoltare Laravel</h3>
                    <p class="text-gray-300">Aplicații web robuste și scalabile folosind cel mai popular framework PHP.
                    </p>
                </div>

                <div
                    class="p-6 transition-all duration-300 border group bg-gray-800/50 rounded-xl border-gray-700/50 hover:border-cyan-500/50">
                    <div
                        class="flex items-center justify-center w-12 h-12 mb-4 rounded-lg text-cyan-500 bg-cyan-500/10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-semibold text-white">Integrări AI</h3>
                    <p class="text-gray-300">Automatizări inteligente și chatboți pentru optimizarea proceselor de
                        business.</p>
                </div>

                <div
                    class="p-6 transition-all duration-300 border group bg-gray-800/50 rounded-xl border-gray-700/50 hover:border-purple-500/50">
                    <div
                        class="flex items-center justify-center w-12 h-12 mb-4 text-purple-500 rounded-lg bg-purple-500/10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-semibold text-white">Marketing Digital</h3>
                    <p class="text-gray-300">Strategii complete de marketing online pentru creșterea afacerii tale.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Projects Section -->
    <section class="py-4 bg-gray-800">
        <div class="container px-4 mx-auto">
            
            <livewire:latest-projects />
        </div>
    </section>

    <x-footer />

    <!-- Scroll to Top Button -->
    <button x-show="scrollToTop"
        @click="window.scrollTo({ top: 0, behavior: 'smooth' }); setTimeout(() => { scrollToTop = window.pageYOffset > 100; }, 100)"
        class="fixed z-50 flex items-center justify-center w-8 h-8 text-xs text-black bg-gray-300 rounded-sm animate-pulse hover:bg-white bottom-4 right-4">
        <i class="fa-solid fa-angles-up"></i>
    </button>

    @livewireScripts
</body>

</html>
