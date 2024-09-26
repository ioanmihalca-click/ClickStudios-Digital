<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Click Studios - Dezvoltare Web & Marketing Digital</title>
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="description"
        content="Agenția Click Studios Digital din Baia Mare oferă servicii profesionale de dezvoltare web, web design, marketing digital, SEO, și producție audio-video pentru creșterea prezenței online." />
    <meta name="keywords"
        content="Click Studios Digital, agenție marketing digital, dezvoltare web, servicii SEO, web design responsiv, e-commerce, strategii marketing online, optimizare site, creștere trafic organic, campanii PPC, social media marketing, content marketing, consultanță digitală, agenție web Baia Mare" />
    <!-- Open Graph Tags for Social Media Sharing -->
    <meta property="og:title" content="Click Studios - Dezvoltare Web & Marketing Digital" />
    <meta property="og:description"
        content="Agenția Click Studios Digital din Baia Mare oferă servicii profesionale de dezvoltare web, web design, marketing digital, SEO, și producție audio-video pentru creșterea prezenței online." />
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
  "description": "Agenție de dezvoltare web și marketing digital oferind servicii complete de web design, SEO, și strategii de marketing online pentru creșterea prezenței digitale a afacerii dumneavoastră.",
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
    <link rel="icon" href="{{ asset('assets/favicon.ico') }}" type="image/x-icon" />
    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/apple-touch-icon.png') }}" />



    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Font Roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">

    <!-- Font Volkov -->
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

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
    @vite('resources/js/app.js')
</head>


<body class="font-sans bg-white" x-data="{ scrollToTop: false, loading: true }" x-on:scroll.window="scrollToTop = window.scrollY > 100"
    x-init="$nextTick(() => { setTimeout(() => loading = false, 700) })">

    <!--JS embedded fb reel-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v20.0&appId=819059106273620" nonce="7pZctJEG">
    </script>

  <x-navigation-main />

    <section class="relative flex items-center justify-center h-screen text-white home-parallax home-fade">
        <!-- Loading Spinner -->
        <div x-show="loading" class="absolute inset-0 z-50 flex items-center justify-center bg-black">
            <div class="w-16 h-16 border-t-4 border-solid rounded-full border-emerald-700 animate-spin"></div>
        </div>

        <!-- Video background -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden">
            <video src="/assets/bg-video.mp4" autoplay muted loop
                class="absolute object-cover w-full h-full scale-125 -z-20"></video>
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50 -z-10"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 items-center justify-center text-center caption-content">
            <div
                class="font-roboto-condensed tracking-widest md:tracking-[4px] uppercase mb-8 md:mb-10 text-sm md:text-base">
                Noi suntem</div>
            <h1
                class="font-roboto-condensed uppercase mb-10 md:mb-14 tracking-[6px] md:tracking-[24px] font-normal text-3xl md:text-5xl leading-relaxed md:leading-normal">
                Click Studios Digital
            </h1>
            <a href="#about"
                class="px-10 py-2 text-xs tracking-widest text-white uppercase transition-all duration-300 border border-white scroll-link hover:bg-white hover:text-black font-roboto-condensed hover:border-transparent">Afla
                mai multe</a>
        </div>
    </section>

    <x-despre />
    <x-dezvoltare-web />
    <x-servicii />
    <x-portofoliu />   
    
        <!--Contact Form-->
        <div id="contact" class="max-w-2xl px-2 mx-auto text-center">
            <h2
                class="font-roboto-condensed uppercase tracking-[4px] text-center font-normal text-3xl text-gray-900 mb-10 mt-4 md:mt-14 ">
                Contact</h2>
            <p class="px-2 mb-16 text-lg tracking-wide text-center text-gray-900 font-volkov">Dacă sunteti interesati
                sa colaborati cu noi pentru dezvoltare web, productia de conținut media sau alte servicii de publicitate
                și marketing digital, nu ezitati sa ne contactati</p>
            <x-modal-contact />

        </div>

      <x-footer /> 

        <!-- Arrow Up Button -->
        <button x-show="scrollToTop" @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
            class="fixed flex items-center justify-center w-8 h-8 text-xs text-black bg-gray-300 rounded-sm animate-pulse hover:bg-white bottom-4 right-4 ">
            <i class="fa-solid fa-angles-up"></i>
        </button>

</body>

</html>
