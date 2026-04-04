<!-- Footer -->
<footer class="bg-[#0e0e13] w-full py-16 px-12 border-t border-white/5">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-12 max-w-screen-2xl mx-auto">
        <div class="col-span-1">
            <div class="text-xl font-black text-[#feb234] mb-8">BikeRental.com</div>
            <p class="text-white/60 font-body text-sm leading-relaxed max-w-xs">Forged in the shadows of the
                Annapurna range. We provide the instruments for your Himalayan soul searching.</p>
        </div>
        <div class="col-span-1">
            <h5 class="text-white font-headline text-xs font-black uppercase tracking-widest mb-8">The Fleet</h5>
            <ul class="space-y-4">
                <li><a class="text-white/60 hover:text-[#9be9f7] transition-colors font-body text-sm" href="{{ route('services') }}">Royal
                        Enfield Himalayan</a></li>
                <li><a class="text-white/60 hover:text-[#9be9f7] transition-colors font-body text-sm" href="{{ route('services') }}">KTM
                        390 Adventure</a></li>
                <li><a class="text-white/60 hover:text-[#9be9f7] transition-colors font-body text-sm" href="{{ route('services') }}">BMW
                        R1250 GS</a></li>
                <li><a class="text-white/60 hover:text-[#9be9f7] transition-colors font-body text-sm"
                        href="{{ route('services') }}">Custom Flat Trackers</a></li>
            </ul>
        </div>
        <div class="col-span-1">
            <h5 class="text-white font-headline text-xs font-black uppercase tracking-widest mb-8">Quick Links</h5>
            <ul class="space-y-4">
                <li><a class="text-white/60 hover:text-[#9be9f7] transition-colors font-body text-sm"
                        href="{{ route('about') }}">About Us</a></li>
                <li><a class="text-white/60 hover:text-[#9be9f7] transition-colors font-body text-sm" href="{{ route('services') }}">Services</a></li>
                <li><a class="text-white/60 hover:text-[#9be9f7] transition-colors font-body text-sm"
                        href="{{ route('articles') }}">News</a></li>
                <li><a class="text-white/60 hover:text-[#9be9f7] transition-colors font-body text-sm"
                        href="{{ route('gallery') }}">Gallery</a></li>
                <li><a class="text-white/60 hover:text-[#9be9f7] transition-colors font-body text-sm"
                        href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
        </div>
        <div class="col-span-1">
            <h5 class="text-white font-headline text-xs font-black uppercase tracking-widest mb-8">Newsletter</h5>
            <div class="flex glass-panel rounded-lg overflow-hidden border border-white/10">
                <input class="bg-transparent border-none focus:ring-0 text-sm px-4 py-3 w-full text-white"
                    placeholder="Email Address" type="email" />
                <button class="bg-primary px-4 text-on-primary">
                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </button>
            </div>
        </div>
    </div>
    <div
        class="max-w-screen-2xl mx-auto mt-16 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6">
        <span class="text-white/40 font-body text-xs tracking-wide">© 2024 BikeRental.com | The Liquid Summit
            Experience</span>
        <div class="flex gap-6">
            <a class="text-white/40 hover:text-secondary transition-colors" href="#"><span
                    class="material-symbols-outlined">public</span></a>
            <a class="text-white/40 hover:text-secondary transition-colors" href="#"><span
                    class="material-symbols-outlined">share</span></a>
            <a class="text-white/40 hover:text-secondary transition-colors" href="#"><span
                    class="material-symbols-outlined">mail</span></a>
        </div>
    </div>
</footer>
