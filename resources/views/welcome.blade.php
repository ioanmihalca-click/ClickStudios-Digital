<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Agenția Click Studios Digital din Baia Mare oferă servicii profesionale de dezvoltare web, web design, marketing digital, SEO, și producție audio-video pentru creșterea prezenței online." />
<meta name="keywords" content="Click Studios Digital, agenție marketing digital, dezvoltare web, servicii SEO, web design responsiv, e-commerce, strategii marketing online, optimizare site, creștere trafic organic, campanii PPC, social media marketing, content marketing, consultanță digitală, agenție web Baia Mare" />    
    <!-- Open Graph Tags for Social Media Sharing -->
    <meta property="og:title" content="Click Studios - Dezvoltare Web & Marketing Digital" />
    <meta property="og:description" content="Agenția Click Studios Digital din Baia Mare oferă servicii profesionale de dezvoltare web, web design, marketing digital, SEO, și producție audio-video pentru creșterea prezenței online." />
    <meta property="og:image" content="{{ asset('assets/OG-Click-Studios-Digital.jpg') }}" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:alt" content="Click Studios - Dezvoltare Web si Marketing Digital" />
    <meta property="og:url" content="{{ url('/') }}" />
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

    <title>Click Studios - Dezvoltare Web & Marketing Digital</title>
    <link rel="canonical" href="{{ url('/') }}" />

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
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-QFL38JS6PJ');
    </script>

  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>


<body class="font-sans bg-white" x-data="{ scrollToTop: false, loading: true }" 
      x-on:scroll.window="scrollToTop = window.scrollY > 100"
      x-init="$nextTick(() => { setTimeout(() => loading = false, 700) })">

    <!-- Navigation -->
      <nav x-data="{ isOpen: false }" class="fixed top-0 left-0 z-50 w-full bg-black bg-opacity-75">
     
    <div class="container flex items-center justify-between px-4 py-2 mx-auto">
        <a href="/" class="text-white text-xs tracking-[4px] uppercase font-roboto-condensed">Click Studios Digital</a>
        
        <!-- Hamburger menu button (visible on mobile) -->
        <button @click="isOpen = !isOpen" class="text-white md:hidden">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <!-- Desktop menu -->
        <div class="hidden space-x-4 md:flex">
            <a href="#about" class="text-white hover:text-emerald-500 font-roboto-condensed">Despre noi</a>
            <a href="#dezvoltare-web" class="text-white hover:text-emerald-500 font-roboto-condensed">Dezvoltare Web</a>
            <a href="#servicii" class="text-white hover:text-emerald-500 font-roboto-condensed">Servicii</a>
            <a href="#portofoliu" class="text-white hover:text-emerald-500 font-roboto-condensed">Portofoliu</a>
            <a href="/blog" class="text-white hover:text-emerald-500 font-roboto-condensed">Blog</a>
            <a href="#contact" class="text-white hover:text-emerald-500 font-roboto-condensed">Contact</a>
        </div>
    </div>

    <!-- Mobile menu -->
    <div x-show="isOpen" @click.away="isOpen = false" class="md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#about" @click="isOpen = false" class="block px-3 py-2 text-white font-roboto-condensed">Despre noi</a>
            <a href="#dezvoltare-web" @click="isOpen = false" class="block px-3 py-2 text-white font-roboto-condensed">Dezvoltare Web</a>
            <a href="#servicii" @click="isOpen = false" class="block px-3 py-2 text-white font-roboto-condensed">Servicii</a>
            <a href="#portofoliu" @click="isOpen = false" class="block px-3 py-2 text-white font-roboto-condensed">Portofoliu</a>
            <a href="/blog" @click="isOpen = false" class="block px-3 py-2 text-white font-roboto-condensed">Blog</a>
            <a href="#contact" @click="isOpen = false" class="block px-3 py-2 text-white font-roboto-condensed">Contact</a>
        </div>
    </div>
</nav>



    <section class="relative flex items-center justify-center h-screen text-white home-parallax home-fade">
      <!-- Loading Spinner -->
      <div x-show="loading" class="absolute inset-0 z-50 flex items-center justify-center bg-black">
         <div class="w-16 h-16 border-t-4 border-solid rounded-full border-emerald-700 animate-spin"></div>
      </div>

      <!-- Video background -->
      <div 
           class="absolute top-0 left-0 w-full h-full overflow-hidden">
         <video src="/assets/bg-video.mp4" autoplay muted loop class="absolute object-cover w-full h-full scale-125 -z-20"></video> 
         <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50 -z-10"></div>
      </div>

      <!-- Content -->
      <div 
           class="relative z-10 items-center justify-center text-center caption-content">
         <div class="font-roboto-condensed tracking-widest md:tracking-[4px] uppercase mb-8 md:mb-10 text-sm md:text-base">Noi suntem</div>
         <h1 class="font-roboto-condensed uppercase mb-10 md:mb-14 tracking-[6px] md:tracking-[24px] font-normal text-3xl md:text-5xl leading-relaxed md:leading-normal">
            Click Studios Digital
         </h1>
         <a href="#about" class="px-10 py-2 text-xs tracking-widest text-white uppercase transition-all duration-300 border border-white scroll-link hover:bg-white hover:text-black font-roboto-condensed hover:border-transparent">Afla mai multe</a>
      </div>
   </section>

<section id="about" class="relative z-30 px-4 py-16 bg-white"> 
      <div class="max-w-3xl mx-auto">
        <h2 class="font-roboto-condensed uppercase tracking-[4px] text-center font-normal text-3xl text-gray-900 mb-10 mt-4 md:mt-14 ">Despre noi</h2>
        
                     <p class="mb-8 text-2xl tracking-wide text-center text-gray-900 md:mb-16 font-volkov">Suntem o agentie de dezvoltare web si marketing digital cu sediul in Baia Mare, Maramures. Oferim o gama completa de servicii de SEO si web design, publicitate online si marketing digital, branding, productie video publicitara si productie muzicala. Avem abilitatea de a combina arta si tehnologia pentru a crea rezultate extraordinare. </p>

         
           <div class="flex justify-center mb-48 animate-pulse">
  <div class="w-full sm:w-2/12 sm:mx-auto">
    <div class="text-3xl text-center hover:text-gray-500">
      <a href="#dezvoltare-web" class="scroll-link">
        <i class="fa fa-angle-down"></i>
      </a>
    </div>
  </div>
</div>
</div>


       
 <!--Expertiză în Dezvoltare Web Carusel-->


    <section id="dezvoltare-web" class="px-4 py-16 bg-white">
  <div class="max-w-6xl mx-auto">

<div class="relative h-screen bg-fixed bg-center bg-cover" style="background-image: url('assets/carusel-bg.webp')">
  <div class="absolute inset-0 bg-black/50"></div>
  <div class="relative z-10 flex flex-col items-center justify-center h-full">
  
    <h2 class="font-roboto-condensed uppercase mb-10 md:mb-14 tracking-[6px] md:tracking-[24px] font-normal text-3xl md:text-5xl text-center leading-relaxed md:leading-normal text-white ">Expertiză în Dezvoltare Web</h2>
    <div class="max-w-2xl mx-auto">
      <p class="px-2 mb-16 text-lg tracking-wide text-center text-white font-volkov">"Imaginatia este mai importanta decât cunoasterea."</p>
    </div>
  </div>
</div>

        <div x-data="{
activeAccordion: '',
setActiveAccordion(id) {
this.activeAccordion = (this.activeAccordion == id) ? '' : id
}
}" class="relative w-full mx-auto my-8 overflow-hidden text-sm font-normal bg-white border border-gray-200 divide-y divide-gray-200 rounded-md">
<div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
<button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
<span>Specialiști în TALL Stack</span>
<svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
</button>
<div x-show="activeAccordion==id" x-collapse x-cloak>
<div class="p-4 pt-0 opacity-70">
<section class="px-4 py-12 sm:px-6 lg:px-8">
    <div class="max-w-3xl">
        
        <p class="mb-6 text-lg text-gray-700">
            La Click Studios Digital, suntem specializați în dezvoltarea de aplicații web de înaltă performanță utilizând stack-ul TALL:
        </p>
        
        <ul class="pl-5 mb-6 space-y-2 text-gray-700 list-disc">
            <li><span class="font-semibold text-blue-600">Tailwind CSS</span> pentru design responsive și eficient</li>
            <li><span class="font-semibold text-green-600">Alpine.js</span> pentru interactivitate fluidă în partea de client</li>
            <li><span class="font-semibold text-red-600">Laravel</span> ca fundație robustă pentru backend</li>
            <li><span class="font-semibold text-purple-600">Livewire</span> pentru actualizări dinamice în timp real</li>
        </ul>
        
        <p class="text-lg text-gray-700">
            Această combinație puternică ne permite să creăm soluții web rapide, scalabile și ușor de întreținut. Avem capacitatea de a livra proiecte complexe într-un mod eficient, oferind clienților noștri aplicații web inovatoare care se remarcă în peisajul digital actual.
        </p>
    </div>
</section>
</div>
</div>
</div>
<div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
<button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
<span>Servicii de Dezvoltare Web</span>
<svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
</button>
<div x-show="activeAccordion==id" x-collapse x-cloak>
<div class="p-4 pt-0 opacity-70">
<section class= "px-4 py-12 sm:px-6 lg:px-8">
    <div class="max-w-3xl">
        
        <div class="space-y-8">
            <div>
                <h3 class="mb-3 text-xl font-semibold text-blue-600">Soluții Web Complexe</h3>
                <ul class="pl-5 space-y-2 text-gray-700 list-disc">
                    <li>Website-uri personalizate</li>
                    <li>Aplicații web complexe</li>
                    <li>Soluții de e-commerce și sisteme de plată</li>
                    <li>Optimizare pentru motoare de căutare (SEO)</li>
                </ul>
            </div>
            
            <div>
                <h3 class="mb-3 text-xl font-semibold text-green-600">Funcționalități Avansate</h3>
                <ul class="pl-5 space-y-2 text-gray-700 list-disc">
                    <li>Panouri de control (admin panel) profesionale și personalizate</li>
                    <li>Sisteme de autentificare și securitate avansată</li>
                    <li>Sisteme de comenzi și rezervări online</li>
                </ul>
            </div>
            
            <div>
                <h3 class="mb-3 text-xl font-semibold text-purple-600">Suport și Mentenanță</h3>
                <ul class="pl-5 space-y-2 text-gray-700 list-disc">
                    <li>Mentenanță continuă a aplicațiilor web</li>
                    <li>Suport tehnic dedicat</li>
                </ul>
            </div>
        </div>
        
        <p class="mt-8 text-lg text-gray-700">
            Oferim soluții web complete și personalizate, de la dezvoltare și implementare până la mentenanță și suport, asigurând succesul proiectului dumneavoastră online.
        </p>
    </div>
</section>
</div>
</div>
</div>
<div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
<button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
<span>Soluții Web pentru Afaceri</span>
<svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
</button>
<div x-show="activeAccordion==id" x-collapse x-cloak>
<div class="p-4 pt-0 opacity-70">
<section class="px-4 py-12 sm:px-6 lg:px-8">
    <div class="max-w-3xl ">
        
        <p class="mb-6 text-lg text-center text-gray-700">
            Dezvoltăm site-uri de prezentare și aplicații web complexe adaptate nevoilor specifice ale afacerii dumneavoastră.
        </p>
        
        <div class="grid grid-cols-1 gap-6 mb-8 md:grid-cols-2">
            <ul class="pl-5 space-y-2 text-gray-700 list-disc">
                <li>Restaurante și cafenele</li>
                <li>Saloane de cosmetică și frizerii</li>
                <li>Service-uri auto și vulcanizări</li>
                <li>Cabinete medicale și stomatologice</li>
                <li>Magazine online</li>
            </ul>
            <ul class="pl-5 space-y-2 text-gray-700 list-disc">
                <li>Firme de construcții și amenajări interioare</li>
                <li>Școli de dans sau fitness</li>
                <li>Pensiuni și case de vacanță</li>
                <li>Agenții imobiliare</li>
                <li>Birouri de avocatură</li>
            </ul>
        </div>
        
        <p class="text-lg text-gray-700">
            Indiferent de domeniul în care activați, vă oferim soluții web personalizate care să vă ajute să vă creșteți vizibilitatea online și să vă îmbunătățiți interacțiunea cu clienții.
        </p>
    </div>
</section>
</div>
</div>
</div>
</div>
</div>

    
      <div class="mt-12 mb-12 text-center">
          <a href="#contact" class="px-10 py-2 text-xs tracking-widest text-black uppercase transition-all duration-300 border border-black hover:bg-black hover:text-white font-roboto-condensed hover:border-transparent">Consultanta gratuita</a>
      </div>
  </div>
</section>


  <!--Servicii-->
 
<div id="servicii" class="px-4 py-12">

<div class="relative h-screen bg-fixed bg-center bg-cover" style="background-image: url('assets/servicii.webp')">
  <div class="absolute inset-0 bg-black/50"></div>
  <div class="relative z-10 flex flex-col items-center justify-center h-full">
  
    <h2 class="font-roboto-condensed uppercase mb-10 md:mb-14 tracking-[6px] md:tracking-[24px] font-normal text-3xl md:text-5xl leading-relaxed md:leading-normal text-white ">Servicii</h2>
    <div class="max-w-2xl mx-auto">
      <p class="px-2 mb-16 text-lg tracking-wide text-center text-white font-volkov">"O magie digitala a cuprins întreaga noastra creatie, precum aceste momente stralucitoare ale inovatiei pe care le traim cu toata pasiunea noastra."</p>
    </div>
  </div>
</div>
</div>

<div class="container grid items-center grid-cols-1 mx-auto mt-12 text-center md:grid-cols-3">

    <!-- Service Block 1: Dezvoltare de Website-uri și Aplicații Web -->

  <div class="flex w-full h-full px-4 lg:px-6">
  <div class="px-6 py-8 mb-8 transition duration-300 ease-in-out transform bg-white rounded-lg shadow-lg h-96 hover:-translate-y-2">
    <div class="inline-block mb-4 text-gray-900">
      <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="mx-auto text-gray-900" viewBox="0 0 16 16">
        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
        <path d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0m2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0" />
      </svg>
    </div>
    <h3 class="mb-4 text-base font-normal tracking-widest text-center text-gray-900 uppercase font-roboto-condensed">Dezvoltare de site-uri și Aplicații Web</h3>
    <ul class="mt-2 text-sm text-center text-gray-700 list-none">
      <li class="mt-2">Creare de site-uri personalizate, pagini web de prezentare, magazine online (e-commerce) pe platforme open source: Bagisto - Laravel, Prestashop etc</li>
      <li class="mt-2">Dezvoltare de aplicații web complexe pentru diferite nevoi și industrii.</li>
    </ul>
  </div>
</div>
  <!-- end service block -->

<!-- Service Block 2: Spoturi Audio și Video Publicitare -->

<div class="flex w-full h-full px-4 lg:px-6">
  <div class="px-6 py-8 mb-8 transition duration-300 ease-in-out transform bg-white rounded-lg shadow-lg h-96 hover:-translate-y-2">
    <div class="inline-block mb-4 text-gray-900">
      <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="mx-auto mb-4 text-gray-900" viewBox="0 0 16 16">
        <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5" />
        <path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0v5zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z" />
      </svg>
    </div>
   <h3 class="mb-4 text-base font-normal tracking-widest text-center text-gray-900 uppercase font-roboto-condensed">Spoturi Audio și Video Publicitare</h3>
     <ul class="mt-2 text-sm text-center text-gray-700 list-none">
      <li class="mt-2">Creare de filmulete de prezentare și promoționale pentru afaceri, produse sau evenimente</li>
      <li class="mt-2">Creare și producție de spoturi publicitare audio pentru radio și alte medii audio (Spotify etc).</li>
    </ul>
  </div>
</div>
  <!-- end service block -->

  <!-- Service Block 3: Design și Implementare de Branding -->
<div class="flex w-full h-full px-4 lg:px-6">
  <div class="px-6 py-8 mb-8 transition duration-300 ease-in-out transform bg-white rounded-lg shadow-lg h-96 hover:-translate-y-2">
    <div class="inline-block mb-4 text-gray-900">
      <!-- Iconiță pentru Design și Implementare de Branding -->
      <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="mx-auto text-gray-900" viewBox="0 0 16 16">
        <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"></path>
        <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"></path>
      </svg>
    </div>
    <h3 class="mb-4 text-base font-normal tracking-widest text-center text-gray-900 uppercase font-roboto-condensed">Design și Implementare de Branding</h3>
    <ul class="mt-2 text-sm text-center text-gray-700 list-none">
      <li class="mt-2">Design de logo-uri și creare de identitate vizuală și branding pentru companii și evenimente.</li>
      <li class="mt-2">Elaborare și implementare de strategii digitale personalizate pentru creșterea vizibilității online.</li>
    </ul>
  </div>
</div>


<!-- Service Block 4: Producție Muzicală și Audiovizuală -->
<div class="flex w-full h-full px-4 lg:px-6">
  <div class="px-6 py-8 mb-8 transition duration-300 ease-in-out transform bg-white rounded-lg shadow-lg h-96 hover:-translate-y-2">
    <div class="inline-block mb-4 text-gray-900">
      <!-- Iconiță pentru Producție Muzicală și Audiovizuală -->
      <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="mx-auto text-gray-900" viewBox="0 0 16 16">
        <path d="M6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814z"/>
        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm15 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
      </svg>
    </div>
    <h3 class="mb-4 text-base font-normal tracking-widest text-center text-gray-900 uppercase font-roboto-condensed">Producție Muzicală și Audiovizuală</h3>
    <ul class="mt-2 text-sm text-center text-gray-700 list-none">
      <li class="mt-2">Creare și înregistrare de piese muzicale originale, servicii de mixing și mastering, spoturi audio etc.</li>
      <li class="mt-2">Producție și editare de materiale audiovizuale pentru diverse scopuri: reclame, videoclipuri, podcast-uri etc.</li>
    </ul>
  </div>
</div>


<!-- Service Block 5: Fotografie Profesională și Retușare Foto -->
<div class="flex w-full h-full px-4 lg:px-6">
  <div class="px-6 py-8 mb-8 transition duration-300 ease-in-out transform bg-white rounded-lg shadow-lg h-96 hover:-translate-y-2">
    <div class="inline-block mb-4 text-gray-900">
      <!-- Iconiță pentru Fotografie Profesională și Retușare Foto -->
      <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="mx-auto text-gray-900" viewBox="0 0 16 16">
        <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4z"/>
        <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5m0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7M3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0"/>
      </svg>
    </div>
    <h3 class="mb-4 text-base font-normal tracking-widest text-center text-gray-900 uppercase font-roboto-condensed">Fotografie Profesională și Retușare Foto</h3>
    <ul class="mt-2 text-sm text-center text-gray-700 list-none">
      <li class="mt-2">Servicii de fotografie de produs pentru magazine online și campanii publicitare.</li>
      <li class="mt-2">Retușare foto și editare avansată pentru imagini de înaltă calitate.</li>
      <li class="mt-2">Ședințe foto profesionale pentru diverse evenimente și produse.</li>
    </ul>
  </div>
</div>


<!-- Service Block 6: Videoclipuri Muzicale și Campanii Publicitare Video -->
<div class="flex w-full h-full px-4 lg:px-6">
  <div class="px-6 py-8 mb-8 transition duration-300 ease-in-out transform bg-white rounded-lg shadow-lg h-96 hover:-translate-y-2">
    <div class="inline-block mb-4 text-gray-900">
      <!-- Iconiță pentru Videoclipuri Muzicale și Campanii Publicitare Video -->
      <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="mx-auto text-gray-900" viewBox="0 0 16 16">
        <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0M1 3a2 2 0 1 0 4 0 2 2 0 0 0-4 0"/>
        <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2zm6 8.73V7.27l-3.5 1.555v4.35zM1 8v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1"/>
        <path d="M9 6a3 3 0 1 0 0-6 3 3 0 0 0 0 6M7 3a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
      </svg>
    </div>
    <h3 class="mb-4 text-base font-normal tracking-widest text-center text-gray-900 uppercase font-roboto-condensed">Videoclipuri Muzicale și Campanii Publicitare Video</h3>
    <ul class="mt-2 text-sm text-center text-gray-700 list-none">
      <li class="mt-2">Regie, filmare și editare de videoclipuri muzicale creative și de înaltă calitate.</li>
      <li class="mt-2">Creare și editare de conținut video scurt și captivant pentru platformele populare de social media: YouTube Shorts, Instagram Reels și TikTok Videos.</li>
    </ul>
  </div>
</div>


<!-- Service Block 7: Implementare și Administrare Canale de Social Media -->
<div class="flex w-full h-full px-4 lg:px-6">
  <div class="px-6 py-8 mb-8 transition duration-300 ease-in-out transform bg-white rounded-lg shadow-lg h-96 hover:-translate-y-2">
    <div class="inline-block mb-4 text-gray-900">
      <!-- Iconiță pentru Implementare și Administrare Canale de Social Media -->
      <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="mx-auto text-gray-900" viewBox="0 0 16 16">
        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
        <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
      </svg>
    </div>
    <h3 class="mb-4 text-base font-normal tracking-widest text-center text-gray-900 uppercase font-roboto-condensed">Implementare și Administrare Canale de Social Media</h3>
    <ul class="mt-2 text-sm text-center text-gray-700 list-none">
      <li class="mt-2">Creare și optimizare de profiluri pe diverse platforme de socializare (YouTube, Instagram, Facebook, TikTok etc.).</li>
      <li class="mt-2">Administrare și creștere a audienței pe canalele de social media prin postări regulate și interacțiune cu urmăritorii.</li>
    </ul>
  </div>
</div>

<!-- Service Block 8: Servicii de SEO (Optimizare pentru Motoarele de Căutare) -->
<div data-aos="fade-down">
  <div class="flex w-full h-full px-4 lg:px-6">
    <div class="px-6 py-8 mb-8 transition duration-300 ease-in-out transform bg-white rounded-lg shadow-lg h-96 hover:-translate-y-2">
      <div class="inline-block mb-4 text-gray-900">
        <!-- Iconiță pentru Servicii de SEO -->
        <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="mx-auto text-gray-900" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
        </svg>
      </div>
      <h3 class="mb-4 text-base font-normal tracking-widest text-center text-gray-900 uppercase font-roboto-condensed">Servicii de SEO (Optimizare pentru Motoarele de Căutare)</h3>
      <ul class="mt-2 text-sm text-center text-gray-700 list-none">
        <li class="mt-2">Implementarea de tehnici și strategii de optimizare pentru motoarele de căutare pentru a crește vizibilitatea și clasamentul website-urilor și aplicațiilor web în rezultatele căutărilor organice, generând astfel mai mult trafic și potențiali clienți pentru afacerile clienților tăi.</li>
      </ul>
    </div>
  </div>
</div>

<!-- Service Block 9: Creare și gestionare de campanii de publicitate online -->
<div data-aos="zoom-in-up">
  <div class="flex w-full h-full px-4 lg:px-6">
    <div class="px-6 py-8 mb-8 transition duration-300 ease-in-out transform bg-white rounded-lg shadow-lg h-96 hover:-translate-y-2">
      <div class="inline-block mb-4 text-gray-900">
        <!-- Iconiță pentru Creare și gestionare de campanii de publicitate online -->
        <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="mx-auto text-gray-900" viewBox="0 0 16 16">
          <path d="m3.7 11 .47-1.542h2.004L6.644 11h1.261L5.901 5.001H4.513L2.5 11zm1.503-4.852.734 2.426H4.416l.734-2.426zm4.759.128c-1.059 0-1.753.765-1.753 2.043v.695c0 1.279.685 2.043 1.74 2.043.677 0 1.222-.33 1.367-.804h.057V11h1.138V4.685h-1.16v2.36h-.053c-.18-.475-.68-.77-1.336-.77zm.387.923c.58 0 1.002.44 1.002 1.138v.602c0 .76-.396 1.2-.984 1.2-.598 0-.972-.449-.972-1.248v-.453c0-.795.37-1.24.954-1.24z"/>
          <path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2z"/>
        </svg>
      </div>
      <h3 class="mb-4 text-base font-normal tracking-widest text-center text-gray-900 uppercase font-roboto-condensed">Creare și gestionare de campanii de publicitate online</h3>
      <ul class="mt-2 text-sm text-center text-gray-700 list-none">
        <li class="mt-2">Dezvoltarea și implementarea de campanii publicitare eficiente pe platforme precum Google Ads, Facebook Ads, Instagram Ads, TikTok Ads pentru a ajuta afacerile să-și promoveze produsele și serviciile către audiențele relevante.</li>
      </ul>
    </div>
  </div>
</div>




  <!-- End Service blocks -->
</div>
</div>



<!--Portofolio-->

<section id="portofoliu" class="px-4 py-12 text-center">

<div class="relative h-screen bg-fixed bg-center bg-cover" style="background-image: url('assets/portofoliu.webp')">
  <div class="absolute inset-0 bg-black/50"></div>
  <div class="relative z-10 flex flex-col items-center justify-center h-full">
    <h2 class="font-roboto-condensed uppercase mb-10 md:mb-14 tracking-[6px] md:tracking-[24px] font-normal text-3xl md:text-5xl leading-relaxed md:leading-normal text-white">Portofoliu</h2>
    <div class="max-w-2xl mx-auto">
      <p class="mb-16 text-lg tracking-wide text-center text-white font-volkov">"Singurul mod de a face un lucru bine este să fii pasionat."</p>
    </div>
  </div>
</div>



  <div class="container mx-auto mt-8">
   
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">

        <!-- Portfolio Item Click Music App -->
      <div x-data="{ open: false }" data-aos="fade-right" class="overflow-hidden bg-white rounded-lg shadow-lg cursor-pointer">
        <div class="relative">
          <img src="/assets/ClickMusic-OG-Site.jpg" alt="Click Music Streaming App" class="object-cover w-full h-auto transition duration-300 ease-in-out transform rounded-t-lg hover:scale-105 hover:opacity-80">
          <div class="absolute inset-0 flex items-center justify-center transition-opacity duration-300 opacity-0 bg-black/50" :class="{ 'opacity-100': open }">
            <h3 class="text-xl font-bold text-white">Click Music RO</h3>
          </div>
        </div>
        <div class="p-4">
          <button @click="open = !open" class="flex items-center justify-between w-full">
            <h3 class="text-base font-normal tracking-widest text-center text-gray-900 uppercase md:text-lg font-roboto-condensed">Click Music RO</h3>
            <span :class="{ 'text-blue-500': !open, 'text-blue-500': open }">
              <span x-show="!open">+</span>
              <span x-show="open">-</span>
            </span>
          </button>
          <div x-show="open" x-transition class="mt-4">
                  <a href="https://clickmusic.ro" target="_blank" rel="noopener noreferrer" class="hover:no-underline">

            <p class="text-left text-gray-900">
               Clickmusic.ro este rezultatul eforturilor noastre constante de a crea soluții digitale de înaltă calitate, îmbunătățind experiența utilizatorilor în domeniul streaming-ului muzical. <br> <br>
              Dezvoltată folosind tehnologiile TALL Stack, această aplicație web oferă o experiență de streaming captivantă și ușor de folosit.
              <br><br>
              <strong>Caracteristici:</strong>
              <ul class="px-4 mt-2 text-left list-disc">
                <li>Sistem de Autentificare</li>
                <li>Bază de Date Avansată</li>
                <li>Notificări Mail și Database</li>
                <li>Sectiune de Comentarii</li>
                <li>Streaming cu CDN</li>
                <li>Blog integrat</li>
                <li>Sistem de plata cu Stripe</li>
                <li>Securitate Avansată a Datelor</li>
              </ul> </p>
              <p class="mt-4 text-left text-gray-900">
              Click Music Streaming App este un exemplu al angajamentului nostru față de excelență și inovație în dezvoltarea soluțiilor digitale, aducând muzica mai aproape de publicul său într-un mod interactiv și captivant.</p>
            
          </div>
        </div>
      </a>
      </div>

<!-- Portfolio Item Snow 'n' Stuff -->
<div x-data="{ open: false }" data-aos="fade-right" class="overflow-hidden bg-white rounded-lg shadow-lg cursor-pointer">
  <div class="relative">
    <img src="/assets/OG-SnownStuff.jpg" alt="Website Prezentare Snow 'n' Stuff" class="object-cover w-full h-auto transition duration-300 ease-in-out transform rounded-t-lg hover:scale-105 hover:opacity-80">
    <div class="absolute inset-0 flex items-center justify-center transition-opacity duration-300 opacity-0 bg-black/50" :class="{ 'opacity-100': open }">
      <h3 class="text-xl font-bold text-white">Snow 'n' Stuff</h3>
    </div>
  </div>
  <div class="p-4">
    <button @click="open = !open" class="flex items-center justify-between w-full">
      <h3 class="text-base font-normal tracking-widest text-center text-gray-900 uppercase md:text-lg font-roboto-condensed">Snow 'n' Stuff</h3>
      <span :class="{ 'text-blue-500': !open, 'text-blue-500': open }">
        <span x-show="!open">+</span>
        <span x-show="open">-</span>
      </span>
    </button>
    <div x-show="open" x-transition class="mt-4">
    <a href="https://www.snow-n-stuff.com/" target="_blank" rel="noopener noreferrer" class="hover:no-underline">
      <p class="text-left text-gray-900">
        Snow 'n' Stuff este un label muzical internațional de top, specializat în genurile Tech House, Deep House, House și Techno. Pentru a reflecta profesionalismul și calitatea înaltă a acestui brand, am creat un website de prezentare captivant și modern. <br><br>
        Website-ul a fost conceput pentru a oferi o experiență digitală unică, prezentând artiștii labelului, piesele muzicale și playlisturile lor. <br><br>
        Am integrat elemente interactive, precum playere pentru ascultarea pieselor, creând o platformă engaging pentru fanii muzicii electronice.
        <br><br>
        <strong>Caracteristici Cheie:</strong>
        <ul class="px-4 mt-2 text-left list-disc">
          <li>Design Modern și Captivant</li>
          <li>Prezentare Artiști și Playlisturi</li>
          <li>Elemente Interactive (Playere, Previews)</li>
          <li>Optimizare SEO pentru Vizibilitate Organică</li>
          <li>Integrare cu Platforme Sociale și Streaming</li>
        </ul>
      </p>
      <p class="mt-4 text-left text-gray-900">
        Prin intermediul acestui website de prezentare, am reușit să promovăm eficient brandul Snow 'n' Stuff și să oferim o experiență digitală de top pentru fanii muzicii electronice din întreaga lume. Optimizarea SEO a asigurat, de asemenea, vizibilitatea organică și accesibilitatea către publicul țintă, facilitând astfel creșterea și dezvoltarea continuă a labelului.
      </p>
    </div>
  </div>
  </a>
</div>


<!-- Portfolio Item Branding CS Victoria MM -->
<div x-data="{ open: false }" data-aos="fade-right" class="overflow-hidden bg-white rounded-lg shadow-lg cursor-pointer">
  <div class="relative">
    <img src="/assets/victoria-maramures.jpg" alt="Branding Club Sportiv Victoria Maramureș" class="object-cover w-full h-full transition duration-300 ease-in-out transform rounded-t-lg hover:scale-105 hover:opacity-80">
    <div class="absolute inset-0 flex items-center justify-center transition-opacity duration-300 opacity-0 bg-black/50" :class="{ 'opacity-100': open }">
      <h3 class="text-xl font-bold text-white">CS Victoria MM</h3>
    </div>
  </div>
  <div class="p-4">
    <button @click="open = !open" class="flex items-center justify-between w-full">
      <h3 class="text-base font-normal tracking-widest text-center text-gray-900 uppercase md:text-lg font-roboto-condensed">CS Victoria MM</h3>
      <span :class="{ 'text-blue-500': !open, 'text-blue-500': open }">
        <span x-show="!open">+</span>
        <span x-show="open">-</span>
      </span>
    </button>
    <div x-show="open" x-transition class="mt-4">
      <a href="https://csvictoriamm.ro/" target="_blank" rel="noopener noreferrer" class="hover:no-underline">
        <p class="text-left text-gray-900">
          Proiectul de branding pentru Clubul Sportiv Victoria Maramureș a fost o călătorie fascinantă în definirea și exprimarea identității acestuia în mediul online și offline. <br><br>
          Am dezvoltat un logo unic și memorabil care să reprezinte valorile și pasiunea clubului pentru sport, îmbinând tradiția cu modernitatea. <br><br>
          Pe lângă crearea identității vizuale, am dezvoltat și un website atractiv și ușor de navigat, precum și conținut video captivant pentru platformele sociale ale clubului, inclusiv reeluri pe Instagram și videoclipuri pe YouTube.
          <br><br>
          <strong>Caracteristici Cheie:</strong>
          <ul class="px-4 mt-2 text-left list-disc">
            <li>Creare Identitate Vizuală</li>
            <li>Logo Unic și Memorabil</li>
            <li>Website Atractiv și Ușor de Navigat</li>
            <li>Conținut Video Captivant pentru Platforme Sociale și Gestionarea acestora</li>
            <li>Optimizare SEO pentru a ajunge organic în primele pagini ale căutărilor</li>
          </ul>
        </p>
        <p class="mt-4 text-left text-gray-900">
          Proiectul de branding pentru Clubul Sportiv Victoria Maramureș a fost o inițiativă care a contribuit semnificativ la consolidarea prezenței și notorietății clubului în mediul online. Optimizarea SEO a asigurat, de asemenea, vizibilitatea organică și accesibilitatea către publicul țintă, facilitând astfel creșterea și dezvoltarea continuă a clubului.
        </p>
      </a>
    </div>
  </div>
</div>


 <!-- Portfolio Item Podcast Morosenesc -->
<div x-data="{ open: false }" data-aos="fade-down" class="overflow-hidden bg-white rounded-lg shadow-lg cursor-pointer">
  <div class="relative">
    <img src="/assets/podcastmorosenesc.jpg" alt="Productie Podcast Morosenesc cu Ioana Mihalca" class="object-cover w-full h-auto transition duration-300 ease-in-out transform rounded-t-lg hover:scale-105 hover:opacity-80">
    <div class="absolute inset-0 flex items-center justify-center transition-opacity duration-300 opacity-0 bg-black/50" :class="{ 'opacity-100': open }">
      <h3 class="text-xl font-bold text-white">Podcast Morosenesc</h3>
    </div>
  </div>
  <div class="p-4">
    <button @click="open = !open" class="flex items-center justify-between w-full">
      <h3 class="text-base font-normal tracking-widest text-center text-gray-900 uppercase md:text-lg font-roboto-condensed">Podcast Morosenesc</h3>
      <span :class="{ 'text-blue-500': !open, 'text-blue-500': open }">
        <span x-show="!open">+</span>
        <span x-show="open">-</span>
      </span>
    </button>
    <div x-show="open" x-transition class="mt-4">
      <a href="https://www.youtube.com/@IoanaMihalca" target="_blank" rel="noopener noreferrer" class="hover:no-underline">
        <p class="text-left text-gray-900">
          "Podcast Morosenesc cu Ioana Mihalca" este un proiect de succes din portofoliul Click Studios, dedicat explorării povestirilor autentice și discuțiilor captivante. <br><br>
          Acest podcast aduce în fața ascultătorilor povești de viață inspiratoare și conversații profunde cu personalități remarcabile din diverse domenii. <br><br>
          <strong>Caracteristici Cheie:</strong>
          <ul class="px-4 mt-2 text-left list-disc">
            <li><strong>Înregistrare și Editare:</strong> Utilizarea echipamentelor de ultimă generație pentru a asigura o calitate impecabilă a sunetului și o editare profesionistă.</li>
            <li><strong>Distribuție și Promovare:</strong> Implementarea unei strategii de marketing digital pentru a maximiza audiența și impactul podcastului. Disponibil pe principalele platforme de podcasting (Spotify, Apple Podcasts, Google Podcasts).</li>
            <li>Strategii Eficiente de Marketing Digital</li>
          </ul>
        </p>
        <p class="mt-4 text-left text-gray-900">
          "Podcast Morosenesc cu Ioana Mihalca" a contribuit la consolidarea brandului Click Studios, demonstrând capacitatea noastră de a crea conținut de calitate și de a gestiona proiecte media complexe. Acest proiect este un exemplu perfect al abilității noastre de a combina creativitatea și producția cu strategia de marketing digital pentru a obține rezultate remarcabile.
        </p>
      </a>
    </div>
  </div>
</div>
 


    <!-- Portfolio Item Click Music Youtube -->
<div x-data="{ open: false }" data-aos="zoom-in-up" class="overflow-hidden bg-white rounded-lg shadow-lg cursor-pointer">
  <div class="relative">
    <img src="/assets/clickmusicyt.jpg" alt="Click Music canal youtube" class="object-cover w-full h-auto transition duration-300 ease-in-out transform rounded-t-lg hover:scale-105 hover:opacity-80">
    <div class="absolute inset-0 flex items-center justify-center transition-opacity duration-300 opacity-0 bg-black/50" :class="{ 'opacity-100': open }">
      <h3 class="text-xl font-bold text-white">Click Music YouTube</h3>
    </div>
  </div>
  <div class="p-4">
    <button @click="open = !open" class="flex items-center justify-between w-full">
      <h3 class="text-base font-normal tracking-widest text-center text-gray-900 uppercase md:text-lg font-roboto-condensed">Click Music YouTube</h3>
      <span :class="{ 'text-blue-500': !open, 'text-blue-500': open }">
        <span x-show="!open">+</span>
        <span x-show="open">-</span>
      </span>
    </button>
    <div x-show="open" x-transition class="mt-4">
      <a href="https://www.youtube.com/@clickmusicromania" target="_blank" rel="noopener noreferrer" class="hover:no-underline">
        <p class="text-left text-gray-900">
          Suntem mândri să prezentăm Click Music Romania, un proiect emblematic în portofoliul nostru. <br><br>
          Acest canal YouTube reprezintă o extensie a serviciilor noastre, evidențiind expertiza noastră în crearea de conținut de cea mai înaltă calitate în domeniul muzicii și al vizualurilor captivante.
          <br><br>
          <strong>Caracteristici Cheie:</strong>
          <ul class="px-4 mt-2 text-left list-disc">
            <li><strong>Producții Audio de Înaltă Calitate</strong>: Cu o echipă de producție audio experimentată, ne străduim să oferim sunete impecabile și mixaje profesionale care să îmbogățească experiența auditivă a publicului nostru.</li>
            <li><strong>Videoclipuri Muzicale</strong>: Fiecare videoclip reprezintă o sinteză perfectă între muzică și imagine, capturând esența fiecărei piese.</li>
          </ul>
        </p>
        <p class="mt-4 text-left text-gray-900">
          Rezultate Demonstrabile: Canalul nostru, Click Music Romania, s-a remarcat prin obținerea a peste 50 de milioane de vizualizări, evidențiind eficacitatea și impactul strategiilor noastre de marketing în atragerea și implicarea publicului. Acest succes solidifică poziția noastră ca lideri în furnizarea de soluții de marketing digitale care generează rezultate tangibile și măsurabile pentru clienții noștri.
        </p>
      </a>
    </div>
  </div>
</div>

 
   
<!-- Portfolio Item Truland - Magazin Online de Încălțăminte -->
<div x-data="{ open: false }" data-aos="zoom-in-up" class="overflow-hidden bg-white rounded-lg shadow-lg cursor-pointer">
  <div class="relative">
    <img src="/assets/truland.jpg" alt="Truland Magazin Online" class="object-cover w-full h-auto transition duration-300 ease-in-out transform rounded-t-lg hover:scale-105 hover:opacity-80">
    <div class="absolute inset-0 flex items-center justify-center transition-opacity duration-300 opacity-0 bg-black/50" :class="{ 'opacity-100': open }">
      <h3 class="text-xl font-bold text-white">Truland Magazin Online</h3>
    </div>
  </div>
  <div class="p-4">
    <button @click="open = !open" class="flex items-center justify-between w-full">
      <h3 class="text-base font-normal tracking-widest text-center text-gray-900 uppercase md:text-lg font-roboto-condensed">Truland Magazin Online</h3>
      <span :class="{ 'text-blue-500': !open, 'text-blue-500': open }">
        <span x-show="!open">+</span>
        <span x-show="open">-</span>
      </span>
    </button>
    <div x-show="open" x-transition class="mt-4">
      <a href="https://truland.ro" target="_blank" rel="noopener noreferrer" class="hover:no-underline">
        <p class="text-left text-gray-900">
          Truland este un magazin online specializat în încălțăminte de calitate, oferind o gamă variată de pantofi, mocasini, ghete și sandale pentru femei. <br><br>
          Realizat cu pasiune de către echipa Click Studios Digital pe o platforma Prestashop, Truland se evidențiază printr-un design modern, navigare ușoară și o experiență de cumpărături fără egal. <br><br>
          Platforma a fost optimizată pentru a oferi o experiență intuitivă și plăcută utilizatorilor, punând în valoare produsele din piele naturală și confortul oferit de acestea.
        </p>
      </a>
    </div>
  </div>
</div>



   <!--Alte itemuri-->
    </div>
  </div>
</section>



<!-- Team Section & Contact -->
{{-- <div id="contact" class="mt-8">
  <div class="max-w-4xl px-8 py-8 mx-auto transition duration-300 ease-in-out transform hover:-translate-y-2">
    <h2 class="mb-12 text-2xl font-semibold text-center">Echipa Noastră:</h2>
    <div data-aos="fade-up">
    <div class="flex flex-wrap justify-center gap-8">
      <!-- Member 1 -->
     
      <div class="w-64 p-4 text-center transition duration-300 ease-in-out transform bg-gray-100 rounded-lg hover:-translate-y-2">
        <img src="/assets/Echipa - Ioan.jpg" alt="Ioan Mihalca" class="w-32 h-32 mx-auto mb-4 transition duration-300 ease-in-out transform rounded-full hover:scale-105 hover:opacity-80">
        <h3 class="text-lg font-semibold">Ioan Mihalca</h3>
        <p class="text-sm text-gray-700">Founder & CEO</p>
        <p class="mt-2 text-sm text-gray-600">Expert în dezvoltare web full-stack si optimizare pentru motoarele de căutare(SEO), strategii digitale și producție audio.</p>
      </div>
      <!-- Member 2 -->
      <div class="w-64 p-4 text-center transition duration-300 ease-in-out transform bg-gray-100 rounded-lg hover:-translate-y-2">
        <img src="/assets/Echipa - Andreea.jpg" alt="Andreea Mihalca" class="w-32 h-32 mx-auto mb-4 transition duration-300 ease-in-out transform rounded-full hover:scale-105 hover:opacity-80">
        <h3 class="text-lg font-semibold">Andreea Mihalca</h3>
        <p class="text-sm text-gray-700">Expertă în Design și Multimedia</p>
        <p class="mt-2 text-sm text-gray-600">Specializată în manipulare foto, design grafic, fotografie, video, editare video, copywriting și branding.</p>
      </div>
    </div>
  </div>
</div>
</div> --}}

<!--Contact Form-->
<div id="contact" class="max-w-2xl px-2 mx-auto text-center">
 <h2 class="font-roboto-condensed uppercase tracking-[4px] text-center font-normal text-3xl text-gray-900 mb-10 mt-4 md:mt-14 ">Despre noi</h2>
      <p class="px-2 mb-16 text-lg tracking-wide text-center text-gray-900 font-volkov">Dacă sunteti interesati sa colaborati cu noi pentru dezvoltare web, productia de conținut media sau alte servicii de publicitate și marketing digital, nu ezitati sa ne contactati</p>
  <x-modal-contact />
    
    </div>

<footer class="mt-8 text-center x-data">
    <p class="m-2 mt-6 text-gray-700">
      <span class="font-bold">Email:</span> contact@clickstudios-digital.com <br>
      <span class="font-bold">Telefon:</span> +4 0734 411 115 <br> 
      <span class="font-bold">Adresa:</span> Nisiparilor 35, Baia-Mare, Maramures
    </p>

    <div class="flex justify-center mt-4">
      <a href="https://www.facebook.com/profile.php?id=61560427317860" target="_blank" rel="noopener noreferrer" class="mr-4 text-gray-500 hover:text-blue-500">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
          </svg>
      </a>
      <a href="https://www.instagram.com/clickstudios_digital/" target="_blank" rel="noopener noreferrer" class="text-gray-500 hover:text-blue-500">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
          </svg>
      </a>
  </div>

    <hr class="my-6 border-t border-gray-300">
    <p class="text-gray-700">
      &copy; <span x-text="new Date().getFullYear()"></span> <strong>Click Studios Digital</strong>. Toate drepturile rezervate.
    </p>
  </div>
</footer>



 <!-- Arrow Up Button -->
    <button x-show="scrollToTop" @click="window.scrollTo({ top: 0, behavior: 'smooth' })" class="fixed flex items-center justify-center w-8 h-8 text-xs text-black bg-gray-300 rounded-sm animate-pulse hover:bg-white bottom-4 right-4 ">
       <i class="fa-solid fa-angles-up"></i>
    </button>
    
</body>
</html>
