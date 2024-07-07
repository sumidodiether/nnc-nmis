@extends('layouts.BSapp', [
'class' => 'sidebar-mini ',
'namePage' => 'Governance',
'activePage' => 'Governance',
'activeNav' => '',
])


@section('content')
    <h1>Data for Form: {{ $form->name }}</h1>
    <pre>{{ json_encode(json_decode($formData->data), JSON_PRETTY_PRINT) }}</pre>
    <a href="{{ route('form_data.index', $form) }}">Back to Form Data</a>
@endsection