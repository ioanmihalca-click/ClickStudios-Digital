@section('title', $post->titlu)
@section('meta_description', $post->meta_descriere ?? Str::limit(strip_tags($post->continut), 160))
@section('og_title', $post->titlu)
@section('og_description', $post->meta_descriere ?? Str::limit(strip_tags($post->continut), 200))
@section('og_image', $post->imagine_principala ? asset('storage/' . $post->imagine_principala) : '')
@section('og_type', 'article')
@section('header', $post->titlu)

<div class="container px-4 py-8 mx-auto">
    <article class="prose lg:prose-xl" itemscope itemtype="http://schema.org/BlogPosting">
        <h1 class="mb-4 text-3xl font-bold" itemprop="headline">{{ $post->titlu }}</h1>

        <div class="mb-4 text-gray-600">
             Publicat la data de {{ $post->published_at->isoFormat('D MMMM YYYY') }} de 
            <span itemprop="author" itemscope itemtype="http://schema.org/Person">
                <span class="font-semibold" itemprop="name">Click Studios Digital</span>
            </span>
        </div>

        @if ($post->imagine_principala)
            <img src="{{ asset('storage/' . $post->imagine_principala) }}" alt="{{ $post->titlu }}" class="mb-4 rounded" itemprop="image">
        @endif

        <div itemprop="articleBody">
            {!! $post->continut !!}
        </div>

        <div class="my-6">
            @foreach ($post->tags as $tag)
                <a href="{{ route('etichete.show', $tag->slug) }}" class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300" itemprop="keywords">{{ $tag->nume }}</a>
            @endforeach
        </div>

    <div class="p-4">
        <a href="{{ route('blog') }}" class="text-blue-600 hover:text-blue-800">← Înapoi la Blog</a>
        </div>

    </article>

    @if ($similarPosts->count() > 0)
        <div class="mt-8">
            <h2 class="mb-4 text-2xl font-semibold">Articole similare</h2>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                @foreach ($similarPosts as $similarPost)
                    <div class="overflow-hidden bg-white rounded-lg shadow-md">
                        @if ($similarPost->imagine_principala)
                            <img src="{{ asset('storage/' . $similarPost->imagine_principala) }}" alt="{{ $similarPost->titlu }}" class="object-cover w-full h-auto">
                        @endif
                        <div class="p-6">
                            <h3 class="mb-2 text-xl font-semibold">
                                <a href="{{ route('postari.show', $similarPost->slug) }}">{{ $similarPost->titlu }}</a>
                            </h3>
                            <p class="text-gray-600">{{ $similarPost->meta_descriere }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>