@extends('layouts.app')

@push('css')
    <meta property="og:title" content="Explore Our Gallery - BikeRental.com Himalayan Adventures" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ route('gallery') }}" />
    <style>
        .masonry-grid {
            columns: 1;
        }
        @media (min-width: 768px) {
            .masonry-grid { columns: 2; }
        }
        @media (min-width: 1024px) {
            .masonry-grid { columns: 3; }
        }
        .masonry-item {
            break-inside: avoid;
            margin-bottom: 1.5rem;
        }
        .liquid-glass {
            background: rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
        }
    </style>
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="relative w-full h-[600px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover brightness-50"
                alt="Cinematic wide shot of a rugged black adventure motorcycle parked on a high mountain pass"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBJxhMb_6VM7daR1Q29QpRVco4colTFAkwS8yWHSBj2swFTR7dtHNuLv6CIJupM5wsvMBd0Res4UwAt24IfTgR5heU6mN_m0_klhfelHCMBcFkfJMaRVWYhtRfmUgG3bbir2Xh9BUrF6L0n_1oucwcxXWkS03xTWXmzzSQd32oxjDYzrbTgU7_IPfKptGKqirdami8-_zT7yBC38RLU2w7cpo9icZepogDJlVSjsm2f8j6nsMQz780RSow_sR37y_8SleaNLMM7r3Y" />
            <div class="absolute inset-0 bg-gradient-to-b from-surface/40 via-surface/60 to-surface"></div>
        </div>
        <div class="relative z-10 text-center px-4">
            <h1
                class="font-headline text-6xl md:text-8xl font-black tracking-tighter text-white leading-tight uppercase text-shadow-xl">
                THE <br /><span class="text-primary italic">LENS</span>
            </h1>
            <p class="mt-6 text-xl font-label tracking-widest text-secondary max-w-2xl mx-auto uppercase font-bold">
                Adventure Through the Lens
            </p>
            
            <!-- Breadcrumb Inside Hero -->
            <nav class="mt-8 flex items-center justify-center gap-3 text-sm font-label text-white/60 uppercase tracking-widest">
                <a class="hover:text-primary transition-colors" href="{{ route('welcome') }}">Home</a>
                <span class="material-symbols-outlined text-xs">chevron_right</span>
                <span class="text-secondary font-bold">The Lens</span>
            </nav>
        </div>
    </section>

    <main class="pb-24 px-6 md:px-12 max-w-screen-2xl mx-auto text-white">
        <!-- Filter Tabs (Static for design) -->
        <header class="mb-16">
            <div class="flex flex-wrap items-center gap-3 liquid-glass p-2 rounded-full w-fit mx-auto md:mx-0 border border-white/10 shadow-2xl">
                <button class="px-8 py-3 rounded-full font-label text-[10px] font-black tracking-widest uppercase bg-secondary text-on-secondary shadow-[0_0_20px_rgba(254,178,52,0.4)] transition-all amber-glow transform hover:scale-105">ALL</button>
                <button class="px-8 py-3 rounded-full font-label text-[10px] font-black tracking-widest uppercase text-white/60 hover:text-white hover:bg-white/10 transition-all">HIMALAYAN RIDES</button>
                <button class="px-8 py-3 rounded-full font-label text-[10px] font-black tracking-widest uppercase text-white/60 hover:text-white hover:bg-white/10 transition-all">CITY EXPLORER</button>
                <button class="px-8 py-3 rounded-full font-label text-[10px] font-black tracking-widest uppercase text-white/60 hover:text-white hover:bg-white/10 transition-all">GEAR</button>
            </div>
        </header>

        <!-- Masonry Grid -->
        <div class="masonry-grid gap-6">
            @foreach($galleries as $gallery)
                <div class="masonry-item relative group overflow-hidden rounded-2xl bg-surface-container-high transition-all duration-700 hover:scale-[1.02] shadow-2xl border border-white/5">
                    <img class="w-full h-auto object-cover grayscale group-hover:grayscale-0 transition-all duration-1000 scale-100 group-hover:scale-110" 
                        src="{{ $gallery->getImage() ?? asset('assets/img/gallery/ClinicStore.png') }}" 
                         alt="Gallery Image" />
                    
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-8 liquid-glass m-4 rounded-xl border border-white/10">
                        <a href="{{ $gallery->getImage() ?? asset('assets/img/gallery/ClinicStore.png') }}" class="material-symbols-outlined text-secondary text-4xl mb-4 self-end transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 fancybox" data-fancybox="gallery" style="font-variation-settings: 'FILL' 1;">open_in_full</a>
                        <h3 class="font-headline text-2xl font-bold text-white mb-1 uppercase tracking-tight transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 delay-75">Himalayan Peak</h3>
                        <p class="font-label text-[10px] tracking-widest text-primary uppercase font-bold transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 delay-150">Series Alpha • 2024</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-24">
            <div class="pagination-wrapper">
                {{ $galleries->links() }}
            </div>
        </div>
        
    </main>
@endsection
