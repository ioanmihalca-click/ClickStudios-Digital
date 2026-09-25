<div>
    <x-page-header :eyebrow="__('messages.about.title')">
        <x-slot:title>{{ __('messages.about.subtitle') }}</x-slot:title>
    </x-page-header>

    <section class="grid md:grid-cols-[minmax(0,1fr)_300px] gap-12 max-w-[1280px] mx-auto px-6 md:px-12 py-14">
        <div class="max-w-[680px]">
            <h2 class="mb-8 font-mono font-extrabold text-[20px] md:text-[24px] uppercase tracking-[-0.01em]">
                {{ __('messages.about.heading') }}
            </h2>

            <blockquote class="m-0 font-newsreader italic">
                <div class="flex flex-col gap-6 text-[22px] md:text-[24px] leading-[1.55] text-gray-700 text-pretty">
                    <p>{{ __('messages.about.paragraph_1') }}</p>
                    <p>{{ __('messages.about.paragraph_2') }}</p>
                    <p>{{ __('messages.about.paragraph_3') }}</p>
                </div>

                <p
                    class="mt-10 py-8 border-y border-rule text-[24px] md:text-[26px] leading-[1.35] text-emerald-700 text-balance">
                    {{ __('messages.about.closing') }}
                </p>
            </blockquote>
        </div>

        <div class="pt-8 border-t border-rule md:pt-0 md:border-t-0 md:pl-8 md:border-l">
            <div class="font-mono font-bold text-[14px] uppercase tracking-[0.02em]">
                {{ __('messages.about.signature_name') }}
            </div>
            <div class="text-[12.5px] text-gray-500 mt-[3px]">
                {{ __('messages.about.signature_role') }}
            </div>
            <div class="text-[12.5px] text-gray-500">
                {{ __('messages.about.signature_company') }}
            </div>
        </div>
    </section>
</div>
