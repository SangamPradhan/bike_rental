<!-- Top Navigation Shell -->
<nav id="main-header" class="fixed top-0 w-full z-50 transition-transform duration-500 ease-in-out">
    <!-- Top Contact Bar -->
    <div class="bg-surface-container-highest/80 backdrop-blur-md border-b border-white/5 py-2 px-12">
        <div class="max-w-screen-2xl mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-6">
                <a class="flex items-center gap-2 text-[10px] font-bold uppercase tracking-widest text-white/60 hover:text-primary transition-colors"
                    href="mailto:Bikerentinpokhara@gmail.com">
                    <span class="material-symbols-outlined text-sm">mail</span>
                    <span class="hidden md:inline">Bikerentinpokhara@gmail.com</span>
                </a>
                <a class="flex items-center gap-2 text-[10px] font-bold uppercase tracking-widest text-white/60 hover:text-primary transition-colors"
                    href="tel:9856080258">
                    <span class="material-symbols-outlined text-sm">phone</span>
                    <span class="hidden md:inline">+977 985-6080258</span>
                </a>
            </div>
            <div class="flex items-center space-x-4 text-white/40">
                <a href="{{ route('contact') }}" class="flex items-center">
                    <span
                        class="material-symbols-outlined text-sm cursor-pointer hover:text-primary transition-colors">location_on</span>
                </a>
                <!-- Theme Toggle Button -->
                <button onclick="toggleTheme()"
                    class="flex items-center justify-center hover:text-primary transition-colors focus:outline-none"
                    title="Toggle Theme">
                    <span class="material-symbols-outlined text-sm hidden dark:block">light_mode</span>
                    <span class="material-symbols-outlined text-sm block dark:hidden">dark_mode</span>
                </button>
            </div>
        </div>
    </div>

    <style>
        /* Desktop Links: Show above 995px */
        @media (min-width: 1028px) {
            .nav-desktop-main {
                display: flex !important;
            }

            .nav-mobile-hamburger {
                display: none !important;
            }
        }

        /* Mobile Hamburger: Show at 995px and below */
        @media (max-width: 995px) {
            .nav-desktop-main {
                display: none !important;
            }

            .nav-mobile-hamburger {
                display: flex !important;
            }
        }
    </style>

    <!-- Main Nav -->
    <div class="bg-surface/40 backdrop-blur-lg border-b border-white/5 shadow-[0_20px_50px_rgba(0,0,0,0.4)]">
        <div class="flex justify-between items-center px-4 lg:px-8 xl:px-12 py-6 max-w-screen-2xl mx-auto">
            <a href="{{ route('welcome') }}" class="flex items-center gap-3 lg:gap-4 group transition-all">
                <!-- Circular Logo with Glow -->
                <div class="relative shrink-0">
                    <div
                        class="w-16 h-16 rounded-full border-2 border-secondary p-0.5 shadow-[0_0_15px_rgba(254,178,52,0.4)] group-hover:shadow-[0_0_20px_rgba(254,178,52,0.6)] transition-all duration-300">
                        <div
                            class="w-full h-full rounded-full overflow-hidden bg-surface-container-highest flex items-center justify-center">
                            <img src="{{ asset('assets/img/meta/bike_rental.webp') }}" alt="Logo"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
                <!-- Brand Text -->
                <div class="flex flex-col leading-tight">
                    <span
                        class="text-secondary font-headline font-black text-base lg:text-lg tracking-tighter uppercase whitespace-nowrap">
                        Bike & Scooter
                    </span>
                    <span
                        class="text-secondary font-label font-bold text-[11px] lg:text-[12px] tracking-[0.15em] uppercase opacity-90 whitespace-nowrap">
                        Rent in Pokhara
                    </span>
                </div>
            </a>
            <!-- Desktop Links (Show from 1150px) -->
            <div class="nav-desktop-main items-center xl:space-x-10 lg:space-x-4 space-x-2">
                <a class="font-headline tracking-tighter uppercase font-bold text-sm {{ request()->is('/') ? 'text-[#feb234] border-b-2 border-[#feb234] pb-1' : 'text-white/80 hover:text-[#9be9f7] hover:scale-105 transition-all duration-300' }}"
                    href="{{ route('welcome') }}">Fleet</a>
                <a class="font-headline tracking-tighter uppercase font-bold text-sm {{ request()->routeIs('about') ? 'text-[#feb234] border-b-2 border-[#feb234] pb-1' : 'text-white/80 hover:text-[#9be9f7] hover:scale-105 transition-all duration-300' }}"
                    href="{{ route('about') }}">About</a>
                <a class="font-headline tracking-tighter uppercase font-bold text-sm {{ request()->routeIs('rides') ? 'text-[#feb234] border-b-2 border-[#feb234] pb-1' : 'text-white/80 hover:text-[#9be9f7] hover:scale-105 transition-all duration-300' }}"
                    href="{{ route('rides') }}">Rides</a>
                <a class="font-headline tracking-tighter uppercase font-bold text-sm {{ request()->routeIs('gallery') ? 'text-[#feb234] border-b-2 border-[#feb234] pb-1' : 'text-white/80 hover:text-[#9be9f7] hover:scale-105 transition-all duration-300' }}"
                    href="{{ route('gallery') }}">Gallery</a>
                <a class="font-headline tracking-tighter uppercase font-bold text-sm {{ request()->routeIs('articles') || request()->routeIs('article-details') ? 'text-[#feb234] border-b-2 border-[#feb234] pb-1' : 'text-white/80 hover:text-[#9be9f7] hover:scale-105 transition-all duration-300' }}"
                    href="{{ route('articles') }}">Stories</a>
                <a class="font-headline tracking-tighter uppercase font-bold text-sm {{ request()->routeIs('contact') ? 'text-[#feb234] border-b-2 border-[#feb234] pb-1' : 'text-white/80 hover:text-[#9be9f7] hover:scale-105 transition-all duration-300' }}"
                    href="{{ route('contact') }}">Support</a>
            </div>
            <!-- CTA and Hamburger -->
            <div class="flex items-center space-x-4">
                <button
                    class="nav-desktop-main px-8 py-3 liquid-gradient text-on-primary font-headline uppercase text-xs font-black tracking-widest rounded-lg hover:scale-105 active:scale-95 transition-all duration-300 shadow-[0_0_15_rgba(155,233,247,0.3)]">Book
                    Now</button>
                <button onclick="openSideMenu()" class="hamburger-btn nav-mobile-hamburger">
                    <span class="material-symbols-outlined text-3xl">menu</span>
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Sidebar Overlay -->
<div id="sidebarOverlay" class="sidebar-overlay" onclick="closeSideMenu()"></div>

<!-- Mobile Sidebar -->
<aside id="mobileSidebar" class="mobile-sidebar">
    <div class="flex flex-col h-full">
        <!-- Sidebar Header -->
        <div class="p-8 pb-2">
            <div class="flex justify-between items-start mb-8">
                <div class="relative">
                    <div
                        class="w-20 h-20 rounded-full border-2 border-secondary p-1 shadow-[0_0_20px_rgba(155,233,247,0.3)]">
                        <div
                            class="w-full h-full rounded-full bg-surface-container-highest flex items-center justify-center overflow-hidden">
                            <!-- <span class="material-symbols-outlined text-4xl text-primary">directions_bike</span> -->
                            <img src="{{ asset('assets/img/meta/bike_rental.webp')}}" alt="Bike&ScootyRentalPokhara">
                        </div>
                    </div>
                </div>
                <button onclick="closeSideMenu()" class="text-white/60 hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-3xl">close</span>
                </button>
            </div>
            <h2 class="text-2xl font-black text-secondary tracking-tightest font-headline mb-1">Bike & Scooter Rent in
                Pokhara</h2>
            <p class="text-[10px] text-white/40 uppercase tracking-[0.2em] font-bold mb-6">Premium Fleet & Service</p>

            <!-- Social Icons -->
            <div class="flex space-x-3 mb-8">
                <a href="#" class="social-icon-btn"><i class='bx bxl-facebook'></i></a>
                <a href="#" class="social-icon-btn"><i class='bx bxl-instagram'></i></a>
                <a href="#" class="social-icon-btn"><i class='bx bxl-twitter'></i></a>
                <a href="#" class="social-icon-btn"><i class='bx bxl-whatsapp'></i></a>
            </div>
        </div>

        <!-- Sidebar Navigation -->
        <nav class="flex-1 px-4 py-2 overflow-y-auto no-scrollbar flex flex-col gap-2 pb-24">
            <a class="sidebar-link {{ request()->routeIs('welcome') ? 'active' : '' }}" href="{{ route('welcome') }}"
                style="--i:1">
                <span class="material-symbols-outlined">home</span>
                <span>Fleet</span>
            </a>
            <a class="sidebar-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}"
                style="--i:2">
                <span class="material-symbols-outlined">info</span>
                <span>About</span>
            </a>
            <a class="sidebar-link {{ request()->routeIs('rides') || request()->routeIs('select-vehicle') ? 'active' : '' }}"
                href="{{ route('rides') }}" style="--i:3">
                <span class="material-symbols-outlined">motorcycle</span>
                <span>Rides</span>
            </a>
            <a class="sidebar-link {{ request()->routeIs('gallery') ? 'active' : '' }}" href="{{ route('gallery') }}"
                style="--i:4">
                <span class="material-symbols-outlined">gallery_thumbnail</span>
                <span>Gallery</span>
            </a>
            <a class="sidebar-link {{ request()->routeIs('articles*') ? 'active' : '' }}" href="{{ route('articles') }}"
                style="--i:5">
                <span class="material-symbols-outlined">book_4</span>
                <span>Stories</span>
            </a>
            <a class="sidebar-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}"
                style="--i:6">
                <span class="material-symbols-outlined">support_agent</span>
                <span>Support</span>
            </a>
            <div
                class="mt-2 ml-3 flex items-center justify-between bg-surface-container-highest/40 p-2 rounded-xl border border-white/5">
                <span class="text-xs font-bold uppercase tracking-widest text-white/60">Switch Theme</span>
                <button onclick="toggleTheme()"
                    class="w-10 h-10 flex items-center justify-center rounded-lg bg-surface hover:bg-primary/20 transition-all">
                    <span class="material-symbols-outlined text-lg dark:block hidden">light_mode</span>
                    <span class="material-symbols-outlined text-lg block dark:hidden">dark_mode</span>
                </button>
            </div>

            <!-- Sidebar Footer moved inside scrollable nav -->
            <div class="mt-8 p-4 border-t border-white/5">
                <p class="text-[10px] text-white/40 leading-relaxed">
                    &copy; {{ date('Y') }} BikeRental.com. All rights reserved.<br>
                    <span class="mt-2 block">Designed for premium experiences.</span>
                    <a href="https://pradhansangam.com.np" target="_blank"
                        class="mt-2 block text-primary/60 hover:text-primary transition-colors">by dev-sangam</a>
                </p>
            </div>
        </nav>
    </div>
</aside>