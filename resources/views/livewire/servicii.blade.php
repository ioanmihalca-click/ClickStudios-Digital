@php
    $categories = ['infrastructure', 'ai', 'ui_ux', 'ecommerce', 'maintenance'];
@endphp

<div>
    <x-page-header :eyebrow="__('messages.menu.services')">
        <x-slot:title>
            <span class="text-emerald-600">{{ __('messages.services.hero.title_accent') }}</span>
            {{ __('messages.services.hero.title') }}
        </x-slot:title>
        <x-slot:subtitle>{{ __('messages.services.hero.subtitle') }}</x-slot:subtitle>
    </x-page-header>

    <section class="max-w-[1280px] mx-auto px-6 md:px-12 py-14">
        @foreach ($categories as $index => $key)
            <div
                @class([
                    'grid grid-cols-[40px_minmax(0,1fr)] md:grid-cols-[64px_minmax(0,1fr)_280px] gap-x-5 gap-y-6 py-10 border-t border-rule',
                    'border-b' => $loop->last,
                ])>
                <span class="font-mono text-[13px] text-gray-400">{{ sprintf('%02d', $index + 1) }}</span>

                <div>
                    <h2 class="mb-3 font-mono font-bold text-[17px] md:text-[19px] uppercase tracking-[0.01em]">
                        {{ __("messages.services.categories.$key.title") }}
                    </h2>
                    <p class="max-w-[560px] text-[15px] leading-[1.6] text-gray-600 text-pretty">
                        {{ __("messages.services.categories.$key.description") }}
                    </p>
                </div>

                <div class="col-start-2 md:col-start-auto">
                    <x-eyebrow class="mb-3">{{ rtrim(__('messages.services.delivery_label'), ':') }}</x-eyebrow>
                    <ul class="flex flex-col gap-2">
                        @foreach (__("messages.services.categories.$key.delivery") as $deliverable)
                            <li class="flex items-center gap-2 font-mono text-[12px] uppercase tracking-[0.04em] leading-[1.4] text-gray-600">
                                <x-glyph shape="square" class="w-1.5 h-1.5 text-emerald-600" />
                                {{ $deliverable }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
    </section>

    <x-cta-band :title="__('messages.services.cta.title')" :subtitle="__('messages.services.cta.subtitle')"
        :button="__('messages.services.cta.button')" />
</div>
