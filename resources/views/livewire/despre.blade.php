<div>
    <div class="max-w-5xl mx-auto px-4 pt-10 md:pt-16">

        {{-- Hero Section --}}
        <section class="max-w-[280px] ml-auto md:max-w-none md:mx-0 mt-10 md:mt-6">
            <h1
                class="mb-0.5 md:mb-1 text-lg md:text-4xl lg:text-5xl uppercase tracking-wide leading-none font-jakarta font-extrabold text-emerald-700">
                {{ __('messages.about.title') }}
            </h1>

            <h2
                class="text-lg md:text-2xl lg:text-3xl font-bold text-gray-900 uppercase tracking-wide leading-[1.1] font-jakarta">
                {{ __('messages.about.subtitle') }}
            </h2>
        </section>

        {{-- Content Card --}}
        <div class="mt-3 md:mt-8 pb-12 md:pb-16 max-w-[280px] ml-auto md:max-w-none">
            <div
                class="relative p-4 md:p-6 bg-gradient-to-br from-teal-50/60 to-white/80 backdrop-blur-md shadow-lg rounded-2xl border border-gray-200/50">

                {{-- Opening quote mark --}}
                <span
                    class="absolute -top-3 left-4 md:-top-4 md:left-5 text-5xl md:text-7xl font-bold text-emerald-500/40 leading-none font-jakarta select-none">&ldquo;</span>

                <div class="space-y-4 md:space-y-6 pt-4 md:pt-6">

                    <p class="text-xs md:text-sm text-gray-700 leading-relaxed">
                        {{ __('messages.about.paragraph_1') }}
                    </p>

                    <p class="text-xs md:text-sm text-gray-700 leading-relaxed">
                        {{ __('messages.about.paragraph_2') }}
                    </p>

                    <p class="text-xs md:text-sm text-gray-700 leading-relaxed">
                        {{ __('messages.about.paragraph_3') }}
                    </p>

                    <p class="text-xs md:text-sm font-bold text-emerald-700 italic">
                        {{ __('messages.about.closing') }}
                    </p>
                </div>

                {{-- Closing quote mark --}}
                <span
                    class="block text-right text-5xl md:text-7xl font-bold text-emerald-500/40 leading-none font-jakarta select-none -mb-2">&rdquo;</span>

                {{-- Signature --}}
                <div class="mt-2 md:mt-3 pt-4 md:pt-6 border-t border-gray-200/50">
                    <p class="text-sm md:text-base font-bold text-gray-900 font-jakarta">
                        {{ __('messages.about.signature_name') }}
                    </p>
                    <p class="text-xs md:text-sm text-gray-500">
                        {{ __('messages.about.signature_role') }}
                    </p>
                    <p class="text-xs md:text-sm text-gray-500">
                        {{ __('messages.about.signature_company') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
