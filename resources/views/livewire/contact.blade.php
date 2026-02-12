<div>
    <div class="max-w-5xl mx-auto px-4">

        {{-- Hero Section --}}
        <section class="max-w-[280px] ml-auto md:max-w-none md:mx-0 pt-24">
            <h1 class="mb-1 uppercase tracking-wide leading-none font-jakarta">
                <span class="block text-lg font-extrabold text-emerald-700 md:text-4xl lg:text-5xl">
                    {{ __('messages.contact.title') }}
                </span>
                <span class="block text-lg font-extrabold text-gray-900 md:text-4xl lg:text-5xl">
                    {{ __('messages.contact.title_gradient') }}
                </span>
            </h1>

            <p class="max-w-xl mb-3 text-sm text-gray-600 md:text-lg leading-snug">
                {{ __('messages.contact.subtitle') }}
            </p>
        </section>

        {{-- Content Grid --}}
        <div class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-2 pb-16">

            {{-- Contact Form --}}
            <div>
                <div class="p-6 bg-gradient-to-br from-teal-50/60 to-white/80 backdrop-blur-md shadow-lg rounded-2xl border border-gray-200/50">
                    <h2 class="mb-6 text-xl font-bold text-gray-900 font-jakarta">{{ __('messages.contact.form.title') }}</h2>

                    @if ($success)
                        <div class="p-4 mb-6 text-emerald-800 bg-emerald-100 rounded-lg border border-emerald-200">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <p class="text-sm">{{ __('messages.contact.form.success') }}</p>
                            </div>
                        </div>
                    @endif

                    @if ($error)
                        <div class="p-4 mb-6 text-red-800 bg-red-100 rounded-lg border border-red-200">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                                <p class="text-sm">{{ __('messages.contact.form.error') }}</p>
                            </div>
                        </div>
                    @endif

                    <form wire:submit.prevent="submit">
                        {{-- Honeypot --}}
                        <div style="position:absolute;left:-9999px;" aria-hidden="true">
                            <input type="text" wire:model="website" tabindex="-1" autocomplete="off">
                        </div>

                        <div class="mb-4">
                            <label for="name" class="block mb-1.5 text-sm font-medium text-gray-700">
                                {{ __('messages.contact.form.name') }}
                            </label>
                            <input type="text" id="name" wire:model="name"
                                class="w-full px-4 py-2.5 text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500"
                                placeholder="{{ __('messages.contact.form.name_placeholder') }}">
                            @error('name')
                                <span class="mt-1 text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block mb-1.5 text-sm font-medium text-gray-700">
                                {{ __('messages.contact.form.email') }}
                            </label>
                            <input type="email" id="email" wire:model="email"
                                class="w-full px-4 py-2.5 text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500"
                                placeholder="{{ __('messages.contact.form.email_placeholder') }}">
                            @error('email')
                                <span class="mt-1 text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="phone" class="block mb-1.5 text-sm font-medium text-gray-700">
                                {{ __('messages.contact.form.phone') }}
                            </label>
                            <input type="text" id="phone" wire:model="phone"
                                class="w-full px-4 py-2.5 text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500"
                                placeholder="{{ __('messages.contact.form.phone_placeholder') }}">
                            @error('phone')
                                <span class="mt-1 text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="subject" class="block mb-1.5 text-sm font-medium text-gray-700">
                                {{ __('messages.contact.form.subject') }}
                            </label>
                            <input type="text" id="subject" wire:model="subject"
                                class="w-full px-4 py-2.5 text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500"
                                placeholder="{{ __('messages.contact.form.subject_placeholder') }}">
                            @error('subject')
                                <span class="mt-1 text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="message" class="block mb-1.5 text-sm font-medium text-gray-700">
                                {{ __('messages.contact.form.message') }}
                            </label>
                            <textarea id="message" wire:model="message" rows="5"
                                class="w-full px-4 py-2.5 text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500"
                                placeholder="{{ __('messages.contact.form.message_placeholder') }}"></textarea>
                            @error('message')
                                <span class="mt-1 text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit"
                            class="w-full px-6 py-3 text-white rounded-full bg-emerald-600 hover:bg-emerald-700 transition-colors duration-300 uppercase font-bold tracking-widest text-sm font-jakarta"
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

            {{-- Contact Info --}}
            <div class="space-y-8">
                <div class="p-6 bg-gradient-to-br from-teal-50/60 to-white/80 backdrop-blur-md shadow-lg rounded-2xl border border-gray-200/50">
                    <h2 class="mb-6 text-xl font-bold text-gray-900 font-jakarta">{{ __('messages.contact.info.title') }}</h2>

                    <div class="space-y-5">
                        <div class="flex items-start">
                            <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 mr-3 text-emerald-600 bg-emerald-100 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold text-gray-900">{{ __('messages.contact.info.phone') }}</h4>
                                <p class="mt-0.5 text-sm text-gray-600">+40 734 411 115</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 mr-3 text-emerald-600 bg-emerald-100 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold text-gray-900">{{ __('messages.contact.info.email') }}</h4>
                                <p class="mt-0.5 text-sm text-gray-600">contact@clickstudios-digital.com</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 mr-3 text-emerald-600 bg-emerald-100 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold text-gray-900">{{ __('messages.contact.info.address') }}</h4>
                                <p class="mt-0.5 text-sm text-gray-600">Nisiparilor 35, Baia Mare, 430122, Romania</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 mr-3 text-emerald-600 bg-emerald-100 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold text-gray-900">{{ __('messages.contact.info.hours') }}</h4>
                                <p class="mt-0.5 text-sm text-gray-600">{{ __('messages.contact.info.hours_value') }}</p>
                            </div>
                        </div>
                    </div>

                    {{-- Social Media Links --}}
                    <div class="mt-6 pt-5 border-t border-gray-200/50">
                        <h4 class="mb-3 text-sm font-semibold text-gray-900">{{ __('messages.contact.info.social') }}</h4>
                        <div class="flex space-x-3">
                            <a href="https://web.facebook.com/profile.php?id=61560427317860" target="_blank"
                                class="flex items-center justify-center w-9 h-9 text-white transition-colors duration-300 bg-emerald-600 rounded-lg hover:bg-emerald-700">
                                <i class="fa-brands fa-facebook-f text-sm"></i>
                            </a>
                            <a href="https://www.instagram.com/clickstudios_digital" target="_blank"
                                class="flex items-center justify-center w-9 h-9 text-white transition-colors duration-300 rounded-lg bg-gradient-to-br from-purple-600 via-pink-600 to-orange-600 hover:from-purple-700 hover:via-pink-700 hover:to-orange-700">
                                <i class="fa-brands fa-instagram text-sm"></i>
                            </a>
                            <a href="https://github.com/ioanmihalca-click" target="_blank"
                                class="flex items-center justify-center w-9 h-9 text-white transition-colors duration-300 bg-gray-700 rounded-lg hover:bg-gray-800">
                                <i class="fa-brands fa-github text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Map --}}
                <div class="p-6 bg-gradient-to-br from-teal-50/60 to-white/80 backdrop-blur-md shadow-lg rounded-2xl border border-gray-200/50">
                    <h2 class="mb-4 text-xl font-bold text-gray-900 font-jakarta">{{ __('messages.contact.map.title') }}</h2>
                    <div class="h-[260px] rounded-xl overflow-hidden ring-1 ring-gray-900/10">
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
