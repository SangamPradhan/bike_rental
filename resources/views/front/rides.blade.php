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
                        <div class="grid grid-cols-3 gap-2">
                            <button type="button" onclick="setFilter('type', 'all')"
                                class="filter-btn-type {{ request('type', 'all') == 'all' ? 'bg-secondary text-on-secondary shadow-[0_0_15px_rgba(254,178,52,0.3)]' : 'bg-white/5 text-white/40 hover:bg-white/10' }} rounded-full py-2 px-2 text-[10px] font-bold transition-all duration-300">All</button>
                            <button type="button" onclick="setFilter('type', 'bike')"
                                class="filter-btn-type {{ request('type') == 'bike' ? 'bg-secondary text-on-secondary shadow-[0_0_15px_rgba(254,178,52,0.3)]' : 'bg-white/5 text-white/40 hover:bg-white/10' }} rounded-full py-2 px-2 text-[10px] font-bold transition-all duration-300">Bike</button>
                            <button type="button" onclick="setFilter('type', 'scooter')"
                                class="filter-btn-type {{ request('type') == 'scooter' ? 'bg-secondary text-on-secondary shadow-[0_0_15px_rgba(254,178,52,0.3)]' : 'bg-white/5 text-white/40 hover:bg-white/10' }} rounded-full py-2 px-2 text-[10px] font-bold transition-all duration-300">Scooter</button>
                        </div>
                        <input type="hidden" name="type" id="filter-type" value="{{ request('type', 'all') }}">
                    </div>

                    <!-- Brand Filter -->
                    <div class="mb-8">
                        <label class="font-label text-[10px] tracking-widest uppercase text-white/50 mb-4 block">Preferred
                            Brands</label>
                        <div class="space-y-3">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="radio" name="brand" value="all" {{ request('brand', 'all') == 'all' ? 'checked' : '' }}
                                    class="w-4 h-4 border-white/10 bg-white/5 text-secondary focus:ring-secondary brand-filter-radio">
                                <span
                                    class="text-sm {{ request('brand', 'all') == 'all' ? 'text-white font-bold' : 'text-white/60' }} group-hover:text-primary transition-colors">All
                                    Brands</span>
                            </label>
                            @foreach($brands as $brand)
                                <label
                                    class="flex items-center gap-3 cursor-pointer group brand-item-label {{ (request('type', 'all') == 'all' || $brand->type == request('type')) ? '' : 'hidden' }}"
                                    data-type="{{ $brand->type }}">
                                    <input type="radio" name="brand" value="{{ $brand->id }}" {{ request('brand') == $brand->id ? 'checked' : '' }}
                                        class="w-4 h-4 border-white/10 bg-white/5 text-secondary focus:ring-secondary brand-filter-radio">
                                    <span
                                        class="text-sm {{ request('brand') == $brand->id ? 'text-white font-bold' : 'text-white/60' }} group-hover:text-primary transition-colors">{{ $brand->name }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <!-- Price Range (Visual for now) -->
                    <div class="mb-8">
                        <div class="flex justify-between items-center mb-3">
                            <label class="font-label text-[10px] tracking-widest uppercase text-white/50">Max Price</label>
                            <span class="text-secondary font-bold text-xs" id="price-display">Nrs.
                                {{ number_format($selectedPrice) }}</span>
                        </div>
                        <input class="w-full h-1 bg-white/10 rounded-lg appearance-none cursor-pointer accent-secondary"
                            type="range" name="price" id="price-slider" min="{{ $minPrice }}" max="{{ $maxPrice }}"
                            step="100" value="{{ $selectedPrice }}"
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
            <div id="vehicle-results" class="transition-opacity duration-300">
                @include('layouts.partials.vehicle-grid')
            </div>
        </section>
    </main>
    @push('js')
        <script>
            window.setFilter = function(type, value) {
                document.getElementById('filter-' + type).value = value;

                // Update button styles
                const buttons = document.querySelectorAll('.filter-btn-type');
                buttons.forEach(btn => {
                    btn.classList.remove('bg-secondary', 'text-on-secondary', 'shadow-[0_0_15px_rgba(254,178,52,0.3)]');
                    btn.classList.add('bg-white/5', 'text-white/40', 'hover:bg-white/10');

                    // If the button's text or data-value matches, highlight it
                    if (btn.innerText.toLowerCase() === value) {
                        btn.classList.add('bg-secondary', 'text-on-secondary', 'shadow-[0_0_15px_rgba(254,178,52,0.3)]');
                        btn.classList.remove('bg-white/5', 'text-white/40', 'hover:bg-white/10');
                    }
                });

                // Show/Hide brand items based on type
                const brands = document.querySelectorAll('.brand-item-label');
                brands.forEach(brand => {
                    if (value === 'all' || brand.getAttribute('data-type') === value) {
                        brand.classList.remove('hidden');
                    } else {
                        brand.classList.add('hidden');
                    }
                });

                // Trigger AJAX update
                updateFilters();
            }

            // Initialize price display updates
            const priceSlider = document.getElementById('price-slider');
            const priceDisplay = document.getElementById('price-display');
            if (priceSlider && priceDisplay) {
                priceSlider.addEventListener('input', function () {
                    priceDisplay.innerText = 'Nrs. ' + this.value;
                });
                
                // Update on change (when user stops sliding)
                priceSlider.addEventListener('change', function() {
                    updateFilters();
                });
            }

            // AJAX Filter Function
            async function updateFilters() {
                const form = document.getElementById('filter-form');
                const container = document.getElementById('vehicle-results');
                const formData = new FormData(form);
                const searchParams = new URLSearchParams(formData);
                const url = `${form.action}?${searchParams.toString()}`;

                // Add loading state
                container.style.opacity = '0.5';
                container.style.pointerEvents = 'none';

                try {
                    const response = await fetch(url, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    });

                    if (!response.ok) throw new Error('Network response was not ok');

                    const html = await response.text();
                    container.innerHTML = html;
                    
                    // Update URL without reloading
                    history.pushState(null, '', url);

                    // Re-initialize AOS for new elements
                    if (typeof AOS !== 'undefined') {
                        AOS.refresh();
                    }
                } catch (error) {
                    console.error('Filtering failed:', error);
                } finally {
                    container.style.opacity = '1';
                    container.style.pointerEvents = 'auto';
                }
            }

            // Handle radio button changes for brands
            document.querySelectorAll('.brand-filter-radio').forEach(radio => {
                radio.addEventListener('change', function(e) {
                    updateFilters();
                });
            });

            // Handle form submission
            document.getElementById('filter-form').onsubmit = function(e) {
                e.preventDefault();
                updateFilters();
            };
        </script>
    @endpush
@endsection