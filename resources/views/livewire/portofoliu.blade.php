<div class="relative min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-emerald-900">
    <div class="absolute inset-0 opacity-20">
        <div id="tsparticles"></div>
    </div>
    
    <div class="container relative z-10 px-4 py-24 mx-auto">
        <div class="mb-16 text-center">
            <h2 class="mb-6 text-4xl tracking-wider text-white transition-transform duration-300 transform font-roboto-condensed md:text-6xl hover:scale-105">
                Portofoliu
            </h2>
            <p class="max-w-2xl mx-auto text-lg italic font-light text-emerald-300 md:text-xl">
                "Singurul mod de a face un lucru bine este să fii pasionat."
            </p>
        </div>

        <div x-data="{ selectedItem: null, hoverItem: null, mouseX: 0, mouseY: 0 }" 
             @mousemove="mouseX = $event.clientX; mouseY = $event.clientY"
             class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            
            <!-- AIpofta -->
            <div @click="selectedItem = 'aipofta'"
                @mouseenter="hoverItem = 'aipofta'"
                @mouseleave="hoverItem = null"
                class="relative overflow-hidden transition-all duration-500 border cursor-pointer group rounded-2xl bg-white/5 backdrop-blur-sm border-white/10 hover:border-emerald-500/50">
                <div class="flex flex-col h-full p-6">
                    <div class="absolute inset-0 transition-opacity duration-500 opacity-0 bg-gradient-to-br from-emerald-500/0 via-transparent to-emerald-500/0 group-hover:opacity-20"></div>
                    <h3 class="mb-3 text-2xl font-bold text-white transition-colors duration-300 group-hover:text-emerald-400">
                        AIpofta
                    </h3>
                    <p class="mb-4 text-gray-300 transition-colors duration-300 group-hover:text-white">
                       Platformă AI pentru retete culinare personalizate
                    </p>
                    <div class="mt-auto">
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs border rounded-full bg-emerald-900/50 text-emerald-300 border-emerald-500/20">
                                Laravel
                            </span>
                            <span class="px-3 py-1 text-xs border rounded-full bg-emerald-900/50 text-emerald-300 border-emerald-500/20">
                                AI Integration
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Povestitorul Magic -->
            <div @click="selectedItem = 'povestitorul-magic'"
                @mouseenter="hoverItem = 'povestitorul-magic'"
                @mouseleave="hoverItem = null"
                class="relative overflow-hidden transition-all duration-500 border cursor-pointer group rounded-2xl bg-white/5 backdrop-blur-sm border-white/10 hover:border-emerald-500/50">
                <div class="flex flex-col h-full p-6">
                    <div class="absolute inset-0 transition-opacity duration-500 opacity-0 bg-gradient-to-br from-emerald-500/0 via-transparent to-emerald-500/0 group-hover:opacity-20"></div>
                    <h3 class="mb-3 text-2xl font-bold text-white transition-colors duration-300 group-hover:text-emerald-400">
                        Povestitorul Magic
                    </h3>
                    <p class="mb-4 text-gray-300 transition-colors duration-300 group-hover:text-white">
                        Platformă AI pentru povești interactive
                    </p>
                    <div class="mt-auto">
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs border rounded-full bg-emerald-900/50 text-emerald-300 border-emerald-500/20">
                                Laravel
                            </span>
                            <span class="px-3 py-1 text-xs border rounded-full bg-emerald-900/50 text-emerald-300 border-emerald-500/20">
                                AI Integration
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Click Music App -->
            <div @click="selectedItem = 'click-music'"
                @mouseenter="hoverItem = 'click-music'"
                @mouseleave="hoverItem = null"
                class="relative overflow-hidden transition-all duration-500 border cursor-pointer group rounded-2xl bg-white/5 backdrop-blur-sm border-white/10 hover:border-emerald-500/50">
                <div class="flex flex-col h-full p-6">
                    <div class="absolute inset-0 transition-opacity duration-500 opacity-0 bg-gradient-to-br from-emerald-500/0 via-transparent to-emerald-500/0 group-hover:opacity-20"></div>
                    <h3 class="mb-3 text-2xl font-bold text-white transition-colors duration-300 group-hover:text-emerald-400">
                        Click Music RO
                    </h3>
                    <p class="mb-4 text-gray-300 transition-colors duration-300 group-hover:text-white">
                        Platformă de streaming muzical
                    </p>
                    <div class="mt-auto">
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs border rounded-full bg-emerald-900/50 text-emerald-300 border-emerald-500/20">
                                Streaming
                            </span>
                            <span class="px-3 py-1 text-xs border rounded-full bg-emerald-900/50 text-emerald-300 border-emerald-500/20">
                                CDN
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- InstaCapture -->
            <div @click="selectedItem = 'instacapture'"
                @mouseenter="hoverItem = 'instacapture'"
                @mouseleave="hoverItem = null"
                class="relative overflow-hidden transition-all duration-500 border cursor-pointer group rounded-2xl bg-white/5 backdrop-blur-sm border-white/10 hover:border-emerald-500/50">
                <div class="flex flex-col h-full p-6">
                    <div class="absolute inset-0 transition-opacity duration-500 opacity-0 bg-gradient-to-br from-emerald-500/0 via-transparent to-emerald-500/0 group-hover:opacity-20"></div>
                    <h3 class="mb-3 text-2xl font-bold text-white transition-colors duration-300 group-hover:text-emerald-400">
                        InstaCapture
                    </h3>
                    <p class="mb-4 text-gray-300 transition-colors duration-300 group-hover:text-white">
                        Aplicație web fotografie profesională
                    </p>
                    <div class="mt-auto">
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs border rounded-full bg-emerald-900/50 text-emerald-300 border-emerald-500/20">
                                Laravel
                            </span>
                            <span class="px-3 py-1 text-xs border rounded-full bg-emerald-900/50 text-emerald-300 border-emerald-500/20">
                                CDN
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Snow 'n' Stuff -->
            <div @click="selectedItem = 'snow-n-stuff'"
                @mouseenter="hoverItem = 'snow-n-stuff'"
                @mouseleave="hoverItem = null"
                class="relative overflow-hidden transition-all duration-500 border cursor-pointer group rounded-2xl bg-white/5 backdrop-blur-sm border-white/10 hover:border-emerald-500/50">
                <div class="flex flex-col h-full p-6">
                    <div class="absolute inset-0 transition-opacity duration-500 opacity-0 bg-gradient-to-br from-emerald-500/0 via-transparent to-emerald-500/0 group-hover:opacity-20"></div>
                    <h3 class="mb-3 text-2xl font-bold text-white transition-colors duration-300 group-hover:text-emerald-400">
                        Snow 'n' Stuff
                    </h3>
                    <p class="mb-4 text-gray-300 transition-colors duration-300 group-hover:text-white">
                        Label muzical internațional de top
                    </p>
                    <div class="mt-auto">
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs border rounded-full bg-emerald-900/50 text-emerald-300 border-emerald-500/20">
                                Laravel
                            </span>
                            <span class="px-3 py-1 text-xs border rounded-full bg-emerald-900/50 text-emerald-300 border-emerald-500/20">
                                Music
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CS Victoria MM -->
            <div @click="selectedItem = 'cs-victoria-mm'"
                @mouseenter="hoverItem = 'cs-victoria-mm'"
                @mouseleave="hoverItem = null"
                class="relative overflow-hidden transition-all duration-500 border cursor-pointer group rounded-2xl bg-white/5 backdrop-blur-sm border-white/10 hover:border-emerald-500/50">
                <div class="flex flex-col h-full p-6">
                    <div class="absolute inset-0 transition-opacity duration-500 opacity-0 bg-gradient-to-br from-emerald-500/0 via-transparent to-emerald-500/0 group-hover:opacity-20"></div>
                    <h3 class="mb-3 text-2xl font-bold text-white transition-colors duration-300 group-hover:text-emerald-400">
                        CS Victoria MM
                    </h3>
                    <p class="mb-4 text-gray-300 transition-colors duration-300 group-hover:text-white">
                        Pagină de prezentare club sportiv
                    </p>
                    <div class="mt-auto">
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs border rounded-full bg-emerald-900/50 text-emerald-300 border-emerald-500/20">
                                Laravel
                            </span>
                            <span class="px-3 py-1 text-xs border rounded-full bg-emerald-900/50 text-emerald-300 border-emerald-500/20">
                                Branding
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ioana Mihalca -->
            <div @click="selectedItem = 'ioana-mihalca'"
                @mouseenter="hoverItem = 'ioana-mihalca'"
                @mouseleave="hoverItem = null"
                class="relative overflow-hidden transition-all duration-500 border cursor-pointer group rounded-2xl bg-white/5 backdrop-blur-sm border-white/10 hover:border-emerald-500/50">
                <div class="flex flex-col h-full p-6">
                    <div class="absolute inset-0 transition-opacity duration-500 opacity-0 bg-gradient-to-br from-emerald-500/0 via-transparent to-emerald-500/0 group-hover:opacity-20"></div>
                    <h3 class="mb-3 text-2xl font-bold text-white transition-colors duration-300 group-hover:text-emerald-400">
                        Ioana Mihalca
                    </h3>
                    <p class="mb-4 text-gray-300 transition-colors duration-300 group-hover:text-white">
                        Blog de jurnalistă
                    </p>
                    <div class="mt-auto">
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs border rounded-full bg-emerald-900/50 text-emerald-300 border-emerald-500/20">
                                WordPress
                            </span>
                            <span class="px-3 py-1 text-xs border rounded-full bg-emerald-900/50 text-emerald-300 border-emerald-500/20">
                                Blog
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Truland -->
            <div @click="selectedItem = 'truland'"
                @mouseenter="hoverItem = 'truland'"
                @mouseleave="hoverItem = null"
                class="relative overflow-hidden transition-all duration-500 border cursor-pointer group rounded-2xl bg-white/5 backdrop-blur-sm border-white/10 hover:border-emerald-500/50">
                <div class="flex flex-col h-full p-6">
                    <div class="absolute inset-0 transition-opacity duration-500 opacity-0 bg-gradient-to-br from-emerald-500/0 via-transparent to-emerald-500/0 group-hover:opacity-20"></div>
                    <h3 class="mb-3 text-2xl font-bold text-white transition-colors duration-300 group-hover:text-emerald-400">
                        Truland Magazin Online
                    </h3>
                    <p class="mb-4 text-gray-300 transition-colors duration-300 group-hover:text-white">
                        Magazin online de încălțăminte
                    </p>
                    <div class="mt-auto">
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs border rounded-full bg-emerald-900/50 text-emerald-300 border-emerald-500/20">
                                Prestashop
                            </span>
                            </div>
                    </div>
                </div>
            </div>
<!-- Hover preview image -->
            <div x-show="hoverItem" 
                :style="{ left: `${mouseX + 20}px`, top: `${mouseY - 200}px` }"
                class="fixed z-[55] hidden md:block">
                <div class="relative overflow-hidden shadow-2xl rounded-xl">
                    <img :src="getImagePath(hoverItem)" 
                        :alt="hoverItem + ' preview'" 
                        class="w-64 h-auto transition-transform duration-300 transform hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                </div>
            </div>

            <!-- Modal/Slide-over panel -->
            <div x-cloak 
                x-show="selectedItem !== null" 
                class="fixed inset-0 z-[60] overflow-hidden"
                @keydown.escape.window="selectedItem = null">
                
                <!-- Backdrop -->
                <div class="absolute inset-0 bg-black/60 backdrop-blur-sm"
                     @click="selectedItem = null"></div>
                
                <!-- Modal content -->
                <div x-show="selectedItem !== null"
                    x-transition:enter="transform transition ease-in-out duration-500"
                    x-transition:enter-start="translate-x-full"
                    x-transition:enter-end="translate-x-0"
                    x-transition:leave="transform transition ease-in-out duration-500"
                    x-transition:leave-start="translate-x-0"
                    x-transition:leave-end="translate-x-full"
                    class="fixed inset-y-0 right-0 w-full max-w-md shadow-2xl bg-gradient-to-br from-slate-900 to-slate-800">
                    
                    <div class="relative p-6 border-b border-white/10">
                        <button @click="selectedItem = null" 
                                class="absolute text-gray-400 transition-colors top-12 right-4 hover:text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Modal body with scroll -->
                    <div class="p-6 overflow-y-auto max-h-[calc(100vh-5rem)]">
                        <!-- AIpofta Details -->
                        <div x-show="selectedItem === 'aipofta'" class="space-y-6">
                            <h2 class="mb-4 text-3xl font-bold text-white">AIpofta</h2>
                            <div class="relative overflow-hidden rounded-xl">
                                <img src="/assets/portofoliu/aipofta.webp" alt="Platforma AIpofta"
                                     class="w-full h-auto transition-transform duration-300 transform rounded-xl hover:scale-105">
                            </div>
                            <p class="text-gray-300">
                                AIpofta este primul generator de rețete personalizate din România bazat pe inteligență artificială
                            </p>
                            <div class="space-y-2">
                                <h3 class="text-lg font-semibold text-emerald-400">Tehnologii utilizate</h3>
                                <ul class="space-y-2 text-gray-300">
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Dezvoltată în Laravel
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Integrare Modele AI
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Generare Rețete Personalizate
                                    </li>
                                </ul>
                            </div>
                            <a href="https://aipofta.com" 
                               target="_blank"
                               rel="noopener noreferrer"
                               class="inline-flex items-center px-6 py-3 text-white transition-colors duration-300 rounded-lg bg-emerald-600 hover:bg-emerald-700">
                                Vizitează Site-ul
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                        </div>

                        <!-- Povestitorul Magic Details -->
                        <div x-show="selectedItem === 'povestitorul-magic'" class="space-y-6">
                            <h2 class="mb-4 text-3xl font-bold text-white">Povestitorul Magic</h2>
                            <div class="relative overflow-hidden rounded-xl">
                                <img src="/assets/portofoliu/povestitorul-magic.webp" alt="Platforma Povestitorul Magic"
                                     class="w-full h-auto transition-transform duration-300 transform rounded-xl hover:scale-105">
                            </div>
                            <p class="text-gray-300">
                                Povestitorul Magic este o platformă inovatoare care folosește inteligența artificială pentru a crea povești personalizate cu ilustrații captivante pentru copii. Această aplicație unică îmbină tehnologia modernă cu creativitatea pentru a oferi experiențe de lectură interactive și memorabile.
                            </p>
                            <div class="space-y-2">
                                <h3 class="text-lg font-semibold text-emerald-400">Tehnologii utilizate</h3>
                                <ul class="space-y-2 text-gray-300">
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Dezvoltată în Laravel
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Integrare Modele AI
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Ilustrații Generate AI
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Versiune Audio
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Interfață Prietenoasă pentru Copii
                                    </li>
                                </ul>
                            </div>
                            <a href="https://povestitorulmagic.ro" 
                               target="_blank"
                               rel="noopener noreferrer"
                               class="inline-flex items-center px-6 py-3 text-white transition-colors duration-300 rounded-lg bg-emerald-600 hover:bg-emerald-700">
                                Vizitează Site-ul
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                        </div>

                        <!-- Click Music Details -->
                        <div x-show="selectedItem === 'click-music'" class="space-y-6">
                            <h2 class="mb-4 text-3xl font-bold text-white">Click Music RO</h2>
                            <div class="relative overflow-hidden rounded-xl">
                                <img src="/assets/portofoliu/click-music.jpg" alt="Click Music Streaming App"
                                     class="w-full h-auto transition-transform duration-300 transform rounded-xl hover:scale-105">
                            </div>
                            <p class="text-gray-300">
                                Clickmusic.ro este rezultatul eforturilor noastre constante de a crea soluții digitale de înaltă calitate, îmbunătățind experiența utilizatorilor în domeniul streaming-ului muzical.
                            </p>
                            <div class="space-y-2">
                                <h3 class="text-lg font-semibold text-emerald-400">Caracteristici</h3>
                                <ul class="space-y-2 text-gray-300">
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Sistem de Autentificare
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Bază de Date Avansată
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Streaming cu CDN
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Blog Integrat
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Sistem de Plată cu Stripe
                                    </li>
                                </ul>
                            </div>
                            <a href="https://clickmusic.ro" 
                               target="_blank"
                               rel="noopener noreferrer"
                               class="inline-flex items-center px-6 py-3 text-white transition-colors duration-300 rounded-lg bg-emerald-600 hover:bg-emerald-700">
                                Vizitează Site-ul
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                        </div>

                       <!-- InstaCapture Details -->
                        <div x-show="selectedItem === 'instacapture'" class="space-y-6">
                            <h2 class="mb-4 text-3xl font-bold text-white">InstaCapture</h2>
                            <div class="relative overflow-hidden rounded-xl">
                                <img src="/assets/portofoliu/instacapture.jpg"
                                     alt="Aplicație de Fotografie Profesională InstaCapture"
                                     class="w-full h-auto transition-transform duration-300 transform rounded-xl hover:scale-105">
                            </div>
                            <p class="text-gray-300">
                                InstaCapture.ro este o aplicație web inovatoare dezvoltată de agenția noastră pentru firma de fotografie profesională InstaCapture din Cluj-Napoca.
                            </p>
                            <div class="space-y-2">
                                <h3 class="text-lg font-semibold text-emerald-400">Caracteristici principale</h3>
                                <ul class="space-y-2 text-gray-300">
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Dezvoltată în Laravel
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Panou de Control
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Integrare CDN prin API
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Performanță Ridicată
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Încărcare Rapidă a Pozelor
                                    </li>
                                </ul>
                            </div>
                            <a href="https://instacapture.ro" 
                               target="_blank"
                               rel="noopener noreferrer"
                               class="inline-flex items-center px-6 py-3 text-white transition-colors duration-300 rounded-lg bg-emerald-600 hover:bg-emerald-700">
                                Vizitează Site-ul
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                        </div>

                        <!-- Snow 'n' Stuff Details -->
                        <div x-show="selectedItem === 'snow-n-stuff'" class="space-y-6">
                            <h2 class="mb-4 text-3xl font-bold text-white">Snow 'n' Stuff</h2>
                            <div class="relative overflow-hidden rounded-xl">
                                <img src="/assets/portofoliu/snow-n-stuff.jpg" 
                                     alt="Website Prezentare Snow 'n' Stuff"
                                     class="w-full h-auto transition-transform duration-300 transform rounded-xl hover:scale-105">
                            </div>
                            <p class="text-gray-300">
                                Snow 'n' Stuff este un label muzical internațional de top, specializat în genurile Tech House, Deep House, House și Techno.
                            </p>
                            <div class="space-y-2">
                                <h3 class="text-lg font-semibold text-emerald-400">Caracteristici implementate</h3>
                                <ul class="space-y-2 text-gray-300">
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Dezvoltat în Laravel
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Blog Integrat
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Prezentare Artiști
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Piese Muzicale și Playlisturi
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Optimizare SEO
                                    </li>
                                </ul>
                            </div>
                            <a href="https://www.snow-n-stuff.com/" 
                               target="_blank"
                               rel="noopener noreferrer"
                               class="inline-flex items-center px-6 py-3 text-white transition-colors duration-300 rounded-lg bg-emerald-600 hover:bg-emerald-700">
                                Vizitează Site-ul
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                        </div>

                        <!-- CS Victoria MM Details -->
                        <div x-show="selectedItem === 'cs-victoria-mm'" class="space-y-6">
                            <h2 class="mb-4 text-3xl font-bold text-white">CS Victoria MM</h2>
                            <div class="relative overflow-hidden rounded-xl">
                                <img src="/assets/portofoliu/csvictoriamm.jpg" 
                                     alt="Branding Club Sportiv Victoria Maramureș"
                                     class="w-full h-auto transition-transform duration-300 transform rounded-xl hover:scale-105">
                            </div>
                            <p class="text-gray-300">
                                Proiectul de branding pentru Clubul Sportiv Victoria Maramureș este o călătorie fascinantă în definirea și exprimarea identității acestuia în mediul online și offline.
                            </p>
                            <div class="space-y-2">
                                <h3 class="text-lg font-semibold text-emerald-400">Servicii implementate</h3>
                                <ul class="space-y-2 text-gray-300">
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Creare Identitate Vizuală
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Logo Unic și Memorabil
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Dezvoltat în Laravel
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Panou de Control
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Platforme Sociale
                                    </li>
                                </ul>
                            </div>
                            <a href="https://csvictoriamm.ro/" 
                               target="_blank"
                               rel="noopener noreferrer"
                               class="inline-flex items-center px-6 py-3 text-white transition-colors duration-300 rounded-lg bg-emerald-600 hover:bg-emerald-700">
                                Vizitează Site-ul
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                        </div>

                        <!-- Ioana Mihalca Details -->
                        <div x-show="selectedItem === 'ioana-mihalca'" class="space-y-6">
                            <h2 class="mb-4 text-3xl font-bold text-white">Ioana Mihalca</h2>
                            <div class="relative overflow-hidden rounded-xl">
                                <img src="/assets/portofoliu/ioana-mihalca.jpg" 
                                     alt="Site-ul Ioanei Mihalca"
                                     class="w-full h-auto transition-transform duration-300 transform rounded-xl hover:scale-105">
                            </div>
                            <p class="text-gray-300">
                                Am creat un site de prezentare și blog pentru Ioana Mihalca, jurnalistă și moderatoare de emisiuni și evenimente.
                            </p>
                            <div class="space-y-2">
                                <h3 class="text-lg font-semibold text-emerald-400">Funcționalități</h3>
                                <ul class="space-y-2 text-gray-300">
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Dezvoltat în WordPress
                                    </li>
                                   <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Design Profesional
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Funcționalități de Blog
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Prezentare Profesională
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Gestionare Ușoară a Conținutului
                                    </li>
                                </ul>
                            </div>
                            <a href="https://ioanamihalca.ro/" 
                               target="_blank"
                               rel="noopener noreferrer"
                               class="inline-flex items-center px-6 py-3 text-white transition-colors duration-300 rounded-lg bg-emerald-600 hover:bg-emerald-700">
                                Vizitează Site-ul
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                        </div>

                        <!-- Truland Details -->
                        <div x-show="selectedItem === 'truland'" class="space-y-6">
                            <h2 class="mb-4 text-3xl font-bold text-white">Truland Magazin Online</h2>
                            <div class="relative overflow-hidden rounded-xl">
                                <img src="/assets/portofoliu/truland.jpg" 
                                     alt="Truland Magazin Online"
                                     class="w-full h-auto transition-transform duration-300 transform rounded-xl hover:scale-105">
                            </div>
                            <p class="text-gray-300">
                                Truland este un magazin online specializat în încălțăminte de calitate, oferind o gamă variată de pantofi, mocasini, ghete și sandale pentru femei.
                            </p>
                            <div class="space-y-2">
                                <h3 class="text-lg font-semibold text-emerald-400">Caracteristici platformă</h3>
                                <ul class="space-y-2 text-gray-300">
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Platformă Prestashop
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Design Modern
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Navigare Ușoară
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Experiență de Cumpărături Optimizată
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Interfață Intuitivă
                                    </li>
                                </ul>
                            </div>
                            <a href="https://truland.ro" 
                               target="_blank"
                               rel="noopener noreferrer"
                               class="inline-flex items-center px-6 py-3 text-white transition-colors duration-300 rounded-lg bg-emerald-600 hover:bg-emerald-700">
                                Vizitează Site-ul
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Grid for multimedia cards -->
<div class="grid max-w-5xl grid-cols-1 gap-8 p-4 mx-auto md:grid-cols-2">
    <!-- Podcast Morosenesc -->
    <a href="https://www.youtube.com/@IoanaMihalca" 
       target="_blank"
       rel="noopener noreferrer"
       class="group relative overflow-hidden rounded-2xl bg-white/5 backdrop-blur-sm border border-white/10 hover:border-emerald-500/50 transition-all duration-500 flex flex-col h-[500px] cursor-pointer">
        <div class="w-full h-[200px] overflow-hidden rounded-t-xl">
            <img src="/assets/podcast-morosenesc.webp"
                 alt="Productie Podcast Morosenesc"
                 class="object-cover w-full h-full transition-transform duration-500 transform group-hover:scale-105">
        </div>
        <div class="flex flex-col flex-1 p-6">
            <div class="absolute inset-0 transition-opacity duration-500 opacity-0 bg-gradient-to-br from-emerald-500/0 via-transparent to-emerald-500/0 group-hover:opacity-20"></div>
            <h3 class="mb-3 text-2xl font-bold text-white transition-colors duration-300 group-hover:text-emerald-400">
                Podcast Morosenesc
            </h3>
            <p class="mb-4 text-gray-300 transition-colors duration-300 group-hover:text-white">
                "Podcast Morosenesc cu Ioana Mihalca" este un proiect de succes dedicat explorării povestirilor autentice și discuțiilor captivante.
            </p>
            <div class="mt-auto space-y-4">
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 text-xs border rounded-full bg-emerald-900/50 text-emerald-300 border-emerald-500/20">
                        Audio Production
                    </span>
                    <span class="px-3 py-1 text-xs border rounded-full bg-emerald-900/50 text-emerald-300 border-emerald-500/20">
                        Video Production
                    </span>
                </div>
                <span class="inline-flex items-center px-4 py-2 text-sm text-white transition-colors duration-300 rounded-lg bg-emerald-600 group-hover:bg-emerald-700">
                    Vizionează pe YouTube
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </span>
            </div>
        </div>
    </a>

    <!-- Click Music YouTube -->
    <a href="https://www.youtube.com/@clickmusicromania" 
       target="_blank"
       rel="noopener noreferrer"
       class="group relative overflow-hidden rounded-2xl bg-white/5 backdrop-blur-sm border border-white/10 hover:border-emerald-500/50 transition-all duration-500 flex flex-col h-[500px] cursor-pointer">
        <div class="w-full h-[200px] overflow-hidden rounded-t-xl">
            <img src="/assets/clickmusicyt.jpg"
                 alt="Click Music YouTube"
                 class="object-cover w-full h-full transition-transform duration-500 transform group-hover:scale-105">
        </div>
        <div class="flex flex-col flex-1 p-6">
            <div class="absolute inset-0 transition-opacity duration-500 opacity-0 bg-gradient-to-br from-emerald-500/0 via-transparent to-emerald-500/0 group-hover:opacity-20"></div>
            <h3 class="mb-3 text-2xl font-bold text-white transition-colors duration-300 group-hover:text-emerald-400">
                Click Music YouTube
            </h3>
            <p class="mb-4 text-gray-300 transition-colors duration-300 group-hover:text-white">
                Click Music Romania reprezintă o parte importantă a activității noastre în domeniul producției muzicale și al conținutului video, cu peste 50 de milioane de vizualizări.
            </p>
            <div class="mt-auto space-y-4">
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 text-xs border rounded-full bg-emerald-900/50 text-emerald-300 border-emerald-500/20">
                        Video Content
                    </span>
                    <span class="px-3 py-1 text-xs border rounded-full bg-emerald-900/50 text-emerald-300 border-emerald-500/20">
                        Music Production
                    </span>
                </div>
                <span class="inline-flex items-center px-4 py-2 text-sm text-white transition-colors duration-300 rounded-lg bg-emerald-600 group-hover:bg-emerald-700">
                    Explorează Canalul Nostru
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </span>
            </div>
        </div>
    </a>
</div>

</div>

