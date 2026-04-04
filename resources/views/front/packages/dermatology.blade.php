@extends('layouts.app')
@section('content')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Dermatology</h2>
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
        Dermatological Diagnostic and Treatment Procedures
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
        <p>Punch Biopsy</p>
        <span class="price">Rs. <span class="amount">2000</span></span>
      </td>
      <td>
        <li>In this procedure, a small cylindrical piece of tissue is removed from the body for diagnostic purposes.</li>
      </td>
    </tr>

    <!-- Row 2 -->
    <tr>
      <th scope="row">2</th>
      <td class="procedure-td">
        <p>Excisional Biopsy</p>
        <span class="price">Rs. <span class="amount">3000 - 5000</span></span>
      </td>
      <td>
        <li>An excisional biopsy is a surgical procedure to remove an entire abnormal or suspicious growth for detailed examination.</li>
      </td>
    </tr>

    <!-- Row 3 -->
    <tr>
      <th scope="row">3</th>
      <td class="procedure-td">
        <p>Lipoma Excision</p>
        <span class="price">Rs. <span class="amount">5000</span> per lesion</span>
      </td>
      <td>
        <li>Lipoma excision is a surgical procedure performed to remove a lipoma, which is a benign (non-cancerous) lump or fatty tumor that forms beneath the skin.</li>
      </td>
    </tr>

    <!-- Row 4 -->
    <tr>
      <th scope="row">4</th>
      <td class="procedure-td">
        <p>Sebaceous Cyst Enucleation</p>
        <span class="price">Rs. <span class="amount">5000</span> per lesion</span>
      </td>
      <td>
        <li>Sebaceous cyst enucleation is a surgical procedure performed to remove a sebaceous cyst, which is non-cancerous, fluid-filled sac often found just beneath the skin</li>
      </td>
    </tr>

    <!-- Row 5 -->
    <tr>
      <th scope="row">5</th>
      <td class="procedure-td">
        <p>Nail Avulsion</p>
        <span class="price">Rs. <span class="amount">5000</span></span>
      </td>
      <td>
        <li>Nail avulsion is a medical procedure in which the entire fingernail or toenail is partially or completely removed from the nail bed.</li>
      </td>
    </tr>

    <!-- Row 6 -->
<tr>
  <th scope="row">6</th>
  <td class="procedure-td">
    <p>Electrocautery</p>
    <span class="price">Rs. <span class="amount">2000</span> per lesion</span>
  </td>
  <td>
    <li>In this procedure, a high-frequency electrical current is used to cut, coagulate (stop bleeding), or remove tissue</li>
    <li>Lesion removal</li>
    <li>Hemostasis</li>
    <li>Skin resurfacing</li>
    <li>Treatment of telangiectasis</li>
    <li>Treatment of actinic keratosis</li>
    <li>Skin tag removal</li>
  </td>
</tr>

<!-- Row 7 -->
<tr>
  <th scope="row">7</th>
  <td class="procedure-td">
    <p>Intralesional Injection</p>
    <span class="price">Rs. <span class="amount">1500</span> per session</span>
  </td>
  <td>
    <li>In this procedure, medication is directly injected into a specific lesion, growth, or area of tissue within the body</li>
    <li>Treatment of Keloids and Hypertrophic</li>
    <li>Alopecia Areata</li>
    <li>Psoriasis and Psoriatic Arthritis</li>
    <li>Allergy and immunotherapy</li>
  </td>
</tr>

<!-- Row 8 -->
<tr>
  <th scope="row">8</th>
  <td class="procedure-td">
    <p>Podowart application</p>
    <span class="price">Rs. <span class="amount">5000</span> per package</span>
  </td>
  <td>
    <li>Podowart is a topical medication used for the treatment of external genital warts</li>
    <li>Wart Removal</li>
    <li>Common warts</li>
    <li>Plantar warts</li>
    <li>Targeted treatment</li>
    <li>Minimal scarring</li>
  </td>
</tr>
<!-- Row 9 -->
<tr>
  <th scope="row">9</th>
  <td class="procedure-td">
    <p>Allergy Prick Testing</p>
    <span class="price">Rs. <span class="amount">3000 – 10,000</span></span>
  </td>
  <td>
    <li>Allergy prick testing, also known as skin prick testing or puncture testing, identifies allergies in individuals</li>
    <li>Safe & non-invasive</li>
    <li>Quick results</li>
    <li>Allergen identification</li>
  </td>
</tr>

<!-- Row 10 -->
<tr>
  <th scope="row">10</th>
  <td class="procedure-td">
    <p>Immunotherapy/Desensitization</p>
    <span class="price">Rs. <span class="amount">5000</span> per allergen</span>
  </td>
  <td>
    <li>Immunotherapy, also known as desensitization or allergy shots, reduces or eliminates allergic reactions</li>
    <li>Allergen Immunotherapy</li>
    <li>Autoimmune disorders</li>
    <li>Precision medicine</li>
  </td>
</tr>

<!-- Row 11 -->
<tr>
  <th scope="row">11</th>
  <td class="procedure-td">
    <p>Vitiligo Blister Grafting</p>
    <span class="price">Rs. <span class="amount">20000</span></span>
  </td>
  <td>
    <li>The vitiligo blister grafting procedure repigments areas affected by vitiligo</li>
    <li>Blister formation, harvesting, and graft placement</li>
    <li>Rs. 20000 - Vitiligo treatment, Autologous grafts, Minimized scarring, Stable pigmentation, Improved appearance, Non-invasive</li>
  </td>
</tr>

<!-- Row 12 -->
<tr>
  <th scope="row">12</th>
  <td class="procedure-td">
    <p>Vitiligo Punch Grafting</p>
    <span class="price">-</span>
  </td>
  <td>
    <li>Surgical procedure involving transplantation of small pieces of normally pigmented skin into areas of depigmented skin</li>
    <li>Graft Harvesting, Recipient Site Preparation, Graft Placement</li>
  </td>
</tr>

<!-- Row 13 -->
<tr>
  <th scope="row">13</th>
  <td class="procedure-td">
    <p>Microneedling</p>
    <span class="price">Rs. <span class="amount">5000</span></span>
  </td>
  <td>
    <li>In a microneedling session, a motorized pen-like instrument is used to make small, controlled punctures or micro-injuries in the skin’s top layer</li>
  </td>
</tr>

<!-- Row 14 -->
<tr>
  <th scope="row">14</th>
  <td class="procedure-td">
    <p>Microdermabrasion</p>
    <span class="price">Rs. <span class="amount">5000</span> per session</span>
  </td>
  <td>
    <li>Microdermabrasion involves cleansing, exfoliation, and vacuum or suction to remove exfoliated skin cells</li>
    <li>Exfoliation, Improved skin texture, Even skin tone, Pore size reduction, Acne scar improvement, Enhanced product absorption, Minimal downtime, Safe for most skin types</li>
  </td>
</tr>

          </tbody>
        </table>
      </div>
    </div>
  </section>


</main><!-- End #main -->
@endsection