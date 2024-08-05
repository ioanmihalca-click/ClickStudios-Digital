<div>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4">Blog</h1>

        @if ($posts->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($posts as $post)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        @if ($post->imagine_principala)
                            <img src="{{ asset('storage/' . $post->imagine_principala) }}" alt="{{ $post->titlu }}" class="w-full h-auto object-cover">
                        @endif
                        <div class="p-6">
                            <h2 class="text-xl font-semibold mb-2">
                                <a href="{{ route('postari.show', $post->slug) }}" class="text-gray-900 hover:text-blue-800">{{ $post->titlu }}</a>
                            </h2>
                            <p class="text-gray-600 mb-4">{{ $post->meta_descriere }}</p>
                            <div class="flex flex-wrap gap-2">
                                @foreach ($post->tags as $tag)
                                    <a href="{{ route('etichete.show', $tag->slug) }}" class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 hover:bg-blue-200">{{ $tag->nume }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-8">
                {{ $posts->links() }}
            </div>
        @else
            <p class="text-gray-600">Nu există postări disponibile momentan.</p>
        @endif
    </div>
</div>