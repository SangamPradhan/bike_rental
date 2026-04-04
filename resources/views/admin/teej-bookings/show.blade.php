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
                    <label for=""><span class="show-text">Phone:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->phone }}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Address:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->address }}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Preferred Date & Time:</span>
                    </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->preferred_date }} {{ $item->arrival_time }}
                </div>
            </div>
            

            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Bookings:</span>
                    </label><br>
                </div>
                <div class="col-md-8">
                    <input type="checkbox" disabled {{ $item->hydra_facial == 1?'checked':'' }}>&nbsp&nbsp&nbsp Hydra Facial <br>
                    <input type="checkbox" disabled {{ $item->carbon_peeling == 1?'checked':'' }}>&nbsp&nbsp&nbsp Chemical Peeling <br>
                    <input type="checkbox" disabled {{ $item->micro_needling == 1?'checked':'' }}>&nbsp&nbsp&nbsp Medi Facial <br>
                    
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Extra Details:</span>
                    </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->details??'---' }}
                </div>
            </div>
        </div>
    </div>
@endsection