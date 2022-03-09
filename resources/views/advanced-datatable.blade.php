@extends('layouts.app')

@section('content')
<h1>DataTable By DataTableFunction</h1>
{{$dataTable->table()}}
@endsection

@push('scripts')
<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>
{{$dataTable->scripts()}}


<script>
function hello(id) {
    alert(id);
}
</script>
@endpush