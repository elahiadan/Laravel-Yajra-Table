@extends('layouts.app')

@section('content')
<h1>DataTable By DataTableFunction</h1>
    {{$dataTable->table()}}
@endsection

@push('scripts')
    {{$dataTable->scripts()}}
@endpush