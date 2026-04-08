@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section
        class="relative w-full h-[320px] md:h-[450px] flex items-start pt-32 md:pt-44 pb-12 overflow-hidden justify-center text-center px-4">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover brightness-[0.4] contrast-125"
                alt="Cinematic shot of adventure motorcycles"
                src="https://images.unsplash.com/photo-1558981403-c5f9899a28bc?q=80&w=2070&auto=format&fit=crop" />
            <div class="absolute inset-0 bg-gradient-to-b from-surface/20 via-surface/60 to-surface"></div>
        </div>
        <div class="relative z-10">
            <h1
                class="font-headline text-4xl md:text-7xl font-black tracking-tighter text-white leading-tight uppercase text-shadow-2xl">
                CHOOSE YOUR <br /><span class="text-primary italic">STEED</span>
            </h1>
            <p
                class="mt-4 text-xs md:text-lg font-label tracking-[0.2em] text-secondary max-w-2xl mx-auto uppercase font-bold">
                Available premium machines in the circuit
            </p>

            <nav
                class="mt-6 md:mt-8 flex items-center justify-center gap-3 text-xs font-label text-white/60 uppercase tracking-[0.1em] md:tracking-[0.3em]">
                <a class="hover:text-primary transition-colors text-[10px] md:text-xs"
                    href="{{ route('welcome') }}">Home</a>
                <span class="material-symbols-outlined text-[10px]">chevron_right</span>
                <span class="text-secondary font-bold text-[10px] md:text-xs">Rides</span>
            </nav>
        </div>
    </section>

    <main class="relative z-20 pb-20 px-8 max-w-screen-2xl mx-auto flex flex-col md:flex-row gap-8 -mt-12 md:-mt-24">
        <!-- Left Sidebar: Glass Filters -->
        <aside class="w-full md:w-80 flex flex-col gap-6 pt-12 md:pt-20">
            <div data-aos="cinematic-up" class="glass-panel rounded-xl p-6 border border-white/5 sticky top-32">
                <h3 class="font-headline font-bold text-xl mb-6 text-primary tracking-tight">FILTERS</h3>

                <form action="{{ route('rides') }}" method="GET" id="filter-form">
                    <!-- Type Selection -->
                    <div class="mb-8">
                        <label class="font-label text-[10px] tracking-widest uppercase text-white/50 mb-3 block">Vehicle
                            Type</label>
                        <div class="grid grid-cols-2 gap-2">
                            <button type="button" onclick="setFilter('type', 'bike')"
                                class="filter-btn-type {{ request('type', 'bike') == 'bike' ? 'bg-secondary text-on-secondary shadow-[0_0_15px_rgba(254,178,52,0.3)]' : 'bg-white/5 text-white/40 hover:bg-white/10' }} rounded-full py-2 px-4 text-xs font-bold transition-all duration-300">Bike</button>
                            <button type="button" onclick="setFilter('type', 'scooter')"
                                class="filter-btn-type {{ request('type') == 'scooter' ? 'bg-secondary text-on-secondary shadow-[0_0_15px_rgba(254,178,52,0.3)]' : 'bg-white/5 text-white/40 hover:bg-white/10' }} rounded-full py-2 px-4 text-xs font-bold transition-all duration-300">Scooter</button>
                        </div>
                        <input type="hidden" name="type" id="filter-type" value="{{ request('type', 'bike') }}">
                    </div>

                    <!-- Brand Filter -->
                    <div class="mb-8">
                        <label class="font-label text-[10px] tracking-widest uppercase text-white/50 mb-4 block">Preferred
                            Brands</label>
                        <div class="space-y-3">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="radio" name="brand" value="all" onchange="this.form.submit()" {{ request('brand', 'all') == 'all' ? 'checked' : '' }}
                                    class="w-4 h-4 border-white/10 bg-white/5 text-secondary focus:ring-secondary">
                                <span
                                    class="text-sm {{ request('brand', 'all') == 'all' ? 'text-white font-bold' : 'text-white/60' }} group-hover:text-primary transition-colors">All
                                    Brands</span>
                            </label>
                            @foreach($brands as $brand)
                                <label
                                    class="flex items-center gap-3 cursor-pointer group {{ $brand->type == request('type', 'bike') ? '' : 'hidden brand-item' }}"
                                    data-type="{{ $brand->type }}">
                                    <input type="radio" name="brand" value="{{ $brand->id }}" onchange="this.form.submit()" {{ request('brand') == $brand->id ? 'checked' : '' }}
                                        class="w-4 h-4 border-white/10 bg-white/5 text-secondary focus:ring-secondary">
                                    <span
                                        class="text-sm {{ request('brand') == $brand->id ? 'text-white font-bold' : 'text-white/60' }} group-hover:text-primary transition-colors">{{ $brand->name }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <!-- Price Range (Visual for now) -->
                    <div class="mb-8">
                        <div class="flex justify-between items-center mb-3">
                            <label class="font-label text-[10px] tracking-widest uppercase text-white/50">Price
                                Range</label>
                            <span class="text-secondary font-bold text-xs" id="price-display">Nrs. 1500 - 15000</span>
                        </div>
                        <input class="w-full h-1 bg-white/10 rounded-lg appearance-none cursor-pointer accent-secondary"
                            type="range" min="1500" max="15000" step="100"
                            oninput="document.getElementById('price-display').innerText = 'Nrs. ' + this.value">
                    </div>

                    <button type="submit"
                        class="w-full py-3 bg-primary text-on-primary rounded-lg font-bold text-xs tracking-widest uppercase hover:scale-[1.02] active:scale-95 transition-all shadow-[0_0_20px_rgba(155,233,247,0.2)]">Apply
                        Filters</button>
                </form>
            </div>
        </aside>

        <!-- Right Content: Vehicle Grid -->
        <section class="flex-1 pt-12 md:pt-20">
            <div class="flex justify-end items-center mb-8">
                <div data-aos="fade-left"
                    class="hidden lg:flex items-center gap-4 text-[10px] tracking-widest uppercase font-bold text-white/30">
                    <span>{{ $vehicles->count() }} Machines Found</span>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6">
                @forelse($vehicles as $index => $vehicle)
                    <div data-aos="cinematic-up" data-aos-delay="{{ $index * 100 }}"
                        class="glass-panel rounded-2xl overflow-hidden border border-white/5 hover:border-secondary/30 group transition-all duration-500 relative">
                        <div
                            class="absolute top-4 left-4 z-20 bg-secondary text-on-secondary px-3 py-1 rounded-md text-[10px] font-black tracking-widest shadow-xl">
                            Nrs. {{ number_format($vehicle->rate_per_day) }}/Day</div>

                        @if($vehicle->is_promoted)
                            <div
                                class="absolute top-4 right-4 z-20 bg-primary/20 backdrop-blur-md text-primary px-2 py-1 rounded text-[8px] font-bold tracking-tighter border border-primary/20">
                                FEATURED</div>
                        @endif

                        <div
                            class="h-56 overflow-hidden relative bg-gradient-to-br from-white/5 to-transparent flex items-center justify-center">
                            @if($vehicle->getImage())
                                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 drop-shadow-[0_20px_30px_rgba(0,0,0,0.5)]"
                                    src="{{ asset($vehicle->getImage()) }}" alt="{{ $vehicle->title }}">
                            @else
                                <span class="material-symbols-outlined text-[80px] text-white/5">motorcycle</span>
                            @endif
                        </div>

                        <div class="p-6 border-t border-white/5 bg-white/[0.02]">
                            <div class="flex justify-between items-start mb-3">
                                <div>
                                    <p class="font-label text-[9px] tracking-[0.3em] uppercase text-white/40 mb-1">
                                        {{ $vehicle->brand->name }}
                                    </p>
                                    <h3 class="font-headline font-bold text-lg tracking-tighter text-white">
                                        {{ $vehicle->title }}
                                    </h3>
                                </div>
                            </div>

                            <div class="grid grid-cols-3 gap-3 mb-6">
                                <div
                                    class="flex flex-col items-center text-center p-3 rounded-xl bg-white/5 border border-white/5 shadow-inner">
                                    <span
                                        class="material-symbols-outlined text-primary text-lg mb-1">settings_input_component</span>
                                    <span
                                        class="font-label text-[8px] text-white/40 uppercase tracking-widest">{{ $vehicle->engine_cc }}.CC</span>
                                </div>
                                <div
                                    class="flex flex-col items-center text-center p-3 rounded-xl bg-white/5 border border-white/5 shadow-inner">
                                    <span class="material-symbols-outlined text-primary text-lg mb-1">speed</span>
                                    <span
                                        class="font-label text-[8px] text-white/40 uppercase tracking-widest">{{ $vehicle->kmpl }}.kmpl</span>
                                </div>
                                <div
                                    class="flex flex-col items-center text-center p-3 rounded-xl bg-white/5 border border-white/5 shadow-inner">
                                    <span class="material-symbols-outlined text-primary text-lg mb-1">local_gas_station</span>
                                    <span
                                        class="font-label text-[8px] text-white/40 uppercase tracking-widest">{{ $vehicle->fuel_tank_capacity }}.L</span>
                                </div>
                            </div>

                            <a href="{{ route('select-vehicle', $vehicle->id) }}"
                                class="block w-full text-center liquid-gradient text-on-primary py-3 rounded-xl font-headline font-black text-xs tracking-[0.2em] uppercase hover:shadow-[0_0_30px_rgba(155,233,247,0.3)] transition-all duration-300 transform active:scale-95 group">
                                Select This Machine
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full py-20 text-center glass-panel rounded-2xl border border-dashed border-white/10">
                        <span class="material-symbols-outlined text-6xl text-white/10 mb-4">error_outline</span>
                        <p class="text-white/40 font-headline tracking-widest uppercase text-sm">No machines available for this
                            criteria</p>
                        <a href="{{ route('rides') }}"
                            class="mt-4 inline-block text-primary font-bold text-xs tracking-widest underline underline-offset-8">Clear
                            All Filters</a>
                    </div>
                @endforelse
            </div>
        </section>
    </main>
    @endsection