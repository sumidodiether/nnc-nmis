@extends('layouts.app', [
'class' => 'sidebar-mini ',
'namePage' => 'Users',
'activePage' => 'users',
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

    <h4>Create account</h4>
    @if(session('status'))
        <div class="alert alert-success">{{session('status')}}</div> 
    @endif
  
    <div>
        <!-- <form action="{{ url('/adminusers/'.$users->id.'/edit') }}"   method="POST"> -->
        <form action="{{ route('CAadmin.edit', $users->id)}}"   method="POST">
        @csrf
        @method('PUT')
        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">First Name:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="Firstname" value="{{$users->Firstname}}"  >
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Middle Name:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="Middlename" value="{{$users->Middlename}}" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Last name:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="Lastname" value="{{$users->Lastname}}"  >
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Region</label> 
                    <select id="loadRegion1" class="form-control" name="Region"  value="{{$users->Region}}" >
                        <option value="428" selected>Region</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Province</label>
                    <select id="loadRegion1" class="form-control" name="Province"  value="{{$users->Province}}" >
                        <option value="1301" selected>Province</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">City/Municipal</label> 
                <select id="loadRegion1" class="form-control" name="city_municipal"  value="{{$users->city_municipal}}" >
                    <option value="1923" selected>city_municipal</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Agency Office/LGU</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="agency_office_lgu" value="{{$users->agency_office_lgu}}"  >
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Division Unit</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"  name="Division_unit" value="{{$users->Division_unit}}"  >
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Designation</label>
                <select class="form-control" id="exampleFormControlSelect1" name="role" value="{{$users->role}}"  >
                @foreach($roles as $roles)
                <option value="{{$roles->id}}">{{$roles->name}}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" name="email" value="{{$users->email}}"  >
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Password</label>
                <input type="password" class="form-control" id="exampleFormControlInput1" name="password" value="{{$users->password}}"  >
            </div>
            <div class="form-group">
                <label for="inputPSGC">Account Status</label>
                <select   class="form-control" name="status" placeholder="Choose...">   
                    <option selected>Choose...</option>
                    <option value="Approved">Approved</option>
                    <option value="Pending">Pending</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>  
    
</div>
</div>

@endsection