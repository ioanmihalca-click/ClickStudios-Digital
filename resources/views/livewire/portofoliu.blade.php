 <div>

         <div class="relative h-screen bg-fixed bg-center bg-cover shadow-2xl"
             style="background-image: url('assets/portofoliu.webp')" alt="click studios digital portofoliu">
               <div id="tsparticles"></div>
             <div class="absolute inset-0 bg-black/50"></div>

             <div class="relative z-10 flex flex-col items-center justify-center h-full">
                 <h2
                     class="font-roboto-condensed uppercase bg-black px-2 bg-opacity-15 mb-10 md:mb-14 tracking-[6px] md:tracking-[24px] font-normal text-3xl md:text-5xl leading-relaxed md:leading-normal text-white">
                     Portofoliu</h2>
                 <div class="max-w-2xl mx-auto">
                     <p class="p-2 px-2 mb-16 text-lg tracking-wide text-center text-white bg-black bg-opacity-15 font-volkov">"Singurul mod de a
                         face un lucru bine este să fii pasionat."</p>

                 </div>

                <div class="grid grid-cols-1 gap-4 px-2">
               <a href="#aplicatii-web"
                class="px-10 py-2 text-xs tracking-widest text-white uppercase transition-all duration-300 border border-white bg-emerald-600 scroll-link hover:bg-white hover:text-black font-roboto-condensed hover:border-transparent">Aplicatii Web</a>
                
                <a href="#multimedia" 
                class="px-10 py-2 text-xs tracking-widest text-center text-white uppercase transition-all duration-300 border border-white bg-emerald-600 scroll-link hover:bg-white hover:text-black font-roboto-condensed hover:border-transparent">Multimedia</a>
            </div>
               

             </div>

         </div>



   <div id="aplicatii-web" 
         x-data="{ 
            selectedItem: null, 
            hoverItem: null, 
            mouseX: 0, 
            mouseY: 0,
            getImagePath(item) {
              
                const basePath = '/assets/hover-images/';
                return `${basePath}${item}.webp`;
            }
         }" 
         @mousemove="mouseX = $event.clientX; mouseY = $event.clientY"
         class="flex items-center justify-center min-h-screen bg-white">
        <div class="container max-w-5xl px-2 mx-auto">
            <h2 class="my-12 text-xl font-bold text-center text-black uppercase font-roboto-condensed md:text-3xl">
                Aplicatii Web si Site-uri
            </h2>
       
<div class="grid grid-cols-1 gap-6 md:grid-cols-3" x-data="{ hover: null }">

    <!-- Click Music App -->
    <div @click="selectedItem = 'click-music'"
         @mouseenter="hoverItem = 'click-music'; hover = 'click-music'" 
         @mouseleave="hoverItem = null; hover = null"
         class="relative flex flex-col justify-center h-24 p-6 text-center transition-all duration-300 bg-white border-t border-b cursor-pointer border-emerald-500 hover:shadow-2xl rounded-xl">
       
        <h3 class="text-xl font-semibold text-black">Click Music RO</h3>
        <div x-show="hover === 'click-music'" class="absolute left-0 right-0 px-6 text-sm text-gray-700 bottom-2">Platforma de streaming muzical</div>
    </div>

    <!-- InstaCapture -->
    <div @click="selectedItem = 'instacapture'"
         @mouseenter="hoverItem = 'instacapture'; hover = 'instacapture'" 
         @mouseleave="hoverItem = null; hover = null"
         class="relative flex flex-col justify-center h-24 p-6 text-center transition-all duration-300 bg-white border-t border-b cursor-pointer border-emerald-500 hover:shadow-2xl rounded-xl">
       
        <h3 class="text-xl font-semibold text-gray-900">InstaCapture</h3>
        <div x-show="hover === 'instacapture'" class="absolute left-0 right-0 px-6 text-sm text-gray-600 bottom-2">Aplicatie web fotografie profesionala</div>
    </div>
    
    <!-- Snow 'n' Stuff -->
    <div @click="selectedItem = 'snow-n-stuff'"
         @mouseenter="hoverItem = 'snow-n-stuff'; hover = 'snow-n-stuff'" 
         @mouseleave="hoverItem = null; hover = null"
         class="relative flex flex-col justify-center h-24 p-6 text-center transition-all duration-300 bg-white border-t border-b cursor-pointer border-emerald-500 hover:shadow-2xl rounded-xl">
        
        <h3 class="text-xl font-semibold text-gray-900">Snow 'n' Stuff</h3>
        <div x-show="hover === 'snow-n-stuff'" class="absolute left-0 right-0 px-6 text-sm text-gray-600 bottom-2">Label muzical internațional de top</div>
    </div>
    
    <!-- CS Victoria MM -->
    <div @click="selectedItem = 'cs-victoria-mm'"
         @mouseenter="hoverItem = 'cs-victoria-mm'; hover = 'cs-victoria-mm'" 
         @mouseleave="hoverItem = null; hover = null"
         class="relative flex flex-col justify-center h-24 p-6 text-center transition-all duration-300 bg-white border-t border-b cursor-pointer border-emerald-500 hover:shadow-2xl rounded-xl">

        <h3 class="text-xl font-semibold text-gray-900">CS Victoria MM</h3>
        <div x-show="hover === 'cs-victoria-mm'" class="absolute left-0 right-0 px-6 text-sm text-gray-600 bottom-2">Pagina de prezentare club sportiv</div>
    </div>
    
    <!-- Ioana Mihalca -->
    <div @click="selectedItem = 'ioana-mihalca'"
         @mouseenter="hoverItem = 'ioana-mihalca'; hover = 'ioana-mihalca'" 
         @mouseleave="hoverItem = null; hover = null"
         class="relative flex flex-col justify-center h-24 p-6 text-center transition-all duration-300 bg-white border-t border-b cursor-pointer border-emerald-500 hover:shadow-2xl rounded-xl">

        <h3 class="text-xl font-semibold text-gray-900">Ioana Mihalca</h3>
        <div x-show="hover === 'ioana-mihalca'" class="absolute left-0 right-0 px-6 text-sm text-gray-600 bottom-2">Blog de jurnalistă</div>
    </div>
    
    <!-- Truland --> 
    <div @click="selectedItem = 'truland'"
         @mouseenter="hoverItem = 'truland'; hover = 'truland'" 
         @mouseleave="hoverItem = null; hover = null"
         class="relative z-10 flex flex-col justify-center h-24 p-6 text-center transition-all duration-300 bg-white border-t border-b cursor-pointer border-emerald-500 hover:shadow-2xl rounded-xl">
        
        <h3 class="text-xl font-semibold text-gray-900 ">Truland Magazin Online</h3>
        <div x-show="hover === 'truland'" class="absolute left-0 right-0 px-6 text-sm text-gray-600 bottom-2">Magazin online de incaltaminte</div>
    </div>



          <!-- Hover Image -->
<div x-show="hoverItem" 
     :style="{ left: `${mouseX + 20}px`, top: `${mouseY - 200}px` }"
     class="fixed z-50 hidden w-64 overflow-hidden transition-all duration-300 rounded-xl md:block">
    <img :src="getImagePath(hoverItem)" 
         :alt="hoverItem + ' preview'"
         class="w-full hover-image">
</div>


            

    <!-- Slide-over panel -->
    <div x-cloak x-show="selectedItem !== null" 
         x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700" 
         x-transition:enter-start="translate-x-full" 
         x-transition:enter-end="translate-x-0" 
         x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700" 
         x-transition:leave-start="translate-x-0" 
         x-transition:leave-end="translate-x-full" 
         @keydown.escape.window="selectedItem = null"
         class="fixed inset-y-0 right-0 z-50 w-full max-w-md px-4 overflow-y-auto bg-white shadow-xl">
        <div class="p-6">
            <button @click="selectedItem = null" class="absolute text-emerald-500 top-4 right-4 hover:text-emerald-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            </div>
            
            <!-- Click Music App Details -->
            <div x-show="selectedItem === 'click-music'">
                <h2 class="mb-4 text-2xl font-bold">Click Music RO</h2>
                <img src="/assets/ClickMusic-OG-Site.jpg" alt="Click Music Streaming App" class="w-full mb-4 rounded-lg">
                <p class="mb-4">Clickmusic.ro este rezultatul eforturilor noastre constante de a crea soluții digitale de înaltă calitate, îmbunătățind experiența utilizatorilor în domeniul streaming-ului muzical.</p>
                <ul class="mb-4 ml-6 list-disc">
                    <li>Sistem de Autentificare</li>
                    <li>Bază de Date Avansată</li>
                    <li>Notificări Mail și Database</li>
                    <li>Secțiune de Comentarii</li>
                    <li>Streaming cu CDN</li>
                    <li>Blog Integrat</li>
                    <li>Sistem de Plată cu Stripe</li>
                    <li>Panou de control</li>
                </ul>
                <a href="https://clickmusic.ro" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-4 py-2 text-white transition-colors duration-300 rounded-lg bg-emerald-500 hover:bg-emerald-600">
                    Vizitează Site-ul
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </a>
            </div>
            
            <!-- InstaCapture Details -->
            <div x-show="selectedItem === 'instacapture'">
                <h2 class="mb-4 text-2xl font-bold">InstaCapture</h2>
                <img src="/assets/OG-instacapture.jpg" alt="Aplicație de Fotografie Profesională InstaCapture" class="w-full mb-4 rounded-lg">
                <p class="mb-4">InstaCapture.ro este o aplicație web inovatoare dezvoltată de agenția noastră pentru firma de fotografie profesională InstaCapture din Cluj-Napoca.</p>
                <ul class="mb-4 ml-6 list-disc">
                    <li>Dezvoltată în Laravel</li>
                    <li>Panou de Control</li>
                    <li>Integrare CDN prin API</li>
                    <li>Performanță Ridicată</li>
                    <li>Design Modern</li>
                    <li>Încărcare Rapidă a Pozelor</li>
                </ul>
                <a href="https://instacapture.ro" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-4 py-2 text-white transition-colors duration-300 bg-emerald-500 hover:bg-emerald-600">
                    Vizitează Site-ul
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </a>
            </div>
            
            <!-- Snow 'n' Stuff Details -->
            <div x-show="selectedItem === 'snow-n-stuff'">
                <h2 class="mb-4 text-2xl font-bold">Snow 'n' Stuff</h2>
                <img src="/assets/OG-SnownStuff.jpg" alt="Website Prezentare Snow 'n' Stuff" class="w-full mb-4 rounded-lg">
                <p class="mb-4">Snow 'n' Stuff este un label muzical internațional de top, specializat în genurile Tech House, Deep House, House și Techno.</p>
                <ul class="mb-4 ml-6 list-disc">
                    <li>Dezvoltat în Laravel</li>
                    <li>Design Modern</li>
                    <li>Blog Integrat</li>
                    <li>Prezentare Artiști</li>
                    <li>Piese Muzicale și Playlisturi</li>
                    <li>Panou de Control Personalizat</li>
                    <li>Optimizare SEO</li>
                </ul>
                <a href="https://www.snow-n-stuff.com/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-4 py-2 text-white transition-colors duration-300 bg-emerald-500 hover:bg-emerald-600">
                    Vizitează Site-ul
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </a>
            </div>
            
            <!-- CS Victoria MM Details -->
            <div x-show="selectedItem === 'cs-victoria-mm'">
                <h2 class="mb-4 text-2xl font-bold">CS Victoria MM</h2>
                <img src="/assets/victoria-maramures.jpg" alt="Branding Club Sportiv Victoria Maramureș" class="w-full mb-4 rounded-lg">
                <p class="mb-4">Proiectul de branding pentru Clubul Sportiv Victoria Maramureș este o călătorie fascinantă în definirea și exprimarea identității acestuia în mediul online și offline.</p>
                <ul class="mb-4 ml-6 list-disc">
                    <li>Creare Identitate Vizuală</li>
                    <li>Logo Unic și Memorabil</li>
                    <li>Dezvoltat in Laravel</li>
                    <li>Panou de Control</li>
                    <li>Optimizare SEO</li>
                    <li>Platforme Sociale</li>
                </ul>
                <a href="https://csvictoriamm.ro/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-4 py-2 text-white transition-colors duration-300 bg-emerald-500 hover:bg-emerald-600">
                    Vizitează Site-ul
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </a>
            </div>
            
            <!-- Ioana Mihalca Details -->
            <div x-show="selectedItem === 'ioana-mihalca'">
                <h2 class="mb-4 text-2xl font-bold">Ioana Mihalca</h2>
                <img src="/assets/ioanamihalca.ro.jpg" alt="Site-ul Ioanei Mihalca" class="w-full mb-4 rounded-lg">
                <p class="mb-4">Am creat un site de prezentare și blog pentru Ioana Mihalca, jurnalistă și moderatoare de emisiuni și evenimente.</p>
                <ul class="mb-4 ml-6 list-disc">
                    <li>Dezvoltat în WordPress</li>
                    <li>Design Profesional</li>
                    <li>Funcționalități de Blog</li>
                    <li>Prezentare Profesională</li>
                    <li>Gestionare Ușoară a Conținutului</li>
                    <li>Flexibilitate pentru Actualizări</li>
                </ul>
                <a href="https://ioanamihalca.ro/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-4 py-2 text-white transition-colors duration-300 bg-emerald-500 hover:bg-emerald-600">
                    Vizitează Site-ul
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </a>
            </div>
            
            <!-- Truland Details -->
            <div x-show="selectedItem === 'truland'">
                <h2 class="mb-4 text-2xl font-bold">Truland Magazin Online</h2>
                <img src="/assets/truland.jpg" alt="Truland Magazin Online" class="w-full mb-4 rounded-lg">
                <p class="mb-4">Truland este un magazin online specializat în încălțăminte de calitate, oferind o gamă variată de pantofi, mocasini, ghete și sandale pentru femei.</p>
                <ul class="mb-4 ml-6 list-disc">
                    <li>Platformă Prestashop</li>
                    <li>Design Modern</li>
                    <li>Navigare Ușoară</li>
                    <li>Experiență de Cumpărături Optimizată</li>
                    <li>Produse din Piele Naturală</li>
                    <li>Interfață Intuitivă</li>
                </ul>
                <a href="https://truland.ro" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-4 py-2 text-white transition-colors duration-300 bg-emerald-500 hover:bg-emerald-600">
                     Vizitează Site-ul
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
                    {{-- <div class="hidden text-3xl text-center text-emerald-500 mt-14 hover:text-emerald-400 animate-bounce">
                    <a href="#multimedia">
                        <i class="fa fa-angle-down"></i>
                    </a>
                </div> --}}
</div>
</div>



<div id="multimedia" class="flex items-center justify-center min-h-screen bg-gradient-to-t from-gray-500 to-white">
 <div class="container max-w-5xl px-2 mx-auto">
    <h2 class="my-12 text-xl font-bold text-center text-black uppercase font-roboto-condensed md:text-3xl">
        Multimedia
    </h2>
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
        <!-- Podcast Morosenesc -->
         <div x-data="{ open: false }" 
         class="max-w-md mx-auto overflow-hidden transition-all duration-300 bg-white border-t border-b shadow-lg border-emerald-500 rounded-xl hover:shadow-xl">
        <div class="relative group" 
             :class="{ 'group-hover': open }">
            <img src="/assets/podcast-morosenesc.webp" 
                 alt="Productie Podcast Morosenesc cu Ioana Mihalca" 
                 class="object-cover w-full h-auto transition duration-300 ease-in-out"
                 :class="{ 'opacity-75': open }">
            <div class="absolute inset-0 flex items-end justify-start p-6 transition-opacity duration-300 bg-gradient-to-b from-transparent to-black"
                 :class="{ 'opacity-100': open, 'opacity-0': !open }">
                <h3 class="text-2xl font-bold text-white transition-transform duration-300 transform"
                    :class="{ 'translate-y-0': open, 'translate-y-2': !open }">
                    Podcast Morosenesc
                </h3>
            </div>
        </div>
        <div class="p-6">
            <button @click="open = !open" class="flex items-center justify-between w-full text-left focus:outline-none">
                <h3 class="text-xl font-semibold text-gray-900">Podcast Morosenesc</h3>
                <svg :class="{ 'rotate-180': open }" class="w-5 h-5 transition-transform duration-300 transform text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div x-show="open" 
                 x-transition:enter="transition ease-out duration-300" 
                 x-transition:enter-start="opacity-0 transform scale-95" 
                 x-transition:enter-end="opacity-100 transform scale-100" 
                 x-transition:leave="transition ease-in duration-200" 
                 x-transition:leave-start="opacity-100 transform scale-100" 
                 x-transition:leave-end="opacity-0 transform scale-95" 
                 class="mt-4">
                <p class="mb-4 leading-relaxed text-gray-700">
                    "Podcast Morosenesc cu Ioana Mihalca" este un proiect de succes dedicat explorării povestirilor autentice și discuțiilor captivante. Acest podcast aduce în fața ascultătorilor povești de viață inspiraționale și conversații profunde cu personalități remarcabile din diverse domenii.
                </p>
                <ul class="mb-4 ml-6 list-disc">
                    <li>Înregistrare și Editare de înaltă calitate</li>
                    <li>Distribuție și Promovare eficientă</li>
                    <li>Disponibil pe principalele platforme de podcasting</li>
                </ul>
                <a href="https://www.youtube.com/@IoanaMihalca" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-4 py-2 text-white transition-colors duration-300 rounded-lg bg-emerald-500 hover:bg-emerald-600">
                    Vizionează pe YouTube
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

        <!-- Click Music YouTube -->
         <div x-data="{ open: false }" 
         class="max-w-md mx-auto overflow-hidden transition-all duration-300 bg-white border-t border-b shadow-lg border-emerald-500 rounded-xl hover:shadow-xl">
        <div class="relative group" 
             :class="{ 'group-hover': open }">
            <img src="/assets/clickmusicyt.jpg" 
                 alt="Click Music canal youtube" 
                 class="object-cover w-full h-auto transition duration-300 ease-in-out"
                 :class="{ 'opacity-75': open }">
            <div class="absolute inset-0 flex items-end justify-start p-6 transition-opacity duration-300 bg-gradient-to-b from-transparent to-black"
                 :class="{ 'opacity-100': open, 'opacity-0': !open }">
                <h3 class="text-2xl font-bold text-white transition-transform duration-300 transform"
                    :class="{ 'translate-y-0': open, 'translate-y-2': !open }">
                    Click Music YouTube
                </h3>
            </div>
        </div>
        <div class="p-6">
            <button @click="open = !open" class="flex items-center justify-between w-full text-left focus:outline-none">
                <h3 class="text-xl font-semibold text-gray-900">Click Music YouTube</h3>
                <svg :class="{ 'rotate-180': open }" class="w-5 h-5 transition-transform duration-300 transform text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div x-show="open" 
                 x-transition:enter="transition ease-out duration-300" 
                 x-transition:enter-start="opacity-0 transform scale-95" 
                 x-transition:enter-end="opacity-100 transform scale-100" 
                 x-transition:leave="transition ease-in duration-200" 
                 x-transition:leave-start="opacity-100 transform scale-100" 
                 x-transition:leave-end="opacity-0 transform scale-95" 
                 class="mt-4">
                <p class="mb-4 leading-relaxed text-gray-700">
                    Click Music Romania reprezintă o parte importantă a activității noastre în domeniul producției muzicale și al conținutului video. Prin acest canal YouTube, ne-am propus să creăm conținut de calitate pentru iubitorii de muzică.
                </p>
                <p class="mb-4 leading-relaxed text-gray-700">
                    De-a lungul timpului, am avut plăcerea să vedem cum comunitatea noastră a crescut, ajungând la peste 50 de milioane de vizualizări. Această cifră reflectă interesul publicului pentru conținutul nostru și ne motivează să continuăm să îmbunătățim calitatea producțiilor noastre.
                </p>
                <a href="https://www.youtube.com/@clickmusicromania" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-4 py-2 text-white transition-colors duration-300 rounded-lg bg-emerald-500 hover:bg-emerald-600">
                    Explorează Canalul Nostru
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

</div>
 