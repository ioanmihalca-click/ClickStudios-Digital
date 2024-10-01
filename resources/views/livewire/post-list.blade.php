<div class="container px-4 py-12 mx-auto">
    <h1 class="mb-12 text-4xl font-bold text-center text-gray-800">Articole pe Blog</h1>

    @if ($posts->count() > 0)
        <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($posts as $post)
                <div class="overflow-hidden transition duration-300 ease-in-out transform bg-white rounded-lg shadow-lg hover:-translate-y-2 hover:shadow-xl">
                    @if ($post->imagine_principala)
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('storage/' . $post->imagine_principala) }}" alt="{{ $post->titlu }}" class="object-cover w-full h-auto transition-transform duration-300 transform hover:scale-110">
                        </div>
                    @endif
                    <div class="p-6">
                        <h2 class="mb-3 text-xl font-semibold">
                            <a href="{{ route('postari.show', $post->slug) }}" class="text-gray-900 transition duration-300 ease-in-out hover:text-emerald-600 line-clamp-2">{{ $post->titlu }}</a>
                        </h2>
                        <p class="mb-4 text-gray-600 line-clamp-3">{{ Str::limit($post->meta_descriere, 120) }}</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            {{-- @foreach ($post->tags as $tag)
                                <a href="{{ route('etichete.show', $tag->slug) }}" class="px-2.5 py-0.5 text-xs font-medium text-blue-800 bg-blue-100 rounded-full hover:bg-blue-200 transition duration-300 ease-in-out">{{ $tag->nume }}</a>
                            @endforeach --}}
                        </div>
                        <a href="{{ route('postari.show', $post->slug) }}" class="inline-block px-4 py-2 font-semibold text-white transition duration-300 ease-in-out rounded-lg bg-emerald-600 hover:bg-emerald-500">
                            Citește mai mult
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-12">
            {{ $posts->links() }}
        </div>
    @else
        <p class="text-xl text-center text-gray-600">Nu există postări disponibile momentan.</p>
    @endif
</div>