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
    <a href="{{ route('fields.create', $form) }}">Add Field</a>
    <ul>
        @foreach($form->fields as $field)
            <li>
                {{ $field->label }} ({{ $field->type }})
                <a href="{{ route('form_fields.edit', [$form, $field]) }}">Edit</a>
                <form action="{{ route('form_fields.destroy', [$form, $field]) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

 
</div>

@endsection