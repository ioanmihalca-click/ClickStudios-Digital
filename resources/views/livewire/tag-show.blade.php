
<div class="container px-4 py-8 mx-auto">
    <h1 class="mb-4 text-3xl font-bold">Postări cu eticheta: {{ $tag->nume }}</h1>

    @if ($tag->posts->count() > 0)
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($tag->posts as $post)
                <div class="overflow-hidden bg-white rounded-lg shadow-md">
                    @if ($post->imagine_principala)
                        <img src="{{ asset('storage/' . $post->imagine_principala) }}" alt="{{ $post->titlu }}" class="object-cover w-full h-48">
                    @endif
                    <div class="p-6">
                        <h2 class="mb-2 text-xl font-semibold">
                            <a href="{{ route('postari.show', $post->slug) }}">{{ $post->titlu }}</a>
                        </h2>
                        <p class="mb-4 text-gray-600">{{ $post->meta_descriere }}</p>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($post->tags as $tag)
                                <a href="{{ route('etichete.show', $tag->slug) }}" class="px-3 py-1 text-sm font-medium transition duration-300 rounded-full text-emerald-700 bg-emerald-100 hover:bg-emerald-200">{{ $tag->nume }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-gray-600">Nu există postări disponibile pentru această etichetă.</p>
    @endif
</div>

