<section class="relative py-24 bg-gradient-to-b from-gray-900 via-gray-800 to-gray-900">
    <!-- Background image with overlay -->
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
        <img src="{{ asset('assets/contact-bg.webp') }}" alt=""
            class="absolute inset-0 object-cover w-full h-full opacity-20">
        <div class="absolute inset-0 bg-gradient-to-b from-gray-900/90 via-gray-800/90 to-gray-900/90"></div>
    </div>

    <!-- Background Pattern -->
    <div
        class="absolute inset-0 z-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiMyMDIwMjAiIGZpbGwtb3BhY2l0eT0iMC40Ij48cGF0aCBkPSJNMzYgMzRjMC0yIC45LTMuOSAyLjMtNS4yIDEuNC0xLjMgMy4yLTIuMSA1LjItMi4xIDEuOSAwIDMuOC44IDUuMiAyLjEgMS40IDEuMyAyLjMgMy4yIDIuMyA1LjIgMCAyLS45IDMuOS0yLjMgNS4yLTEuNCAxLjMtMy4yIDIuMS01LjIgMi4xLTEuOSAwLTMuOC0uOC01LjItMi4xQzM2LjkgMzcuOSAzNiAzNiAzNiAzNHoiLz48L2c+PC9nPjwvc3ZnPg==')] opacity-5">
    </div>

    <div class="container relative z-10 px-4 mx-auto max-w-7xl">
        <!-- Header Section -->
        <div class="mb-16 text-center">
            <span class="px-4 py-1.5 text-sm font-medium text-blue-400 bg-blue-500/10 rounded-full mb-4 inline-block">
                {{ __('messages.contact.tagline') }}
            </span>
            <h2 class="mb-4 text-4xl font-bold tracking-wide text-white font-roboto-condensed">
                {{ __('messages.contact.title') }} <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-400">{{ __('messages.contact.title_gradient') }}</span>
            </h2>
            <p class="max-w-2xl mx-auto text-lg text-gray-300">
                {{ __('messages.contact.subtitle') }}
            </p>
        </div>

        <div class="grid grid-cols-1 gap-10 md:grid-cols-2">
            <!-- Contact Form -->
            <div>
                <div class="p-6 border rounded-xl border-gray-700/50 bg-gray-800/30 backdrop-blur-sm">
                    <h3 class="mb-6 text-2xl font-bold text-white">{{ __('messages.contact.form.title') }}</h3>

                    @if ($success)
                        <div class="p-4 mb-6 text-green-200 rounded-lg bg-green-500/20">
                            <div class="flex">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <p>{{ __('messages.contact.form.success') }}</p>
                            </div>
                        </div>
                    @endif

                    @if ($error)
                        <div class="p-4 mb-6 text-red-200 rounded-lg bg-red-500/20">
                            <div class="flex">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                                <p>{{ __('messages.contact.form.error') }}</p>
                            </div>
                        </div>
                    @endif

                    <form wire:submit.prevent="submit">
                        <div class="mb-4">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-300">
                                {{ __('messages.contact.form.name') }}
                            </label>
                            <input type="text" id="name" wire:model="name"
                                class="w-full px-4 py-3 text-gray-100 border border-gray-600 rounded-lg bg-gray-700/50 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="{{ __('messages.contact.form.name_placeholder') }}">
                            @error('name')
                                <span class="mt-1 text-sm text-red-400">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-300">
                                {{ __('messages.contact.form.email') }}
                            </label>
                            <input type="email" id="email" wire:model="email"
                                class="w-full px-4 py-3 text-gray-100 border border-gray-600 rounded-lg bg-gray-700/50 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="{{ __('messages.contact.form.email_placeholder') }}">
                            @error('email')
                                <span class="mt-1 text-sm text-red-400">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-300">
                                {{ __('messages.contact.form.phone') }}
                            </label>
                            <input type="text" id="phone" wire:model="phone"
                                class="w-full px-4 py-3 text-gray-100 border border-gray-600 rounded-lg bg-gray-700/50 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="{{ __('messages.contact.form.phone_placeholder') }}">
                            @error('phone')
                                <span class="mt-1 text-sm text-red-400">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="subject" class="block mb-2 text-sm font-medium text-gray-300">
                                {{ __('messages.contact.form.subject') }}
                            </label>
                            <input type="text" id="subject" wire:model="subject"
                                class="w-full px-4 py-3 text-gray-100 border border-gray-600 rounded-lg bg-gray-700/50 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="{{ __('messages.contact.form.subject_placeholder') }}">
                            @error('subject')
                                <span class="mt-1 text-sm text-red-400">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-300">
                                {{ __('messages.contact.form.message') }}
                            </label>
                            <textarea id="message" wire:model="message" rows="5"
                                class="w-full px-4 py-3 text-gray-100 border border-gray-600 rounded-lg bg-gray-700/50 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="{{ __('messages.contact.form.message_placeholder') }}"></textarea>
                            @error('message')
                                <span class="mt-1 text-sm text-red-400">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit"
                            class="w-full px-6 py-3 text-white transition-all duration-300 rounded-lg bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-500 hover:to-blue-600"
                            wire:loading.attr="disabled" wire:loading.class="opacity-75">
                            <span wire:loading.remove>{{ __('messages.contact.form.submit') }}</span>
                            <span wire:loading>
                                <svg class="inline-block w-5 h-5 mr-2 -ml-1 text-white animate-spin"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10"
                                        stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor"
                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                    </path>
                                </svg>
                                {{ __('messages.contact.form.submitting') }}
                            </span>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Contact Info -->
            <div>
                <div class="p-6 border rounded-xl border-gray-700/50 bg-gray-800/30 backdrop-blur-sm">
                    <h3 class="mb-6 text-2xl font-bold text-white">{{ __('messages.contact.info.title') }}</h3>

                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div
                                class="flex items-center justify-center flex-shrink-0 w-12 h-12 mr-4 text-blue-400 rounded-lg bg-blue-500/10">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-white">{{ __('messages.contact.info.phone') }}
                                </h4>
                                <p class="mt-1 text-gray-300">+40 734 411 115</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div
                                class="flex items-center justify-center flex-shrink-0 w-12 h-12 mr-4 text-purple-400 rounded-lg bg-purple-500/10">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-white">{{ __('messages.contact.info.email') }}
                                </h4>
                                <p class="mt-1 text-gray-300">contact@clickstudios-digital.com</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div
                                class="flex items-center justify-center flex-shrink-0 w-12 h-12 mr-4 text-green-400 rounded-lg bg-green-500/10">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-white">{{ __('messages.contact.info.address') }}
                                </h4>
                                <p class="mt-1 text-gray-300">Nisiparilor 35, Baia Mare, 430122, Romania</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div
                                class="flex items-center justify-center flex-shrink-0 w-12 h-12 mr-4 rounded-lg text-amber-400 bg-amber-500/10">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-white">{{ __('messages.contact.info.hours') }}
                                </h4>
                                <p class="mt-1 text-gray-300">{{ __('messages.contact.info.hours_value') }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media Links -->
                    <div class="mt-8">
                        <h4 class="mb-4 text-lg font-semibold text-white">{{ __('messages.contact.info.social') }}
                        </h4>
                        <div class="flex space-x-4">
                            <a href="https://web.facebook.com/profile.php?id=61560427317860" target="_blank"
                                class="flex items-center justify-center w-10 h-10 text-white transition-all duration-300 bg-blue-600 rounded-lg hover:bg-blue-700">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/clickstudios_digital" target="_blank"
                                class="flex items-center justify-center w-10 h-10 text-white transition-all duration-300 rounded-lg bg-gradient-to-br from-purple-600 via-pink-600 to-orange-600 hover:from-purple-700 hover:via-pink-700 hover:to-orange-700">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="https://github.com/ioanmihalca-click" target="_blank"
                                class="flex items-center justify-center w-10 h-10 text-white transition-all duration-300 bg-gray-700 rounded-lg hover:bg-gray-800">
                                <i class="fa-brands fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Map -->
                <div class="mt-8">
                    <div class="p-6 border rounded-xl border-gray-700/50 bg-gray-800/30 backdrop-blur-sm">
                        <h3 class="mb-6 text-2xl font-bold text-white">{{ __('messages.contact.map.title') }}</h3>
                        <div class="h-[300px] rounded-lg overflow-hidden">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2685.1841321016825!2d23.568304776126983!3d47.65731518508943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4737d95a57bd49c7%3A0x5f3e7536a7cd3b6c!2sStrada%20Nisiparilor%2035%2C%20Baia%20Mare!5e0!3m2!1sen!2sro!4v1708953073371!5m2!1sen!2sro"
                                class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
