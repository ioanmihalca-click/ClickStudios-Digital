
<div 
    x-data="{ fullscreenModal: false }"
    x-init="
    $watch('fullscreenModal', function(value){
            if(value === true){
                document.body.classList.add('overflow-hidden');
            }else{
                document.body.classList.remove('overflow-hidden');
            }
        })
    "
    @keydown.escape="fullscreenModal=false"
    >
    <button @click="fullscreenModal=true" class="inline-flex items-center justify-center h-10 px-4 py-2 text-base font-medium tracking-wide text-white transition-colors border rounded-md font-roboto-condensed hover:bg-emerald-700 focus:bg-emerald-500">Contacteaza-ne</button>
    <template x-teleport="body">

        <div 
            x-show="fullscreenModal"
            x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="flex fixed inset-0 z-[99] w-screen h-screen bg-white"
            >
            <button @click="fullscreenModal=false" class="absolute top-0 right-0 z-30 flex items-center justify-center px-3 py-2 mt-3 mr-3 space-x-1 text-xs font-medium uppercase border rounded-md border-neutral-200 text-neutral-600 hover:bg-neutral-100">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                <span>Inchide</span>
            </button>
            <div class="relative top-0 bottom-0 right-0 flex-shrink-0 hidden w-1/3 overflow-hidden bg-cover lg:block">
                <a href="#_" class="absolute bottom-0 left-0 z-30 inline-flex items-end mb-4 ml-3 font-sans text-2xl font-extrabold text-left text-white no-underline bg-transparent cursor-pointer group focus:no-underline">
         
                    <span class="flex opacity-90 group-hover:scale-150 group-hover:opacity-100 items-center h-full group-hover:-rotate-6 ease-out duration-500 px-0.5 py-px ml-2 -translate-x-px text-sm uppercase font-roboto-condensed font-bold leading-none border-[2px] rounded border-white -translate-y-px">Click Studios Digital</span>
                </a>
                <div class="absolute inset-0 z-20 w-full h-full opacity-70 bg-gradient-to-t from-black"></div>
                <img src="https://cdn.devdojo.com/images/may2023/pines-bg-1.png" class="z-10 object-cover w-full h-full" />
            </div>
            <div class="relative flex flex-wrap items-center w-full h-full px-8">
                    
                <div class="relative w-full max-w-3xl mx-auto lg:mb-0">
                    <div class="relative text-center">
                        

                        <form action="https://formspree.io/f/xjvndkvg" method="POST"
    class="w-full p-6 space-y-4 bg-gray-100 shadow-md rounded-2xl">
    <h2 class="mb-4 text-2xl font-bold text-emerald-700">Contactați-ne</h2>
    <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Adresa dvs. de email:</label>
        <input type="email" id="email" name="email"
            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500"
            required>
    </div>
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Numele dvs.:</label>
        <input type="text" id="name" name="name"
            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500"
            required>
    </div>
    <div>
        <label for="message" class="block text-sm font-medium text-gray-700">Mesajul dvs.:</label>
        <textarea id="message" name="message" rows="4"
            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500" required></textarea>
    </div>
    <div>
        <button type="submit"
            class="w-full px-4 py-2 font-bold text-white transition duration-300 rounded bg-emerald-600 hover:bg-emerald-700">Trimite mesajul</button>
    </div>
</form>

                </div>
            </div>
        </div>
        
    </template>
</div>


              
          
          