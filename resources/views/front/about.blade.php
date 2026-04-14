@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative w-full h-[600px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover brightness-50"
                alt="Cinematic wide shot of a rugged black adventure motorcycle parked on a high mountain pass"
                src="{{ asset('assets/img/meta/ride_banner.png') }}" />
            <div class="absolute inset-0 bg-gradient-to-b from-surface/40 via-surface/60 to-surface"></div>
        </div>
        <div class="relative z-10 text-center px-4">
            <h1
                class="font-headline text-6xl md:text-8xl font-black tracking-tighter text-white leading-tight uppercase text-shadow-xl">
                OUR <br /><span class="text-primary italic">STORY</span>
            </h1>
            <p class="mt-6 text-xl font-label tracking-widest text-secondary max-w-2xl mx-auto uppercase font-bold">
                A Legacy of Adventure
            </p>

            <!-- Breadcrumb Inside Hero -->
            <nav
                class="mt-8 flex items-center justify-center gap-3 text-sm font-label text-white/60 uppercase tracking-widest">
                <a class="hover:text-primary transition-colors" href="{{ route('welcome') }}">Home</a>
                <span class="material-symbols-outlined text-xs">chevron_right</span>
                <span class="text-secondary font-bold">About Us</span>
            </nav>
        </div>
    </section>

    <!-- Story Section -->
    <section class="max-w-7xl mx-auto px-8 py-24 grid md:grid-cols-2 gap-16 items-center text-white">
        <div data-aos="cinematic-right" class="relative h-[600px]">
            <div
                class="absolute top-0 left-0 w-4/5 h-4/5 glass-panel rounded-xl p-2 rotate-[-4deg] border border-white/10 z-20 overflow-hidden">
                <img alt="Luxury Bike" class="w-full h-full object-cover rounded-lg"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBZ6MH1Svleep2NVIyub8gixVLnmiHiLKaZddjl6K_U_yW6Zdfj486byM7s-NbhSW3yxITIDWNd2QuWu5CCh0wI_4bWAiAeQHEhkMvyykVMy6hcMPZknZCMIvDXKPTlun9uzjtr7mcwjAyfQ-kF-Am4Dyx0-Zmdmu-CmK93KJvQzkaNR8LXtQJycFR0qdAqHsN8ZOf1r5LATS5DdQf-VlteuCTJHf07SlyP7nIVo5Kq29mSK2lraPjpRrT8XdezTk-zsueMyCoB7WY" />
            </div>
            <div
                class="absolute bottom-0 right-0 w-3/4 h-3/4 glass-panel rounded-xl p-2 rotate-[6deg] border border-white/10 z-10 overflow-hidden">
                <img alt="Rider in Nepal" class="w-full h-full object-cover rounded-lg"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4_GHdwMGS5FKkdKsCTwaXnIAPLnfiQs0jOh-pj2V11e9Q-yVxOW1x0Twgm12bEfbcmuJj_2ANOaQ-T-ZkLTnke6T8nLMbR2CJgukcxqmAN3D0RD2EWqKkwKATQirnGYZrZlBJ9Xd712RNZ2EkljcVKwkVcvJKYJnhqAmhkYAPeShwmNDpGokJokTb1ThEZYcHLD2JeWEqT17tYvDQU6HDxRyye5xGm8QEuOU_OGLcRRss9zO2BJ20imuVevt96b5QPQ3VvNhpYIw" />
            </div>
        </div>
        <div data-aos="cinematic-left" class="space-y-8">
            <div class="space-y-4">
                <h2 class="font-headline text-5xl md:text-6xl font-black text-white tracking-tight uppercase">
                    A Legacy of <span class="text-secondary italic">Adventure</span>
                </h2>
                <div class="w-48 h-1.5 bg-secondary/80"></div>
            </div>
            <p class="font-body text-lg text-on-surface-variant leading-relaxed">
                Founded in the heart of Kathmandu, BikeRental.com emerged from a singular obsession: to provide the most
                refined mechanical companions for the most challenging terrain on Earth. For over two decades, we have
                been the silent architects of countless trans-Himalayan expeditions.
            </p>
            <p class="font-body text-lg text-on-surface-variant leading-relaxed">
                What started with three vintage Royal Enfields in a small garage has evolved into Nepal's premier fleet
                of precision-tuned adventure machines. We don't just rent bikes; we provide the keys to the roof of the
                world, forged in ice and engineered for the ultimate ascent.
            </p>
            <div class="flex gap-12 pt-4">
                <div>
                    <span class="block text-4xl font-headline font-bold text-primary">20+</span>
                    <span class="text-sm font-label uppercase tracking-widest text-white/40">Years Active</span>
                </div>
                <div>
                    <span class="block text-4xl font-headline font-bold text-primary">15k+</span>
                    <span class="text-sm font-label uppercase tracking-widest text-white/40">Expeditions</span>
                </div>
                <div>
                    <span class="block text-4xl font-headline font-bold text-primary">100%</span>
                    <span class="text-sm font-label uppercase tracking-widest text-white/40">Safety Record</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Brand Ambassador Section -->
    <section class="bg-surface-container-low py-24 overflow-hidden text-white">
        <div class="max-w-7xl mx-auto px-8 grid md:grid-cols-2 gap-12 items-center">
            <div data-aos="cinematic-right" class="relative group">
                <div class="absolute -inset-4 bg-primary/10 blur-3xl opacity-30 group-hover:opacity-50 transition-opacity">
                </div>
                <img alt="Brand Ambassador" class="relative z-10 w-full aspect-[4/5] object-cover rounded-2xl shadow-2xl"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCEVeRNVt7OUlKjAqq_UPPvzg0xnJnY6ZbgHVvlDCSyzNlpU88B-5iuHNqWZdRTXJQbWMPfJWheHQgExYO6-5bF_kqbA2US_CJCMerCiNR8cGHuBvl2MQPJ-wWR28C22doF0HOwJncRuRJbiBZKrFb7j5UJs4txzPLDxw83iMw6Spbhp0hPN1KSmEaSed39B1a-395jgJFedU_GO9j6_YezqckTeGlFnJUtDLbF0hbiPe0VyCUr4ZstrdSvkP4sIT_ZxjUkwoMTy0U" />
            </div>
            <div data-aos="cinematic-left" class="space-y-8">
                <div class="flex flex-col gap-2">
                    <span class="font-label text-secondary tracking-[0.3em] font-bold uppercase text-sm">Our Voice</span>
                    <h2 class="font-headline text-4xl font-black text-white">Nima Tashi</h2>
                    <p class="text-primary font-bold">Chief Expedition Architect & Ambassador</p>
                </div>
                <div
                    class="relative glass-panel p-1 rounded-2xl flex border border-white/10 mb-10 w-full max-w-lg md:mx-0 overflow-hidden">
                    <!-- Sliding Background Pill -->
                    <div id="tab-pill"
                        class="absolute top-1 bottom-1 left-1 w-[calc(33.33%-4px)] bg-secondary rounded-xl transition-all duration-500 ease-[cubic-bezier(0.34,1.56,0.64,1)] shadow-lg amber-glow">
                    </div>

                    <button onclick="switchTab('legacy', 0)" id="btn-legacy"
                        class="relative z-20 flex-1 py-4 text-slate-900 text-xs md:text-sm font-black tracking-widest uppercase transition-colors duration-300">Legacy</button>
                    <button onclick="switchTab('mission', 1)" id="btn-mission"
                        class="relative z-20 flex-1 py-4 text-white/40 text-xs md:text-sm font-black tracking-widest uppercase transition-colors duration-300 hover:text-white">Mission</button>
                    <button onclick="switchTab('vision', 2)" id="btn-vision"
                        class="relative z-20 flex-1 py-4 text-white/40 text-xs md:text-sm font-black tracking-widest uppercase transition-colors duration-300 hover:text-white">Vision</button>
                </div>

                <!-- Tab Content Container -->
                <div class="relative min-h-[250px]">
                    <!-- Legacy Content -->
                    <div id="content-legacy" class="tab-panel space-y-6 transition-all duration-500 opacity-100">
                        <div class="flex gap-4">
                            <span class="material-symbols-outlined text-secondary text-3xl">history_edu</span>
                            <p class="text-on-surface-variant text-lg italic leading-relaxed">
                                "The mountains don't care about your plan; they care about your preparation. We've spent 25
                                years perfecting the technical specs required to survive the Himalayas."
                            </p>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-3 text-white/80">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-sm font-medium tracking-wide">Standardized 45-point pre-ride
                                    inspections</span>
                            </li>
                            <li class="flex items-center gap-3 text-white/80">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-sm font-medium tracking-wide">Bespoke suspension tuning for local
                                    terrain</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Mission Content -->
                    <div id="content-mission" class="tab-panel hidden space-y-6 transition-all duration-500 opacity-0">
                        <div class="flex gap-4">
                            <span class="material-symbols-outlined text-secondary text-3xl">rocket_launch</span>
                            <p class="text-on-surface-variant text-lg italic">
                                "To democratize high-altitude exploration byy providing world-class, meticulously maintained
                                motorcycles to every dreamer."
                            </p>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-3 text-white/80">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-sm font-medium tracking-wide">Providing premium gear for maximum rider
                                    safety</span>
                            </li>
                            <li class="flex items-center gap-3 text-white/80">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-sm font-medium tracking-wide">Supporting local communities through
                                    sustainable tourism</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Vision Content -->
                    <div id="content-vision" class="tab-panel hidden space-y-6 transition-all duration-500 opacity-0">
                        <div class="flex gap-4">
                            <span class="material-symbols-outlined text-secondary text-3xl">visibility</span>
                            <p class="text-on-surface-variant text-lg italic">
                                "To become the definitive gateway for motorized adventure in the Himalayas, known for
                                technical excellence and pure exploration."
                            </p>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-3 text-white/80">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-sm font-medium tracking-wide">Integrating zero-emission electric adventure
                                    fleets</span>
                            </li>
                            <li class="flex items-center gap-3 text-white/80">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-sm font-medium tracking-wide">Developing a global network of Himalayan
                                    basecamps</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    @include('layouts.partials.testimonials')

    <!-- Our Team Section -->
    <section id="team" class="py-24 bg-surface text-white">
        <div class="max-w-7xl mx-auto px-8">
            <div class="flex flex-col md:flex-row justify-between md:items-end mb-16 gap-8">
                <div>
                    <span class="text-secondary font-label text-sm font-bold uppercase tracking-[0.3em]">The Registry</span>
                    <h3 class="text-5xl font-headline font-black mt-4 text-white">The Operators</h3>
                </div>
                <a href="{{ route('team') }}"
                    class="w-fit px-8 py-4 border-2 border-primary/20 text-primary font-headline uppercase text-xs font-black tracking-widest rounded-lg hover:bg-primary hover:text-on-primary transition-all">
                    View All Members <span class="material-symbols-outlined align-middle ml-2 text-sm">arrow_forward</span>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($staffs as $staff)
                    <div class="group glass-panel rounded-2xl overflow-hidden border border-white/5 hover:border-primary/50 transition-all duration-500 shadow-2xl"
                        data-aos="fade-up">
                        <div class="h-80 overflow-hidden relative">
                            <img src="{{ $staff->getImage() ?? 'https://images.unsplash.com/photo-1612349316228-5942a9b489c2?q=80&w=2070&auto=format&fit=crop' }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                alt="{{ $staff->name }}">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-6">
                                <h4 class="text-xl font-headline font-bold text-white">{{ $staff->name }}</h4>
                                <span class="text-primary font-label text-xs uppercase tracking-widest">
                                    {{ $staff->designation }}
                                </span>
                            </div>
                        </div>
                        <div
                            class="p-6 text-center border-t border-white/5 bg-surface-container-high group-hover:bg-primary/10 transition-colors">
                            <a href="{{ route('team-details', $staff->slug) }}"
                                class="text-secondary font-headline uppercase text-xs font-black tracking-widest hover:text-white transition-colors">Learn
                                More</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    </main>
@endsection

@push('js')
    <script>
        function switchTab(tab, index) {
            // Move the sliding pill
            const pill = document.getElementById('tab-pill');
            const offset = (100 / 3) * index;
            pill.style.left = `calc(${offset}% + 4px)`;

            // Update button text colors
            const buttons = ['legacy', 'mission', 'vision'];
            buttons.forEach(id => {
                const btn = document.getElementById('btn-' + id);
                btn.classList.remove('text-slate-900');
                btn.classList.add('text-white/40');
            });

            const activeBtn = document.getElementById('btn-' + tab);
            activeBtn.classList.remove('text-white/40');
            activeBtn.classList.add('text-slate-900');

            // Hide all panels
            const panels = document.querySelectorAll('.tab-panel');
            panels.forEach(panel => {
                panel.classList.add('hidden', 'opacity-0');
            });

            // Show active panel with animation
            const activePanel = document.getElementById('content-' + tab);
            activePanel.classList.remove('hidden');
            setTimeout(() => {
                activePanel.classList.remove('opacity-0');
                activePanel.classList.add('opacity-100');
            }, 50);
        }
    </script>
@endpush