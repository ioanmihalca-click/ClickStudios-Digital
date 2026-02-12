<div>
    <div class="max-w-5xl mx-auto px-4">

        {{-- Hero Section --}}
        <section class="max-w-[280px] ml-auto md:max-w-none md:mx-0 pt-24">
            <h1 class="mb-1 text-lg md:text-4xl lg:text-5xl uppercase tracking-wide leading-none font-jakarta font-extrabold">
                <span class="text-emerald-700">{{ __('messages.contact.title') }}</span>
                <span class="text-gray-900">{{ __('messages.contact.title_gradient') }}</span>
            </h1>

            <p class="max-w-xl mb-3 text-sm text-gray-600 md:text-lg leading-snug">
                {{ __('messages.contact.subtitle') }}
            </p>
        </section>

        {{-- Contact Form --}}
        <div class="mt-8 pb-16 max-w-[280px] ml-auto md:max-w-none">
            <div class="p-6 bg-gradient-to-br from-teal-50/60 to-white/80 backdrop-blur-md shadow-lg rounded-2xl border border-gray-200/50">

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

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
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

                        <div>
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
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
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

                        <div>
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

                    <div class="flex justify-center">
                    <button type="submit"
                        class="px-12 py-3 text-white rounded-full bg-emerald-600 hover:bg-emerald-700 transition-colors duration-300 uppercase font-bold tracking-widest text-sm font-jakarta"
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
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
