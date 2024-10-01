<section id="dezvoltare-web" class="relative flex items-center justify-center min-h-screen bg-fixed bg-center bg-cover" x-data="{ activeTab: 'tall' }" style="background-image: url('assets/carusel-bg.webp')">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative z-10 w-full max-w-6xl p-6 md:p-10">
        <div class="p-6 rounded-lg md:p-10 bg-white/10">
            <h2 class="mb-4 text-4xl font-bold text-center text-white md:mb-6 md:text-5xl font-roboto-condensed drop-shadow-lg">
                Dezvoltatori Laravel
            </h2>
            <p class="mb-8 text-lg italic text-center text-white md:mb-10 md:text-xl font-vollkorn drop-shadow-md">
                "Imaginația este mai importantă decât cunoașterea."
            </p>
            
            <div class="flex justify-center mb-8">
                <button @click="activeTab = 'tall'" :class="{ 'bg-white text-black': activeTab === 'tall', 'bg-transparent text-white': activeTab !== 'tall' }" class="px-4 py-2 mr-2 text-sm font-semibold transition-all duration-300 border border-white rounded-l-full hover:bg-white hover:text-black">
                    TALL Stack
                </button>
                <button @click="activeTab = 'servicii'" :class="{ 'bg-white text-black': activeTab === 'servicii', 'bg-transparent text-white': activeTab !== 'servicii' }" class="px-4 py-2 text-sm font-semibold transition-all duration-300 border border-white rounded-r-full hover:bg-white hover:text-black">
                    Servicii Web
                </button>
            </div>

            <div x-show="activeTab === 'tall'" class="space-y-6 md:space-y-8">
                <div class="p-4 border rounded-lg md:p-6 border-white/20">
                    <h3 class="mb-3 text-2xl font-semibold text-white md:mb-4 md:text-3xl">Specializare TALL Stack</h3>
                    <ul class="grid grid-cols-1 gap-4 md:grid-cols-2">
                        <li class="flex items-center text-white">
                            <svg class="w-6 h-6 mr-2 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span><strong>T</strong>ailwind CSS: Design responsive</span>
                        </li>
                        <li class="flex items-center text-white">
                            <svg class="w-6 h-6 mr-2 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span><strong>A</strong>lpine.js: Interactivitate dinamică</span>
                        </li>
                        <li class="flex items-center text-white">
                            <svg class="w-6 h-6 mr-2 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span><strong>L</strong>aravel: Backend robust și scalabil</span>
                        </li>
                        <li class="flex items-center text-white">
                            <svg class="w-6 h-6 mr-2 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span><strong>L</strong>ivewire: Actualizări în timp real</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div x-show="activeTab === 'servicii'" class="space-y-6 md:space-y-8">
                <div class="p-4 border rounded-lg md:p-6 border-white/20 ">
                    <h3 class="mb-3 text-2xl font-semibold text-white md:mb-4 md:text-3xl">Servicii Web Avansate</h3>
                    <ul class="grid grid-cols-1 gap-4 md:grid-cols-2">
                        <li class="flex items-center text-white">
                            <svg class="w-6 h-6 mr-2 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                            <span>Website-uri de prezentare optimizate</span>
                        </li>
                       
                        <li class="flex items-center text-white">
                            <svg class="w-6 h-6 mr-2 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                            <span>Sisteme de rezervări și comenzi online</span>
                        </li>
                         <li class="flex items-center text-white">
                            <svg class="w-6 h-6 mr-2 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                            <span>Aplicații web complexe și scalabile</span>
                        </li>
                        <li class="flex items-center text-white">
                            <svg class="w-6 h-6 mr-2 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                            <span>Panouri de administrare personalizate</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="mt-8 text-center md:mt-10">
                <a href="#contact" class="inline-block px-8 py-2 text-xs tracking-widest text-white uppercase transition-all duration-300 border border-white scroll-link md:px-10 md:text-sm hover:bg-white hover:text-black font-roboto-condensed hover:border-transparent">
                    Consultanță Gratuită
                </a>
            </div>
        </div>
    </div>
</section>