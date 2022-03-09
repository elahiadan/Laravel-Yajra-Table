@extends('layouts.app')

@section('content')
<div class="container">
    <h1>DataTable By AJAX</h1>
    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>URL</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
</div>
@endsection

@push('scripts')
<script>
    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            export: true,
            ajax: "{!! route('datatables.data') !!}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'url',
                    name: 'url'
                },
                {
                    data: 'action',
                    name: 'action'
                },
            ]
        });
    });
</script>
<script>
    function hello(a) {
        alert(a);
    }
</script>

@endpush