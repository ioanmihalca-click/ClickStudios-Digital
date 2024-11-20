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

    <section class="relative flex items-center justify-center h-screen text-white home-parallax home-fade">
        <!-- Loading Spinner -->
        <div x-show="loading" class="absolute inset-0 z-50 flex items-center justify-center bg-black">
            <div class="w-16 h-16 border-t-4 border-solid rounded-full border-emerald-700 animate-spin"></div>
        </div>

        <!-- Video background -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden">
            <video src="/assets/bg-video-new.mp4" autoplay muted loop
                class="absolute object-cover w-full h-full scale-125 -z-20"></video>
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50 -z-10"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 items-center justify-center text-center caption-content">
            <div
                class="font-roboto-condensed tracking-widest md:tracking-[4px] uppercase mb-8 md:mb-10 text-base md:text-lg">
                Noi suntem</div>
            <h1
                class="font-roboto-condensed uppercase mb-10 md:mb-14 tracking-[6px] md:tracking-[24px] font-semibold text-4xl md:text-5xl leading-relaxed md:leading-normal">
                Click Studios Digital
            </h1>
            <a href="#about"
                class="px-10 py-2 text-xs tracking-widest text-white uppercase transition-all duration-300 border border-white hover:bg-white hover:text-black font-roboto-condensed hover:border-transparent">Afla
                mai multe</a>
        </div>
        
                <!-- Fixed right-side "Ce e nou?" button -->
<div 
    x-data="{ isLoaded: false }"
    x-init="setTimeout(() => isLoaded = true, 500)"
    x-show="isLoaded"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform translate-y-4"
    x-transition:enter-end="opacity-100 transform translate-y-0"
    class="fixed left-0 z-50 transition-all duration-300 ease-in-out bottom-24 md:bottom-10"
    x-cloak
>
    <x-slider-news />
</div>
      

    </section>

    <x-despre />


    <x-footer />

    <button x-show="scrollToTop"
        @click="window.scrollTo({ top: 0, behavior: 'smooth' }); setTimeout(() => { scrollToTop = window.pageYOffset > 100; }, 100)"
        class="fixed z-50 flex items-center justify-center w-8 h-8 text-xs text-black bg-gray-300 rounded-sm animate-pulse hover:bg-white bottom-4 right-4">
        <i class="fa-solid fa-angles-up"></i>
    </button>

    @livewireScripts
</body>

</html>
