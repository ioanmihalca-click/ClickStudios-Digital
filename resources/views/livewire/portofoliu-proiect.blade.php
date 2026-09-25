@php
    $item = $portfolioItem;
    $locale = App::getLocale();
    $title = $item->getLocalizedTitle();
    $category = $item->getLocalizedCategory();
    $youtubeId = $item->getYoutubeVideoId();
    $websiteHost = $item->website_url ? preg_replace('/^www\./', '', (string) parse_url($item->website_url, PHP_URL_HOST)) : null;
@endphp

<div>
    <x-page-header :eyebrow="$category ?? __('messages.portfolio.case_study')"
        :meta="__('messages.menu.portfolio') . ' / ' . $title" :meta-index="$position" :meta-total="$projectCount">
        <x-slot:title>{{ $title }}</x-slot:title>
        <x-slot:subtitle>{{ $item->getLocalizedShortDescription() }}</x-slot:subtitle>

        <x-slot:aside>
            <x-status-panel :label="__('messages.portfolio.file')" :status="$item->status?->label()">
                @if ($item->status)
                    <x-status-panel.row glyph="circle" :name="__('messages.portfolio.fields.status')"
                        :meta="$item->status->label()" />
                @endif
                @if ($item->year)
                    <x-status-panel.row glyph="square" :name="__('messages.portfolio.fields.year')" :meta="$item->year" />
                @endif
                @if ($category)
                    <x-status-panel.row glyph="triangle" :name="__('messages.portfolio.fields.category')" :meta="$category" />
                @endif
                @if ($item->stack)
                    <x-status-panel.row glyph="hexagon" :name="__('messages.portfolio.fields.stack')">
                        @foreach ($item->stack as $technology)
                            <span class="px-1.5 py-[2px] border border-rule rounded-[4px] text-[10.5px] uppercase tracking-[0.04em]">
                                {{ $technology }}
                            </span>
                        @endforeach
                    </x-status-panel.row>
                @endif
                @if ($websiteHost)
                    <x-status-panel.row glyph="diamond" :name="__('messages.portfolio.fields.link')" :href="$item->website_url"
                        external>
                        <span class="text-emerald-700">{{ $websiteHost }}</span>
                        <x-arrow direction="up-right" class="w-3 h-3 text-emerald-700" />
                    </x-status-panel.row>
                @endif
            </x-status-panel>

            @if ($item->website_url)
                <x-button :href="$item->website_url" external class="w-full mt-5">
                    {{ __('messages.portfolio.visit_project') }}
                    <x-arrow direction="up-right" />
                </x-button>
            @endif
        </x-slot:aside>
    </x-page-header>

    @if ($item->image)
        <section class="max-w-[1280px] mx-auto px-6 md:px-12 pt-14">
            <figure class="overflow-hidden bg-white border border-gray-900 rounded-lg">
                <figcaption
                    class="flex items-center justify-between gap-3 px-4 py-2.5 border-b border-rule font-mono text-[10.5px] tracking-[0.16em] uppercase text-gray-400">
                    <span class="truncate">// {{ $title }}</span>
                    @if ($websiteHost)
                        <span class="shrink-0 normal-case tracking-[0.04em]">{{ $websiteHost }}</span>
                    @endif
                </figcaption>
                <div class="aspect-video overflow-hidden">
                    <img src="{{ Storage::url($item->image) }}" alt="{{ $title }}" class="object-cover w-full h-full">
                </div>
            </figure>
        </section>
    @endif

    <section class="max-w-[1280px] mx-auto px-6 md:px-12 py-14 border-b border-rule">
        <div @class(['grid grid-cols-1 gap-10 lg:gap-12', 'lg:grid-cols-[minmax(0,1fr)_340px]' => $youtubeId])>
            <article
                class="min-w-0 bg-white border border-gray-900 rounded-lg px-[22px] py-8 md:px-10 md:py-10
                       prose prose-gray max-w-none
                       [&>h2:first-child]:mt-0
                       prose-headings:font-mono prose-headings:uppercase prose-headings:text-gray-900
                       prose-h2:mt-12 prose-h2:mb-4 prose-h2:text-[12.5px] prose-h2:font-bold prose-h2:tracking-[0.14em] prose-h2:text-emerald-600 prose-h2:before:content-['//_']
                       prose-h3:text-[15px] prose-h3:tracking-[0.02em]
                       prose-p:text-[15.5px] prose-p:leading-[1.7] prose-p:text-gray-600
                       prose-li:text-[15.5px] prose-li:leading-[1.65] prose-li:text-gray-600 prose-li:marker:text-emerald-600
                       prose-strong:text-gray-900
                       prose-a:text-emerald-700 prose-a:underline-offset-2 hover:prose-a:text-emerald-800
                       prose-code:font-mono prose-code:text-[0.9em] prose-code:before:content-none prose-code:after:content-none">
                {{ $item->getLocalizedDescriptionHtml() }}
            </article>

            @if ($youtubeId)
                <aside class="self-start lg:sticky lg:top-28">
                    <x-eyebrow class="mb-3">{{ __('messages.portfolio.video_preview') }}</x-eyebrow>
                    <div class="relative overflow-hidden bg-night border border-gray-900 rounded-lg aspect-video">
                        <iframe src="https://www.youtube-nocookie.com/embed/{{ $youtubeId }}" title="{{ $title }}"
                            class="absolute inset-0 w-full h-full" loading="lazy"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </aside>
            @endif
        </div>
    </section>

    {{-- Previous / next, the site's "swipe" --}}
    <nav aria-label="{{ __('messages.menu.portfolio') }}" class="max-w-[1280px] mx-auto px-6 md:px-12 py-10">
        <div class="grid gap-4 sm:grid-cols-[1fr_auto_1fr] sm:items-center">
            @if ($previousProject)
                <a href="{{ route('portfolio.show', ['locale' => $locale, 'portfolioItem' => $previousProject->slug]) }}"
                    wire:navigate class="group flex flex-col gap-1.5 min-w-0">
                    <span class="flex items-center gap-2 font-mono text-[11px] tracking-[0.16em] uppercase text-gray-500">
                        <x-arrow direction="left" class="w-3 h-3" /> {{ __('messages.portfolio.previous') }}
                    </span>
                    <span
                        class="font-mono font-bold text-[15px] uppercase text-gray-900 truncate transition-colors group-hover:text-emerald-700">
                        {{ $previousProject->getLocalizedTitle() }}
                    </span>
                </a>
            @else
                <span></span>
            @endif

            <a href="{{ route('portfolio', ['locale' => $locale]) }}" wire:navigate
                class="justify-self-start sm:justify-self-center font-mono text-[11px] tracking-[0.16em] uppercase text-gray-500 transition-colors hover:text-gray-900">
                {{ __('messages.portfolio.all_projects') }}
            </a>

            @if ($nextProject)
                <a href="{{ route('portfolio.show', ['locale' => $locale, 'portfolioItem' => $nextProject->slug]) }}"
                    wire:navigate class="group flex flex-col gap-1.5 min-w-0 sm:items-end sm:text-right">
                    <span class="flex items-center gap-2 font-mono text-[11px] tracking-[0.16em] uppercase text-gray-500">
                        {{ __('messages.portfolio.next') }} <x-arrow class="w-3 h-3" />
                    </span>
                    <span
                        class="max-w-full font-mono font-bold text-[15px] uppercase text-gray-900 truncate transition-colors group-hover:text-emerald-700">
                        {{ $nextProject->getLocalizedTitle() }}
                    </span>
                </a>
            @endif
        </div>
    </nav>

    <x-cta-band :title="__('messages.portfolio.cta.title')" :subtitle="__('messages.portfolio.cta.subtitle')"
        :button="__('messages.portfolio.cta.button')" />
</div>
