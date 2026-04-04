@component('mail::message')
    <!-- @push('css')
        <meta property="og:title" content="Womans Day - Gratifyspa Hair & Skin Clinic " />
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="{{ route('womans-day-form') }}" />
        <meta property="og:image" content="{{ asset('assets/img/meta/package.png') }}"/>
    @endpush -->
    # Introduction

    Hello There,

    You have a new booking for Woman's day.

    <div class="row form-group">
        <div class="col-md-3">
            <label for=""><span class="show-text">Name:</span> </label><br>
        </div>
        <div class="col-md-8">
            {{ $data->name }}
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-3">
            <label for=""><span class="show-text">Phone:</span> </label><br>
        </div>
        <div class="col-md-8">
            {{ $data->phone }}
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-3">
            <label for=""><span class="show-text">Address:</span> </label><br>
        </div>
        <div class="col-md-8">
            {{ $data->address }}
        </div>
    </div>

    <div class="row form-group">
        <div class="col-md-3">
            <label for=""><span class="show-text">Arrival Time:</span>
            </label><br>
        </div>
        <div class="col-md-8">
            {{ $data->arrival_time }}
        </div>
    </div>


    <div class="row form-group">
        <div class="col-md-3">
            <label for=""><span class="show-text">Bookings:</span>
            </label><br>
        </div>
        <div class="col-md-8">
            <input type="checkbox" disabled {{ $data->gynecologist === 1 ? 'checked' : '' }}>&nbsp&nbsp&nbsp Gynecologist <br>
            <input type="checkbox" disabled {{ $data->dermatologist === 1 ? 'checked' : '' }}>&nbsp&nbsp&nbsp Dermatologist<br>
            <input type="checkbox" disabled {{ $data->hydra_facial === 1 ? 'checked' : '' }}>&nbsp&nbsp&nbsp Hydra Facial <br>
            <input type="checkbox" disabled {{ $data->carbon_peeling === 1 ? 'checked' : '' }}>&nbsp&nbsp&nbsp Carbon Peeling
            <br>
            <input type="checkbox" disabled {{ $data->micro_needling === 1 ? 'checked' : '' }}>&nbsp&nbsp&nbsp Micro Needling
            <br>
            <input type="checkbox" disabled {{ $data->facial === 1 ? 'checked' : '' }}>&nbsp&nbsp&nbsp Facial <br>
            <input type="checkbox" disabled {{ $data->hair_treatment === 1 ? 'checked' : '' }}>&nbsp&nbsp&nbsp Hair Treatment
            <br>
        </div>
    </div>

    You can view your booking details using the link below.

    @component('mail::button', ['url' => $booking_url])
        Button Text
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
