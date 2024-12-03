<div class="py-20 bg-gray-800">
    <div class="container px-4 mx-auto">
        <!-- Heading Section -->
        <div class="max-w-3xl mx-auto mb-16 text-center">
            <span class="inline-block px-4 py-1.5 mb-6 text-sm font-medium text-emerald-400 bg-emerald-500/10 rounded-full">
                Portofoliu
            </span>
            <h2 class="mb-6 text-3xl font-bold text-white md:text-4xl">
                Proiecte Recente
            </h2>
            <p class="text-gray-300">
                Descoperă cele mai recente proiecte dezvoltate de echipa noastră
            </p>
        </div>
        
        <!-- Projects Grid -->
        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
            @foreach($projects as $project)
                <div class="relative overflow-hidden transition-all duration-300 border group bg-gray-800/50 rounded-xl border-gray-700/50 hover:border-emerald-500/50">
                    <!-- Project Image with Overlay -->
                    <div class="relative overflow-hidden">
                        <img 
                            src="{{ $project['image'] }}" 
                            alt="{{ $project['title'] }}" 
                            class="object-cover w-full h-48 transition-transform duration-300 group-hover:scale-110"
                        >
                        <div class="absolute inset-0 transition-opacity duration-300 opacity-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent group-hover:opacity-100"></div>
                    </div>
                    
                    <!-- Content Section -->
                    <div class="p-6">
                        <h3 class="mb-3 text-xl font-bold text-white font-roboto-condensed">
                            {{ $project['title'] }}
                        </h3>
                        
                        <p class="mb-4 text-gray-300">
                            {{ $project['description'] }}
                        </p>
                        
                        <!-- Technologies Tags -->
                        <div class="flex flex-wrap gap-2 mb-6">
                            @foreach($project['technologies'] as $tech)
                                <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400">
                                    {{ $tech }}
                                </span>
                            @endforeach
                        </div>
                        
                        <!-- Call to Action -->
                        <a 
                            href="{{ $project['url'] }}" 
                            class="inline-flex items-center transition-colors duration-300 text-emerald-400 hover:text-emerald-300"
                        >
                            Vezi Proiectul
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>