<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Click Studios - Web Development & Digital Marketing</title>
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="description"
        content="Click Studios Digital Agency from Baia Mare, Laravel and TALL Stack developers, complex web applications, web design, digital marketing, SEO, and audio-video production." />
    <meta name="keywords"
        content="Click Studios Digital, Laravel, TALL stack, digital marketing agency, web development, SEO services, responsive web design, e-commerce, online marketing strategies, site optimization, organic traffic growth, PPC campaigns, social media marketing, content marketing, digital consultancy, web agency Baia Mare" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}" />
    <meta name="apple-mobile-web-app-title" content="ClickStudiosDigital" />
    {{-- <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}" /> --}}

    <!-- Open Graph Tags for Social Media Sharing -->
    <meta property="og:title" content="Click Studios - Web Development & Digital Marketing" />
    <meta property="og:description"
        content="Click Studios Digital Agency from Baia Mare, Laravel and TALL Stack developers, complex web applications, web design, digital marketing, SEO, and audio-video production." />
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
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "Click Studios Digital",
      "description": "Click Studios Digital Agency from Baia Mare, Laravel and TALL Stack developers, complex web applications, web design, digital marketing, SEO, and audio-video production.",
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

        <!-- Video background with gradient overlay -->
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
                Transforming Ideas into
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-cyan-400">
                    Digital Experiences
                </span>

            </h1>
            <p class="max-w-2xl mx-auto mb-8 text-lg text-gray-300 md:text-xl">
                Specialized in Laravel development and AI integrations, we create innovative web solutions.
            </p>
            <div class="flex flex-col justify-center gap-4 sm:flex-row">
                <a href="#about"
                    class="px-8 py-3 text-sm font-medium tracking-wider text-white uppercase transition-all duration-300 rounded-lg bg-emerald-600 hover:bg-emerald-700">
                    Discover Click Studios
                </a>
                <button @click="$dispatch('open-contact-modal')"
                    class="px-8 py-3 text-sm font-medium tracking-wider text-white uppercase transition-all duration-300 border rounded-lg border-white/30 hover:bg-white/10">
                    Contact Us
                </button>
            </div>

            <!-- Social Links -->
            <div class="flex justify-center gap-6 mt-8">
                <a href="https://github.com/ioanmihalca-click" target="_blank" rel="noopener noreferrer"
                    class="text-gray-400 transition-colors duration-300 hover:text-white">
                    <i class="text-5xl fa-brands fa-github"></i>
                </a>
                {{-- <a href="https://www.youtube.com/@clickstudiosdigital" target="_blank" rel="noopener noreferrer"
                    class="text-gray-400 transition-colors duration-300 hover:text-white">
                    <i class="text-2xl fa-brands fa-youtube"></i>
                </a> --}}
            </div>
        </div>
    </section>

    <!-- Slider News (păstrat conform cerințelor) -->
    <div class="fixed left-0 z-50 transition-all duration-300 ease-in-out bottom-4 md:bottom-10">
        <x-slider-news />
    </div>
    </section>

    <!-- Featured Apps -->

    <section id='about' class="bg-gradient-to-b from-gray-900 to-gray-800">
        <livewire:featured-apps />
    </section>

    <!-- About Section Modernized -->
    {{-- <section id="about" class="relative z-30 py-20 bg-gradient-to-b from-gray-900 to-gray-800">
        <div class="container px-4 mx-auto">
            <div class="max-w-3xl mx-auto text-center">
                <span
                    class="inline-block px-4 py-1.5 mb-6 text-sm font-medium text-emerald-400 bg-emerald-500/10 rounded-full">
                    About Us
                </span>
                <h2 class="mb-6 text-3xl font-bold text-white md:text-4xl">
                    Web Development Expertise
                </h2>
                <p class="mb-12 text-gray-300">
                    With a focus on modern technologies and measurable results, we are your ideal partner for digital
                    presence.
                </p>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 gap-8 mb-16 md:grid-cols-3">
                <div class="p-6 text-center bg-gray-800/50 rounded-xl">
                    <div class="text-3xl font-bold text-emerald-400">100%</div>
                    <div class="mt-2 text-gray-300">Client Satisfaction</div>
                </div>
                <div class="p-6 text-center bg-gray-800/50 rounded-xl">
                    <div class="text-3xl font-bold text-emerald-400">50+</div>
                    <div class="mt-2 text-gray-300">Completed Projects</div>
                </div>
                <div class="p-6 text-center bg-gray-800/50 rounded-xl">
                    <div class="text-3xl font-bold text-emerald-400">24/7</div>
                    <div class="mt-2 text-gray-300">Technical Support</div>
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
                    <h3 class="mb-2 text-xl font-semibold text-white">Laravel Development</h3>
                    <p class="text-gray-300">Robust and scalable web applications using the most popular PHP framework.
                    </p>
                </div>

                <div
                    class="p-6 transition-all duration-300 border group bg-gray-800/50 rounded-xl border-gray-700/50 hover:border-emerald-500/50">
                    <div
                        class="flex items-center justify-center w-12 h-12 mb-4 rounded-lg text-emerald-500 bg-emerald-500/10">
                        <i class="fa-solid fa-robot"></i>
                    </div>
                    <h3 class="mb-2 text-xl font-semibold text-white">Business Automation</h3>
                    <p class="text-gray-300">
                        24/7 intelligent chatbots, automated document processing, and AI-based management systems.
                    </p>
                </div>

                <div
                    class="p-6 transition-all duration-300 border group bg-gray-800/50 rounded-xl border-gray-700/50 hover:border-cyan-500/50">
                    <div
                        class="flex items-center justify-center w-12 h-12 mb-4 rounded-lg text-cyan-500 bg-cyan-500/10">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h3 class="mb-2 text-xl font-semibold text-white">Intelligent Marketing</h3>
                    <p class="text-gray-300">
                        AI recommendation systems, predictive analytics, and marketing automation to increase sales.
                    </p>
                </div>

                <div
                    class="p-6 transition-all duration-300 border group bg-gray-800/50 rounded-xl border-gray-700/50 hover:border-purple-500/50">
                    <div
                        class="flex items-center justify-center w-12 h-12 mb-4 text-purple-500 rounded-lg bg-purple-500/10">
                        <i class="fa-solid fa-gears"></i>
                    </div>
                    <h3 class="mb-2 text-xl font-semibold text-white">Workflows</h3>
                    <p class="text-gray-300">
                        Process optimization through custom automations and AI integrations.
                    </p>
                </div>

                <div
                    class="p-6 transition-all duration-300 border group bg-gray-800/50 rounded-xl border-gray-700/50 hover:border-orange-500/50">
                    <div
                        class="flex items-center justify-center w-12 h-12 mb-4 text-orange-500 rounded-lg bg-orange-500/10">
                        <i class="fa-solid fa-comments"></i>
                    </div>
                    <h3 class="mb-2 text-xl font-semibold text-white">Digital Support</h3>
                    <p class="text-gray-300">
                        Intelligent chatbots and automated customer assistance systems available 24/7.
                    </p>
                </div>

                <div
                    class="p-6 transition-all duration-300 border group bg-gray-800/50 rounded-xl border-gray-700/50 hover:border-emerald-500/50">
                    <div
                        class="flex items-center justify-center w-12 h-12 mb-4 rounded-lg text-emerald-500 bg-emerald-500/10">
                        <i class="fa-solid fa-file-invoice"></i>
                    </div>
                    <h3 class="mb-2 text-xl font-semibold text-white">Automated Management</h3>
                    <p class="text-gray-300">
                        Integrated invoicing and document management systems with AI processing.
                    </p>
                </div>

                <div
                    class="p-6 transition-all duration-300 border group bg-gray-800/50 rounded-xl border-gray-700/50 hover:border-blue-500/50">
                    <div
                        class="flex items-center justify-center w-12 h-12 mb-4 text-blue-500 rounded-lg bg-blue-500/10">
                        <i class="fa-solid fa-gauge-high"></i>
                    </div>
                    <h3 class="mb-2 text-xl font-semibold text-white">Real-Time Analytics</h3>
                    <p class="text-gray-300">
                        Interactive dashboards and predictive analytics for informed decisions.
                    </p>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Laravel & AI Tutorials Section -->
    {{-- <section class="relative z-30 py-20 bg-gray-800">
        <div class="container px-4 mx-auto">
            <div class="max-w-3xl mx-auto text-center">
                <span
                    class="inline-block px-4 py-1.5 mb-6 text-sm font-medium text-emerald-400 bg-emerald-500/10 rounded-full">
                    Laravel & AI Tutorials
                </span>
                <h2 class="mb-6 text-3xl font-bold text-white md:text-4xl">
                    Resources and Tutorials for Modern Development
                </h2>
                <p class="mb-12 text-gray-300">
                    Explore our series of tutorials about Laravel and AI integrations, created specifically for
                    developers and entrepreneurs.
                </p>
            </div>

            <!-- YouTube Links Cards -->
            <div class="grid grid-cols-1 gap-8 mb-12 md:grid-cols-2">
                <a href="https://www.youtube.com/@clickstudiosdigital" target="_blank" rel="noopener noreferrer"
                    class="p-6 transition-all duration-300 border group bg-gray-800/50 rounded-xl border-gray-700/50 hover:border-red-500/50">
                    <div class="flex items-center gap-4">
                        <div class="flex items-center justify-center w-12 h-12 text-red-500 rounded-lg bg-red-500/10">
                            <i class="text-2xl fa-brands fa-youtube"></i>
                        </div>
                        <div>
                            <h3 class="mb-2 text-xl font-semibold text-white">Our YouTube Channel</h3>
                            <p class="text-gray-300">Subscribe for tutorials and resources about modern web development
                            </p>
                        </div>
                    </div>
                </a>

                <a href="https://www.youtube.com/playlist?list=PLQ7Vo4mPYozh-Kyub4v0xab2TxSLi-S8j" target="_blank"
                    rel="noopener noreferrer"
                    class="p-6 transition-all duration-300 border group bg-gray-800/50 rounded-xl border-gray-700/50 hover:border-red-500/50">
                    <div class="flex items-center gap-4">
                        <div class="flex items-center justify-center w-12 h-12 text-red-500 rounded-lg bg-red-500/10">
                            <i class="text-xl fa-solid fa-play"></i>
                        </div>
                        <div>
                            <h3 class="mb-2 text-xl font-semibold text-white">Tutorials Playlist</h3>
                            <p class="text-gray-300">Complete series of Laravel and AI integration tutorials</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Benefits Grid -->
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div class="p-6 transition-all duration-300 border bg-gray-800/50 rounded-xl border-gray-700/50">
                    <div
                        class="flex items-center justify-center w-12 h-12 mb-4 rounded-lg text-emerald-500 bg-emerald-500/10">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h3 class="mb-2 text-xl font-semibold text-white">Practical Learning</h3>
                    <p class="text-gray-300">Real examples and practical implementations for modern projects</p>
                </div>

                <div class="p-6 transition-all duration-300 border bg-gray-800/50 rounded-xl border-gray-700/50">
                    <div
                        class="flex items-center justify-center w-12 h-12 mb-4 rounded-lg text-emerald-500 bg-emerald-500/10">
                        <i class="fa-solid fa-robot"></i>
                    </div>
                    <h3 class="mb-2 text-xl font-semibold text-white">AI Integrations</h3>
                    <p class="text-gray-300">Discover how to integrate AI technologies into your web applications</p>
                </div>

                <div class="p-6 transition-all duration-300 border bg-gray-800/50 rounded-xl border-gray-700/50">
                    <div
                        class="flex items-center justify-center w-12 h-12 mb-4 rounded-lg text-emerald-500 bg-emerald-500/10">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <h3 class="mb-2 text-xl font-semibold text-white">Source Code</h3>
                    <p class="text-gray-300">Access to code examples and resources for featured projects</p>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Latest Projects Section -->
    {{-- <section class="py-4 bg-gray-800">
        <div class="container px-4 mx-auto">

            <livewire:latest-projects />
        </div>
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
