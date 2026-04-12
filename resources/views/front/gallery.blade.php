@extends('layouts.app')

@push('css')
    <meta property="og:title" content="Explore Our Gallery - BikeRental.com Himalayan Adventures" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ route('gallery') }}" />
    <style>
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(1, minmax(0, 1fr));
            gap: 2rem;
        }

        @media (min-width: 768px) {
            .gallery-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (min-width: 1024px) {
            .gallery-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 1rem;
            background: #131319;
            aspect-ratio: 16 / 9;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .gallery-item:hover {
            transform: translateY(-8px) scale(1.02);
            border-color: rgba(155, 233, 247, 0.3);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.8), 0 0 15px rgba(155, 233, 247, 0.1);
        }

        .gallery-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }

        .gallery-item:hover .gallery-image {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, transparent 60%);
            opacity: 0;
            transition: opacity 0.4s ease;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 1.5rem;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .fancybox-bg {
            background: rgba(14, 14, 19, 0.95) !important;
        }
    </style>
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="relative w-full h-[500px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover brightness-50"
                alt="Cinematic wide shot of a rugged black adventure motorcycle parked on a high mountain pass"
                src="{{ asset('assets/img/meta/ride_banner.png') }}" />
            <div class="absolute inset-0 bg-gradient-to-b from-surface/40 via-surface/60 to-surface"></div>
        </div>
        <div class="relative z-10 text-center px-4">
            <h1 class="font-headline text-5xl md:text-7xl font-black tracking-tighter text-white leading-tight uppercase">
                THE <span class="text-primary italic">GALLERY</span>
            </h1>
            <!-- Breadcrumb -->
            <nav
                class="mt-8 flex items-center justify-center gap-3 text-xs font-label text-white/40 uppercase tracking-widest">
                <a class="hover:text-primary transition-colors" href="{{ route('welcome') }}">Home</a>
                <span class="material-symbols-outlined text-[10px]">chevron_right</span>
                <span class="text-secondary font-bold">The Lens</span>
            </nav>
        </div>
    </section>

    <main class="py-24 px-6 md:px-12 max-w-screen-2xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($galleries as $index => $gallery)
                <div data-aos="cinematic-up" data-aos-delay="{{ ($index % 3) * 100 }}"
                    class="group relative aspect-[4/3] overflow-hidden rounded-2xl border border-white/5 shadow-2xl">
                    <a href="{{ $gallery->getImage() ?? asset('assets/img/gallery/ClinicStore.png') }}"
                        data-fancybox="bikerental-gallery" data-caption="Photo Series Alpha • Himalayan Peak"
                        class="block w-full h-full">

                        <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                            src="{{ $gallery->getImage() ?? asset('assets/img/gallery/ClinicStore.png') }}"
                            alt="BikeRental Gallery Image" />

                        <div
                            class="gallery-overlay glass-panel m-4 rounded-lg border border-white/5 opacity-0 group-hover:opacity-100 transition-opacity duration-400">
                            <div class="flex justify-between items-end">
                                <div>
                                    <h3 class="font-headline text-lg font-bold text-white uppercase tracking-tight">Himalayan
                                        Peak</h3>
                                    <p class="font-label text-[10px] tracking-widest text-primary uppercase font-bold">Series
                                        Alpha • 2024</p>
                                </div>
                                <span class="material-symbols-outlined text-secondary text-2xl amber-glow"
                                    style="font-variation-settings: 'FILL' 1;">zoom_in</span>
                            </div>
                        </div>
                    </a>
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

    @push('js')
        <script>
            $(document).ready(function () {
                $('[data-fancybox="bikerental-gallery"]').fancybox({
                    loop: true,
                    buttons: [
                        "zoom",
                        "slideShow",
                        "fullScreen",
                        "close"
                    ],
                    animationEffect: "zoom-in-out",
                    transitionEffect: "slide",
                    keyboard: true,
                    arrows: true,
                    infobar: true,
                    touch: {
                        vertical: true, // Allow to drag content vertically
                        momentum: true // Continue movement after releasing mouse/touch
                    }
                });
            });
        </script>
    @endpush
@endsection