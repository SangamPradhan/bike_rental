@extends('layouts.app')
@section('content')


<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Laser Clinic</h2>
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
        Laser clinic
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
                <p>Tattoo Removal(Anesthesia & laser treatment)</p>
                <span class="price">Rs. <span class="amount">3000 - 10,000</span>/session</span>
              </td>
              <td>
                <li>Requires 6 - 10 sessions</li>
                <li>1 session per month in the interval of 4 - 5 weeks</li>
                <li>It's essential to follow post-treatment care</li>
              </td>
            </tr>

            <!-- Row 2 -->
            <tr>
              <th scope="row">2</th>
              <td class="procedure-td">
                <p>Freckles / Lentigenes(Anesthesia & laser treatment)</p>
                <span class="price">Rs. <span class="amount">3000 - 8,000</span>/session</span>
              </td>
              <td>

                <li>Requires 4 - 5 sessions</li>
                <li>1 session per month in the interval of 4 - 5 weeks</li>
                <li>It's essential to follow post-treatment care</li>
              </td>
            </tr>

            <!-- Row 3 -->
            <tr>
              <th scope="row">3</th>
              <td class="procedure-td">
                <p>Nevus of Ota(Anesthesia & laser treatment)</p>
                <span class="price">Rs. <span class="amount">5000</span>/session</span>
              </td>
              <td>
                <li>Requires 4 - 5 sessions</li>
                <li>1 session per month in the interval of 4 - 5 weeks</li>
                <li>It's essential to follow post-treatment care</li>
              </td>
            </tr>

            <!-- Row 4 -->
            <tr>
              <th scope="row">4</th>
              <td class="procedure-td">
                <p>Carbon Laser Peeling (China-doll /Hollywood facial)</p>
                <span class="price">Rs. <span class="amount">8000</span>/session</span>
              </td>
              <td>
                <li>Treatment of acne & post acne scars</li>
                <li>Reduced pore size</li>
                <li>Customizable</li>
                <li>Safe for various skin types</li>
                <li>Quick procedure</li>
                <li>Collagen stimulation</li>
              </td>
            </tr>

            <!-- Row 5 -->
            <tr>
              <th scope="row">5</th>
              <td class="procedure-td">
                <p>Carbon laser Premium(Anesthesia, aqua suction & laser treatment)</p>
                <span class="price">Rs. <span class="amount">9000</span>/session</span>
              </td>
              <td>
                <li>Exfoliation</li>
                <li>Reduced pore size</li>
                <li>Skin lightening</li>
                <li>Treatment of acne & post acne scars</li>
                <li>Collagen stimulation</li>
                <li>Minimal downtime</li>
                <li>Safe for various skin types</li>
                <li>Customizable</li>
                <li>Quick procedure</li>
                <li>Progressive results</li>
              </td>
            </tr>

            <!-- Row 6 -->
            <tr>
              <th scope="row">6</th>
              <td class="procedure-td">
                <p>Fractional CO2 laser(Numbing cream & laser treatment)</p>
                <span class="price">Rs. <span class="amount">3000 - 8000</span>/session</span>
              </td>
              <td>
                <li>Skin resurfacing</li>
                <li>Different skin conditions treated; Post acne scars, Sun damage & age spots, Uneven skin texture & tone, Enlarged pores, Stretch marks, Uneven pigmentation, Fine lines</li>
                <li>Collagen stimulation</li>
                <li>Requires 6 - 8 sessions</li>
              </td>
            </tr>
            <!-- Row 7 -->
            <tr>
              <th scope="row">7</th>
              <td class="procedure-td">
                <p>Co2 Laser Mole Removal(Numbing cream & laser treatment)</p>
                <span class="price">Rs. <span class="amount">1000</span>/mole</span>
              </td>
              <td>
                <li>Requires 2-3 sessions</li>
                <li>It's essential to follow post-treatment care instructions to minimize complications</li>
              </td>
            </tr>


          </tbody>
        </table>
      </div>
    </div>

    <!-- co2 laser unavailable -->
    <!-- <div class="container">
      <h3 class="page-title mb-3 mt-5 text-center">
        Co2 Laser
      </h3>
     
      <div class="row">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">S.N</th>
              <th scope="col">Procedure</th>
              <th scope="col">Details</th>
            </tr>
          </thead>
          <tbody>

            Row 1
            <tr>
              <th scope="row">1</th>
              <td class="procedure-td">
                <p>Scar</p>
                <span class="price">Rs. <span class="amount">3000 – 10,000</span> per sitting</span>
              </td>
              <td>
                <li>Numbing cream applied for comfort</li>
                <li>Fractional CO2 laser targets scarred areas, stimulates collagen production</li>
                <li>Price depends on the number of allergens</li>
                <li>Acne scars, Surgical scars, Burn scars, Traumatic scars, Stretch marks</li>
              </td>
            </tr>

            Row 2
            <tr>
              <th scope="row">2</th>
              <td class="procedure-td">
                <p>Skin Resurfacing</p>
                <span class="price">Rs. <span class="amount">6000</span> per sitting</span>
              </td>
              <td>
                <li>Numbing cream applied for comfort</li>
                <li>Fractional CO2 laser therapy creates microscopic wounds, stimulates collagen production</li>
                <li>Wrinkles, Fine lines, Sun damage, Uneven skin tone, Large pores, Scar reduction</li>
              </td>
            </tr>

            Row 3
            <tr>
              <th scope="row">3</th>
              <td class="procedure-td">
                <p>Skin Tightening</p>
                <span class="price">Rs. <span class="amount">6000</span> per sitting</span>
              </td>
              <td>
                <li>Numbing cream applied for comfort</li>
                <li>Fractional CO2 laser used for mild to moderate skin tightening, stimulates collagen production</li>
                <li>Collagen stimulation, Mild skin tightening, Facial rejuvenation, Non-surgical option</li>
              </td>
            </tr>

            Row 4
            <tr>
              <th scope="row">4</th>
              <td class="procedure-td">
                <p>Wrinkles</p>
                <span class="price">Rs. <span class="amount">6000</span> per session</span>
              </td>
              <td>
                <li>Numbing cream applied for comfort</li>
                <li>Fractional CO2 laser therapy creates tiny, evenly spaced micro-injuries, stimulates collagen production</li>
                <li>Collagen stimulation, Skin resurfacing, Improved elasticity</li>
              </td>
            </tr>
            Row 5
            <tr>
              <th scope="row">5</th>
              <td class="procedure-td">
                <p>Enlarged Pores</p>
                <span class="price">Rs. <span class="amount">6000</span> per session</span>
              </td>
              <td>
                <li>Numbing cream applied for comfort</li>
                <li>Fractional CO2 laser therapy creates tiny, evenly spaced micro-injuries, reduces visibility of enlarged pores</li>
                <li>Collagen stimulation, Skin resurfacing, Improved elasticity</li>
              </td>
            </tr>

            Row 6
            <tr>
              <th scope="row">6</th>
              <td class="procedure-td">
                <p>Stretch Marks</p>
                <span class="price">Rs. <span class="amount">2000 – 12000</span></span>
              </td>
              <td>
                <li>Numbing cream applied for comfort</li>
                <li>Fractional CO2 laser therapy creates tiny, evenly spaced micro-injuries, stimulates collagen & elastin production</li>
                <li>Price depends on the area</li>
                <li>Collagen production, Improved texture, Reduction of redness</li>
              </td>
            </tr>

            Row 7
            <tr>
              <th scope="row">7</th>
              <td class="procedure-td">
                <p>Age Spot</p>
                <span class="price">Rs. <span class="amount">3000 - 9000</span></span>
              </td>
              <td>
                <li>Numbing cream applied for comfort</li>
                <li>Fractional CO2 laser therapy creates tiny, evenly spaced micro-injuries, improves appearance of age spots</li>
                <li>Skin resurfacing, Stimulates skin renewal, Even skin tone, Collagen stimulation</li>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div> -->

    <div class="container">
      <h3 class="page-title mt-5 mb-3 text-center">
        LASER HAIR REMOVAL /REDUCTION- SOPRANO ICE PLATINUM (FEMALE)
      </h3>

      <div class="row">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">S.N</th>
              <th scope="col">Area</th>
              <th scope="col">Price Per Setting</th>
              <th scope="col">6 Sitting Package</th>
            </tr>
          </thead>
          <tbody>
            <!-- Row 1 -->
            <tr>
              <th scope="row">1</th>
              <td class="procedure-td">Forehead hairline</td>
              <td>5000</td>
              <td>25000</td>
            </tr>

            <!-- Row 2 -->
            <tr>
              <th scope="row">2</th>
              <td class="procedure-td">Mid brow</td>
              <td>3000</td>
              <td>15000</td>
            </tr>

            <!-- Row 3 -->
            <tr>
              <th scope="row">3</th>
              <td class="procedure-td">Cheeks female</td>
              <td>5000</td>
              <td>25000</td>
            </tr>

            <!-- Row 4 -->
            <tr>
              <th scope="row">4</th>
              <td class="procedure-td">Ears</td>
              <td>3000</td>
              <td>15000</td>
            </tr>

            <!-- Row 5 -->
            <tr>
              <th scope="row">5</th>
              <td class="procedure-td">Upper lip (Female)</td>
              <td>3000</td>
              <td>15000</td>
            </tr>

            <!-- Row 6 -->
            <tr>
              <th scope="row">6</th>
              <td class="procedure-td">Chin</td>
              <td>3000</td>
              <td>15000</td>
            </tr>

            <!-- Row 7 -->
            <tr>
              <th scope="row">7</th>
              <td class="procedure-td">Lower Face</td>
              <td>6000</td>
              <td>30000</td>
            </tr>

            <!-- Row 8 -->
            <tr>
              <th scope="row">8</th>
              <td class="procedure-td">Full Face</td>
              <td>10,000</td>
              <td>50,000</td>
            </tr>

            <!-- Row 9 -->
            <tr>
              <th scope="row">9</th>
              <td class="procedure-td">Neck</td>
              <td>5000</td>
              <td>25,000</td>
            </tr>

            <!-- Row 10 -->
            <tr>
              <th scope="row">10</th>
              <td class="procedure-td">Arm/Forearm</td>
              <td>8,000</td>
              <td>40,000</td>
            </tr>

            <!-- Row 11 -->
            <tr>
              <th scope="row">11</th>
              <td class="procedure-td">Full Arms</td>
              <td>12,000</td>
              <td>60,000</td>
            </tr>

            <!-- Row 12 -->
            <tr>
              <th scope="row">12</th>
              <td class="procedure-td">Under Arms (Axilla)</td>
              <td>6,000</td>
              <td>35,000</td>
            </tr>

            <!-- Row 13 -->
            <tr>
              <th scope="row">13</th>
              <td class="procedure-td">Chest</td>
              <td>7,000</td>
              <td>35,000</td>
            </tr>

            <!-- Row 14 -->
            <tr>
              <th scope="row">14</th>
              <td class="procedure-td">Back</td>
              <td>7,000</td>
              <td>40,000</td>
            </tr>

            <!-- Row 15 -->
            <tr>
              <th scope="row">15</th>
              <td class="procedure-td">Cleavage area</td>
              <td>5,000</td>
              <td>25,000</td>
            </tr>

            <!-- Row 16 -->
            <tr>
              <th scope="row">16</th>
              <td class="procedure-td">Umbilicus to cleavage</td>
              <td>5,000</td>
              <td>25,000</td>
            </tr>

            <!-- Row 17 -->
            <tr>
              <th scope="row">17</th>
              <td class="procedure-td">Nipples</td>
              <td>2000</td>
              <td>10,000</td>
            </tr>

            <!-- Row 18 -->
            <tr>
              <th scope="row">18</th>
              <td class="procedure-td">Bikini line</td>
              <td>5,000</td>
              <td>25,000</td>
            </tr>

            <!-- Row 19 -->
            <tr>
              <th scope="row">19</th>
              <td class="procedure-td">Full bikini</td>
              <td>10,000</td>
              <td>60,000</td>
            </tr>

            <!-- Row 20 -->
            <tr>
              <th scope="row">20</th>
              <td class="procedure-td">Buttocks</td>
              <td>5000</td>
              <td>25,000</td>
            </tr>

            <!-- Row 21 -->
            <tr>
              <th scope="row">21</th>
              <td class="procedure-td">Thighs (legs-Half)</td>
              <td>8,000</td>
              <td>40,000</td>
            </tr>

            <!-- Row 22 -->
            <tr>
              <th scope="row">22</th>
              <td class="procedure-td">Legs Below knee</td>
              <td>6,000</td>
              <td>30,000</td>
            </tr>

            <!-- Row 23 -->
            <tr>
              <th scope="row">23</th>
              <td class="procedure-td">Full legs</td>
              <td>12,000</td>
              <td>60,000</td>
            </tr>

            <!-- Row 24 -->
            <tr>
              <th scope="row">24</th>
              <td class="procedure-td">Dorsum Hands/foot</td>
              <td>3000</td>
              <td>15,000</td>
            </tr>

            <!-- Row 25 -->
            <tr>
              <th scope="row">25</th>
              <td class="procedure-td">Dorsum Fingers/ Toes</td>
              <td>2000</td>
              <td>10,000</td>
            </tr>

            <!-- Row 26 -->
            <tr>
              <th scope="row">26</th>
              <td class="procedure-td">Full Body (Female)</td>
              <td>55,000</td>
              <td>2,75,000</td>
            </tr>
          </tbody>
        </table>

        <div class="note my-2 p-4 border border-2 border-black">
          <p>
            <u>Notes:</u>
            <li>Best result will be seen in fair skin with dark hairs</li>
            <li>Hair reduction will be obtained with minimum 6-8 sittings every month by almost 80-90%</li>
            <li>Maintenance settings may be required further every 5-6 months.</li>
          </p>
        </div>


      </div>
    </div>

    <div class="container pt-5">
      <h3 class="page-title mb-3 text-center">
        LASER HAIR REMOVAL /REDUCTION- SOPRANO ICE PLATINUM (MALE)
      </h3>

      <div class="row">

        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">S.N</th>
              <th scope="col">Area</th>
              <th scope="col">Price Per Setting</th>
              <th scope="col">6 Sitting Package</th>
            </tr>
          </thead>
          <tbody>
            <!-- Row 1 -->
            <tr>
              <th scope="row">1</th>
              <td class="procedure-td">Forehead hairline</td>
              <td>5000</td>
              <td>25000</td>
            </tr>

            <!-- Row 2 -->
            <tr>
              <th scope="row">2</th>
              <td class="procedure-td">Mid brow</td>
              <td>3000</td>
              <td>15000</td>
            </tr>

            <!-- Row 3 -->
            <tr>
              <th scope="row">3</th>
              <td class="procedure-td">Beard shaping Male</td>
              <td>6000</td>
              <td>30000</td>
            </tr>

            <!-- Row 4 -->
            <tr>
              <th scope="row">4</th>
              <td class="procedure-td">Ears</td>
              <td>3000</td>
              <td>15000</td>
            </tr>

            <!-- Row 5 -->
            <tr>
              <th scope="row">5</th>
              <td class="procedure-td">Lower Face</td>
              <td>6000</td>
              <td>30000</td>
            </tr>

            <!-- Row 6 -->
            <tr>
              <th scope="row">6</th>
              <td class="procedure-td">Full Face</td>
              <td>10,000</td>
              <td>50,000</td>
            </tr>

            <!-- Row 7 -->
            <tr>
              <th scope="row">7</th>
              <td class="procedure-td">Neck</td>
              <td>5000</td>
              <td>25,000</td>
            </tr>

            <!-- Row 8 -->
            <tr>
              <th scope="row">8</th>
              <td class="procedure-td">Arm/Forearm</td>
              <td>8,000</td>
              <td>40,000</td>
            </tr>

            <!-- Row 9 -->
            <tr>
              <th scope="row">9</th>
              <td class="procedure-td">Full Arms</td>
              <td>12,000</td>
              <td>60,000</td>
            </tr>

            <!-- Row 10 -->
            <tr>
              <th scope="row">10</th>
              <td class="procedure-td">Under Arms (Axilla)</td>
              <td>6,000</td>
              <td>30,000</td>
            </tr>

            <!-- Row 11 -->
            <tr>
              <th scope="row">11</th>
              <td class="procedure-td">Chest</td>
              <td>12,000</td>
              <td>60,0000</td>
            </tr>

            <!-- Row 12 -->
            <tr>
              <th scope="row">12</th>
              <td class="procedure-td">Back</td>
              <td>12,000</td>
              <td>60,000</td>
            </tr>

            <!-- Row 13 -->
            <tr>
              <th scope="row">13</th>
              <td class="procedure-td">Umbilicus to cleavage</td>
              <td>5,000</td>
              <td>25000</td>
            </tr>

            <!-- Row 14 -->
            <tr>
              <th scope="row">14</th>
              <td class="procedure-td">Nipples</td>
              <td>2000</td>
              <td>10,000</td>
            </tr>

            <!-- Row 15 -->
            <tr>
              <th scope="row">15</th>
              <td class="procedure-td">Buttocks/ Perineum</td>
              <td>8000</td>
              <td>40,000</td>
            </tr>

            <!-- Row 16 -->
            <tr>
              <th scope="row">16</th>
              <td class="procedure-td">Thighs</td>
              <td>8,000</td>
              <td>40,000</td>
            </tr>

            <!-- Row 17 -->
            <tr>
              <th scope="row">17</th>
              <td class="procedure-td">Legs Below knee</td>
              <td>7,000</td>
              <td>35,000</td>
            </tr>

            <!-- Row 18 -->
            <tr>
              <th scope="row">18</th>
              <td class="procedure-td">Full legs</td>
              <td>15,000</td>
              <td>75,000</td>
            </tr>

            <!-- Row 19 -->
            <tr>
              <th scope="row">19</th>
              <td class="procedure-td">Dorsum Hands/foot</td>
              <td>3000</td>
              <td>15000</td>
            </tr>

            <!-- Row 20 -->
            <tr>
              <th scope="row">20</th>
              <td class="procedure-td">Dorsum Fingers/ Toes</td>
              <td>2000</td>
              <td>10000</td>
            </tr>

            <!-- Row 21 -->
            <tr>
              <th scope="row">21</th>
              <td class="procedure-td">Full Body (Male)</td>
              <td>60,000</td>
              <td>3,00,000</td>
            </tr>
          </tbody>
        </table>



        <div class="note my-2 p-4 border border-2 border-black">
          <p>
            <u>Notes:</u>
            <li>Best result will be seen in fair skin with dark hairs.</li>
            <li>Hair reduction will be obtained with minimum 6-8 sittings every month by almost 80-90%</li>
            <li>Maintenance settings may be required further every 5-6 months.</li>
          </p>
        </div>


      </div>
    </div>

    <div class="container pt-5">
      <h3 class="page-title mb-3 text-center">
        LASER HAIR REMOVAL /REDUCTION- DIODE LASER
      </h3>

      <div class="row">

        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">S.N</th>
              <th scope="col">Area</th>
              <th scope="col">Price Per Setting</th>
              <th scope="col">6 Sitting Package</th>
            </tr>
          </thead>
          <tbody>
            <!-- Row 1 -->
            <tr>
              <th scope="row">1</th>
              <td class="procedure-td">Forehead hairline</td>
              <td>3000</td>
              <td>15000</td>
            </tr>

            <!-- Row 2 -->
            <tr>
              <th scope="row">2</th>
              <td class="procedure-td">Mid brow</td>
              <td>2000</td>
              <td>10000</td>
            </tr>

            <!-- Row 3 -->
            <tr>
              <th scope="row">3</th>
              <td class="procedure-td">Beard shaping Male</td>
              <td>5000</td>
              <td>15000</td>
            </tr>

            <!-- Row 4 -->
            <tr>
              <th scope="row">4</th>
              <td class="procedure-td">Cheeks female</td>
              <td>5000</td>
              <td>15000</td>
            </tr>

            <!-- Row 5 -->
            <tr>
              <th scope="row">5</th>
              <td class="procedure-td">Ears</td>
              <td>2000</td>
              <td>10000</td>
            </tr>

            <!-- Row 6 -->
            <tr>
              <th scope="row">6</th>
              <td class="procedure-td">Upper lip (Female)</td>
              <td>2000</td>
              <td>10000</td>
            </tr>

            <!-- Row 7 -->
            <tr>
              <th scope="row">7</th>
              <td class="procedure-td">Chin</td>
              <td>2000</td>
              <td>10000</td>
            </tr>

            <!-- Row 8 -->
            <tr>
              <th scope="row">8</th>
              <td class="procedure-td">Lower Face</td>
              <td>5000</td>
              <td>25000</td>
            </tr>

            <!-- Row 9 -->
            <tr>
              <th scope="row">9</th>
              <td class="procedure-td">Full Face</td>
              <td>8000</td>
              <td>40000</td>
            </tr>

            <!-- Row 10 -->
            <tr>
              <th scope="row">10</th>
              <td class="procedure-td">Neck</td>
              <td>3000</td>
              <td>15000</td>
            </tr>

            <!-- Row 11 -->
            <tr>
              <th scope="row">11</th>
              <td class="procedure-td">Arm/Forearm</td>
              <td>6000</td>
              <td>30000</td>
            </tr>

            <!-- Row 12 -->
            <tr>
              <th scope="row">12</th>
              <td class="procedure-td">Full Arms</td>
              <td>8000</td>
              <td>40000</td>
            </tr>

            <!-- Row 13 -->
            <tr>
              <th scope="row">13</th>
              <td class="procedure-td">Under Arms (Axilla)</td>
              <td>5000</td>
              <td>25000</td>
            </tr>

            <!-- Row 14 -->
            <tr>
              <th scope="row">14</th>
              <td class="procedure-td">Chest/ Back (Male)</td>
              <td>10000</td>
              <td>50000</td>
            </tr>

            <!-- Row 15 -->
            <tr>
              <th scope="row">15</th>
              <td class="procedure-td">Chest / Back (Female)</td>
              <td>8000</td>
              <td>40000</td>
            </tr>

            <!-- Row 16 -->
            <tr>
              <th scope="row">16</th>
              <td class="procedure-td">Cleavage area</td>
              <td>3000</td>
              <td>15000</td>
            </tr>

            <!-- Row 17 -->
            <tr>
              <th scope="row">17</th>
              <td class="procedure-td">Umbilicus to cleavage</td>
              <td>3000</td>
              <td>15000</td>
            </tr>

            <!-- Row 18 -->
            <tr>
              <th scope="row">18</th>
              <td class="procedure-td">Nipples</td>
              <td>1000</td>
              <td>5000</td>
            </tr>

            <!-- Row 19 -->
            <tr>
              <th scope="row">19</th>
              <td class="procedure-td">Bikini line</td>
              <td>4000</td>
              <td>20000</td>
            </tr>

            <!-- Row 20 -->
            <tr>
              <th scope="row">20</th>
              <td class="procedure-td">Full bikini</td>
              <td>5000</td>
              <td>25000</td>
            </tr>

            <!-- Row 21 -->
            <tr>
              <th scope="row">21</th>
              <td class="procedure-td">Buttocks</td>
              <td>4000</td>
              <td>20000</td>
            </tr>

            <!-- Row 22 -->
            <tr>
              <th scope="row">22</th>
              <td class="procedure-td">Thighs (legs-Half)</td>
              <td>6000</td>
              <td>30000</td>
            </tr>

            <!-- Row 23 -->
            <tr>
              <th scope="row">23</th>
              <td class="procedure-td">Legs Below knee</td>
              <td>6000</td>
              <td>25000</td>
            </tr>

            <!-- Row 24 -->
            <tr>
              <th scope="row">24</th>
              <td class="procedure-td">Full legs</td>
              <td>10000</td>
              <td>50000</td>
            </tr>

            <!-- Row 25 -->
            <tr>
              <th scope="row">25</th>
              <td class="procedure-td">Dorsum Hands/foot</td>
              <td>2500</td>
              <td>12500</td>
            </tr>

            <!-- Row 26 -->
            <tr>
              <th scope="row">26</th>
              <td class="procedure-td">Dorsum Fingers/ Toes</td>
              <td>1000</td>
              <td>5000</td>
            </tr>

            <!-- Row 27 -->
            <tr>
              <th scope="row">27</th>
              <td class="procedure-td">Full Body (Male)</td>
              <td>50000</td>
              <td>250000</td>
            </tr>

            <!-- Row 28 -->
            <tr>
              <th scope="row">28</th>
              <td class="procedure-td">Full Body (Female)</td>
              <td>40000</td>
              <td>200000</td>
            </tr>
          </tbody>
        </table>


        <div class="note my-2 p-4 border border-2 border-black">
          <p>
            <u>Notes:</u>
            <li>Best result will be seen in fair skin with dark hairs.</li>
            <li>Hair reduction will be obtained with minimum 6-8 sittings every month by almost 80-90%</li>
            <li>Maintenance settings may be required further every 5-6 months.</li>
          </p>
        </div>


      </div>
    </div>



  </section>
  <!-- News and Blogs Section End -->


</main><!-- End #main -->

@endsection