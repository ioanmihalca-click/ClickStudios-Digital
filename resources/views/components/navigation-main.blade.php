<nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" x-data="{
    isOpen: false,
    scrolledFromTop: false,
    handleScroll() {
        this.scrolledFromTop = window.pageYOffset > 20
    }
}"
    :class="{
        'bg-white/90 shadow-lg backdrop-blur-md': scrolledFromTop && !isOpen,
        'bg-white shadow-lg': isOpen,
        'bg-transparent': !scrolledFromTop && !isOpen
    }"
    @scroll.window="handleScroll" x-init="handleScroll">

    <div class="max-w-5xl px-4 mx-auto">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="{{ route('home', ['locale' => App::getLocale()]) }}"
                class="flex items-center transition-all duration-300 group">
                <div class="flex items-center justify-center w-10 h-10 p-1 transition-all duration-300 rounded-lg">
                    <img src="{{ asset('assets/logo.jpg') }}" alt="Click Studios Digital Logo"
                        class="w-full h-full rounded-lg">
                </div>
            </a>

            <!-- Desktop Navigation -->
            <div class="items-center hidden md:flex">
                <div class="flex items-center mr-8 space-x-6">
                    <a href="{{ route('home', ['locale' => App::getLocale()]) }}" wire:navigate
                        class="text-sm font-bold tracking-wide uppercase transition-colors duration-300 hover:text-emerald-600 {{ Route::currentRouteName() == 'home' ? 'text-emerald-600' : 'text-gray-900' }}">
                        {{ __('messages.menu.home') }}
                    </a>
                    <a href="{{ route('services', ['locale' => App::getLocale()]) }}" wire:navigate
                        class="text-sm font-bold tracking-wide uppercase transition-colors duration-300 hover:text-emerald-600 {{ Route::currentRouteName() == 'services' ? 'text-emerald-600' : 'text-gray-900' }}">
                        {{ __('messages.menu.services') }}
                    </a>
                    <a href="{{ route('portfolio', ['locale' => App::getLocale()]) }}" wire:navigate
                        class="text-sm font-bold tracking-wide uppercase transition-colors duration-300 hover:text-emerald-600 {{ Route::currentRouteName() == 'portfolio' ? 'text-emerald-600' : 'text-gray-900' }}">
                        {{ __('messages.menu.portfolio') }}
                    </a>
                     <a href="#about"
                        class="text-sm font-bold tracking-wide uppercase transition-colors duration-300 hover:text-emerald-600 text-gray-900">
                        {{ __('messages.menu.about') }}
                    </a>
                    <a href="{{ route('contact', ['locale' => App::getLocale()]) }}" wire:navigate
                        class="text-sm font-bold tracking-wide uppercase transition-colors duration-300 hover:text-emerald-600 {{ Route::currentRouteName() == 'contact' ? 'text-emerald-600' : 'text-gray-900' }}">
                        {{ __('messages.menu.contact') }}
                    </a>
                </div>

                <!-- Desktop Language Switcher -->
                <div class="relative group">
                    <button
                        class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 transition-all duration-300 rounded-lg bg-gray-100/80 hover:bg-gray-200">
                        @if (App::getLocale() === 'en')
                            <span class="flex items-center">
                                <span
                                    class="inline-flex items-center justify-center w-5 h-5 mr-2 overflow-hidden rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-full h-full">
                                        <rect width="512" height="512" fill="#012169" />
                                        <path d="M512 0L0 512" stroke="#fff" stroke-width="74" />
                                        <path d="M0 0L512 512" stroke="#fff" stroke-width="74" />
                                        <path d="M0 0L512 512" stroke="#c8102e" stroke-width="40" />
                                        <path d="M512 0L0 512" stroke="#c8102e" stroke-width="40" />
                                        <rect width="170" height="512" x="171" fill="#fff" />
                                        <rect width="512" height="170" y="171" fill="#fff" />
                                        <rect width="102" height="512" x="205" fill="#c8102e" />
                                        <rect width="512" height="102" y="205" fill="#c8102e" />
                                    </svg>
                                </span>
                                <span>English</span>
                            </span>
                        @else
                            <span class="flex items-center">
                                <span
                                    class="inline-flex items-center justify-center w-5 h-5 mr-2 overflow-hidden rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3 2" class="w-full h-full">
                                        <rect width="1" height="2" fill="#002B7F" />
                                        <rect width="1" height="2" x="1" fill="#FCD116" />
                                        <rect width="1" height="2" x="2" fill="#CE1126" />
                                    </svg>
                                </span>
                                <span>Română</span>
                            </span>
                        @endif
                        <svg class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:rotate-180"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div
                        class="absolute right-0 z-50 invisible py-2 mt-1 origin-top-right transition-all duration-300 scale-95 bg-white border rounded-lg opacity-0 shadow-lg min-w-[160px] border-gray-200 group-hover:visible group-hover:scale-100 group-hover:opacity-100">
                        <a href="{{ route(Route::currentRouteName(), ['locale' => 'en'] + Route::current()->parameters()) }}"
                            class="flex items-center w-full px-4 py-2 text-sm font-medium text-gray-700 transition-all duration-300 {{ App::getLocale() === 'en' ? 'bg-emerald-50 text-emerald-600' : 'hover:bg-gray-50' }}">
                            <span
                                class="inline-flex items-center justify-center w-5 h-5 mr-2 overflow-hidden rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-full h-full">
                                    <rect width="512" height="512" fill="#012169" />
                                    <path d="M512 0L0 512" stroke="#fff" stroke-width="74" />
                                    <path d="M0 0L512 512" stroke="#fff" stroke-width="74" />
                                    <path d="M0 0L512 512" stroke="#c8102e" stroke-width="40" />
                                    <path d="M512 0L0 512" stroke="#c8102e" stroke-width="40" />
                                    <rect width="170" height="512" x="171" fill="#fff" />
                                    <rect width="512" height="170" y="171" fill="#fff" />
                                    <rect width="102" height="512" x="205" fill="#c8102e" />
                                    <rect width="512" height="102" y="205" fill="#c8102e" />
                                </svg>
                            </span>
                            English
                            @if (App::getLocale() === 'en')
                                <svg class="w-4 h-4 ml-auto text-emerald-500" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            @endif
                        </a>
                        <a href="{{ route(Route::currentRouteName(), ['locale' => 'ro'] + Route::current()->parameters()) }}"
                            class="flex items-center w-full px-4 py-2 text-sm font-medium text-gray-700 transition-all duration-300 {{ App::getLocale() === 'ro' ? 'bg-emerald-50 text-emerald-600' : 'hover:bg-gray-50' }}">
                            <span
                                class="inline-flex items-center justify-center w-5 h-5 mr-2 overflow-hidden rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3 2" class="w-full h-full">
                                    <rect width="1" height="2" fill="#002B7F" />
                                    <rect width="1" height="2" x="1" fill="#FCD116" />
                                    <rect width="1" height="2" x="2" fill="#CE1126" />
                                </svg>
                            </span>
                            Română
                            @if (App::getLocale() === 'ro')
                                <svg class="w-4 h-4 ml-auto text-emerald-500" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            @endif
                        </a>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <div class="flex items-center md:hidden">
                <button @click="isOpen = !isOpen"
                    class="inline-flex items-center justify-center p-2 text-gray-800 transition-all duration-300 rounded-lg hover:bg-gray-100 focus:outline-none">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path x-show="!isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="isOpen" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 transform -translate-y-4"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform -translate-y-4" class="md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 bg-white border-t border-gray-200">
            <a href="{{ route('home', ['locale' => App::getLocale()]) }}" @click="isOpen = false" wire:navigate
                class="flex items-center px-4 py-3 text-base font-medium text-gray-800 transition-all duration-300 rounded-lg hover:bg-gray-50">
                <i class="w-5 mr-3 fa-solid fa-home text-emerald-500"></i>
                {{ __('messages.menu.home') }}
            </a>
            <a href="{{ route('services', ['locale' => App::getLocale()]) }}" @click="isOpen = false" wire:navigate
                class="flex items-center px-4 py-3 text-base font-medium text-gray-800 transition-all duration-300 rounded-lg hover:bg-gray-50">
                <i class="w-5 mr-3 fa-solid fa-list-check text-emerald-500"></i>
                {{ __('messages.menu.services') }}
            </a>
            <a href="{{ route('portfolio', ['locale' => App::getLocale()]) }}" @click="isOpen = false" wire:navigate
                class="flex items-center px-4 py-3 text-base font-medium text-gray-800 transition-all duration-300 rounded-lg hover:bg-gray-50">
                <i class="w-5 mr-3 fa-solid fa-briefcase text-emerald-500"></i>
                {{ __('messages.menu.portfolio') }}
            </a>
            <a href="#about" @click="isOpen = false"
                class="flex items-center px-4 py-3 text-base font-medium text-gray-800 transition-all duration-300 rounded-lg hover:bg-gray-50">
                <i class="w-5 mr-3 fa-solid fa-users text-emerald-500"></i>
                {{ __('messages.menu.about') }}
            </a>
            <a href="{{ route('contact', ['locale' => App::getLocale()]) }}" @click="isOpen = false" wire:navigate
                class="flex items-center px-4 py-3 text-base font-medium text-gray-800 transition-all duration-300 rounded-lg hover:bg-gray-50">
                <i class="w-5 mr-3 fa-solid fa-envelope text-emerald-500"></i>
                {{ __('messages.menu.contact') }}
            </a>

            <!-- Mobile Language Switcher -->
            <div class="px-4 py-4 mt-1 border-t border-gray-200">
                <p class="mb-2 text-sm font-medium text-gray-500">{{ __('messages.language') }}</p>
                <div class="grid grid-cols-2 gap-2">
                    <a href="{{ route(Route::currentRouteName(), ['locale' => 'en'] + Route::current()->parameters()) }}"
                        class="flex items-center justify-center py-2.5 px-3 rounded-lg transition-all duration-300 {{ App::getLocale() === 'en' ? 'bg-emerald-50 text-emerald-600 border border-emerald-200' : 'bg-gray-50 text-gray-700 border border-gray-200 hover:bg-gray-100' }}">
                        <span
                            class="inline-flex items-center justify-center w-5 h-5 mr-2 overflow-hidden rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-full h-full">
                                <rect width="512" height="512" fill="#012169" />
                                <path d="M512 0L0 512" stroke="#fff" stroke-width="74" />
                                <path d="M0 0L512 512" stroke="#fff" stroke-width="74" />
                                <path d="M0 0L512 512" stroke="#c8102e" stroke-width="40" />
                                <path d="M512 0L0 512" stroke="#c8102e" stroke-width="40" />
                                <rect width="170" height="512" x="171" fill="#fff" />
                                <rect width="512" height="170" y="171" fill="#fff" />
                                <rect width="102" height="512" x="205" fill="#c8102e" />
                                <rect width="512" height="102" y="205" fill="#c8102e" />
                            </svg>
                        </span>
                        <span class="text-sm font-medium">English</span>
                    </a>
                    <a href="{{ route(Route::currentRouteName(), ['locale' => 'ro'] + Route::current()->parameters()) }}"
                        class="flex items-center justify-center py-2.5 px-3 rounded-lg transition-all duration-300 {{ App::getLocale() === 'ro' ? 'bg-emerald-50 text-emerald-600 border border-emerald-200' : 'bg-gray-50 text-gray-700 border border-gray-200 hover:bg-gray-100' }}">
                        <span
                            class="inline-flex items-center justify-center w-5 h-5 mr-2 overflow-hidden rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3 2" class="w-full h-full">
                                <rect width="1" height="2" fill="#002B7F" />
                                <rect width="1" height="2" x="1" fill="#FCD116" />
                                <rect width="1" height="2" x="2" fill="#CE1126" />
                            </svg>
                        </span>
                        <span class="text-sm font-medium">Română</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
