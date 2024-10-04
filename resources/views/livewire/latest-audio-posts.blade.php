<div class="p-4">
    <h2 class="mb-8 text-xl font-bold text-center text-white uppercase font-roboto-condensed">Articole audio recente</h2>
    <div class="flex flex-col max-w-xs space-y-4 overflow-y-hidden"> <!-- am schimbat in flex-col si space-y-4 -->
        @foreach($latestPosts as $post)
            <a href="{{ route('postari.show', $post->slug) }}" class="flex-shrink-0 w-72">
                <img src="{{ asset('storage/' . $post->imagine_principala) }}" alt="{{ $post->titlu }}" class="object-cover h-auto mb-2 rounded w-72">
                <h3 class="text-sm font-semibold text-white truncate">{{ $post->titlu }}</h3>
                <p class="text-xs text-gray-100">{{ $post->published_at->format('d M Y') }}</p>
            </a>
        @endforeach
    </div>
</div>
