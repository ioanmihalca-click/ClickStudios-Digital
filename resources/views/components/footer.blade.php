<footer class="text-white bg-gray-900">
    <div class="container px-6 py-12 mx-auto">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
            <!-- Logo și Descriere -->
            <div class="mb-6 md:mb-0">
                <div class="flex items-center mb-5">
                    <div class="flex items-center justify-center w-10 h-10 p-2 rounded-lg bg-white/10">
                        <img src="{{ asset('assets/logo.jpg') }}" alt="Click Studios Digital Logo" class="w-full h-full">
                    </div>
                    <div class="ml-3">
                        <span class="text-lg font-bold text-white">Click Studios</span>
                        <span class="block -mt-1 text-xs font-medium text-emerald-400/80">Digital Agency</span>
                    </div>
                </div>
                <p class="mt-4 text-sm leading-relaxed text-gray-400">
                    Agenție digitală specializată în dezvoltare web Laravel, design UI/UX, marketing digital și SEO.
                </p>

                <!-- Rețele Sociale -->
                <div class="mt-6">
                    <h3 class="mb-3 text-sm font-semibold tracking-wider uppercase text-emerald-400">
                        {{ __('messages.footer.follow_us') }}
                    </h3>
                    <div class="flex space-x-4">
                        <a href="https://github.com/ioanmihalca-click" target="_blank" rel="noopener noreferrer"
                            class="text-gray-400 transition-colors duration-300 hover:text-white">
                            <i class="text-xl fa-brands fa-github"></i>
                            <span class="sr-only">GitHub</span>
                        </a>
                        <a href="https://web.facebook.com/profile.php?id=61560427317860" target="_blank"
                            rel="noopener noreferrer"
                            class="text-gray-400 transition-colors duration-300 hover:text-white">
                            <i class="text-xl fa-brands fa-facebook"></i>
                            <span class="sr-only">Facebook</span>
                        </a>
                        <a href="https://www.instagram.com/clickstudios_digital" target="_blank"
                            rel="noopener noreferrer"
                            class="text-gray-400 transition-colors duration-300 hover:text-white">
                            <i class="text-xl fa-brands fa-instagram"></i>
                            <span class="sr-only">Instagram</span>
                        </a>
                        <a href="https://www.linkedin.com/in/ioanclickmihalca/" target="_blank"
                            rel="noopener noreferrer"
                            class="text-gray-400 transition-colors duration-300 hover:text-white">
                            <i class="text-xl fa-brands fa-linkedin"></i>
                            <span class="sr-only">LinkedIn</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Link-uri Rapide -->
            <div>
                <h3 class="mb-4 text-sm font-semibold tracking-wider uppercase text-emerald-400">
                    {{ __('messages.footer.quick_links') }}
                </h3>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('web-development', ['locale' => App::getLocale()]) }}" wire:navigate
                            class="flex items-center text-gray-400 transition-colors duration-300 hover:text-white">
                            <i class="mr-2 text-xs fa-solid fa-chevron-right text-emerald-500"></i>
                            {{ __('messages.menu.web_development') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services', ['locale' => App::getLocale()]) }}" wire:navigate
                            class="flex items-center text-gray-400 transition-colors duration-300 hover:text-white">
                            <i class="mr-2 text-xs fa-solid fa-chevron-right text-emerald-500"></i>
                            {{ __('messages.menu.services') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('portfolio', ['locale' => App::getLocale()]) }}" wire:navigate
                            class="flex items-center text-gray-400 transition-colors duration-300 hover:text-white">
                            <i class="mr-2 text-xs fa-solid fa-chevron-right text-emerald-500"></i>
                            {{ __('messages.menu.portfolio') }}
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Informații Contact -->
            <div>
                <h3 class="mb-4 text-sm font-semibold tracking-wider uppercase text-emerald-400">
                    {{ __('messages.footer.contact_info') }}
                </h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <i class="mt-1 mr-3 fa-solid fa-location-dot text-emerald-400"></i>
                        <span class="text-gray-400">Nisiparilor 35, Baia Mare, Maramures, 430122, România</span>
                    </li>
                    <li class="flex items-center">
                        <i class="mr-3 fa-solid fa-phone text-emerald-400"></i>
                        <a href="tel:+40734411115"
                            class="text-gray-400 transition-colors duration-300 hover:text-white">
                            +40 734 411 115
                        </a>
                    </li>
                    <li class="flex items-center">
                        <i class="mr-3 fa-solid fa-envelope text-emerald-400"></i>
                        <a href="mailto:contact@clickstudios-digital.com"
                            class="text-gray-400 transition-colors duration-300 hover:text-white">
                            contact@clickstudios-digital.com
                        </a>
                    </li>
                    <li class="flex items-center">
                        <i class="mr-3 fa-solid fa-clock text-emerald-400"></i>
                        <span class="text-gray-400">Luni-Vineri: 09:00-17:00</span>
                    </li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div>
                <h3 class="mb-4 text-sm font-semibold tracking-wider uppercase text-emerald-400">
                    {{ __('messages.footer.newsletter.title') }}
                </h3>
                <p class="mb-4 text-sm text-gray-400">
                    {{ __('messages.footer.newsletter.subtitle') }}
                </p>
                <form class="flex flex-col gap-2">
                    <div class="flex-grow">
                        <label for="email-address"
                            class="sr-only">{{ __('messages.footer.newsletter.placeholder') }}</label>
                        <input id="email-address" name="email" type="email" autocomplete="email" required
                            class="w-full min-w-0 px-4 py-2 text-base text-gray-900 placeholder-gray-500 bg-white rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500"
                            placeholder="{{ __('messages.footer.newsletter.placeholder') }}">
                    </div>
                    <div class="sm:mt-0">
                        <button type="submit"
                            class="w-full px-4 py-2 text-sm font-medium text-white transition-colors duration-300 rounded-lg bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                            {{ __('messages.footer.newsletter.button') }}
                        </button>
                    </div>
                </form>

                <!-- Selector Limbă -->
                <div class="mt-6">
                    <h3 class="mb-3 text-sm font-semibold tracking-wider uppercase text-emerald-400">
                        Selectează limba
                    </h3>
                    <div class="flex items-center space-x-4">
                        <a href="{{ route(Route::currentRouteName(), ['locale' => 'en'] + Route::current()->parameters()) }}"
                            class="inline-flex items-center px-3 py-1 rounded-full transition-all duration-300 
                           {{ App::getLocale() === 'en' ? 'bg-emerald-500/20 text-emerald-400' : 'text-gray-400 hover:text-white' }}">
                            <span class="mr-2">🇬🇧</span> English
                        </a>
                        <a href="{{ route(Route::currentRouteName(), ['locale' => 'ro'] + Route::current()->parameters()) }}"
                            class="inline-flex items-center px-3 py-1 rounded-full transition-all duration-300
                           {{ App::getLocale() === 'ro' ? 'bg-emerald-500/20 text-emerald-400' : 'text-gray-400 hover:text-white' }}">
                            <span class="mr-2">🇷🇴</span> Română
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Linie separator + Copyright -->
        <div class="pt-8 mt-8 border-t border-gray-800">
            <div class="flex flex-col items-center justify-between md:flex-row">
                <p class="text-sm text-gray-400">
                    &copy; {{ date('Y') }} Click Studios Digital. {{ __('messages.footer.rights') }}
                </p>
            </div>
        </div>
    </div>
</footer>
