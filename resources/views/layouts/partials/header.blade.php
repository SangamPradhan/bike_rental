<!-- Top Navigation Shell -->
<nav id="main-header" class="fixed top-0 w-full z-50 transition-transform duration-500 ease-in-out">
    <!-- Top Contact Bar -->
    <div class="bg-surface-container-highest/80 backdrop-blur-md border-b border-white/5 py-2 px-12">
        <div class="max-w-screen-2xl mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-6">
                <a class="flex items-center gap-2 text-[10px] font-bold uppercase tracking-widest text-white/60 hover:text-primary transition-colors"
                    href="mailto:ride@bikerental.com">
                    <span class="material-symbols-outlined text-sm">mail</span> ride@bikerental.com
                </a>
                <a class="flex items-center gap-2 text-[10px] font-bold uppercase tracking-widest text-white/60 hover:text-primary transition-colors"
                    href="tel:+977123456789">
                    <span class="material-symbols-outlined text-sm">phone</span> +977 1 2345678
                </a>
            </div>
            <div class="flex items-center space-x-4 text-white/40">
                <a href="{{ route('contact') }}" class="flex items-center">
                    <span class="material-symbols-outlined text-sm cursor-pointer hover:text-primary transition-colors">location_on</span>
                </a>
                <!-- Theme Toggle Button -->
                <button onclick="toggleTheme()" class="flex items-center justify-center hover:text-primary transition-colors focus:outline-none" title="Toggle Theme">
                    <span class="material-symbols-outlined text-sm hidden dark:block">light_mode</span>
                    <span class="material-symbols-outlined text-sm block dark:hidden">dark_mode</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Main Nav -->
    <div class="bg-surface/40 backdrop-blur-lg border-b border-white/5 shadow-[0_20px_50px_rgba(0,0,0,0.4)]">
        <div class="flex justify-between items-center px-12 py-6 max-w-screen-2xl mx-auto">
            <a href="{{ route('welcome') }}" class="text-2xl font-black text-[#9be9f7] tracking-tightest font-headline">BikeRental.com</a>
            <div class="hidden md:flex items-center space-x-10">
                <a class="font-headline tracking-tighter uppercase font-bold text-sm {{ request()->is('/') ? 'text-[#feb234] border-b-2 border-[#feb234] pb-1' : 'text-white/80 hover:text-[#9be9f7] hover:scale-105 transition-all duration-300' }}"
                    href="{{ route('welcome') }}">Fleet</a>
                <a class="font-headline tracking-tighter uppercase font-bold text-sm {{ request()->routeIs('about') ? 'text-[#feb234] border-b-2 border-[#feb234] pb-1' : 'text-white/80 hover:text-[#9be9f7] hover:scale-105 transition-all duration-300' }}"
                    href="{{ route('about') }}">About</a>
                <a class="font-headline tracking-tighter uppercase font-bold text-sm {{ request()->routeIs('services') ? 'text-[#feb234] border-b-2 border-[#feb234] pb-1' : 'text-white/80 hover:text-[#9be9f7] hover:scale-105 transition-all duration-300' }}"
                    href="{{ route('services') }}">Rides</a>
                <a class="font-headline tracking-tighter uppercase font-bold text-sm {{ request()->routeIs('gallery') ? 'text-[#feb234] border-b-2 border-[#feb234] pb-1' : 'text-white/80 hover:text-[#9be9f7] hover:scale-105 transition-all duration-300' }}"
                    href="{{ route('gallery') }}">Gallery</a>
                <a class="font-headline tracking-tighter uppercase font-bold text-sm {{ request()->routeIs('articles') || request()->routeIs('article-details') ? 'text-[#feb234] border-b-2 border-[#feb234] pb-1' : 'text-white/80 hover:text-[#9be9f7] hover:scale-105 transition-all duration-300' }}"
                    href="{{ route('articles') }}">Stories</a>
                <a class="font-headline tracking-tighter uppercase font-bold text-sm {{ request()->routeIs('contact') ? 'text-[#feb234] border-b-2 border-[#feb234] pb-1' : 'text-white/80 hover:text-[#9be9f7] hover:scale-105 transition-all duration-300' }}"
                    href="{{ route('contact') }}">Support</a>
            </div>
            <div class="flex items-center space-x-4">
                <button
                    class="px-8 py-3 liquid-gradient text-on-primary font-headline uppercase text-xs font-black tracking-widest rounded-lg hover:scale-105 active:scale-95 transition-all duration-300 shadow-[0_0_15px_rgba(155,233,247,0.3)]">Book
                    Now</button>
            </div>
        </div>
    </div>
</nav>
