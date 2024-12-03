<nav x-data="{ isOpen: false }" class="fixed top-0 left-0 z-50 w-full bg-black bg-opacity-75">
    <div class="container flex items-center justify-between px-4 py-1 mx-auto">
        <a href="/" class="text-white text-sm tracking-[4px] uppercase font-roboto-condensed">Click Studios Digital</a>

        <!-- Hamburger Button with Animation -->
        <button @click="isOpen = !isOpen" class="relative w-10 h-10 text-white md:hidden focus:outline-none" aria-label="Toggle Menu">
            <span class="sr-only">Deschide meniul</span>
            <svg class="absolute w-10 h-10 transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" viewBox="0 0 120 120" fill="none" stroke="currentColor" stroke-width="6">
                <!-- First line -->
                <line x1="30" y1="40" x2="90" y2="40" 
                      :class="isOpen ? 'rotate-45 translate-y-[14px]' : ''" 
                      class="transition-transform duration-300 ease-in-out origin-center"></line>

                <!-- Second line -->
                <line x1="30" y1="60" x2="90" y2="60" 
                      :class="isOpen ? 'opacity-0' : ''" 
                      class="transition-opacity duration-300 ease-in-out"></line>

                <!-- Third line -->
                <line x1="30" y1="80" x2="90" y2="80" 
                      :class="isOpen ? '-rotate-45 -translate-y-[14px]' : ''" 
                      class="transition-transform duration-300 ease-in-out origin-center"></line>
            </svg>
        </button>

        <!-- Desktop menu -->
        <div class="hidden space-x-4 md:flex">
            <a href="/" wire:navigate class="text-white hover:text-emerald-500 font-roboto-condensed">Acasa</a>
            <a href="/dezvoltare-web" wire:navigate class="text-white hover:text-emerald-500 font-roboto-condensed">Dezvoltare Web</a>
            <a href="/servicii" wire:navigate class="text-white hover:text-emerald-500 font-roboto-condensed">Servicii</a>
            <a href="/portofoliu" wire:navigate class="text-white hover:text-emerald-500 font-roboto-condensed">Portofoliu</a>
            <a href="/blog" wire:navigate class="text-white hover:text-emerald-500 font-roboto-condensed">Blog</a>
            <a href="/#contact" class="text-white hover:text-emerald-500 font-roboto-condensed">Contact</a>
        </div>
    </div>

    <!-- Mobile menu fullscreen -->
    <div x-show="isOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click.away="isOpen = false" 
         class="fixed inset-0 w-full h-full bg-black md:hidden"
         x-cloak>
        
        <!-- Close button -->
        <button @click="isOpen = false" 
                class="absolute text-white transition-colors duration-300 right-4 top-4 hover:text-emerald-500">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <div class="flex flex-col items-center justify-center h-full space-y-8">
            <a href="/" wire:navigate @click="isOpen = false" 
               class="text-2xl text-white transition-colors duration-300 font-roboto-condensed hover:text-emerald-500">Acasa</a>
            <a href="/dezvoltare-web" wire:navigate @click="isOpen = false" 
               class="text-2xl text-white transition-colors duration-300 font-roboto-condensed hover:text-emerald-500">Dezvoltare Web</a>
            <a href="/servicii" wire:navigate @click="isOpen = false" 
               class="text-2xl text-white transition-colors duration-300 font-roboto-condensed hover:text-emerald-500">Servicii</a>
            <a href="/portofoliu" wire:navigate @click="isOpen = false" 
               class="text-2xl text-white transition-colors duration-300 font-roboto-condensed hover:text-emerald-500">Portofoliu</a>
            <a href="/blog" wire:navigate @click="isOpen = false" 
               class="text-2xl text-white transition-colors duration-300 font-roboto-condensed hover:text-emerald-500">Blog</a>
            <a href="/#contact" @click="isOpen = false" 
               class="text-2xl text-white transition-colors duration-300 font-roboto-condensed hover:text-emerald-500">Contact</a>
        </div>
    </div>
</nav>