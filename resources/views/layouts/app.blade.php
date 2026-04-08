<html lang="en-US" class="dark">
<script>
    // Theme toggle script - before any content to avoid flash
    if (localStorage.getItem('theme') === 'light') {
        document.documentElement.classList.remove('dark');
    } else {
        document.documentElement.classList.add('dark');
    }
</script>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="icon" href="{{ asset('assets/img/gratify.png')}}" type="image/x-icon">

    <title>@yield('meta_title', 'BikeRental.com - Premium Bike & Scooter Rentals')</title>
    <meta content="Bike Rental, motorcycle rental, scooter rental, premium bikes, travel Nepal, ride Himalayas"
        name="keywords">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description"
        content="BikeRental.com offers premium motorcycle and scooter rentals for adventurers. Explore the circuit with our well-maintained fleet and expert support.">
    <meta name="robots" content="index, follow">
    <meta name="author" content="BikeRental.com">


    <meta property="og:title" content="@yield('og_title', 'BikeRental.com | Premium Fleet & Service')">
    <meta property="og:description"
        content="@yield('og_description', 'Explore the circuit with our premium motorcycle and scooter rentals. Well-maintained fleet and expert support for your adventure.')">
    <meta property="og:site_name" content="BikeRental.com">
    <meta property="og:url" content="@yield('og_url', url('/'))">
    <meta property="og:type" content="website">
    <meta property="og:image" content="@yield('og_image', asset('assets/img/meta/bike_rental.webp'))">

    <!-- Favicons -->
    <link href="{{ asset('favicons/favicon.icon')}}" rel="icon">
    <link href="{{ asset('favicons/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Epilogue:wght@700;800;900&amp;family=Inter:wght@400;500;600&amp;family=Plus+Jakarta+Sans:wght@500;600;700&amp;family=Bebas+Neue&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link type="text/css" rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



    <!--  Main CSS File -->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "tertiary-fixed": "#feb72f",
                        "surface": "#0e0e13",
                        "error": "#ff716c",
                        "inverse-on-surface": "#55545b",
                        "on-surface-variant": "#acaab1",
                        "on-background": "#f9f5fd",
                        "on-tertiary-fixed-variant": "#604100",
                        "primary-fixed-dim": "#8ddbe8",
                        "on-secondary-container": "#fff6ef",
                        "tertiary-dim": "#eea91f",
                        "surface-tint": "#9be9f7",
                        "secondary-dim": "#eea526",
                        "surface-bright": "#2c2b33",
                        "surface-container-low": "#131319",
                        "primary-fixed": "#9be9f7",
                        "error-container": "#9f0519",
                        "surface-dim": "#0e0e13",
                        "error-dim": "#d7383b",
                        "on-tertiary": "#614100",
                        "surface-container-highest": "#25252d",
                        "on-primary": "#005761",
                        "on-secondary-fixed-variant": "#6f4900",
                        "on-surface": "#f9f5fd",
                        "primary-dim": "#8ddbe8",
                        "on-tertiary-fixed": "#3a2600",
                        "on-error": "#490006",
                        "inverse-surface": "#fcf8ff",
                        "on-primary-fixed": "#00434b",
                        "on-primary-container": "#00272d",
                        "background": "#0e0e13",
                        "on-tertiary-container": "#553900",
                        "on-secondary-fixed": "#492f00",
                        "tertiary-container": "#feb72f",
                        "secondary": "#feb234",
                        "on-primary-fixed-variant": "#00616c",
                        "surface-variant": "#25252d",
                        "surface-container-high": "#1f1f26",
                        "primary": "#9be9f7",
                        "outline": "#76747b",
                        "surface-container": "#19191f",
                        "inverse-primary": "#006975",
                        "secondary-fixed": "#ffc87a",
                        "tertiary": "#ffc970",
                        "secondary-fixed-dim": "#ffb63e",
                        "outline-variant": "#48474d",
                        "tertiary-fixed-dim": "#eea91f",
                        "surface-container-lowest": "#000000",
                        "secondary-container": "#815500",
                        "primary-container": "#5dacb9",
                        "on-secondary": "#543600",
                        "on-error-container": "#ffa8a3"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "3xl": "1.5rem",
                        "4xl": "2rem",
                        "full": "9999px"
                    },
                    "fontFamily": {
                        "headline": ["Epilogue"],
                        "body": ["Inter"],
                        "label": ["Plus Jakarta Sans"],
                        "accent": ["Bebas Neue"]
                    }
                },
            },
        }
    </script>
    </style>
    @stack('css')
</head>
</script>

<body class="bg-surface text-on-surface">
    <div class="custom-cursor hidden md:block"></div>

    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')
    @include('front.packages.msg')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!--  JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>


    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->

    <!--  Main JS File -->
    <script src="{{ asset('assets/js/main.js')}}"></script>

    <!-- Before and After Slider JS File -->
    <script src="{{ asset('assets/js/slider.js')}}"></script>

    <!-- For adding js from other pages -->
    @stack('js')

    </script>

    </script>



</body>

</html>