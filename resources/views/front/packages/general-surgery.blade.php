@extends('layouts.app')
@section('content')


<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>General Surgery</h2>
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
        General Surgery
      </h3>
      <div class="col-8 mb-5 mx-auto">
        <!-- <p class="page-subtitle text-center">Embark on a Journey to Timeless Elegance: A Palette of Aesthetic Procedures Crafting Your Radiant Transformation and Beauty Beyond Boundaries.</p> -->
      </div>
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
                <p>Corns, Warts, etc.</p>
                <span class="price">Rs. <span class="amount">1000 – 8000</span> per sitting</span>
              </td>
              <td>
                <li>Anesthesia: Topical numbing cream or local anesthesia</li>
                <li>Co2 laser removes or vaporizes tissue</li>
                <li>Price depends on the number of corns, warts, etc.</li>
                <li>Sessions needed: 1-2 (multiple sessions in some cases)</li>
              </td>
            </tr>

            <!-- Row 2 -->
            <tr>
              <th scope="row">2</th>
              <td class="procedure-td">
                <p>Co2 Laser for Birthmark</p>
                <span class="price">Rs. <span class="amount">4000 – 8000</span> per sitting</span>
              </td>
              <td>
                <li>Anesthesia: Topical numbing cream or local anesthesia</li>
                <li>Co2 laser targets blood vessels in birthmark, reducing discoloration</li>
                <li>Price depends on the area</li>
                <li>Birthmarks treated: Port-wine stains, Hemangiomas, Café-au-lait spots</li>
                <li>Multiple sessions may be required</li>
              </td>
            </tr>

            <!-- Row 3 -->
            <tr>
              <th scope="row">3</th>
              <td class="procedure-td">
                <p>Genital Warts Removal</p>
                <span class="price">Rs. <span class="amount">6000 – 11000</span> per session</span>
              </td>
              <td>
                <li>Anesthesia: Topical numbing cream or local anesthesia</li>
                <li>Co2 laser targets and removes genital warts</li>
                <li>Price depends on the area and number of warts</li>
              </td>
            </tr>

            <!-- Row 4 -->
            <tr>
              <th scope="row">4</th>
              <td class="procedure-td">
                <p>Syringoma</p>
                <span class="price">Rs. <span class="amount">3000 – 5000</span> per sitting</span>
              </td>
              <td>
                <li>Anesthesia: Topical numbing cream or local anesthesia</li>
                <li>Laser Treatment: Co2 laser therapy, vaporizes, ablates, syringomas, layer by layer</li>
              </td>
            </tr>

            <!-- Row 5 -->
            <tr>
              <th scope="row">5</th>
              <td class="procedure-td">
                <p>Vaginal Tightening</p>
                <span class="price">Rs. <span class="amount">50000</span> (package of 4 sessions)</span>
              </td>
              <td>
                <li>Anesthesia: Topical numbing cream or local anesthesia</li>
                <li>Laser Treatment: Controlled thermal energy, collagen production, tissue remodeling</li>
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