
@extends('layouts.CAapp', [
    'namePage' => 'Dashboard',
    'class' =>  'sidebar-mini ',
    'activePage' => 'dashboard',
    'backgroundImage' => asset('now') . "/img/background1.png",
])

 

@section('content')
  <div class="panel-header panel-header-lg">
    <canvas id="bigDashboardChart"></canvas>
  </div>
  <div class="content">
    <p>Central Admin Dashboard</p>
  </div>
@endsection