@extends('layouts.app')

@section('meta_title', $article->title)
@section('meta_description', strip_tags(Str::limit($article->description, 150)))
@section('meta_keywords', implode(', ', explode(' ', $article->title)))

@section('og_title', $article->title)
@section('og_description', strip_tags(Str::limit($article->description, 150)))
@section('og_url', route('article-details', $article->id))
@section('og_image', $article->getImage())

@section('content')
    <main id="main">

        <!-- Cinematic Article Hero -->
        <header class="relative h-[85vh] w-full overflow-hidden">
            <div class="absolute inset-0">
                <img class="w-full h-full object-cover" alt="{{ $article->title }}"
                    src="{{ $article->getImage() ?? asset('assets/img/article/article.jpg') }}" />
                <!-- Advanced Overlay (Dark Glass Gradient) -->
                <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-black/30"></div>
                <div class="absolute inset-0 bg-black/20"></div>
            </div>

            <div class="absolute inset-0 flex flex-col justify-end pb-24 px-8 md:px-20 max-w-screen-2xl mx-auto">
                <div
                    class="mb-6 flex gap-3 items-center text-secondary font-label font-black tracking-[0.3em] text-xs uppercase">
                    <span class="material-symbols-outlined text-sm amber-glow">distance</span>
                    Expedition Log
                </div>

                <h1 data-aos="cinematic-up"
                    class="font-headline text-6xl md:text-8xl font-black tracking-tighter text-white leading-tight uppercase text-shadow-xl max-w-5xl uppercase">
                    {{ $article->title }}
                </h1>

                <div class="mt-12 flex flex-wrap items-center gap-8">
                    <!-- Author Information -->
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 rounded-full overflow-hidden border-2 border-primary/30 p-0.5 bg-surface">
                            <div
                                class="w-full h-full rounded-full overflow-hidden bg-primary/10 flex items-center justify-center">
                                @if($article->user && $article->user->image)
                                    <img src="{{ asset('storage/' . $article->user->image) }}"
                                        class="w-full h-full object-cover">
                                @else
                                    <span class="material-symbols-outlined text-primary text-2xl">person</span>
                                @endif
                            </div>
                        </div>
                        <div>
                            <p class="font-label text-[10px] font-black text-primary tracking-widest uppercase mb-1">Written
                                By</p>
                            <p class="text-white font-headline font-bold text-lg leading-none uppercase">
                                {{ $article->user->name ?? 'Admin' }}</p>
                        </div>
                    </div>

                    <div class="h-10 w-[1px] bg-white/20 hidden md:block"></div>

                    <!-- Date Published -->
                    <div>
                        <p class="font-label text-[10px] font-black text-primary tracking-widest uppercase mb-1">Published
                        </p>
                        <p class="text-white font-headline font-bold text-lg leading-none uppercase">
                            {{ $article->created_at->format('M d, Y') }}</p>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content Layout -->
        <div class="max-w-screen-2xl mx-auto px-8 md:px-20 grid grid-cols-1 lg:grid-cols-12 gap-16 py-24">

            <!-- Left Column: Article Content -->
            <article class="lg:col-span-8 space-y-12">
                <div class="space-y-8">
                    <!-- Breadcrumbs (In-Article Navigation) -->
                    <nav
                        class="flex items-center gap-2 text-[10px] font-label font-black text-white/40 uppercase tracking-[0.3em] mb-4">
                        <a class="hover:text-primary transition-colors" href="{{ route('welcome') }}">Home</a>
                        <span class="material-symbols-outlined text-[10px]">chevron_right</span>
                        <a class="hover:text-articles">Stories</a>
                        <span class="material-symbols-outlined text-[10px]">chevron_right</span>
                        <span class="text-secondary font-black">{{ $article->title }}</span>
                    </nav>

                    <!-- High-Impact Intro Title -->
                    <h2
                        class="font-headline text-5xl md:text-6xl text-white tracking-tighter uppercase font-black leading-none">
                        Into the <span class="text-primary italic">Thin Air</span>
                    </h2>

                    <!-- Article Body with Image Suppression -->
                    <div class="article-details-body prose prose-invert prose-xl max-w-none">
                        {!! $article->description !!}
                    </div>
                </div>

                <!-- Social Share Pills (Exact Design Match) -->
                <div class="pt-16 border-t border-white/10 flex flex-col md:flex-row md:items-center justify-between gap-8">
                    <div class="flex flex-wrap gap-3">
                        <!-- Facebook -->
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                            target="_blank"
                            class="flex items-center gap-2 px-5 py-3 rounded-full bg-[#1877f2]/10 text-[#1877f2] font-label font-black text-[10px] tracking-widest uppercase hover:bg-[#1877f2]/20 transition-all ">
                            <span class="material-symbols-outlined text-sm"
                                style="font-variation-settings: 'FILL' 1;">share</span> FACEBOOK
                        </a>

                        <!-- Instagram -->
                        <a href="https://www.instagram.com" target="_blank"
                            class="flex items-center gap-2 px-5 py-3 rounded-full bg-[#e4405f]/10 text-[#e4405f] font-label font-black text-[10px] tracking-widest uppercase hover:bg-[#e4405f]/20 transition-all">
                            <span class="material-symbols-outlined text-sm"
                                style="font-variation-settings: 'FILL' 1;">share</span> INSTAGRAM
                        </a>

                        <!-- WhatsApp -->
                        <a href="https://api.whatsapp.com/send?text={{ urlencode($article->title . ' ' . request()->fullUrl()) }}"
                            target="_blank"
                            class="flex items-center gap-2 px-5 py-3 rounded-full bg-[#25d366]/10 text-[#25d366] font-label font-black text-[10px] tracking-widest uppercase hover:bg-[#25d366]/20 transition-all">
                            <span class="material-symbols-outlined text-sm"
                                style="font-variation-settings: 'FILL' 1;">share</span> WHATSAPP
                        </a>

                        <!-- Twitter/X -->
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($article->title) }}"
                            target="_blank"
                            class="flex items-center gap-2 px-5 py-3 rounded-full bg-[#1da1f2]/10 text-[#1da1f2] font-label font-black text-[10px] tracking-widest uppercase hover:bg-[#1da1f2]/20 transition-all">
                            <span class="material-symbols-outlined text-sm"
                                style="font-variation-settings: 'FILL' 1;">share</span> TWITTER
                        </a>
                    </div>
                </div>
            </article>

            <!-- Right Column: Sidebar (Exact Design Matching) -->
            <aside class="lg:col-span-4 space-y-10">
                <!-- Ready to Ride CTA (Match Reference) -->
                <div data-aos="cinematic-left"
                    class="glass-panel p-10 rounded-4xl border border-white/10 relative overflow-hidden group bg-surface-container-low shadow-2xl">
                    <div
                        class="absolute top-0 right-0 p-4 opacity-10 group-hover:scale-110 transition-transform duration-500 pointer-events-none">
                        <span class="material-symbols-outlined text-8xl">motorcycle</span>
                    </div>
                    <h4 class="font-bebas text-4xl text-white mb-2 tracking-wide uppercase">Ready to Ride?</h4>
                    <p class="text-on-surface-variant text-sm mb-8 font-label leading-relaxed opacity-80">Experience the
                        Spiti loop on our fleet of specially prepared Himalayan BS6 bikes.</p>

                    <a href="{{ route('rides') }}"
                        class="block w-full bg-secondary hover:bg-secondary/90 text-on-secondary py-4 rounded-lg font-headline font-black text-center text-lg transition-all shadow-xl shadow-secondary/20 uppercase tracking-tight">
                        BOOK NOW
                    </a>
                </div>

                <!-- Categories (Match Reference) -->
                <div class="space-y-4">
                    <h5 class="font-label font-bold text-primary tracking-widest text-xs uppercase ml-1">Categories</h5>
                    <div class="flex flex-col gap-2">
                        @php
                            $categories = [
                                ['name' => 'Road Trips', 'count' => 12],
                                ['name' => 'Gear Reviews', 'count' => '08'],
                                ['name' => 'Safety Tips', 'count' => '05']
                            ];
                        @endphp
                        @foreach($categories as $cat)
                            <a class="flex justify-between items-center p-4 glass-panel rounded-lg hover:bg-white/10 transition-all group border border-white/5"
                                href="#">
                                <span class="text-white font-medium text-sm">{{ $cat['name'] }}</span>
                                <span
                                    class="text-secondary font-bold text-sm group-hover:translate-x-1 transition-transform amber-glow">{{ $cat['count'] }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- Recent Adventures (Match Reference) -->
                <div class="space-y-4">
                    <h5 class="font-label font-bold text-primary tracking-widest text-xs uppercase ml-1">Recent Adventures
                    </h5>
                    <div class="space-y-5">
                        @foreach ($relatedArticles->take(2) as $related)
                            <a href="{{ route('article-details', $related->slug) }}" class="flex gap-4 group">
                                <div
                                    class="w-20 h-20 flex-shrink-0 rounded-lg overflow-hidden glass-panel border border-white/10 shadow-xl">
                                    <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 grayscale group-hover:grayscale-0"
                                        src="{{ $related->getImage() }}" alt="{{ $related->title }}" />
                                </div>
                                <div class="flex flex-col justify-center">
                                    <h6
                                        class="text-white font-bold text-sm leading-tight mb-1 group-hover:text-primary transition-colors tracking-tight line-clamp-2 uppercase font-headline">
                                        {{ $related->title }}
                                    </h6>
                                    <p
                                        class="text-[10px] text-on-surface-variant font-bold uppercase tracking-tighter opacity-60">
                                        {{ $related->created_at->format('M d, Y') }}
                                    </p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </aside>
        </div>

    </main>
@endsection