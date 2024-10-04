<div x-data="{ slideOverOpen: false }" class="relative z-50 w-auto h-auto">
    <button @click="slideOverOpen=true" class="flex items-center px-4 py-2 text-sm font-medium tracking-wider text-white uppercase transition-all duration-300 rounded-r-lg shadow-lg bg-emerald-500 hover:bg-emerald-600 focus:outline-none font-roboto-condensed">
        <span class="mr-2">Blog Audio</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </button>

    <template x-teleport="body">
        <div x-show="slideOverOpen" @keydown.window.escape="slideOverOpen=false" class="relative z-[99]">
            <div x-show="slideOverOpen" x-transition.opacity.duration.600ms @click="slideOverOpen = false" class="fixed inset-0 bg-black bg-opacity-50"></div>
            <div class="fixed inset-0 overflow-hidden">
                <div class="absolute inset-0 overflow-hidden">
                    <div class="fixed inset-y-0 left-0 flex max-w-full pr-10">
                        <div x-show="slideOverOpen" @click.away="slideOverOpen = false" x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="w-screen max-w-md">
                            <div class="flex flex-col h-full py-6 overflow-y-auto bg-black border-r shadow-lg bg-opacity-90 border-emerald-500">
                                <div class="px-4 sm:px-6">
                                    <div class="flex items-start justify-end">
                                        {{-- <h2 class="text-2xl font-semibold leading-6 text-gray-900 font-roboto-condensed" id="slide-over-title">Articole audio recente</h2> --}}
                                        <div class="flex items-center ml-3 h-7">
                                            <button @click="slideOverOpen=false" class="text-emerald-500 hover:text-emerald-700">
                                                <span class="sr-only">Close panel</span>
                                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="relative flex-1 px-4 mx-auto mt-6 sm:px-6">
                                    <!-- Livewire content -->
                                    <livewire:latest-audio-posts />
                                    <!-- End Livewire content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>
</div>
