@extends('layouts.BSapp', [
'class' => 'sidebar-mini ',
'namePage' => 'Governance',
'activePage' => 'Governance',
'activeNav' => '',
])


@section('content')
    <h1>Forms</h1>
    <a href="{{ route('forms.create') }}"  class="btn btn-primary">Create New Form</a>
    <ul>
        @foreach($forms as $form)
            <li>
                <a href="{{ route('forms.show', $form) }}" class="btn btn-warning">{{ $form->name }}</a>
                <a href="{{ route('forms.edit', $form) }}"  class="btn btn-primary">Edit</a>
                <form action="{{ route('forms.destroy', $form) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
