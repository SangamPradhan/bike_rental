@extends('admin.templates.show')
@push('styles')
@endpush
@section('form_content')
    <div class="row my-4">
        <div class="col-md-7">
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Title:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->title }}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Url:</span>
                    </label><br>
                </div>
                <div class="col-md-8">
                    {!! $item->url??'---' !!}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Text:</span>
                    </label><br>
                </div>
                <div class="col-md-8">
                    {!! $item->text??'---' !!}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            @if($item->getImage())
                <img src="{{ $item->getImage() }}" alt="" width="80%">
            @endif
        </div>
    </div>
@endsection