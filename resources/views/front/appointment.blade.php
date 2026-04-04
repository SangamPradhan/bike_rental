@extends('layouts.app')

@push('css')
    <meta property="og:title" content="Book an Appointment - Gratifyspa Hair & Skin Parlour " />
    <meta property="og:type" content="website" />
    <meta property="og:description"
        content="Schedule your appointment at Gratifyspa Hair & Skin Parlour to personalized dermatological excellence. Provide your details, choose your preferred date and time, and select the type of appointment to experience top-notch care." />
    <meta property="og:url" content="{{ route('appointment') }}" />
    <meta property="og:image" content="{{ asset('assets/img/meta/appointment-banner.jpg') }}" />
    {{--  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>  --}}
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
                    <img src="{{ asset('assets/img/goldenspa-scanner.png') }}" class="rounded me-2" alt="Scanner"
                        style="width: 50px;">
                    <strong class="me-auto">Gratifying Spa</strong>
                    <small>Just now</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Pay Here<br>
                    Booking Successful. Your reservation has been confirmed.<br>
                    <p style="font-style: italic; color: skyblue;">If you do not want to pay now, you can pay when you visit
                        us during the appointment.</p>
                </div>
            </div>
        </div>

        <!-- Book an appointment section Start  -->
        <section class="appointment-form-section">
            <!-- <div class="top-img"></div> -->
            <div class="row">
                <div class="appointment-form-col col-md-9 mx-auto">
                    <h3 class="form-title mb-5 bottom-border heading-title">Book an Appointment</h3>

                    <!-- <form action="http://httpbin.org/post" method="POST"> -->
                    <form action="{{ route('appointment-booking') }}" method="POST">
                        @csrf
                        <div class="row bottom-border pb-4 mb-5">
                            <p class="form-section-subtitle">Let's get to know you better. Please provide your up-to-date
                                personal information.</p>
                            @include('front.packages.msg')
                            <div class="col-md-12 ">
                                <div class="row">
                                    <!-- Full Name -->
                                    <div class="mb-3 col-md-4">
                                        <label for="fullName" class="form-label">Full Name</label>

                                        <input type="text" class="form-control" name="name" required id="fullName">
                                    </div>
                                    <!-- Contact Number -->
                                    <div class="mb-3 col-md-4">
                                        <label for="contactNumber" class="form-label">Contact Number</label>
                                        <input type="tel" class="form-control" name="phone" required maxlength="10"
                                            id="contactNumber">
                                    </div>
                                    <!-- Email Address -->
                                    <div class="mb-3 col-md-4">
                                        <label for="emailAddress" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" name="email" required id="emailAddress"
                                            aria-describedby="emailHelp">
                                    </div>

                                    <!-- Gender -->
                                    <div class="mb-3 col-md-3">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select class="form-select" name="gender" required id="gender">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row border-dark-subtle">
                            <h6 class="form-section-title bold">Appointment Details</h6>
                            <p class="form-section-subtitle">Let's get to know about your appointment information.</p>
                            <div class="col-md-12">
                                <div class="row">
                                    <!-- Preferred Date -->
                                    <div class="mb-3 col-md-4">
                                        <label for="preferredDate" class="form-label">Preferred Date<span
                                                class="bold">(Sun - Fri)<span></label>
                                        <input type="date" class="form-control" name="preferred_date" required
                                            id="preferredDate" min="">
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                const dateInput = document.getElementById('preferredDate');
                                                const today = new Date().toISOString().split('T')[0]; // Get today's date in YYYY-MM-DD format
                                                dateInput.min = today; // Set the min attribute dynamically
                                            });
                                        </script>
                                    </div>

                                    <!-- Preferred Time -->
                                    <div class="mb-3 col-md-4">
                                        <label for="preferredTime" class="form-label">Preferred Time<span class="bold">(11
                                                AM - 09 PM)</span></label>
                                        {{--  <input type="time" class="form-control" name="preferred_time" required id="preferredTime" name="preferredTime">  --}}
                                        <input type="time" class="form-control" name="preferred_time" required
                                            id="preferredTime" min="11:00" max="21:00">
                                    </div>

                                    <!-- Type of Appointment -->
                                    <div class="mb-3 col-md-4">
                                        <label for="appointmentType" class="form-label">Type of Appointment</label>
                                        <select class="form-select" name="appointment_type" id="appointmentType">
                                            @foreach ($services as $service)
                                                <option value="{{ $service->title }}">{{ $service->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- <div class="mb-3" id="specifyServiceInput" style="display:none;">
                                        <label for="specifyService" class="form-label">Service</label>
                                        <input type="text" class="form-control" name="service" id="specifyService">
                                    </div> -->
                                    <!-- Preferred Stylist/Doctor -->
                                    {{--  <div class="mb-3 col-md-4">
                                    <label for="preferredStylist" class="form-label">Preferred Doctor<span class="bold">(Optional)</span></label>
                                    <!-- <input type="text" class="form-control" id="preferredStylist"> -->
                                    <select class="form-select" name="preferred_doctor" id="appointmentType">
                                        @foreach (App\Models\Staff::where('designation', 'Doctor')->get() as $staff)
                                        <option value="{{ $staff->name }}">{{ $staff->name }}</option>
                                        @endforeach
                                    </select>
                                </div>  --}}
                                </div>

                                <!-- captcha field and client side captcha field -->
                                <!-- <div class="g-recaptcha" data-sitekey="6LeoNWYpAAAAAKHk_cuRfOucB8NEj_onjoG2rRlF">
                                    </div>
                                    <p id="CaptchaWarning" class="CaptchaWarning text-danger" style="display:none;">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                                        </svg>
                                        You must agree before submitting.
                                    </p> -->

                                <br />

                                <button type="submit" class="btn btn-primary py-2">Submit</button>
                            </div>
                    </form>
                </div>
        </section>
        <!-- Book an appointment section end  -->

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Appointment Form JS File -->
        <script src="{{ asset('assets/js/appointment-form.js') }}"></script>

        {{--  <script>
            $(document).ready(function() {
                $('.toast').toast('show');
            });
        </script>  --}}




    </main><!-- End #main -->
@endsection
@push('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Appointment Form JS File -->
    {{-- <script src="{{ asset('assets/js/appointment-form.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush
