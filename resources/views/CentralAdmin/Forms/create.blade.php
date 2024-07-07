@extends('layouts.app', [
'class' => 'sidebar-mini ',
'namePage' => 'Roles and Permission',
'activePage' => 'Roles-Permission',
'activeNav' => '',
])

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/joboy.css') }}">

<style>
.form-section {
    display: none;
}

.form-section.current {
    display: inline;
}

.striped-rows .row:nth-child(odd) {
    background-color: #f2f2f2;
}

.col-sm {
    margin: auto;
    padding: 1rem 1rem;
}

.row .form-control {
    border-color: #bebebe !important;
    border: 1px solid;
    border-radius: 5px;
}
</style>

 
<div class="content" style="padding:2%">
    
    <div class="card">

    </div>

 
</div>

@endsection