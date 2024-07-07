@extends('layouts.BSapp', [
'class' => 'sidebar-mini ',
'namePage' => 'Governance',
'activePage' => 'Governance',
'activeNav' => '',
])

@section('content')


    <div class="row card" style="margin:20px;border-radius:20px">
        <h1>{{ $form->name }}</h1>
        <br>
        <form action="{{ route('form-submissions.store', $form) }}" method="POST">
            @csrf
            @foreach($form->fields as $field)
            <div class="col form-group">
                <label for="{{ $field->name }}">{{ $field->label }}:</label>
                <input type="{{ $field->type }}" class="form-control" name="{{ $field->name }}" required>
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection