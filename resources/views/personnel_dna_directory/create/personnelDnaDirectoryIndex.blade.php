<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/joboy.css') }}" >
<script src="{{ asset('assets/js/joboy.js') }}"></script> 

@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Personnel Dna Directory',
    'activePage' => 'PersonnelDnaDirectoryIndex',
    'activeNav' => '',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="card">
        <div class="row row-12" style="display:inline-block">
            <div class="card-header">
                <h5 class="title">{{__("Personnel Directory")}}</h5>
                <div>
                    <a class="btn btn-outline-primary" href="{{route('personnelDnaDirectory.create')}}">Add Personnel DNA Directory</a>
                </div>
            </div>
        </div>
        <form>
        @csrf
            <!-- <hr>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputPSGC">PSGC</label>
                    <input type="text" class="form-control" name="inputPSGC" id="inputPSGC" placeholder="PSGC"  >
                </div>
                <div class="form-group col-md-3">
                    <label for="inputRegion">Region</label>
                    <input type="text" class="form-control" name="inputRegion" id="inputRegion" placeholder="Region"  >
                </div>
                <div class="form-group col-md-3">
                    <label for="inputProvince">Province</label>
                    <input type="text" class="form-control" name="inputProvince" id="inputProvince" placeholder="Province"  >
                </div>
                <div class="form-group col-md-3">
                    <label for="inputCM">City/Municipality</label>
                    <input type="text" class="form-control"name="inputCM" id="inputCM" placeholder="City/Municipality" >
                </div>
            </div>
            <hr> -->
            <!-- <div class="form-group col-md-12" style="display:flex;">
                <button type="submit" name="addEquipmentInventory" class="btn btn-outline-primary">Add Equipment Inventory</button>
            </div> -->
        </form>
    </div>
</div>
     
@endsection