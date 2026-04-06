@extends('admin.templates.index')

@section('title', $title)

@section('content_header')
    <h1>Vehicles</h1>
@stop

@section('index_content')
    <div class="table-responsive">
        <table class="table" id="data-table">
            <thead>
            <tr class="text-left text-capitalize">
                <th>id</th>
                <th>title</th>
                <th>brand</th>
                <th>rate/day</th>
                <th>type</th>
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
                ajax: "{{ route('vehicles.index') }}",
                columns: [
                    {data: 'id', name: 'DT_RowIndex'},
                    {data: 'title', name: 'title'},
                    {data: 'brand', name: 'brand'},
                    {data: 'rate_per_day', name: 'rate_per_day'},
                    {data: 'type', name: 'type'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
            });
        });
    </script>
@endpush
