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
  
<h1>{{ $form->name }}</h1>
<h1>Add Field to {{ $form->name }}</h1>
    <form action="{{ route('form_fields.store', $form) }}" method="POST">
        @csrf
        <div>
            <label for="label">Field Label:</label>
            <input type="text" id="label" name="label">
        </div>
        <div>
            <label for="type">Field Type:</label>
            <select id="type" name="type">
                <option value="text">Text</option>
                <option value="textarea">Textarea</option>
                <option value="select">Select</option>
                <option value="radio">Radio</option>
                <option value="checkbox">Checkbox</option>
            </select>
        </div>
        <div>
            <label for="options">Options (comma separated):</label>
            <input type="text" id="options" name="options">
        </div>
        <button type="submit">Add Field</button>
    </form>
</div>

@endsection