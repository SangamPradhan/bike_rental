@extends('layouts.app')
@section('content')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Aesthetic Procedure</h2>
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
        Aesthetic Procedures
      </h3>
      <div class="col-8 mb-5 mx-auto overflow-x-auto">
          <!-- <p class="page-subtitle text-center">Embark on a Journey to Timeless Elegance: A Palette of Aesthetic Procedures Crafting Your Radiant Transformation and Beauty Beyond Boundaries.</p> -->
        </div>
      <div class="row table-responsive">
        <table class="table table-striped table-hover ">
          <thead>
            <tr>
              <th scope="col">S.N</th>
              <th scope="col">Procedure</th>
              <th scope="col">Details</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td class="procedure-td">
                <p>Medi-peels(A chemical solution will be applied all over the skin)</p>
                <span class="price">Rs. <span class="amount">2,500</span>/session</span>
              </td>
              <td>
                <li> Acene Treatment </li>
                <li>Skin rejuvenation</li>
                <li>Hyperpigmentation,melasma</li>
                <li>Uneven skin tone,scarring 7 sun damage</li>
                <li>Collagen stimulation</li>
                <li>Preventive care</li>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td class="procedure-td">
                <p>Medi peels with hydration
                  <br>
                  (Cleansing,
                  application of chemical solution,
                  soothing skin masks)
                </p>
                <span class="price">Rs. <span class="amount">4,000</span>/session</span>
              </td>
              <td>
                <li>Exfoliation & renewal</li>
                <li>Improved skin texture & hydration retention</li>
                <li>Reduces fine lines & wrinkles</li>
                <li>Enhanced product absorption</li>
                <li>Collagen production</li>
                <li>Balanced oil production</li>

              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td class="procedure-td">
                <p>Iontophoresis
                  (Apply a gentle electrical current)
                </p>
                <span class="price">Rs. <span class="amount">2,000</span>/session</span>
              </td>
              <td>
                <li>Hyperhidrosis treatment</li>
                <li>Skin disorders</li>
                <li>Scar management</li>
                <li>Wound healing</li>
                <li>Pain management</li>
              </td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td class="procedure-td">
                <p>TCA Cross
                  <br>
                  (Scar Treatment)
                </p>
                <span class="price">Rs. <span class="amount">1,500</span>/session</span>
              </td>
              <td>
                <li>Acne scar treatment</li>
                <li>Minimized scarring</li>
                <li>Low risk of hyperpigmentation</li>
                <li>Suitable for various skin types</li>
                <li>Minimal downtime</li>
                <li>Customizable with other treatments</li>
                <li>Improved scar appearance</li>

              </td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td class="procedure-td">
                <p>Microneedling</p>
                <span class="price">Rs. <span class="amount">7,000</span>/session</span>
              </td>
              <td>
                <li>Post acne scars</li>
                <li>Skin texture</li>
                <li>Collagen production</li>
                <li>Stretch marks</li>
                <li>Hair regrowth</li>
                <li>Enhanced product absorption</li>
              </td>
            </tr>

            <tr>
              <th scope="row">6</th>
              <td class="procedure-td">
                <p>Microneedling with PRP/Vampire face lift</p>
                <span class="price">Rs. <span class="amount">9,000</span>/session</span>
              </td>
              <td>
                <li>Enhanced collagen production</li>
                <li>Improved skin texture</li>
                <li>Natural approach</li>
                <li>Reduced downtime</li>
                <li>Even skin tone</li>
                <li>Long-lasting results</li>
                <li>Minimal risk of allergic reaction</li>
                <li>Also commonly used as a method for fighting early signs of aging</li>
              </td>
            </tr>

            <tr>
              <th scope="row">7</th>
              <td class="procedure-td">
                <p>Microneedling by Dermapen (Painless PRP)</p>
                <span class="price">Rs. <span class="amount">15,000</span></span>
              </td>
              <td>
                <li>Improved skin texture</li>
                <li>Minimized pore size</li>
                <li>Minimally invasive</li>
                <li>Even skin tone</li>
                <li>Scar reduction</li>
                <li>Customizable</li>
                <li>Safe for various skin types</li>
                <li>Minimal downtime</li>
                <li>Long-lasting results</li>
                <li>Natural healing</li>
                <li>Enhanced product absorption</li>
                <li>Reduced risk of side effects</li>
              </td>
            </tr>

            <tr>
              <th scope="row">8</th>
              <td class="procedure-td">
                <p>BB glow facial (Serum Application,
                  Microneedling,
                  Coverage)</p>
                <span class="price">Rs. <span class="amount">10,000</span>/session</span>
              </td>
              <td>
                <li>Skin brightening</li>
                <li>Semi-permanent makeup</li>
                <li>Even skin tone</li>
                <li>Conceals imperfections</li>
                <li>Skincare benefits</li>
                <li>Minimally invasive</li>
                <li>Customizable: Different shades of BB Glow serums are available to match various skin tones.</li>
                <p>Note: The longevity of BB Glow results can vary from person to person & touch-up sessions may be required to maintain the effect.</p>
              </td>
            </tr>

            <tr>
              <th scope="row">9</th>
              <td class="procedure-td">
                <p>Microdermabrasion(Cleansing,
                  Exfoliation,
                  Suction)</p>
                <span class="price">Rs. <span class="amount">5,000</span>/session</span>
              </td>
              <td>
                <li>Exfoliation</li>
                <li>Improved skin texture</li>
                <li>Even skin tone</li>
                <li>Pore size reduction</li>
                <li>Acne scar improvement</li>
                <li>Enhanced product absorption</li>
                <li>Minimal downtime</li>
                <li>Safe for most skin types</li>
              </td>
            </tr>

            <tr>
              <th scope="row">10</th>
              <td class="procedure-td">
                <p>Injected Fat lipolysis(Treatment areas include double chin,abdomen,thighs)</p>
                <span class="price">Rs. <span class="amount">5,000</span>/vial</span>
              </td>
              <td>
                <li>Spot fat reduction</li>
                <li>Non-surgical treatment</li>
                <li>Minimal downtime</li>
                <li>Improved body contour</li>
                <li>Gradual, natural-looking results</li>
                <li>Minimal scarring</li>
                <li>Customizable</li>
              </td>
            </tr>

            <tr>
              <th scope="row">11</th>
              <td class="procedure-td">
                <p>Botox</p>
                <span class="price">Rs. <span class="amount">600 </span>/unit</span>
              </td>
              <td>
                <li>Wrinkle reduction</li>
                <li>Preventive aging</li>
                <li>Brow lift & jawline slimming</li>
                <li>Lip lines for reshaping the lips</li>
                <li>Chin dimpling</li>
                <li>Excessive sweating</li>
                <li>Non-surgical</li>
                <li>Quick procedure & minimal downtime</li>
                <li>Natural-looking results</li>
              </td>
            </tr>



            <tr>
              <th scope="row">12</th>
              <td class="procedure-td">
                <p>Dermal fillers</p>
                <span class="price">Rs. <span class="amount">35,000/ml</span> (lasts for a year)</span>
                <br>
                <span class="price">Rs. <span class="amount">60,000/ml</span> (lasts for two years)</span>
              </td>
              <td>
                <li>Volume restoration</li>
                <li>Lip enhancement</li>
                <li>Facial contouring</li>
                <li>Wrinkle reduction</li>
                <li>Scar improvement</li>
                <li>Hand rejuvenation</li>
                <li>Non-surgical procedure</li>
                <li>Quick procedure</li>
                <li>Minimal downtime</li>
                <li>Customizable</li>
                <li>Natural-looking results</li>
              </td>
            </tr>

            <tr>
              <th scope="row">13</th>
              <td class="procedure-td">
                <p>Thread lift</p>
                <span class="price">Rs. <span class="amount">10,000</span>/thread</span>
              </td>
              <td>
                <li>Facial Rejuvenation</li>
                <li>Non-surgical Alternative</li>
                <li>Collagen stimulation</li>
                <li>Customizable results</li>
                <li>Natural-looking results</li>
                <li>Quick procedure</li>
                <li>Minimal downtime</li>
                <li>Versatility</li>
              </td>
            </tr>
            <tr>
              <th scope="row">14</th>
              <td class="procedure-td">
                <p>Hydrafacial(30 minutes session<br>
                  Cleansing, exfoliation & hydration of face area<br>
                  Sheet mask)</p>
                
                  
                </p>
                <span class="price">Rs. <span class="amount">3,000</span>/session</span>
              </td>
              <td>
                <li>Deep cleansing</li>
                <li>Exfoliation</li>
                <li>Hydration</li>
              </td>
            </tr>

            <tr>
              <th scope="row">15</th>
              <td class="procedure-td">
                <p>Hydrafacial MAX<br>(1-hour cleansing session of face & neck area) </p>
                <span class="price">Rs. <span class="amount">5,000</span>/session</span>
              </td>
              <td>
                <li>Deep cleansing</li>
                <li>Exfoliation</li>
                <li>Hydration</li>
                <li>Anti-aging effects</li>
              </td>
            </tr>

            <tr>
              <th scope="row">16</th>
              <td class="procedure-td">
                <p>Casmara/La'well facial<br>(1-hour cleansing session of face & neck area)</p>
                <span class="price">Rs. <span class="amount">6,000</span>/session</span>
              </td>
              <td>
                <li>Deep cleansing</li>
                <li>Exfoliation</li>
                <li>Hydration</li>
                <li>Anti-aging effects</li>
                <li>Instant glowing skin</li>
              </td>
            </tr>

            <tr>
              <th scope="row">17</th>
              <td class="procedure-td">
                <p>Hydrafacial PRO<br>(2-hour 15 minutes cleansing session of face, neck & shoulders area)</p>
                <span class="price">Rs. <span class="amount">10,000</span>/session</span>
              </td>
              <td>
                <li>Anti-aging effects</li>
                <li>Stress reduction</li>
                <li>Instant glowing skin</li>
                <li>Natural looking results</li>
                <li>Deep cleansing</li>
                <li>Exfoliation</li>
                <li>Hydration</li>
                <li>Correction of fine lines</li>
              </td>
            </tr>

            <tr>
              <th scope="row">18</th>
              <td class="procedure-td">
                <p>Deluxe Hydrafacial<br>(3 hours cleansing session of face, neck, shoulders & hands area)</p>
                <span class="price">Rs. <span class="amount">15,000</span>/session</span>
              </td>
              <td>
                <li>Anti-aging effects</li>
                <li>Improved circulation</li>
                <li>Product penetration</li>
                <li>Stress reduction</li>
                <li>Even skin tone</li>
                <li>Relaxation</li>
                <li>Customization</li>
                <li>Detoxification</li>
                <li>Hydration</li>
                <li>Instant glowing skin</li>
                <li>Natural looking results</li>
                <li>Deep cleansing</li>
                <li>Exfoliation</li>
                <li>Hydration</li>
                <li>Correction of fine lines</li>
                <li>Can be customized with different skin treatments</li>
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