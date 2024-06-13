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

<div class="panel-header panel-header-sm"></div>
<div class="content" style="padding:2%">
 
    <h4>Roles</h4>
 
<table class="table">
    <thead>
        <tr>
            <th scope="colspan=1">#</th>
            <th scope="col">Role Name </th>
            <th scope="col">Action </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="rowspan=1">1</th>
            <td>Mark</td>
            <td>Mark</td>
            <td>
                <a href="#" class="btn btn-success">edit</a>
                <a href="#" class="btn btn-danger">delete</a>
            </td>
        </tr>
    </tbody>
</table>

<br>
<h4>Permission</h4>


   <div>
        <form action="{{ route('permission.store') }}"   method="POST">
        @csrf
                <div class=" form-row justify-content-end">
            <div class="col-4 d-flex ">
                <input type="text" class="form-control" name="permission" placeholder="Permission">
                <button class="btn btn-primary" type="submit">Add Permission</button>
            </div>
            </div>
        </form>
    </div>  
 

 
</div>
</div>

@endsection