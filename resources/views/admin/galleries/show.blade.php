@extends('admin.templates.show')
@push('styles')
@endpush
@section('form_content')
    <div class="row my-4">
        <div class="col-md-4">
            <img src="{{ $item->image_url }}" alt="" width="80%">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-3">
            <label for=""><span class="show-text">Order:</span> </label><br>
        </div>
        <div class="col-md-8">
            {{ $item->order }}
        </div>
    </div>
@endsection
