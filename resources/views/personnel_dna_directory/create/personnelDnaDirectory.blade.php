<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/joboy.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/diether.css') }}">
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
            </div>
        </div>
        <hr>
        <div class="form-row">
            <div id="tabs" class="d-flex mr-3">
                <div class="tab" data-tab="tab1">NAO</div>
                <div class="tab" data-tab="tab2">NPC</div>
                <div class="tab" data-tab="tab3">BNS</div>
            </div>
        </div>
        <hr>
        <div class="form-row">
            <div id="tab-contents" class="col-md-12">
                <div class="tab-content" id="tab1">
                    <form action="">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputPSGC">PSGC</label>
                                <input type="text" class="form-control" name="inputPSGC" id="inputPSGC"
                                    placeholder="PSGC">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputRegion">Region</label>
                                <input type="text" class="form-control" name="inputRegion" id="inputRegion"
                                    placeholder="Region">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputProvince">Province</label>
                                <input type="text" class="form-control" name="inputProvince" id="inputProvince"
                                    placeholder="Province">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputCM">City/Municipality</label>
                                <input type="text" class="form-control" name="inputCM" id="inputCM"
                                    placeholder="City/Municipality">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group col-md-4" id="totalBarangay"
                            style="display:flex; border-right:1px solid;">
                            <div class="form-group col-md-12">
                                <label for="inputtotalBarangay">Name of Governor/Mayor</label>
                                <input type="text" class="form-control" name="inputtotalBarangay"
                                    id="inputtotalBarangay" placeholder="Name of Governor/Mayor">
                            </div>
                        </div>
                        <hr>
                        <hr>
                        <div class="form-group col-md-12" style="display:flex;">
                            <button type="submit" name="addEquipmentInventory"
                                class="btn btn-outline-primary">Add</button>
                        </div>
                    </form>
                </div>
                <div class="tab-content" id="tab2">Content for Tab 2</div>
                <div class="tab-content" id="tab3">Content for Tab 3</div>
            </div>
        </div>
    </div>
</div>
@endsection