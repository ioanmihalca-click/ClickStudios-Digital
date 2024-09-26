 <!--Portofolio-->

        <section id="portofoliu" class="py-12 text-center ">

            <div class="relative h-screen bg-fixed bg-center bg-cover"
                style="background-image: url('assets/portofoliu.webp')">
                <div class="absolute inset-0 bg-black/50"></div>
                <div class="relative z-10 flex flex-col items-center justify-center h-full">
                    <h2
                        class="font-roboto-condensed uppercase mb-10 md:mb-14 tracking-[6px] md:tracking-[24px] font-normal text-3xl md:text-5xl leading-relaxed md:leading-normal text-white">
                        Portofoliu</h2>
                    <div class="max-w-2xl mx-auto">
                        <p class="mb-16 text-lg tracking-wide text-center text-white font-volkov">"Singurul mod de a
                            face un lucru bine este să fii pasionat."</p>
                    </div>
                </div>
            </div>



            <div class="container mx-auto mt-8">

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">

                    <!-- Portfolio Item Click Music App - Modern Version -->
                    <div x-data="{ open: false }"
                        class="overflow-hidden transition-all duration-300 bg-white shadow-lg rounded-xl hover:shadow-xl">
                        <div class="relative group">
                            <img src="/assets/ClickMusic-OG-Site.jpg" alt="Click Music Streaming App"
                                class="object-cover w-full h-full transition duration-300 ease-in-out group-hover:opacity-75">
                            <div
                                class="absolute inset-0 flex items-end justify-start p-6 transition-opacity duration-300 opacity-0 bg-gradient-to-b from-transparent to-black group-hover:opacity-100">
                                <h3
                                    class="text-2xl font-bold text-white transition-transform duration-300 transform translate-y-2 group-hover:translate-y-0">
                                    Click Music RO</h3>
                            </div>
                        </div>
                        <div class="p-6">
                            <button @click="open = !open"
                                class="flex items-center justify-between w-full text-left focus:outline-none">
                                <h3 class="text-xl font-semibold text-gray-900">Click Music RO</h3>
                                <svg :class="{ 'rotate-180': open }"
                                    class="w-5 h-5 text-blue-500 transition-transform duration-300 transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 transform scale-95"
                                x-transition:enter-end="opacity-100 transform scale-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100 transform scale-100"
                                x-transition:leave-end="opacity-0 transform scale-95" class="mt-4">
                                <a href="https://clickmusic.ro" target="_blank" rel="noopener noreferrer"
                                    class="hover:no-underline">
                                    <p class="mb-4 leading-relaxed text-gray-700">
                                        Clickmusic.ro este rezultatul eforturilor noastre constante de a crea soluții
                                        digitale de înaltă calitate, îmbunătățind experiența utilizatorilor în domeniul
                                        streaming-ului muzical. Dezvoltată folosind tehnologiile TALL Stack, această
                                        aplicație web oferă o experiență de streaming captivantă și ușor de folosit.
                                    </p>
                                    <div class="p-4 mb-4 bg-gray-100 rounded-lg">
                                        {{-- <h4 class="mb-2 text-lg font-semibold text-gray-900">Caracteristici Cheie:</h4> --}}
                                        <ul class="grid grid-cols-2 gap-2">
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Sistem de Autentificare
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Bază de Date Avansată
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Notificări Mail și Database
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Secțiune de Comentarii
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Streaming cu CDN
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Blog Integrat
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Sistem de Plată cu Stripe
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Panou de control
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="leading-relaxed text-gray-700">
                                        Click Music Streaming App este un exemplu al angajamentului nostru față de
                                        excelență și inovație în dezvoltarea soluțiilor digitale, aducând muzica mai
                                        aproape de publicul său într-un mod interactiv și captivant.
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://clickmusic.ro" target="_blank" rel="noopener noreferrer"
                                            class="inline-flex items-center px-4 py-2 text-white transition-colors duration-300 bg-blue-600 rounded-lg hover:bg-blue-700">
                                            Vizitează Site-ul
                                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>


                    <!-- Item de Portofoliu InstaCapture - Versiune Modernă -->
                    <div x-data="{ open: false }"
                        class="overflow-hidden transition-all duration-300 bg-white shadow-lg rounded-xl hover:shadow-xl">
                        <div class="relative group">
                            <img src="/assets/OG-instacapture.jpg"
                                alt="Aplicație de Fotografie Profesională InstaCapture"
                                class="object-cover w-full h-full transition duration-300 ease-in-out group-hover:opacity-75">
                            <div
                                class="absolute inset-0 flex items-end justify-start p-6 transition-opacity duration-300 opacity-0 bg-gradient-to-b from-transparent to-black group-hover:opacity-100">
                                <h3
                                    class="text-2xl font-bold text-white transition-transform duration-300 transform translate-y-2 group-hover:translate-y-0">
                                    InstaCapture</h3>
                            </div>
                        </div>
                        <div class="p-6">
                            <button @click="open = !open"
                                class="flex items-center justify-between w-full text-left focus:outline-none">
                                <h3 class="text-xl font-semibold text-gray-900">InstaCapture</h3>
                                <svg :class="{ 'rotate-180': open }"
                                    class="w-5 h-5 text-blue-500 transition-transform duration-300 transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 transform scale-95"
                                x-transition:enter-end="opacity-100 transform scale-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100 transform scale-100"
                                x-transition:leave-end="opacity-0 transform scale-95" class="mt-4">
                                <a href="https://instacapture.ro" target="_blank" rel="noopener noreferrer"
                                    class="hover:no-underline">
                                    <p class="mb-4 leading-relaxed text-gray-700">
                                        InstaCapture.ro este o aplicație web inovatoare dezvoltată de agenția noastră
                                        pentru firma de fotografie profesională InstaCapture din Cluj-Napoca.
                                    </p>
                                    <div class="p-4 mb-4 bg-gray-100 rounded-lg">
                                        <ul class="grid grid-cols-2 gap-2">
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Dezvoltată în Laravel
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Panou de Control
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Integrare CDN prin API
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Performanță Ridicată
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Design Modern
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Încărcare Rapidă a Pozelor
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="leading-relaxed text-gray-700">
                                        Aplicația InstaCapture oferă o soluție eficientă pentru gestionarea și
                                        prezentarea portofoliului de fotografie, combinând un design modern cu
                                        funcționalități avansate. Platforma noastră demonstrează capacitatea agenției de
                                        a crea soluții web personalizate, rapide și ușor de utilizat, adaptate nevoilor
                                        specifice ale clienților noștri din industria creativă.
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://instacapture.ro" target="_blank" rel="noopener noreferrer"
                                            class="inline-flex items-center px-4 py-2 text-white transition-colors duration-300 bg-blue-600 rounded-lg hover:bg-blue-700">
                                            Vizitează Site-ul
                                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>


                    <!-- Portfolio Item Snow 'n' Stuff - Modern Version -->
                    <div x-data="{ open: false }"
                        class="overflow-hidden transition-all duration-300 bg-white shadow-lg rounded-xl hover:shadow-xl">
                        <div class="relative group">
                            <img src="/assets/OG-SnownStuff.jpg" alt="Website Prezentare Snow 'n' Stuff"
                                class="object-cover w-full h-full transition duration-300 ease-in-out group-hover:opacity-75">
                            <div
                                class="absolute inset-0 flex items-end justify-start p-6 transition-opacity duration-300 opacity-0 bg-gradient-to-b from-transparent to-black group-hover:opacity-100">
                                <h3
                                    class="text-2xl font-bold text-white transition-transform duration-300 transform translate-y-2 group-hover:translate-y-0">
                                    Snow 'n' Stuff</h3>
                            </div>
                        </div>
                        <div class="p-6">
                            <button @click="open = !open"
                                class="flex items-center justify-between w-full text-left focus:outline-none">
                                <h3 class="text-xl font-semibold text-gray-900">Snow 'n' Stuff</h3>
                                <svg :class="{ 'rotate-180': open }"
                                    class="w-5 h-5 text-blue-500 transition-transform duration-300 transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 transform scale-95"
                                x-transition:enter-end="opacity-100 transform scale-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100 transform scale-100"
                                x-transition:leave-end="opacity-0 transform scale-95" class="mt-4">
                                <a href="https://www.snow-n-stuff.com/" target="_blank" rel="noopener noreferrer"
                                    class="hover:no-underline">
                                    <p class="mb-4 leading-relaxed text-gray-700">
                                        Snow 'n' Stuff este un label muzical internațional de top, specializat în
                                        genurile Tech House, Deep House, House și Techno. Pentru a reflecta
                                        profesionalismul și calitatea înaltă a acestui brand, am creat un website de
                                        prezentare captivant și modern.
                                    </p>
                                    <div class="p-4 mb-4 bg-gray-100 rounded-lg">
                                        {{-- <h4 class="mb-2 text-lg font-semibold text-gray-900">Caracteristici Cheie:</h4> --}}
                                        <ul class="grid grid-cols-2 gap-2">
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Dezvoltat în Laravel
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Design Modern
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Blog Integrat
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Prezentare Artiști
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Piese Muzicale și Playlisturi
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Panou de Control Personalizat
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Optimizare SEO
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="leading-relaxed text-gray-700">
                                        Prin intermediul acestui website de prezentare, am reușit să promovăm eficient
                                        brandul Snow 'n' Stuff și să oferim o experiență digitală de top pentru fanii
                                        muzicii electronice din întreaga lume. Optimizarea SEO a asigurat, de asemenea,
                                        vizibilitatea organică și accesibilitatea către publicul țintă, facilitând
                                        astfel creșterea și dezvoltarea continuă a labelului.
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://snow-n-stuff.com/" target="_blank" rel="noopener noreferrer"
                                            class="inline-flex items-center px-4 py-2 text-white transition-colors duration-300 bg-blue-600 rounded-lg hover:bg-blue-700">
                                            Vizitează Site-ul
                                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>


                    <!-- Portfolio Item Ioana Mihalca - Modern Version -->
                    <div x-data="{ open: false }"
                        class="overflow-hidden transition-all duration-300 bg-white shadow-lg rounded-xl hover:shadow-xl">
                        <div class="relative group">
                            <img src="/assets/ioanamihalca.ro.jpg" alt="Site-ul Ioanei Mihalca"
                                class="object-cover w-full h-full transition duration-300 ease-in-out group-hover:opacity-75">
                            <div
                                class="absolute inset-0 flex items-end justify-start p-6 transition-opacity duration-300 opacity-0 bg-gradient-to-b from-transparent to-black group-hover:opacity-100">
                                <h3
                                    class="text-2xl font-bold text-white transition-transform duration-300 transform translate-y-2 group-hover:translate-y-0">
                                    Ioana Mihalca</h3>
                            </div>
                        </div>
                        <div class="p-6">
                            <button @click="open = !open"
                                class="flex items-center justify-between w-full text-left focus:outline-none">
                                <h3 class="text-xl font-semibold text-gray-900">Ioana Mihalca</h3>
                                <svg :class="{ 'rotate-180': open }"
                                    class="w-5 h-5 text-blue-500 transition-transform duration-300 transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 transform scale-95"
                                x-transition:enter-end="opacity-100 transform scale-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100 transform scale-100"
                                x-transition:leave-end="opacity-0 transform scale-95" class="mt-4">
                                <a href="https://ioanamihalca.ro/" target="_blank" rel="noopener noreferrer"
                                    class="hover:no-underline">
                                    <p class="mb-4 leading-relaxed text-gray-700">
                                        Am creat un site de prezentare și blog pentru Ioana Mihalca, jurnalistă și
                                        moderatoare de emisiuni și evenimente. Proiectul a fost dezvoltat în WordPress,
                                        oferind o platformă robustă și flexibilă pentru gestionarea conținutului și
                                        interacțiunea cu publicul.
                                    </p>
                                    <div class="p-4 mb-4 bg-gray-100 rounded-lg">
                                        {{-- <h4 class="mb-2 text-lg font-semibold text-gray-900">Caracteristici Cheie:</h4> --}}
                                        <ul class="grid grid-cols-2 gap-2">
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Dezvoltat în WordPress
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Design Profesional
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Funcționalități de Blog
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Prezentare Profesională
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Gestionare Ușoară a Conținutului
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Flexibilitate pentru Actualizări
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="leading-relaxed text-gray-700">
                                        Site-ul îmbină elementele de prezentare profesională cu funcționalitățile unui
                                        blog, permițând Ioanei să-și împărtășească experiențele, opiniile și realizările
                                        într-un mod dinamic și atractiv. Acest proiect a oferit Ioanei Mihalca o
                                        platformă digitală puternică pentru a-și consolida prezența online, a
                                        interacționa cu publicul său și a-și prezenta activitatea profesională într-un
                                        mod elegant și eficient.
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://ioanamihalca.ro/" target="_blank" rel="noopener noreferrer"
                                            class="inline-flex items-center px-4 py-2 text-white transition-colors duration-300 bg-blue-600 rounded-lg hover:bg-blue-700">
                                            Vizitează Site-ul
                                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Item Branding CS Victoria MM - Modern Version -->
                    <div x-data="{ open: false }"
                        class="overflow-hidden transition-all duration-300 bg-white shadow-lg rounded-xl hover:shadow-xl">
                        <div class="relative group">
                            <img src="/assets/victoria-maramures.jpg" alt="Branding Club Sportiv Victoria Maramureș"
                                class="object-cover w-full h-full transition duration-300 ease-in-out group-hover:opacity-75">
                            <div
                                class="absolute inset-0 flex items-end justify-start p-6 transition-opacity duration-300 opacity-0 bg-gradient-to-b from-transparent to-black group-hover:opacity-100">
                                <h3
                                    class="text-2xl font-bold text-white transition-transform duration-300 transform translate-y-2 group-hover:translate-y-0">
                                    CS Victoria MM</h3>
                            </div>
                        </div>
                        <div class="p-6">
                            <button @click="open = !open"
                                class="flex items-center justify-between w-full text-left focus:outline-none">
                                <h3 class="text-xl font-semibold text-gray-900">CS Victoria MM</h3>
                                <svg :class="{ 'rotate-180': open }"
                                    class="w-5 h-5 text-blue-500 transition-transform duration-300 transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 transform scale-95"
                                x-transition:enter-end="opacity-100 transform scale-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100 transform scale-100"
                                x-transition:leave-end="opacity-0 transform scale-95" class="mt-4">
                                <a href="https://csvictoriamm.ro/" target="_blank" rel="noopener noreferrer"
                                    class="hover:no-underline">
                                    <p class="mb-4 leading-relaxed text-gray-700">
                                        Proiectul de branding pentru Clubul Sportiv Victoria Maramureș este o călătorie
                                        fascinantă în definirea și exprimarea identității acestuia în mediul online și
                                        offline. Andreea a dezvoltat un logo unic și memorabil care să reprezinte
                                        valorile și pasiunea clubului pentru sport, îmbinând tradiția cu modernitatea.
                                    </p>
                                    <p class="mb-4 leading-relaxed text-gray-700">
                                        Pe lângă crearea identității vizuale, am dezvoltat și un website atractiv și
                                        ușor de navigat, precum și conținut video captivant pentru platformele sociale
                                        ale clubului, inclusiv reeluri pe Instagram și videoclipuri pe YouTube.
                                    </p>
                                    <div class="p-4 mb-4 bg-gray-100 rounded-lg">
                                        {{-- <h4 class="mb-2 text-lg font-semibold text-gray-900">Caracteristici Cheie:</h4> --}}
                                        <ul class="grid grid-cols-2 gap-2">
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Creare Identitate Vizuală
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Logo Unic și Memorabil
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Website Atractiv
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Conținut Video Captivant
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Optimizare SEO
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Gestionare Platforme Sociale
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="leading-relaxed text-gray-700">
                                        Proiectul de branding pentru Clubul Sportiv Victoria Maramureș a fost o
                                        inițiativă care a contribuit semnificativ la consolidarea prezenței și
                                        notorietății clubului în mediul online. Optimizarea SEO a asigurat, de asemenea,
                                        vizibilitatea organică și accesibilitatea către publicul țintă, facilitând
                                        astfel creșterea și dezvoltarea continuă a clubului.
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://csvictoriamm.ro/" target="_blank" rel="noopener noreferrer"
                                            class="inline-flex items-center px-4 py-2 text-white transition-colors duration-300 bg-blue-600 rounded-lg hover:bg-blue-700">
                                            Vizitează Site-ul
                                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Item Truland - Magazin Online de Încălțăminte - Modern Version -->
                    <div x-data="{ open: false }"
                        class="overflow-hidden transition-all duration-300 bg-white shadow-lg rounded-xl hover:shadow-xl">
                        <div class="relative group">
                            <img src="/assets/truland.jpg" alt="Truland Magazin Online"
                                class="object-cover w-full h-full transition duration-300 ease-in-out group-hover:opacity-75">
                            <div
                                class="absolute inset-0 flex items-end justify-start p-6 transition-opacity duration-300 opacity-0 bg-gradient-to-b from-transparent to-black group-hover:opacity-100">
                                <h3
                                    class="text-2xl font-bold text-white transition-transform duration-300 transform translate-y-2 group-hover:translate-y-0">
                                    Truland Magazin Online</h3>
                            </div>
                        </div>
                        <div class="p-6">
                            <button @click="open = !open"
                                class="flex items-center justify-between w-full text-left focus:outline-none">
                                <h3 class="text-xl font-semibold text-gray-900">Truland Magazin Online</h3>
                                <svg :class="{ 'rotate-180': open }"
                                    class="w-5 h-5 text-blue-500 transition-transform duration-300 transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 transform scale-95"
                                x-transition:enter-end="opacity-100 transform scale-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100 transform scale-100"
                                x-transition:leave-end="opacity-0 transform scale-95" class="mt-4">
                                <a href="https://truland.ro" target="_blank" rel="noopener noreferrer"
                                    class="hover:no-underline">
                                    <p class="mb-4 leading-relaxed text-gray-700">
                                        Truland este un magazin online specializat în încălțăminte de calitate, oferind
                                        o gamă variată de pantofi, mocasini, ghete și sandale pentru femei. Realizat pe
                                        o platforma Prestashop, Truland se evidențiază printr-un design modern, navigare
                                        ușoară și o experiență de cumpărături fără egal.
                                    </p>
                                    <div class="p-4 mb-4 bg-gray-100 rounded-lg">
                                        {{-- <h4 class="mb-2 text-lg font-semibold text-gray-900">Caracteristici Cheie:</h4> --}}
                                        <ul class="grid grid-cols-2 gap-2">
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Platformă Prestashop
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Design Modern
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Navigare Ușoară
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Experiență de Cumpărături Optimizată
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Produse din Piele Naturală
                                            </li>
                                            <li class="flex text-sm text-left text-gray-700">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Interfață Intuitivă
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="leading-relaxed text-gray-700">
                                        Platforma a fost optimizată pentru a oferi o experiență intuitivă și plăcută
                                        utilizatorilor, punând în valoare produsele din piele naturală și confortul
                                        oferit de acestea. Truland reprezintă o soluție completă pentru comerțul
                                        electronic în domeniul încălțămintei, oferind clienților o experiență de
                                        shopping online de înaltă calitate.
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://truland.ro" target="_blank" rel="noopener noreferrer"
                                            class="inline-flex items-center px-4 py-2 text-white transition-colors duration-300 bg-blue-600 rounded-lg hover:bg-blue-700">
                                            Vizitează Site-ul
                                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>


                    <!-- Portfolio Item Podcast Morosenesc - Modern Version -->
                    <div x-data="{ open: false }"
                        class="overflow-hidden transition-all duration-300 bg-white shadow-lg rounded-xl hover:shadow-xl">
                        <div class="relative group">
                            <img src="/assets/podcastmorosenesc.jpg"
                                alt="Productie Podcast Morosenesc cu Ioana Mihalca"
                                class="object-cover w-full h-full transition duration-300 ease-in-out group-hover:opacity-75">
                            <div
                                class="absolute inset-0 flex items-end justify-start p-6 transition-opacity duration-300 opacity-0 bg-gradient-to-b from-transparent to-black group-hover:opacity-100">
                                <h3
                                    class="text-2xl font-bold text-white transition-transform duration-300 transform translate-y-2 group-hover:translate-y-0">
                                    Podcast Morosenesc</h3>
                            </div>
                        </div>
                        <div class="p-6">
                            <button @click="open = !open"
                                class="flex items-center justify-between w-full text-left focus:outline-none">
                                <h3 class="text-xl font-semibold text-gray-900">Podcast Morosenesc</h3>
                                <svg :class="{ 'rotate-180': open }"
                                    class="w-5 h-5 text-blue-500 transition-transform duration-300 transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 transform scale-95"
                                x-transition:enter-end="opacity-100 transform scale-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100 transform scale-100"
                                x-transition:leave-end="opacity-0 transform scale-95" class="mt-4">
                                <a href="https://www.youtube.com/@IoanaMihalca" target="_blank"
                                    rel="noopener noreferrer" class="hover:no-underline">
                                    <p class="mb-4 leading-relaxed text-gray-700">
                                        "Podcast Morosenesc cu Ioana Mihalca" este un proiect de succes dedicat
                                        explorării povestirilor autentice și discuțiilor captivante. Acest podcast aduce
                                        în fața ascultătorilor povești de viață inspiraționale și conversații profunde
                                        cu personalități remarcabile din diverse domenii.
                                    </p>
                                    <div class="p-4 mb-4 bg-gray-100 rounded-lg">
                                        {{-- <h4 class="mb-2 text-lg font-semibold text-gray-900">Caracteristici Cheie:</h4> --}}
                                        <ul class="space-y-2">
                                            <li class="flex items-start">
                                                <svg class="w-5 h-5 mr-2 text-green-500 shrink-0" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                <span class="text-sm text-gray-700"><strong>Înregistrare și
                                                        Editare:</strong> Utilizarea echipamentelor de ultimă generație
                                                    pentru a asigura o calitate impecabilă a sunetului și o editare
                                                    profesionistă.</span>
                                            </li>
                                            <li class="flex items-start">
                                                <svg class="w-5 h-5 mr-2 text-green-500 shrink-0" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                <span class="text-sm text-gray-700"><strong>Distribuție și
                                                        Promovare:</strong> Implementarea unei strategii de marketing
                                                    digital pentru a maximiza audiența și impactul podcastului.
                                                    Disponibil pe principalele platforme de podcasting (Spotify, Apple
                                                    Podcasts, Google Podcasts).</span>
                                            </li>

                                        </ul>
                                    </div>
                                    <h4 class="mb-2 text-lg font-semibold text-gray-900">Servicii de productie audio
                                        si editare video:</h4>
                                    <p class="leading-relaxed text-gray-700">
                                        "Podcast Morosenesc cu Ioana Mihalca" a contribuit la consolidarea brandului
                                        Click Studios, demonstrând capacitatea noastră de a crea conținut de calitate și
                                        de a gestiona proiecte media complexe.
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://www.youtube.com/@IoanaMihalca" target="_blank"
                                            rel="noopener noreferrer"
                                            class="inline-flex items-center px-4 py-2 text-white transition-colors duration-300 bg-blue-600 rounded-lg hover:bg-blue-700">
                                            Vizionează pe YouTube
                                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>


                    <!-- Portfolio Item Click Music YouTube - Revised Version -->
                    <div x-data="{ open: false }"
                        class="overflow-hidden transition-all duration-300 bg-white shadow-lg rounded-xl hover:shadow-xl">
                        <div class="relative group">
                            <img src="/assets/clickmusicyt.jpg" alt="Click Music canal youtube"
                                class="object-cover w-full h-full transition duration-300 ease-in-out group-hover:opacity-75">
                            <div
                                class="absolute inset-0 flex items-end justify-start p-6 transition-opacity duration-300 opacity-0 bg-gradient-to-b from-transparent to-black group-hover:opacity-100">
                                <h3
                                    class="text-2xl font-bold text-white transition-transform duration-300 transform translate-y-2 group-hover:translate-y-0">
                                    Click Music YouTube</h3>
                            </div>
                        </div>
                        <div class="p-6">
                            <button @click="open = !open"
                                class="flex items-center justify-between w-full text-left focus:outline-none">
                                <h3 class="text-xl font-semibold text-gray-900">Click Music YouTube</h3>
                                <svg :class="{ 'rotate-180': open }"
                                    class="w-5 h-5 text-blue-500 transition-transform duration-300 transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 transform scale-95"
                                x-transition:enter-end="opacity-100 transform scale-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100 transform scale-100"
                                x-transition:leave-end="opacity-0 transform scale-95" class="mt-4">
                                <a href="https://www.youtube.com/@clickmusicromania" target="_blank"
                                    rel="noopener noreferrer" class="hover:no-underline">
                                    <p class="mb-4 leading-relaxed text-gray-700">
                                        Click Music Romania reprezintă o parte importantă a activității noastre în
                                        domeniul producției muzicale și al conținutului video. Prin acest canal YouTube,
                                        ne-am propus să creăm conținut de calitate pentru iubitorii de muzică.
                                    </p>

                                    <p class="leading-relaxed text-gray-700">
                                        De-a lungul timpului, am avut plăcerea să vedem cum comunitatea noastră a
                                        crescut, ajungând la peste 50 de milioane de vizualizări. Această cifră reflectă
                                        interesul publicului pentru conținutul nostru și ne motivează să continuăm să
                                        îmbunătățim calitatea producțiilor noastre.
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://www.youtube.com/@clickmusicromania" target="_blank"
                                            rel="noopener noreferrer"
                                            class="inline-flex items-center px-4 py-2 text-white transition-colors duration-300 bg-blue-600 rounded-lg hover:bg-blue-700">
                                            Explorează Canalul Nostru
                                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>


                    <!--Alte itemuri-->
                </div>
            </div>
        </section>

        <!--Videouri scurte-->

        <div class="container mx-auto mt-8">
            <h3 class="mb-8 text-xl font-bold text-center text-black md:text-2xl">Reclame video scurte</h3>

            <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                <div class="mx-auto fb-video" data-href="https://www.facebook.com/reel/998070601980625"
                    data-width="300" data-show-text="false"></div>
                <div class="mx-auto fb-video" data-href="https://www.facebook.com/reel/1468041527410822"
                    data-width="300" data-show-text="false"></div>
            </div>
        </div>