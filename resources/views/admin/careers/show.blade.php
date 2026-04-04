@extends('admin.templates.show')
@push('styles')
@endpush
@section('form_content')
    <div class="row my-4">
        <div class="col-md-7">
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Position:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->position }}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Description:</span>
                    </label><br>
                </div>
                <div class="col-md-8">
                    {!! ($item->description) !!}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Contract Type:</span>
                    </label><br>
                </div>
                <div class="col-md-8">
                    {!! ($item->contract) !!}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Timing:</span>
                    </label><br>
                </div>
                <div class="col-md-8">
                    {!! ($item->timing) !!}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">No. of Vacancy:</span>
                    </label><br>
                </div>
                <div class="col-md-8">
                    {!! ($item->vacancy) !!}
                </div>
            </div>
        </div>

    </div>
@endsection
