@extends('layouts.app')
@section('content')


<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Plastic Surgery</h2>
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
       Plastic Surgery
      </h3>
      
      <div class="row table-responsive">
      <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Procedure</th>
      <th scope="col">Price</th>
      <th scope="col">Remarks</th>
    </tr>
  </thead>
  <tbody>
    <!-- Row 1 -->
    <tr>
      <th scope="row">1</th>
      <td class="procedure-td">Scar Revision</td>
      <td>10,000 (100$) to 50,000 (500$)</td>
      <td>Cost depending upon size</td>
    </tr>

    <!-- Row 2 -->
    <tr>
      <th scope="row">2</th>
      <td class="procedure-td">Split Ear Repair</td>
      <td>10,000 ($100)</td>
      <td>1-hour surgery</td>
    </tr>

    <!-- Row 3 -->
    <tr>
      <th scope="row">3</th>
      <td class="procedure-td">Otoplasty for Ear Deformity</td>
      <td>40,000 ($400)</td>
      <td>2-3 hours surgery</td>
    </tr>

    <!-- Row 4 -->
    <tr>
      <th scope="row">4</th>
      <td class="procedure-td">Dimple Creation</td>
      <td>30,000 ($300)</td>
      <td>2-3 hours surgery</td>
    </tr>

    <!-- Row 5 -->
    <tr>
      <th scope="row">5</th>
      <td class="procedure-td">Blepharoplasty-upper eyelids</td>
      <td>40,000 ($400)</td>
      <td>2-3 hours surgery</td>
    </tr>

    <!-- Row 6 -->
    <tr>
      <th scope="row">6</th>
      <td class="procedure-td">Blepharoplasty-lower eyebag</td>
      <td>45,000 ($400)</td>
      <td>2-3 hours surgery</td>
    </tr>

    <!-- Row 7 -->
    <tr>
      <th scope="row">7</th>
      <td class="procedure-td">Mongolian eyes surgery</td>
      <td>35,000 ($350)</td>
      <td>2-3 hours surgery</td>
    </tr>

    <!-- Row 8 -->
    <tr>
      <th scope="row">8</th>
      <td class="procedure-td">Face lift-wrinkled face</td>
      <td>1-15 lakhs ($100-1500)</td>
      <td>2-3 hours surgery, may require one night admission</td>
    </tr>

    <!-- Row 9 -->
    <tr>
      <th scope="row">9</th>
      <td class="procedure-td">Rhinoplasty/ Nose Surgery</td>
      <td>60,000-1.5 lakhs ($600-1500) may require implant extra</td>
      <td>General Anesthesia, Hospital Admission Extra</td>
    </tr>

    <!-- Row 10 -->
    <tr>
      <th scope="row">10</th>
      <td class="procedure-td">Liposuction</td>
      <td>80,000-2 lakh ($800-2000)</td>
      <td>General Anesthesia, Hospital Admission Extra</td>
    </tr>

    <!-- Row 11 -->
    <tr>
      <th scope="row">11</th>
      <td class="procedure-td">Tummy Tuck</td>
      <td>150,000b($1500)</td>
      <td>General Anesthesia, Hospital Admission Extra</td>
    </tr>

    <!-- Row 12 -->
    <tr>
      <th scope="row">12</th>
      <td class="procedure-td">Breast Enhancement</td>
      <td>75,000-1 lakh ($750-1000) silicon implant 1-2 lakhs</td>
      <td>General Anesthesia, Hospital Admission Extra</td>
    </tr>

    <!-- Row 13 -->
    <tr>
      <th scope="row">13</th>
      <td class="procedure-td">Breast Reduction</td>
      <td>1-1.5 lakhs ($100-1500)</td>
      <td>General Anesthesia, Hospital Admission Extra</td>
    </tr>

    <!-- Row 14 -->
    <tr>
      <th scope="row">14</th>
      <td class="procedure-td">Vaginoplasty</td>
      <td>60,000-80,000($600-800)</td>
      <td>Under sedation, Hospital Admission Extra</td>
    </tr>

    <!-- Row 15 -->
    <tr>
      <th scope="row">15</th>
      <td class="procedure-td">Hymen Repair</td>
      <td>40,000($400)</td>
      <td></td>
    </tr>

    <!-- Row 16 -->
    <tr>
      <th scope="row">16</th>
      <td class="procedure-td">Fat Transfer/ Grafting</td>
      <td>20,000 to 50,000($500)</td>
      <td>Cost depending upon size</td>
    </tr>
  </tbody>
</table>

      </div>
    </div>
  </section>
  <!-- News and Blogs Section End -->


</main><!-- End #main -->

@endsection