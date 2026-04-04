@extends('admin.templates.index')

@section('title', $title)

@section('content_header')
    <h1>Services</h1>
@stop

@push('styles')

@endpush

@section('index_content')
    <div class="table-responsive">
        <table class="table" id="data-table">
            <thead>
            <tr class="text-left text-capitalize">
                <th>id</th>
                <th>title</th>
                <th>order</th>
                <th>price</th>
                <th>description</th>
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
                ajax: "{{ route('adminservices.index') }}",
                columns: [
                    {data: 'id', name: 'DT_RowIndex'},
                    {data: 'title', name: 'title'},
                    {data: 'order', name: 'order'}, // Ensure this matches the field name in the server response
                    {data: 'price', name: 'price'},
                    {
                        data: 'description',
                        name: 'description',
                        render: function(data, type, row) {
                            return type === 'display' ? $('<div/>').html(data).text() : data;
                        },
                        orderable: false,
                        searchable: false
                    },
                    {data: 'action', name: 'action'},
                ],
            });
        });
    </script>
@endpush
