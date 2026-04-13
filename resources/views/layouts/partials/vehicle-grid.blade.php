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
