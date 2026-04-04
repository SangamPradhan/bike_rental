@extends('layouts.app')
@push('css')
<meta property="og:title" content="Teej Offer Till Bhadra 21" />
<meta property="og:description" content="Get 30% off on group booking and 25% of on solo booking. For group bookings please contact our nursing service 061-11111111, 061-11111111" />
<meta property="og:image" content="{{ asset('assets/img/offer.png') }}" />
<meta property="og:url" content="{{ route('offer-form') }}" />

@endpush
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div>
                <h2>Book an Appointment</h2>
                <ol>
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li>Book an Appointment</li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->


    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="..." class="rounded me-2" alt="...">
                <strong class="me-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
    </div>



    <!-- Book an appointment section Start  -->
    <section class="appointment-form-section">
        <!-- <div class="top-img"></div> -->
        <div class="row">
            <div class="container appointment-form-col pt-4 my-5 px-5 col-md-9 mx-auto">
                <h5 class="form-title py-4 mt-3 mb-5 bottom-border bold text-center">Empower Your Glow: Celebrate Teej Offer with Radiance</h5>
                <!-- <form action="http://httpbin.org/post" method="POST"> -->
                <form action="{{ route('womans-day-form') }}" method="POST">
                    @csrf
                    <div class="row bottom-border pb-4 mb-5">
                        <div class="col-md-4">
                            <h6 class="form-section-title bold">Personal Information</h6>
                            <p class="form-section-subtitle">Let's get to know you better. Please provide your up-to-date personal information.</p>
                        </div>
                        <div class="col-md-8 ">
                            <div class="row">
                                <!-- Full Name -->
                                <div class="mb-3  col-xl-6">
                                    <label for="fullName" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" name="name" required id="fullName">
                                </div>
                                <!--  Address -->
                                <div class="mb-3  col-xl-6">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" name="address" required id="address">
                                </div>
                            </div>

                            <!-- Contact Number -->
                            <div class="mb-3 col-xl-6">
                                <label for="contactNumber" class="form-label">Contact Number</label>
                                <input type="tel" class="form-control" name="phone" required maxlength="10" id="contactNumber">
                            </div>

                        </div>
                    </div>
                    <div class="row border-dark-subtle pb-4 mb-2">
                        <div class="col-md-4">
                            <h6 class="form-section-title bold">Appointment Details</h6>
                            <p class="form-section-subtitle">Get 30% off on group booking and 25% of on solo booking. For group bookings please contact our nursing service 061-11111111, 061-11111111</p>
                        </div>
                        <div class="col-md-8">
                            <div class="row">


                                <!-- Preferred Date & Time -->
                                <div class="mb-3 col-xl-6">
                                    <label for="preferred-date" class="form-label">Preferred Date <span class="bold">Till September 6</span></label>
                                    <input type="date" class="form-control" required id="preferred-date" min="{{ date('Y-m-d') }}" max="2024-09-06" name="preferred_date">
                                </div>
                                <div class="mb-3 col-xl-6">
                                    <label for="preferredTime" class="form-label">Preferred Time<span class="bold">(10 AM - 5 PM)</span></label>
                                    <input type="time" class="form-control" required id="preferredTime" name="arrival_time">
                                </div>
                            </div>

                            <!-- Type of Appointment -->
                            <div class="mb-3">
                                <label for="appointmentType" class="form-label">Type of Appointment</label>
                                <div class="row ms-2">
                                <div class="col-6 mb-2 form-check">
                                    <input class="form-check-input" type="checkbox" value="0" onclick="checkboxUpdate('hydra-facial')" name="hydra_facial" id="hydra-facial">
                                    <label class="form-check-label" for="hydra-facial">
                                        Hydra Facial Service
                                    </label>
                                </div>
                                <div class="col-6 mb-2 form-check">
                                    <input class="form-check-input" type="checkbox" value="0" onclick="checkboxUpdate('carbon-peeling')" name="carbon_peeling" id="carbon-peeling">
                                    <label class="form-check-label" for="carbon-peeling">
                                        Chemical Peeling
                                    </label>
                                </div>
                                <div class="col-6 mb-2 form-check">
                                    <input class="form-check-input" type="checkbox" value="0" onclick="checkboxUpdate('micro-needling')" name="micro_needling" id="micro-needling">
                                    <label class="form-check-label" for="otherServices">
                                        Medi Facial
                                    </label>
                                </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="details" class="form-label">Extra Details</label>
                                <textarea name="details" class="form-control" id="details" row="3" ></textarea>
                            </div>
                            <br />

                            <div class="row mt-2"><button type="submit" class="cta py-2">Submit</button></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Book an appointment section end  -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Appointment Form JS File -->
    <!-- <script src="{{ asset('assets/js/appointment-form.js')}}"></script> -->

</main><!-- End #main -->

@endsection

@push('js')
<script>

    function checkboxUpdate(name){
        var checkbox_value = document.getElementById(name).value
        if(checkbox_value === '0'){
            document.getElementById(name).value = 1
        }else{
            document.getElementById(name).value = 0
        }
    }
</script>
<!-- <script>
    $(document).ready(function() {
        $('.toast').toast('show');
    });
</script> -->
@endpush