@extends('layouts.app', [
'class' => 'sidebar-mini ',
'namePage' => 'Equipment Inventory',
'activePage' => 'EquipmentInventoryIndex',
'activeNav' => '',
])

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/joboy.css') }}" >
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
        <form>
            <hr>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputPSGC">PSGC</label>
                    <input type="text" class="form-control" id="inputPSGC" placeholder="PSGC" disabled>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputRegion">Region</label>
                    <input type="text" class="form-control" id="inputRegion" placeholder="Region" disabled>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputProvince">Province</label>
                    <input type="text" class="form-control" id="inputProvince" placeholder="Province" disabled>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputCM">City/Municipality</label>
                    <input type="text" class="form-control" id="inputCM" placeholder="City/Municipality" disabled>
                </div>
            </div>
            <hr>
            <div class="form-group col-md-4" id="totalBarangay" style="display:flex; border-right:1px solid;">
                <div class="form-group col-md-6">
                    <label for="inputtotalBarangay">Total No. of Barangay</label>
                    <input type="number" class="form-control" id="inputtotalBarangay" value='0' disabled>
                </div>
            </div>
            <hr>
            <div>
                <label for="formHB"><b>Height Board (HB)</b></label>
            </div>
            <hr>
            <div style="display:flex;">
                <div class="form-group col-md-4" id="formHB" style="display:flex; border-right:1px solid;">
                    <div class="form-group col-md-6">
                        <label for="inputWHB">Wooden HB</label>
                        <input type="text" class="form-control" id="inputWHB" placeholder="Wooden HB" disabled>
                        <label for="inputNonWHB">Non-wooden HB</label>
                        <input type="text" class="form-control" id="inputNonWHB" placeholder="Non-wooden HB" disabled>
                        <label for="inputHBNonF">Defective/Non-functional</label>
                        <input type="text" class="form-control" id="inputHBNonF" placeholder="Defective/Non-functional" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputTotalHB">Total HB</label>
                        <input type="text" class="form-control" id="inputTotalHB" placeholder="Total HB" disabled>
                        <label for="inputHBpercent">HB% Availability</label>
                        <input type="text" class="form-control" id="inputHBpercent" placeholder="HB% Availability" disabled>
                    </div>
                </div>
                <div class="form-group col-md-4" id="formHB" style="display:flex; border-right:1px solid;">
                    <div class="form-group col-md-4">
                        <label for="inputSteelRules">Steel Rules</label>
                        <input type="text" class="form-control" id="inputSteelRules" placeholder="Steel Rules" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputMicrotoise">Microtoise</label>
                        <input type="text" class="form-control" id="inputMicrotoise" placeholder="Microtoise" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputInfantometer">Infantometer</label>
                        <input type="text" class="form-control" id="inputInfantometer" placeholder="Infantometer" disabled>
                    </div>
                </div>
                <div class="form-group col-md-4" id="formHB">
                    <div class="form-group col-md-12">
                        <label for="inputHBRemarks">Remarks</label>
                        <input type="text" class="form-control" id="inputHBRemarks" placeholder="Remarks" disabled>
                    </div>
                </div>
            </div>
            <hr>
            <div>
                <label for="formWS"><b>Weighing Scale (WS)</b></label>
            </div>
            <hr>
            <div style="display:flex;">
                <div class="form-group col-md-4" id="formWS" style="display:flex; border-right:1px solid;">
                    <div class="form-group col-md-6">
                        <label for="inputWSHanging">Hanging-type</label>
                        <input type="text" class="form-control" id="inputWSHanging" placeholder="Hanging-type" disabled>
                        <label for="inputWSNonF">Defective/Non-functional</label>
                        <input type="text" class="form-control" id="inputWSNonF" placeholder="Defective/Non-functional" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="inputWSpercent" disabled>
                    </div>
                </div>
                <div class="form-group col-md-4" id="formHB" style="display:flex; border-right:1px solid;">
                    <div class="form-group col-md-6">
                        <label for="inputInfantScale">Infant Scale</label>
                        <input type="text" class="form-control" id="inputInfantScale" placeholder="Infant Scale" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputBeamBalance">Beam Balance</label>
                        <input type="text" class="form-control" id="inputBeamBalance" placeholder="Beam Balance" disabled>
                    </div>
                </div>
                <div class="form-group col-md-4" id="formHB">
                    <div class="form-group col-md-12">
                        <label for="inputWSRemarks">Remarks</label>
                        <input type="text" class="form-control" id="inputWSRemarks" placeholder="Remarks" disabled>
                    </div>
                </div>
            </div>
            <hr>
            <div>
                <label for="formMUAC"><b>MUAC</b></label>
            </div>
            <hr>
            <div style="display:flex;">
                <div class="form-group col-md-4" id="formMUAC" style="display:flex; border-right:1px solid;">
                    <div class="form-group col-md-6">
                        <label for="inputMChild">Child</label>
                        <input type="text" class="form-control" id="inputMChild" placeholder="Child" disabled>
                        <label for="inputMNonFChild">Defective/Non-functional</label>
                        <input type="text" class="form-control" id="inputMNonFChild"
                            placeholder="Defective/Non-functional" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputTotalChild">Total (Child)</label>
                        <input type="text" class="form-control" id="inputTotalChild" placeholder="Total (Child)" disabled>
                        <label for="inputChildpercent">% Availability (Child)</label>
                        <input type="text" class="form-control" id="inputChildpercent"
                            placeholder="% Availability (Child)" disabled>
                    </div>
                </div>
                <div class="form-group col-md-4" id="formHB" style="display:flex; border-right:1px solid;">
                    <div class="form-group col-md-6">
                        <label for="inputMAdult">Adult</label>
                        <input type="text" class="form-control" id="inputMAdult" placeholder="Adult" disabled>
                        <label for="inputMNonFAdult">Defective/Non-functional</label>
                        <input type="text" class="form-control" id="inputMNonFAdult"
                            placeholder="Defective/Non-functional" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputTotalAdult">Total (Adult)</label>
                        <input type="text" class="form-control" id="inputTotalAdult" placeholder="Total (Adult)" disabled>
                        <label for="inputAdultpercent">% Availability (Adult)</label>
                        <input type="text" class="form-control" id="inputAdultpercent"
                            placeholder="% Availability (Adult)" disabled>
                    </div>
                </div>
                <div class="form-group col-md-4" id="formHB">
                    <div class="form-group col-md-12">
                        <label for="inputMRemarks">Remarks</label>
                        <input type="text" class="form-control" id="inputMRemarks" placeholder="Remarks" disabled>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group col-md-12" style="display:flex;">
                <div class="form-group col-md-6">
                    <label for="inputEISubtotal">Subtotal</label>
                    <input type="text" class="form-control" id="inputEISubtotal" placeholder="Subtotal" disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEIGrandTotal">Grand Total</label>
                    <input type="text" class="form-control" id="inputEIGrandTotal" placeholder="Grand Total" disabled>
                </div>
            </div>
            <div class="form-group col-md-12" style="display:flex;">
                <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
        </form>
    </div>
</div>
@endsection