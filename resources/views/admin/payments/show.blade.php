@extends('admin.templates.show', ['hideEdit'=>false])

@push('styles')
@endpush

@section('form_content')
    <div class="row my-4">
        <div class="col-md-7">
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Name:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->name }}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Email:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->email }}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Phone:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->phone }}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Date of Birth:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->dob ?? '---' }}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Gender:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->gender ?? '---' }}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Preferred Date:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->preferred_date ?? '---' }}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Preferred Time:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->preferred_time ?? '---' }}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Appointment Type:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->appointment_type ?? '---' }}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Payment Status:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ ucfirst(strtolower($item->status ?? '---')) }}
                </div>
            </div>
        </div>
    </div>
@endsection
