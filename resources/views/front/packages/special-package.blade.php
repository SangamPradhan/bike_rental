@extends('layouts.app')
@section('content')


<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Other Special Packages</h2>
        <ol>
          <li><a href="{{ route('welcome') }}">Home</a></li>
          <li><a href="{{ route('packages') }}">Our Packages</a></li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Breadcrumbs -->


  <!-- News and Blogs Section Start -->
  <section class="package-detail">
    <div class="container">
      <h3 class="page-title mb-3 text-center">
        Other Special Package
      </h3>

      <div class="row table-responsive">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">S.N</th>
              <th scope="col">Procedure</th>
              <th scope="col">Details</th>
            </tr>
          </thead>
          <tbody>
            <!-- Row 1 -->
            <tr>
              <th scope="row">1</th>
              <td class="procedure-td">
                <p>Acne Scar Management Package</p>
                <span class="price">Rs.100,000 (within one year)</span>
              </td>
              <td>
                <li>Treatments include:</li>
                <li>Chemical Peeling (4 - 6 sessions)</li>
                <li>CO2 Fractional Laser (4-6 sessions)</li>
                <li>Microneedling with PRP (4-6 sessions)</li>
                <li>TCA Cross if needed</li>
              </td>
            </tr>

            <!-- Row 2 -->
            <tr>
              <th scope="row">2</th>
              <td class="procedure-td">
                <p>Melasma or Pigmentation Treatment Package</p>
                <span class="price">Rs. 50,000 (6 to 8 months)</span>
              </td>
              <td>
                <li>Treatments include:</li>
                <li>Chemical Peeling (4-6 sessions)</li>
                <li>Laser toning (4-6 sessions)</li>
                <li>Hydrafacial with chemical peeling (1 session)</li>
              </td>
            </tr>

            <!-- Row 3 -->
            <tr>
              <th scope="row">3</th>
              <td class="procedure-td">
                <p>Anti-Ageing Package</p>
              </td>
              <td>
              </td>
            </tr>

            <!-- Row 4 -->
            <tr>
              <th scope="row">4</th>
              <td class="procedure-td">
                <p>Bridal Package</p>
              </td>
              <td>
              </td>
            </tr>

            <!-- Row 5 -->
            <tr>
              <th scope="row">5</th>
              <td class="procedure-td">
                <p>Facial Rejuvenation Package</p>
              </td>
              <td>
              </td>
            </tr>

            <!-- Row 6 -->
            <tr>
              <th scope="row">6</th>
              <td class="procedure-td">
                <p>Anti Ageing Package</p>
              </td>
              <td>
              </td>
            </tr>

            <!-- Row 7 -->
            <tr>
              <th scope="row">7</th>
              <td class="procedure-td">
                <p>Men's Glow-shine Package</p>
              </td>
              <td>
              </td>
            </tr>


          </tbody>
        </table>
      </div>
    </div>
  </section>
  <!-- News and Blogs Section End -->








</main><!-- End #main -->

@endsection