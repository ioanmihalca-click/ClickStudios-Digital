<div>
<article class="max-w-4xl px-4 py-16 mx-auto my-8 bg-white rounded-lg shadow-lg" itemscope itemtype="http://schema.org/BlogPosting">
    <header class="mb-12 text-center">
        <h1 class="mb-6 text-5xl font-bold text-gray-900" itemprop="headline">{{ $post->titlu }}</h1>
        <div class="flex items-center justify-center mb-8 text-sm text-gray-600">
            <time datetime="{{ $post->published_at->toDateString() }}" itemprop="datePublished" class="flex items-center">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                {{ $post->published_at->isoFormat('D MMMM YYYY') }}
            </time>
            <span class="mx-3">•</span>
            <span itemprop="author" itemscope itemtype="http://schema.org/Person" class="flex items-center">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                <span itemprop="name">Click Studios Digital</span>
            </span>
        </div>
        <div class="flex flex-wrap justify-center gap-3 mb-8">
            @foreach ($post->tags as $tag)
                <a href="{{ route('etichete.show', $tag->slug) }}" class="px-4 py-2 text-sm font-medium transition duration-300 rounded-full text-emerald-700 bg-emerald-100 hover:bg-emerald-200 hover:text-emerald-800" itemprop="keywords">{{ $tag->nume }}</a>
            @endforeach
        </div>
    </header>

    @if ($post->imagine_principala)
        <figure class="mb-12">
            <img src="{{ asset('storage/' . $post->imagine_principala) }}" alt="{{ $post->titlu }}" class="w-full h-auto shadow-xl rounded-xl" itemprop="image">
        </figure>
    @endif

    <div class="mb-12 prose prose-lg max-w-none" itemprop="articleBody">
        {!! $post->continut !!}
    </div>

    <div class="flex items-center justify-between mt-16">
        <a href="{{ route('blog') }}" class="inline-flex items-center px-6 py-3 text-base font-medium text-white transition duration-300 rounded-lg bg-emerald-600 hover:bg-emerald-500">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Înapoi la Blog
        </a>
        {{-- <div class="flex space-x-4">
            <a href="#" class="text-gray-400 transition-colors duration-300 hover:text-blue-500">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path></svg>
            </a>
            <a href="#" class="text-gray-400 transition-colors duration-300 hover:text-blue-500">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path></svg>
            </a>
            <a href="#" class="text-gray-400 transition-colors duration-300 hover:text-blue-500">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path></svg>
            </a>
        </div> --}}
    </div>
</article>

@if ($similarPosts->count() > 0)
    <section class="py-16 ">
        <div class="container max-w-6xl px-4 mx-auto">
            <h2 class="mb-12 text-3xl font-bold text-center text-gray-900">Articole similare</h2>
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($similarPosts as $similarPost)
                    <div class="overflow-hidden transition duration-300 transform bg-white shadow-md rounded-xl hover:-translate-y-1 hover:shadow-xl">
                        @if ($similarPost->imagine_principala)
                            <img src="{{ asset('storage/' . $similarPost->imagine_principala) }}" alt="{{ $similarPost->titlu }}" class="object-cover w-full h-auto">
                        @endif
                        <div class="p-6">
                            <h3 class="mb-3 text-xl font-semibold">
                                <a href="{{ route('postari.show', $similarPost->slug) }}" class="text-gray-900 transition duration-300 hover:text-emerald-600 line-clamp-2">{{ $similarPost->titlu }}</a>
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
</div>