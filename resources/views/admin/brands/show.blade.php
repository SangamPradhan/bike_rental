@extends('admin.templates.show')
@push('styles')
@endpush
@section('form_content')
    <div class="row my-4">
        <div class="col-md-7">

            <div class="row form-group">
                <div class="col-md-3">
                    <label><span class="show-text">Name:</span></label>
                </div>
                <div class="col-md-8">
                    {{ $item->name ?? '---' }}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3">
                    <label><span class="show-text">Type:</span></label>
                </div>
                <div class="col-md-8">
                    <span class="badge badge-{{ $item->type == 'bike' ? 'primary' : 'info' }}">
                        {{ ucfirst($item->type ?? '---') }}
                    </span>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3">
                    <label><span class="show-text">Order:</span></label>
                </div>
                <div class="col-md-8">
                    {{ $item->order ?? '0' }}
                </div>
            </div>

        </div>

        <div class="col-md-4">
            @if($item->getImage())
                <p class="show-text mb-2">Logo / Image:</p>
                <div class="p-2 d-inline-block" style="background: #333;">
                    <img src="{{ asset($item->getImage()) }}" alt="Brand Logo" width="150" class="rounded">
                </div>
            @endif
        </div>
    </div>
@endsection