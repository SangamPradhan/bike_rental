@extends('admin.templates.edit')
@push('styles')
@endpush

@section('form_content')
     @include('admin.staffs.form') 
    

    @push('styles')
        <style>
            /* Add custom styles here */
            .mt-4 {
                margin-top: 1.5rem;
                /* Adjust spacing as needed */
            }
        </style>
    @endpush
@endsection

@push('scripts')
@endpush
