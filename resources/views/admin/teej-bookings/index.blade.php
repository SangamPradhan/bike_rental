@extends('admin.templates.index', ['hideCreate'=>'true'])

@section('title', $title)

@section('content_header')
    <h1>{{ $title}}</h1>
@stop

@push('styles')

@endpush

@section('index_content')
    <div class="table-responsive">
        <table class="table" id="data-table">
            <thead>
            <tr class="text-left text-capitalize">
                <th>id</th>
                <th>name</th>
                <th>phone</th>
                <th>address</th>
                <th>arrival time</th>
                <th>action</th>
            </tr>
            </thead>

        </table>
    </div>
@endsection

@push('scripts')
    <script>
        $(function () {
            var table = $('#data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('teej-bookings.index') }}",
                columns: [
                    {data: 'id', name: 'DT_RowIndex'},
                    {data: 'name', name: 'name'},
                    {data: 'phone', name: 'phone'},
                    {data: 'address', name: 'address'},
                    {data: 'arrival_time', name: 'arrival_time'},
                    {data: 'action', name: 'action'},
                ],
            });
        });
    </script>
@endpush
