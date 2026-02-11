<div class="min-h-screen bg-gradient-to-b from-gray-900 via-gray-800 to-gray-900">
    <!-- Hero Section - Modernizat -->
    <div class="relative">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-fixed bg-center bg-cover"
            style="background-image: url('{{ asset('assets/servicii.webp') }}')">
        </div>

        <!-- Modern Overlay with multiple layers -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/70 to-gray-900/90"></div>
        <div class="absolute inset-0 backdrop-blur-[2px]"></div>
        <div class="absolute inset-0 bg-blue-900/10 mix-blend-overlay"></div>

        <!-- Optional pattern overlay -->
        <div
            class="absolute inset-0 opacity-5 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJ3aGl0ZSIgZmlsbC1ydWxlPSJldmVub2RkIj48Y2lyY2xlIGN4PSIyIiBjeT0iMiIgcj0iMSIvPjwvZz48L3N2Zz4=')]">
        </div>

        <!-- Content -->
        <div class="relative z-10 flex flex-col items-center justify-center min-h-[90vh] px-6 py-20">
            <span
                class="px-5 py-2 mb-8 text-sm font-medium text-blue-400 transition-transform duration-300 transform border rounded-full bg-blue-500/10 border-blue-500/20 backdrop-blur-sm hover:scale-105">
                <i class="mr-2 fa-solid fa-star-of-life animate-pulse"></i>{{ __('messages.services.hero.tagline') }}
            </span>
            <h2 class="max-w-4xl mb-8 text-4xl font-bold leading-tight text-center text-white md:text-5xl lg:text-6xl">
                {{ __('messages.services.hero.title') }} <span
                    class="font-extrabold text-transparent bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text">{{ __('messages.services.hero.title_gradient') }}</span>
            </h2>
            <div class="max-w-3xl mx-auto">
                <p
                    class="max-w-2xl mx-auto mb-10 text-lg italic font-light leading-relaxed text-center text-white/90 md:text-xl">
                    "{{ __('messages.services.hero.quote') }}"
                </p>
            </div>
            <div class="flex flex-col gap-5 sm:flex-row">
                <a href="#servicii"
                    class="px-8 py-4 text-sm font-semibold tracking-wider text-white uppercase transition-all duration-300 bg-blue-600 rounded-lg hover:bg-blue-700 hover:shadow-lg hover:shadow-blue-600/20 transform hover:-translate-y-0.5 font-jakarta">
                    <i class="mr-2 fa-solid fa-arrow-down"></i>{{ __('messages.services.hero.explore_button') }}
                </a>
                <a href="{{ \App\Helpers\LocaleHelper::getLocalizedRoute('contact') }}" wire:navigate
                    class="px-8 py-4 text-sm font-semibold tracking-wider text-white uppercase transition-all duration-300 border rounded-lg border-white/30 hover:bg-white/10 hover:border-white/50 transform hover:-translate-y-0.5 font-jakarta">
                    <i class="mr-2 fa-solid fa-envelope"></i>{{ __('messages.services.hero.contact_button') }}
                </a>
            </div>

            <!-- Scroll indicator -->
            {{-- <div class="absolute hidden transform -translate-x-1/2 bottom-10 left-1/2 animate-bounce md:block">
                <a href="#servicii" class="transition-colors text-white/70 hover:text-white">
                    <i class="text-2xl fa-solid fa-chevron-down"></i>
                </a>
            </div> --}}
        </div>
    </div>

    <!-- Services Section - Modernizat -->
    <div id="servicii" class="relative py-24">
        <div
            class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiMyMDIwMjAiIGZpbGwtb3BhY2l0eT0iMC40Ij48cGF0aCBkPSJNMzYgMzRjMC0yIC45LTMuOSAyLjMtNS4yIDEuNC0xLjMgMy4yLTIuMSA1LjItMi4xIDEuOSAwIDMuOC44IDUuMiAyLjEgMS40IDEuMyAyLjMgMy4yIDIuMyA1LjIgMCAyLS45IDMuOS0yLjMgNS4yLTEuNCAxLjMtMy4yIDIuMS01LjIgMi4xLTEuOSAwLTMuOC0uOC01LjItMi4xQzM2LjkgMzcuOSAzNiAzNiAzNiAzNHoiLz48L2c+PC9nPjwvc3ZnPg==')] opacity-5">
        </div>

        <!-- Section Header -->
        <div class="container px-6 mx-auto mb-16">
            <div class="text-center">
                <span
                    class="px-4 py-1.5 text-xs font-medium tracking-wider uppercase bg-blue-500/10 rounded-full text-blue-400">
                    {{ __('messages.services.section.tagline') }}
                </span>
                <h2 class="mt-4 text-4xl font-bold text-white">{{ __('messages.services.section.title') }}</h2>
                <div class="w-24 h-1 mx-auto mt-4 mb-6 rounded-full bg-gradient-to-r from-blue-400 to-cyan-400"></div>
                <p class="max-w-2xl mx-auto text-gray-400">{{ __('messages.services.section.subtitle') }}</p>
            </div>
        </div>

        <div class="container px-6 mx-auto">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Laravel Development -->
                <div
                    class="relative p-6 transition-all duration-500 border group bg-gray-800/50 backdrop-blur-sm rounded-xl border-gray-700/50 hover:border-blue-500/50 hover:transform hover:-translate-y-2 hover:shadow-xl hover:shadow-blue-500/5">
                    <div
                        class="absolute transition-opacity duration-500 opacity-0 -inset-px bg-gradient-to-r from-blue-500/20 to-transparent group-hover:opacity-100 rounded-xl blur">
                    </div>
                    <div class="relative">
                        <div
                            class="flex items-center justify-center mb-5 text-blue-500 transition-colors duration-300 rounded-lg w-14 h-14 bg-blue-500/10 group-hover:bg-blue-500/20">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </div>
                        <h4
                            class="mb-3 text-xl font-bold text-white transition-colors duration-300 group-hover:text-blue-400">
                            {{ __('messages.services.categories.laravel.title') }}</h4>
                        <p class="mb-5 text-gray-400 transition-colors duration-300 group-hover:text-gray-300">
                            {{ __('messages.services.categories.laravel.description') }}</p>
                        <ul class="space-y-3 text-gray-400">
                            @foreach (__('messages.services.categories.laravel.features') as $feature)
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 mr-3 text-blue-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    {{ $feature }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Web Design -->
                <div
                    class="relative p-6 transition-all duration-500 border group bg-gray-800/50 backdrop-blur-sm rounded-xl border-gray-700/50 hover:border-purple-500/50 hover:transform hover:-translate-y-2 hover:shadow-xl hover:shadow-purple-500/5">
                    <div
                        class="absolute transition-opacity duration-500 opacity-0 -inset-px bg-gradient-to-r from-purple-500/20 to-transparent group-hover:opacity-100 rounded-xl blur">
                    </div>
                    <div class="relative">
                        <div
                            class="flex items-center justify-center mb-5 text-purple-500 transition-colors duration-300 rounded-lg w-14 h-14 bg-purple-500/10 group-hover:bg-purple-500/20">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                            </svg>
                        </div>
                        <h4
                            class="mb-3 text-xl font-bold text-white transition-colors duration-300 group-hover:text-purple-400">
                            {{ __('messages.services.categories.web_design.title') }}
                        </h4>
                        <p class="mb-5 text-gray-400 transition-colors duration-300 group-hover:text-gray-300">
                            {{ __('messages.services.categories.web_design.description') }}</p>
                        <ul class="space-y-3 text-gray-400">
                            @foreach (__('messages.services.categories.web_design.features') as $feature)
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 mr-3 text-purple-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    {{ $feature }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Business Automation -->
                <div
                    class="relative p-6 transition-all duration-500 border group bg-gray-800/50 backdrop-blur-sm rounded-xl border-gray-700/50 hover:border-emerald-500/50 hover:transform hover:-translate-y-2 hover:shadow-xl hover:shadow-emerald-500/5">
                    <div
                        class="absolute transition-opacity duration-500 opacity-0 -inset-px bg-gradient-to-r from-emerald-500/20 to-transparent group-hover:opacity-100 rounded-xl blur">
                    </div>
                    <div class="relative">
                        <div
                            class="flex items-center justify-center mb-5 transition-colors duration-300 rounded-lg w-14 h-14 text-emerald-500 bg-emerald-500/10 group-hover:bg-emerald-500/20">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h4
                            class="mb-3 text-xl font-bold text-white transition-colors duration-300 group-hover:text-emerald-400">
                            {{ __('messages.services.categories.automation.title') }}
                        </h4>
                        <p class="mb-5 text-gray-400 transition-colors duration-300 group-hover:text-gray-300">
                            {{ __('messages.services.categories.automation.description') }}</p>
                        <ul class="space-y-3 text-gray-400">
                            @foreach (__('messages.services.categories.automation.features') as $feature)
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 mr-3 text-emerald-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    {{ $feature }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Enterprise AI Solutions -->
                <div
                    class="relative p-6 transition-all duration-500 border group bg-gray-800/50 backdrop-blur-sm rounded-xl border-gray-700/50 hover:border-pink-500/50 hover:transform hover:-translate-y-2 hover:shadow-xl hover:shadow-pink-500/5">
                    <div
                        class="absolute transition-opacity duration-500 opacity-0 -inset-px bg-gradient-to-r from-pink-500/20 to-transparent group-hover:opacity-100 rounded-xl blur">
                    </div>
                    <div class="relative">
                        <div
                            class="flex items-center justify-center mb-5 text-pink-500 transition-colors duration-300 rounded-lg w-14 h-14 bg-pink-500/10 group-hover:bg-pink-500/20">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h4
                            class="mb-3 text-xl font-bold text-white transition-colors duration-300 group-hover:text-pink-400">
                            {{ __('messages.services.categories.ai_solutions.title') }}</h4>
                        <p class="mb-5 text-gray-400 transition-colors duration-300 group-hover:text-gray-300">
                            {{ __('messages.services.categories.ai_solutions.description') }}</p>
                        <ul class="space-y-3 text-gray-400">
                            @foreach (__('messages.services.categories.ai_solutions.features') as $feature)
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 mr-3 text-pink-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    {{ $feature }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- E-commerce -->
                <div
                    class="relative p-6 transition-all duration-500 border group bg-gray-800/50 backdrop-blur-sm rounded-xl border-gray-700/50 hover:border-yellow-500/50 hover:transform hover:-translate-y-2 hover:shadow-xl hover:shadow-yellow-500/5">
                    <div
                        class="absolute transition-opacity duration-500 opacity-0 -inset-px bg-gradient-to-r from-yellow-500/20 to-transparent group-hover:opacity-100 rounded-xl blur">
                    </div>
                    <div class="relative">
                        <div
                            class="flex items-center justify-center mb-5 text-yellow-500 transition-colors duration-300 rounded-lg w-14 h-14 bg-yellow-500/10 group-hover:bg-yellow-500/20">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h4
                            class="mb-3 text-xl font-bold text-white transition-colors duration-300 group-hover:text-yellow-400">
                            {{ __('messages.services.categories.ecommerce.title') }}
                        </h4>
                        <p class="mb-5 text-gray-400 transition-colors duration-300 group-hover:text-gray-300">
                            {{ __('messages.services.categories.ecommerce.description') }}</p>
                        <ul class="space-y-3 text-gray-400">
                            @foreach (__('messages.services.categories.ecommerce.features') as $feature)
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 mr-3 text-yellow-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    {{ $feature }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Maintenance -->
                <div
                    class="relative p-6 transition-all duration-500 border group bg-gray-800/50 backdrop-blur-sm rounded-xl border-gray-700/50 hover:border-cyan-500/50 hover:transform hover:-translate-y-2 hover:shadow-xl hover:shadow-cyan-500/5">
                    <div
                        class="absolute transition-opacity duration-500 opacity-0 -inset-px bg-gradient-to-r from-cyan-500/20 to-transparent group-hover:opacity-100 rounded-xl blur">
                    </div>
                    <div class="relative">
                        <div
                            class="flex items-center justify-center mb-5 transition-colors duration-300 rounded-lg w-14 h-14 text-cyan-500 bg-cyan-500/10 group-hover:bg-cyan-500/20">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h4
                            class="mb-3 text-xl font-bold text-white transition-colors duration-300 group-hover:text-cyan-400">
                            {{ __('messages.services.categories.maintenance.title') }}</h4>
                        <p class="mb-5 text-gray-400 transition-colors duration-300 group-hover:text-gray-300">
                            {{ __('messages.services.categories.maintenance.description') }}</p>
                        <ul class="space-y-3 text-gray-400">
                            @foreach (__('messages.services.categories.maintenance.features') as $feature)
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 mr-3 text-cyan-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    {{ $feature }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
