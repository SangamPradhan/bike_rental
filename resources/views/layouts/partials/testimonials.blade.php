<!-- Testimonials Carousel -->
<section class="py-24 px-8 max-w-7xl mx-auto">
    <div class="text-center mb-16" data-aos="fade-up">
        <span class="text-secondary font-label text-sm font-bold uppercase tracking-[0.3em]">Voices from the Road</span>
        <h2 class="font-headline text-5xl font-black text-white mt-4 tracking-tighter uppercase">
            What our <span class="text-secondary">Riders</span> say
        </h2>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
        @php
            $displayTestimonials = count($testimonials ?? []) > 0 ? $testimonials : [
                (object) [
                    'name' => 'James Sterling',
                    'country' => 'London, UK',
                    'message' => '"The KTM 890 Adventure R I rented was tuned to perfection. Crossing the Thorong La pass was effortless. The gear provided was top-tier."',
                    'rating' => 5,
                    'image_url' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=200&h=200&auto=format&fit=crop'
                ],
                (object) [
                    'name' => 'Elena Rossi',
                    'country' => 'Milan, Italy',
                    'message' => '"Unbeatable service. They helped with permits, route planning, and even tracked my GPS throughout the Mustang circuit. Pure peace of mind."',
                    'rating' => 5,
                    'image_url' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=200&h=200&auto=format&fit=crop'
                ],
                (object) [
                    'name' => 'Akira Tanaka',
                    'country' => 'Tokyo, Japan',
                    'message' => '"The Himalayan was built for these trails, but the BIKERENTAL team took it to another level with their custom mods. Can\'t wait to return."',
                    'rating' => 5,
                    'image_url' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=200&h=200&auto=format&fit=crop'
                ]
            ];
        @endphp

        @foreach($displayTestimonials as $testimonial)
            <div class="glass-panel p-8 rounded-2xl border border-white/5 flex flex-col justify-between hover:border-secondary/30 hover:scale-[1.02] transition-all duration-500 shadow-2xl group"
                data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="space-y-6">
                    <span
                        class="material-symbols-outlined text-secondary text-5xl opacity-30 group-hover:opacity-100 transition-opacity"
                        style="font-variation-settings: 'FILL' 1;">format_quote</span>
                    <p
                        class="text-on-surface-variant italic text-lg leading-relaxed line-clamp-4 group-hover:text-white transition-colors">
                        {!! str_starts_with($testimonial->message, '"') ? $testimonial->message : '"' . $testimonial->message . '"' !!}
                    </p>
                </div>

                <div class="mt-8 pt-8 border-t border-white/5">
                    <div class="flex items-center gap-4">
                        <!-- Profile Image -->
                        <div
                            class="w-16 h-16 rounded-full overflow-hidden border-2 border-secondary/20 group-hover:border-secondary transition-colors shrink-0">
                            <img src="{{ isset($testimonial->image_url) ? $testimonial->image_url : ($testimonial->getImage() ?? asset('assets/img/avatar.png')) }}"
                                alt="{{ $testimonial->name }}" class="w-full h-full object-cover">
                        </div>

                        <div class="flex flex-col justify-center">
                            <div class="flex text-secondary mb-1">
                                @for($i = 0; $i < ($testimonial->rating ?? 5); $i++)
                                    <span class="material-symbols-outlined text-sm"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                @endfor
                            </div>
                            <h4 class="font-bold text-white tracking-tight group-hover:text-secondary transition-colors">
                                {{ $testimonial->name }}
                            </h4>
                            <span class="text-[10px] font-label text-white/40 uppercase tracking-[0.2em]">
                                {{ $testimonial->country ?? 'Rider' }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>