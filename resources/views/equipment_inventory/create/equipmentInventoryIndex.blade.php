<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/joboy.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/diether.css') }}">
<script src="{{ asset('assets/js/joboy.js') }}"></script>

<style>
.tab {
    text-align: center;
    font-size: 11px;
    border: 1px solid green;
}

.tab.active {
    border-top: 1px solid green;
}
.mainHeader {
    text-align: center;
}

table {
    width: 100%;
    border-collapse: collapse;
}
th, td {
    border: 1px solid #000;
    padding: 8px;
    text-align: left;
}
thead th {
    background-color: #f2f2f2;
}

</style>

@extends('layouts.app', [
'class' => 'sidebar-mini ',
'namePage' => 'Equipment Inventory',
'activePage' => 'EquipmentInventoryIndex',
'activeNav' => '',
])

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/joboy.css') }}">
<script src="{{ asset('assets/js/joboy.js') }}"></script>

<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="card">
        <div class="row row-12" style="display:inline-block">
            <div class="card-header">
                <h5 class="title">{{__("Equipment Inventory")}}</h5>
                <div>
                    <a class="btn btn-outline-primary" href="{{route('equipmentInventory')}}">Add Equipments</a>
                </div>
            </div>
        </div>
        <form action="#" method="POST">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputPSGC">Region</label>
                    <select id="loadRegion1" class="form-control" name="inputRegion">
                        <option selected>Region</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputPSGC">Province</label>
                    <select id="loadProvince1" class="form-control" name="inputProvince">
                        <option selected>Province</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputCM">City/Municipality</label>
                    <select id="loadCity1" class="form-control" name="inputCity">
                        <option selected>City/Municipality</option>
                    </select>
                </div>
            </div>
        </form>
        <div class="form-row" style="border-bottom: 1px solid #ddd;">
            <div id="tabs" class="d-flex mr-3">
                <div class="tab" data-tab="tab1">(HB)</div>
                <div class="tab" data-tab="tab2">(WS)</div>
                <div class="tab" data-tab="tab3">(MUAC)</div>
            </div>
        </div>
        <div class="form-row">
            <div id="tab-contents" class="col-md-12">
                <div class="tab-content" id="tab1">
                    <table id="nutriTable" class="table table-striped table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                                <th><b>10-digit PSGC</b></th>
                                <th><b>City/Municipality</b></th>
                                <th><b>Total No. of Barangay</b></th>
                                <th colspan="8" class="mainHeader">Height Board (HB)</th>
                                <th>HB Remarks</th>
                            </tr>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>Wooden HB</th>
                                <th>Non-Wooden HB</th>
                                <th>Defective</th>
                                <th>Total HB</th>
                                <th>HB% Availability</th>
                                <th colspan="3" class="mainHeader">Others</th>
                                <th></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>Steel Rules</th>
                                <th>Microtoise</th>
                                <th>Infantometer</th>
                                <th></th>
                            </tr>
                        </thead>
                        @foreach ($EquipmentInventory as $equipmentInventory)
                        <tbody>
                            <tr>
                                <td>{{$equipmentInventory->psgccode_id}}</td>
                                <td>{{$equipmentInventory->municipal_id}}</td>
                                <td>{{$equipmentInventory->totalBarangay}}</td>
                                <td>{{$equipmentInventory->woodenHB}}</td>
                                <td>{{$equipmentInventory->nonWoodenHB}}</td>
                                <td>{{$equipmentInventory->defectiveHB}}</td>
                                <td>{{$equipmentInventory->totalHB}}</td>
                                <td>{{$equipmentInventory->availabilityHB}}</td>
                                <td>{{$equipmentInventory->steelRules}}</td>
                                <td>{{$equipmentInventory->microtoise}}</td>
                                <td>{{$equipmentInventory->infantometer}}</td>
                                <td>{{$equipmentInventory->remarksHB}}</td>
                            </tr>
                        </tbody>
                        @endforeach
                        <tfoot>
                            <tr>
                                <td><b></b></td>
                                <td><b>Grand Total</b></td>
                                <td><b>{{$totalBarangay}}</b></td>
                                <td><b>{{$woodenHB}}</b></td>
                                <td><b>{{$nonWoodenHB}}</b></td>
                                <td><b>{{$defectiveHB}}</b></td>
                                <td><b>{{$totalHB}}</b></td>
                                <td><b>{{$availabilityHB}}</b></td>
                                <td><b>{{$steelRules}}</b></td>
                                <td><b>{{$microtoise}}</b></td>
                                <td><b>{{$infantometer}}</b></td>
                                <td><b></b></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="tab-content" id="tab2">
                <table id="nutriTable" class="table table-striped table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                                <th><b>City/Municipality</b></th>
                                <th colspan="6" class="mainHeader">Weighing Scale (WS)</th>
                                <th>WS Remarks</th>
                            </tr>
                            <tr>
                                <th></th>
                                <th>Hanging-type</th>
                                <th>Defective</th>
                                <th>Total WS</th>
                                <th>WS% Availability</th>
                                <th colspan="2" class="mainHeader">Others</th>
                                <th></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>Infant Scale</th>
                                <th>Beam Balance</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($EquipmentInventory as $equipmentInventory)
                            <tr>
                                <td>{{$equipmentInventory->municipal_id}}</td>
                                <td>{{$equipmentInventory->hangingType}}</td>
                                <td>{{$equipmentInventory->defectiveWS}}</td>
                                <td>{{$equipmentInventory->totalWS}}</td>
                                <td>{{$equipmentInventory->availabilityWS}}</td>
                                <td>{{$equipmentInventory->infatScale}}</td>
                                <td>{{$equipmentInventory->beamBalance}}</td>
                                <td>{{$equipmentInventory->remarksWS}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td><b>Grand Total</b></td>
                                <td><b>{{$hangingType}}</b></td>
                                <td><b>{{$defectiveWS}}</b></td>
                                <td><b>{{$totalWS}}</b></td>
                                <td><b>{{$availabilityWS}}</b></td>
                                <td><b>{{$infatScale}}</b></td>
                                <td><b>{{$beamBalance}}</b></td>
                                <td><b></b></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="tab-content" id="tab3">
                <table id="nutriTable" class="table table-striped table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                                <th><b>City/Municipality</b></th>
                                <th colspan="8" class="mainHeader">Mid-Upper Arm Circumference (MUAC) Tapes</th>
                                <th>MUAC Remarks</th>
                            </tr>
                            <tr>
                                <th></th>
                                <th>Child</th>
                                <th>Defect</th>
                                <th>Total (Child)</th>
                                <th>% Availability (Child)</th>
                                <th>Adult</th>
                                <th>Defect</th>
                                <th>Total (Adult)</th>
                                <th>% Availability (Adult)</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($EquipmentInventory as $equipmentInventory)
                            <tr>
                                <td>{{$equipmentInventory->municipal_id}}</td>
                                <td>{{$equipmentInventory->child}}</td>
                                <td>{{$equipmentInventory->defectiveMUAC_child}}</td>
                                <td>{{$equipmentInventory->totalMUAC_Child}}</td>
                                <td>{{$equipmentInventory->availabilityMUAC_child}}</td>
                                <td>{{$equipmentInventory->adults}}</td>
                                <td>{{$equipmentInventory->defectiveMUAC_adults}}</td>
                                <td>{{$equipmentInventory->totalMUAC_adults}}</td>
                                <td>{{$equipmentInventory->availabilityMUAC_adults}}</td>
                                <td>{{$equipmentInventory->remarksMUAC}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td><b>Grand Total</b></td>
                                <td><b>{{$child}}</b></td>
                                <td><b>{{$defectiveMUAC_child}}</b></td>
                                <td><b>{{$totalMUAC_Child}}</b></td>
                                <td><b>{{$availabilityMUAC_child}}</b></td>
                                <td><b>{{$adults}}</b></td>
                                <td><b>{{$defectiveMUAC_adults}}</b></td>
                                <td><b>{{$totalMUAC_adults}}</b></td>
                                <td><b>{{$availabilityMUAC_adults}}</b></td>
                                <td><b></b></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="row row-12">

        </div>
    </div>
</div>
@endsection