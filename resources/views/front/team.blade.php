@extends('layouts.app')

@push('css')
    <meta property="og:title" content="Meet Our Technical Registry - Liquid Summit Nepal" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Forged in ice, driven by gold. Meet the high-altitude specialists and mechanics of Liquid Summit." />
    <meta property="og:url" content="{{ route('team') }}" />
    
    <style>
        .glass-panel {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .liquid-gradient-text {
            background: linear-gradient(to right, #9be9f7, #feb234);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .shimmer:hover {
            background: linear-gradient(45deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0.05) 50%, rgba(255,255,255,0) 100%);
            background-size: 200% 200%;
        }
    </style>
@endpush

@section('content')
<main id="main" class="bg-dark text-white">

    <!-- ======= Hero Section ======= -->
    <section class="relative w-full h-[600px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover brightness-50"
                alt="Cinematic wide shot of the technical registry at Liquid Summit"
                src="{{ asset('assets/img/meta/ride_banner.png') }}" />
            <div class="absolute inset-0 bg-gradient-to-b from-surface/40 via-surface/60 to-surface"></div>
        </div>
        <div class="relative z-10 text-center px-4">
            <h1
                class="font-headline text-6xl md:text-8xl font-black tracking-tighter text-white leading-tight uppercase text-shadow-xl">
                OUR <br /><span class="text-primary italic">TEAM</span>
            </h1>
            <p class="mt-6 text-xl font-label tracking-widest text-secondary max-w-2xl mx-auto uppercase font-bold">
                The Technical Registry
            </p>

            <!-- Breadcrumb Inside Hero -->
            <nav
                class="mt-8 flex items-center justify-center gap-3 text-sm font-label text-white/60 uppercase tracking-widest">
                <a class="hover:text-primary transition-colors" href="{{ route('welcome') }}">Home</a>
                <span class="material-symbols-outlined text-xs">chevron_right</span>
                <span class="text-secondary font-bold">Technical Registry</span>
            </nav>
        </div>
    </section>

    <!-- Mission Intro (Cleaned up) -->
    <section class="container py-5 mt-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-7" data-aos="fade-right">
                <h2 class="text-secondary text-sm font-bold tracking-widest uppercase mb-4" style="font-size: 0.8rem; letter-spacing: 0.3em;">The Liquid Summit Mission</h2>
                <h1 class="display-4 font-weight-black leading-tight tracking-tighter mb-4 italic" style="font-family: 'Epilogue', sans-serif;">
                    FORGED IN <span class="text-primary">ICE</span>,<br/>DRIVEN BY <span class="text-secondary">GOLD</span>.
                </h1>
                <p class="text-lg text-muted leading-relaxed max-w-xl">
                    We don't just rent motorcycles; we provide the precision instruments required to conquer the thin air of the Himalayas. Our team is a collective of high-altitude specialists, master mechanics, and cultural bridge-builders.
                </p>
                <div class="mt-5 d-flex gap-5">
                    <div class="border-left border-primary pl-4" style="border-width: 3px !important; border-color: rgba(155,233,247,0.3) !important;">
                        <div class="h3 font-weight-bold text-primary mb-0">15k+</div>
                        <div class="small text-uppercase tracking-wider text-muted">Km Guided</div>
                    </div>
                    <div class="border-left border-secondary pl-4" style="border-width: 3px !important; border-color: rgba(254,178,52,0.3) !important;">
                        <div class="h3 font-weight-bold text-secondary mb-0">100%</div>
                        <div class="small text-uppercase tracking-wider text-muted">Safety Record</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5" data-aos="fade-left">
                <div class="relative group">
                    <img class="img-fluid rounded-xl grayscale hover:grayscale-0 transition-all duration-700 shadow-2xl object-cover w-full h-[400px]" src="https://images.unsplash.com/photo-1558981403-c5f9899a28bc?q=80&w=2070&auto=format&fit=crop" alt="Mechanical detail">
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Founder Section -->
    @if($founders->count() > 0)
    <section class="container py-5 mb-5">
        @php $founder = $founders->first(); @endphp
        <div class="position-relative overflow-hidden rounded-xl shadow-2xl" style="height: 600px;">
            <img class="position-absolute w-100 h-100 object-cover" src="{{ $founder->getImage() ?? 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1974&auto=format&fit=crop' }}" alt="{{ $founder->name }}">
            <div class="position-absolute inset-0 w-100 h-100" style="background: linear-gradient(to right, rgba(14,14,19,0.9), rgba(14,14,19,0.4), transparent);"></div>
            <div class="position-relative h-100 d-flex flex-column justify-content-center px-4 md-px-10 col-md-7">
                <div class="glass-panel p-5 rounded-xl border-left-4 border-secondary shadow-2xl" data-aos="zoom-in">
                    <i class="bi bi-quote text-secondary display-4 mb-3 d-block"></i>
                    <p class="h3 md-h2 italic font-weight-light text-white mb-4">
                        "{{ $founder->quote ?? 'The summit isn\'t just a destination—it\'s a state of absolute clarity found only in the thin air of the Annapurna range.' }}"
                    </p>
                    <div>
                        <h3 class="h4 font-weight-bold text-primary">{{ $founder->name }}</h3>
                        <p class="text-secondary text-uppercase small tracking-widest font-weight-bold">{{ $founder->designation }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Staff/Operators Grid -->
    <section class="container py-5">
        <div class="d-flex justify-content-between align-items-end mb-5">
            <div>
                <h2 class="text-secondary text-sm font-bold tracking-widest uppercase mb-2" style="font-size: 0.75rem; letter-spacing: 0.3em;">Technical Registry</h2>
                <h3 class="display-4 font-weight-black italic" style="font-family: 'Epilogue', sans-serif;">THE OPERATORS</h3>
            </div>
            <div class="d-none d-md-block flex-grow-1 mx-5 border-bottom border-primary mb-3" style="opacity: 0.2;"></div>
        </div>

        <div class="row g-4">
            @foreach($operators as $index => $operator)
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="{{ 100 * ($index % 4) }}">
                <div class="glass-panel group p-4 rounded-xl shadow-lg h-100 shimmer position-relative overflow-hidden transition-all duration-300 hover:border-primary">
                    <div class="mb-4 overflow-hidden rounded-lg" style="aspect-ratio: 4/5;">
                        <img class="w-100 h-100 object-cover grayscale transition-all duration-700" src="{{ $operator->getImage() ?? 'https://images.unsplash.com/photo-1612349316228-5942a9b489c2?q=80&w=2070&auto=format&fit=crop' }}" alt="{{ $operator->name }}">
                    </div>
                    <div class="position-relative z-1">
                        <h4 class="h5 font-weight-bold text-white mb-1">{{ $operator->name }}</h4>
                        <p class="text-primary text-uppercase small tracking-widest mb-4" style="font-size: 0.65rem;">{{ $operator->designation }}</p>
                        
                        <div class="d-flex gap-3 social-links" style="opacity: 0.5;">
                            @if($operator->social_facebook)
                                <a href="{{ $operator->social_facebook }}" class="text-white hover:text-secondary"><i class="bi bi-facebook"></i></a>
                            @endif
                            @if($operator->social_instagram)
                                <a href="{{ $operator->social_instagram }}" class="text-white hover:text-secondary"><i class="bi bi-instagram"></i></a>
                            @endif
                            <a href="{{ route('team-details', $operator->slug) }}" class="text-white hover:text-secondary"><i class="bi bi-info-circle"></i></a>
                        </div>
                    </div>
                    <div class="position-absolute text-primary" style="bottom: -15px; right: -10px; opacity: 0.05; font-size: 6rem; font-weight: 900; font-family: 'Epilogue', sans-serif; font-style: italic;">
                        {{ sprintf('%02d', $index + 1) }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

</main>
@endsection

@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@400;700;800;900&display=swap" rel="stylesheet">
<style>
    .rounded-xl { border-radius: 1.25rem; }
    .object-cover { object-fit: cover; }
    .grayscale { filter: grayscale(100%); }
    .grayscale:hover { filter: grayscale(0%); }
    .transition-all { transition: all 0.3s ease; }
    .duration-700 { transition-duration: 0.7s; }
    .z-1 { z-index: 1; }
    .inset-0 { top: 0; left: 0; right: 0; bottom: 0; }
    
    /* Animation helper */
    .group:hover img {
        transform: scale(1.05);
    }
    .text-muted { color: #acaab1 !important; }
    .bg-dark { background-color: #0e0e13 !important; }
</style>
@endpush
