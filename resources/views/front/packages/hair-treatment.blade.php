@extends('layouts.app')
@section('content')


<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Hair Treatment</h2>
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
        HAIR TREATMENT
      </h3>

      <div class="row table-responsive">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">S.N</th>
              <th scope="col">Grades</th>
              <th scope="col">Amount</th>
            </tr>
          </thead>
          <tbody>
            <!-- Row 1 -->
            <tr>
              <th scope="row">1</th>
              <td class="procedure-td">Grade 1</td>
              <td>Rs.60,000</td>
            </tr>

            <!-- Row 2 -->
            <tr>
              <th scope="row">2</th>
              <td class="procedure-td">Grade 2</td>
              <td>Rs.1,20,000</td>
            </tr>

            <!-- Row 3 -->
            <tr>
              <th scope="row">3</th>
              <td class="procedure-td">Grade 3</td>
              <td>Rs.1.5 lakh</td>
            </tr>

            <!-- Row 4 -->
            <tr>
              <th scope="row">4</th>
              <td class="procedure-td">Grade 4</td>
              <td>Rs.2 lakh</td>
            </tr>

            <!-- Row 5 -->
            <tr>
              <th scope="row">5</th>
              <td class="procedure-td">Grade 5</td>
              <td>Rs.2.5 Lakh (May be 2 sessions)</td>
            </tr>

            <!-- Row 6 -->
            <tr>
              <th scope="row">6</th>
              <td class="procedure-td">Grade 6</td>
              <td>Rs.1.5 lakhs (In 2 sessions: 3 lakhs)</td>
            </tr>

            <!-- Row 7 -->
            <tr>
              <th scope="row">7</th>
              <td class="procedure-td">Grade 7</td>
              <td>Around Rs.3 lakhs (Including hair from scalp, beard, and chest.)</td>
            </tr>




          </tbody>
        </table>
      </div>

      <div class="row my-5">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">S.N</th>
              <th scope="col">Particulars</th>
              <th scope="col">Rate</th>
              <th scope="col">Remarks</th>
            </tr>
          </thead>
          <tbody>
            <!-- Row 1 -->
            <tr>
              <th scope="row">1</th>
              <td class="procedure-td">Robot Assisted - HAARTS</td>
              <td>100 per graft</td>
              <td></td>
            </tr>

            <!-- Row 2 -->
            <tr>
              <th scope="row">2</th>
              <td class="procedure-td">Beard graft /transplant</td>
              <td>100</td>
              <td>Any number</td>
            </tr>

            <!-- Row 3 -->
            <tr>
              <th scope="row">3</th>
              <td class="procedure-td">Eyebrow transplant</td>
              <td>150</td>
              <td>Any number</td>
            </tr>

            <!-- Row 4 -->
            <tr>
              <th scope="row">4</th>
              <td class="procedure-td">Scalp micropigmentation-full head</td>
              <td>1,00,000</td>
              <td>Any density</td>
            </tr>

            <!-- Row 5 -->
            <tr>
              <th scope="row">5</th>
              <td class="procedure-td">Scalp Micropigmentation-half</td>
              <td>50,000</td>
              <td>Any Density</td>
            </tr>

            <!-- Row 6 -->
            <tr>
              <th scope="row">6</th>
              <td class="procedure-td">Eyebrow Microblading</td>
              <td>15,000</td>
              <td></td>
            </tr>

            <!-- Row 7 -->
            <tr>
              <th scope="row">7</th>
              <td class="procedure-td">PRP Therapy</td>
              <td>10,000 per session</td>
              <td>50,000 for 6 months package</td>
            </tr>

            <!-- Row 8 -->
            <tr>
              <th scope="row">8</th>
              <td class="procedure-td">Low Light Laser Therapy (Theradome, USA)</td>
              <td>5,000 per month for 8,000 sessions</td>
              <td>20 minutes, 2 times a week</td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
  </section>
  <!-- News and Blogs Section End -->


</main><!-- End #main -->

@endsection