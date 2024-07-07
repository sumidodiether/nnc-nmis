
@extends('layouts.BSapp', [
    'namePage' => 'Dashboard',
    'class' =>  'sidebar-mini ',
    'activePage' => 'dashboard',
    'backgroundImage' => asset('now') . "/img/background1.png",
])

 

@section('content')
  <div class="content">
    <p>Barangay Scholar Dashboard</p>
  </div>
@endsection