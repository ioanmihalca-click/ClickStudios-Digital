<div x-data="{ modalIsOpen: false }" class="p-4">
    <button @click="modalIsOpen = true" type="button"
        class="cursor-pointer whitespace-nowrap rounded-xl bg-blue-500 px-4 py-2 text-center text-sm font-medium tracking-wide text-slate-100 transition hover:opacity-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0">Contact</button>
    <div x-cloak x-show="modalIsOpen" x-transition.opacity.duration.200ms x-trap.inert.noscroll="modalIsOpen"
        @keydown.esc.window="modalIsOpen = false" @click.self="modalIsOpen = false"
        class="fixed inset-0 z-30 flex items-end justify-center bg-black/20 p-4 pb-8 backdrop-blur-md sm:items-center lg:p-8"
        role="dialog" aria-modal="true" aria-labelledby="defaultModalTitle">
        <!-- Modal Dialog -->
        <div x-show="modalIsOpen"
    x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity"
    x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100"
    class="flex w-4/5 md:w-3/5 lg:w-1/2 max-h-[80vh] flex-col gap-4 overflow-hidden rounded-xl border border-slate-300 bg-white text-slate-700"> 
    

            <!-- Dialog Header -->
            <div
                class="flex items-center justify-between border-b border-slate-300 bg-slate-100/60 p-4">
                <h3 id="defaultModalTitle" class="font-semibold tracking-wide text-black">Contacteaza-ne:
                </h3>
                <button @click="modalIsOpen = false" aria-label="close modal">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor"
                        fill="none" stroke-width="1.4" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <!-- Dialog Body -->
            <div class="px-4 py-8">
                <form action="https://formspree.io/f/xjvndkvg" method="POST"
                    class="p-6 w-full space-y-4 bg-gray-200 rounded-2xl ">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Emailul
                            dumneavoastra:</label>
                        <input type="email" id="email" name="email"
                            class="block w-full mt-1 border-gray-700 rounded-md shadow-lg focus:ring-blue-500 focus:border-blue-500"
                            required>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Mesaj:</label>
                        <textarea id="message" name="message" rows="4"
                            class="block w-full mt-1 border-gray-700 rounded-md shadow-lg focus:ring-blue-500 focus:border-blue-500" required></textarea>
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full px-4 py-2 font-bold text-white bg-gray-700 rounded hover:bg-gray-500">Send</button>
                    </div>
                </form>
            </div>
           
        </div>
    </div>
</div>
