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
                            class="opacity-90 font-label font-bold text-[10px] text-secondary lg:text-[12px] uppercase tracking-[0.15em] whitespace-nowrap">
                            Rental in Pokhara
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
                        href="{{ route('services') }}">Royal
                        Enfield Himalayan</a></li>
                <li><a class="font-body text-white/60 hover:text-[#9be9f7] text-sm transition-colors"
                        href="{{ route('services') }}">KTM
                        390 Adventure</a></li>
                <li><a class="font-body text-white/60 hover:text-[#9be9f7] text-sm transition-colors"
                        href="{{ route('services') }}">BMW
                        R1250 GS</a></li>
                <li><a class="font-body text-white/60 hover:text-[#9be9f7] text-sm transition-colors"
                        href="{{ route('services') }}">Custom Flat Trackers</a></li>
            </ul>
        </div>
        <div class="col-span-1">
            <h5 class="mb-8 font-headline font-black text-white text-xs uppercase tracking-widest">Quick Links</h5>
            <ul class="space-y-4">
                <li><a class="font-body text-white/60 hover:text-[#9be9f7] text-sm transition-colors"
                        href="{{ route('about') }}">About Us</a></li>
                <li><a class="font-body text-white/60 hover:text-[#9be9f7] text-sm transition-colors"
                        href="{{ route('services') }}">Services</a></li>
                <li><a class="font-body text-white/60 hover:text-[#9be9f7] text-sm transition-colors"
                        href="{{ route('articles') }}">News</a></li>
                <li><a class="font-body text-white/60 hover:text-[#9be9f7] text-sm transition-colors"
                        href="{{ route('gallery') }}">Gallery</a></li>
                <li><a class="font-body text-white/60 hover:text-[#9be9f7] text-sm transition-colors"
                        href="{{ route('contact') }}">Contact Us</a></li>
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
    <div
        class="flex md:flex-row flex-col justify-between items-center gap-6 mx-auto mt-16 pt-8 border-white/5 border-t max-w-screen-2xl">
        <span class="font-body text-white/40 text-xs tracking-wide">
            © 2026 Bike & Scooter rent in Pokhara | The Liquid Summit Experience
            <span class="hidden md:inline mx-3 opacity-20">|</span>
            <span class="text-primary/40">Developed by <a href="http://xten.com.np/" target="_blank" class="text-secondary hover:underline transition-all">XTen</a></span>
        </span>
        <div class="flex gap-6">
            <a class="text-white/40 hover:text-secondary transition-colors" href="/"><span
                    class="material-symbols-outlined">public</span></a>
            <a class="text-white/40 hover:text-secondary transition-colors" href="#"><span
                    class="material-symbols-outlined">share</span></a>
            <a class="text-white/40 hover:text-secondary transition-colors"
                href="mailto:pandeybikram140@gmail.com"><span class="material-symbols-outlined">mail</span></a>
        </div>
    </div>
</footer>