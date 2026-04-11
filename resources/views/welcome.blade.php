@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-screen w-full flex items-stretch justify-center overflow-visible bg-surface">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover brightness-[0.4]" alt="Adventure motorcycle in the Himalayas"
                src="{{ asset('assets/img/meta/mountain_bike.png') }}" />
            <div class="absolute inset-0 bg-gradient-to-b from-surface/20 via-transparent to-surface"></div>
        </div>

        <div class="relative z-20 w-full max-w-screen-2xl px-6 md:px-12 booking-search-container">
            <div class="flex flex-col h-full">
                <!-- Hero Headline -->
                <div class="mt-16 lg:mt-24 mb-10 w-full max-w-[1100px] mx-auto">
                    <h1 data-aos="cinematic-up"
                        class="font-headline text-5xl md:text-8xl font-black tracking-tighter text-white leading-[0.9] uppercase text-shadow-2xl text-left">
                        Ride to the <span class="text-[#9be9f7] italic">Himalayas.</span>
                    </h1>
                </div>

                <!-- Advanced Booking Search Widget -->
                <div class="booking-widget-wrapper">
                    <!-- Tabs -->
                    <div class="booking-tabs">
                        <button type="button" id="tab-rent" class="tab-btn active" onclick="switchBookingTab('rent')">Rent a
                            Bike</button>
                        <button type="button" id="tab-pickup" class="tab-btn" onclick="switchBookingTab('pickup')">Pick
                            Up</button>
                    </div>

                    <!-- Form Content -->
                    <div class="booking-form-content">
                        <h2 class="booking-title">Advanced Booking Search</h2>

                        <form action="{{ route('rides') }}" method="GET" id="booking-form">
                            <input type="hidden" name="booking_type" id="booking_type" value="rent">

                            <div class="booking-grid">
                                <!-- Pick Up Date -->
                                <div class="booking-field-group">
                                    <label class="booking-label">Pick Up Date <span class="required">*</span></label>
                                    <div class="flex items-center gap-2">
                                        <span class="material-symbols-outlined text-gray-500 text-sm">calendar_month</span>
                                        <input type="date" name="pickup_date" id="pickup_date" class="booking-input"
                                            required>
                                    </div>
                                </div>

                                <!-- Drop off Date -->
                                <div class="booking-field-group">
                                    <label class="booking-label">Drop off Date <span class="required">*</span></label>
                                    <div class="flex items-center gap-2">
                                        <span class="material-symbols-outlined text-gray-500 text-sm">calendar_month</span>
                                        <input type="date" name="dropoff_date" id="dropoff_date" class="booking-input"
                                            required>
                                    </div>
                                </div>

                                <!-- Pickup Location -->
                                <div class="booking-field-group">
                                    <label class="booking-label">Pickup Location <span class="required">*</span></label>
                                    <div class="flex items-center gap-2">
                                        <span class="material-symbols-outlined text-gray-500 text-sm">location_on</span>
                                        <select name="pickup_location" id="pickup_location" class="booking-input" required>
                                            <option value="" disabled selected>Select City</option>
                                            <option value="Kathmandu">Kathmandu</option>
                                            <option value="Pokhara">Pokhara</option>
                                            <option value="Butwal">Butwal</option>
                                            <option value="Narayangadh">Narayangadh</option>
                                            <option value="Gorkha">Gorkha</option>
                                        </select>
                                        <!-- Placeholder for fixed location -->
                                        <input type="text" id="pickup_location_fixed" class="booking-input hidden"
                                            value="Pokhara-15, Lakeside" readonly disabled>
                                    </div>
                                </div>

                                <!-- Dropoff Location -->
                                <div class="booking-field-group">
                                    <label class="booking-label">Dropoff Location <span class="required">*</span></label>
                                    <div class="flex items-center gap-2">
                                        <span class="material-symbols-outlined text-gray-500 text-sm">location_on</span>
                                        <select name="dropoff_location" id="dropoff_location" class="booking-input"
                                            required>
                                            <option value="" disabled selected>Select City</option>
                                            <option value="Kathmandu">Kathmandu</option>
                                            <option value="Pokhara">Pokhara</option>
                                            <option value="Butwal">Butwal</option>
                                            <option value="Narayangadh">Narayangadh</option>
                                            <option value="Gorkha">Gorkha</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Vehicle Type -->
                                <div class="booking-field-group">
                                    <label class="booking-label">Type <span class="required">*</span></label>
                                    <div class="flex items-center gap-2">
                                        <span class="material-symbols-outlined text-gray-500 text-sm">sell</span>
                                        <select name="vehicle_type" id="vehicle_type" class="booking-input" required>
                                            <option value="Bike">Bike</option>
                                            <option value="Scooter">Scooter</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Search Button -->
                                <div class="flex items-end">
                                    <button type="submit" class="search-submit-btn w-full">SEARCH</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Process Section -->
    <section class="py-32 bg-surface text-white">
        <div class="max-w-screen-2xl mx-auto px-12">
            <div data-aos="fade-up" class="mb-20">
                <span class="text-secondary font-label text-sm font-bold uppercase tracking-[0.3em]">The Journey</span>
                <h2 class="text-5xl md:text-6xl font-headline font-black mt-4 text-white">Simple 4-Step Process</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div data-aos="cinematic-up" data-aos-delay="0"
                    class="group relative glass-panel p-10 rounded-2xl border border-white/5 hover:border-primary/30 transition-all duration-500 overflow-hidden">
                    <div class="absolute -right-4 -top-4 opacity-10 group-hover:opacity-20 transition-opacity">
                        <span class="text-9xl font-headline font-black">01</span>
                    </div>
                    <span class="material-symbols-outlined text-5xl text-secondary mb-6 amber-glow">motorcycle</span>
                    <h3 class="text-xl font-headline font-bold mb-4 uppercase tracking-tighter text-white">Choose Your Bike
                    </h3>
                    <p class="text-on-surface-variant font-body">Browse our fleet of expedition-ready Royal Enfields and
                        KTMs.</p>
                </div>
                <div data-aos="cinematic-up" data-aos-delay="100"
                    class="group relative glass-panel p-10 rounded-2xl border border-white/5 hover:border-primary/30 transition-all duration-500 overflow-hidden">
                    <div class="absolute -right-4 -top-4 opacity-10 group-hover:opacity-20 transition-opacity">
                        <span class="text-9xl font-headline font-black">02</span>
                    </div>
                    <span class="material-symbols-outlined text-5xl text-secondary mb-6 amber-glow">book_online</span>
                    <h3 class="text-xl font-headline font-bold mb-4 uppercase tracking-tighter text-white">Make a Booking
                    </h3>
                    <p class="text-on-surface-variant font-body">Secure your dates with our transparent liquid-fast
                        interface.</p>
                </div>
                <div data-aos="cinematic-up" data-aos-delay="200"
                    class="group relative glass-panel p-10 rounded-2xl border border-white/5 hover:border-primary/30 transition-all duration-500 overflow-hidden">
                    <div class="absolute -right-4 -top-4 opacity-10 group-hover:opacity-20 transition-opacity">
                        <span class="text-9xl font-headline font-black">03</span>
                    </div>
                    <span class="material-symbols-outlined text-5xl text-secondary mb-6 amber-glow">map</span>
                    <h3 class="text-xl font-headline font-bold mb-4 uppercase tracking-tighter text-white">Select Location
                    </h3>
                    <p class="text-on-surface-variant font-body">Choose pickup points across Leh, Manali, or Srinagar.
                    </p>
                </div>
                <div data-aos="cinematic-up" data-aos-delay="300"
                    class="group relative glass-panel p-10 rounded-2xl border border-white/5 hover:border-primary/30 transition-all duration-500 overflow-hidden">
                    <div class="absolute -right-4 -top-4 opacity-10 group-hover:opacity-20 transition-opacity">
                        <span class="text-9xl font-headline font-black">04</span>
                    </div>
                    <span class="material-symbols-outlined text-5xl text-secondary mb-6 amber-glow">vaping_rooms</span>
                    <h3 class="text-xl font-headline font-bold mb-4 uppercase tracking-tighter text-white">Ride with Pride
                    </h3>
                    <p class="text-on-surface-variant font-body">Hit the high passes with premium gear and 24/7 roadside
                        support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Best Brands Section -->
    <section class="py-32 bg-surface-container-low border-y border-white/5 text-white">
        <div class="max-w-screen-2xl mx-auto px-12">
            <div data-aos="fade-up" class="text-center mb-8">
                <span class="text-secondary font-label text-sm font-bold uppercase tracking-[0.3em]">Core Values</span>
                <h2 class="text-5xl md:text-6xl font-headline font-black mt-4 text-white">Best Brands?</h2>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-center">
                <!-- Left Info Points -->
                <div class="space-y-16">
                    <div data-aos="cinematic-right" data-aos-delay="0"
                        class="flex items-start gap-6 group text-right lg:flex-row-reverse">
                        <div
                            class="w-16 h-16 shrink-0 rounded-xl glass-panel border border-white/10 flex items-center justify-center group-hover:border-primary transition-all duration-500">
                            <span class="material-symbols-outlined text-3xl text-primary">support_agent</span>
                        </div>
                        <div>
                            <h4 class="text-xl font-headline font-black uppercase mb-3 text-white">24-Hour Service</h4>
                            <p class="text-on-surface-variant text-sm leading-relaxed max-w-xs ml-auto">Round-the-clock
                                emergency assistance and support for all our riders in the mountains.</p>
                        </div>
                    </div>
                    <div data-aos="cinematic-right" data-aos-delay="150"
                        class="flex items-start gap-6 group text-right lg:flex-row-reverse">
                        <div
                            class="w-16 h-16 shrink-0 rounded-xl glass-panel border border-white/10 flex items-center justify-center group-hover:border-primary transition-all duration-500">
                            <span class="material-symbols-outlined text-3xl text-primary">handyman</span>
                        </div>
                        <div>
                            <h4 class="text-xl font-headline font-black uppercase mb-3 text-white">Dedicated Workshop</h4>
                            <p class="text-on-surface-variant text-sm leading-relaxed max-w-xs ml-auto">In-house
                                maintenance by certified mechanics ensures every bike is expedition-ready.</p>
                        </div>
                    </div>
                </div>
                <!-- Center Image (Dynamic Brand Carousel) -->
                <div data-aos="zoom-in" data-aos-delay="100"
                    class="relative py-12 flex flex-col items-center overflow-hidden">
                    <div class="absolute inset-0 bg-primary/20 blur-[120px] rounded-full scale-75 animate-pulse"></div>

                    <!-- Swiper Carousel -->
                    <div class="swiper brandSwiper w-full relative z-10">
                        <div class="swiper-wrapper">
                            @if(isset($brands) && $brands->count() > 0)
                                @foreach($brands as $brand)
                                    <div class="swiper-slide text-center" data-brand-id="{{ $brand->id }}"
                                        data-brand-type="{{ $brand->type }}">
                                        @if($brand->getFirstMediaUrl())
                                            <img alt="{{ $brand->name }}"
                                                class="mx-auto drop-shadow-[0_20px_50px_rgba(0,0,0,0.8)] h-64 md:h-80 object-contain"
                                                src="{{ $brand->getImage() ?? asset('assets/img/meta/himalayan.png') }}" />
                                        @else
                                            <div
                                                class="mx-auto h-64 md:h-80 flex items-center justify-center bg-white/5 rounded-2xl w-3/4 border border-white/10">
                                                <span
                                                    class="text-3xl font-headline font-black text-white/50 uppercase">{{ $brand->name }}</span>
                                            </div>
                                        @endif
                                        <h3 class="text-2xl font-headline font-black mt-6 text-white tracking-widest">
                                            {{ strtoupper($brand->name) }}
                                        </h3>
                                    </div>
                                @endforeach
                            @else
                                <!-- Fallback Static Slide -->
                                <div class="swiper-slide text-center" data-brand-id="all">
                                    <img alt="Himalayan Adventure Motorcycle"
                                        class="mx-auto drop-shadow-[0_20px_50px_rgba(0,0,0,0.8)] h-64 md:h-80 object-contain"
                                        src="{{ asset('assets/img/meta/himalayan.png') }}" />
                                    <h3 class="text-2xl font-headline font-black mt-6 text-white tracking-widest">PREMIUM BRANDS
                                    </h3>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Navigation and Select Model Button -->
                    <div class="relative z-20 flex items-center justify-center gap-6 mt-10">
                        <button
                            class="brand-prev bg-white/5 hover:bg-primary hover:text-on-primary border border-white/10 text-white rounded-full w-12 h-12 flex items-center justify-center transition-all duration-300 relative z-30">
                            <span class="material-symbols-outlined">chevron_left</span>
                        </button>
                        <button id="selectModelBtn"
                            class="px-8 py-3 outline-none border-none bg-secondary text-black font-headline font-black uppercase text-sm tracking-widest rounded-full hover:scale-105 active:scale-95 transition-all duration-300 shadow-[0_10px_20px_rgba(254,178,52,0.3)] relative z-30">
                            Select Model
                        </button>
                        <button
                            class="brand-next bg-white/5 hover:bg-primary hover:text-on-primary border border-white/10 text-white rounded-full w-12 h-12 flex items-center justify-center transition-all duration-300 relative z-30">
                            <span class="material-symbols-outlined">chevron_right</span>
                        </button>
                    </div>
                </div>
                <!-- Right Info Points -->
                <div class="space-y-16">
                    <div data-aos="cinematic-left" data-aos-delay="0" class="flex items-start gap-6 group">
                        <div
                            class="w-16 h-16 shrink-0 rounded-xl glass-panel border border-white/10 flex items-center justify-center group-hover:border-primary transition-all duration-500">
                            <span class="material-symbols-outlined text-3xl text-primary">verified</span>
                        </div>
                        <div>
                            <h4 class="text-xl font-headline font-black uppercase mb-3 text-white">ISO Certification</h4>
                            <p class="text-on-surface-variant text-sm leading-relaxed max-w-xs">We adhere to
                                international safety and quality standards for motorcycle fleet management.</p>
                        </div>
                    </div>
                    <div data-aos="cinematic-left" data-aos-delay="150" class="flex items-start gap-6 group">
                        <div
                            class="w-16 h-16 shrink-0 rounded-xl glass-panel border border-white/10 flex items-center justify-center group-hover:border-primary transition-all duration-500">
                            <span class="material-symbols-outlined text-3xl text-primary">map</span>
                        </div>
                        <div>
                            <h4 class="text-xl font-headline font-black uppercase mb-3 text-white">All Nepal Service</h4>
                            <p class="text-on-surface-variant text-sm leading-relaxed max-w-xs">Pickup and drop-off
                                network spanning across all provinces and major high-altitude hubs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- The Liquid Summit Edge -->
    <section class="py-32 bg-surface overflow-hidden text-white">
        <div class="max-w-screen-2xl mx-auto px-12 grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
            <div data-aos="cinematic-right" class="relative">
                <div class="absolute -inset-10 bg-primary/10 blur-[100px] rounded-full"></div>
                <img class="relative z-10 w-full drop-shadow-[0_35px_60px_-15px_rgba(0,0,0,0.6)] transform -rotate-6 hover:rotate-0 transition-transform duration-700"
                    alt="High-resolution cutout of a black Royal Enfield Himalayan adventure motorcycle against a minimalist dark studio background"
                    src="{{ asset('assets/img/meta/himalayan.png') }}" />
            </div>
            <div data-aos="cinematic-left">
                <span class="text-secondary font-label text-sm font-bold uppercase tracking-[0.3em]">Superiority</span>
                <h2 class="text-5xl md:text-6xl font-headline font-black mt-4 mb-12 text-white">The Liquid Summit Edge.</h2>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <div
                        class="glass-panel p-6 rounded-lg border border-white/5 flex flex-col gap-3 group hover:border-primary/40 transition-colors">
                        <span class="text-primary font-headline font-bold text-3xl">24/7</span>
                        <span class="text-xs uppercase tracking-widest font-label text-on-surface-variant">Support</span>
                    </div>
                    <div
                        class="glass-panel p-6 rounded-lg border border-white/5 flex flex-col gap-3 group hover:border-primary/40 transition-colors">
                        <span class="text-primary font-headline font-bold text-3xl">GPS</span>
                        <span class="text-xs uppercase tracking-widest font-label text-on-surface-variant">Enabled</span>
                    </div>
                    <div
                        class="glass-panel p-6 rounded-lg border border-white/5 flex flex-col gap-3 group hover:border-primary/40 transition-colors">
                        <span class="text-primary font-headline font-bold text-3xl">New</span>
                        <span class="text-xs uppercase tracking-widest font-label text-on-surface-variant">Fleet</span>
                    </div>
                    <div
                        class="glass-panel p-6 rounded-lg border border-white/5 flex flex-col gap-3 group hover:border-primary/40 transition-colors">
                        <span class="text-primary font-headline font-bold text-3xl">Full</span>
                        <span class="text-xs uppercase tracking-widest font-label text-on-surface-variant">Insurance</span>
                    </div>
                    <div
                        class="glass-panel p-6 rounded-lg border border-white/5 flex flex-col gap-3 group hover:border-primary/40 transition-colors">
                        <span class="text-primary font-headline font-bold text-3xl">Expert</span>
                        <span class="text-xs uppercase tracking-widest font-label text-on-surface-variant">Mechanics</span>
                    </div>
                    <div
                        class="glass-panel p-6 rounded-lg border border-white/5 flex flex-col gap-3 group hover:border-primary/40 transition-colors">
                        <span class="text-primary font-headline font-bold text-3xl">0%</span>
                        <span class="text-xs uppercase tracking-widest font-label text-on-surface-variant">Hidden
                            Fees</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-32 bg-surface-container-low text-white">
        <div class="max-w-screen-2xl mx-auto px-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-start">
                <div data-aos="cinematic-right">
                    <span class="text-secondary font-label text-sm font-bold uppercase tracking-[0.3em]">Knowledge
                        Base</span>
                    <h2 class="text-5xl font-headline font-black mt-4 mb-10 text-white">Have Any Questions?</h2>
                    <div id="faq-accordion" class="space-y-4">
                        @if(isset($faqs) && $faqs->count() > 0)
                            @foreach($faqs as $index => $faq)
                                <details
                                    class="faq-item group glass-panel rounded-xl border border-white/5 overflow-hidden open:border-primary/30 transition-all duration-300"
                                    {{ $index === 0 ? 'open' : '' }}>
                                    <summary class="flex justify-between items-center p-6 cursor-pointer list-none">
                                        <span
                                            class="text-lg font-headline font-bold uppercase tracking-tightest">{{ $faq->question }}</span>
                                        <span
                                            class="material-symbols-outlined transition-transform duration-300 group-open:rotate-180">expand_more</span>
                                    </summary>
                                    <div
                                        class="px-6 pb-6 text-on-surface-variant font-body text-sm leading-relaxed border-t border-white/5 pt-4">
                                        {{ $faq->answer }}
                                    </div>
                                </details>
                            @endforeach
                        @else
                            <!-- Static fallback FAQs -->
                            <details
                                class="faq-item group glass-panel rounded-xl border border-white/5 overflow-hidden open:border-primary/30 transition-all duration-300"
                                open>
                                <summary class="flex justify-between items-center p-6 cursor-pointer list-none">
                                    <span class="text-lg font-headline font-bold uppercase tracking-tightest">What gear should I
                                        bring?</span>
                                    <span
                                        class="material-symbols-outlined transition-transform duration-300 group-open:rotate-180">expand_more</span>
                                </summary>
                                <div
                                    class="px-6 pb-6 text-on-surface-variant font-body text-sm leading-relaxed border-t border-white/5 pt-4">
                                    We recommend bringing your own helmet and riding jacket for best fit. However, we do provide
                                    premium gear rentals including armored jackets, gloves, and knee guards if required.
                                </div>
                            </details>
                            <details
                                class="faq-item group glass-panel rounded-xl border border-white/5 overflow-hidden open:border-primary/30 transition-all duration-300">
                                <summary class="flex justify-between items-center p-6 cursor-pointer list-none">
                                    <span class="text-lg font-headline font-bold uppercase tracking-tightest">Are the routes
                                        safe for solo riders?</span>
                                    <span
                                        class="material-symbols-outlined transition-transform duration-300 group-open:rotate-180">expand_more</span>
                                </summary>
                                <div
                                    class="px-6 pb-6 text-on-surface-variant font-body text-sm leading-relaxed border-t border-white/5 pt-4">
                                    Yes, our bikes are GPS-enabled and we provide a detailed 24/7 breakdown support. We also
                                    brief every rider on mountain safety and weather patterns before they depart.
                                </div>
                            </details>
                            <details
                                class="faq-item group glass-panel rounded-xl border border-white/5 overflow-hidden open:border-primary/30 transition-all duration-300">
                                <summary class="flex justify-between items-center p-6 cursor-pointer list-none">
                                    <span class="text-lg font-headline font-bold uppercase tracking-tightest">What documents are
                                        required?</span>
                                    <span
                                        class="material-symbols-outlined transition-transform duration-300 group-open:rotate-180">expand_more</span>
                                </summary>
                                <div
                                    class="px-6 pb-6 text-on-surface-variant font-body text-sm leading-relaxed border-t border-white/5 pt-4">
                                    You will need a valid motorcycle driving license (International Driving Permit for
                                    foreigners), a copy of your passport/ID, and a security deposit.
                                </div>
                            </details>
                            <details
                                class="faq-item group glass-panel rounded-xl border border-white/5 overflow-hidden open:border-primary/30 transition-all duration-300">
                                <summary class="flex justify-between items-center p-6 cursor-pointer list-none">
                                    <span class="text-lg font-headline font-bold uppercase tracking-tightest">Do you offer
                                        one-way rentals?</span>
                                    <span
                                        class="material-symbols-outlined transition-transform duration-300 group-open:rotate-180">expand_more</span>
                                </summary>
                                <div
                                    class="px-6 pb-6 text-on-surface-variant font-body text-sm leading-relaxed border-t border-white/5 pt-4">
                                    Yes, we offer one-way drop-offs between Leh, Manali, and Srinagar for an additional
                                    logistics fee. Please contact us in advance to arrange this.
                                </div>
                            </details>
                        @endif
                    </div>
                </div>
                <div data-aos="cinematic-left" class="relative order-first lg:order-last mb-12 lg:mb-0 lg:sticky top-32">
                    <img alt="Support Vehicle in Mountains"
                        class="rounded-2xl w-full h-[400px] lg:h-[600px] object-cover brightness-75 shadow-2xl"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBJUFv0qlo-MrP7U1T_0vXTBxgPofs-e_qFwSRXwwrmrr0xCspUfVKyG-sOatDU2rnjOIUkuK-jaocln7l_grlxCS-dpICXbwLohrK9LCm8tnRBtlRjhuI1w03J8te5PaoAYeCGi0TSoQFBRsjcTJcfZ_RACZnrtnpXZUYLTihlUXND1FuRPC9eguqJgKWEukDFVUqnFHIvEpaY_CM11uBd1f0SW6Ows6nr8O7IChKHB7fS8PYLe7zp4iWn4I87KoHanbteyFdt8Uc" />
                    <div class="absolute inset-0 bg-gradient-to-l from-transparent to-surface-container-low/50"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Rides -->
    <section class="py-32 bg-surface text-white overflow-hidden">
        <div class="max-w-screen-2xl mx-auto px-4 sm:px-8 md:px-12">
            <div data-aos="fade-up" class="flex flex-col md:flex-row justify-between md:items-end mb-20 gap-8">
                <div>
                    <span class="text-secondary font-label text-sm font-bold uppercase tracking-[0.3em]">Featured</span>
                    <h2 class="text-5xl md:text-6xl font-headline font-black mt-4 text-white">Popular Choices.</h2>
                </div>
                <a href="{{ route('rides') }}"
                    class="w-fit px-8 py-4 border-2 border-primary/20 text-primary font-headline uppercase text-xs font-black tracking-widest rounded-lg hover:bg-primary hover:text-on-primary transition-all">
                    More Models <span class="material-symbols-outlined align-middle ml-2 text-sm">arrow_forward</span>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @if(isset($promoted_vehicles) && $promoted_vehicles->count() > 0)
                    @foreach($promoted_vehicles as $index => $vehicle)
                        <a href="{{ route('select-vehicle', $vehicle->id) }}" data-aos="cinematic-up"
                            data-aos-delay="{{ $index * 100 }}"
                            class="blog-card block group glass-panel rounded-2xl overflow-hidden border border-white/5 transition-all duration-500">
                            <div class="h-64 overflow-hidden relative">
                                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                    src="{{ $vehicle->getImage() ?? asset('assets/img/meta/himalayan.png') }}"
                                    alt="{{ $vehicle->title }}" />
                                <span
                                    class="absolute top-4 left-4 bg-secondary text-black px-3 py-1 text-[10px] font-black uppercase tracking-widest rounded">
                                    {{ $vehicle->brand->name ?? 'Brand' }}
                                </span>
                            </div>
                            <div class="p-8">
                                <h4 class="text-2xl font-headline font-black mb-4 group-hover:text-primary transition-colors">
                                    {{ $vehicle->title }}
                                </h4>
                                
                                <div class="flex flex-wrap gap-4 mb-6">
                                    <div class="flex items-center gap-2 text-on-surface-variant/70">
                                        <span class="material-symbols-outlined text-lg" style="color:#9be9f7;">settings_input_component</span>
                                        <span class="text-[10px] font-bold uppercase tracking-wider text-white/80">{{ $vehicle->engine_cc ?? '---' }}</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-on-surface-variant/70">
                                        <span class="material-symbols-outlined text-lg" style="color:#9be9f7;">speed</span>
                                        <span class="text-[10px] font-bold uppercase tracking-wider text-white/80">{{ $vehicle->kmpl ?? '---' }} KMPL</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-on-surface-variant/70">
                                        <span class="material-symbols-outlined text-lg" style="color:#9be9f7;">local_gas_station</span>
                                        <span class="text-[10px] font-bold uppercase tracking-wider text-white/80">{{ $vehicle->fuel_tank_capacity ?? '---' }} L</span>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between text-xs font-label uppercase tracking-widest">
                                    <div class="text-white/40">From Rs. {{ number_format($vehicle->rate_per_day) }}</div>
                                    <div class="flex items-center gap-2 text-primary font-black group-hover:gap-3 transition-all">
                                        Book Now <span class="material-symbols-outlined text-sm">arrow_forward</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @else
                    <div class="col-span-3 text-center text-white/50 text-sm">Our popular choices are being updated. Check back soon!</div>
                @endif
            </div>
        </div>
    </section>

    <!-- Expedition Milestones -->
    <section class="py-24 bg-surface-container-high border-y border-white/5 relative overflow-hidden">
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-primary/5 via-transparent to-transparent">
        </div>
        <div class="max-w-screen-2xl mx-auto px-12 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <!-- Stats Card 1 -->
                <div data-aos="cinematic-up"
                    class="glass-panel p-10 rounded-4xl border border-white/10 flex flex-col items-center text-center group hover:border-primary/50 transition-all duration-700">
                    <div
                        class="w-20 h-20 bg-primary/10 rounded-3xl flex items-center justify-center mb-6 school-glow group-hover:scale-110 group-hover:bg-primary/20 transition-all duration-500">
                        <span class="material-symbols-outlined text-primary text-5xl">motorcycle</span>
                    </div>
                    <h3 class="text-white font-headline text-5xl font-black mb-2 tracking-tighter">500+</h3>
                    <p class="text-on-surface-variant font-label uppercase tracking-[.4em] text-[10px] font-bold">Premium
                        Bikes</p>
                </div>

                <!-- Stats Card 2 -->
                <div data-aos="cinematic-up" data-aos-delay="200"
                    class="glass-panel p-10 rounded-4xl border border-white/10 flex flex-col items-center text-center group hover:border-secondary/50 transition-all duration-700">
                    <div
                        class="w-20 h-20 bg-secondary/10 rounded-3xl flex items-center justify-center mb-6 amber-glow group-hover:scale-110 group-hover:bg-secondary/20 transition-all duration-500">
                        <span class="material-symbols-outlined text-secondary text-5xl">distance</span>
                    </div>
                    <h3 class="text-white font-headline text-5xl font-black mb-2 tracking-tighter">50k+</h3>
                    <p class="text-on-surface-variant font-label uppercase tracking-[.4em] text-[10px] font-bold">Kilometers
                        Tracked</p>
                </div>

                <!-- Stats Card 3 -->
                <div data-aos="cinematic-up" data-aos-delay="400"
                    class="glass-panel p-10 rounded-4xl border border-white/10 flex flex-col items-center text-center group hover:border-primary/50 transition-all duration-700">
                    <div
                        class="w-20 h-20 bg-primary/10 rounded-3xl flex items-center justify-center mb-6 school-glow group-hover:scale-110 group-hover:bg-primary/20 transition-all duration-500">
                        <span class="material-symbols-outlined text-primary text-5xl">verified_user</span>
                    </div>
                    <h3 class="text-white font-headline text-5xl font-black mb-2 tracking-tighter">100%</h3>
                    <p class="text-on-surface-variant font-label uppercase tracking-[.4em] text-[10px] font-bold">Safety
                        Guaranteed</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Blogs Section -->
    <section class="py-32 bg-surface-container-low text-white">
        <div class="max-w-screen-2xl mx-auto px-12">
            <div data-aos="fade-up" class="flex flex-col md:flex-row justify-between md:items-end mb-20 gap-8">
                <div>
                    <span class="text-secondary font-label text-sm font-bold uppercase tracking-[0.3em]">Journal</span>
                    <h2 class="text-5xl md:text-6xl font-headline font-black mt-4 text-white">Mountain Stories.</h2>
                </div>
                <a href="{{ route('articles') }}"
                    class="w-fit px-8 py-4 border-2 border-primary/20 text-primary font-headline uppercase text-xs font-black tracking-widest rounded-lg hover:bg-primary hover:text-on-primary transition-all">
                    View All Posts
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                @if(isset($articles) && $articles->count() > 0)
                    @foreach($articles as $index => $article)
                        <a href="{{ route('article-details', $article->slug) }}" data-aos="cinematic-up"
                            data-aos-delay="{{ $index * 150 }}"
                            class="group glass-panel rounded-xl overflow-hidden border border-white/5 hover:border-primary/50 transition-all duration-500 flex flex-col h-[520px]">
                            <div class="h-64 overflow-hidden relative shrink-0">
                                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 relative z-0"
                                    alt="{{ $article->title }}"
                                    src="{{ $article->getImage() ?? 'https://lh3.googleusercontent.com/aida-public/AB6AXuBcl1vnQ6vT120ehZJIoZbTQlihJJrViGoI9VlELHeMyORu0n6VaFIgK4gNn1t9KBzckp1GGBNem4_r8ZQ08QUMd9lTnYLWM5huc-WsLEwSGObY6qKRpdBQtimghij1RTiqKk-4YcKZhaMhuThXQW_sZB4r3JS1td7-zNrmfFiw_glUEH6d7WoBmhXa3g1YFR8SxcGrGQDAaUUxhCnhUDYfs5EOx1g8L5Lc07FLoSWhUN5fE7HRxesHzFplCS9eiU_i79w8Nc4VGgs' }}" />
                                <span class="absolute top-4 left-4 bg-secondary text-on-secondary px-3 py-1 text-[10px] font-black uppercase tracking-widest rounded z-10">
                                    {{ $article->tag ?? 'Adventure' }}
                                </span>
                            </div>
                            <div class="p-8 flex flex-col flex-1">
                                <h4 class="text-2xl font-headline font-black mb-4 group-hover:text-primary transition-colors line-clamp-2">
                                    {{ Str::limit($article->title, 45) }}
                                </h4>
                                <p class="text-on-surface-variant font-body mb-6 text-sm leading-relaxed line-clamp-3">
                                    {{ Str::limit(strip_tags($article->description), 110) }}
                                </p>
                                <div class="flex items-center gap-4 text-xs font-label uppercase tracking-widest text-white/40 mt-auto pt-4 border-t border-white/5">
                                    <span>{{ $article->created_at->format('M d, Y') }}</span>
                                    <span class="w-1 h-1 bg-white/40 rounded-full"></span>
                                    <span>Read More</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @else
                    <!-- Fallback Static if no data -->
                    <div class="col-span-3 text-center text-white/50 text-sm">No recent stories found.</div>
                @endif
            </div>
        </div>
    </section>

    <!-- Instant Booking CTA -->
    <section class="py-24 bg-surface pb-32">
        <div class="max-w-screen-2xl mx-auto px-6 md:px-12">
            <div data-aos="cinematic-up"
                class="relative h-[500px] w-full rounded-[4rem] md:rounded-[5rem] overflow-hidden group shadow-[0_45px_90px_-15px_rgba(0,0,0,0.9)] border border-white/5 border-t-white/10">
                <!-- Background Image & Parallax Hover -->
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCG51RImK1RojzTYfPf6jvi2VoKEPEfJIDLwC_XQfViaPnZaQBGcE22yiDO5rGAZbq_nLGWdYuEdgOjA5POUEe00lI4t0QSOi1n5ITTkiMAOD9lrnOkGNRIqRGERAE9-EjzOTEaGhs4i1fH8Iw9sGXNWs5BiOzHKvhoNxGOs-xnUCdDUoArJUI9Tv_ynzKcbmcte29XVwKvwjo6y6KAe9o3pnRAK_J6BT0g-lLF_l5sOnXwvEcFSohy2wKUq7GqyF1quR444VH1I3o"
                    alt="Expedition motorcycle in the high Himalayas"
                    class="absolute inset-0 w-full h-full object-cover brightness-[0.4] transition-transform duration-[3s] group-hover:scale-110" />

                <!-- Advanced Overlay (Dark Glass) -->
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black via-black/30 to-transparent opacity-90 transition-opacity duration-700 group-hover:opacity-100">
                </div>

                <!-- Content Layer -->
                <div class="relative h-full flex flex-col items-center justify-center text-center px-10">
                    <div class="space-y-8 max-w-4xl">
                        <!-- Headline -->
                        <h2
                            class="text-4xl md:text-7xl font-accent font-black text-white uppercase tracking-tighter leading-[0.9] drop-shadow-2xl">
                            Book Your Dream <span class="text-secondary italic">Ride Today.</span>
                        </h2>

                        <!-- Subheadline -->
                        <p
                            class="text-white font-body text-base md:text-xl max-w-3xl mx-auto uppercase tracking-[0.4em] font-black opacity-80 mb-10 border-y border-white/10 py-4 inline-block">
                            Transform your journey with our expert care.
                        </p>

                        <!-- CTA Button -->
                        <div class="pt-6">
                            <a href="{{ route('rides') }}"
                                class="inline-block px-14 py-6 bg-secondary text-black font-headline font-black uppercase text-sm tracking-[0.3em] rounded-full hover:scale-110 active:scale-95 transition-all duration-500 shadow-[0_25px_50px_rgba(254,178,52,0.5)] hover:shadow-[0_45px_90px_rgba(254,178,52,0.3)]">
                                Reserve Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script>
        /**
         * Toggles between "Rent a Bike" (Delivery) and "Pick Up" (Store) tabs.
         */
        function switchBookingTab(type) {
            const tabRent = document.getElementById('tab-rent');
            const tabPickup = document.getElementById('tab-pickup');
            const bookingType = document.getElementById('booking_type');
            const pickupSelect = document.getElementById('pickup_location');
            const pickupFixed = document.getElementById('pickup_location_fixed');

            if (type === 'rent') {
                tabRent.classList.add('active');
                tabPickup.classList.remove('active');
                bookingType.value = 'rent';

                // Show city dropdown for delivery
                pickupSelect.classList.remove('hidden');
                pickupSelect.disabled = false;
                pickupSelect.required = true;

                // Hide fixed address
                pickupFixed.classList.add('hidden');
                pickupFixed.disabled = true;
            } else {
                tabPickup.classList.add('active');
                tabRent.classList.remove('active');
                bookingType.value = 'pickup';

                // Hide city dropdown
                pickupSelect.classList.add('hidden');
                pickupSelect.disabled = true;
                pickupSelect.required = false;

                // Show fixed store address
                pickupFixed.classList.remove('hidden');
                pickupFixed.disabled = false;
                // The fixed input is readonly, so it acts as a label/locked field
            }
        }

        /**
         * Date Validation Setup
         */
        document.addEventListener('DOMContentLoaded', function () {
            const today = new Date().toISOString().split('T')[0];
            const pickupDateInput = document.getElementById('pickup_date');
            const dropoffDateInput = document.getElementById('dropoff_date');

            if (pickupDateInput) {
                // Pick up date cannot be in the past
                pickupDateInput.min = today;

                pickupDateInput.addEventListener('change', function () {
                    // Drop off date must be at least the pick up date
                    dropoffDateInput.min = this.value;

                    // If drop off is now before pick up, reset it
                    if (dropoffDateInput.value && dropoffDateInput.value < this.value) {
                        dropoffDateInput.value = this.value;
                    }
                });
            }

            if (dropoffDateInput) {
                dropoffDateInput.min = today;
            }

            // Brand Carousel Configuration
            if (typeof Swiper !== 'undefined' && document.querySelector('.brandSwiper')) {
                const brandSwiper = new Swiper('.brandSwiper', {
                    slidesPerView: 1,
                    loop: true,
                    autoplay: {
                        delay: 4000,
                        disableOnInteraction: false,
                    },
                    navigation: {
                        nextEl: '.brand-next',
                        prevEl: '.brand-prev',
                    },
                    on: {
                        init: function () {
                            setTimeout(updateSelectModelButton, 100);
                        },
                        slideChangeTransitionEnd: function () {
                            updateSelectModelButton();
                        }
                    }
                });

                // function updateSelectModelButton() {
                //     const activeSlide = document.querySelector('.brandSwiper .swiper-slide-active');
                //     if(activeSlide) {
                //         const brandId = activeSlide.getAttribute('data-brand-id');
                //         const btn = document.getElementById('selectModelBtn');
                //         if (btn) {
                //             btn.onclick = function(e) {
                //                 e.preventDefault();
                //                 window.location.href = "{{ route('rides') }}" + (brandId && brandId !== 'all' ? "?brand=" + brandId : "");
                //             };
                //         }
                //     }
                // }

                function updateSelectModelButton() {
                    const activeSlide = document.querySelector('.brandSwiper .swiper-slide-active');
                    if (activeSlide) {
                        const brandId = activeSlide.getAttribute('data-brand-id');
                        const brandType = activeSlide.getAttribute('data-brand-type');
                        const btn = document.getElementById('selectModelBtn');
                        if (btn) {
                            btn.onclick = function (e) {
                                e.preventDefault();
                                let url = "{{ route('rides') }}";
                                if (brandId && brandId !== 'all') {
                                    url += "?brand=" + brandId;
                                    if (brandType) {
                                        url += "&type=" + brandType; // e.g. ?brand=2&type=scooter
                                    }
                                }
                                window.location.href = url;
                            };
                        }
                    }
                }
            }

        });
    </script>
@endpush