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
                    <label for=""><span class="show-text">Message:</span>
                    </label><br>
                </div>
                <div class="col-md-8">
                    {!! $item->message ?? '---' !!}
                </div>
            </div>
        </div>
    </div>
@endsection
