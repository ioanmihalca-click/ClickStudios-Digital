{{-- Dark closing band with a title, a subtitle and the emerald button to /contact. --}}
@props(['title', 'subtitle', 'button'])

<section {{ $attributes->class('bg-night') }}>
    <div class="flex flex-wrap items-center justify-between gap-8 max-w-[1280px] mx-auto px-6 md:px-12 py-14">
        <div>
            <div class="mb-3 font-mono text-[11px] tracking-[0.16em] uppercase text-night-muted">
                // {{ __('messages.menu.contact') }}
            </div>
            <div class="mb-2 font-mono font-extrabold text-[24px] md:text-[28px] leading-[1.2] uppercase text-emerald-50 text-balance">
                {{ $title }}
            </div>
            <div class="text-[14.5px] text-night-muted">
                {{ $subtitle }}
            </div>
        </div>

        <x-button variant="emerald" :href="route('contact', ['locale' => App::getLocale()])" class="max-w-full text-center">
            {{ $button }}
            <x-arrow />
        </x-button>
    </div>
</section>
