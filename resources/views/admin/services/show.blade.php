@extends('admin.templates.show')

@push('styles')
@endpush

@section('form_content')
    <div class="row my-4">
        <div class="col-md-7">
            <!-- Title -->
            <div class="row form-group">
                <div class="col-md-3"><label><span class="show-text">Title:</span></label></div>
                <div class="col-md-8">{{ $item->title }}</div>
            </div>

            <!-- Description -->
            <div class="row form-group">
                <div class="col-md-3"><label><span class="show-text">Description:</span></label></div>
                <div class="col-md-8">{!! strip_tags($item->description) !!}</div>
            </div>

            <!-- Category -->
            <div class="row form-group">
                <div class="col-md-3"><label><span class="show-text">Category:</span></label></div>
                <div class="col-md-8">{{ $item->category }}</div>
            </div>

            <!-- Price -->
            <div class="row form-group">
                <div class="col-md-3"><label><span class="show-text">Price One:</span></label></div>
                <div class="col-md-8">{{ $item->price }}</div>
            </div>

            <!-- Price Two -->
            <div class="row form-group">
                <div class="col-md-3"><label><span class="show-text">Price Two:</span></label></div>
                <div class="col-md-8">{{ $item->price_two }}</div>
            </div>

            <!-- Price Three -->
            <div class="row form-group">
                <div class="col-md-3"><label><span class="show-text">Price Three:</span></label></div>
                <div class="col-md-8">{{ $item->price_three }}</div>
            </div>

            <!-- Time One -->
            <div class="row form-group">
                <div class="col-md-3"><label><span class="show-text">Time One:</span></label></div>
                <div class="col-md-8">{{ $item->time_one }} min</div>
            </div>

            <!-- Time Two -->
            <div class="row form-group">
                <div class="col-md-3"><label><span class="show-text">Time Two:</span></label></div>
                <div class="col-md-8">{{ $item->time_two }} min</div>
            </div>

            <!-- Time Three -->
            <div class="row form-group">
                <div class="col-md-3"><label><span class="show-text">Time Three:</span></label></div>
                <div class="col-md-8">{{ $item->time_three }} min</div>
            </div>

            <!-- Order -->
            <div class="row form-group">
                <div class="col-md-3"><label><span class="show-text">Order:</span></label></div>
                <div class="col-md-8">{{ $item->order }}</div>
            </div>
        </div>

        <!-- Service Image -->
        <div class="col-md-4">
            @if ($item->getImage())
                <img src="{{ $item->getImage() }}" alt="Service Image" width="70%" class="img-fluid">
            @endif
        </div>
    </div>
@endsection
