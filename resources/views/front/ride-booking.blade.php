@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section
        class="relative w-full h-[320px] md:h-[450px] flex items-start pt-32 md:pt-44 pb-12 overflow-hidden justify-center text-center px-4">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover brightness-[0.4] contrast-125"
                alt="Cinematic shot of a motorcycle on a mountain pass"
                src="https://images.unsplash.com/photo-1471466054146-e71bcc0d2bb2?q=80&w=2070&auto=format&fit=crop" />
            <div class="absolute inset-0 bg-gradient-to-b from-surface/20 via-surface/60 to-surface"></div>
        </div>
        <div class="relative z-10">
            <h1
                class="font-headline text-4xl md:text-7xl font-black tracking-tighter text-white leading-tight uppercase text-shadow-2xl">
                AUTHORIZE <br /><span class="text-primary italic">BOOKING</span>
            </h1>
            <p
                class="mt-4 text-xs md:text-lg font-label tracking-[0.2em] text-secondary max-w-2xl mx-auto uppercase font-bold">
                Secure your Himalayan machine
            </p>

            <nav
                class="mt-6 md:mt-8 flex items-center justify-center gap-3 text-xs font-label text-white/60 uppercase tracking-[0.1em] md:tracking-[0.3em]">
                <a class="hover:text-primary transition-colors text-[10px] md:text-xs"
                    href="{{ route('welcome') }}">Home</a>
                <span class="material-symbols-outlined text-[10px]">chevron_right</span>
                <a class="hover:text-primary transition-colors text-[10px] md:text-xs" href="{{ route('rides') }}">Rides</a>
                <span class="material-symbols-outlined text-[10px]">chevron_right</span>
                <span class="text-secondary font-bold text-[10px] md:text-xs">Review</span>
            </nav>
        </div>
    </section>

    <main class="relative z-20 pb-24 px-8 max-w-screen-2xl mx-auto -mt-12 md:-mt-24">

        <!-- Progress Bar Section -->
        <div class="flex justify-between items-center mb-16 max-w-4xl mx-auto relative px-12 mt-24">
            <div class="absolute top-1/2 left-0 w-full h-[1px] bg-white/5 -z-10 -translate-y-1/2"></div>
            <!-- Step 1 Done -->
            <div class="flex flex-col items-center gap-3">
                <div
                    class="w-10 h-10 rounded-full bg-primary/20 text-primary flex items-center justify-center border border-primary/20">
                    <span class="material-symbols-outlined text-sm font-bold">check</span>
                </div>
                <span class="font-label text-[8px] tracking-[0.2em] uppercase text-primary font-bold">BIKE SELECTION</span>
            </div>
            <!-- Step 2 Done -->
            <div class="flex flex-col items-center gap-3">
                <div
                    class="w-10 h-10 rounded-full bg-primary/20 text-primary flex items-center justify-center border border-primary/20">
                    <span class="material-symbols-outlined text-sm font-bold">check</span>
                </div>
                <span class="font-label text-[8px] tracking-[0.2em] uppercase text-primary font-bold">ADD EXTRAS</span>
            </div>
            <!-- Step 3 Active -->
            <div class="flex flex-col items-center gap-3">
                <div
                    class="w-12 h-12 rounded-full bg-secondary text-on-secondary flex items-center justify-center shadow-[0_0_25px_rgba(254,178,52,0.3)] ring-4 ring-secondary/10">
                    <span class="font-headline font-bold text-xs">3</span>
                </div>
                <span class="font-label text-[8px] tracking-[0.2em] uppercase text-secondary font-bold">REVIEW & BOOK</span>
            </div>
        </div>

        <form action="{{ route('ride-booking.store') }}" method="POST">
            @csrf
            <input type="hidden" name="brand" value="{{ $vehicle->brand->name }}">
            <input type="hidden" name="vehicle" value="{{ $vehicle->title }}">
            <input type="hidden" name="extras" value="{{ json_encode($booking['extras'] ?? []) }}">
            <div data-aos="cinematic-up" class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                <!-- Left Sidebar: Machine & Reservation -->
                <aside data-aos="cinematic-right" class="lg:col-span-3 space-y-6 lg:sticky lg:top-32">
                    <!-- Machine Profile -->
                    <div class="glass-panel overflow-hidden rounded-3xl border border-white/5 bg-white/2 shadow-2xl">
                        <div class="relative h-48 w-full group">
                            <img src="{{ $vehicle->getImage() }}" alt="{{ $vehicle->title }}"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent">
                            </div>
                            <div class="absolute bottom-4 left-6">
                                <p class="text-[8px] font-headline tracking-[0.3em] uppercase text-primary/80 mb-1">SELECTED
                                    MACHINE</p>
                                <h4 class="font-headline font-black text-lg text-white uppercase italic tracking-tightest">
                                    {{ $vehicle->title }}
                                </h4>
                            </div>
                        </div>

                        <!-- Technical Specs -->
                        <div class="p-6 grid grid-cols-3 gap-2 border-t border-white/5 bg-white/2">
                            <div class="flex flex-col items-center gap-1">
                                <span
                                    class="material-symbols-outlined text-primary text-sm opacity-60">settings_input_component</span>
                                <span class="text-[10px] font-bold text-white">{{ $vehicle->engine_cc }}cc</span>
                            </div>
                            <div class="flex flex-col items-center gap-1">
                                <span class="material-symbols-outlined text-secondary text-sm opacity-60">speed</span>
                                <span class="text-[10px] font-bold text-white">{{ $vehicle->kmpl }}kmpl</span>
                            </div>
                            <div class="flex flex-col items-center gap-1">
                                <span
                                    class="material-symbols-outlined text-primary text-sm opacity-60">local_gas_station</span>
                                <span class="text-[10px] font-bold text-white">{{ $vehicle->fuel_tank_capacity }}L</span>
                            </div>
                        </div>
                    </div>

                    <!-- Reservation Summary -->
                    <div class="glass-panel p-8 rounded-3xl border border-white/5 relative overflow-hidden bg-white/[0.03]">
                        <h3 class="font-headline font-black text-sm tracking-widest mb-6 text-[#9be9f7] uppercase italic">
                            Selected Extras</h3>
                        <div class="space-y-6">
                            <div class="space-y-2">
                                @if(!empty($booking['extras']))
                                    <ul class="space-y-2">
                                        @foreach($booking['extras'] as $extra)
                                            <li class="flex items-center gap-2 text-[10px] text-secondary font-bold italic">
                                                <span class="material-symbols-outlined text-xs">done_all</span>
                                                {{ ucfirst($extra) }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p class="text-[10px] text-white/10 italic">No extras selected</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </aside>

                <!-- Center Part: Rider Dossier -->
                <div data-aos="cinematic-up" class="lg:col-span-6 flex flex-col gap-8">
                    <h3 class="font-headline font-black text-4xl tracking-tightest uppercase italic text-[#9be9f7]">
                        RIDER DOSSIER</h3>

                    @include('front.packages.msg')

                    <div class="grid grid-cols-2 gap-8">
                        <div class="col-span-2 md:col-span-1 space-y-3">
                            <label class="font-headline text-[9px] tracking-[0.3em] text-white/40 ml-1 uppercase">FULL
                                NAME</label>
                            <input
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-6 py-4 text-white focus:ring-1 focus:ring-primary/50 focus:border-primary/50 transition-all placeholder:text-white/10 font-bold text-sm tracking-wide"
                                placeholder="COMMANDER JOHN DOE" type="text" name="name" required
                                value="{{ old('name') }}" />
                        </div>
                        <div class="col-span-2 md:col-span-1 space-y-3">
                            <label class="font-headline text-[9px] tracking-[0.3em] text-white/40 ml-1 uppercase">EMAIL
                                ADDRESS</label>
                            <input
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-6 py-4 text-white focus:ring-1 focus:ring-primary/50 focus:border-primary/50 transition-all placeholder:text-white/10 font-bold text-sm tracking-wide"
                                placeholder="DOE@SUMMIT.ADVENTURE" type="email" name="email" required
                                value="{{ old('email') }}" />
                        </div>
                        <div class="col-span-2 md:col-span-1 space-y-3">
                            <label class="font-headline text-[9px] tracking-[0.3em] text-white/40 ml-1 uppercase">MOBILE
                                CONTACT</label>
                            <input
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-6 py-4 text-white focus:ring-1 focus:ring-primary/50 focus:border-primary/50 transition-all placeholder:text-white/10 font-bold text-sm tracking-wide"
                                placeholder="+977-98XXXXXXXX" type="tel" name="phone" required value="{{ old('phone') }}" />
                        </div>
                        <div class="col-span-2 md:col-span-1 space-y-3">
                            <label
                                class="font-headline text-[9px] tracking-[0.3em] text-white/40 ml-1 uppercase">IDENTIFICATION
                                NO. (Passport / License)</label>
                            <input
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-6 py-4 text-white focus:ring-1 focus:ring-primary/50 focus:border-primary/50 transition-all placeholder:text-white/10 font-bold text-sm tracking-wide"
                                placeholder="X-90887-NP" type="text" name="id_no" required value="{{ old('id_no') }}" />
                        </div>

                        <div class="col-span-2 md:col-span-1 space-y-3">
                            <label class="font-headline text-[9px] tracking-[0.3em] text-white/40 ml-1 uppercase">PICKUP
                                DATE</label>
                            <input
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-6 py-4 text-white focus:ring-1 focus:ring-primary/50 focus:border-primary/50 transition-all placeholder:text-white/10 font-bold text-sm tracking-wide"
                                type="date" name="preferred_date" required min="{{ date('Y-m-d') }}"
                                value="{{ old('preferred_date') }}" />
                        </div>

                        <div class="col-span-2 md:col-span-1 space-y-3">
                            <label class="font-headline text-[9px] tracking-[0.3em] text-white/40 ml-1 uppercase">RENTAL
                                DURATION (DAYS)</label>
                            <select name="days" id="duration-select"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-6 py-4 text-white focus:ring-1 focus:ring-primary/50 focus:border-primary/50 transition-all font-bold text-sm tracking-wide"
                                onchange="calculateFinal()">
                                @for($i = 1; $i <= 30; $i++)
                                    <option value="{{ $i }}" class="bg-surface">{{ $i }} {{ $i == 1 ? 'Day' : 'Days' }}
                                    </option>
                                @endfor
                            </select>
                        </div>

                        <div class="col-span-2 space-y-3">
                            <label class="font-headline text-[9px] tracking-[0.3em] text-white/40 ml-1 uppercase">STRATEGIC
                                REQUIREMENTS</label>
                            <textarea
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-6 py-4 text-white focus:ring-1 focus:ring-primary/50 focus:border-primary/50 transition-all placeholder:text-white/10 font-bold text-sm tracking-wide"
                                placeholder="DIETARY RESTRICTIONS, EQUIPMENT SPECIFICATIONS, ETC." rows="4"
                                name="requirements">{{ old('requirements') }}</textarea>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6 pt-6">
                        <div
                            class="p-8 border border-white/5 rounded-2xl bg-white/[0.02] hover:bg-white/[0.05] transition-all">
                            <div class="flex items-center gap-4 mb-4 text-primary">
                                <span class="material-symbols-outlined text-xl">shield</span>
                                <h4 class="font-headline text-[10px] font-bold tracking-[0.2em] uppercase text-white">Safety
                                    Protocols
                                </h4>
                            </div>
                            <p class="text-[10px] leading-relaxed text-white/40 font-medium">All riders undergo mandatory
                                safety briefings. Protective gear is inspected daily before departure.</p>
                        </div>
                        <div
                            class="p-8 border border-white/5 rounded-2xl bg-white/[0.02] hover:bg-white/[0.05] transition-all">
                            <div class="flex items-center gap-4 mb-4 text-secondary">
                                <span class="material-symbols-outlined text-xl">gavel</span>
                                <h4 class="font-headline text-[10px] font-bold tracking-[0.2em] uppercase text-white">
                                    Adventure Terms
                                </h4>
                            </div>
                            <p class="text-[10px] leading-relaxed text-white/40 font-medium">Refundable security deposit
                                required at pickup. Itineraries may shift based on weather conditions.</p>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Price Details -->
                <aside data-aos="cinematic-left" class="lg:col-span-3 lg:sticky lg:top-32 space-y-6">
                    <div
                        class="glass-panel p-10 rounded-3xl border border-primary/20 bg-primary/5 shadow-2xl relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-secondary/10 blur-[60px] -mr-16 -mt-16"></div>
                        <h3
                            class="font-headline font-black text-xl mb-10 tracking-widest text-center border-b border-white/5 pb-6 text-white uppercase italic">
                            PRICE SUMMARY</h3>

                        <div class="space-y-6 mb-10">
                            <div class="flex justify-between items-center text-xs">
                                <span class="font-headline text-white/40 uppercase tracking-widest">Base Rental</span>
                                <span class="font-bold text-white" id="summary-base">Nrs.
                                    {{ number_format($booking['base_price']) }}</span>
                            </div>
                            <div class="flex justify-between items-center text-xs">
                                <span class="font-headline text-white/40 uppercase tracking-widest">Daily Extras</span>
                                <span class="font-bold text-white" id="summary-extras">Nrs.
                                    {{ number_format($booking['extra_total_per_day'] ?? 0) }}</span>
                            </div>
                            <div class="flex justify-between items-center text-[10px] text-secondary font-bold uppercase tracking-widest hidden"
                                id="discount-row">
                                <span>Online Discount</span>
                                <span id="discount-val">-Nrs. 0</span>
                            </div>

                            <div class="pt-8 border-t border-white/10">
                                <div class="flex flex-col items-end gap-1">
                                    <span
                                        class="font-headline text-[9px] tracking-[0.3em] font-bold text-white/30 uppercase">Total
                                        Payable</span>
                                    <span class="text-4xl font-accent text-secondary tracking-tighter leading-none"
                                        id="grand-total-display">Nrs. 0</span>
                                    <input type="hidden" name="total_price" id="final-total-input">
                                </div>
                            </div>
                        </div>

                        <div class="space-y-8">
                            <label class="flex items-start gap-4 cursor-pointer group">
                                <div class="relative flex items-center mt-1">
                                    <input
                                        class="peer h-5 w-5 rounded-md bg-white/5 border border-white/10 text-secondary focus:ring-0 focus:ring-offset-0 checked:bg-secondary"
                                        type="checkbox" required>
                                    <span
                                        class="material-symbols-outlined absolute opacity-0 peer-checked:opacity-100 text-on-secondary pointer-events-none text-xs font-black p-1">check</span>
                                </div>
                                <span
                                    class="text-[9px] leading-relaxed font-headline text-white/40 group-hover:text-white transition-colors uppercase tracking-[0.1em]">
                                    I accept the <a class="text-primary underline decoration-primary/30 underline-offset-4"
                                        href="#">safety standards</a> and <a
                                        class="text-primary underline decoration-primary/30 underline-offset-4"
                                        href="#">expedition terms</a>.
                                </span>
                            </label>

                            <button type="submit"
                                class="w-full liquid-gradient text-on-primary font-headline font-black text-lg tracking-[0.2em] py-6 rounded-2xl flex items-center justify-center gap-4 hover:shadow-[0_0_50px_rgba(155,233,247,0.3)] transition-all duration-500 transform active:scale-95 group uppercase">
                                <span
                                    class="material-symbols-outlined text-2xl group-hover:rotate-12 transition-transform">lock</span>
                                AUTHORIZE BOOKING
                            </button>
                        </div>

                        <div class="mt-8 flex flex-col items-center gap-3">
                            <p class="text-[7px] text-white/20 font-headline tracking-[0.4em] uppercase">SECURE SUMMIT
                                RESERVATION PROTOCOL</p>
                        </div>
                    </div>
                </aside>
            </div>
        </form>
    </main>
@endsection

@push('js')
    <script>
        const baseDaily = {{ $booking['base_price'] }};
        const extrasDaily = {{ $booking['extra_total_per_day'] ?? 0 }};

        function calculateFinal() {
            const days = parseInt(document.getElementById('duration-select').value);
            let dailyTotal = baseDaily + extrasDaily;
            let subtotal = dailyTotal * days;

            let discount = 0;
            let discountText = '';

            if (days >= 14) {
                discount = subtotal * 0.10;
                discountText = '10% OFF';
            } else if (days >= 7) {
                discount = subtotal * 0.05;
                discountText = '5% OFF';
            }

            const finalTotal = subtotal - discount;

            document.getElementById('grand-total-display').innerText = 'Nrs. ' + Math.round(finalTotal).toLocaleString();
            document.getElementById('final-total-input').value = finalTotal;

            const discountRow = document.getElementById('discount-row');
            if (discount > 0) {
                discountRow.classList.remove('hidden');
                document.getElementById('discount-val').innerText = `-${discountText} (Nrs. ${Math.round(discount).toLocaleString()})`;
            } else {
                discountRow.classList.add('hidden');
            }
        }

        // Initial calculation
        document.addEventListener('DOMContentLoaded', calculateFinal);
    </script>
@endpush