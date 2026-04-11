
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

     /**
   * Events slider
   */
  // new Swiper('.events-slider', {
  //   speed: 600,
  //   loop: true,
   
  //   slidesPerView: 'auto',
  //   pagination: {
  //     el: '.swiper-pagination',
  //     type: 'bullets',
  //     clickable: true
  //   }
  // });

  var swiper = new Swiper(".events-slider", {
    pagination: {
      el: ".swiper-pagination",
    },
  });
  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  /* Legacy Mobile Nav Removed as it conflicts with the new modern responsive header */

  /**
   * Hero carousel indicators
   */
  let heroCarouselIndicators = select("#hero-carousel-indicators")
  let heroCarouselItems = select('#heroCarousel .carousel-item', true)

  heroCarouselItems.forEach((item, index) => {
    (index === 0) ?
    heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "' class='active'></li>":
      heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "'></li>"
  });

   /**
   * Initiate glightbox
   */
   const galleryLightbox = GLightbox({
    selector: '.gallery-lightbox'
  });

  /*--------------------------------------------------------------
  # Premium BikeRental Global Scripts
  --------------------------------------------------------------*/
  document.addEventListener("DOMContentLoaded", function() {
    // Header Scroll Transform
    const header = document.getElementById('main-header');
    if (header) {
        window.addEventListener('scroll', function() {
          if (window.scrollY > 50) {
            header.style.transform = 'translateY(-40px)';
          } else {
            header.style.transform = 'translateY(0)';
          }
        });
    }

    // AOS Custom Initialization
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            easing: 'ease-out-quint',
            once: true,
            mirror: false,
            offset: Math.floor(window.innerHeight * 0.35),
        });
    }
  });

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

  /* Page-Specific Scripts */
  
  // Rides Filter Logic
  window.setFilter = function(key, value) {
    const filterInput = document.getElementById('filter-' + key);
    if (!filterInput) return;
    filterInput.value = value;

    if (key === 'type') {
      const brandItems = document.querySelectorAll('.brand-item');
      brandItems.forEach(item => {
        if (item.dataset.type === value) {
          item.classList.remove('hidden');
        } else {
          item.classList.add('hidden');
        }
      });
      const allBrandRadio = document.querySelector('input[name="brand"][value="all"]');
      if (allBrandRadio) allBrandRadio.checked = true;
    }

    const btns = document.querySelectorAll('.filter-btn-' + key);
    btns.forEach(btn => {
      btn.classList.remove('bg-secondary', 'text-on-secondary', 'shadow-[0_0_15px_rgba(254,178,52,0.3)]');
      btn.classList.add('bg-white/5', 'text-white/40');
      if (btn.innerText.toLowerCase() === value.toLowerCase()) {
        btn.classList.add('bg-secondary', 'text-on-secondary', 'shadow-[0_0_15px_rgba(254,178,52,0.3)]');
        btn.classList.remove('bg-white/5', 'text-white/40');
      }
    });

    const filterForm = document.getElementById('filter-form');
    if (filterForm) filterForm.submit();
  }

  // Sidebar Toggles
  window.openSideMenu = function() {
    const sidebar = document.getElementById('mobileSidebar');
    const overlay = document.getElementById('sidebarOverlay');
    if (sidebar && overlay) {
      sidebar.classList.add('active');
      overlay.classList.add('active');
      document.body.style.overflow = 'hidden';
      sidebar.classList.add('nav-active');
    }
  }

  window.closeSideMenu = function() {
    const sidebar = document.getElementById('mobileSidebar');
    const overlay = document.getElementById('sidebarOverlay');
    if (sidebar && overlay) {
      sidebar.classList.remove('active');
      overlay.classList.remove('active');
      document.body.style.overflow = 'auto';
      sidebar.classList.remove('nav-active');
    }
  }

  window.toggleTheme = function() {
    const html = document.documentElement;
    const isDark = html.classList.contains('dark');
    const sidebarIcon = document.getElementById('sidebar-theme-icon');
    
    if (isDark) {
      html.classList.remove('dark');
      localStorage.setItem('theme', 'light');
      if (sidebarIcon) sidebarIcon.innerText = 'dark_mode';
    } else {
      html.classList.add('dark');
      localStorage.setItem('theme', 'dark');
      if (sidebarIcon) sidebarIcon.innerText = 'light_mode';
    }
  }

 /**
   * Porfolio isotope and filter
   */
 let portfolionIsotope = document.querySelector('.portfolio-isotope');

 if (portfolionIsotope) {

   let portfolioFilter = portfolionIsotope.getAttribute('data-portfolio-filter') ? portfolionIsotope.getAttribute('data-portfolio-filter') : '*';
   let portfolioLayout = portfolionIsotope.getAttribute('data-portfolio-layout') ? portfolionIsotope.getAttribute('data-portfolio-layout') : 'masonry';
   let portfolioSort = portfolionIsotope.getAttribute('data-portfolio-sort') ? portfolionIsotope.getAttribute('data-portfolio-sort') : 'original-order';

   window.addEventListener('load', () => {
     let portfolioIsotope = new Isotope(document.querySelector('.portfolio-container'), {
       itemSelector: '.portfolio-item',
       layoutMode: portfolioLayout,
       filter: portfolioFilter,
       sortBy: portfolioSort
     });

     let menuFilters = document.querySelectorAll('.portfolio-isotope .portfolio-flters li');
     menuFilters.forEach(function(el) {
       el.addEventListener('click', function() {
         document.querySelector('.portfolio-isotope .portfolio-flters .filter-active').classList.remove('filter-active');
         this.classList.add('filter-active');
         portfolioIsotope.arrange({
           filter: this.getAttribute('data-filter')
         });
         if (typeof aos_init === 'function') {
           aos_init();
         }
       }, false);
     });

   });

 }

  /**
   * Initiate portfolio lightbox 
   */
  const portfolioLightbox = GLightbox({
    selector: '.portfolio-lightbox'
  });

  /**
   * Portfolio details slider
   */
  new Swiper('.portfolio-details-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

     /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    // autoplay: {
    //   delay: 5000,
    //   disableOnInteraction: false
    // },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },

      1200: {
        slidesPerView: 1,
        spaceBetween: 20
      }
    }
  });


  // International testimonials slider
  
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 'auto',
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 20
    },

    1200: {
      slidesPerView: 3,
      spaceBetween: 20
    }
  }
  });
  
  /**
   * Skills animation
   */
  let skilsContent = select('.skills-content');
  if (skilsContent) {
    new Waypoint({
      element: skilsContent,
      offset: '80%',
      handler: function(direction) {
        let progress = select('.progress .progress-bar', true);
        progress.forEach((el) => {
          el.style.width = el.getAttribute('aria-valuenow') + '%'
        });
      }
    })
  }

  /**
   * Animation on scroll
   */
  /* Redundant AOS Init Removed (Initialized in DOMContentLoaded) */

  

})()