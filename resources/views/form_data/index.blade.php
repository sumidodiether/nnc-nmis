@extends('layouts.BSapp', [
'class' => 'sidebar-mini ',
'namePage' => 'Governance',
'activePage' => 'Governance',
'activeNav' => '',
])

@section('content')
    <h1>Data for Form: {{ $form->name }}</h1>
    <ul>
        @foreach ($formData as $data)
            <li>
                <a href="{{ route('form_data.show', [$form, $data]) }}">View Data</a>
                <form action="{{ route('form_data.destroy', [$form, $data]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection