<!-- Footer -->
<footer class="bg-[#0e0e13] px-12 py-16 border-white/5 border-t w-full">
    <div class="gap-12 grid grid-cols-1 md:grid-cols-4 mx-auto max-w-screen-2xl">
        <div class="col-span-1">
            <div class="mb-3 font-black text-[#feb234] text-xl">
                <a href="{{ route('welcome') }}" class="group flex items-center gap-3 lg:gap-4 transition-all">
                    <!-- Circular Logo with Glow -->
                    <div class="relative shrink-0">
                        <div
                            class="shadow-[0_0_15px_rgba(254,178,52,0.4)] group-hover:shadow-[0_0_20px_rgba(254,178,52,0.6)] p-0.5 border-2 border-secondary rounded-full w-16 h-16 transition-all duration-300">
                            <div
                                class="flex justify-center items-center bg-surface-container-highest rounded-full w-full h-full overflow-hidden">
                                <img src="{{ asset('assets/img/meta/bike_rental.webp') }}" alt="Logo"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                    <!-- Brand Text -->
                    <div class="flex flex-col leading-tight">
                        <span
                            class="font-headline font-black text-secondary text-base lg:text-lg uppercase tracking-tighter whitespace-nowrap">
                            Bike & Scooter
                        </span>
                        <span
                            class="opacity-90 font-label font-bold text-[11px] text-secondary lg:text-[12px] uppercase tracking-[0.15em] whitespace-nowrap">
                            Rent in Pokhara
                        </span>
                    </div>
                </a>
            </div>
            <p class="max-w-xs font-body text-white/60 text-sm leading-relaxed">Forged in the shadows of the
                Annapurna range. We provide the instruments for your Himalayan soul searching.</p>
        </div>
        <div class="col-span-1">
            <h5 class="mb-8 font-headline font-black text-white text-xs uppercase tracking-widest">The Fleet</h5>
            <ul class="space-y-4">
                <li><a class="font-body text-white/60 hover:text-[#9be9f7] text-sm transition-colors"
                        href="{{ route('rides') }}">Royal
                        Enfield Himalayan</a></li>
                <li><a class="font-body text-white/60 hover:text-[#9be9f7] text-sm transition-colors"
                        href="{{ route('rides') }}">TVS
                        Ronin 225</a></li>
                <li><a class="font-body text-white/60 hover:text-[#9be9f7] text-sm transition-colors"
                        href="{{ route('rides') }}">Bajaj
                        Dominar 250</a></li>
                <li><a class="font-body text-white/60 hover:text-[#9be9f7] text-sm transition-colors"
                        href="{{ route('rides') }}">Hero
                        Xpulse 200 4V Pro</a></li>
            </ul>
        </div>
        <div class="col-span-1">
            <h5 class="mb-8 font-headline font-black text-white text-xs uppercase tracking-widest">Quick Links</h5>
            <ul class="space-y-4">
                <li><a class="font-body text-white/60 hover:text-[#9be9f7] text-sm transition-colors"
                        href="{{ route('about') }}">About Us</a></li>
                <li><a class="font-body text-white/60 hover:text-[#9be9f7] text-sm transition-colors"
                        href="{{ route('rides') }}">Rides</a></li>
                <li><a class="font-body text-white/60 hover:text-[#9be9f7] text-sm transition-colors"
                        href="{{ route('articles') }}">Stories</a></li>
                <li><a class="font-body text-white/60 hover:text-[#9be9f7] text-sm transition-colors"
                        href="{{ route('gallery') }}">Gallery</a></li>
            </ul>
        </div>
        <div class="col-span-1">
            <h5 class="mb-8 font-headline font-black text-white text-xs uppercase tracking-widest">Newsletter</h5>
            <div class="flex border border-white/10 rounded-lg overflow-hidden glass-panel">
                <input class="bg-transparent px-4 py-3 border-none focus:ring-0 w-full text-white text-sm"
                    placeholder="Email Address" type="email" />
                <button class="bg-primary px-4 text-on-primary">
                    <span class="text-sm material-symbols-outlined">arrow_forward</span>
                </button>
            </div>
        </div>
    </div>
    <div class="mx-auto mt-16 pt-8 border-t border-white/5 max-w-screen-2xl">
        <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-6">

            <div class="text-center md:text-left order-1">
                <span class="font-body text-white/40 text-xs tracking-wide">
                    © 2026 Bike & Scooter rent in Pokhara | The Liquid Summit Experience
                </span>
            </div>

            <div class="flex justify-center order-2">
                <span class="font-body text-xs tracking-wide text-primary/40">
                    Developed by
                    <a href="http://xten.com.np/" target="_blank"
                        class="text-secondary hover:underline transition-all font-bold">
                        XTen
                    </a>
                </span>
            </div>

            <div class="flex justify-center md:justify-end gap-6 order-3">
                <a class="text-white/40 hover:text-secondary transition-colors" href="/">
                    <span class="material-symbols-outlined text-xl">public</span>
                </a>
                <a class="text-white/40 hover:text-secondary transition-colors" href="#">
                    <span class="material-symbols-outlined text-xl">share</span>
                </a>
                <a class="text-white/40 hover:text-secondary transition-colors"
                    href="mailto:Bikerentinpokhara@gmail.com">
                    <span class="material-symbols-outlined text-xl">mail</span>
                </a>
            </div>

        </div>
    </div>
</footer>