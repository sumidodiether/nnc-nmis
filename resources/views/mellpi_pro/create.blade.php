<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/joboy.css') }}" >
<script src="{{ asset('assets/js/joboy.js') }}"></script> 

@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Mellpi Pro',
    'activePage' => 'mellpi_pro',
    'activeNav' => '',
])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="title">{{__(" LGU Profile")}}</h5>
          </div>
          <div class="card-body">
            <form method="post" action="{{ route('mellpi_pro.create') }}" autocomplete="off"
            enctype="multipart/form-data">
              @csrf
              @include('alerts.success')
              <div class="row">
              </div>






              
                
                
                


              <hr class="half-rule"/>
              <div class="card-footer ">
              <button type="submit" class="btn btn-primary btn-round ">{{__('Save')}}</button>
            </div>


            </form>
          </div>
      </div>
    </div>
     
@endsection