@php
    $categories = ['infrastructure', 'ai', 'ui_ux', 'ecommerce', 'maintenance'];
@endphp

<div>
    <header class="max-w-[1280px] mx-auto px-6 md:px-12 pt-20 pb-14 border-b border-rule">
        <div class="font-mono text-xs tracking-[0.14em] uppercase text-emerald-600 mb-[22px]">
            {{ __('messages.menu.services') }}
        </div>
        <h1
            class="font-jakarta font-extrabold text-[30px] md:text-[clamp(40px,4.5vw,60px)] leading-[1.05] tracking-[-0.02em] uppercase text-gray-900 text-balance">
            <span class="text-emerald-600">{{ __('messages.services.hero.title_accent') }}</span>
            {{ __('messages.services.hero.title') }}
        </h1>
        <p class="mt-6 max-w-[640px] text-[17px] leading-[1.6] text-gray-600 text-pretty">
            {{ __('messages.services.hero.subtitle') }}
        </p>
    </header>

    <section class="max-w-[1280px] mx-auto px-6 md:px-12 py-14">
        @foreach ($categories as $index => $key)
            <div
                @class([
                    'grid grid-cols-[40px_minmax(0,1fr)] md:grid-cols-[64px_minmax(0,1fr)_280px] gap-x-5 gap-y-6 py-10 border-t border-rule',
                    'border-b' => $loop->last,
                ])>
                <span class="font-mono text-[13px] text-gray-400">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>

                <div>
                    <h2 class="mb-3 font-jakarta font-bold text-[20px]">
                        {{ __("messages.services.categories.$key.title") }}
                    </h2>
                    <p class="max-w-[560px] text-[15px] leading-[1.6] text-gray-600 text-pretty">
                        {{ __("messages.services.categories.$key.description") }}
                    </p>
                </div>

                <div class="col-start-2 md:col-start-auto">
                    <div class="mb-3 font-mono text-xs tracking-[0.14em] uppercase text-emerald-600">
                        {{ __('messages.services.delivery_label') }}
                    </div>
                    <ul class="flex flex-col gap-2">
                        @foreach (__("messages.services.categories.$key.delivery") as $deliverable)
                            <li class="text-[13px] leading-[1.4] text-gray-500">{{ $deliverable }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
    </section>

    <section class="bg-night">
        <div class="flex flex-wrap items-center justify-between gap-8 max-w-[1280px] mx-auto px-6 md:px-12 py-14">
            <div>
                <div class="mb-2 font-jakarta font-extrabold text-[30px] text-emerald-50 text-balance">
                    {{ __('messages.services.cta.title') }}
                </div>
                <div class="text-[14.5px] text-night-muted">
                    {{ __('messages.services.cta.subtitle') }}
                </div>
            </div>
            <a href="{{ route('contact', ['locale' => App::getLocale()]) }}" wire:navigate
                class="flex-none inline-flex items-center gap-[9px] bg-emerald-500 text-on-emerald hover:text-on-emerald font-bold text-[14.5px] px-8 py-4 rounded-[4px] shadow-[3px_3px_0_rgba(240,253,244,0.9)] transition-all duration-[120ms] hover:shadow-[1px_1px_0_rgba(240,253,244,0.9)] hover:translate-x-[2px] hover:translate-y-[2px]">
                {{ __('messages.services.cta.button') }}
            </a>
        </div>
    </section>
</div>
