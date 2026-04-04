@extends('layouts.app')
@section('content')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="">
        <h2>Staffs</h2>
        <ol>
          <li><a href="{{ route('welcome') }}">Home</a></li>
          <li>Staffs</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <section class="about-doctor-area staff-detail py-5">
    <div class="container mt-4">
      @foreach($staffs as $staff)
      <div class="row staff-row" id="1">
        <div class="col-xl-4">
          <div class="about-box-container mb-5 gx-4 gy-4">
            <div class="">
              <div class="card border-0 doctor-card about-box">
                <img class="card-img-top" src="{{ $staff->getImage()??asset('assets/img/StaffPotrait.jpg') }}" alt="Image of a Doctor">
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 px-5 d-flex">
          <div class="doctor-bio">
            <span class="staff-designation mb-4">{{ $staff->designation == 'Accountant'?'Junior ':'' }}{{ $staff->designation }}</span>
            <h3 class="staff-name">{{ $staff->name }}</h3>

            <div class="bio-text">
              <p data-aos="fade-up" data-aos-delay="100" class="aos-init pb-2">{!! $staff->introduction !!}</p>

            </div>
            <div class="pb-1 d-flex aos-init" data-aos="fade-up">
              <h6>Education:</h6>
              <p class="mb-0 aos-init info">&nbsp; {{ $staff->qualification }}
              </p>
            </div>
            <!-- <div class="pb-1 d-flex aos-init" data-aos="fade-up">
              <h6>Experience:</h6>
              <p class="mb-0 aos-init info">&nbsp;University of California, San Francisco
                <span class="ms-1 ">(Medical Degree)</span>
              </p>
            </div> -->
            <div class="pb-1 d-flex aos-init" data-aos="fade-up">
              <h6>Skills:</h6>
              <p class="mb-0 aos-init info">&nbsp; {{ $staff->skills }}
              </p>
            </div>
            <div class="pb-1 d-flex aos-init" data-aos="fade-up">
              <h6>Others:</h6>
              <p class="mb-0 aos-init info">&nbsp; {{ $staff->others }}
              </p>
            </div>
            <!-- <div class="pb-1 d-flex aos-init" data-aos="fade-up">
              <h6>Hobbies:</h6>
              <p class="mb-0 aos-init info">&nbsp;Reading, Blogging, Mentoring, etc.
              </p>
            </div> -->
            <div class="d-flex flex-column mt-3 aos-init" data-aos="fade-up">
              @if($staff->phone)
              <p class="box-link mb-3">
                <span class="icon-btn me-3"><i class="bi bi-envelope-fill"></i></span>
                <a>{{ $staff->phone }}</a>
              </p>
              @endif
              @if($staff->email)
              <p class="box-link mb-3">
                <span class="icon-btn me-3"><i class="bi bi-envelope-fill"></i></span>
                <a>{{ $staff->email }}</a>
              </p>
              @endif
            </div>
          </div>
        </div>

      </div>
      @endforeach
    </div>

  </section>

</main>

@endsection