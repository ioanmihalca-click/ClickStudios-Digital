<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('app.title') }}</title>
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="description" content="{{ __('app.meta_description') }}" />
    <meta name="keywords" content="{{ __('app.meta_keywords') }}" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}" />
    <meta name="apple-mobile-web-app-title" content="ClickStudiosDigital" />
    {{-- <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}" /> --}}

    <!-- Open Graph Tags for Social Media Sharing -->
    <meta property="og:title" content="{{ __('app.og.title') }}" />
    <meta property="og:description" content="{{ __('app.og.description') }}" />
    <meta property="og:image" content="{{ asset('assets/OG-Click-Studios-Digital.webp') }}" />
    <meta property="og:image:type" content="image/webp">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Click Studios - Web Development and Digital Marketing" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="Click Studios Digital" />

    <!-- Local Business Schema Markup -->
    <script type="application/ld+json">
    @verbatim
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "Click Studios Digital",
      "description": "{{ __('app.schema.description') }}",
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
        "Web Development",
        "SEO",
        "Digital Marketing",
        "Social Media Marketing",
        "Content Marketing",
        "PPC Advertising"
      ],
      "areaServed": {
        "@type": "Country",
        "name": "Romania"
      }
    }
    @endverbatim
    </script>

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


<body class="bg-white font-roboto-condensed" x-data="{
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
    <section class="relative flex items-center justify-center min-h-screen pt-20 text-white">
        <!-- Loading Spinner -->
        <div x-show="loading" class="absolute inset-0 z-50 flex items-center justify-center bg-black">
            <div class="w-16 h-16 border-t-4 border-solid rounded-full border-emerald-700 animate-spin"></div>
        </div>

        <!-- Video background with gradient overlay -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden">
            <video src="/assets/bg-video-new.mp4" autoplay muted loop
                class="absolute object-cover w-full h-full scale-125 -z-20"></video>
            <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/70 to-gray-900 -z-10"></div>

            <!-- Subtle pattern overlay for depth -->
            <div
                class="absolute inset-0 opacity-10 -z-10 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJ3aGl0ZSIgZmlsbC1ydWxlPSJldmVub2RkIj48Y2lyY2xlIGN4PSIyIiBjeT0iMiIgcj0iMSIvPjwvZz48L3N2Zz4=')]">
            </div>
        </div>

        <!-- Hero Content -->
        <div class="container relative z-10 px-4 mx-auto text-center">
            <span
                class="inline-block px-5 py-2 mb-8 text-sm font-medium border rounded-full text-emerald-400 bg-emerald-500/10 backdrop-blur-sm border-emerald-500/20">
                <i class="mr-2 fa-solid fa-code"></i> {{ __('messages.hero.tagline') }}
            </span>
            <h1 class="max-w-3xl mx-auto mb-6 text-4xl font-bold md:text-5xl lg:text-6xl">
                {{ __('messages.hero.title') }}
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-cyan-400">
                    {{ __('messages.hero.title-gradient') }}
                </span>

            </h1>
            <p class="max-w-4xl mx-auto mb-8 text-lg text-gray-300 md:text-xl">
                {{ __('messages.hero.subtitle') }}
            </p>
            <div class="flex flex-col justify-center gap-4 sm:flex-row">
                <a href="#about"
                    class="px-8 py-3 text-sm font-semibold tracking-wider text-white uppercase transition-all duration-300 rounded-lg bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 focus:ring-offset-black">
                    {{ __('messages.hero.discover_button') }}
                </a>
                <button @click="$dispatch('open-contact-modal')"
                    class="px-8 py-3 text-sm font-semibold tracking-wider text-white uppercase transition-all duration-300 border rounded-lg border-white/30 hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-white/50 focus:ring-offset-2 focus:ring-offset-black">
                    {{ __('messages.hero.contact_button') }}
                </button>
            </div>

            <!-- Social Links -->
            <div class="flex justify-center gap-6 mt-8">
                <a href="https://github.com/ioanmihalca-click" target="_blank" rel="noopener noreferrer"
                    class="text-gray-400 transition-colors duration-300 hover:text-white">
                    <i class="text-5xl fa-brands fa-github"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Apps -->
    {{-- <section id='about' class="bg-gradient-to-b from-gray-900 to-gray-800">
        <livewire:featured-apps />
    </section> --}}

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
