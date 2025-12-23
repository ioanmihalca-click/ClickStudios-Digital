<nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 backdrop-blur-md" x-data="{
    isOpen: false,
    scrolledFromTop: false,
    handleScroll() {
        this.scrolledFromTop = window.pageYOffset > 20
    }
}"
    :class="{ 'bg-gray-900/80 shadow-lg': scrolledFromTop || isOpen, 'bg-transparent': !scrolledFromTop && !isOpen }"
    @scroll.window="handleScroll" x-init="handleScroll">

    <div class="container px-4 mx-auto">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="{{ route('home', ['locale' => App::getLocale()]) }}"
                class="flex items-center transition-all duration-300 group">
                <div
                    class="flex items-center justify-center w-10 h-10 p-2 transition-all duration-300 rounded-lg bg-emerald-500/10 group-hover:bg-emerald-500/20">
                    <img src="{{ asset('assets/logo.jpg') }}" alt="Click Studios Digital Logo" class="w-full h-full">
                </div>
                <div class="ml-3">
                    <span
                        class="text-lg font-bold text-white transition-all duration-300 group-hover:text-emerald-400">Click
                        Studios</span>
                    <span class="block -mt-1 text-xs font-medium text-emerald-400/80">Digital Agency</span>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <div class="items-center hidden md:flex">
                <div class="flex items-center mr-6 space-x-1">
                    <a href="{{ route('home', ['locale' => App::getLocale()]) }}" wire:navigate
                        class="px-3 py-2 font-medium text-white transition-all duration-300 rounded-lg hover:bg-white/10 hover:text-emerald-400">
                        {{ __('messages.menu.home') }}
                    </a>
                    <a href="{{ route('web-development', ['locale' => App::getLocale()]) }}" wire:navigate
                        class="px-3 py-2 font-medium text-white transition-all duration-300 rounded-lg hover:bg-white/10 hover:text-emerald-400">
                        {{ __('messages.menu.web_development') }}
                    </a>
                    <a href="{{ route('services', ['locale' => App::getLocale()]) }}" wire:navigate
                        class="px-3 py-2 font-medium text-white transition-all duration-300 rounded-lg hover:bg-white/10 hover:text-emerald-400">
                        {{ __('messages.menu.services') }}
                    </a>
                    <a href="{{ route('portfolio', ['locale' => App::getLocale()]) }}" wire:navigate
                        class="px-3 py-2 font-medium text-white transition-all duration-300 rounded-lg hover:bg-white/10 hover:text-emerald-400">
                        {{ __('messages.menu.portfolio') }}
                    </a>
                    <a href="{{ route('contact', ['locale' => App::getLocale()]) }}" wire:navigate
                        class="px-3 py-2 font-medium text-white transition-all duration-300 rounded-lg hover:bg-white/10 hover:text-emerald-400">
                        {{ __('messages.menu.contact') }}
                    </a>
                </div>

                <!-- Desktop Language Switcher Modernizat -->
                <div class="relative group">
                    <button
                        class="flex items-center px-3 py-2 text-sm font-medium text-white transition-all duration-300 rounded-lg bg-white/5 hover:bg-white/10">
                        @if (App::getLocale() === 'en')
                            <span class="flex items-center">
                                <span
                                    class="inline-flex items-center justify-center w-5 h-5 mr-2 overflow-hidden rounded-full bg-white/10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-full h-full">
                                        <rect width="512" height="512" fill="#012169" />
                                        <path d="M512 0v512L0 0z" fill="#012169" />
                                        <path d="M512 0L0 512h512V0z" fill="#012169" />
                                        <path d="M256 0l256 256-256 256L0 256z" fill="#012169" />
                                        <path d="M512 0L0 512" stroke="#fff" stroke-width="74" />
                                        <path d="M0 0L512 512" stroke="#fff" stroke-width="74" />
                                        <path d="M0 0v512h512V0z" stroke="#c8102e" stroke-width="40" />
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
                                    class="inline-flex items-center justify-center w-5 h-5 mr-2 overflow-hidden rounded-full bg-white/10">
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
                        class="absolute right-0 z-50 invisible py-2 mt-1 origin-top-right transition-all duration-300 scale-95 bg-gray-800 border rounded-lg opacity-0 min-w-[160px] border-emerald-700/20 group-hover:visible group-hover:scale-100 group-hover:opacity-100 backdrop-blur-lg">
                        <a href="{{ route(Route::currentRouteName(), ['locale' => 'en'] + Route::current()->parameters()) }}"
                            class="flex items-center w-full px-4 py-2 text-sm font-medium text-white transition-all duration-300 {{ App::getLocale() === 'en' ? 'bg-emerald-600/20 text-emerald-400' : 'hover:bg-white/5' }}">
                            <span
                                class="inline-flex items-center justify-center w-5 h-5 mr-2 overflow-hidden rounded-full bg-white/10">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-full h-full">
                                    <rect width="512" height="512" fill="#012169" />
                                    <path d="M512 0v512L0 0z" fill="#012169" />
                                    <path d="M512 0L0 512h512V0z" fill="#012169" />
                                    <path d="M256 0l256 256-256 256L0 256z" fill="#012169" />
                                    <path d="M512 0L0 512" stroke="#fff" stroke-width="74" />
                                    <path d="M0 0L512 512" stroke="#fff" stroke-width="74" />
                                    <path d="M0 0v512h512V0z" stroke="#c8102e" stroke-width="40" />
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
                                <svg class="w-4 h-4 ml-auto text-emerald-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            @endif
                        </a>
                        <a href="{{ route(Route::currentRouteName(), ['locale' => 'ro'] + Route::current()->parameters()) }}"
                            class="flex items-center w-full px-4 py-2 text-sm font-medium text-white transition-all duration-300 {{ App::getLocale() === 'ro' ? 'bg-emerald-600/20 text-emerald-400' : 'hover:bg-white/5' }}">
                            <span
                                class="inline-flex items-center justify-center w-5 h-5 mr-2 overflow-hidden rounded-full bg-white/10">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3 2" class="w-full h-full">
                                    <rect width="1" height="2" fill="#002B7F" />
                                    <rect width="1" height="2" x="1" fill="#FCD116" />
                                    <rect width="1" height="2" x="2" fill="#CE1126" />
                                </svg>
                            </span>
                            Română
                            @if (App::getLocale() === 'ro')
                                <svg class="w-4 h-4 ml-auto text-emerald-400" xmlns="http://www.w3.org/2000/svg"
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
                    class="inline-flex items-center justify-center p-2 text-white transition-all duration-300 rounded-lg hover:bg-white/10 focus:outline-none">
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
        <div class="px-2 pt-2 pb-3 space-y-1 border-t backdrop-blur-md bg-black/80 border-white/10">
            <a href="{{ route('home', ['locale' => App::getLocale()]) }}" @click="isOpen = false" wire:navigate
                class="flex items-center px-4 py-3 text-base font-medium text-white transition-all duration-300 rounded-lg hover:bg-white/10">
                <i class="w-5 mr-3 fa-solid fa-home text-emerald-400"></i>
                {{ __('messages.menu.home') }}
            </a>
            <a href="{{ route('web-development', ['locale' => App::getLocale()]) }}" @click="isOpen = false"
                wire:navigate
                class="flex items-center px-4 py-3 text-base font-medium text-white transition-all duration-300 rounded-lg hover:bg-white/10">
                <i class="w-5 mr-3 fa-solid fa-code text-emerald-400"></i>
                {{ __('messages.menu.web_development') }}
            </a>
            <a href="{{ route('services', ['locale' => App::getLocale()]) }}" @click="isOpen = false" wire:navigate
                class="flex items-center px-4 py-3 text-base font-medium text-white transition-all duration-300 rounded-lg hover:bg-white/10">
                <i class="w-5 mr-3 fa-solid fa-list-check text-emerald-400"></i>
                {{ __('messages.menu.services') }}
            </a>
            <a href="{{ route('portfolio', ['locale' => App::getLocale()]) }}" @click="isOpen = false" wire:navigate
                class="flex items-center px-4 py-3 text-base font-medium text-white transition-all duration-300 rounded-lg hover:bg-white/10">
                <i class="w-5 mr-3 fa-solid fa-briefcase text-emerald-400"></i>
                {{ __('messages.menu.portfolio') }}
            </a>
            <a href="{{ route('contact', ['locale' => App::getLocale()]) }}" @click="isOpen = false" wire:navigate
                class="flex items-center px-4 py-3 text-base font-medium text-white transition-all duration-300 rounded-lg hover:bg-white/10">
                <i class="w-5 mr-3 fa-solid fa-envelope text-emerald-400"></i>
                {{ __('messages.menu.contact') }}
            </a>

            <!-- Mobile Language Switcher Modernizat -->
            <div class="px-4 py-4 mt-1 border-t border-white/10">
                <p class="mb-2 text-sm font-medium text-gray-400">{{ __('messages.language') }}</p>
                <div class="grid grid-cols-2 gap-2">
                    <a href="{{ route(Route::currentRouteName(), ['locale' => 'en'] + Route::current()->parameters()) }}"
                        class="flex items-center justify-center py-2.5 px-3 rounded-lg transition-all duration-300 {{ App::getLocale() === 'en' ? 'bg-emerald-600/20 text-emerald-400 border border-emerald-500/30' : 'bg-gray-800/60 text-white border border-white/5 hover:bg-gray-700/60' }}">
                        <span
                            class="inline-flex items-center justify-center w-5 h-5 mr-2 overflow-hidden rounded-full bg-black/30">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-full h-full">
                                <rect width="512" height="512" fill="#012169" />
                                <path d="M512 0v512L0 0z" fill="#012169" />
                                <path d="M512 0L0 512h512V0z" fill="#012169" />
                                <path d="M256 0l256 256-256 256L0 256z" fill="#012169" />
                                <path d="M512 0L0 512" stroke="#fff" stroke-width="74" />
                                <path d="M0 0L512 512" stroke="#fff" stroke-width="74" />
                                <path d="M0 0v512h512V0z" stroke="#c8102e" stroke-width="40" />
                                <path d="M0 0L512 512" stroke="#c8102e" stroke-width="40" />
                                <path d="M512 0L0 512" stroke="#c8102e" stroke-width="40" />
                                <rect width="170" height="512" x="171" fill="#fff" />
                                <rect width="512" height="170" y="171" fill="#fff" />
                                <rect width="102" height="512" x="205" fill="#c8102e" />
                                <rect width="512" height="102" y="205" fill="#c8102e" />
                            </svg>
                        </span>
                        <span class="text-sm font-medium">English</span>
                        @if (App::getLocale() === 'en')
                            <svg class="w-4 h-4 ml-2 text-emerald-400" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="16 12 12 8 8 12"></polyline>
                                <line x1="12" y1="16" x2="12" y2="8"></line>
                            </svg>
                        @endif
                    </a>
                    <a href="{{ route(Route::currentRouteName(), ['locale' => 'ro'] + Route::current()->parameters()) }}"
                        class="flex items-center justify-center py-2.5 px-3 rounded-lg transition-all duration-300 {{ App::getLocale() === 'ro' ? 'bg-emerald-600/20 text-emerald-400 border border-emerald-500/30' : 'bg-gray-800/60 text-white border border-white/5 hover:bg-gray-700/60' }}">
                        <span
                            class="inline-flex items-center justify-center w-5 h-5 mr-2 overflow-hidden rounded-full bg-black/30">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3 2" class="w-full h-full">
                                <rect width="1" height="2" fill="#002B7F" />
                                <rect width="1" height="2" x="1" fill="#FCD116" />
                                <rect width="1" height="2" x="2" fill="#CE1126" />
                            </svg>
                        </span>
                        <span class="text-sm font-medium">Română</span>
                        @if (App::getLocale() === 'ro')
                            <svg class="w-4 h-4 ml-2 text-emerald-400" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="16 12 12 8 8 12"></polyline>
                                <line x1="12" y1="16" x2="12" y2="8"></line>
                            </svg>
                        @endif
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
