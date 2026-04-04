@extends('layouts.app')

@push('css')
<meta property="og:title" content="Success Stories - Gratifyspa Hair & Skin Clinic" />
<meta property="og:type" content="website"/>
<meta property="og:description" content="Explore inspiring success stories from Gratifyspa Hair & Skin Clinic. Witness the incredible transformations achieved by our clients on their journey to radiant skin and healthy hair. Read real experiences and get motivated for your own transformation." />
<meta property="og:url" content="{{ route('success-stories') }}" />
<meta property="og:image" content="{{ asset('assets/img/meta/success-stories.png') }}" />
@endpush

@section('content')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="">
        <h2>Success Stories</h2>
        <ol>
          <li><a href="{{ route('welcome') }}">Home</a></li>
          <li>Success Stories</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->



  <!-- Before and After section Start  -->
  <!-- <section class="before-after before-after-page" id="before-after">
    <div class="container mb-5">
      <div class="row mt-5">
        <div class="col-lg-12">
          <h3 class="heading-title">Success Stories</h3>
          <div class="row">
            <p class=" col-md-12 mx-auto"> Witness the transformative journey of our patients at Gratifyspa Skin and Hair Clinic.
              From overcoming persistent skin issues to restoring confidence through hair treatments, our success stories are a testament to our commitment to
              personalized care and effective solutions. See how individuals have embraced a positive change in their lives through our tailored and advanced treatments.
               Your success story could be the next chapter we write together.</p>
          </div>
        </div>
      </div>

      <div class="row d-flex gx-5 my-5">
        <div class="col-xl-6 col-lg-6 col-md-6 mb-5 slider1">
          <div class="slider-wrapper">
            <div class="images">
              <div class="img-1"></div>
              <div class="img-2"></div>
            </div>
            <div class="slider">
              <div class="drag-line">
                <span></span>
              </div>
              <input type="range" min="0" max="100" value="50">
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6  mb-5 slider2">
          <div class="slider-wrapper">
            <div class="images">
              <div class="img-1 "></div>
              <div class="img-2"></div>
            </div>
            <div class="slider">
              <div class="drag-line">
                <span></span>
              </div>
              <input type="range" min="0" max="100" value="50">
            </div>
          </div>
        </div>
      </div>
      <h3 class="heading-title">
        More Success Stories
      </h3>
      <div class="row mb-5 gx-5 gy-3">
        <div class="col-md-6">
          <div class="before-after-container">
            <div class="row mt-5 images-container ">
              <div class="col item" data-title="Before">
                <a href="{{ asset('assets/img/before-after/wrinkle-before.jpg')}}" class="fancybox" data-fancybox="gallery1">
                  <img src="{{ asset('assets/img/before-after/wrinkle-before.jpg')}}" alt="A picture of a woman's face before botox treatment" class="before" />
                </a>
              </div>
              <div class="col item" data-title="After">
                <a href="{{ asset('assets/img/before-after/no-wrinkle-after.jpg')}}" class="fancybox" data-fancybox="gallery1">
                  <img src="{{ asset('assets/img/before-after/no-wrinkle-after.jpg')}}" alt="A picture of a woman's face after botox treatment" class="after" />
                </a>
              </div>
            </div>
            <h6 class="card-title text-center">Botox Treatment</h6>
          </div>
        </div>

        <div class="col-md-6">
          <div class="before-after-container">
            <div class="row mt-5 images-container ">
              <div class="col item" data-title="Before">
                <a href="{{ asset('assets/img/before-after/jawlinetreatmentbefore.jpg')}}" class="fancybox" data-fancybox="gallery1">
                  <img src="{{ asset('assets/img/before-after/jawlinetreatmentbefore.jpg')}}" alt="A picture of a woman's face before botox treatment" class="before" />
                </a>
              </div>
              <div class="col item" data-title="After">
                <a href="{{ asset('assets/img/before-after/jawlinetreatmentafter.jpg')}}" class="fancybox" data-fancybox="gallery1">
                  <img src="{{ asset('assets/img/before-after/jawlinetreatmentafter.jpg')}}" alt="A picture of a woman's face after botox treatment" class="after" />
                </a>
              </div>
            </div>
            <h6 class="card-title text-center">Jawline Treatment</h6>
          </div>
        </div>

        <div class="col-md-6">
          <div class="before-after-container">
            <div class="row mt-5 images-container ">
              <div class="col item" data-title="Before">
                <a href="{{ asset('assets/img/before-after/lipfillerbefore.jpg')}}" class="fancybox" data-fancybox="gallery1">
                  <img src="{{ asset('assets/img/before-after/lipfillerbefore.jpg')}}" alt="A picture of a woman's face before botox treatment" class="before" />
                </a>
              </div>
              <div class="col item" data-title="After">
                <a href="{{ asset('assets/img/before-after/lipfillerafter.jpg')}}" class="fancybox" data-fancybox="gallery1">
                  <img src="{{ asset('assets/img/before-after/lipfillerafter.jpg')}}" alt="A picture of a woman's face after botox treatment" class="after" />
                </a>
              </div>
            </div>
            <h6 class="card-title text-center">Lip Filler Treatment</h6>
          </div>
        </div>

        <div class="col-md-6">
          <div class="before-after-container">
            <div class="row mt-5 images-container ">
              <div class="col item" data-title="Before">
                <a href="{{ asset('assets/img/before-after/darkcirclebefore.jpg')}}" class="fancybox" data-fancybox="gallery1">
                  <img src="{{ asset('assets/img/before-after/darkcirclebefore.jpg')}}" alt="A picture of a woman's face before botox treatment" class="before" />
                </a>
              </div>
              <div class="col item" data-title="After">
                <a href="{{ asset('assets/img/before-after/darkcircleafter.jpg')}}" class="fancybox" data-fancybox="gallery1">
                  <img src="{{ asset('assets/img/before-after/darkcircleafter.jpg')}}" alt="A picture of a woman's face after botox treatment" class="after" />
                </a>
              </div>
            </div>
            <h6 class="card-title text-center">Darkcircle Treatment</h6>
          </div>
        </div>


      </div>
    </div>
  </section> -->
  <!-- Before and After section end  -->

</main><!-- End #main -->

@endsection
