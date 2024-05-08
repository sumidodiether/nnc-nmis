<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/joboy.css') }}" >
<script src="{{ asset('assets/js/joboy.js') }}"></script> 

@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'lncFunction',
    'activePage' => 'lncFunction',
    'activeNav' => '',
])

@section('content')
  <div class="panel-header panel-header-sm"> 
  </div> 
  <div class="content">
    <div class="card">
      <div class="row-md-12" style="display:inline-block">
        <div class="card-header">
          <h5 class="title">{{__(" LNC Functional Provincial")}}</h5>
        </div> 
      </div>
      <div class="row row-md-12" >
        <form class="form-floating">
            <input type="email" class="form-control is-invalid" id="floatingInputInvalid" placeholder="name@example.com" value="test@example.com">
            <label for="floatingInputInvalid">Invalid input</label>
        </form>
      </div>
    </div>
  </div>
     
@endsection