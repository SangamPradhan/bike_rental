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
  <link rel="icon" href="assets/img/gratify.png" type="image/x-icon">

  <title>@yield('meta_title', 'Gratifying Spa')</title>
  <meta content="Gratifying Spa, hair loss solutions, hair growth treatments, non-surgical hair restoration
   skin care, aesthetic treatments, cosmetic procedures, prp therapy, botox and fillers, dermatology, acne treatment,
   dermatologist services, microneedling, anti-aging treatments, laser skin resurfacing, wrinkle reduction, laser hair reduction
   painless hair removal, laser treatment,, skin health, expert dermatologists, professional consultations
   trusted skincare, Gratifyspa clinic services" name="keywords">

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="color-scheme" content="light">
  <meta name="supported-color-schemes" content="light">
  <meta charset="UTF-8">
  <meta name="description" content="At Gratifyspa, we enhance your health, well-being, and confidence by providing personalized treatment experiences in dermatology, and aesthetic practices. Trust, loyalty, and exceptional care are at the core of our mission.">
  <meta name="robots" content="index, follow">
  <meta name="author" content="Gratifyspa">


  <meta property="og:title" content="@yield('og_title', 'Gratifyspa | Transform your look with our expert care')" >
  <meta property="og:description" content="@yield('og_description', 'At Gratifyspa, we enhance your health, well-being, and confidence by providing personalized treatment experiences in dermatology, and aesthetic practices. Trust, loyalty, and exceptional care are at the core of our mission.')" >
  <meta property="og:site_name" content="Gratifyspa">
  <meta property="og:url" content="@yield('og_url', url('https://gratifying.besteventsvenue.com/'))">
  <meta property="og:type" content="website">
  <meta property="og:image" content="@yield('og_image', asset('assets/img/gratify.png'))">
  <meta property="og:site_name" content="Gratifyspa">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.icon')}}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

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
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" />
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
  <style>
      .glass-panel {
          background: rgba(255, 255, 255, 0.07);
          backdrop-filter: blur(16px);
          -webkit-backdrop-filter: blur(16px);
      }

      .liquid-gradient {
          background: linear-gradient(135deg, #9be9f7 0%, #5dacb9 100%);
      }

      .amber-glow {
          filter: drop-shadow(0 0 8px rgba(254, 178, 52, 0.4));
      }

      .shimmer-hover:hover {
          background: linear-gradient(110deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.1) 100%);
          background-size: 200% 100%;
      }

      .material-symbols-outlined {
          font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
      }

      .tracking-tightest {
          letter-spacing: -0.05em;
      }

      .no-scrollbar {
          -ms-overflow-style: none;
          scrollbar-width: none;
      }

      /* Cinematic 3D Reveal Effects */
      .reveal-3d {
          perspective: 1500px;
          transform-style: preserve-3d;
      }

      [data-aos="cinematic-up"] {
          opacity: 0;
          transform: translateY(100px) translateZ(-200px) rotateX(15deg);
          transition-property: transform, opacity;
      }

      [data-aos="cinematic-up"].aos-animate {
          opacity: 1;
          transform: translateY(0) translateZ(0) rotateX(0);
      }

      [data-aos="cinematic-right"] {
          opacity: 0;
          transform: translateX(-100px) translateZ(-200px) rotateY(-15deg);
          transition-property: transform, opacity;
      }

      [data-aos="cinematic-right"].aos-animate {
          opacity: 1;
          transform: translateX(0) translateZ(0) rotateY(0);
      }

      [data-aos="cinematic-left"] {
          opacity: 0;
          transform: translateX(100px) translateZ(-200px) rotateY(15deg);
          transition-property: transform, opacity;
      }

      [data-aos="cinematic-left"].aos-animate {
          opacity: 1;
          transform: translateX(0) translateZ(0) rotateY(0);
      }

      /* Custom Cursor Styles */
      .custom-cursor {
          width: 12px;
          height: 12px;
          background: #feb234;
          border-radius: 50%;
          position: fixed;
          pointer-events: none;
          z-index: 9999;
          box-shadow: 0 0 15px #feb234;
          transform: translate(-50%, -50%);
          transition: width 0.3s, height 0.3s, background-color 0.3s, border 0.3s;
      }
      
      @media (min-width: 768px) {
          body, a, button, [role="button"] {
              cursor: none !important;
          }
      }
  </style>
  @stack('css')
</head>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const header = document.getElementById('main-header');
    if (header) {
        window.addEventListener('scroll', function() {
          if (window.scrollY > 50) {
            // Translate the header up by 40px (approx height of the top contact bar)
            header.style.transform = 'translateY(-40px)';
          } else {
            header.style.transform = 'translateY(0)';
          }
        });
    }
  });
</script>

<body class="bg-surface text-on-surface">
  <div class="custom-cursor hidden md:block"></div>

  @include('layouts.partials.header')

  @yield('content')

  @include('layouts.partials.footer')
  @include('front.packages.msg')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
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

  <script>
      document.addEventListener('DOMContentLoaded', function() {
          AOS.init({
              duration: 1000,
              easing: 'ease-out-quint',
              once: true,
              mirror: false,
              // Trigger when element is about 35-40% into the viewport
              offset: Math.floor(window.innerHeight * 0.35),
          });
      });
  </script>

  <!-- slider open on page load -->
  <script>
    if (document.getElementById('myModal')) {
        var myModal = new bootstrap.Modal(document.getElementById('myModal'), {})
        myModal.show()
    }
    
    function toggleTheme() {
        const html = document.documentElement;
        if (html.classList.contains('dark')) {
            html.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        } else {
            html.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        }
    }

    // Custom Cursor Logic
    const cursor = document.querySelector('.custom-cursor');
    if (cursor) {
        document.addEventListener('mousemove', (e) => {
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
        });

        document.addEventListener('mousedown', () => cursor.style.transform = 'translate(-50%, -50%) scale(0.8)');
        document.addEventListener('mouseup', () => cursor.style.transform = 'translate(-50%, -50%) scale(1)');

        const interactiveElements = document.querySelectorAll('a, button, [role="button"]');
        interactiveElements.forEach(el => {
            el.addEventListener('mouseenter', () => {
                cursor.style.width = '40px';
                cursor.style.height = '40px';
                cursor.style.backgroundColor = 'transparent';
                cursor.style.border = '2px solid #feb234';
            });
            el.addEventListener('mouseleave', () => {
                cursor.style.width = '12px';
                cursor.style.height = '12px';
                cursor.style.backgroundColor = '#feb234';
                cursor.style.border = 'none';
            });
        });
    }
  </script>



</body>

</html>
