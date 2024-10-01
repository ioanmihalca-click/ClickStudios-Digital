<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Click Studios Digital' }}</title>
    <link rel="canonical" href="{{ url()->current() }}">

    <meta name="description"
        content="Agentia Click Studios Digital din Baia Mare, dezvoltatori Laravel si TALL Stack, aplicatii web complexe, web design, marketing digital, SEO, și producție audio-video.">
    <meta name="keywords"
        content="Click Studios Digital, Laravel, TALL stack, agenție marketing digital, dezvoltare web, servicii SEO, web design responsiv, e-commerce, strategii marketing online, optimizare site, creștere trafic organic, campanii PPC, social media marketing, content marketing, consultanță digitală, agenție web Baia Mare" />


    <!-- Font Roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">

    <!-- Font Volkov -->
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#10b981">
    <meta name="theme-color" content="#ffffff">


    <!-- Open Graph Tags for Social Media Sharing -->
    <meta property="og:title" content="Click Studios - Dezvoltare Web & Marketing Digital" />
    <meta property="og:description"
        content="Agentia Click Studios Digital din Baia Mare, dezvoltatori Laravel si TALL Stack, aplicatii web complexe, web design, marketing digital, SEO, și producție audio-video." />
    <meta property="og:image" content="{{ asset('assets/OG-Click-Studios-Digital.jpg') }}" />
    <meta property="og:image:type" content="image/jpeg" />
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

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Volkhov:ital@0;1&display=swap">

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

<body class="font-sans bg-white" x-data="{ scrollToTop: false, loading: true }" x-on:scroll.window="scrollToTop = window.scrollY > 100"
    x-init="() => { setTimeout(() => loading = false, 700) }">
    <!-- Skip to main content link for accessibility -->
    <a href="#main-content" class="sr-only focus:not-sr-only">Skip to main content</a>

    <x-navigation-main />

    <main id="main-content">
        <!-- Loading Spinner -->
        <div x-show="loading" class="fixed inset-0 z-50 flex items-center justify-center bg-black" aria-busy="true"
            aria-label="Loading">
            <div class="w-16 h-16 border-t-4 border-solid rounded-full border-emerald-700 animate-spin"></div>
        </div>
        {{ $slot }}
    </main>

    <x-footer />

    <!-- Scroll to Top Button -->
    <button x-show="scrollToTop" @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
        class="fixed flex items-center justify-center w-8 h-8 text-xs text-black bg-gray-300 rounded-sm animate-pulse hover:bg-white bottom-4 right-4 ">
        <i class="fa-solid fa-angles-up"></i>
    </button>

    <!-- Deferred and async scripts -->
    <script src="https://connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v20.0&appId=819059106273620" async defer
        crossorigin="anonymous"></script>

</body>

</html>
