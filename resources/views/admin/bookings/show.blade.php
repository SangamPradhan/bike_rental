@extends('admin.templates.show', ['hideEdit' => false])

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
                    <table class="table table-borderless">
                        <tr class="text-left text-capitalize">
                            <td>{{ $item->email }}</td>
                        </tr>
                        @if ($item->vehicle)
                            <tr class="text-left text-capitalize">
                                <th colspan="2" class="bg-light">Fleet Details</th>
                            </tr>
                            <tr class="text-left text-capitalize">
                                <th>Vehicle</th>
                                <td>{{ $item->vehicle->brand->name }} {{ $item->vehicle->title }}
                                    ({{ ucfirst($item->vehicle->type) }})</td>
                            </tr>
                            <tr class="text-left text-capitalize">
                                <th>Specs</th>
                                <td>{{ $item->vehicle->engine_cc }}cc | {{ $item->vehicle->kmpl }}kmpl |
                                    {{ $item->vehicle->fuel_tank_capacity }}L
                                </td>
                            </tr>
                            <tr class="text-left text-capitalize">
                                <th>Rate/Day</th>
                                <td>Nrs. {{ number_format($item->vehicle->rate_per_day, 2) }}</td>
                            </tr>
                        @endif

                        @if ($item->extras)
                            <tr class="text-left text-capitalize">
                                <th>Selected Extras</th>
                                <td>
                                    @php $extras = json_decode($item->extras, true); @endphp
                                    @if(is_array($extras))
                                        <ul class="pl-3">
                                            @foreach($extras as $extra)
                                                <li>{{ ucfirst($extra) }}</li>
                                            @endforeach
                                        </ul>
                                    @else
                                        {{ $item->extras }}
                                    @endif
                                </td>
                            </tr>
                        @endif

                        @if ($item->total_price)
                            <tr class="text-left text-capitalize">
                                <th>Total Price</th>
                                <td><strong>Nrs. {{ number_format($item->total_price, 2) }}</strong></td>
                            </tr>
                        @endif

                        @if ($item->id_no)
                            <tr class="text-left text-capitalize">
                                <th>ID Number</th>
                                <td>{{ $item->id_no }}</td>
                            </tr>
                        @endif

                        @if ($item->requirements)
                            <tr class="text-left text-capitalize">
                                <th>Requirements</th>
                                <td>{{ $item->requirements }}</td>
                            </tr>
                        @endif
                    </table>
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
                    <label for=""><span class="show-text">Pickup Date:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->preferred_date ?? '---' }}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Exploring Region:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->exploring_region ?? '---' }}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Duration:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->days ?? '1' }} Days
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Status:</span> </label><br>
                </div>
                <div class="col-md-8">
                    <span class="badge badge-{{ $item->status == 'pending' ? 'warning' : 'success' }}">
                        {{ strtoupper($item->status) }}
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-5 text-center">
            <label for=""><span class="show-text mb-3 d-block">License Attachment:</span> </label>
            @if ($item->license_attachment)
                <a href="{{ $item->license_attachment_url }}" target="_blank">
                    <img src="{{ $item->license_attachment_url }}" alt="License Attachment"
                        style="max-width: 100%; height: auto;" class="img-thumbnail custom-shadow">
                </a>
            @else
                <span class="text-muted">No attachment</span>
            @endif
        </div>
    </div>
@endsection