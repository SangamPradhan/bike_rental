@extends('layouts.app')
@push('css')
<meta property="og:title" content="package - Gratifyspa Hair & Skin Parlour " />
<meta property="og:type" content="website"/>
<meta property="og:description" content="Explore a range of aesthetic procedures at Gratifyspa Hair & Skin Parlour. From medi-peels to hydrafacials, our packages are designed to enhance your beauty naturally. Discover effective treatments with experienced professionals." />
<meta property="og:url" content="{{ route('packages') }}" />
<meta property="og:image" content="{{asset('assets/img/meta/package.png')}}"/>
@endpush


@section('content')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="">
        <h2>Our Packages</h2>
        <ol>
          <li><a href="{{ route('welcome') }}">Home</a></li>
          <li>Our Packages</li>
        </ol>
      </div>

    </div>
  </section>
  <!-- End Breadcrumbs -->


  <!-- News and Blogs Section Start -->
  <section class="all-packages">
    <div class="container">
      <h3 class="heading-title">
        Our Packages
      </h3>
      <div class="row mb-5">
        <div class="col-12 mx-auto">
          <p class="page-subtitle">We offer a variety of packages to accommodate all individuals clinical service needs.</p>
        </div>
      </div>
      <div class="row gy-4">
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="card px-3 py-4">
            <div class="overlay"></div>
            <div class="icon-container">
              <div class="icon">
                <img src="{{ asset('assets/img/packages/tulip-aesthetic.svg')}}" class="icon-image" height="40" alt="An aesthetic tulip icon" class="mt-3" />
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title">Aesthetic Procedures</h5>
              <p class="card-text">Aesthetic procedures encompass non-surgical treatments designed to enhance or rejuvenate physical appearance, focusing on cosmetic improvements.</p>
              <a href="{{ route('aesthetic') }}" class="cta">Learn More <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="card px-3 py-4">
            <div class="overlay"></div>
            <div class="icon-container">
              <div class="icon">
                <img src="{{ asset('assets/img/packages/laser.svg')}}" class="icon-image" height="40" alt="A laser pen icon" class="mt-3" />
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title">Laser Procedures</h5>
              <p class="card-text">Laser procedures involve the use of focused light beams to treat various medical and cosmetic conditions with precision.</p>
              <a href="{{ route('laser') }}" class="cta">Learn More <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="card px-3 py-4">
            <div class="overlay"></div>
            <div class="icon-container">
              <div class="icon">
                <img src="{{ asset('assets/img/packages/dermatology.svg')}}" class="icon-image" height="40" alt="A jar of cream with open lid icon" class="mt-3" />
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title">Dermatological Procedures</h5>
              <p class="card-text">Dermatological procedures involve medical and cosmetic treatments focused on skin health and appearance.</p>
              <a href="{{ route('dermatology') }}" class="cta">Learn More <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="card px-3 py-4">
            <div class="overlay"></div>
            <div class="icon-container">
              <div class="icon">
                <img src="{{ asset('assets/img/packages/allergytest.svg')}}" class="icon-image" height="40" alt="An tilted test tube icon" class="mt-3" />
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title">Allergy Test & Immunotherapy</h5>
              <p class="card-text">Allergy testing and immunotherapy are medical approaches aimed at identifying and managing allergic reactions for improved patient well-being.</p>
              <a href="{{ route('allergy-test') }}" class="cta">Learn More <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="card px-3 py-4">
            <div class="overlay"></div>
            <div class="icon-container">
              <div class="icon">
                <img src="{{ asset('assets/img/packages/hair.svg')}}" class="icon-image" height="40" alt="Human hair icon" class="mt-3" />
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title">Hair Treatment</h5>
              <p class="card-text">Hair treatment encompasses a range of medical and cosmetic interventions to address various hair-related concerns, promoting healthier and more vibrant hair.</p>
              <a href="{{ route('hair-treatment') }}" class="cta">Learn More <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="card px-3 py-4">
            <div class="overlay"></div>
            <div class="icon-container">
              <div class="icon">
                <img src="{{ asset('assets/img/packages/leaf.svg')}}" class="icon-image" height="40" alt="An aesthetic leaf icon" class="mt-3" />
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title">General Surgery</h5>
              <p class="card-text">General surgery involves surgical procedures on various body parts, excluding the brain, and spine, focusing on a wide spectrum of medical conditions.</p>
              <a href="{{ route('general-surgery') }}" class="cta">Learn More <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="card px-3 py-4">
            <div class="overlay"></div>
            <div class="icon-container">
              <div class="icon">
                <img src="{{ asset('assets/img/packages/plastic-surgery.svg')}}" class="icon-image" height="40" alt="A laser pen icon" class="mt-3" />
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title">Plastic Surgery</h5>
              <p class="card-text">Plastic surgery is a medical specialty that focuses on reconstructing or altering the body's form and appearance for aesthetic or functional purposes.</p>
              <a href="{{ route('plastic-surgery') }}" class="cta">Learn More <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="card px-3 py-4">
            <div class="overlay"></div>
            <div class="icon-container">
              <div class="icon">
                <img src="{{ asset('assets/img/packages/hand-heart.svg')}}" class="icon-image" height="40" alt="A hand and a heart" class="mt-3" />
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title">Other Special Package</h5>
              <p class="card-text">Also, we have some other special packages as well, which are listed below.</p>
              <a href="{{ route('special-package') }}" class="cta">Learn More <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- News and Blogs Section End -->


</main><!-- End #main -->


@endsection
