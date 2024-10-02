@section('title', $post->titlu)
@section('meta_description', $post->meta_descriere ?? Str::limit(strip_tags($post->continut), 160))
@section('og_title', $post->titlu)
@section('og_description', $post->meta_descriere ?? Str::limit(strip_tags($post->continut), 200))
@section('og_image', $post->imagine_principala ? asset('storage/' . $post->imagine_principala) : asset('path/to/default-og-image.jpg'))
@section('og_type', 'article')


<div>
<article class="container max-w-4xl px-4 py-12 mx-auto" itemscope itemtype="http://schema.org/BlogPosting">
    <header class="mb-8 text-center">
        <h1 class="mb-4 text-3xl font-bold text-gray-900 md:text-5xl" itemprop="headline">{{ $post->titlu }}</h1>
        <div class="flex items-center justify-center mb-6 text-sm text-gray-600">
            <time datetime="{{ $post->published_at->toDateString() }}" itemprop="datePublished">
                <i class="mr-2 far fa-calendar"></i>{{ $post->published_at->isoFormat('D MMMM YYYY') }}
            </time>
            <span class="mx-3">|</span>
            <span itemprop="author" itemscope itemtype="http://schema.org/Person">
                <i class="mr-2 far fa-user"></i><span itemprop="name">Click Studios Digital</span>
            </span>
        </div>
        <div class="flex flex-wrap justify-center gap-2 mb-6">
            @foreach ($post->tags as $tag)
                <a href="{{ route('etichete.show', $tag->slug) }}" class="px-3 py-1 text-sm font-medium transition duration-300 rounded-full text-emerald-700 bg-emerald-100 hover:bg-emerald-200" itemprop="keywords">{{ $tag->nume }}</a>
            @endforeach
        </div>
    </header>

    @if ($post->imagine_principala)
        <figure class="mb-8">
            <img src="{{ asset('storage/' . $post->imagine_principala) }}" alt="{{ $post->titlu }}" class="w-full h-auto rounded-lg shadow-lg" itemprop="image">
        </figure>
    @endif

 @if ($audioUrl)
    <div class="mx-auto mb-8">
        <h2 class="mb-4 text-2xl font-semibold text-center text-gray-800 md:text-left font-roboto-condensed">Ascultă articolul</h2>
        <div id="audio-player-container" class="overflow-hidden">
            <audio id="audio-player" class="w-full" controls>
                <source src="{{ $audioUrl }}" type="audio/mp3">
                Your browser does not support the audio element.
            </audio>
        </div>
    </div>
@else
    <div class="p-4 mb-8 text-center bg-gray-100 rounded-lg">
        <p class="text-emerald-500">Nu există o versiune audio pentru acest articol.</p>
    </div>
@endif

    <div class="p-2 prose prose-lg rounded shadow-lg max-w-none" itemprop="articleBody">
        {!! $post->continut !!}
    </div>

    <div class="mt-12">
        <a href="{{ route('blog') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white transition duration-300 rounded-lg bg-emerald-600 hover:bg-emerald-500">
            <i class="mr-2 fas fa-arrow-left"></i> Înapoi la Blog
        </a>
    </div>
</article>

@if ($similarPosts->count() > 0)
    <section class="py-12">
        <div class="container max-w-6xl px-4 mx-auto">
            <h2 class="mb-8 text-3xl font-bold text-center text-gray-900">Articole similare</h2>
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($similarPosts as $similarPost)
                    <div class="overflow-hidden transition duration-300 bg-white rounded-lg shadow-md hover:shadow-xl">
                        @if ($similarPost->imagine_principala)
                            <img src="{{ asset('storage/' . $similarPost->imagine_principala) }}" alt="{{ $similarPost->titlu }}" class="object-cover w-full h-auto">
                        @endif
                        <div class="p-6">
                            <h3 class="mb-2 text-xl font-semibold">
                                <a href="{{ route('postari.show', $similarPost->slug) }}" class="text-gray-900 transition duration-300 line-clamp-2 hover:text-blue-600">{{ $similarPost->titlu }}</a>
                            </h3>
                            <p class="mb-4 text-gray-600 line-clamp-3">{{ $similarPost->meta_descriere }}</p>
                            <a href="{{ route('postari.show', $similarPost->slug) }}" class="inline-block px-4 py-2 text-sm font-medium transition duration-300 border rounded-lg text-emerald-600 border-emerald-600 hover:bg-emerald-600 hover:text-white">
                                Citește mai mult
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif


@push('scripts')
    <script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const player = new Plyr('#audio-player', {
                controls: ['play', 'progress', 'current-time', 'mute', 'volume']
            });
        });
    </script>
@endpush

</div>