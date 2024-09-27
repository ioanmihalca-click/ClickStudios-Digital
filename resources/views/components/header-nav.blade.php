<header x-data="{ isOpen: false }" class="bg-white shadow-md">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex items-center justify-between py-2">
            <div class="flex items-center">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('assets/logo.jpg') }}" alt="Logo" class="w-auto h-12 mr-3">
                   
                </a>
            </div>
            
            <!-- Desktop Menu -->
            <nav class="hidden space-x-6 md:flex">
                <a href="/" class="text-sm font-medium text-gray-700 transition duration-300 hover:text-emerald-600">Acasă</a>
                <a href="/#about" class="text-sm font-medium text-gray-700 transition duration-300 hover:text-emerald-600">Despre noi</a>
                <a href="/#dezvoltare-web" class="text-sm font-medium text-gray-700 transition duration-300 hover:text-emerald-600">Dezvoltare Web</a>
                <a href="/#servicii" class="text-sm font-medium text-gray-700 transition duration-300 hover:text-emerald-600">Servicii</a>
                <a href="/#portofoliu" class="text-sm font-medium text-gray-700 transition duration-300 hover:text-emerald-600">Portofoliu</a>
                <a href="/#contact" class="text-sm font-medium text-gray-700 transition duration-300 hover:text-emerald-600">Contact</a>
                <a href="/blog" class="text-sm font-medium text-gray-700 transition duration-300 hover:text-emerald-600">Blog</a>
            </nav>
            
            <!-- Mobile menu button -->
            <div class="flex md:hidden">
                <button @click="isOpen = !isOpen" type="button" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500" aria-label="Main menu" aria-expanded="false">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': isOpen, 'inline-flex': !isOpen }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': !isOpen, 'inline-flex': isOpen }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div :class="{'block': isOpen, 'hidden': !isOpen}" class="md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="/" class="block px-3 py-2 text-base font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50">Acasă</a>
            <a href="/#about" class="block px-3 py-2 text-base font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50">Despre noi</a>
            <a href="/#dezvoltare-web" class="block px-3 py-2 text-base font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50">Dezvoltare Web</a>
            <a href="/#servicii" class="block px-3 py-2 text-base font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50">Servicii</a>
            <a href="/#portofoliu" class="block px-3 py-2 text-base font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50">Portofoliu</a>
            <a href="/#contact" class="block px-3 py-2 text-base font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50">Contact</a>
            <a href="/blog" class="block px-3 py-2 text-base font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50">Blog</a>
        </div>
    </div>
</header>