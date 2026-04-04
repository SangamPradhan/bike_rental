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

        <!-- Breadcrumbs -->
        <section class="max-w-7xl mx-auto px-8 py-8 pt-32">
            <nav class="flex items-center gap-3 text-sm font-label text-on-surface-variant uppercase tracking-widest">
                <a class="hover:text-primary transition-colors" href="{{ route('welcome') }}">Home</a>
                <span class="material-symbols-outlined text-xs">chevron_right</span>
                <a class="hover:text-primary transition-colors" href="{{ route('articles') }}">News & Blogs</a>
                <span class="material-symbols-outlined text-xs">chevron_right</span>
                <span class="text-secondary font-bold">Thin Air Journal</span>
            </nav>
        </section>

        <!-- Article Hero -->
        <header class="max-w-7xl mx-auto px-8 mb-16">
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-headline font-black tracking-tighter text-white mb-8 uppercase leading-none">
                {{ $article->title }}
            </h1>
            <div class="relative w-full aspect-[21/9] rounded-3xl overflow-hidden shadow-2xl border border-white/5 group">
                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-[2000ms]"
                    alt="{{ $article->title }}"
                    src="{{ $article->getImage() ?? asset('assets/img/article/article.jpg') }}" />
                <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent opacity-60"></div>
                <div class="absolute bottom-8 left-8 flex items-center gap-4">
                    <div class="bg-secondary text-on-secondary px-6 py-2 rounded-lg font-headline font-black text-xs tracking-widest uppercase shadow-xl amber-glow">
                        Expedition Log
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Grid -->
        <div class="max-w-7xl mx-auto px-8 grid grid-cols-1 lg:grid-cols-12 gap-16 pb-24 text-white">
            <!-- Left Column: Content -->
            <article class="lg:col-span-8">
                <!-- Publish and Share Section -->
                <div class="publish-and-share flex flex-col md:flex-row justify-between items-start md:items-center py-8 border-y border-white/10 mb-12 gap-8">
                    <div class="flex items-center gap-6">
                        <div class="w-16 h-16 rounded-full overflow-hidden border-2 border-primary/20 bg-primary/5 flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary text-3xl">person</span>
                        </div>
                        <div>
                            <span class="block text-secondary font-label text-[10px] tracking-widest uppercase font-bold mb-1">Written By</span>
                            <h4 class="text-white font-headline text-xl font-bold tracking-tight uppercase">{{ $article->user->name ?? 'Admin' }}</h4>
                            <span class="text-on-surface-variant text-xs">Published on {{ $article->created_at->format('M d, Y') }}</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="text-on-surface-variant text-[10px] font-label uppercase tracking-widest mr-2">Share Expedition</span>
                        <div class="flex gap-3">
                            <!-- Facebook -->
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('article-details', $article->slug)) }}"
                               target="_blank" 
                               class="w-10 h-10 rounded-full flex items-center justify-center bg-[#1877F2] text-white hover:scale-110 transition-transform shadow-lg shadow-[#1877F2]/20">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path></svg>
                            </a>
                            <!-- Twitter/X -->
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('article-details', $article->slug)) }}&text={{ urlencode($article->title) }}"
                               target="_blank"
                               class="w-10 h-10 rounded-full flex items-center justify-center bg-[#1DA1F2] text-white hover:scale-110 transition-transform shadow-lg shadow-[#1DA1F2]/20">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.84 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"></path></svg>
                            </a>
                            <!-- LinkedIn -->
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(route('article-details', $article->slug)) }}&title={{ urlencode($article->title) }}"
                               target="_blank"
                               class="w-10 h-10 rounded-full flex items-center justify-center bg-[#0A66C2] text-white hover:scale-110 transition-transform shadow-lg shadow-[#0A66C2]/20">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Article Content -->
                <div class="prose prose-invert prose-lg max-w-none font-body text-on-surface-variant leading-relaxed mb-16">
                    {!! $article->description !!}
                </div>

                <!-- Bottom CTA -->
                <div class="p-12 rounded-3xl bg-surface-container-high border border-white/5 relative overflow-hidden">
                    <div class="relative z-10">
                        <h3 class="font-headline text-3xl font-black text-white mb-4 uppercase tracking-tighter">Conquer the Peaks Yourself</h3>
                        <p class="text-on-surface-variant mb-8 max-w-xl">Don't just read about the adventure. Experience the thin air, the winding roads, and the raw beauty of the Himalayas on our precision-tuned machines.</p>
                        <button class="bg-secondary text-on-secondary font-headline font-black px-12 py-5 rounded-full hover:scale-105 active:scale-95 transition-all shadow-2xl shadow-secondary/30 uppercase text-sm tracking-widest">
                            Book Your Ride
                        </button>
                    </div>
                    <div class="absolute -right-24 -bottom-24 w-96 h-96 bg-primary/5 rounded-full blur-[120px]"></div>
                </div>
            </article>

            <!-- Right Column: Sidebar -->
            <aside class="lg:col-span-4 space-y-12">
                <!-- Recent Adventures -->
                <div class="glass-panel p-8 rounded-2xl border border-white/5 shadow-2xl">
                    <h4 class="font-headline text-xl font-bold text-white mb-8 uppercase tracking-widest flex items-center gap-3">
                        <span class="w-2 h-8 bg-secondary rounded-full"></span>
                        Recent Adventures
                    </h4>
                    <div class="space-y-8">
                        @foreach ($relatedArticles as $related)
                            <a href="{{ route('article-details', $related->slug) }}" class="flex gap-4 group">
                                <div class="w-24 h-24 rounded-xl overflow-hidden flex-shrink-0 border border-white/10 group-hover:border-primary/50 transition-colors">
                                    <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                        src="{{ $related->getImage() }}"
                                        alt="{{ $related->title }}" />
                                </div>
                                <div class="space-y-1">
                                    <h5 class="text-white font-headline text-sm font-bold leading-tight group-hover:text-primary transition-colors uppercase tracking-tight line-clamp-2">
                                        {{ $related->title }}
                                    </h5>
                                    <span class="text-on-surface-variant text-[10px] font-label uppercase tracking-widest">{{ $related->created_at->format('M d, Y') }}</span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- Newsletter/Join -->
                <div class="glass-panel p-8 rounded-2xl border border-white/5 shadow-2xl relative overflow-hidden">
                    <div class="relative z-10">
                        <h4 class="font-headline text-xl font-bold text-white mb-4 uppercase tracking-widest">Thin Air Dispatch</h4>
                        <p class="text-on-surface-variant text-sm mb-6 leading-relaxed">Join 50k+ riders receiving weekly expedition logs and gear technical bulletins.</p>
                        <form class="space-y-3">
                            <input type="email" placeholder="Email Address" 
                                class="w-full bg-surface-container-high border-none rounded-xl p-4 text-sm focus:ring-1 focus:ring-primary transition-all">
                            <button class="w-full bg-primary text-on-primary font-headline font-black py-4 rounded-xl hover:scale-105 active:scale-95 transition-all uppercase text-xs tracking-widest">
                                Subscribe
                            </button>
                        </form>
                    </div>
                    <div class="absolute -left-12 -top-12 w-32 h-32 bg-secondary/10 blur-2xl rounded-full"></div>
                </div>
            </aside>
        </div>

    </main>
@endsection
