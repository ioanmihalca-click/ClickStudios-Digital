@php
    $locale = App::getLocale();
    $credentials = ['laravel', 'ai', 'partnership'];
    $serviceKeys = ['infrastructure', 'ai', 'ui_ux', 'ecommerce', 'maintenance'];
    $glyphs = ['triangle', 'square', 'circle', 'hexagon', 'diamond'];
    $onlineProjects = $projects->filter(fn ($project) => $project->status?->isPubliclyAvailable() ?? filled($project->website_url));
    $panelProjects = $projects->take(5);
    $hiddenProjectCount = $projects->count() - $panelProjects->count();
@endphp

<div>
    {{-- Hero --}}
    <header id="top" class="max-w-[1280px] mx-auto px-6 md:px-12 pt-8 pb-16 border-b border-rule">
        <x-page-meta :label="__('messages.brand')" class="mb-14 md:mb-16" />

        <div class="grid grid-cols-1 gap-12 lg:grid-cols-[minmax(0,1fr)_340px]">
            <div>
                <x-eyebrow class="mb-[22px]">{{ __('messages.hero.eyebrow') }}</x-eyebrow>

                <h1
                    class="mb-[26px] font-mono font-extrabold text-[28px] md:text-[clamp(40px,4.6vw,64px)] leading-[1.12] md:leading-[1.05] tracking-[-0.02em] uppercase text-gray-900 text-balance">
                    {{ __('messages.hero.title') }}
                    <span class="text-emerald-600">{{ __('messages.hero.title-gradient') }}.</span>
                </h1>

                <p class="mb-9 max-w-[540px] text-[17px] leading-[1.6] text-gray-600 text-pretty">
                    {{ __('messages.hero.subtitle') }}
                </p>

                <div class="flex flex-wrap items-center gap-4">
                    <x-button :href="route('contact', ['locale' => $locale])">
                        {{ __('messages.hero.contact_button') }}
                        <x-arrow />
                    </x-button>
                    <x-button variant="secondary" :href="route('portfolio', ['locale' => $locale])">
                        {{ __('messages.hero.portfolio_button') }}
                    </x-button>
                </div>

                {{-- Credentials --}}
                <dl class="grid gap-6 mt-14 pt-8 border-t border-rule sm:grid-cols-3">
                    @foreach ($credentials as $credential)
                        <div>
                            <dt class="font-mono font-bold text-[13px] uppercase tracking-[0.04em]">
                                {{ __("messages.hero.credentials.$credential.title") }}
                            </dt>
                            <dd class="mt-1 text-[12.5px] leading-[1.5] text-gray-500">
                                {{ __("messages.hero.credentials.$credential.note") }}
                            </dd>
                        </div>
                    @endforeach
                </dl>
            </div>

            {{-- Systems panel + mascot --}}
            @if ($projects->isNotEmpty())
                <div class="flex flex-col">
                    <x-dither-orb class="relative z-10 self-end w-[150px] -mb-3 mr-4 md:w-[176px]" />

                    <x-status-panel :label="__('messages.hero.systems')"
                        :status="__('messages.hero.online', ['count' => $onlineProjects->count()])">
                        @foreach ($panelProjects as $project)
                            <x-status-panel.row :glyph="$glyphs[$loop->index % count($glyphs)]" :name="$project->getLocalizedTitle()"
                                :meta="$project->getLocalizedCategory() ?? $project->status?->label()"
                                :href="route('portfolio.show', ['locale' => $locale, 'portfolioItem' => $project->slug])"
                                wire:key="system-{{ $project->id }}" />
                        @endforeach

                        @if ($hiddenProjectCount > 0)
                            <x-status-panel.row glyph="plus" :name="__('messages.hero.more_projects', ['count' => $hiddenProjectCount])"
                                :href="route('portfolio', ['locale' => $locale])">
                                <x-arrow class="text-emerald-700 transition-transform group-hover:translate-x-0.5" />
                            </x-status-panel.row>
                        @endif
                    </x-status-panel>
                </div>
            @endif
        </div>
    </header>

    {{-- Featured projects --}}
    <livewire:featured-apps />

    {{-- Services --}}
    <section id="servicii" class="max-w-[1280px] mx-auto px-6 md:px-12 py-14">
        <x-eyebrow class="mb-2">{{ __('messages.menu.services') }}</x-eyebrow>
        <h2 class="mb-6 font-mono font-extrabold text-[22px] md:text-[26px] uppercase tracking-[-0.01em]">
            {{ __('messages.services.home_title') }}
        </h2>

        <div class="flex flex-col">
            @foreach ($serviceKeys as $serviceKey)
                @php
                    $delivery = __("messages.services.categories.$serviceKey.delivery");
                    $meta = is_array($delivery) ? implode(' · ', array_slice($delivery, 0, 2)) : '';
                @endphp
                <a href="{{ route('services', ['locale' => $locale]) }}" wire:navigate @class([
                    'grid grid-cols-[40px_1fr] md:grid-cols-[64px_1fr_auto] gap-x-5 gap-y-1 md:items-baseline py-[18px] border-t border-rule transition-colors hover:bg-row-hover',
                    'border-b' => $loop->last,
                ])>
                    <span class="font-mono text-[13px] text-gray-400">{{ sprintf('%02d', $loop->iteration) }}</span>
                    <span class="font-mono font-bold text-[15px] md:text-[16px] uppercase tracking-[0.01em]">
                        {{ __("messages.services.categories.$serviceKey.title") }}
                    </span>
                    <span class="col-start-2 md:col-start-auto font-mono text-[11.5px] uppercase tracking-[0.06em] text-gray-500">
                        {{ $meta }}
                    </span>
                </a>
            @endforeach
        </div>
    </section>

    <x-cta-band :title="__('messages.services.cta.title')" :subtitle="__('messages.services.cta.subtitle')"
        :button="__('messages.services.cta.button')" />
</div>
