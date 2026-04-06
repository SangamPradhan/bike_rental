@extends('admin.templates.index')

@section('title', $title)

@section('content_header')
    <h1>Brands</h1>
@stop

@section('index_content')
    <div class="table-responsive">
        <table class="table" id="data-table">
            <thead>
            <tr class="text-left text-capitalize">
                <th>id</th>
                <th>name</th>
                <th>type</th>
                <th>order</th>
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
                ajax: "{{ route('brands.index') }}",
                columns: [
                    {data: 'id', name: 'DT_RowIndex'},
                    {data: 'name', name: 'name'},
                    {data: 'type', name: 'type'},
                    {data: 'order', name: 'order'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
            });
        });
    </script>
@endpush
