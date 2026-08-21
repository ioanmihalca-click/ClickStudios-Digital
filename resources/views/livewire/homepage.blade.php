@php
    $credentials = ['laravel', 'ai', 'partnership'];
    $serviceKeys = ['infrastructure', 'ai', 'ui_ux', 'ecommerce', 'maintenance'];
@endphp

<div>
    {{-- Hero --}}
    <header id="top"
        class="grid md:grid-cols-[minmax(0,1fr)_300px] gap-12 max-w-[1280px] mx-auto px-6 md:px-12 pt-20 pb-18 border-b border-rule">
        <div>
            <div class="font-mono text-xs tracking-[0.14em] uppercase text-emerald-600 mb-[22px]">
                {{ __('messages.hero.eyebrow') }}
            </div>

            <h1
                class="mb-[26px] font-jakarta font-extrabold text-[34px] md:text-[clamp(44px,5.5vw,74px)] leading-[1.02] tracking-[-0.02em] uppercase text-gray-900 text-balance">
                {{ __('messages.hero.title') }}
                <span class="italic text-emerald-600">{{ __('messages.hero.title-gradient') }}.</span>
            </h1>

            <p class="mb-9 max-w-[540px] text-[17px] leading-[1.6] text-gray-600 text-pretty">
                {{ __('messages.hero.subtitle') }}
            </p>

            <div class="flex flex-wrap items-center gap-4">
                <a href="{{ route('contact', ['locale' => App::getLocale()]) }}" wire:navigate
                    class="inline-flex items-center gap-[9px] bg-night text-emerald-50 hover:text-emerald-50 font-semibold text-[14.5px] px-[30px] py-[15px] rounded-[4px] shadow-[3px_3px_0_#059669] transition-all duration-[120ms] hover:shadow-[1px_1px_0_#059669] hover:translate-x-[2px] hover:translate-y-[2px]">
                    {{ __('messages.hero.contact_button') }}
                </a>
                <a href="{{ route('portfolio', ['locale' => App::getLocale()]) }}" wire:navigate
                    class="inline-flex items-center gap-[9px] bg-white border border-night text-night hover:text-night font-semibold text-[14.5px] px-7 py-[14px] rounded-[4px] transition-all duration-[120ms] hover:shadow-[3px_3px_0_#d1d5db]">
                    {{ __('messages.hero.portfolio_button') }}
                </a>
            </div>
        </div>

        {{-- Credentials rail --}}
        <div
            class="flex flex-col justify-end gap-[22px] pt-8 border-t border-rule md:pt-0 md:border-t-0 md:pl-8 md:border-l">
            @foreach ($credentials as $credential)
                <div>
                    <div class="font-jakarta font-bold text-[15px]">
                        {{ __("messages.hero.credentials.$credential.title") }}
                    </div>
                    <div class="text-[12.5px] text-gray-500 mt-[3px]">
                        {{ __("messages.hero.credentials.$credential.note") }}
                    </div>
                </div>
            @endforeach
        </div>
    </header>

    {{-- Featured projects --}}
    <livewire:featured-apps />

    {{-- Services --}}
    <section id="servicii" class="max-w-[1280px] mx-auto px-6 md:px-12 py-14">
        <div class="font-mono text-xs tracking-[0.14em] uppercase text-emerald-600 mb-2">
            {{ __('messages.menu.services') }}
        </div>
        <h2 class="mb-5 font-jakarta font-extrabold text-[26px] uppercase">
            {{ __('messages.services.home_title') }}
        </h2>

        <div class="flex flex-col">
            @foreach ($serviceKeys as $index => $serviceKey)
                @php
                    $delivery = __("messages.services.categories.$serviceKey.delivery");
                    $meta = is_array($delivery) ? implode(' · ', array_slice($delivery, 0, 2)) : '';
                @endphp
                <div
                    @class([
                        'grid grid-cols-[40px_1fr] md:grid-cols-[64px_1fr_auto] gap-x-5 gap-y-1 md:items-baseline py-[18px] border-t border-rule transition-colors hover:bg-row-hover',
                        'border-b' => $loop->last,
                    ])>
                    <span class="font-mono text-[13px] text-gray-400">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                    <span class="font-jakarta font-bold text-[17px]">
                        {{ __("messages.services.categories.$serviceKey.title") }}
                    </span>
                    <span class="col-start-2 md:col-start-auto text-[12.5px] text-gray-500">{{ $meta }}</span>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Closing CTA --}}
    <section id="contact" class="bg-night">
        <div
            class="flex flex-wrap items-center justify-between gap-8 max-w-[1280px] mx-auto px-6 md:px-12 py-14">
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
