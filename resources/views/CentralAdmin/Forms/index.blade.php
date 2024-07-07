@extends('layouts.CAapp', [
'class' => 'sidebar-mini ',
'namePage' => 'Forms',
'activePage' => 'forms',
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
 
    <h1>Forms</h1>
    <a href="{{ route('forms.create') }}" class="btn btn-primary">Create Form</a>
    <ul>
        @foreach($forms as $form)
            <li>
                <a href="{{ route('forms.show', $form) }}">{{ $form->name }}</a>
                <a href="{{ route('forms.edit', $form) }}" class="btn btn-warning" style="margin-left: 30px ">Edit</a>
                <form action="{{ route('forms.destroy', $form) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
 
</div>
</div>

@endsection