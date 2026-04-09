@extends('layouts.app')

@push('css')
    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
        }

        .amber-glow:hover {
            box-shadow: 0 0 20px rgba(254, 178, 52, 0.4);
        }
    </style>
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[80vh] flex items-center px-8 md:px-20 overflow-hidden justify-center text-center">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover brightness-[0.4]"
                data-alt="Cinematic aerial shot of winding Himalayan mountain pass roads cutting through jagged peaks under a cold blue twilight sky"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCQ599yqvT_RfjtVumQ0Lgqse9gsmoNI3yTde_1jIYNHDpspD_6Q2xlY5w-RFNGeZ11rTcCGw9RfPmhvg3a0zX7HHhlpyJnpb-kADkhUoYtEr34DVx_qUwuSfNG9O_66BAMul7msXMH1BHuJR1FafAT_-aD9lXqf3uQf1CaqpQuWby39_kR73Yk2wX63_vf07Yo_sWDkA8bDGteNsCD5MIidtbmrYnqhU04uKDKHnhuAvN7bjzD23_o3NE2Hod32fGTfn20q5hXTYQ" />
            <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-5xl pt-24 text-center mx-auto">
            <h1 class="font-headline font-extrabold text-[4rem] md:text-[6rem] leading-[0.9] tracking-tighter text-white mb-6 uppercase text-shadow-xl"
                data-aos="cinematic-up">
                RIDE SAFE,<br /><span class="text-primary">RIDE HIGHER</span>
            </h1>
            <p class="font-body text-lg md:text-xl text-on-surface-variant max-w-3xl mx-auto leading-relaxed text-white/80"
                data-aos="cinematic-up" data-aos-delay="100">
                The Himalayas don't forgive, they only teach. Safety isn't a checklist; it's the foundation of your summit.
                We equip you with the precision of a surgeon and the resilience of a mountain.
            </p>

            <nav data-aos="fade-in" data-aos-delay="300"
                class="mt-12 flex items-center justify-center gap-3 text-xs font-label text-white/60 uppercase tracking-[0.1em] md:tracking-[0.3em]">
                <a class="hover:text-primary transition-colors text-[10px] md:text-xs"
                    href="{{ route('welcome') }}">Home</a>
                <span class="material-symbols-outlined text-[10px]">chevron_right</span>
                <span class="text-secondary font-bold text-[10px] md:text-xs">Safety Protocols</span>
            </nav>
        </div>
    </section>

    <!-- Safety Protocols (Bento Grid) -->
    <section class="max-w-screen-2xl mx-auto px-8 md:px-20 py-32 bg-surface">
        <div class="mb-20 text-center" data-aos="fade-up">
            <h2 class="font-headline text-5xl font-bold tracking-tight mb-4 text-white uppercase tracking-tighter">SAFETY
                PROTOCOLS</h2>
            <div class="h-1 w-24 bg-primary mx-auto rounded-full"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- High-Altitude Awareness -->
            <div data-aos="cinematic-up" data-aos-delay="0"
                class="glass-card p-10 rounded-2xl border border-white/10 flex flex-col gap-6 group hover:bg-white/10 transition-all text-white shadow-2xl">
                <div class="w-16 h-16 rounded-xl liquid-gradient flex items-center justify-center border border-white/20">
                    <span class="material-symbols-outlined text-black text-3xl">air</span>
                </div>
                <h3 class="font-headline text-2xl font-bold tracking-tight uppercase text-white">High-Altitude Awareness
                </h3>
                <p class="text-white/70 leading-relaxed font-body">Breathing becomes a conscious act at 5,000m. Focus on
                    rhythmic hydration and immediate descent if symptoms of AMS appear. Your lungs are your primary engine.
                </p>
                <ul class="mt-4 space-y-3 font-label text-[10px] md:text-xs font-bold tracking-wider">
                    <li class="flex items-center gap-2"><span class="material-symbols-outlined text-secondary text-lg"
                            style="font-variation-settings: 'FILL' 1;">check_circle</span> 4-5 LITERS OF WATER DAILY</li>
                    <li class="flex items-center gap-2"><span class="material-symbols-outlined text-secondary text-lg"
                            style="font-variation-settings: 'FILL' 1;">check_circle</span> ASCEND SLOWLY, SLEEP LOW</li>
                </ul>
            </div>
            <!-- Emergency Procedures -->
            <div data-aos="cinematic-up" data-aos-delay="100"
                class="glass-card p-10 rounded-2xl border border-white/10 flex flex-col gap-6 group hover:bg-white/10 transition-all text-white shadow-2xl">
                <div class="w-16 h-16 rounded-xl liquid-gradient flex items-center justify-center border border-white/20">
                    <span class="material-symbols-outlined text-black text-3xl">sos</span>
                </div>
                <h3 class="font-headline text-2xl font-bold tracking-tight uppercase text-white">Emergency Procedures</h3>
                <p class="text-white/70 leading-relaxed font-body">When the grid vanishes, our satellite protocols take
                    over. Every bike is tracked. In case of distress, use the hard-linked SOS switch on your console.</p>
                <ul class="mt-4 space-y-3 font-label text-[10px] md:text-xs font-bold tracking-wider">
                    <li class="flex items-center gap-2"><span class="material-symbols-outlined text-secondary text-lg"
                            style="font-variation-settings: 'FILL' 1;">check_circle</span> SATELLITE PHONE TRAINING</li>
                    <li class="flex items-center gap-2"><span class="material-symbols-outlined text-secondary text-lg"
                            style="font-variation-settings: 'FILL' 1;">check_circle</span> 24/7 BASECAMP MONITORING</li>
                </ul>
            </div>
            <!-- Gear Requirements -->
            <div data-aos="cinematic-up" data-aos-delay="200"
                class="glass-card p-10 rounded-2xl border border-white/10 flex flex-col gap-6 group hover:bg-white/10 transition-all text-white shadow-2xl">
                <div class="w-16 h-16 rounded-xl liquid-gradient flex items-center justify-center border border-white/20">
                    <span class="material-symbols-outlined text-black text-3xl">shield</span>
                </div>
                <h3 class="font-headline text-2xl font-bold tracking-tight uppercase text-white">Gear Requirements</h3>
                <p class="text-white/70 leading-relaxed font-body">The terrain is unforgiving. We mandate full armored
                    protection. Our gear is tested in sub-zero conditions to ensure you stay warm and shielded.</p>
                <ul class="mt-4 space-y-3 font-label text-[10px] md:text-xs font-bold tracking-wider">
                    <li class="flex items-center gap-2"><span class="material-symbols-outlined text-secondary text-lg"
                            style="font-variation-settings: 'FILL' 1;">check_circle</span> LEVEL 2 CE ARMOR MANDATORY</li>
                    <li class="flex items-center gap-2"><span class="material-symbols-outlined text-secondary text-lg"
                            style="font-variation-settings: 'FILL' 1;">check_circle</span> ALL-WEATHER GORE-TEX LAYERS</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Summit-Ready Checklist -->
    <section class="py-32 relative bg-surface-container-low border-y border-white/5">
        <div class="max-w-screen-2xl mx-auto px-8 md:px-20 flex flex-col lg:flex-row items-center gap-20">
            <div class="w-full lg:w-1/2" data-aos="cinematic-right">
                <h2
                    class="font-headline text-5xl md:text-6xl font-extrabold mb-8 tracking-tighter uppercase leading-none text-white">
                    SUMMIT-READY<br /><span class="text-primary italic">CHECKLIST</span></h2>
                <p class="text-white/70 text-lg mb-10 leading-relaxed font-body">Every machine in our fleet undergoes a
                    42-point inspection by factory-trained technicians before it leaves basecamp. We don't just rent bikes;
                    we provide precision instruments for the peaks.</p>
                <div class="glass-card p-8 rounded-2xl border border-white/10 text-white shadow-2xl bg-white/[0.02]">
                    <div class="space-y-6">
                        <div class="flex items-center justify-between group cursor-pointer">
                            <div class="flex items-center gap-4">
                                <div class="w-8 h-8 rounded-lg border-2 border-secondary flex items-center justify-center">
                                    <span class="material-symbols-outlined text-secondary text-sm"
                                        style="font-variation-settings: 'FILL' 1;">check</span>
                                </div>
                                <span class="font-label font-bold tracking-widest uppercase">High-Traction Tires</span>
                            </div>
                            <span class="text-white/50 text-xs font-label">Checked 2h ago</span>
                        </div>
                        <div class="h-px bg-white/10"></div>
                        <div class="flex items-center justify-between group cursor-pointer">
                            <div class="flex items-center gap-4">
                                <div class="w-8 h-8 rounded-lg border-2 border-secondary flex items-center justify-center">
                                    <span class="material-symbols-outlined text-secondary text-sm"
                                        style="font-variation-settings: 'FILL' 1;">check</span>
                                </div>
                                <span class="font-label font-bold tracking-widest uppercase">Dual-Channel ABS</span>
                            </div>
                            <span class="text-white/50 text-xs font-label">Pressure Verified</span>
                        </div>
                        <div class="h-px bg-white/10"></div>
                        <div class="flex items-center justify-between group cursor-pointer">
                            <div class="flex items-center gap-4">
                                <div class="w-8 h-8 rounded-lg border-2 border-secondary flex items-center justify-center">
                                    <span class="material-symbols-outlined text-secondary text-sm"
                                        style="font-variation-settings: 'FILL' 1;">check</span>
                                </div>
                                <span class="font-label font-bold tracking-widest uppercase">Synthetic Fluid</span>
                            </div>
                            <span class="text-white/50 text-xs font-label">Fully Synthetic</span>
                        </div>
                        <div class="h-px bg-white/10"></div>
                        <div class="flex items-center justify-between group cursor-pointer">
                            <div class="flex items-center gap-4">
                                <div class="w-8 h-8 rounded-lg border-2 border-secondary flex items-center justify-center">
                                    <span class="material-symbols-outlined text-secondary text-sm"
                                        style="font-variation-settings: 'FILL' 1;">check</span>
                                </div>
                                <span class="font-label font-bold tracking-widest uppercase">Electronic Diagnostics</span>
                            </div>
                            <span class="text-white/50 text-xs font-label">Zero Errors</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 relative h-[600px]" data-aos="zoom-in" data-aos-delay="200">
                <img class="w-full h-full object-cover rounded-3xl grayscale hover:grayscale-0 transition-all duration-700 shadow-[0_20px_50px_rgba(0,0,0,0.8)] border border-white/5"
                    data-alt="Extreme close-up of a rugged motorcycle tire tread and suspension covered in fine mountain dust with sharp metallic highlights"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDr5QM-e7-Q5BI-EgDtUxLXXZAk5m343Hc7OxAxj4ecDW9RcU6DBt1WDqyDpmNeD5OvoFh6dGp0THHq4-Yjj_2-0JVEKeCspsdaEMuPwPaq2duX-WOwavbv2IHLWhzBZ-F5eVD86ul-U-pkR4i_8wLQp8CA6oS8D0mVevszthNZnZan_6PXNE3_9y_mqHg2vmKUu5DwOXlq1OXPkWrbH3bTF8MyrPBW43bFNFfsvrfPHjMtN6MOom1MVkggAC584H372hsRIwgNGwc" />
                <div
                    class="absolute -bottom-8 md:-left-8 md:right-auto right-4 glass-card p-8 rounded-2xl border border-white/10 max-w-[320px] shadow-2xl backdrop-blur-3xl bg-surface/80">
                    <p class="text-[10px] font-label text-secondary mb-3 tracking-[0.3em] font-black uppercase">Technician
                        Note</p>
                    <p class="text-sm italic text-white font-body leading-relaxed">"The Himalayan air is thin and cold. We
                        tune every fuel injection system specifically for high-altitude combustion efficiency."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Himalayan Terrain Guide -->
    <section class="max-w-screen-2xl mx-auto px-8 md:px-20 py-32 bg-surface">
        <div class="mb-20 text-center" data-aos="fade-up">
            <h2 class="font-headline text-5xl font-bold tracking-tighter mb-4 text-white uppercase">TERRAIN GUIDE</h2>
            <div class="h-1 w-24 bg-primary mx-auto rounded-full mb-6"></div>
            <p class="text-white/70 max-w-xl mx-auto font-body text-lg">Master the elements. The mountain changes every
                kilometer. From loose gravel to icy river crossings.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="group relative overflow-hidden rounded-3xl h-[500px]" data-aos="cinematic-up" data-aos-delay="0">
                <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 brightness-[0.6] group-hover:brightness-[0.8]"
                    data-alt="Extreme mountain switchback road with sharp turns descending into a deep valley with dramatic rock formations"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCggbPfx7ebZEiIaHNjqeFfKIBgE6eszY1aUglfUkgg6OwgV2yv9DKINk0rtAgv0cwtD-E9AAcYv2qTk5it6h-m0fP03k3Dp-BBCPIa9Bd1chhX0qi1HPM7Gr3EH3D9GFPwvkyRVS3zUqxyi3490qSIx-o5LWssihPx1LLcCohk8jK1E_4PSBNcxv6qq90wdhOsDPO7OSSCdIBTajQuZvgQsZ1E8lQ0omM4roe558SDrtR6iQ1ZuJs4veBdngI-XurCrnTgr8BbSFA" />
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent"></div>
                <div
                    class="absolute bottom-0 p-8 text-white w-full transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                    <h4 class="font-headline text-2xl font-bold mb-3 uppercase tracking-tight text-primary">Mountain
                        Switchbacks</h4>
                    <p class="text-sm text-white/80 leading-relaxed font-body">Focus on the exit. Keep your eyes up and your
                        weight balanced. Lean the bike, not your body, for maximum control on hairpin turns.</p>
                </div>
            </div>
            <div class="group relative overflow-hidden rounded-3xl h-[500px]" data-aos="cinematic-up" data-aos-delay="100">
                <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 brightness-[0.6] group-hover:brightness-[0.8]"
                    data-alt="A shallow glacial river crossing a dirt road with water splashing against stones and sunlight reflecting off the ripples"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAQXEx5wTsMGWJfJGRaMCH16xWnQObCfAC-ffT8pb4U8CfA7KfTG2w4JmcHd2UGVoE-WV9T23Y5rOGsMriPtJXU-C0DQRWehBGmIL0YtBNqdpX7aco0PQklpl23bf67tHQZVct8ib2icAB9FcIOxsWRji0uCWnTIwL_c72082Z3ak1zVx1QVbWZ-AbatJvVG2Q5x0UDpU49iYuKHU_r2YNUw3viNqVNZzG1th8x53NjDm2M7MF2fi6Vtf9HxoUF89joLIVTDMR9KkY" />
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent"></div>
                <div
                    class="absolute bottom-0 p-8 text-white w-full transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                    <h4 class="font-headline text-2xl font-bold mb-3 uppercase tracking-tight text-primary">River Crossings
                    </h4>
                    <p class="text-sm text-white/80 leading-relaxed font-body">Enter with momentum. Pick a line and commit.
                        The rocks are slippery; maintain steady throttle and keep your boots on the pegs.</p>
                </div>
            </div>
            <div class="group relative overflow-hidden rounded-3xl h-[500px]" data-aos="cinematic-up" data-aos-delay="200">
                <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 brightness-[0.6] group-hover:brightness-[0.8]"
                    data-alt="Wide shot of a dusty gravel road stretching toward snow-capped Himalayan peaks under a bright clear sky"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBom3ak-19rJlX1iQQtLKWRCy2E281O4txMSYtqOpFVGbJXXD5xluhHZg8Iis1FzUkWIvoPv-t8FRgNKGnbSSs2QBv_5u5yKxTBSO07_wAX02hCJFYxI6bVrRq2QuJoEESSxo2thnulzqinwFsMsTHEErjtk5EDMA_W1XYwAtZ44v5vcbtmweDnDg---OE7wRh_VkFiRxMzfZlgU2OHlVnYj20ZHkP0OLunDgcKPW5TMjKtjFCtaMXsJ7VyUS3wuE9g0WnIpVqANEA" />
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent"></div>
                <div
                    class="absolute bottom-0 p-8 text-white w-full transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                    <h4 class="font-headline text-2xl font-bold mb-3 uppercase tracking-tight text-primary">Loose Gravel
                    </h4>
                    <p class="text-sm text-white/80 leading-relaxed font-body">Let the bike dance. Grip the tank with your
                        knees and keep your arms loose. Trust the machine's geometry to find its path.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="pb-32 pt-16 max-w-screen-2xl mx-auto px-8 md:px-20">
        <div data-aos="fade-up"
            class="glass-card rounded-4xl p-16 md:p-24 flex flex-col items-center text-center border border-white/5 overflow-hidden relative shadow-2xl bg-surface-container-high">
            <div
                class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-secondary to-transparent opacity-50">
            </div>
            <div class="absolute -right-32 -bottom-32 w-96 h-96 bg-primary/10 blur-[100px] rounded-full"></div>
            <div class="absolute -left-32 -top-32 w-96 h-96 bg-secondary/10 blur-[100px] rounded-full"></div>

            <h2
                class="font-headline text-4xl md:text-6xl text-white font-extrabold mb-6 tracking-tighter uppercase relative z-10 text-shadow-xl">
                Equipped and Ready?</h2>
            <p class="text-white/70 text-lg md:text-xl max-w-2xl mb-12 relative z-10 font-body">The peak is calling. Your
                machine is prepped. The only thing missing is your courage. Secure your rental for the ultimate Himalayan
                journey.</p>
            <a href="{{ route('rides') }}"
                class="bg-secondary hover:bg-secondary/90 text-on-secondary px-12 py-5 rounded-xl font-headline text-lg font-black tracking-[0.2em] hover:scale-105 active:scale-95 transition-all outline-none border-none shadow-[0_15px_30px_rgba(254,178,52,0.3)] uppercase relative z-10">
                RENT A BIKE
            </a>
        </div>
    </section>
@endsection