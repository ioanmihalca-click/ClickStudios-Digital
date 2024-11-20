<div class="py-4">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h3 class="text-2xl font-roboto-condensed uppercase tracking-[4px] text-center text-gray-900 mb-10">
            Proiecte recente
        </h3>
        
        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
            @foreach($projects as $project)
                <div class="overflow-hidden transition duration-300 transform bg-white rounded-lg shadow-lg hover:scale-105">
                    <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" 
                         class="object-cover w-full h-48">
                    
                    <div class="p-6">
                        <h4 class="mb-2 text-xl font-bold font-roboto-condensed">{{ $project['title'] }}</h4>
                        <p class="mb-4 text-gray-600">{{ $project['description'] }}</p>
                        
                        <div class="flex flex-wrap gap-2 mb-4">
                            @foreach($project['technologies'] as $tech)
                                <span class="px-2 py-1 text-xs rounded bg-emerald-100 text-emerald-800">
                                    {{ $tech }}
                                </span>
                            @endforeach
                        </div>
                        
                        <a href="{{ $project['url'] }}" 
                           class="inline-block px-4 py-2 text-white transition duration-300 rounded bg-emerald-600 hover:bg-emerald-700">
                            Vezi Proiectul
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>