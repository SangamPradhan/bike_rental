@extends('admin.templates.show')
@push('styles')
@endpush
@section('form_content')
    <div class="row my-4">
        <div class="col-md-7">

            <div class="row form-group">
                <div class="col-md-3">
                    <label><span class="show-text">Brand:</span></label>
                </div>
                <div class="col-md-8">
                    {{ $item->brand->name ?? '---' }} ({{ ucfirst($item->brand->type ?? '') }})
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3">
                    <label><span class="show-text">Model Name:</span></label>
                </div>
                <div class="col-md-8">
                    {{ $item->title ?? '---' }}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3">
                    <label><span class="show-text">Vehicle Type:</span></label>
                </div>
                <div class="col-md-8">
                    <span class="badge badge-{{ $item->type == 'bike' ? 'primary' : 'info' }}">
                        {{ ucfirst($item->type ?? '---') }}
                    </span>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3">
                    <label><span class="show-text">Engine CC:</span></label>
                </div>
                <div class="col-md-8">
                    {{ $item->engine_cc ?? '---' }}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3">
                    <label><span class="show-text">Mileage:</span></label>
                </div>
                <div class="col-md-8">
                    {{ $item->kmpl ?? '---' }}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3">
                    <label><span class="show-text">Fuel Tank:</span></label>
                </div>
                <div class="col-md-8">
                    {{ $item->fuel_tank_capacity ?? '---' }}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3">
                    <label><span class="show-text">Rate Per Day:</span></label>
                </div>
                <div class="col-md-8">
                    Nrs. {{ number_format($item->rate_per_day, 2) }}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3">
                    <label><span class="show-text">Display Order:</span></label>
                </div>
                <div class="col-md-8">
                    {{ $item->order ?? '0' }}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3">
                    <label><span class="show-text">Featured:</span></label>
                </div>
                <div class="col-md-8">
                    <span class="badge badge-{{ $item->is_promoted ? 'warning' : 'secondary' }}">
                        {{ $item->is_promoted ? 'Yes' : 'No' }}
                    </span>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3">
                    <label><span class="show-text">Status:</span></label>
                </div>
                <div class="col-md-8">
                    <span class="badge badge-{{ $item->is_active ? 'success' : 'danger' }}">
                        {{ $item->is_active ? 'Active' : 'Inactive' }}
                    </span>
                </div>
            </div>

            @if($item->description)
                <div class="row form-group">
                    <div class="col-md-3">
                        <label><span class="show-text">Description:</span></label>
                    </div>
                    <div class="col-md-8">
                        {!! $item->description !!}
                    </div>
                </div>
            @endif

        </div>

        <div class="col-md-4">
            @if($item->getImage())
                <img src="{{ asset($item->getImage()) }}" alt="Vehicle Image" width="80%" class="border rounded">
            @endif
        </div>
    </div>
@endsection