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

    <h4>Roles</h4>
    @if(session('status'))
        <div class="alert alert-success">{{session('status')}}</div> 
    @endif
    <div>
        <form action="{{ route('roles.store') }}" method="POST">
            @csrf
            <div class=" form-row justify-content-end">
                <div class="col-4 d-flex ">
                    <input type="text" class="form-control" name="role" placeholder="Role">
                    <button class="btn btn-primary" type="submit">Add role</button>
                </div>
            </div>
        </form>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="colspan=1">#</th>
                <th scope="col">Role Name </th>
                <th scope="col">Code Name </th>
                <th scope="col">Date_Created </th>
                <th scope="col">Action </th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $roles)
            <tr>
                <th scope="rowspan=1">{{$roles->id}}</th>
                <td>{{$roles->name}}</td>
                <td>{{$roles->codename}}</td>
                <td>{{$roles->created_at}}</td>
                <td class="d-flex">

                    <a href="{{url('/roles/'.$roles->id.'/give-permission')}}" class="btn btn-primary" style="margin-right:10px">Add/Edit Role Permission</a>
                    <button type="button" class="btn btn-primary"  style="margin-right:10px" data-toggle="modal"
                        data-target="#exampleModals{{$roles->id}}">
                        edit
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModals{{$roles->id}}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <form action="{{ route('roles.update',$roles->id )}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit data</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Role name: </label>
                                            <input type="text" class="form-control" name="Role"
                                                id="formGroupExampleInput" placeholder="{{$roles->name}}">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary"
                                            style="margin-left:10px">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <form action="{{ route('roles.destroy', $roles->id) }}" method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this item?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

@endsection