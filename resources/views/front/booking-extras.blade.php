@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section
        class="relative w-full h-[300px] md:h-[400px] flex items-start pt-32 md:pt-44 pb-12 overflow-hidden justify-center text-center px-4">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover brightness-[0.4] contrast-125" alt="Cinematic shot of motorcycle gear"
                src="https://images.unsplash.com/photo-1591637333184-19aa84b3e01f?q=80&w=2070&auto=format&fit=crop" />
            <div class="absolute inset-0 bg-gradient-to-b from-surface/20 via-surface/60 to-surface"></div>
        </div>
        <div class="relative z-10">
            <h1
                class="font-headline text-4xl md:text-7xl font-black tracking-tighter text-white leading-tight uppercase text-shadow-2xl">
                GEAR <span class="text-primary italic">UP</span>
            </h1>
            <p
                class="mt-4 text-xs md:text-lg font-label tracking-[0.2em] text-secondary max-w-2xl mx-auto uppercase font-bold">
                Enhance your expedition with premium accessories
            </p>

            <nav
                class="mt-6 md:mt-8 flex items-center justify-center gap-3 text-xs font-label text-white/60 uppercase tracking-[0.1em] md:tracking-[0.3em]">
                <a class="hover:text-primary transition-colors text-[10px] md:text-xs"
                    href="{{ route('welcome') }}">Home</a>
                <span class="material-symbols-outlined text-[10px]">chevron_right</span>
                <a class="hover:text-primary transition-colors text-[10px] md:text-xs" href="{{ route('rides') }}">Rides</a>
                <span class="material-symbols-outlined text-[10px]">chevron_right</span>
                <span class="text-secondary font-bold text-[10px] md:text-xs">Extras</span>
            </nav>
        </div>
    </section>

    <main class="pt-8 pb-24 px-6 md:px-12 max-w-screen-2xl mx-auto">
        <!-- Progress Bar Section -->
        <div class="flex justify-between items-center mb-16 max-w-4xl mx-auto relative px-12">
            <div class="absolute top-1/2 left-0 w-full h-[1px] bg-white/5 -z-10 -translate-y-1/2"></div>
            <!-- Step 1 Done -->
            <div class="flex flex-col items-center gap-3">
                <div
                    class="w-10 h-10 rounded-full bg-primary/20 text-primary flex items-center justify-center border border-primary/20">
                    <span class="material-symbols-outlined text-sm font-bold">check</span>
                </div>
                <span class="font-label text-[8px] tracking-[0.2em] uppercase text-primary font-bold">BIKE SELECTION</span>
            </div>
            <!-- Step 2 Active -->
            <div class="flex flex-col items-center gap-3">
                <div
                    class="w-12 h-12 rounded-full bg-secondary text-on-secondary flex items-center justify-center shadow-[0_0_25px_rgba(254,178,52,0.3)] ring-4 ring-secondary/10">
                    <span class="font-headline font-black text-lg">2</span>
                </div>
                <span class="font-label text-[8px] tracking-[0.2em] uppercase text-secondary font-bold">ADD EXTRAS</span>
            </div>
            <!-- Step 3 Muted -->
            <div class="flex flex-col items-center gap-3 opacity-30">
                <div class="w-8 h-8 rounded-full bg-white/10 text-white flex items-center justify-center">
                    <span class="font-headline font-bold text-xs">3</span>
                </div>
                <span class="font-label text-[8px] tracking-[0.2em] uppercase text-white">REVIEW & BOOK</span>
            </div>
        </div>

        <form action="{{ route('booking.extras.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
                <!-- Left Panel: Your Reservation -->
                <aside class="lg:col-span-3 space-y-6">
                    <div class="glass-panel rounded-2xl p-8 border border-white/5 shadow-2xl">
                        <h3 class="font-headline font-black text-xl tracking-tightest mb-8 text-[#9be9f7] uppercase italic">
                            YOUR RESERVATION</h3>
                        <div class="space-y-8">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-8 h-8 rounded-lg bg-secondary/10 flex items-center justify-center text-secondary">
                                    <span class="material-symbols-outlined text-lg">motorcycle</span>
                                </div>
                                <div>
                                    <p class="font-label text-[9px] text-white/40 uppercase tracking-[0.2em]">Selected
                                        Machine</p>
                                    <p class="font-bold text-sm tracking-tight text-white">{{ $vehicle->brand->name }}
                                        {{ $vehicle->title }}
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-8 h-8 rounded-lg bg-secondary/10 flex items-center justify-center text-secondary">
                                    <span class="material-symbols-outlined text-lg">payments</span>
                                </div>
                                <div>
                                    <p class="font-label text-[9px] text-white/40 uppercase tracking-[0.2em]">Base Rate</p>
                                    <p class="font-bold text-sm tracking-tight text-white">Nrs.
                                        {{ number_format($vehicle->rate_per_day) }} / Day
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Discount Tiers -->
                    <div class="bg-secondary/5 rounded-2xl p-6 border border-secondary/10">
                        <h4 class="font-label text-[9px] font-bold text-secondary tracking-[0.1em] uppercase mb-4">Adventure
                            Perks</h4>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center text-xs">
                                <span class="text-white/60">7+ Days Booking</span>
                                <span class="font-headline font-bold text-secondary">5% OFF</span>
                            </div>
                            <div class="flex justify-between items-center text-xs border-t border-white/5 pt-4">
                                <span class="text-white/60">14+ Days Booking</span>
                                <span class="font-headline font-bold text-secondary">10% OFF</span>
                            </div>
                        </div>
                    </div>
                </aside>

                <!-- Center Content: Ride Accessories -->
                <!-- Center Content: Ride Accessories -->
                <section class="lg:col-span-6">
                    <div class="flex flex-col gap-8">
                        <!-- Hero/Bike Profile -->
                        <div class="relative rounded-2xl overflow-hidden glass-panel aspect-[16/9] border border-white/5">
                            <img class="absolute inset-0 w-full h-full object-cover opacity-60" alt="{{ $vehicle->title }}"
                                src="{{ $vehicle->getImage() }}" />
                            <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent">
                            </div>
                            <div class="absolute bottom-0 left-0 p-8 w-full">
                                <div class="flex justify-between items-end">
                                    <div>
                                        <h2 class="font-headline font-black text-3xl tracking-tighter text-white uppercase">
                                            RIDE ACCESSORIES AND
                                            SERVICES</h2>
                                        <div class="mt-2 flex items-center gap-4">
                                            <span
                                                class="bg-primary/20 text-primary px-3 py-1 rounded-full text-[10px] font-bold tracking-widest border border-primary/20 uppercase">RIDER:
                                                {{ Auth::user()->name ?? 'GUEST' }}</span>
                                            <span class="text-white/40 text-xs">•</span>
                                            <span
                                                class="text-white/40 text-xs font-label uppercase">{{ $vehicle->brand->name }}
                                                {{ $vehicle->title }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Extras Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Extra Item 1: Roadside Assistance -->
                            <div onclick="toggleExtra(event, this)"
                                class="glass-panel p-6 rounded-xl border border-white/5 group hover:border-primary/30 transition-all cursor-pointer relative">
                                <div class="flex justify-between items-start mb-4">
                                    <div class="p-3 bg-white/5 rounded-lg group-hover:scale-110 duration-300">
                                        <span class="material-symbols-outlined text-primary">support</span>
                                    </div>
                                    <input type="checkbox" name="extras[]" value="roadside" onchange="updateTotal()"
                                        class="w-5 h-5 rounded border-white/10 bg-white/5 text-primary focus:ring-primary ring-offset-background extra-checkbox"
                                        data-price="150">
                                </div>
                                <h5 class="font-headline font-bold text-lg text-white">Roadside Assistance</h5>
                                <p class="text-white/40 text-sm mt-1">24/7 Mechanic support across all Himalayan routes.</p>
                                <p class="text-secondary font-headline font-bold mt-4">Nrs. 150 <span
                                        class="text-xs text-white/40 font-normal">/ day</span></p>
                            </div>
                            <!-- Extra Item 2: Side Panniers -->
                            <div onclick="toggleExtra(event, this)"
                                class="glass-panel p-6 rounded-xl border border-white/5 group hover:border-primary/30 transition-all cursor-pointer relative">
                                <div class="flex justify-between items-start mb-4">
                                    <div class="p-3 bg-white/5 rounded-lg group-hover:scale-110 duration-300">
                                        <span class="material-symbols-outlined text-primary">luggage</span>
                                    </div>
                                    <input type="checkbox" name="extras[]" value="panniers" onchange="updateTotal()"
                                        class="w-5 h-5 rounded border-white/10 bg-white/5 text-primary focus:ring-primary ring-offset-background extra-checkbox"
                                        data-price="120">
                                </div>
                                <h5 class="font-headline font-bold text-lg text-white">Side Panniers (Pair)</h5>
                                <p class="text-white/40 text-sm mt-1">45L Waterproof aluminum luggage boxes for extra gear.
                                </p>
                                <p class="text-secondary font-headline font-bold mt-4">Nrs. 120 <span
                                        class="text-xs text-white/40 font-normal">/ day</span></p>
                            </div>
                            <!-- Extra Item 3: Full Gear Kit -->
                            <div onclick="toggleExtra(event, this)"
                                class="glass-panel p-6 rounded-xl border border-white/5 group hover:border-primary/30 transition-all cursor-pointer relative">
                                <div class="flex justify-between items-start mb-4">
                                    <div class="p-3 bg-white/5 rounded-lg group-hover:scale-110 duration-300">
                                        <span class="material-symbols-outlined text-primary">shield_health</span>
                                    </div>
                                    <input type="checkbox" name="extras[]" value="gear" onchange="updateTotal()"
                                        class="w-5 h-5 rounded border-white/10 bg-white/5 text-primary focus:ring-primary ring-offset-background extra-checkbox"
                                        data-price="250">
                                </div>
                                <h5 class="font-headline font-bold text-lg text-white">Full Gear Kit</h5>
                                <p class="text-white/40 text-sm mt-1">Level 2 Armor jacket, pants, and off-road boots.</p>
                                <p class="text-secondary font-headline font-bold mt-4">Nrs. 250 <span
                                        class="text-xs text-white/40 font-normal">/ day</span></p>
                            </div>
                            <!-- Extra Item 4: Satellite Messenger -->
                            <div onclick="toggleExtra(event, this)"
                                class="glass-panel p-6 rounded-xl border border-white/5 group hover:border-primary/30 transition-all cursor-pointer relative">
                                <div class="flex justify-between items-start mb-4">
                                    <div class="p-3 bg-white/5 rounded-lg group-hover:scale-110 duration-300">
                                        <span class="material-symbols-outlined text-primary">satellite_alt</span>
                                    </div>
                                    <input type="checkbox" name="extras[]" value="satellite" onchange="updateTotal()"
                                        class="w-5 h-5 rounded border-white/10 bg-white/5 text-primary focus:ring-primary ring-offset-background extra-checkbox"
                                        data-price="80">
                                </div>
                                <h5 class="font-headline font-bold text-lg text-white">Satellite Messenger</h5>
                                <p class="text-white/40 text-sm mt-1">Stay connected in areas with zero cellular reception.
                                </p>
                                <p class="text-secondary font-headline font-bold mt-4">Nrs. 80 <span
                                        class="text-xs text-white/40 font-normal">/ day</span></p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Right Panel: Price Details -->
                <aside class="lg:col-span-3">
                    <div class="glass-panel rounded-xl border border-white/5 sticky top-32 overflow-hidden shadow-2xl">
                        <div class="bg-primary/10 px-8 py-6 border-b border-white/5">
                            <h3 class="font-headline font-black text-xl tracking-tight text-primary uppercase italic">PRICE
                                DETAILS</h3>
                        </div>
                        <div class="p-8 space-y-6">
                            <div class="space-y-4">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <p class="font-bold text-white tracking-tight">{{ $vehicle->title }}</p>
                                        <p class="text-xs text-white/40">Nrs. {{ number_format($vehicle->rate_per_day) }} x
                                            1
                                            day</p>
                                    </div>
                                    <span class="font-label font-bold text-white">Nrs.
                                        {{ number_format($vehicle->rate_per_day) }}</span>
                                </div>
                                <div id="extras-breakdown"
                                    class="space-y-2 text-sm text-white/60 border-t border-white/5 pt-4">
                                    <!-- Dynamic Extras Here -->
                                </div>
                            </div>
                            <div class="pt-6 border-t border-white/10 mt-6">
                                <div class="flex justify-between items-end">
                                    <span class="font-label text-xs uppercase tracking-[0.2em] text-white/40">TOTAL
                                        Daily</span>
                                    <span class="font-headline font-black text-4xl text-secondary" id="total-per-day">Nrs.
                                        {{ number_format($vehicle->rate_per_day) }}</span>
                                </div>
                            </div>
                            <button type="submit"
                                class="w-full bg-secondary text-on-secondary py-5 rounded-lg font-headline font-black tracking-widest text-lg hover:scale-[1.02] active:scale-95 duration-200 amber-glow mt-8 uppercase">
                                NEXT STEP
                            </button>
                        </div>
                    </div>
                    <div
                        class="mt-6 flex items-center justify-center gap-3 text-white/40 text-[10px] tracking-widest uppercase">
                        <span class="material-symbols-outlined text-xs">verified_user</span>
                        SECURE CHECKOUT BY SUMMIT
                    </div>
                </aside>
        </form>
    </main>
@endsection

@push('js')
    <script>
        const basePrice = {{ $vehicle->rate_per_day }}; function updateTotal() {
            const checkboxes = document.querySelectorAll('.extra-checkbox:checked');
            const breakdown = document.getElementById('extras-breakdown');
            const totalDisplay = document.getElementById('total-per-day');

            let extrasTotal = 0;
            let breakdownHtml = '';

            checkboxes.forEach(cb => {
                const price = parseInt(cb.dataset.price);
                const container = cb.closest('div[onclick]');
                const name = container.querySelector('h5').innerText;
                extrasTotal += price;
                breakdownHtml += `
                        <div class="flex justify-between items-center text-sm">
                            <span class="italic text-white/40">+ ${name}</span>
                            <span class="font-bold text-white">Nrs. ${price.toLocaleString()}</span>
                        </div>
                    `;
            });

            if (checkboxes.length > 0) {
                breakdown.innerHTML = breakdownHtml;
                breakdown.classList.remove('hidden');
            } else {
                breakdown.innerHTML = '';
                breakdown.classList.add('hidden');
            }

            const grandTotal = basePrice + extrasTotal;
            totalDisplay.innerText = 'Nrs. ' + grandTotal.toLocaleString();
        }

        function toggleExtra(event, element) {
            // Don't toggle if we clicked the checkbox itself (to avoid double toggle)
            if (event.target.type === 'checkbox') return;

            const cb = element.querySelector('input[type="checkbox"]');
            cb.checked = !cb.checked;
            updateTotal();
        }

        // Initialize total on load
        document.addEventListener('DOMContentLoaded', updateTotal);
    </script>
@endpush
sh