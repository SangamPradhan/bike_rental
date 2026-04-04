@extends('admin.templates.show')
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
                    <label for=""><span class="show-text">Designation:</span>
                    </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->designation ?? '---' }}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Specialist:</span>
                    </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->specialist ?? '---' }}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Experience:</span>
                    </label><br>
                </div>
                <div class="col-md-8">
                    {!! strip_tags($item->experience) !!}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Qualification:</span>
                    </label><br>
                </div>
                <div class="col-md-8">
                    {!! strip_tags($item->qualification) !!}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Awards and Achievement:</span>
                    </label><br>
                </div>
                <div class="col-md-8">
                    {!! strip_tags($item->awards) !!}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Skills:</span>
                    </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->skills ?? '---' }}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Others:</span>
                    </label><br>
                </div>
                <div class="col-md-8">
                    {!! Str::limit(strip_tags($item->others), 300, '...') !!}
                </div>

            </div>
        </div>
        <div class="col-md-4">
            @if ($item->getImage())
                <img src="{{ $item->getImage() }}" alt="" width="70%">
            @endif
        </div>
    </div>
@endsection
