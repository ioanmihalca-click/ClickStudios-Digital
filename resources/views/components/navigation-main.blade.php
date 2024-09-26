<!-- Navigation -->
    <nav x-data="{ isOpen: false }" class="fixed top-0 left-0 z-50 w-full bg-black bg-opacity-75">

        <div class="container flex items-center justify-between px-4 py-0 mx-auto">
            <a href="/" class="text-white text-xs tracking-[4px] uppercase font-roboto-condensed">Click Studios
                Digital</a>

        <!-- Modern SVG Hamburger menu button (visible on mobile) -->
<button @click="isOpen = !isOpen" class="relative w-10 h-10 text-white md:hidden focus:outline-none" aria-label="Toggle Menu">
    <span class="sr-only">Deschide meniul</span>
    <!-- Hamburger Icon -->
    <svg class="absolute w-6 h-6 transition-all duration-300 ease-in-out transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
         :class="{'opacity-0 translate-y-4 scale-50': isOpen, 'opacity-100 translate-y-0 scale-100': !isOpen}"
         fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" 
              :class="{'opacity-0 translate-x-4': isOpen, 'opacity-100 translate-x-0': !isOpen}"
              style="transition: all 0.3s ease-in-out;"></path>
    </svg>
    <!-- Close Icon -->
    <svg class="absolute w-6 h-6 transition-all duration-300 ease-in-out transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
         :class="{'opacity-100 scale-100': isOpen, 'opacity-0 scale-50 -translate-y-4': !isOpen}"
         fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              :d="isOpen ? 'M6 18L18 6M6 6l12 12' : 'M6 6l12 12M6 18L18 6'"
              :class="{'opacity-100 scale-100': isOpen, 'opacity-0 scale-0': !isOpen}"
              style="transition: all 0.3s ease-in-out;"></path>
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
    <div x-show="isOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 transform scale-95"
         x-transition:enter-end="opacity-100 transform scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 transform scale-100"
         x-transition:leave-end="opacity-0 transform scale-95"
         @click.away="isOpen = false" 
         class="absolute w-full bg-black bg-opacity-75 md:hidden"
         x-cloak>
        <div class="px-2 pb-3 space-y-1 sm:px-3">
            <a href="#about" @click="isOpen = false" class="block px-3 py-2 text-white rounded-md font-roboto-condensed hover:bg-gray-800">Despre noi</a>
            <a href="#dezvoltare-web" @click="isOpen = false" class="block px-3 py-2 text-white rounded-md font-roboto-condensed hover:bg-gray-800">Dezvoltare Web</a>
            <a href="#servicii" @click="isOpen = false" class="block px-3 py-2 text-white rounded-md font-roboto-condensed hover:bg-gray-800">Servicii</a>
            <a href="#portofoliu" @click="isOpen = false" class="block px-3 py-2 text-white rounded-md font-roboto-condensed hover:bg-gray-800">Portofoliu</a>
            <a href="/blog" @click="isOpen = false" class="block px-3 py-2 text-white rounded-md font-roboto-condensed hover:bg-gray-800">Blog</a>
            <a href="#contact" @click="isOpen = false" class="block px-3 py-2 text-white rounded-md font-roboto-condensed hover:bg-gray-800">Contact</a>
        </div>
    </div>
</nav>