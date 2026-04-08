@extends('layouts.app')
@push('css')
    <meta property="og:title" content="Our Special Services - Gratifyspa Hair & Skin Clinic" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Explore our special services at Gratifyspa Hair & Skin Clinic. " />
    <meta property="og:url" content="{{ route('services') }}" />
    <meta property="og:image" content="{{ asset('assets/img/meta/service.png') }}" />
@endpush

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="">
                    <h2>Our Special Services</h2>
                    <ol>
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li>Services</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- what we do section start-->


        <section class="services-area text-center" id="what-we-do">
            <div class="container">
                <div class="services-items">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="">
                                <h3 class="heading-title">Services by Categories</h3>
                            </div>
                        </div>
                        <div class="container">
                            <div class="container">
                                <div class="categories-menu mb-4 text-center">
                                    <button class="btn btn-category active" data-category="all">All</button>
                                    <button class="btn btn-category" data-category="massagetherapy">Massage Therapy</button>
                                    <button class="btn btn-category" data-category="bodyTreatment">Body Treatment</button>
                                    <button class="btn btn-category" data-category="facialTreatment">Facials
                                        Treatment</button>
                                    <button class="btn btn-category" data-category="nailCare">Nail Care</button>
                                    <button class="btn btn-category" data-category="skinCare">Skin Care</button>
                                    <button class="btn btn-category" data-category="spaServices">Spa Services</button>
                                    <button class="btn btn-category" data-category="hairCare">Hair Care</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            @foreach ($services as $service)
                                <div class="col-lg-4 col-md-6 mb-4 service-card" data-category="{{ $service->category }}">
                                    <div class="card h-100 service-item">
                                        <div class="service-image">
                                            <img src="{{ $service->image_url }}" alt="{{ $service->title }}"
                                                class="card-img-top">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $service->title }}</h5>
                                            <p class="service-price">Starting From Rs
                                                {{ number_format($service->price ?? 3000) }}/-
                                            </p>
                                            <!-- <p class="card-text">{!! Str::limit(strip_tags($service->description), 1000) !!}</p> -->
                                            <div class="d-flex gap-3">
                                                <a href="{{ route('service-details', $service->id) }}"
                                                    class="btn btn-secondary">See Details</a>
                                                <button type="button"
                                                    onclick="window.location.href='{{ route('ride-booking') }}';"
                                                    class="btn btn-primary">Book Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- what we do section end -->

        <!-- Book an appointment banner section Start  -->
        <section id="ride-booking" class="appointment intl-patient">
            <div class="container p-0">
                <div class="appointment-banner intl-patient-banner">
                    <div class="row">
                        <div class="me-auto text-content">
                            <div class="px-4">
                                <h3 class="title mb-3">Explore International Customer Services</h3>
                                <p class="subtitle text-center">Discover specialized care tailored to international
                                    customers</p>
                                <button type="button"
                                    onclick="window.location.href='{{ route('international-patient-services') }}';"
                                    class="btn btn-primary">Learn More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Book an appointment banner section end  -->

    </main>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            // Ensure the correct nav-link is active
            $('.nav-link').removeClass('active');
            $('#navbar .nav-link').each(function() {
                if (this.href === window.location.href) {
                    $(this).addClass('active');
                }
            });

            // Function to handle image errors
            function handleImageError(img) {
                // Set a default fallback image
                img.src = "{{ asset('assets/img/default-placeholder.png') }}";
                img.onerror = null; // Prevent infinite loop
                $(img).closest('.top').addClass('image-load-error');
            }

            // Initialize all images
            function initializeImages() {
                $('img').each(function() {
                    // Add loading attribute
                    $(this).attr('loading', 'lazy');

                    // Add error handler
                    $(this).on('error', function() {
                        handleImageError(this);
                    });

                    // Add a placeholder while loading
                    if (!$(this).attr('src')) {
                        $(this).attr('src', "{{ asset('assets/img/placeholder.gif') }}");
                    }
                });
            }

            // Initialize images on page load
            initializeImages();

            // Intersection Observer for lazy loading
            if ('IntersectionObserver' in window) {
                const imageObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const img = entry.target;
                            if (img.dataset.src) {
                                img.src = img.dataset.src;
                                img.removeAttribute('data-src');
                                observer.unobserve(img);
                            }
                        }
                    });
                }, {
                    root: null,
                    rootMargin: '50px',
                    threshold: 0.1
                });

                document.querySelectorAll('img[data-src]').forEach(img => {
                    imageObserver.observe(img);
                });
            } else {
                // Fallback for browsers that don't support Intersection Observer
                $('img[data-src]').each(function() {
                    $(this).attr('src', $(this).data('src'));
                });
            }

            // Smooth scroll functionality
            $('a[href*="#"]').not('[href="#"]').click(function(event) {
                if (
                    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                    location.hostname == this.hostname
                ) {
                    let target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

                    if (target.length) {
                        event.preventDefault();
                        $('html, body').animate({
                            scrollTop: target.offset().top - 100
                        }, 1000);
                        return false;
                    }
                }
            });

            // Add loading spinner
            function addLoadingSpinner() {
                const spinner = `
                    <div class="loading-spinner" style="
                        position: fixed;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        z-index: 9999;
                        background: rgba(255,255,255,0.8);
                        padding: 20px;
                        border-radius: 10px;
                        display: none;
                    ">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                `;
                $('body').append(spinner);
            }

            // Show/hide loading spinner
            function showLoading() {
                $('.loading-spinner').fadeIn();
            }

            function hideLoading() {
                $('.loading-spinner').fadeOut();
            }

            // Add loading spinner
            addLoadingSpinner();

            // Handle appointment button clicks
            $('.btn-primary[href*="ride-booking"]').click(function(e) {
                showLoading();
                // Hide spinner after navigation or after 3 seconds (failsafe)
                setTimeout(hideLoading, 3000);
            });

            // Check for broken images on window load
            $(window).on('load', function() {
                $('img').each(function() {
                    if (!this.complete || this.naturalWidth === 0) {
                        handleImageError(this);
                    }
                });
                hideLoading();
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const categoryButtons = document.querySelectorAll('.btn-category');
            const serviceCards = document.querySelectorAll('.service-card');

            categoryButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Remove active class from all buttons
                    categoryButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    button.classList.add('active');

                    const selectedCategory = button.getAttribute('data-category');

                    serviceCards.forEach(card => {
                        // Remove any existing animation class
                        card.classList.remove('fade-in');

                        if (selectedCategory === 'all' || card.getAttribute(
                                'data-category') === selectedCategory) {
                            card.style.display = 'block';
                            // Add animation class
                            setTimeout(() => {
                                card.classList.add('fade-in');
                            }, 1);
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });

            // Initialize active button
            const activeButton = document.querySelector('.btn-category.active');
            if (activeButton) {
                activeButton.click();
            }
        });
    </script>
@endpush

@push('css')
    <style>
        /* Add loading placeholder style */
        .image-load-error {
            background-color: #f8f9fa;
            min-height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .image-load-error::after {
            content: 'Image not available';
            color: #6c757d;
            font-size: 0.875rem;
        }

        .hover-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
        }

        .filter-btn {
            border-color: var(--color-primary); !important;
            color: var(--color-primary); !important;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background-color: var(--color-primary); !important;
            color: white !important;
        }

        .service-image {
            width: 100%;
            height: 200px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .service-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 1;
            filter: none;
            transition: transform 0.3s ease;
        }

        .service-item {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .service-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .service-item:hover .service-image img {
            transform: scale(1.05);
        }

        .card-body {
            padding: 1.5rem;
            min-width: 1200px;
        }



        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
            text-align: left;
        }

        .service-price {
            color:var(primary);
            font-weight: 600;
            margin: 1rem 0;
        }

        .button-group {
            display: flex;
            gap: 10px;
            margin-top: 1rem;
            flex-wrap: wrap; /* Ensure buttons wrap to the next line if needed */
        }

        .button-group .btn {
            border-radius: 25px;
            padding: 8px 20px;
            flex: 1; /* Ensure buttons take equal space */
            text-align: center; /* Center the text inside the buttons */
        }

        .btn-outline-primary {
            color: var(--color-primary);;
            border-color: var(--color-primary);;
        }

        .btn-outline-primary:hover {
            background-color: var(--color-primary);;
            border-color: var(--color-primary);;
            color: white;
        }

        .btn-primary {
            background-color: var(--color-primary);;
            border-color: var(--color-primary);;
        }

        .btn-primary:hover {
            background-color: #228B22
            border-color: #c49519;
        }

        /* Animation for filtering */
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .btn-category {
            border: 3px solid var(--color-primary);; /* Bolder border */
            color: #333; /* Dark text color */
            font-weight: bold; /* Bold text */
            border-radius: 25px;
            padding: 8px 20px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn-category:hover,
        .btn-category.active {
            background-color: var(--color-primary);;
            color: white; /* White text when active */
            font-weight: bold; /* Bold text when active */
        }

        .nav-link.active {
            color: var(--color-primary); /* Example color */
            font-weight: bold; /* Example styling */
        }

        .categories-menu {
            overflow-x: auto;
            white-space: nowrap;
            -ms-overflow-style: none;  /* Internet Explorer 10+ */
            scrollbar-width: none;  /* Firefox */
        }

        .categories-menu::-webkit-scrollbar {
            display: none;  /* Safari and Chrome */
        }

        .btn-category {
            display: inline-block;
            border: 3px solid var(--color-primary);; /* Bolder border */
            color: #333; /* Dark text color */
            font-weight: bold; /* Bold text */
            border-radius: 25px;
            padding: 8px 20px;
            transition: background-color 0.3s ease, color 0.3s ease;
            margin-right: 5px; /* Reduced margin */
        }

        .btn-category:hover,
        .btn-category.active {
            background-color: var(--color-primary);;
            color: white; /* White text when active */
            font-weight: bold; /* Bold text when active */
            border: 3px solid var(--color-primary);; /* Bolder border when active */
        }

        @media (max-width: 768px) {
            .categories-menu {
                display: flex;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                scrollbar-width: none; /* Firefox */
            }

            .categories-menu::-webkit-scrollbar {
                display: none; /* Safari and Chrome */
            }
        }
    </style>
@endpush
