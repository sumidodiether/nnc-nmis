<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/joboy.css') }}">
<script src="{{ asset('assets/js/joboy.js') }}"></script>

@extends('layouts.app', [
'class' => 'sidebar-mini ',
'namePage' => 'Equipment Inventory',
'activePage' => 'EquipmentInventoryIndex',
'activeNav' => '',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="card">
        <div class="row row-12" style="display:inline-block">
            <div class="card-header">
                <h5 class="title">{{__("Equipment Inventory")}}</h5>
                <div>
                    <a class="btn btn-primary" href="{{route('equipmentInventory')}}">Equipments</a>
                </div>
            </div>
        </div>
        <form>
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
            <div>
                <label for="formHB"><b>Height Board (HB)</b></label>
            </div>
            <hr>
            <div style="display:flex;">
                <div class="form-group col-md-4" id="formHB" style="display:flex; border-right:1px solid;">
                    <div class="form-group col-md-6">
                        <label for="inputWHB">Wooden HB</label>
                        <input type="text" class="form-control" id="inputWHB" placeholder="Wooden HB">
                        <label for="inputNonWHB">Non-wooden HB</label>
                        <input type="text" class="form-control" id="inputNonWHB" placeholder="Non-wooden HB">
                        <label for="inputHBNonF">Defective/Non-functional</label>
                        <input type="text" class="form-control" id="inputHBNonF" placeholder="Defective/Non-functional">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputTotalHB">Total HB</label>
                        <input type="text" class="form-control" id="inputTotalHB" placeholder="Total HB">
                        <label for="inputHBpercent">HB% Availability</label>
                        <input type="text" class="form-control" id="inputHBpercent" placeholder="HB% Availability">
                    </div>
                </div>
                <div class="form-group col-md-4" id="formHB" style="display:flex; border-right:1px solid;">
                    <div class="form-group col-md-4">
                        <label for="inputSteelRules">Steel Rules</label>
                        <input type="text" class="form-control" id="inputSteelRules" placeholder="Steel Rules">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputMicrotoise">Microtoise</label>
                        <input type="text" class="form-control" id="inputMicrotoise" placeholder="Microtoise">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputInfantometer">Infantometer</label>
                        <input type="text" class="form-control" id="inputInfantometer" placeholder="Infantometer">
                    </div>
                </div>
                <div class="form-group col-md-4" id="formHB">
                    <div class="form-group col-md-12">
                        <label for="inputHBRemarks">Remarks</label>
                        <input type="text" class="form-control" id="inputHBRemarks" placeholder="Remarks">
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
                        <input type="text" class="form-control" id="inputWSHanging" placeholder="Hanging-type">
                        <label for="inputWSNonF">Defective/Non-functional</label>
                        <input type="text" class="form-control" id="inputWSNonF" placeholder="Defective/Non-functional">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputTotalWS">Total WS</label>
                        <input type="text" class="form-control" id="inputTotalWS" placeholder="Total WS">
                        <label for="inputWSpercent">WS% Availability</label>
                        <input type="text" class="form-control" id="inputWSpercent" placeholder="WS% Availability">
                    </div>
                </div>
                <div class="form-group col-md-4" id="formHB" style="display:flex; border-right:1px solid;">
                    <div class="form-group col-md-6">
                        <label for="inputInfantScale">Infant Scale</label>
                        <input type="text" class="form-control" id="inputInfantScale" placeholder="Infant Scale">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputBeamBalance">Beam Balance</label>
                        <input type="text" class="form-control" id="inputBeamBalance" placeholder="Beam Balance">
                    </div>
                </div>
                <div class="form-group col-md-4" id="formHB">
                    <div class="form-group col-md-12">
                        <label for="inputWSRemarks">Remarks</label>
                        <input type="text" class="form-control" id="inputWSRemarks" placeholder="Remarks">
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
                        <input type="text" class="form-control" id="inputMChild" placeholder="Child">
                        <label for="inputMNonFChild">Defective/Non-functional</label>
                        <input type="text" class="form-control" id="inputMNonFChild"
                            placeholder="Defective/Non-functional">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputTotalChild">Total (Child)</label>
                        <input type="text" class="form-control" id="inputTotalChild" placeholder="Total (Child)">
                        <label for="inputChildpercent">% Availability (Child)</label>
                        <input type="text" class="form-control" id="inputChildpercent"
                            placeholder="% Availability (Child)">
                    </div>
                </div>
                <div class="form-group col-md-4" id="formHB" style="display:flex; border-right:1px solid;">
                    <div class="form-group col-md-6">
                        <label for="inputMAdult">Adult</label>
                        <input type="text" class="form-control" id="inputMAdult" placeholder="Adult">
                        <label for="inputMNonFAdult">Defective/Non-functional</label>
                        <input type="text" class="form-control" id="inputMNonFAdult"
                            placeholder="Defective/Non-functional">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputTotalAdult">Total (Adult)</label>
                        <input type="text" class="form-control" id="inputTotalAdult" placeholder="Total (Adult)">
                        <label for="inputAdultpercent">% Availability (Adult)</label>
                        <input type="text" class="form-control" id="inputAdultpercent"
                            placeholder="% Availability (Adult)">
                    </div>
                </div>
                <div class="form-group col-md-4" id="formHB">
                    <div class="form-group col-md-12">
                        <label for="inputMRemarks">Remarks</label>
                        <input type="text" class="form-control" id="inputMRemarks" placeholder="Remarks">
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group col-md-12" style="display:flex;">
              <div class="form-group col-md-6">
                <label for="inputEISubtotal">Subtotal</label>
                  <input type="text" class="form-control" id="inputEISubtotal" placeholder="Subtotal">
              </div>
              <div class="form-group col-md-6">
                <label for="inputEIGrandTotal">Grand Total</label>
                  <input type="text" class="form-control" id="inputEIGrandTotal" placeholder="Subtotal">
              </div>
            </div>
            <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
        </form>
    </div>
</div>
@endsection