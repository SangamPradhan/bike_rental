@extends('layouts.app')

@push('css')
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@400;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        .bg-surface { background-color: #0e0e13; }
        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .liquid-gradient {
            background: linear-gradient(135deg, #9be9f7 0%, #5dacb9 100%);
        }
        .shimmer:hover {
            background: linear-gradient(110deg, rgba(255,255,255,0.07) 45%, rgba(255,255,255,0.15) 55%, rgba(255,255,255,0.07) 65%);
            background-size: 200% 100%;
        }
        .text-secondary { color: #feb234 !important; }
        .text-primary { color: #9be9f7 !important; }
        .text-muted { color: #acaab1 !important; }
        .font-headline { font-family: 'Epilogue', sans-serif; }
    </style>
@endpush

@section('content')
<main id="main" class="bg-surface text-white">

    <!-- ======= Hero Section ======= -->
    <section class="relative w-full h-[600px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover brightness-50"
                alt="Portrait of {{ $item->name }}"
                src="{{ asset('assets/img/meta/ride_banner.png') }}" />
            <div class="absolute inset-0 bg-gradient-to-b from-surface/40 via-surface/60 to-surface"></div>
        </div>
        <div class="relative z-10 text-center px-4">
            <h1
                class="font-headline text-6xl md:text-8xl font-black tracking-tighter text-white leading-tight uppercase text-shadow-xl">
                MEMBER <br /><span class="text-primary italic">PROFILE</span>
            </h1>
            <p class="mt-6 text-xl font-label tracking-widest text-secondary max-w-2xl mx-auto uppercase font-bold">
                {{ $item->name }} — {{ $item->designation }}
            </p>

            <!-- Breadcrumb Inside Hero -->
            <nav
                class="mt-8 flex items-center justify-center gap-3 text-sm font-label text-white/60 uppercase tracking-widest">
                <a class="hover:text-primary transition-colors" href="{{ route('welcome') }}">Home</a>
                <span class="material-symbols-outlined text-xs">chevron_right</span>
                <a class="hover:text-primary transition-colors" href="{{ route('team') }}">Team</a>
                <span class="material-symbols-outlined text-xs">chevron_right</span>
                <span class="text-secondary font-bold">{{ $item->name }}</span>
            </nav>
        </div>
    </section>

    <div class="container py-5 mt-5">

        <div class="row g-5 align-items-start">
            <!-- Profile Visual Section (Left) -->
            <div class="col-lg-5 position-relative" data-aos="fade-right">
                <div class="rounded-xl overflow-hidden shadow-2xl position-relative" style="z-index: 10;">
                    <img class="w-100 object-cover" style="aspect-ratio: 3/4;" src="{{ $item->getImage() ?? 'https://images.unsplash.com/photo-1612349316228-5942a9b489c2?q=80&w=2070&auto=format&fit=crop' }}" alt="{{ $item->name }}">
                    <div class="position-absolute bottom-0 left-0 w-100 p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                        <p class="text-secondary text-uppercase small tracking-widest mb-1">{{ $item->designation }}</p>
                        <h1 class="font-headline display-4 font-weight-black italic tracking-tighter text-white">{{ $item->name }}</h1>
                    </div>
                </div>
                <!-- Decorative Elements -->
                <div class="position-absolute" style="top: -20px; right: -20px; width: 150px; height: 150px; background: rgba(155,233,247,0.1); border-radius: 50%; blur: 80px; z-index: 0;"></div>
            </div>

            <!-- Profile Content Section (Right) -->
            <div class="col-lg-7 d-flex flex-column gap-5" data-aos="fade-left">
                <!-- Bio Card -->
                <div class="glass-card p-5 rounded-xl border-left-4 border-primary shadow-2xl">
                    <div class="row g-4 mb-4 border-bottom border-white-5 pb-4">
                        <div class="col-md-4">
                            <p class="small text-uppercase tracking-widest text-muted mb-1">Experience</p>
                            <p class="h4 font-weight-bold text-primary">{{ $item->experience ?? 'Expert' }}</p>
                        </div>
                        <div class="col-md-4">
                            <p class="small text-uppercase tracking-widest text-muted mb-1">Specialty</p>
                            <p class="h4 font-weight-bold text-primary">{{ $item->specialist ?? 'Technical' }}</p>
                        </div>
                        <div class="col-md-4">
                            <p class="small text-uppercase tracking-widest text-muted mb-1">Language</p>
                            <p class="h4 font-weight-bold text-primary">{{ $item->languages ?? 'English' }}</p>
                        </div>
                    </div>
                    
                    <div class="bio-text">
                        <h2 class="font-headline h3 font-weight-bold mb-4">Registry Profile Overview</h2>
                        <div class="text-muted lead mb-4">
                            {!! $item->introduction !!}
                        </div>
                    </div>

                    @if($item->social_facebook || $item->social_instagram || $item->email)
                    <div class="d-flex gap-4 pt-3">
                        @if($item->social_facebook)
                            <a href="{{ $item->social_facebook }}" class="text-white h4 hover-text-primary"><i class="bi bi-facebook"></i></a>
                        @endif
                        @if($item->social_instagram)
                            <a href="{{ $item->social_instagram }}" class="text-white h4 hover-text-primary"><i class="bi bi-instagram"></i></a>
                        @endif
                        @if($item->email)
                            <a href="mailto:{{ $item->email }}" class="text-white h4 hover-text-primary"><i class="bi bi-envelope"></i></a>
                        @endif
                    </div>
                    @endif
                </div>

                <!-- Expertise Bento Grid -->
                <div class="row g-4">
                    <!-- Machine Choice -->
                    @if($item->favBike)
                    <div class="col-md-6">
                        <div class="glass-card p-4 rounded-xl d-flex align-items-center gap-3 hover-bg-white-15 transition-all">
                            <div class="flex-shrink-0 w-12 h-12 rounded-lg bg-surface flex align-items-center justify-center text-secondary border border-secondary" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                <i class="bi bi-bicycle h3 mb-0"></i>
                            </div>
                            <div>
                                <h3 class="h6 font-weight-bold mb-0">{{ $item->favBike->title }}</h3>
                                <p class="small text-muted mb-0">Machine of choice</p>
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- First Responder/Certification -->
                    <div class="col-md-6">
                        <div class="glass-card p-4 rounded-xl d-flex align-items-center gap-3 hover-bg-white-15 transition-all">
                            <div class="flex-shrink-0 w-12 h-12 rounded-lg bg-surface flex align-items-center justify-center text-secondary border border-secondary" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                <i class="bi bi-shield-check h3 mb-0"></i>
                            </div>
                            <div>
                                <h3 class="h6 font-weight-bold mb-0">Himalayan Certified</h3>
                                <p class="small text-muted mb-0">Safety & Rescue</p>
                            </div>
                        </div>
                    </div>

                    <!-- Skills & Expertise -->
                    @if($item->skills)
                    <div class="col-12">
                        <div class="glass-card p-4 rounded-xl">
                            <h3 class="h6 font-weight-bold text-primary text-uppercase tracking-widest mb-3">Operator Expertise</h3>
                            <div class="d-flex flex-wrap gap-2">
                                @foreach(explode(',', $item->skills) as $skill)
                                    <span class="badge bg-transparent border border-secondary text-secondary p-2 px-3 rounded-pill">{{ trim($skill) }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif
                </div>

                <!-- CTA -->
                <div class="mt-4 position-relative">
                    <div class="glass-card p-4 rounded-xl border border-primary-20 d-flex flex-column flex-md-row justify-content-between align-items-center gap-4 overflow-hidden">
                        <div class="position-absolute w-100 h-100 liquid-gradient blur-xl opacity-10" style="z-index: 0; top:0; left:0;"></div>
                        <div class="position-relative" style="z-index: 1;">
                            <h3 class="font-headline h4 font-weight-black italic mb-1">READY FOR THE CLIMB?</h3>
                            <p class="text-muted small text-uppercase tracking-widest mb-0">Reserve your spot on {{ $item->name }}'s next expedition.</p>
                        </div>
                        <a href="{{ route('ride-booking') }}" class="btn liquid-gradient text-dark font-weight-black p-3 px-4 rounded-xl position-relative shadow-lg transition-all hover-scale-105" style="z-index: 1;">
                            BOOK EXPEDITION
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('css')
<style>
    .rounded-xl { border-radius: 1rem; }
    .object-cover { object-fit: cover; }
    .transition-all { transition: all 0.3s ease-round; }
    .hover-scale-105:hover { transform: scale(1.05); }
    .border-left-4 { border-left: 4px solid !important; }
    .hover-text-primary:hover { color: #9be9f7 !important; }
    .hover-text-secondary:hover { color: #feb234 !important; }
</style>
@endpush