<div x-data="{ 
    slideOverOpen: false,
    showButton: false,
    lastScrollTop: 0,
    handleScroll() {
        let st = window.pageYOffset;
        this.showButton = st < 100 || (st < this.lastScrollTop && st > 100);
        this.lastScrollTop = st;
    }
}" 
    x-init="
        // Inițial setăm showButton la false
        showButton = false;
        // După 1000ms verificăm poziția și setăm starea corectă
        setTimeout(() => {
            showButton = window.pageYOffset < 100;
        }, 1000);
        window.addEventListener('scroll', () => handleScroll());
    "
    class="fixed left-0 z-50 transition-all duration-300 ease-in-out bottom-4 md:bottom-10"
    x-show="showButton"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform translate-y-10"
    x-transition:enter-end="opacity-100 transform translate-y-0"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 transform translate-y-0"
    x-transition:leave-end="opacity-0 transform translate-y-10"
    x-cloak
>
    <!-- Buton Trigger cu Animație -->
    <button @click="slideOverOpen=true" 
            class="flex items-center px-4 py-2 text-sm font-medium tracking-wider text-white uppercase transition-all duration-300 rounded-r-lg shadow-lg group bg-emerald-500 hover:bg-emerald-600 focus:outline-none font-roboto-condensed">
        <span class="relative inline-flex items-center gap-2">
            <!-- Icon Animat -->
            <svg xmlns="http://www.w3.org/2000/svg" 
                 class="w-5 h-5 transition-transform group-hover:animate-pulse" 
                 fill="none" 
                 viewBox="0 0 24 24" 
                 stroke="currentColor">
                <path stroke-linecap="round" 
                      stroke-linejoin="round" 
                      stroke-width="2" 
                      d="M15.536 8.464a5 5 0 010 7.072M17.95 6.05a8 8 0 010 11.9M4 6h16M4 10h16M4 14h16M4 18h16"/>
            </svg>
            <span>Blog Audio</span>
            <svg xmlns="http://www.w3.org/2000/svg" 
                 class="w-4 h-4 transition-transform group-hover:translate-x-1" 
                 fill="none" 
                 viewBox="0 0 24 24" 
                 stroke="currentColor">
                <path stroke-linecap="round" 
                      stroke-linejoin="round" 
                      stroke-width="2" 
                      d="M9 5l7 7-7 7" />
            </svg>
        </span>
    </button>

    <!-- Slide Over Panel -->
    <template x-teleport="body">
        <div x-show="slideOverOpen" 
             @keydown.window.escape="slideOverOpen=false" 
             class="relative z-[99]">
            <!-- Backdrop cu Blur -->
            <div x-show="slideOverOpen" 
                 x-transition:enter="transition-opacity ease-in-out duration-500"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition-opacity ease-in-out duration-500"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 @click="slideOverOpen = false" 
                 class="fixed inset-0 bg-black/70 backdrop-blur-sm"></div>

            <!-- Slider Container -->
            <div class="fixed inset-0 overflow-hidden">
                <div class="absolute inset-0 overflow-hidden">
                    <div class="fixed inset-y-0 left-0 flex max-w-full pr-10">
                        <!-- Slider Panel -->
                        <div x-show="slideOverOpen" 
                             @click.away="slideOverOpen = false" 
                             x-transition:enter="transform transition ease-in-out duration-500"
                             x-transition:enter-start="-translate-x-full"
                             x-transition:enter-end="translate-x-0"
                             x-transition:leave="transform transition ease-in-out duration-500"
                             x-transition:leave-start="translate-x-0"
                             x-transition:leave-end="-translate-x-full"
                             class="w-screen max-w-md">
                            
                            <!-- Panel Content -->
                            <div class="flex flex-col h-full overflow-y-auto border-r shadow-2xl bg-gradient-to-b from-black/95 to-gray-900/95 border-emerald-500/30">
                                <!-- Header -->
                                <div class="sticky top-0 z-10 px-4 py-3 bg-black/90 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <h2 class="text-xl font-semibold text-white font-roboto-condensed">
                                            Articole Audio Recente
                                        </h2>
                                        <button @click="slideOverOpen=false" 
                                                class="p-2 text-gray-400 transition-colors rounded-lg hover:text-emerald-500 hover:bg-gray-800/50">
                                            <span class="sr-only">Închide panel</span>
                                            <svg class="w-6 h-6" 
                                                 fill="none" 
                                                 viewBox="0 0 24 24" 
                                                 stroke="currentColor">
                                                <path stroke-linecap="round" 
                                                      stroke-linejoin="round" 
                                                      d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <!-- Main Content -->
                                <div class="relative flex-1 px-4 mx-auto mt-6 sm:px-6">
                                    <!-- Loading Indicator -->
                                    <div wire:loading class="absolute inset-0 z-50 flex items-center justify-center bg-black/50">
                                        <div class="w-10 h-10 border-4 rounded-full border-emerald-500/30 border-t-emerald-500 animate-spin"></div>
                                    </div>
                                    
                                    <!-- Livewire Content -->
                                    <livewire:latest-audio-posts />
                                </div>

                                <!-- Footer -->
                                <div class="sticky bottom-0 px-4 py-3 mt-auto bg-black/90 sm:px-6">
                                    <p class="text-sm text-center text-gray-400">
                                        Ascultă articolele de pe blog
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>
</div>