@php
    $business = config('site.business');
@endphp

<div>
    <x-page-header :eyebrow="__('messages.contact.tagline')">
        <x-slot:title>
            {{ __('messages.contact.title') }}
            <span class="text-emerald-600">{{ __('messages.contact.title_gradient') }}</span>
        </x-slot:title>
        <x-slot:subtitle>{{ __('messages.contact.subtitle') }}</x-slot:subtitle>

        <x-slot:aside>
            <x-status-panel :label="__('messages.contact.info.title')">
                <x-status-panel.row glyph="triangle" :name="__('messages.contact.info.email')"
                    :href="'mailto:' . $business['email']">
                    <span class="text-emerald-700 break-all">{{ $business['email'] }}</span>
                </x-status-panel.row>
                <x-status-panel.row glyph="square" :name="__('messages.contact.info.phone')"
                    :href="'tel:' . $business['phone']" :meta="$business['phone_display']" />
                <x-status-panel.row glyph="circle" :name="__('messages.contact.info.address')"
                    :meta="$business['street'] . ', ' . $business['locality']" />
                <x-status-panel.row glyph="hexagon" :name="__('messages.contact.info.hours')"
                    :meta="__('messages.contact.info.hours_value')" />
            </x-status-panel>
        </x-slot:aside>
    </x-page-header>

    <section class="max-w-[1280px] mx-auto px-6 md:px-12 py-14">
        <div class="max-w-[720px]">

            @if ($success)
                <div
                    class="flex items-start gap-3 p-4 mb-8 text-[14.5px] text-emerald-800 bg-emerald-50 border border-emerald-600 rounded-[4px]">
                    <svg class="w-5 h-5 shrink-0 mt-px" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <p>{{ __('messages.contact.form.success') }}</p>
                </div>
            @endif

            @if ($error)
                <div
                    class="flex items-start gap-3 p-4 mb-8 text-[14.5px] text-red-800 bg-red-50 border border-red-600 rounded-[4px]">
                    <svg class="w-5 h-5 shrink-0 mt-px" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <p>{{ __('messages.contact.form.error') }}</p>
                </div>
            @endif

            <form wire:submit="submit">
                {{-- Honeypot --}}
                <div style="position:absolute;left:-9999px;" aria-hidden="true">
                    <input type="text" wire:model="website" tabindex="-1" autocomplete="off">
                </div>

                <div class="grid md:grid-cols-2 gap-5 mb-5">
                    <div>
                        <label for="name" class="block mb-2 text-[12.5px] font-medium text-gray-600">
                            {{ __('messages.contact.form.name') }}
                        </label>
                        <input type="text" id="name" wire:model="name"
                            placeholder="{{ __('messages.contact.form.name_placeholder') }}"
                            class="w-full px-4 py-3 text-[14.5px] text-gray-900 bg-white border border-rule rounded-[4px] transition-colors focus:border-emerald-600 focus:ring-1 focus:ring-emerald-600 focus:outline-none">
                        @error('name')
                            <span class="block mt-1.5 text-[12.5px] text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block mb-2 text-[12.5px] font-medium text-gray-600">
                            {{ __('messages.contact.form.email') }}
                        </label>
                        <input type="email" id="email" wire:model="email"
                            placeholder="{{ __('messages.contact.form.email_placeholder') }}"
                            class="w-full px-4 py-3 text-[14.5px] text-gray-900 bg-white border border-rule rounded-[4px] transition-colors focus:border-emerald-600 focus:ring-1 focus:ring-emerald-600 focus:outline-none">
                        @error('email')
                            <span class="block mt-1.5 text-[12.5px] text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-5 mb-5">
                    <div>
                        <label for="phone" class="block mb-2 text-[12.5px] font-medium text-gray-600">
                            {{ __('messages.contact.form.phone') }}
                        </label>
                        <input type="text" id="phone" wire:model="phone"
                            placeholder="{{ __('messages.contact.form.phone_placeholder') }}"
                            class="w-full px-4 py-3 text-[14.5px] text-gray-900 bg-white border border-rule rounded-[4px] transition-colors focus:border-emerald-600 focus:ring-1 focus:ring-emerald-600 focus:outline-none">
                        @error('phone')
                            <span class="block mt-1.5 text-[12.5px] text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="subject" class="block mb-2 text-[12.5px] font-medium text-gray-600">
                            {{ __('messages.contact.form.subject') }}
                        </label>
                        <input type="text" id="subject" wire:model="subject"
                            placeholder="{{ __('messages.contact.form.subject_placeholder') }}"
                            class="w-full px-4 py-3 text-[14.5px] text-gray-900 bg-white border border-rule rounded-[4px] transition-colors focus:border-emerald-600 focus:ring-1 focus:ring-emerald-600 focus:outline-none">
                        @error('subject')
                            <span class="block mt-1.5 text-[12.5px] text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="mb-8">
                    <label for="message" class="block mb-2 text-[12.5px] font-medium text-gray-600">
                        {{ __('messages.contact.form.message') }}
                    </label>
                    <textarea id="message" wire:model="message" rows="6"
                        placeholder="{{ __('messages.contact.form.message_placeholder') }}"
                        class="w-full px-4 py-3 text-[14.5px] text-gray-900 bg-white border border-rule rounded-[4px] transition-colors focus:border-emerald-600 focus:ring-1 focus:ring-emerald-600 focus:outline-none"></textarea>
                    @error('message')
                        <span class="block mt-1.5 text-[12.5px] text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" wire:loading.attr="disabled" wire:loading.class="opacity-75"
                    class="inline-flex items-center gap-[10px] bg-night text-emerald-50 font-mono font-bold text-[13px] uppercase tracking-[0.06em] px-[26px] py-[15px] rounded-[4px] shadow-[3px_3px_0_#059669] transition-all duration-[120ms] hover:shadow-[1px_1px_0_#059669] hover:translate-x-[2px] hover:translate-y-[2px]">
                    <span wire:loading.remove>{{ __('messages.contact.form.submit') }}</span>
                    <span wire:loading class="inline-flex items-center gap-2">
                        <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                            </path>
                        </svg>
                        {{ __('messages.contact.form.submitting') }}
                    </span>
                </button>
            </form>
        </div>
    </section>
</div>
