@extends('layouts.app')

@push('css')
    <meta property="og:title" content="The Mountain Journal - BikeRental.com" />
    <meta property="og:type" content="website" />
    <meta property="og:description"
        content="Stories from the thin air. Read about the latest Himalayan expeditions and gear reviews." />
    <meta property="og:url" content="{{ route('articles') }}" />
    <style>
        .text-shadow-xl {
            text-shadow: 0 10px 30px rgba(0, 0, 0, 0.8);
        }
    </style>
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="relative w-full h-[600px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover brightness-50"
                alt="Cinematic wide shot of a rugged black adventure motorcycle parked on a high mountain pass"
                src="{{ asset('assets/img/meta/ride_banner.png') }}" />
            <div class=" absolute inset-0 bg-gradient-to-b from-surface/40 via-surface/60 to-surface">
            </div>
        </div>
        <div class="relative z-10 text-center px-4">
            <h1
                class="font-headline text-6xl md:text-8xl font-black tracking-tighter text-white leading-tight uppercase text-shadow-xl">
                The Mountain <br /><span class="text-primary italic">Journal</span>
            </h1>
            <p class="mt-6 text-xl font-label tracking-widest text-secondary max-w-2xl mx-auto uppercase font-bold">
                Stories from the Thin Air
            </p>

            <!-- Breadcrumb Inside Hero -->
            <nav
                class="mt-8 flex items-center justify-center gap-3 text-sm font-label text-white/60 uppercase tracking-widest">
                <a class="hover:text-primary transition-colors" href="{{ route('welcome') }}">Home</a>
                <span class="material-symbols-outlined text-xs">chevron_right</span>
                <span class="text-secondary font-bold">News & Blogs</span>
            </nav>
        </div>
    </section>

    <!-- Main Content Layout -->
    <main class="max-w-screen-2xl mx-auto px-8 relative z-20 pb-24 text-white">
        <div class="flex flex-col lg:flex-row gap-12">
            <!-- Left Column: Blog Grid -->
            <div class="flex-1">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @if ($articles->count() > 0)
                        @foreach ($articles as $index => $article)
                            <article data-aos="cinematic-up" data-aos-delay="{{ ($index % 3) * 100 }}"
                                class="glass-panel rounded-2xl overflow-hidden group hover:translate-y-[-8px] transition-all duration-500 shadow-2xl border border-white/5">
                                <div class="relative h-64 overflow-hidden">
                                    <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                        src="{{ $article->getImage() ?? asset('assets/img/article/article.jpg') }}"
                                        alt="{{ $article->title }}">
                                    <div
                                        class="absolute top-4 left-4 bg-secondary text-on-secondary px-3 py-1 rounded-lg font-label text-xs font-bold tracking-wider uppercase">
                                        {{ $article->created_at->format('M d, Y') }}
                                    </div>
                                </div>
                                <div class="p-8">
                                    <h3
                                        class="font-headline text-2xl font-bold text-white mb-4 leading-tight group-hover:text-primary transition-colors uppercase tracking-tight">
                                        {{ $article->title }}
                                    </h3>
                                    <p class="text-on-surface-variant font-body mb-6 line-clamp-3 text-sm leading-relaxed">
                                        {{ strip_tags(Str::limit($article->description, 150)) }}
                                    </p>
                                    <a class="inline-flex items-center text-secondary font-label font-bold tracking-wider uppercase text-xs hover:translate-x-2 transition-transform"
                                        href="{{ route('article-details', $article->slug) }}">
                                        Read More <span class="material-symbols-outlined ml-2 text-sm">arrow_forward</span>
                                    </a>
                                </div>
                            </article>
                        @endforeach
                    @endif
                </div>
                <!-- Pagination -->
                @if ($articles->count() > 0)
                    <div class="mt-16 flex justify-center items-center">
                        {{ $articles->links() }}
                    </div>
                @endif
            </div>

            <!-- Right Column: Sidebar -->
            <aside class="w-full lg:w-96 space-y-8">
                <!-- Recent Posts -->
                <div class="glass-panel p-8 rounded-2xl shadow-xl border border-white/5">
                    <h4 class="font-headline text-xl font-bold text-white mb-6 uppercase tracking-tight">Recent Posts</h4>
                    <div class="space-y-6">
                        @foreach ($articles->take(3) as $recent)
                            <div class="flex gap-4 group cursor-pointer"
                                onclick="window.location.href='{{ route('article-details', $recent->slug) }}'">
                                <div class="w-20 h-20 rounded-lg overflow-hidden flex-shrink-0">
                                    <img class="w-full h-full object-cover" src="{{ $recent->getImage() }}"
                                        alt="{{ $recent->title }}" />
                                </div>
                                <div>
                                    <h5
                                        class="text-white font-medium text-sm leading-snug group-hover:text-primary transition-colors uppercase tracking-tight">
                                        {{ $recent->title }}
                                    </h5>
                                    <span
                                        class="text-on-surface-variant text-xs font-label">{{ $recent->created_at->format('M d, Y') }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Categories -->
                <div data-aos="cinematic-left" data-aos-delay="100"
                    class="glass-panel p-8 rounded-2xl shadow-xl border border-white/5">
                    <h4 class="font-headline text-xl font-bold text-white mb-6 uppercase tracking-tight">Categories</h4>
                    <ul class="space-y-3">
                        <li
                            class="flex justify-between items-center text-on-surface-variant hover:text-secondary transition-colors group cursor-pointer">
                            <span class="font-label tracking-wide uppercase text-sm">Road Trips</span>
                            <span
                                class="bg-surface-container-highest px-2 py-0.5 rounded text-[10px] text-primary">12</span>
                        </li>
                        <li
                            class="flex justify-between items-center text-on-surface-variant hover:text-secondary transition-colors group cursor-pointer">
                            <span class="font-label tracking-wide uppercase text-sm">Gear Reviews</span>
                            <span
                                class="bg-surface-container-highest px-2 py-0.5 rounded text-[10px] text-primary">08</span>
                        </li>
                        <li
                            class="flex justify-between items-center text-on-surface-variant hover:text-secondary transition-colors group cursor-pointer">
                            <span class="font-label tracking-wide uppercase text-sm">Safety Tips</span>
                            <span
                                class="bg-surface-container-highest px-2 py-0.5 rounded text-[10px] text-primary">05</span>
                        </li>
                    </ul>
                </div>

                <!-- Plan Your Trip CTA -->
                <div data-aos="cinematic-left" data-aos-delay="200"
                    class="relative overflow-hidden rounded-2xl p-8 bg-surface-container-high border border-white/5 shadow-2xl">
                    <div class="absolute -right-12 -bottom-12 w-48 h-48 bg-primary/10 blur-3xl rounded-full"></div>
                    <h4 class="font-headline text-2xl font-bold text-white mb-4 relative z-10 uppercase">Start Your Own
                        Adventure</h4>
                    <p class="text-on-surface-variant text-sm mb-6 relative z-10">Stop reading and start riding. Book your
                        Himalayan bike today.</p>
                    <button onclick="window.location.href='{{ route('rides') }}'"
                        class="w-full bg-secondary text-on-secondary font-headline font-black py-4 rounded-xl hover:scale-105 active:scale-95 transition-all shadow-[0_15px_30px_rgba(254,178,52,0.3)] relative z-10 uppercase text-xs tracking-widest">
                        Rent a Bike
                    </button>
                </div>
            </aside>
        </div>
    </main>
@endsection