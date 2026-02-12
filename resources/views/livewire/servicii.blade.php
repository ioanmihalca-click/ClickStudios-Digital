@php
    $categories = [
        'infrastructure' =>
            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />',
        'ai' =>
            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />',
        'ui_ux' =>
            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />',
        'ecommerce' =>
            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />',
        'maintenance' =>
            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />',
    ];
@endphp

<div x-data="{
    current: 0,
    itemCount: {{ count($categories) }},
    perPage: 3,
    get maxIndex() { return Math.max(0, this.itemCount - this.perPage) },
    prev() { this.current = Math.max(0, this.current - 1) },
    next() { this.current = Math.min(this.maxIndex, this.current + 1) },
    get offset() { return this.current * (100 / this.perPage) },
    mobileActive: 0,
    updateMobileActive(event) {
        const el = event.target;
        if (!el.children.length) return;
        const card = el.children[0];
        const gap = 16;
        this.mobileActive = Math.round(el.scrollLeft / (card.offsetWidth + gap));
    }
}">
    <div class="max-w-5xl mx-auto px-4">

        {{-- Hero Section --}}
        <section class="max-w-[280px] ml-auto md:max-w-none md:mx-0 pt-24">
            <h1 class="mb-1 uppercase tracking-wide leading-none font-jakarta">
                <span class="block text-lg font-extrabold text-emerald-700 md:text-4xl lg:text-5xl">
                    {{ __('messages.services.hero.title_accent') }}
                </span>
                <span class="block text-lg font-extrabold text-gray-900 md:text-4xl lg:text-5xl">
                    {{ __('messages.services.hero.title') }}
                </span>
            </h1>

            <p class="max-w-xl mb-3 text-sm text-gray-600 md:text-lg leading-snug">
                {{ __('messages.services.hero.subtitle') }}
            </p>
        </section>

        {{-- Services Slider --}}
        <section class="mt-4 md:mt-10">
            {{-- Mobile: Horizontal scroll slider --}}
            <div class="md:hidden max-w-[280px] ml-auto">
                <div class="flex gap-4 overflow-x-auto snap-x snap-mandatory scrollbar-hide pb-6 pt-4 -mt-4"
                    x-ref="mobileTrack" @scroll.passive="updateMobileActive($event)">
                    @foreach ($categories as $key => $iconPath)
                        <div class="w-[280px] min-w-[280px] snap-start shrink-0">
                            <div
                                class="flex flex-col h-full bg-gradient-to-br from-teal-50/60 to-white/80 backdrop-blur-md shadow-lg rounded-2xl border border-gray-200/75 p-5">
                                {{-- Icon --}}
                                <div
                                    class="flex items-center justify-center w-10 h-10 mb-3 rounded-xl bg-white/70 text-emerald-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        {!! $iconPath !!}
                                    </svg>
                                </div>

                                {{-- Title --}}
                                <h3 class="mb-2 text-xs font-bold text-gray-900 uppercase tracking-wide font-jakarta">
                                    {{ __("messages.services.categories.{$key}.title") }}
                                </h3>
                                <div class="w-8 h-px bg-gray-300/80 mb-2.5"></div>

                                {{-- Description --}}
                                <p class="mb-2 text-xs text-gray-600 leading-relaxed flex-grow">
                                    {{ __("messages.services.categories.{$key}.description") }}
                                </p>

                                {{-- Delivery list --}}
                                <p class="mb-1.5 text-[10px] font-bold text-gray-900 uppercase tracking-wide">
                                    {{ __('messages.services.delivery_label') }}
                                </p>
                                <ul class="space-y-1">
                                    @foreach (__("messages.services.categories.{$key}.delivery") as $item)
                                        <li class="flex items-center gap-1.5 text-xs text-gray-600">
                                            <svg class="w-3.5 h-3.5 shrink-0 text-emerald-500" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7" />
                                            </svg>
                                            {{ $item }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Mobile dots --}}
                <div class="flex justify-center gap-2 mt-4">
                    @foreach ($categories as $index => $iconPath)
                        <button class="w-2 h-2 rounded-full transition-colors duration-300"
                            :class="mobileActive === {{ $loop->index }} ? 'bg-emerald-600' : 'bg-gray-300'"
                            @click="$refs.mobileTrack.children[{{ $loop->index }}].scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'start' })"></button>
                    @endforeach
                </div>
            </div>

            {{-- Desktop: Slider with arrows --}}
            <div class="hidden md:block relative">
                {{-- Navigation arrows --}}
                <template x-if="itemCount > perPage">
                    <div>
                        <button @click="prev()" :disabled="current === 0"
                            class="absolute -left-5 top-1/2 -translate-y-1/2 z-20 w-10 h-10 rounded-full bg-white shadow-lg border border-gray-200 flex items-center justify-center transition-opacity duration-300"
                            :class="current === 0 ? 'opacity-30 cursor-not-allowed' : 'opacity-100 hover:bg-emerald-50'">
                            <svg class="w-5 h-5 text-emerald-700" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>

                        <button @click="next()" :disabled="current >= maxIndex"
                            class="absolute -right-5 top-1/2 -translate-y-1/2 z-20 w-10 h-10 rounded-full bg-white shadow-lg border border-gray-200 flex items-center justify-center transition-opacity duration-300"
                            :class="current >= maxIndex ? 'opacity-30 cursor-not-allowed' : 'opacity-100 hover:bg-emerald-50'">
                            <svg class="w-5 h-5 text-emerald-700" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </template>

                {{-- Slider container --}}
                <div class="overflow-hidden py-6 -my-6">
                    <div class="flex -mx-3 transition-transform duration-500 ease-in-out"
                        :style="{ transform: 'translateX(-' + offset + '%)' }">
                        @foreach ($categories as $key => $iconPath)
                            <div class="w-1/3 shrink-0 px-3">
                                <div
                                    class="flex flex-col h-full bg-gradient-to-br from-teal-50/60 to-white/80 backdrop-blur-md shadow-lg rounded-2xl border border-gray-200/75 p-6">
                                    {{-- Icon --}}
                                    <div
                                        class="flex items-center justify-center w-12 h-12 mb-4 rounded-xl bg-white/70 text-emerald-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            {!! $iconPath !!}
                                        </svg>
                                    </div>

                                    {{-- Title --}}
                                    <h3
                                        class="mb-2.5 text-sm font-bold text-gray-900 uppercase tracking-wide font-jakarta">
                                        {{ __("messages.services.categories.{$key}.title") }}
                                    </h3>
                                    <div class="w-10 h-px bg-gray-300/80 mb-3"></div>

                                    {{-- Description --}}
                                    <p class="mb-2.5 text-sm text-gray-600 leading-relaxed flex-grow">
                                        {{ __("messages.services.categories.{$key}.description") }}
                                    </p>

                                    {{-- Delivery list --}}
                                    <p class="mb-2 text-xs font-bold text-gray-900 uppercase tracking-wide">
                                        {{ __('messages.services.delivery_label') }}
                                    </p>
                                    <ul class="space-y-1.5">
                                        @foreach (__("messages.services.categories.{$key}.delivery") as $item)
                                            <li class="flex items-center gap-2 text-sm text-gray-600">
                                                <svg class="w-4 h-4 shrink-0 text-emerald-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                                {{ $item }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Desktop dots --}}
                @if (count($categories) > 3)
                    <div class="flex justify-center gap-2 mt-6">
                        @for ($i = 0; $i <= count($categories) - 3; $i++)
                            <button class="w-2.5 h-2.5 rounded-full transition-colors duration-300"
                                :class="current === {{ $i }} ? 'bg-emerald-600' : 'bg-gray-300'"
                                @click="current = {{ $i }}"></button>
                        @endfor
                    </div>
                @endif
            </div>
        </section>
    </div>
</div>
