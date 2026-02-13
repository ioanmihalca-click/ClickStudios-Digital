<!DOCTYPE html>
<html class="scroll-smooth overscroll-none" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? __('app.title') }}</title>
    <link rel="canonical" href="{{ url()->current() }}">

    <link rel="preload" as="image" type="image/webp" href="{{ asset('assets/bg/mobile.webp') }}"
        media="(max-width: 767px)">
    <link rel="preload" as="image" type="image/webp" href="{{ asset('assets/bg/desktop.webp') }}"
        media="(min-width: 768px)">

    <meta name="description" content="{{ $description ?? __('app.meta_description') }}">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="keywords" content="{{ __('app.meta_keywords') }}" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}" />
    <meta name="apple-mobile-web-app-title" content="ClickStudiosDigital" />
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/669bfeabc1.js" crossorigin="anonymous"></script>

    <!-- Open Graph Tags for Social Media Sharing -->
    <meta property="og:title" content="{{ __('app.og.title') }}" />
    <meta property="og:description" content="{{ __('app.og.description') }}" />
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
  "@@context": "https://schema.org",
  "@@type": ["ProfessionalService", "Organization"],
  "name": "Click Studios Digital",
  "description": "{{ __('app.schema.description') }}",
  "image": "{{ asset('assets/logo.jpg') }}",
  "url": "{{ url('/') }}",
  "telephone": "+40734411115",
  "email": "contact@clickstudios-digital.com",
  "address": {
    "@@type": "PostalAddress",
    "streetAddress": "Nisiparilor 35",
    "addressLocality": "Baia Mare",
    "addressRegion": "Maramures",
    "postalCode": "430122",
    "addressCountry": "RO"
  },
  "geo": {
    "@@type": "GeoCoordinates",
    "latitude": "47.6573",
    "longitude": "23.5705"
  },
  "openingHours": [
    "Mo-Fr 09:00-17:00"
  ],
  "knowsAbout": [
    "Laravel Development",
    "Artificial Intelligence",
    "Web Development",
    "Software Architecture"
  ],
  "hasOfferCatalog": {
    "@@type": "OfferCatalog",
    "name": "Digital Services",
    "itemListElement": [
      {
        "@@type": "Offer",
        "itemOffered": {
          "@@type": "Service",
          "name": "Software Engineering & Laravel Architecture",
          "description": "Mission-critical web applications, complex APIs, and microservices with maximum security and zero downtime."
        }
      },
      {
        "@@type": "Offer",
        "itemOffered": {
          "@@type": "Service",
          "name": "AI Solutions & Process Automation",
          "description": "AI model integrations (Chat, RAG, Analysis) that automate repetitive tasks, read documents, and provide instant answers."
        }
      },
      {
        "@@type": "Offer",
        "itemOffered": {
          "@@type": "Service",
          "name": "Product Design & User Experience",
          "description": "Interfaces that hide heavy logic behind fluid visual experiences, designed for conversion and clarity."
        }
      },
      {
        "@@type": "Offer",
        "itemOffered": {
          "@@type": "Service",
          "name": "Scalable E-commerce Ecosystems",
          "description": "Sales systems built for stability, from inventory management to optimized checkouts with continuous and secure transactional flow."
        }
      },
      {
        "@@type": "Offer",
        "itemOffered": {
          "@@type": "Service",
          "name": "Maintenance & Cloud Infrastructure",
          "description": "Proactive technical support with security updates, uptime monitoring, and server optimization for long-term partnership."
        }
      }
    ]
  },
  "sameAs": [
    "https://github.com/ioanmihalca-click",
    "https://www.tiktok.com/@clickstudiosdigital",
    "https://www.youtube.com/@clickstudiosdigital"
  ],
  "paymentAccepted": ["cash", "credit card"],
  "currenciesAccepted": "RON",
  "logo": {
    "@@type": "ImageObject",
    "url": "{{ asset('assets/logo.jpg') }}"
  },
  "areaServed": {
    "@@type": "Country",
    "name": "Romania"
  }
}
</script>


    @vite(['resources/css/app.css', 'resources/js/app.js'])

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

</head>

<body class="bg-white font-inter overflow-x-hidden antialiased" x-data="{ scrollToTop: false }"
    x-on:scroll.window="scrollToTop = window.scrollY > 100">

    <a href="#main-content"
        class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-[100] focus:bg-white focus:px-4 focus:py-2 focus:rounded-lg focus:shadow-lg focus:text-emerald-700 focus:font-bold">
        Sari la conținut principal
    </a>

    {{-- Universal Background --}}
    <div class="fixed inset-0 z-0 w-screen h-screen bg-gray-50">
        <picture>
            <source media="(min-width: 768px)" srcset="{{ asset('assets/bg/desktop.webp') }}" type="image/webp"
                width="1920" height="1080">
            <img src="{{ asset('assets/bg/mobile.webp') }}" alt="" role="presentation" fetchpriority="high"
                loading="eager" decoding="async" width="1080" height="1920"
                class="absolute inset-0 w-full h-full object-cover object-[5%_top] md:object-center">
        </picture>
    </div>

    <x-navigation-main />

    <main id="main-content" class="relative z-10 w-full min-h-screen">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="fixed bottom-0 left-0 right-0 z-30 w-full bg-white md:bg-transparent px-4 py-2">
        <div class="flex items-center justify-between mx-auto max-w-5xl border-t border-gray-200 pt-2">
            <!-- Social Links -->
            <div class="flex items-center gap-4">
                <a href="https://github.com/ioanmihalca-click" target="_blank" rel="noopener noreferrer nofollow"
                    aria-label="Vizitează profilul nostru de GitHub"
                    class="text-gray-500 hover:text-gray-900 transition-colors">
                    <i class="fa-brands fa-github text-lg"></i>
                </a>
                <a href="https://www.tiktok.com/@clickstudiosdigital" target="_blank" rel="noopener noreferrer nofollow"
                    aria-label="Urmărește-ne pe TikTok"
                    class="text-gray-500 hover:text-gray-900 transition-colors">
                    <i class="fa-brands fa-tiktok text-lg"></i>
                </a>
                <a href="https://www.youtube.com/@clickstudiosdigital" target="_blank" rel="noopener noreferrer nofollow"
                    aria-label="Abonează-te la canalul nostru YouTube"
                    class="text-gray-500 hover:text-gray-900 transition-colors">
                    <i class="fa-brands fa-youtube text-lg"></i>
                </a>
            </div>

            <!-- Contact -->
            <div class="flex items-center text-xs">
                <a href="mailto:contact@clickstudiosdigital.com"
                    class="text-gray-700 hover:text-emerald-600 transition-colors">
                    contact@clickstudiosdigital.com
                </a>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button x-show="scrollToTop" @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
        aria-label="Derulează la începutul paginii"
        class="fixed z-50 flex items-center justify-center w-8 h-8 text-xs text-black bg-gray-300 rounded-sm animate-pulse hover:bg-white bottom-4 right-4 ">
        <i class="fa-solid fa-angles-up"></i>
    </button>

</body>

</html>
