@extends('layouts.app')

@push('css')
    <meta property="og:title" content="Contact Us - BikeRental.com Himalayan Adventures" />
    <meta property="og:type" content="website" />
    <meta property="og:description"
        content="Planning a trek through the clouds? Our mountain guides and technical team are standing by to assist your Himalayan expedition." />
    <meta property="og:url" content="{{ route('contact') }}" />
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
                GET IN <br /><span class="text-primary italic">TOUCH</span>
            </h1>
            <p class="mt-6 text-xl font-label tracking-widest text-secondary max-w-2xl mx-auto uppercase font-bold">
                Planning a Trek Through the Clouds?
            </p>
            
            <!-- Breadcrumb Inside Hero -->
            <nav class="mt-8 flex items-center justify-center gap-3 text-sm font-label text-white/60 uppercase tracking-widest">
                <a class="hover:text-primary transition-colors" href="{{ route('welcome') }}">Home</a>
                <span class="material-symbols-outlined text-xs">chevron_right</span>
                <span class="text-secondary font-bold">Contact Us</span>
            </nav>
        </div>
    </section>

    <main class="pb-24 px-6 md:px-12 max-w-7xl mx-auto text-white">

        <!-- Main Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            <!-- Left Column: Contact Form -->
            <div class="lg:col-span-7 glass-panel p-8 md:p-12 rounded-2xl border border-white/5 shadow-2xl relative overflow-hidden">
                <div class="absolute -top-24 -left-24 w-64 h-64 bg-primary/5 rounded-full blur-[100px]"></div>
                
                @if (session('success'))
                    <div class="mb-8 p-6 rounded-xl bg-primary/10 border border-primary/20 text-primary font-label text-sm uppercase tracking-widest flex items-center gap-3">
                        <span class="material-symbols-outlined">check_circle</span>
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact-submit') }}" method="post" class="space-y-6 relative z-10">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="font-label text-[10px] uppercase tracking-[0.2em] font-bold text-on-surface-variant">Full Name</label>
                            <input
                                class="w-full bg-surface-container-high border-none border-b-2 border-transparent focus:border-primary focus:ring-0 rounded-xl p-4 text-on-surface transition-all placeholder:text-white/20"
                                name="name" placeholder="Tenzing Norgay" type="text" required />
                        </div>
                        <div class="space-y-2">
                            <label class="font-label text-[10px] uppercase tracking-[0.2em] font-bold text-on-surface-variant">Email Address</label>
                            <input
                                class="w-full bg-surface-container-high border-none border-b-2 border-transparent focus:border-primary focus:ring-0 rounded-xl p-4 text-on-surface transition-all placeholder:text-white/20"
                                name="email" placeholder="tenzing@himalaya.com" type="email" required />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="font-label text-[10px] uppercase tracking-[0.2em] font-bold text-on-surface-variant">Subject</label>
                            <input
                                class="w-full bg-surface-container-high border-none border-b-2 border-transparent focus:border-primary focus:ring-0 rounded-xl p-4 text-on-surface transition-all placeholder:text-white/20"
                                name="subject" placeholder="Expedition Planning" type="text" required />
                        </div>
                         <div class="space-y-2">
                            <label class="font-label text-[10px] uppercase tracking-[0.2em] font-bold text-on-surface-variant">Phone Number</label>
                            <input
                                class="w-full bg-surface-container-high border-none border-b-2 border-transparent focus:border-primary focus:ring-0 rounded-xl p-4 text-on-surface transition-all placeholder:text-white/20"
                                name="phone" placeholder="+977 1-4XXXXXX" type="tel" />
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="font-label text-[10px] uppercase tracking-[0.2em] font-bold text-on-surface-variant">Your Message</label>
                        <textarea
                            class="w-full bg-surface-container-high border-none border-b-2 border-transparent focus:border-primary focus:ring-0 rounded-xl p-4 text-on-surface transition-all placeholder:text-white/20"
                            name="message" placeholder="Tell us about your dream ride..." rows="5" required></textarea>
                    </div>
                    <button
                        class="w-full md:w-auto bg-secondary text-on-secondary font-headline font-black text-xs tracking-widest uppercase px-12 py-5 rounded-full hover:scale-105 active:scale-95 transition-all shadow-2xl shadow-secondary/30 amber-glow"
                        type="submit">
                        Send Expedition Request
                    </button>
                </form>
            </div>

            <!-- Right Column: Contact Info & Map -->
            <div class="lg:col-span-5 space-y-8">
                <!-- Info Card -->
                <div class="bg-surface-container-high p-8 rounded-2xl border border-white/5 shadow-2xl space-y-10 relative overflow-hidden">
                    <div class="absolute -right-24 -bottom-24 w-64 h-64 bg-secondary/5 rounded-full blur-[100px]"></div>
                    
                    <div class="flex items-start space-x-6 relative z-10">
                        <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0 border border-primary/20">
                            <span class="material-symbols-outlined text-primary text-2xl">location_on</span>
                        </div>
                        <div>
                            <h4 class="font-label text-[10px] uppercase tracking-widest font-bold text-on-surface-variant mb-1">Basecamp Location</h4>
                            <p class="text-white font-headline font-bold text-lg">Thamel Marg 23, Kathmandu, Nepal</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-6 relative z-10">
                        <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0 border border-primary/20">
                            <span class="material-symbols-outlined text-primary text-2xl">call</span>
                        </div>
                        <div>
                            <h4 class="font-label text-[10px] uppercase tracking-widest font-bold text-on-surface-variant mb-1">Satellite Phone</h4>
                            <p class="text-white font-headline font-bold text-lg">+977 1-4412345</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-6 relative z-10">
                        <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0 border border-primary/20">
                            <span class="material-symbols-outlined text-primary text-2xl">mail</span>
                        </div>
                        <div>
                            <h4 class="font-label text-[10px] uppercase tracking-widest font-bold text-on-surface-variant mb-1">Expedition Support</h4>
                            <p class="text-white font-headline font-bold text-lg">support@bikerental.com</p>
                        </div>
                    </div>

                    <div class="pt-8 border-t border-white/5 relative z-10">
                        <h4 class="font-label text-[10px] uppercase tracking-widest font-bold text-on-surface-variant mb-6">Follow the Trail</h4>
                        <div class="flex space-x-6">
                            <a class="text-on-surface-variant hover:text-secondary transition-all transform hover:scale-125" href="#">
                                <svg class="w-7 h-7" fill="currentColor" viewbox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path></svg>
                            </a>
                            <a class="text-on-surface-variant hover:text-secondary transition-all transform hover:scale-125" href="#">
                                <svg class="w-7 h-7" fill="currentColor" viewbox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.84 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"></path></svg>
                            </a>
                            <a class="text-on-surface-variant hover:text-secondary transition-all transform hover:scale-125" href="#">
                                <svg class="w-7 h-7" fill="currentColor" viewbox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.066 2.1.296 2.593.488.651.253 1.117.555 1.604 1.042.487.487.789.953 1.042 1.604.192.493.422 1.227.488 2.593.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.066 1.366-.296 2.1-.488 2.593-.253.651-.555 1.117-1.042 1.604-.487.487-.953.789-1.604 1.042-.493.192-1.227.422-2.593.488-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.066-2.1-.296-2.593-.488-.651-.253-1.117-.555-1.604-1.042-.487-.487-.789-.953-1.042-1.604-.192-.493-.422-1.227-.488-2.593C2.175 15.647 2.163 15.267 2.163 12s.012-3.584.07-4.85c.066-1.366.296-2.1.488-2.593.253-.651.555-1.117 1.042-1.604.487-.487.953-.789 1.604-1.042.493-.192 1.227-.422 2.593-.488 1.266-.058 1.646-.07 4.85-.07m0-2.163C8.741 0 8.332.015 7.052.072 5.775.127 4.903.33 4.145.625c-.784.305-1.448.711-2.11 1.373-.662.662-1.068 1.326-1.373 2.11-.295.758-.499 1.63-.554 2.907C.015 8.332 0 8.741 0 12s.015 3.668.072 4.948c.055 1.277.259 2.149.554 2.907.305.784.711 1.448 1.373 2.11.662.662 1.326 1.068 2.11 1.373.758.295 1.63.499 2.907.554 1.28.057 1.689.072 4.948.072s3.668-.015 4.948-.072c1.277-.055 2.149-.259 2.907-.554.784-.305 1.448-.711 2.11-1.373.662-.662 1.068-1.326 1.373-2.11.295-.758.499-1.63.554-2.907.057-1.28.072-1.689.072-4.948s-.015-3.668-.072-4.948c-.055-1.277-.259-2.149-.554-2.907-.305-.784-.711-1.448-1.373-2.11-.662-.662-1.326-1.068-2.11-1.373-.758-.295-1.63-.499-2.907-.554-1.28-.057-1.689-.072-4.948-.072z"></path><path d="M12 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8z"></path><path d="M18.406 4.144a1.44 1.44 0 100 2.88 1.44 1.44 0 000-2.88z"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Map Placeholder -->
                <div class="relative w-full h-[350px] rounded-2xl overflow-hidden border border-white/5 grayscale contrast-125 brightness-50 group hover:grayscale-0 transition-all duration-[2000ms]">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-[2000ms]"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDF151MO-2aByOq1qngj397zM_snXnl6B74VjGx-TG03OSbCQS7Lui9UV39bw119m7QnHUDZ4d0eIwJT3blbKw5A3nq8HUppYM-O2BUyA0SUY7uSeLVFRAQ41p8Ui-xE31tsM9huioJYglP6qHpTkqK7zMbjaCMAzbR2n6CmX-KRJXu5Qq_mPmZwzUGcLhh2ga3VMiE7yRWNdB0G3P6jWlW29-Cf1Po3coGG6pn-WPFnf-1U7mbAnmmP-9VlgtTelWNyHSqmUoKIUo"/>
                    <div class="absolute inset-0 bg-primary/10 mix-blend-overlay"></div>
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        <span class="material-symbols-outlined text-5xl text-secondary animate-bounce" style="font-variation-settings: 'FILL' 1;">location_on</span>
                    </div>
                    <div class="absolute bottom-6 left-6 glass-panel px-4 py-2 rounded-xl text-[10px] font-label tracking-widest uppercase font-bold text-white border border-white/10 shadow-xl">
                        GPS: 27.7172° N, 85.3240° E
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Navigation Section -->
    <section class="navigation py-24 bg-surface-container-lowest relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-primary/5 via-transparent to-transparent"></div>
        <div class="container mx-auto px-8 relative z-10">
            <h3 class="font-headline text-4xl font-black text-white mb-12 uppercase tracking-tighter">Route to Basecamp</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                @php
                    $steps = [
                        ['Lakeside Road', 'roadpng.png', 1],
                        ['Hotel Landmark', 'office-building.png', 2],
                        ['Near Bike Hire', 'parking.png', 3],
                        ['Sagarmatha Paragliding', 'paragliding.png', 4],
                        ['BikeRental.com', 'building.png', 5],
                    ];
                @endphp
                @foreach($steps as $step)
                    <div class="glass-panel p-8 rounded-2xl border border-white/5 text-center group hover:border-primary/50 transition-all duration-500 shadow-xl">
                        <div class="w-16 h-16 mx-auto mb-6 relative">
                           <div class="absolute -top-3 -right-3 w-8 h-8 bg-secondary rounded-full flex items-center justify-center text-on-secondary font-headline font-black text-xs">{{ $step[2] }}</div>
                           <img src="{{ asset('assets/img/navigation/' . $step[1]) }}" class="w-full h-full object-contain filter group-hover:brightness-125 transition-all" alt="{{ $step[0] }}">
                        </div>
                        <h4 class="font-headline font-bold text-white text-sm uppercase tracking-tight">{{ $step[0] }}</h4>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
