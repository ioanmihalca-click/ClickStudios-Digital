<!-- Navigation -->
    <nav x-data="{ isOpen: false }" class="fixed top-0 left-0 z-50 w-full bg-black bg-opacity-75">

        <div class="container flex items-center justify-between px-4 py-2 mx-auto">
            <a href="/" class="text-white text-xs tracking-[4px] uppercase font-roboto-condensed">Click Studios
                Digital</a>

            <!-- Hamburger menu button (visible on mobile) -->
            <button @click="isOpen = !isOpen" class="text-white md:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>

            <!-- Desktop menu -->
            <div class="hidden space-x-4 md:flex">
                <a href="#about" class="text-white hover:text-emerald-500 font-roboto-condensed">Despre noi</a>
                <a href="#dezvoltare-web" class="text-white hover:text-emerald-500 font-roboto-condensed">Dezvoltare
                    Web</a>
                <a href="#servicii" class="text-white hover:text-emerald-500 font-roboto-condensed">Servicii</a>
                <a href="#portofoliu" class="text-white hover:text-emerald-500 font-roboto-condensed">Portofoliu</a>
                <a href="/blog" class="text-white hover:text-emerald-500 font-roboto-condensed">Blog</a>
                <a href="#contact" class="text-white hover:text-emerald-500 font-roboto-condensed">Contact</a>
            </div>
        </div>

        <!-- Mobile menu -->
        <div x-show="isOpen" @click.away="isOpen = false" class="md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#about" @click="isOpen = false"
                    class="block px-3 py-2 text-white font-roboto-condensed">Despre noi</a>
                <a href="#dezvoltare-web" @click="isOpen = false"
                    class="block px-3 py-2 text-white font-roboto-condensed">Dezvoltare Web</a>
                <a href="#servicii" @click="isOpen = false"
                    class="block px-3 py-2 text-white font-roboto-condensed">Servicii</a>
                <a href="#portofoliu" @click="isOpen = false"
                    class="block px-3 py-2 text-white font-roboto-condensed">Portofoliu</a>
                <a href="/blog" @click="isOpen = false"
                    class="block px-3 py-2 text-white font-roboto-condensed">Blog</a>
                <a href="#contact" @click="isOpen = false"
                    class="block px-3 py-2 text-white font-roboto-condensed">Contact</a>
            </div>
        </div>
    </nav>