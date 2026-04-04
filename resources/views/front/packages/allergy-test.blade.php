@extends('layouts.app')
@section('content')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Allery Test And Immunotherapy</h2>
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
        Allergy Test and Immunotherapy
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
                <p>Skin Prick Test</p>
                <span class="price">1-50 allergens: Rs.5000<br>50-100 allergens: Rs.8000<br>100-150 allergens: Rs.10,000</span>
              </td>
              <td>
                <li>Allergen Selection</li>
                <li>Test Site Preparation</li>
                <li>Allergen Application</li>
                <li>Skin Prick or Scratch</li>
                <li>Safe & non-invasive</li>
                <li>Quick results</li>
                <li>Allergen identification</li>
              </td>
            </tr>

            <!-- Row 2 -->
            <tr>
              <th scope="row">2</th>
              <td class="procedure-td">
                <p>Autologous Serum Prick Test</p>
                <span class="price">Rs.2000</span>
              </td>
              <td>
                <li>Pricking or injecting</li>
                <li>Patient's own serum</li>
                <li>Skin's reaction observed</li>
                <li>Specialized diagnostic tool</li>
                <li>Autoimmune urticaria</li>
              </td>
            </tr>

            <!-- Row 3 -->
            <tr>
              <th scope="row">3</th>
              <td class="procedure-td">
                <p>Immunotherapy</p>
                <span class="price">Rs.3000</span>
              </td>
              <td>
                <li>Harnesses & enhances immune system</li>
                <li>Fight diseases (cancer, autoimmune disorders)</li>
                <li>Allergen Immunotherapy</li>
                <li>Precision medicine</li>
                <li>Cancer treatment</li>
              </td>
            </tr>

            <!-- Row 4 -->
            <tr>
              <th scope="row">4</th>
              <td class="procedure-td">
                <p>Immunotherapy per allergen</p>
                <span class="price">Rs.5000 per allergen</span>
              </td>
              <td>
                <li>Allergen Immunotherapy for allergies</li>
                <li>Targeted allergy treatment</li>
                <li>Effective for allergic rhinitis & asthma</li>
                <li>Allergen identification</li>
                <li>Customized treatment plans</li>
                <li>Symptom reduction</li>
              </td>
            </tr>


          </tbody>
        </table>
      </div>

      <h4 class="mt-5 mb-3">OUTPATIENT CHARGE  </h4>
      <div class="row">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">S.N</th>
              <th scope="col">Particular</th>
              <th scope="col">Amount</th>
            </tr>
          </thead>
          <tbody>
            <!-- Row 1 -->
            <tr>
              <th scope="row">1</th>
              <td class="procedure-td">
              OPD Consultation charge
              </td>
              <td>
              Rs.675
              </td>
            </tr>

            <!-- Row 2 -->
            <tr>
              <th scope="row">2</th>
              <td class="procedure-td">
              OPD card charge 
              </td>
              <td>
              Rs.25
              </td>
            </tr>

            <!-- Row 3 -->
            <tr>
              <th scope="row">3</th>
              <td class="procedure-td">
              Follow up charge
              </td>
              <td>
               Rs.700
              </td>
            </tr>


          </tbody>
        </table>
      </div>

      <div class="note mt-5 mb-2 p-4 border border-2 border-black">
      <p>
        <u>Rule for follow up:</u>
        <li>First follow up is free up to one month. If the patient comes up to 2 days late, it can be considered. But after that, the patient has to pay Rs. 700.</li>
        <li>If the patient informs the clinic before 1 week that he/she will be late for follow up, the clinic will consider it.</li>
        <li>If the patient comes with the complaint of severe side effect or no satisfactory result free, but the consultation card should be brought.</li>
      </p>
      </div>



    </div>
  </section>
  <!-- News and Blogs Section End -->


</main><!-- End #main -->
@endsection