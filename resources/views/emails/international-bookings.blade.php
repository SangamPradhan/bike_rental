@component('mail::message')
    # Introduction

    Hello There,

    You have a new international booking.

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
            <label for=""><span class="show-text">Email:</span>
            </label><br>
        </div>
        <div class="col-md-8">
            {{ $data->email }}
        </div>
    </div>

    <div class="row form-group">
        <div class="col-md-3">
            <label for=""><span class="show-text">Country:</span>
            </label><br>
        </div>
        <div class="col-md-8">
            {{ $data->country }}
        </div>
    </div>

    <div class="row form-group">
        <div class="col-md-3">
            <label for=""><span class="show-text">Type of appoinment:</span>
            </label><br>
        </div>
        <div class="col-md-8">
            {{ $data->appointment_type }}
        </div>
    </div>





    You can view your booking details using the link below.

    @component('mail::button', ['url' => $booking_international])
        Button Text
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
