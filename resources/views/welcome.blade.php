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
    <link rel="icon" href="{{ asset('assets/favicon-click-studios-digital.jpg') }}" type="image/x-icon" />
    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon-click-studios-digital.jpg') }}" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- AOS Animation Library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QFL38JS6PJ"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-QFL38JS6PJ');
    </script>


</head>


<body class="font-sans bg-gray-100 " x-data="{ scrollToTop: false }" x-on:scroll.window="scrollToTop = window.scrollY > 100">



    <section class="relative flex items-center justify-center h-screen text-white showcase">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden video-container">
            <video src="/assets/bg-video.mp4" autoplay muted loop class="absolute object-cover min-w-full min-h-full transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"></video>
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>
        </div>

        <div class="z-10 px-2 text-center content">
          <h1 class="mb-4 text-5xl md:text-5xl md:font-normal">Click Studios<br><span class="text-base text-gray-100 md:text-3xl md:font-light">Dezvoltare Web și Soluții Digitale Creative</span></h1>
          <h3 class="mb-8 text-sm text-gray-100 md:text-lg">Ca o punte între artă și tehnologie, suntem aici pentru a vă ghida în călătoria către succesul digital.</h3>
      
                <div data-aos="zoom-in">
                
                  <div class="flex flex-col items-center">
                    <a href="#about"
                    class="inline-block w-40 px-2 py-1 mt-4 text-white transition duration-300 ease-in-out transform border border-white rounded-md btn bg-primary-color hover:scale-95 hover:bg-gray-800 hover:shadow-md">Despre noi</a>
                    <a href="#dezvoltare-web"
                    class="inline-block w-40 px-2 py-1 mt-4 text-white transition duration-300 ease-in-out transform border border-white rounded-md btn bg-primary-color hover:scale-95 hover:bg-gray-800 hover:shadow-md">Dezvoltare Web</a>
                    <a href="#servicii"
                    class="inline-block w-40 px-2 py-1 mt-4 text-white transition duration-300 ease-in-out transform border border-white rounded-md btn bg-primary-color hover:scale-95 hover:bg-gray-800 hover:shadow-md">Servicii</a>
                    <a href="#portofoliu"
                    class="inline-block w-40 px-2 py-1 mt-4 text-white transition duration-300 ease-in-out transform border border-white rounded-md btn bg-primary-color hover:scale-95 hover:bg-gray-800 hover:shadow-md">Portofoliu</a>
                    <a href="#contact"
                    class="inline-block w-40 px-2 py-1 mt-4 text-white transition duration-300 ease-in-out transform border border-white rounded-md btn bg-primary-color hover:scale-95 hover:bg-gray-800 hover:shadow-md">Contact</a>
                    <a href="/blog"
                    class="inline-block w-40 px-2 py-1 mt-4 text-white transition duration-300 ease-in-out transform border border-white rounded-md btn bg-emerald-900 bg-opacity-75  hover:scale-95 hover:bg-emerald-900 hover:bg-opacity-50 hover:shadow-md">Blog</a>
                </div>

<!--Modal Play Video -->
<div x-data="{videoModalIsOpen: false}" class="mt-10">
    <button @click="videoModalIsOpen = true, $refs.video.play()" type="button" class="inline-flex cursor-pointer items-center gap-2 whitespace-nowrap rounded-xl bg-blue-500 bg-opacity-75 px-4 py-2 text-center text-sm font-medium tracking-wide text-slate-100 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0 dark:bg-blue-600 dark:text-slate-100 dark:focus-visible:outline-blue-600">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor"  class="w-4 h-4">
            <path fill-rule="evenodd" d="M4.5 5.653c0-1.426 1.529-2.33 2.779-1.643l11.54 6.348c1.295.712 1.295 2.573 0 3.285L7.28 19.991c-1.25.687-2.779-.217-2.779-1.643V5.653z" clip-rule="evenodd"/>
        </svg>
        Play Video
    </button>
    <div x-cloak x-show="videoModalIsOpen" x-transition.opacity.duration.200ms x-trap.inert.noscroll="videoModalIsOpen" @keydown.esc.window="videoModalIsOpen = false, $refs.video.pause()" @click.self="videoModalIsOpen = false, $refs.video.pause()" class="fixed inset-0 z-30 flex items-center justify-center bg-black/20 p-4 backdrop-blur-md lg:p-8" role="dialog" aria-modal="true" aria-labelledby="videoModalTitle">
        <!-- Modal Dialog -->
        <div x-show="videoModalIsOpen" x-transition:enter="transition ease-out duration-300 delay-200" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0" class="max-w-56 w-full relative">
            <!-- Close Button -->
            <button type="button" x-show="videoModalIsOpen" @click="videoModalIsOpen = false, $refs.video.pause()" x-transition:enter="transition ease-out duration-200 delay-500" x-transition:enter-start="opacity-0 scale-0" x-transition:enter-end="opacity-100 scale-100" class="absolute -top-6 -right-6 flex items-center justify-center rounded-full bg-slate-100 p-1.5 text-black hover:opacity-75 active:opacity-100 dark:bg-slate-800 dark:text-white" aria-label="close modal">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor" fill="none" stroke-width="1.4" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
               </svg>
            </button>
            <!-- Video -->
            <video x-ref="video" class="max-w-56 mx-auto rounded-xl aspect-auto" controls>
                <track default kind="captions" srclang="ro" src="path to your .vtt file" />
                
                <source src="/assets/video-intro.mp4" type="video/mp4">
                 Your browser does not support HTML video.
            </video>
        </div>
    </div>
</div>


        </div>
        </div>
        
    </section>

    <section id="about" class="px-4 py-16 bg-gray-100">
      <div class="max-w-3xl mx-auto">
        <h2 class="mb-12 text-3xl font-bold text-center text-gray-800">Despre noi</h2>
        
     
          <div data-aos="fade-right">
            <img src="/assets/OG-Click-Studios-Digital.jpg" class="w-full mb-6 rounded-lg shadow-lg" alt="Click Studios Digital, Dezvoltare Web, Web Design">
          </div>
          <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            
      
            <div data-aos="fade-down" class="p-6 bg-white rounded-lg shadow-md">
              <i class="mb-4 text-3xl text-blue-500 fas fa-code"></i>
              <p class="text-gray-700">Suntem o agenție de dezvoltare web și marketing digital cu sediul in Baia Mare, Maramures. Creăm site-uri web personalizate, aplicații web moderne și soluții e-commerce robuste care nu doar arată bine, ci și performează excelent.</p>
            </div>
            
        
            <div data-aos="fade-down" class="p-6 bg-white rounded-lg shadow-md">
              <i class="mb-4 text-3xl text-blue-500 fas fas fa-lightbulb"></i>
              <p class="text-gray-700">La Click Studios Digital, ne dedicăm să redefinim standardele în domeniul digital.  Abordăm fiecare provocare cu o combinație unică de expertiză tehnică, creativitate artistică și înțelegere profundă a nevoilor afacerii dumneavoastră.</p>
            </div>
         
          <div data-aos="zoom-in-up" class="p-6 bg-white rounded-lg shadow-md">
            <i class="mb-4 text-3xl text-blue-500 fas fa-laptop-code"></i>
            <p class="text-gray-700"> Fie că este vorba de web design, strategii de publicitate digitală, optimizare pentru motoarele de căutare, marketing de conținut sau producție audio și video, echipa noastră este aici pentru a vă oferi soluții personalizate.</p>
          </div>

          <div data-aos="fade-down" class="p-6 bg-white rounded-lg shadow-md">
            <i class="mb-4 text-3xl text-blue-500 fa-solid fa-palette"></i>
            <p class="text-gray-700">Ne mândrim cu abilitatea noastră de a combina arta și tehnologia pentru a crea rezultate extraordinare. Cu o echipă dedicată și o pasiune pentru creativitate fără limite, suntem aici pentru a vă ghida în călătoria către succesul digital. Suntem mereu în căutare de noi modalități de a surprinde și de a impresiona, de a inova și de a influența.</p>
          </div>

          <div data-aos="zoom-in-up" class="p-6 bg-white rounded-lg shadow-md">
            <i class="mb-4 text-3xl text-blue-500 fa-solid fa-globe"></i>
            <p class="text-gray-700">Oferim o gamă completă de servicii de SEO și dezvoltare web, publicitate online și marketing digital, branding, producție muzicală și producție video. Dacă sunteți în căutarea unei echipe creative și dedicate pentru a vă ajuta să vă atingeți obiectivele de marketing și publicitate, contactați-ne și împreună vom construi ceva extraordinar!</p>
          </div>

        </div>
       
        
       
        </div>
        
    
    </section>

 <!--Expertiză în Dezvoltare Web-->

    <section id="dezvoltare-web" class="px-4 py-16 bg-gray-100">
  <div class="max-w-6xl mx-auto">
      <h2 class="mb-8 text-3xl font-bold text-center text-gray-800">Expertiză în Dezvoltare Web</h2>
      
      <div class="grid grid-cols-1 gap-8 mx-auto md:grid-cols-2">
        <div data-aos="fade-down" class="p-4 bg-white rounded-lg shadow">
              <h3 class="mb-4 text-2xl font-semibold text-blue-600">Specialiști în TALL Stack</h3>
              <p class="mb-4 text-gray-700">La Click Studios Digital, excelăm în dezvoltarea cu TALL stack (Tailwind CSS, Alpine.js, Laravel, Livewire), oferind aplicații web robuste, rapide și scalabile. Această combinație puternică ne permite să creăm experiențe web de înaltă performanță și ușor de întreținut.</p>
              <ul class="pl-5 mb-6 text-gray-700 list-disc">
                  <li>Frontend responsive cu Tailwind CSS</li>
                  <li>Interactivitate fără efort cu Alpine.js</li>
                  <li>Backend puternic cu Laravel</li>
                  <li>Actualizări dinamice cu Livewire</li>
              </ul>
          </div>
          <div data-aos="fade-right" class="p-4 bg-white rounded-lg shadow">
              <h3 class="mb-4 text-2xl font-semibold text-blue-600">Servicii de Dezvoltare Web</h3>
              <ul class="pl-5 mb-6 text-gray-700 list-disc">
                  <li>Creare site-uri web personalizate</li>
                  <li>Dezvoltare aplicații web complexe</li>
                  <li>Integrare e-commerce și sisteme de plată</li>
                  <li>Optimizare pentru motoare de căutare (SEO)</li>
                  <li>Migrare și actualizare site-uri web existente</li>
                  <li>Panouri de control (admin panel) profesionale și personalizate</li>
                  <li>Implementare sisteme de autentificare și securitate avansată</li>
                  <li>Creare de sisteme de comenzi și rezervări online</li>
                  <li>Mentenanță și suport tehnic</li>
              </ul>
          </div>
      </div>
      
      <div class="mt-8">
          <h3 class="mb-4 text-2xl font-semibold text-center text-blue-600">Soluții Web pentru Afaceri</h3>
          <p class="mb-4 text-center text-gray-700">Dezvoltăm site-uri de prezentare, magazine online și aplicații web personalizate pentru o gamă variată de afaceri, inclusiv:</p>
          <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
              <div data-aos="fade-up" class="p-3 bg-white rounded-lg shadow">
                  <ul class="pl-5 text-gray-700 list-disc">
                      <li>Restaurante și cafenele</li>
                      <li>Saloane de cosmetică și frizerii</li>
                      <li>Service-uri auto și vulcanizări</li>
                  </ul>
              </div>
              <div data-aos="fade-up" class="p-3 bg-white rounded-lg shadow">
                  <ul class="pl-5 text-gray-700 list-disc">
                      <li>Cabinete medicale și stomatologice</li>
                      <li>Magazine de produse locale și artizanale</li>
                      <li>Firme de construcții și amenajări interioare</li>
                  </ul>
              </div>
              <div data-aos="fade-up" class="p-3 bg-white rounded-lg shadow">
                  <ul class="pl-5 text-gray-700 list-disc">
                      <li>Școli de dans sau fitness</li>
                      <li>Pensiuni și case de vacanță</li>
                      <li>Și multe altele</li>
                  </ul>
              </div>
          </div>
      </div>
        
      <div class="mt-12 text-center">
          <a href="#contact" class="px-4 py-1 text-lg font-semibold text-white transition duration-300 bg-blue-600 rounded-full hover:bg-blue-700">Consultanță gratuită</a>
      </div>
  </div>
</section>


  <!--Servicii-->
 
  <div class="max-w-6xl mx-auto">
    <h2 class="mb-8 text-3xl font-bold text-center text-gray-800">Serviciile noastre</h2>
</div>
  
  <div id="servicii" class="container grid items-center grid-cols-1 mx-auto text-center md:grid-cols-2 lg:grid-cols-3">



    <!-- Service Block 1: Dezvoltare de Website-uri și Aplicații Web -->

  <div data-aos="fade-down">
  
  <div class="flex w-full h-full px-4 lg:px-6">
    <div class="px-6 py-8 mb-8 transition duration-300 ease-in-out transform rounded-lg shadow-lg h-96 bg-gray-50 hover:-translate-y-2">
        <div class="inline-block mb-4 text-gray-900">
              <!-- icon -->
              <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="mx-auto mb-4 text-gray-900" viewBox="0 0 16 16">
                  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                  <path d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0m2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0"/>
              </svg>
          </div>
          <h3 class="mb-2 text-lg font-semibold leading-normal text-black">Dezvoltare de site-uri și Aplicații Web</h3>
          <ul class="mt-2 text-center text-gray-700 list-none "> 
          <li class="mt-2">Creare de site-uri personalizate, pagini web de prezentare, magazine online (e-commerce) pe platforme open source: Bagisto - Laravel, Prestashop etc </li>
          <li class="mt-2"> Dezvoltare de aplicații web complexe pentru diferite nevoi și industrii. </li>

          </ul>
      </div>
  </div>
  </div>
  <!-- end service block -->

<!-- Service Block 2: Spoturi Audio și Video Publicitare -->

<div data-aos="fade-right">

<div class="flex w-full h-full px-4 lg:px-6">
  <div class="px-8 py-8 mb-8 transition duration-300 ease-in-out transform rounded-lg shadow-lg h-96 bg-gray-50 hover:-translate-y-2">
    <div class="inline-block mb-4 text-gray-900">
              <!-- icon -->
              <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="mx-auto mb-4 text-gray-900" viewBox="0 0 16 16">
                  <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5"/>
                  <path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3"/>
              </svg>
          </div>
          <h3 class="mb-2 text-lg font-semibold leading-normal text-black">Spoturi Audio și Video Publicitare</h3>
          <ul class="mt-2 text-center text-gray-700 list-none "> 
            <li class="mt-2"> Creare de filmulete de prezentare și promoționale pentru afaceri, produse sau evenimente </li>
            <li class="mt-2"> Creare și producție de spoturi publicitare audio pentru radio și alte medii audio (Spotify etc).</li>
                    
          </ul>
      </div>
  </div>
</div>

  <!-- end service block -->

  <!-- Service Block 3: Design și Implementare de Branding -->
  <div data-aos="zoom-in-up">

  <div class="flex w-full h-full px-4 lg:px-6">
    <div class="px-8 py-8 mb-8 transition duration-300 ease-in-out transform rounded-lg shadow-lg h-96 bg-gray-50 hover:-translate-y-2">
        <div class="inline-block mb-4 text-gray-900">
              <!-- icon -->
              <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="mx-auto mb-4 text-gray-900" viewBox="0 0 16 16">
                  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"></path>
                  <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"></path>
              </svg>
          </div>
          <h3 class="mb-2 text-lg font-semibold leading-normal text-black">Design și Implementare de Branding</h3>
          <ul class="mt-2 text-center text-gray-700 list-none "> 
            <li class="mt-2">Design de logo-uri și creare de identitate vizuală și branding pentru companii și evenimente.</li>
            <li class="mt-2">Elaborare și implementare de strategii digitale personalizate pentru creșterea vizibilității online.</li> 
          </ul>
      </div>
  </div>
  </div>

<!-- Service Block 4: Producție Muzicală și Audiovizuală -->
<div data-aos="fade-right">
<div class="flex w-full h-full px-4 lg:px-6">
  <div class="px-8 py-8 mb-8 transition duration-300 ease-in-out transform rounded-lg shadow-lg h-96 bg-gray-50 hover:-translate-y-2">
      <div class="inline-block mb-4 text-gray-900">
        <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="mx-auto mb-4 text-gray-900" viewBox="0 0 16 16">
          <path d="M6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814z"/>
          <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm15 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
        </svg>
     </div>
      <h3 class="mb-2 text-lg font-semibold leading-normal text-black">Producție Muzicală și Audiovizuală</h3>
      <ul class="mt-2 text-center text-gray-700 list-none ">
        <li class="mt-2">Creare și înregistrare de piese muzicale originale, servicii de mixing si mastering, spoturi audio etc.</li>
        <li class="mt-2">Producție și editare de materiale audiovizuale pentru diverse scopuri: reclame, videoclipuri, podcast-uri etc.</li> 
      </ul>
    </div>
  </div>
</div>

<!-- Service Block 5: Fotografie Profesională și Retușare Foto -->
<div data-aos="fade-down">

<div class="flex w-full h-full px-4 lg:px-6">
  <div class="px-8 py-8 mb-8 transition duration-300 ease-in-out transform rounded-lg shadow-lg h-96 bg-gray-50 hover:-translate-y-2">
      <div class="inline-block mb-4 text-gray-900">
    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="mx-auto mb-4 text-gray-900" viewBox="0 0 16 16">
      <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4z"/>
      <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5m0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7M3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0"/>
    </svg>
    </div>
    <h3 class="mb-2 text-lg font-semibold leading-normal text-black">Fotografie Profesională și Retușare Foto</h3>
    <ul class="mt-2 text-center text-gray-700 list-none">
      <li class="mt-2">Servicii de fotografie de produs pentru magazine online și campanii publicitare.</li>
      <li class="mt-2">Retușare foto și editare avansată pentru imagini de înaltă calitate.</li>
      <li class="mt-2">Sedinte foto profesionale pentru diverse evenimente și produse.</li>
     
    </ul>
  </div>
</div>
</div>


<!-- Service Block 6: Videoclipuri Muzicale și Campanii Publicitare Video -->
<div data-aos="zoom-in-up">
<div class="flex w-full h-full px-4 lg:px-6">
  <div class="px-8 py-8 mb-8 transition duration-300 ease-in-out transform rounded-lg shadow-lg h-96 bg-gray-50 hover:-translate-y-2">
      <div class="inline-block mb-4 text-gray-900">
    <!-- icon -->
    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="mx-auto mb-4 text-gray-900" viewBox="0 0 16 16">
      <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0M1 3a2 2 0 1 0 4 0 2 2 0 0 0-4 0"/>
      <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2zm6 8.73V7.27l-3.5 1.555v4.35zM1 8v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1"/>
      <path d="M9 6a3 3 0 1 0 0-6 3 3 0 0 0 0 6M7 3a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
    </svg>
</div>
  <h3 class="mb-2 text-lg font-semibold leading-normal text-black">Videoclipuri Muzicale și Campanii Publicitare Video</h3>
  <ul class="mt-2 text-center text-gray-700 list-none">
    <li class="mt-2">Regie, filmare și editare de videoclipuri muzicale creative și de înaltă calitate.</li>
    <li class="mt-2">Creare și editare de conținut video scurt și captivant pentru platformele populare de social media:YouTube Shorts, Instagram Reels și TikTok Videos</li>
  </ul>
</div>
</div>
</div>

<!-- Service Block 7: Implementare și Administrare Canale de Social Media  -->
<div data-aos="fade-right">

<div class="flex w-full h-full px-4 lg:px-6">
  <div class="px-8 py-8 mb-8 transition duration-300 ease-in-out transform rounded-lg shadow-lg h-96 bg-gray-50 hover:-translate-y-2">
      <div class="inline-block mb-4 text-gray-900">
    <!-- icon -->
  
    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="mx-auto mb-4 text-gray-900" viewBox="0 0 16 16">
      <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
      <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
    </svg>

</div>
      <h3 class="mb-2 text-lg font-semibold leading-normal text-black">Implementare și Administrare Canale de Social Media</h3>
      <ul class="mt-2 text-center text-gray-700 list-none">
        <li class="mt-2">Creare și optimizare de profiluri pe diverse platforme de socializare (YouTube, Instagram, Facebook, TikTok etc.).</li>
          <li class="mt-2">Administrare și creștere a audienței pe canalele de social media prin postări regulate și interacțiune cu urmăritorii.</li>
      </ul>
  </div>
</div>
</div>

<!-- Service Block 8: Servicii de SEO (Optimizare pentru Motoarele de Căutare)  -->
<div data-aos="fade-down">
<div class="flex w-full h-full px-4 lg:px-6">
  <div class="px-8 py-8 mb-8 transition duration-300 ease-in-out transform rounded-lg shadow-lg h-96 bg-gray-50 hover:-translate-y-2">
      <div class="inline-block mb-4 text-gray-900">
    <!-- icon -->
    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="mx-auto mb-4 text-gray-900" viewBox="0 0 16 16">
      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
    </svg>
</div>

<h3 class="mb-2 text-lg font-semibold leading-normal text-black">Servicii de SEO (Optimizare pentru Motoarele de Căutare)</h3>
<ul class="mt-2 text-center text-gray-700 list-none">
  <li class="mt-2">Implementarea de tehnici și strategii de optimizare pentru motoarele de căutare pentru a crește vizibilitatea și clasamentul website-urilor și aplicațiilor web în rezultatele căutărilor organice, generând astfel mai mult trafic și potențiali clienți pentru afacerile clienților tăi.</li> 
</ul>
</div>
</div>
</div>

<!-- Service Block 9: Creare și gestionare de campanii de publicitate online -->
<div data-aos="zoom-in-up">

<div class="flex w-full h-full px-4 lg:px-6">
  <div class="px-8 py-8 mb-8 transition duration-300 ease-in-out transform rounded-lg shadow-lg h-96 bg-gray-50 hover:-translate-y-2">
      <div class="inline-block mb-4 text-gray-900">
    <!-- icon -->
    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="mx-auto mb-4 text-gray-900" viewBox="0 0 16 16">
      <path d="m3.7 11 .47-1.542h2.004L6.644 11h1.261L5.901 5.001H4.513L2.5 11zm1.503-4.852.734 2.426H4.416l.734-2.426zm4.759.128c-1.059 0-1.753.765-1.753 2.043v.695c0 1.279.685 2.043 1.74 2.043.677 0 1.222-.33 1.367-.804h.057V11h1.138V4.685h-1.16v2.36h-.053c-.18-.475-.68-.77-1.336-.77zm.387.923c.58 0 1.002.44 1.002 1.138v.602c0 .76-.396 1.2-.984 1.2-.598 0-.972-.449-.972-1.248v-.453c0-.795.37-1.24.954-1.24z"/>
      <path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2z"/>
    </svg>
</div>
  <h3 class="mb-2 text-lg font-semibold leading-normal text-black">Creare și gestionare de campanii de publicitate online</h3>
  <ul class="mt-2 text-center text-gray-700 list-none">
    <li class="mt-2">Dezvoltarea și implementarea de campanii publicitare eficiente pe platforme precum Google Ads, Facebook Ads, Instagram Ads, Tik Tok Ads pentru a ajuta afacerile să-și promoveze produsele și serviciile către audiențele relevante.</li>
  </ul>
</div>
</div>
</div>


  <!-- End Service blocks -->
</div>
</div>



<!--Portofolio-->

<section id="portofoliu" class="px-4 py-12 text-center bg-gray-100 ">
  <div class="container mx-auto">
    <h2 class="mb-8 text-3xl font-bold text-center">Portofoliu</h2>
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">

      <!-- Portfolio Item Click Music App -->
      <div x-data="{ open: false }" data-aos="fade-right" class="mb-4">
        <button @click="open = !open" class="w-full px-8 py-8 mb-8 transition duration-300 ease-in-out transform rounded-lg shadow-lg bg-gray-50 hover:-translate-y-2">
          <div class="flex justify-between">
            <h3 class="text-lg font-semibold">Click Music Streaming App</h3>
            <span x-show="!open" class="text-blue-500">+</span>
            <span x-show="open" class="text-blue-500">-</span>
          </div>
        </button>
        <div x-show="open" x-transition class="px-8 py-8 bg-white border border-t-0">
          <a href="https://clickmusic.ro" target="_blank" rel="noopener noreferrer" class="hover:no-underline">
          <img src="/assets/clickmusicapp.jpg" alt="Click Music Streaming App" class="w-full h-auto transition duration-300 ease-in-out transform rounded-lg hover:scale-105 hover:opacity-80">
          <div class="p-4">
            <p class="text-base leading-relaxed text-left">
              <span class="text-blue-500">✗</span> Click Music Streaming App este rezultatul eforturilor noastre constante de a crea soluții digitale de înaltă calitate, îmbunătățind experiența utilizatorilor în domeniul streaming-ului muzical. <br> <br>
              <span class="text-blue-500">✗</span> Dezvoltată folosind tehnologii avansate PHP/Laravel, această aplicație web oferă o experiență de streaming captivantă și ușor de folosit.
              <br><br>
              <strong>Caracteristici Cheie:</strong>
              <ul class="mt-2 text-left list-disc">
                <li>Sistem de Autentificare</li>
                <li>Bază de Date Avansată</li>
                <li>Notificări Mail și Database</li>
                <li>Sectiune de Comentarii</li>
                <li>Streaming cu CDN</li>
                <li>Blog integrat</li>
                <li>Sistem de plata cu Stripe</li>
                <li>Securitate Avansată a Datelor</li>
              </ul>
              <br>
              <span class="text-blue-500">✗</span> Click Music Streaming App este un exemplu al angajamentului nostru față de excelență și inovație în dezvoltarea soluțiilor digitale, aducând muzica mai aproape de publicul său într-un mod interactiv și captivant.
            </p>
          </div>
        </div>
      </a>
      </div>

<!-- Portfolio Item Snow 'n' Stuff -->
<div x-data="{ open: false }" data-aos="fade-right" class="mb-4">
  <button @click="open = !open" class="w-full px-8 py-8 mb-8 transition duration-300 ease-in-out transform rounded-lg shadow-lg bg-gray-50 hover:-translate-y-2">
    <div class="flex justify-between">
      <h3 class="text-lg font-semibold">Website Prezentare Snow 'n' Stuff</h3>
      <span x-show="!open" class="text-blue-500">+</span>
      <span x-show="open" class="text-blue-500">-</span>
    </div>
  </button>
</a>
<div x-show="open" x-transition class="px-8 py-8 bg-white border border-t-0">
  <a href="https://www.snow-n-stuff.com/" target="_blank" rel="noopener noreferrer" class="hover:no-underline">

  <img src="/assets/OG-SnownStuff.jpg" alt="Website Prezentare Snow 'n' Stuff" class="w-full h-auto transition duration-300 ease-in-out transform rounded-lg hover:scale-105 hover:opacity-80">
  <div class="p-4">
    <p class="text-base leading-relaxed text-left">
      <span class="text-blue-500">✗</span> Snow 'n' Stuff este un label muzical internațional de top, specializat în genurile Tech House, Deep House, House și Techno. Pentru a reflecta profesionalismul și calitatea înaltă a acestui brand, am creat un website de prezentare captivant și modern. <br> <br>
      <span class="text-blue-500">✗</span> Website-ul a fost conceput pentru a oferi o experiență digitală unică, prezentând artiștii labelului, piesele muzicale și playlisturile lor. <br> <br>
      <span class="text-blue-500">✗</span> Am integrat elemente interactive, precum playere pentru ascultarea pieselor, creând o platformă engaging pentru fanii muzicii electronice. <br> <br>
  
      <strong>Caracteristici Cheie:</strong>
      <ul class="pl-6 mt-2 text-left list-disc">
        <li>Design Modern și Captivant</li>
        <li>Prezentare Artiști și Playlisturi</li>
        <li>Elemente Interactive (Playere, Previews)</li>
        <li>Optimizare SEO pentru Vizibilitate Organică</li>
        <li>Integrare cu Platforme Sociale și Streaming</li>
      </ul>
<br>
    <span class="text-blue-500">✗</span> Prin intermediul acestui website de prezentare, am reușit să promovăm eficient brandul Snow 'n' Stuff și să oferim o experiență digitală de top pentru fanii muzicii electronice din întreaga lume. Optimizarea SEO a asigurat, de asemenea, vizibilitatea organică și accesibilitatea către publicul țintă, facilitând astfel creșterea și dezvoltarea continuă a labelului.
    </p>
  </div>
</div>
</a>
</div>


<!-- Portfolio Item Branding CS Victoria MM -->
<div x-data="{ open: false }" data-aos="fade-right" class="mb-4">
  <button @click="open = !open" class="w-full px-8 py-8 mb-8 transition duration-300 ease-in-out transform rounded-lg shadow-lg bg-gray-50 hover:-translate-y-2">
    <div class="flex justify-between">
      <h3 class="text-lg font-semibold">Branding CS Victoria MM</h3>
      <span x-show="!open" class="text-blue-500">+</span>
      <span x-show="open" class="text-blue-500">-</span>
    </div>
  </button>
</a>
<div x-show="open" x-transition class="px-8 py-8 bg-white border border-t-0">
  <a href="https://csvictoriamm.ro/" target="_blank" rel="noopener noreferrer" class="hover:no-underline">

  <img src="/assets/victoria-maramures.jpg" alt="Branding Club Sportiv Victoria Maramureș" class="w-full h-auto transition duration-300 ease-in-out transform rounded-lg hover:scale-105 hover:opacity-80">
  <div class="p-4">
    <p class="text-base leading-relaxed text-left">
      <span class="text-blue-500">✗</span> Proiectul de branding pentru Clubul Sportiv Victoria Maramureș a fost o călătorie fascinantă în definirea și exprimarea identității acestuia în mediul online și offline. <br> <br>
      <span class="text-blue-500">✗</span> Am dezvoltat un logo unic și memorabil care să reprezinte valorile și pasiunea clubului pentru sport, îmbinând tradiția cu modernitatea. <br> <br>
      <span class="text-blue-500">✗</span> Pe lângă crearea identității vizuale, am dezvoltat și un website atractiv și ușor de navigat, precum și conținut video captivant pentru platformele sociale ale clubului, inclusiv reeluri pe Instagram și videoclipuri pe YouTube. <br> <br>
  
      
      <strong>Caracteristici Cheie:</strong>
      <ul class="pl-6 mt-2 text-left list-disc">
        <li>Creare Identitate Vizuală</li>
        <li>Logo Unic și Memorabil</li>
        <li>Website Atractiv și Ușor de Navigat</li>
        <li>Conținut Video Captivant pentru Platforme Sociale si Gestionarea acestora</li>
        <li class="font-semibold">     
        Optimizare SEO pentru a ajunge organic în primele pagini ale căutărilor.
        
      </li>
    </ul>
<br>
    <span class="text-blue-500">✗</span> Proiectul de branding pentru Clubul Sportiv Victoria Maramureș a fost o inițiativă care a contribuit semnificativ la consolidarea prezenței și notorietății clubului în mediul online. Optimizarea SEO a asigurat, de asemenea, vizibilitatea organică și accesibilitatea către publicul țintă, facilitând astfel creșterea și dezvoltarea continuă a clubului.
    </p>
  </div>
</div>
</a>
</div>

  
<!-- Portfolio Item Podcast Morosenesc -->
<div x-data="{ open: false }" data-aos="fade-down" class="mb-4">
 
    <button @click="open = !open" class="w-full px-8 py-8 mb-8 transition duration-300 ease-in-out transform rounded-lg shadow-lg bg-gray-50 hover:-translate-y-2">
      <div class="flex justify-between">
        <h3 class="text-lg font-semibold">Podcast Morosenesc</h3>
        <span x-show="!open" class="text-blue-500">+</span>
        <span x-show="open" class="text-blue-500">-</span>
      </div>
    </button>
  <div x-show="open" x-transition class="px-8 py-8 bg-white border border-t-0">
    <a href="https://www.youtube.com/@IoanaMihalca" target="_blank" rel="noopener noreferrer" class="hover:no-underline">
    <img src="/assets/podcastmorosenesc.jpg" alt="Productie Podcast Morosenesc cu Ioana Mihalca" class="w-full h-auto transition duration-300 ease-in-out transform rounded-lg hover:scale-105 hover:opacity-80">
    <div class="p-4">
      <p class="text-base leading-relaxed text-left">
        <span class="text-blue-500">✗</span> "Podcast Morosenesc cu Ioana Mihalca" este un proiect de succes din portofoliul Click Studios, dedicat explorării povestirilor autentice și discuțiilor captivante. <br> <br>
        <span class="text-blue-500">✗</span> Acest podcast aduce în fața ascultătorilor povești de viață inspiratoare și conversații profunde cu personalități remarcabile din diverse domenii. <br><br>
        
        <strong>Caracteristici Cheie:</strong>
        
        <ul class="mt-2 text-left list-disc">
          <li><strong>Înregistrare și Editare:</strong> Utilizarea echipamentelor de ultimă generație pentru a asigura o calitate impecabilă a sunetului și o editare profesionistă. <br>
          </li>
          <li>
            <strong>Distribuție și Promovare:</strong> Implementarea unei strategii de marketing digital pentru a maximiza audiența și impactul podcastului. Disponibil pe Principalele Platforme de Podcasting(Spotify, Apple Podcasts, Google Podcasts) <br>

          </li>
            <li>Strategii Eficiente de Marketing Digital</li>
        
            
        </ul>
      
        <br>
      
        <span class="text-blue-500">✗</span>"Podcast Morosenesc cu Ioana Mihalca" a contribuit la consolidarea brandului Click Studios, demonstrând capacitatea noastră de a crea conținut de calitate și de a gestiona proiecte media complexe. Acest proiect este un exemplu perfect al abilității noastre de a combina creativitatea si productia cu strategia de marketing digital pentru a obține rezultate remarcabile. <br><br>
       
      </p>
    </div>
  </div>
</a>
</div>

    
         <!-- Portfolio Item Click Music Youtube -->
<div x-data="{ open: false }" data-aos="zoom-in-up" class="mb-4">
    <button @click="open = !open" class="w-full px-8 py-8 mb-8 transition duration-300 ease-in-out transform rounded-lg shadow-lg bg-gray-50 hover:-translate-y-2">
      <div class="flex justify-between">
        <h3 class="text-lg font-semibold">Click Music Youtube</h3>
        <span x-show="!open" class="text-blue-500">+</span>
        <span x-show="open" class="text-blue-500">-</span>
      </div>
    </button>
  <div x-show="open" x-transition class="px-8 py-8 bg-white border border-t-0">
    <a href="https://www.youtube.com/@clickmusicromania" target="_blank" rel="noopener noreferrer" class="hover:no-underline">

    <img src="/assets/click youtube.jpg" alt="Click Music canal youtube" class="w-full h-auto transition duration-300 ease-in-out transform rounded-lg hover:scale-105 hover:opacity-80">
    <div class="p-4">
      <p class="text-base leading-relaxed text-left">
        <span class="text-blue-500">✗</span> Suntem mândri să prezentăm Click Music Romania, un proiect emblematic în portofoliul nostru. <br> <br>
        <span class="text-blue-500">✗</span> Acest canal YouTube reprezintă o extensie a serviciilor noastre, evidențiind expertiza noastră în crearea de conținut de cea mai înaltă calitate în domeniul muzicii și al vizualurilor captivante.

  
        <br><br>
  
        <strong>Caracteristici Cheie:</strong>
  
        <ul class="mt-2 text-left list-disc ">
          <li><strong>Producții Audio de Înaltă Calitate</strong>: Cu o echipă de producție audio experimentată, ne străduim să oferim sunete impecabile și mixaje profesionale care să îmbogățească experiența auditivă a publicului nostru.
          </li>
          <li><strong>Videoclipuri Muzicale</strong>: Fiecare videoclip reprezintă o sinteză perfectă între muzică și imagine, capturând esența fiecărei piese.</li>
     
     
        </ul>
  <br>
        <span class="text-blue-500">✗</span> Rezultate Demonstrabile: Canalul nostru, Click Music Romania, s-a remarcat prin obținerea a peste 50 de milioane de vizualizări, evidențiind eficacitatea și impactul strategiilor noastre de marketing în atragerea și implicarea publicului. Acest succes solidifică poziția noastră ca lideri în furnizarea de soluții de marketing digitale care generează rezultate tangibile și măsurabile pentru clienții noștri.
      </p>
    </div>
  </div>
</a>

</div>

 
   
<!-- Portfolio Item 6 -->
<div x-data="{ open: false }" data-aos="zoom-in-up" class="mb-4">
    <button @click="open = !open" class="w-full px-8 py-8 mb-8 transition duration-300 ease-in-out transform rounded-lg shadow-lg bg-gray-50 hover:-translate-y-2">
      <div class="flex justify-between">
        <h3 class="text-lg font-semibold">Proiectul tău → Aici</h3>
        <span x-show="!open" class="text-blue-500">+</span>
        <span x-show="open" class="text-blue-500">-</span>
      </div>
    </button>
  <div x-show="open" x-transition class="px-8 py-8 bg-white border border-t-0">
    <a href="#" target="_blank" rel="noopener noreferrer" class="hover:no-underline">

    <img src="/assets/digital-marketing2.jpg" alt="digital marketing baia mare" class="w-full h-auto transition duration-300 ease-in-out transform rounded-lg hover:scale-105 hover:opacity-80">
    <div class="p-4">
      <p class="text-base leading-relaxed text-left">
        <span class="text-blue-500">✗</span> Suntem în faza de planificare pentru noi proiecte incitante care vor schimba peisajul digital. <br> <br>
        <span class="text-blue-500">✗</span> Ne pregătim să aducem inovație în proiectul tău prin noi idei și concepte creative de branding și promovare digitală. <br> <br>
        <span class="text-blue-500">✗</span> Rămâi conectat pentru a fi primul care află despre noile noastre proiecte și pentru a te implica în construirea viitorului digital împreună cu noi.
      </p>
    </div>
  </div>
</a>
</div>


   <!--Alte itemuri-->
    </div>
  </div>
</section>

<!-- Team Section & Contact -->
<div id="contact" class="mt-8">
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
</div>
<!--Contact Form-->
<div class="max-w-md px-2 mx-auto text-center">
    <strong>Colaborați cu Noi:</strong> <br><br>
    <span class="text-gray-700">Dacă sunteți interesați să colaborați cu noi pentru dezvoltare web, producția de conținut media sau alte servicii de publicitate și marketing digital, nu ezitați să ne contactați:</span>
    
    <!-- Contact Form -->
    <div data-aos="fade-up">
    <div class="px-2 mt-4">
      <form
        action="https://formspree.io/f/xjvndkvg"
        method="POST"
        class="p-6 space-y-4 bg-gray-200 rounded-2xl "
      >
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Emailul dumneavoastra:</label>
          <input type="email" id="email" name="email" class="block w-full mt-1 border-gray-700 rounded-md shadow-lg focus:ring-blue-500 focus:border-blue-500" required>
        </div>
        <div>
          <label for="message" class="block text-sm font-medium text-gray-700">Mesaj:</label>
          <textarea id="message" name="message" rows="4" class="block w-full mt-1 border-gray-700 rounded-md shadow-lg focus:ring-blue-500 focus:border-blue-500" required></textarea>
        </div>
        <div>
          <button type="submit" class="w-full px-4 py-2 font-bold text-white bg-gray-700 rounded hover:bg-gray-500">Send</button>
        </div>
      </form>
    </div>
  </div>

<footer class="mb-4 text-center bg-gray-100" x-data>
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
    <button x-show="scrollToTop" @click="window.scrollTo({ top: 0, behavior: 'smooth' })" class="fixed flex items-center justify-center w-10 h-10 text-white bg-blue-500 rounded-full bottom-4 right-4 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
        </svg>
    </button>
    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>
