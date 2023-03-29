@extends('layouts.app')

@section('main')

@if (Session::get('success'))

<div class="container mt-3">
    <div class="alert alert-success alert-dismissible fade-show" role="alert">
        {{Session::get('success')}}
    </div>
</div>
@endif

@if (Session::get('failed'))
<div class="container mt-3">
    <div class="alert alert-success alert-dismissible fade-show" role="alert">
        {{Session::get('failed')}}
    </div>
</div>

@endif

<table class="table">
    <thead class="table-light">
        ...
    </thead>
    <tbody>
        ...
    </tbody>
</table>

<table class="table">
    <thead>
        ...
    </thead>
    <tbody>
        ...
    </tbody>
    <tfoot>
        ...
    </tfoot>
</table>

@endsection