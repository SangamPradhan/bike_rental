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
                    <label for=""><span class="show-text">Description:</span></label><br>
                </div>
                <div class="col-md-8">
                    {!! strip_tags($item->description) !!}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Published by:</span></label><br>
                </div>
                <div class="col-md-8">
                    @php
                        $user = App\Models\User::find($item->user_id);
                    @endphp

                    @if ($user)
                        {{ $user->name }}
                    @else
                        --
                    @endif
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

            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Tag:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->tag }}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            @if ($item->getImage())
                <img src="{{ $item->getImage() }}" alt="" width="50%">
            @endif
        </div>
    </div>

    {{-- @if(auth()->user()->is_staff && auth()->user()->id == $item->user_id)
    <a href="{{ route('edit.news', $item->id) }}" class="btn btn-primary">Edit</a>
    @endif --}}
@endsection