@extends('layouts.app', [
'class' => 'sidebar-mini ',
'namePage' => 'Roles',
'activePage' => 'roles',
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

    <h4>Roles: {{$role->name}} </h4>
    <div>
        <form action="{{ url('roles/'.$role->id.'/give-permission') }}" method="POST">
            @csrf
            @method('PUT')
            <div>
            <br>
            <label class="form-check-label" for="exampleRadios2" style="font-size:15px!important">Permission</label>
            <br>
            <br>
            <div class="d-flex flex-wrap">
           
                @foreach($permissions as $permissions)
              
                    <div class="col-sm-2" style="margin-top:5px;margin-bottom:5px">
                        <input  class="form-check-input" 
                                type="checkbox" name="permission[]"                                                                                                             
                                style="font-size:10px!important" 
                                value="{{$permissions->name}}" 
                                {{in_array($permissions->id,$rolePermissions) ? 'checked':''}}
                                />
                        <label class="form-check-label" for="exampleRadios2" style="font-size:15px!important">
                            {{$permissions->name}}
                        </label>
                    </div>
                @endforeach
                </div>
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </form>
    </div>
</div>
</div>

@endsection                                