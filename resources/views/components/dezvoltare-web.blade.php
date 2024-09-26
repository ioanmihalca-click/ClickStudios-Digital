        <section id="dezvoltare-web" class="bg-white ">
            

                <div class="relative h-screen bg-fixed bg-center bg-cover"
                    style="background-image: url('assets/carusel-bg.webp')">
                    <div class="absolute inset-0 bg-black/50"></div>
                    <div class="relative z-10 flex flex-col items-center justify-center h-full">

                        <h2
                            class="font-roboto-condensed uppercase mb-10 md:mb-14 tracking-[6px] md:tracking-[24px] font-normal text-3xl md:text-5xl text-center leading-relaxed md:leading-normal text-white ">
                            Expertiză în Dezvoltare Web</h2>
                        <div class="max-w-2xl mx-auto">
                            <p class="px-2 mb-16 text-lg tracking-wide text-center text-white font-volkov">"Imaginatia
                                este mai importanta decât cunoasterea."</p>
                        </div>
                    </div>
                </div>

                <div x-data="{
                    activeAccordion: '',
                    setActiveAccordion(id) {
                        this.activeAccordion = (this.activeAccordion == id) ? '' : id
                    }
                }"
                    class="relative px-2 mx-auto my-8 overflow-hidden text-sm font-normal bg-white border border-gray-200 divide-y divide-gray-200 rounded-md max-w-7xl">
                    <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
                        <button @click="setActiveAccordion(id)"
                            class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
                            <h2>Specializați în Laravel si TALL Stack</h2>
                            <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion == id }"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div x-show="activeAccordion==id" x-collapse x-cloak>
                            <div class="p-4 pt-0 opacity-70">
                                <section class="px-4 py-12 sm:px-6 lg:px-8">
                                    <div class="max-w-3xl">

                                        <p class="mb-6 text-lg text-gray-700">
                                            La Click Studios Digital, suntem specializați în dezvoltarea de aplicații
                                            web de înaltă performanță utilizând stack-ul TALL:
                                        </p>

                                        <ul class="pl-5 mb-6 space-y-2 text-gray-700 list-disc">
                                            <li><span class="font-semibold text-blue-600">Tailwind CSS</span> pentru
                                                design responsive și eficient</li>
                                            <li><span class="font-semibold text-green-600">Alpine.js</span> pentru
                                                interactivitate fluidă în partea de client</li>
                                            <li><span class="font-semibold text-red-600">Laravel</span> ca fundație
                                                robustă pentru backend</li>
                                            <li><span class="font-semibold text-purple-600">Livewire</span> pentru
                                                actualizări dinamice în timp real</li>
                                        </ul>

                                        <p class="text-lg text-gray-700">
                                            Această combinație puternică ne permite să creăm soluții web foarte rapide,
                                            scalabile și ușor de întreținut. Dezvoltam panouri de control personalizate
                                            pentru a usura gestionarea continutului de catre client. Avem capacitatea de
                                            a livra proiecte complexe într-un mod eficient, oferind clienților noștri
                                            aplicații web inovatoare care se remarcă în peisajul digital actual.
                                        </p>



                                        <p class="my-4 text-lg text-gray-700">
                                            Noi credem că un website nu este doar o carte de vizită, ci un instrument
                                            puternic pentru a atrage și converti clienți. In functie de cerintele
                                            proiectului, utilizam si WordPress, cel mai popular sistem de gestionare a
                                            conținutului (CMS) din lume.
                                        </p>
                                        <p class="my-4 text-lg text-gray-700">
                                            <span class="font-semibold">Ușurință în gestionare</span>: Cu o interfață
                                            intuitivă, vei putea actualiza conținutul site-ului tău în câteva click-uri,
                                            fără a fi nevoie de cunoștințe tehnice.
                                        </p>


                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
                        <button @click="setActiveAccordion(id)"
                            class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
                            <span>Servicii de Dezvoltare Web</span>
                            <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion == id }"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div x-show="activeAccordion==id" x-collapse x-cloak>
                            <div class="p-4 pt-0 opacity-70">
                                <section class= "px-4 py-12 sm:px-6 lg:px-8">
                                    <div class="max-w-3xl">

                                        <div class="space-y-8">
                                            <div>
                                                <h3 class="mb-3 text-xl font-semibold text-blue-600">Soluții Web
                                                    Complexe</h3>
                                                <ul class="pl-5 space-y-2 text-gray-700 list-disc">
                                                    <li>Website-uri personalizate</li>
                                                    <li>Aplicații web complexe</li>
                                                    <li>Soluții de e-commerce și sisteme de plată</li>
                                                    <li>Optimizare pentru motoare de căutare (SEO)</li>
                                                </ul>
                                            </div>

                                            <div>
                                                <h3 class="mb-3 text-xl font-semibold text-green-600">Funcționalități
                                                    Avansate</h3>
                                                <ul class="pl-5 space-y-2 text-gray-700 list-disc">
                                                    <li>Panouri de control (admin panel) profesionale și personalizate
                                                    </li>
                                                    <li>Sisteme de autentificare și securitate avansată</li>
                                                    <li>Sisteme de comenzi și rezervări online</li>
                                                </ul>
                                            </div>

                                            <div>
                                                <h3 class="mb-3 text-xl font-semibold text-purple-600">Suport și
                                                    Mentenanță</h3>
                                                <ul class="pl-5 space-y-2 text-gray-700 list-disc">
                                                    <li>Mentenanță continuă a aplicațiilor web</li>
                                                    <li>Suport tehnic dedicat</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <p class="mt-8 text-lg text-gray-700">
                                            Oferim soluții web complete și personalizate, de la dezvoltare și
                                            implementare până la mentenanță și suport, asigurând succesul proiectului
                                            dumneavoastră online.
                                        </p>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
                        <button @click="setActiveAccordion(id)"
                            class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
                            <span>Soluții Web pentru Afaceri</span>
                            <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion == id }"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div x-show="activeAccordion==id" x-collapse x-cloak>
                            <div class="p-4 pt-0 opacity-70">
                                <section class="px-4 py-12 sm:px-6 lg:px-8">
                                    <div class="max-w-3xl ">

                                        <p class="mb-6 text-lg text-center text-gray-700">
                                            Dezvoltăm site-uri de prezentare și aplicații web complexe adaptate nevoilor
                                            specifice ale afacerii dumneavoastră.
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
                                            Indiferent de domeniul în care activați, vă oferim soluții web personalizate
                                            care să vă ajute să vă creșteți vizibilitatea online și să vă îmbunătățiți
                                            interacțiunea cu clienții.
                                        </p>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mt-12 mb-12 text-center">
                <a href="#contact"
                    class="px-10 py-2 text-xs tracking-widest text-black uppercase transition-all duration-300 border border-black hover:bg-black hover:text-white font-roboto-condensed hover:border-transparent">Consultanta
                    gratuita</a>
            </div>
            
        </section>
