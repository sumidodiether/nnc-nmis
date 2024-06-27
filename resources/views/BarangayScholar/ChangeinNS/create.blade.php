<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/joboy.css') }}">

<style>
.form-section {
    display: none;
}

.form-section.current {
    display: inline;
}

.striped-rows .row:nth-child(odd) {
    background-color: #f2f2f2;
}

.col-sm {
    margin: auto;
    padding: 1rem 1rem;
}

.row .form-control {
    border-color: #bebebe !important;
    border: 1px solid;
    border-radius: 5px;
}
</style>

@extends('layouts.BSapp', [
'class' => 'sidebar-mini ',
'namePage' => 'User Profile',
'activePage' => 'profile',
'activeNav' => '',
])


@section('content')

<div class="panel-header panel-header-sm"></div>
<div class="content" style="padding:2%">
    <div class="card">
        <h4>MELLPI PRO FORM B: BARANGAY PROFILE SHEET</h4>
        @if(session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
        @endif

        <div>
            <form action="{{ route('BSLGUprofile.store') }}" method="POST">
            @csrf

                <input type="hidden" name="status" value="1" >
                <input type="hidden" name="dateCreated" value="05/19/2024" >
                <input type="hidden" name="dateUpdates" value="05/19/2024" >
                <!-- header -->
                <div style="display:flex">
                    <div class="form-group col">
                        <label for="exampleFormControlInput1">Barangay:</label>
                        <input type="text" class="form-control" name="barangay_id" value="{{Auth()->user()->barangay}}">
                    </div>
                    <div class="form-group col">
                        <label for="exampleFormControlInput1">Municipality/City:</label>
                        <input type="text" class="form-control" name="municipal_id"
                            value="{{auth()->user()->city_municipal }}">
                    </div>
                    <div class="form-group col">
                        <label for="exampleFormControlInput1">Province:</label>
                        <input type="text" class="form-control" name="province_id" value="{{auth()->user()->Province}}">
                        <input type="hidden" class="form-control" name="region_id" value="{{auth()->user()->Region}}">
                    </div>

                </div>
                <br>
                <div style="display:flex">

                    <div class="form-group col">
                        <label for="exampleFormControlInput1">Date of Monitoring:</label>
                        <input type="date" class="form-control" id="exampleFormControlInput1" name="dateMonitoring">
                    </div>
                    <div class="form-group col">
                        <label for="exampleFormControlInput1">Period Covered:</label>
                        <input type="date" class="form-control" id="exampleFormControlInput1" data-date-format="mm-yyyy"
                            name="periodCovereda">
                    </div>
                    <div class="form-group col">
                        <label for="exampleFormControlInput1">Period Covered:</label>
                        <input type="date" class="form-control" id="exampleFormControlInput1" data-date-format="mm-yyyy"
                            name="periodCoveredb">
                    </div>
                </div>
                <!-- endheader -->
                <br>

                <div style="display:flex">
                    <!-- Div1 -->
                    <div class="col col-4 col-2">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Total Population:</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                name="totalPopulation">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">No. of household with access to safe
                                water:</label>
                            <input type="text" class="form-control" id="exampleFormControlInput2" name="householdWater">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput3">No. of household with sanitary toilets:</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3"
                                name="householdToilets">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">No. of Day Care Centers</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="dayCareCenter">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">No. of public elementary schools:</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="elementary">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">No. of public secondary schools:</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                name="secondarySchool">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">No. of Barangay Health Stations:</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="healthStations">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">No. of retail outlets/sari-sari stores:</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="retailOutlets">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">No. of bakeries:</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="bakeries">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">No. of public markets:</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="markets">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">No. of transport terminals:</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                name="transportTerminals">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Percent of Lactating mothers exclusively
                                breastfeeding
                                until
                                the 5th month:</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="breastfeeding">
                        </div>

                        <div style="display:flex">
                            <div class="form-group col">
                                <label for="exampleFormControlInput1">Hazard:</label>
                                <input class="form-control" id="exampleFormControlInput1" name="hazards"
                                    style="height:100px; border: 1px solid lightgray;border-radius:5px">
                            </div>
                            <div class="form-group col">
                                <label for="exampleFormControlInput1">LGU/Households affected:</label>
                                <input class="form-control" id="exampleFormControlInput1" name="affectedLGU"
                                    style="height:100px; border: 1px solid lightgray;border-radius:5px">
                              
                            </div>
                        </div>
                    </div>
                    <!-- div2 -->
                    <div class="col col-8 col-4">
                        <div style="display:flex" class="row">
                            <div class="form-group col">
                                <label for="exampleFormControlInput1">No. of households:</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    name="noHousehold">
                            </div>
                            <div class="form-group col">
                                <label for="exampleFormControlInput1">No.of SITIOS/PUROKS:</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="noPuroks">
                            </div>
                        </div>
                        <br>
                        <div>
                            <div class="row" style="display:flex">
                                <div class="col ">
                                    <label for="exampleFormControlInput1"><b>Population</b></label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1"><b>6-11mons</b></label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1"><b>6-23mons</b></label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1"><b>12-59mons</b></label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1"><b>0-59mons</b></label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1"><b>Pregnant</b></label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1"><b>Lactating</b></label>
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group" style="width:170px">
                                    <label for="exampleFormControlInput1">Estimated: </label>
                                </div>
                                <div class="form-group" style="margin-left:10px">
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        name="populationA">
                                </div>
                                <div class="form-group" style="margin-left:10px">
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        name="populationB">
                                </div>
                                <div class="form-group" style="margin-left:10px">
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        name="populationC">
                                </div>
                                <div class="form-group" style="margin-left:10px">
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        name="populationD">
                                </div>
                                <div class="form-group" style="margin-left:10px">
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        name="populationE">
                                </div>
                                <div class="form-group" style="margin-left:10px">
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        name="populationF">
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group" style="width:170px">
                                    <label for="exampleFormControlInput1">Actual: </label>
                                </div>
                                <div class="form-group" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="actualA">
                                </div>
                                <div class="form-group" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="actualB">
                                </div>
                                <div class="form-group" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="actualC">
                                </div>
                                <div class="form-group" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="actualD">
                                </div>
                                <div class="form-group" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="actualE">
                                </div>
                                <div class="form-group" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="actualF">
                                </div>
                            </div>
                        </div>
                        <br>
                        <label><b>Nutrition Status of Preschool Children:</b></label>
                        <div>
                            <div style="display:flex" class="row">
                                <div class="  col">
                                    <label for="exampleFormControlInput1"></label>
                                </div>
                                <div class=" col">
                                    <label for="exampleFormControlInput1">Yr: </label>
                                </div>
                                <div class=" col">
                                    <label for="exampleFormControlInput1">Yr: </label>
                                </div>
                                <div class=" col">
                                    <label for="exampleFormControlInput1">Yr: </label>
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Normal: </label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="psnormalAAA">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="psnormalBAA">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="psnormalCAA">
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Underweight: </label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="psunderweightAAA">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="psunderweightBAA">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="psunderweightCAA">
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Severely Underweight: </label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="pssevereUnderweightAAA">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="pssevereUnderweightBAA">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="pssevereUnderweightCAA">
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Overweight: </label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="psoverweightAAA">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="psoverweightBAA">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="psoverweightCAA">
                                </div>
                            </div>


                            <!-- Obese -->
                            <br>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Normal: </label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="psnormalABA">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="psnormalBBA">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="psnormalCCA">
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Wasted: </label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="pswastedABA">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="pswastedBBA">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="pswastedCCA">
                                </div>
                            </div>

                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Severely Wasted: </label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="psseverelyWastedABA">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="psseverelyWastedBBA">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="psseverelyWastedCCA">
                                </div>
                            </div>

                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Overweight: </label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="psoverweightABA">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="psoverweightBBA">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="psoverweightCCA">
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Obese: </label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="psobeseABA">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="psobeseBBA">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="psobeseCCA">
                                </div>
                            </div>
                            <br>


                            <!-- tall -->
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Normal: </label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="psnormalAAB">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="psnormalBBB">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="psnormalCCC">
                                </div>
                            </div>

                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Stunted: </label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="psstuntedAAB">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="psstuntedBBB">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="psstuntedCCC">
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Severely Stunted: </label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="pssevereStuntedAAB">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="pssevereStuntedBBB">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="pssevereStuntedCCC">
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Tall: </label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="pstallAAB">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="pstallBBB">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="pstallCCC">
                                </div>
                            </div>
                        </div>

                        <br>
                        <br>
                        <label><b>Nutrition Status of School Children:</b></label>
                        <div>

                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Normal: </label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="scnormalABA">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="scnormalBBA">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="scnormalCCA">
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Wasted: </label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="scwastedABA">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="scwastedBBA">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="scwastedCCA">
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Severely Wasted: </label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="scseverelyWastedABA">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="scseverelyWastedBBA">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="scseverelyWastedCCA">
                                </div>
                            </div>

                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Overweight: </label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="scoverweightABA">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="scoverweightBBA">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="scoverweightCCA">
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Obese: </label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="scobeseABA">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="scobeseBBA">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="scobeseCCA">
                                </div>
                            </div>

                            <br>
                            <br>
                            <label><b>Nutrition Status of Pregnant Woman:</b></label>
                            <div>

                                <div style="display:flex;">
                                    <div class="form-group col" style="width:170px">
                                        <label for="exampleFormControlInput1">Normal: </label>
                                    </div>
                                    <div class="form-group col" style="margin-left:10px">
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                            name="pwnormalAAA">
                                    </div>
                                    <div class="form-group col" style="margin-left:10px">
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                            name="pwnormalBAA">
                                    </div>
                                    <div class="form-group col" style="margin-left:10px">
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                            name="pwnormalCAA">
                                    </div>
                                </div>
                                <div style="display:flex;">
                                    <div class="form-group col" style="width:170px">
                                        <label for="exampleFormControlInput1">Nutritionally at-risk: </label>
                                    </div>
                                    <div class="form-group col" style="margin-left:10px">
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                            name="pwnutritionllyatriskAAA">
                                    </div>
                                    <div class="form-group col" style="margin-left:10px">
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                            name="pwnutritionllyatriskBAA">
                                    </div>
                                    <div class="form-group col" style="margin-left:10px">
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                            name="pwnutritionllyatriskCAA">
                                    </div>
                                </div>
                                <div style="display:flex;">
                                    <div class="form-group col" style="width:170px">
                                        <label for="exampleFormControlInput1">Overweight: </label>
                                    </div>
                                    <div class="form-group col" style="margin-left:10px">
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                            name="pwoverweightAAA">
                                    </div>
                                    <div class="form-group col" style="margin-left:10px">
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                            name="pwoverweightBAA">
                                    </div>
                                    <div class="form-group col" style="margin-left:10px">
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                            name="pwoverweightCAA">
                                    </div>
                                </div>

                                <div style="display:flex;">
                                    <div class="form-group col" style="width:170px">
                                        <label for="exampleFormControlInput1">Obese: </label>
                                    </div>
                                    <div class="form-group col" style="margin-left:10px">
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                            name="pwobeseAAA">
                                    </div>
                                    <div class="form-group col" style="margin-left:10px">
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                            name="pwobeseBAA">
                                    </div>
                                    <div class="form-group col" style="margin-left:10px">
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                            name="pwobeseCAA">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <br>
                        <br>
                        <div>
                            <div style="display:flex">
                                <div class="form-group col">
                                    <label for="exampleFormControlInput1"><b>Land use Classification</b></label>
                                </div>
                                <div class="form-group col">
                                    <label for="exampleFormControlInput1">land Area</label>
                                </div>
                                <div class="form-group col">
                                    <label for="exampleFormControlInput1">Remarks</label>
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Residential: </label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="landAreaResidential">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="remarksResidential">
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Commercial: </label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="landAreaCommercial">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="remarksCommercial">
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Industrial: </label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="landAreaIndustrial">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="remarksIndustrial">
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Agricultural: </label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="landAreaAgricultural">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="remarksAgricultural">
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Forest Land, Mineral Land, National Park:
                                    </label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                        name="landAreaFLMLNP">
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textArea" class="form-control" id="exampleFormControlInput1"
                                        name="remarksFLMLNP">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <br>
                <br>
                <label><b>INTERVENTION WITH ACTION LINES FROM NGA/NEW STANDARDS:</b></label>
                <div>
                    <div style="display:flex">
                        <div class="col">
                            <label for="exampleFormControlInput1"><b>Intervention</b></label>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Type</label>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Source</label>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Available Received</label>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Date Received</label>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Volume No. of Pax</label>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Remarks</label>
                        </div>
                    </div>
                    <!-- I. -->
                    <div style="display:flex;">
                        <div class="col">
                            <label for="exampleFormControlInput1">I. Philippine Integrated Managements of Acute
                                Malnutrition</label>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Training</label>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="Isource">
                                <option value="NGA">NGA</option>
                                <option value="LGU">LGU</option>
                                <option value="NGO">NGO</option>
                                <option value="Private">Private</option>
                            </select>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="Iavailreceived">
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" id="exampleFormControlInput1" name="Idatereceived">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="Ivolumepax">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="Iremarks">
                        </div>
                    </div>
                    <!-- II. -->
                    <br>
                    <div style="display:flex;">
                        <div class="col">
                            <label for="exampleFormControlInput1">II. National Dietary Supplementation
                                Program</label>
                        </div>
                        <div class="col">

                        </div>
                        <div class="col">

                        </div>
                        <div class="col">

                        </div>
                        <div class="col">


                        </div>
                        <div class="col">

                        </div>
                    </div>
                    <div style="display:flex;">
                        <div class="col">
                            <label for="exampleFormControlInput1">1. Pregnant Women</label>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Dietary Supplementation</label>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIAsource">
                                <option value="NGA">NGA</option>
                                <option value="LGU">LGU</option>
                                <option value="NGO">NGO</option>
                                <option value="Private">Private</option>
                            </select>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIAavailreceived">
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" id="exampleFormControlInput1"
                                name="IIAdatereceived">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIAvolumepax">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIAremarks">
                        </div>
                    </div>
                    <br>
                    <div style="display:flex;">
                        <div class="col">
                            <label for="exampleFormControlInput1">2. Children 6-23 months</label>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Dietary Supplementation</label>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIBsource">
                                <option value="NGA">NGA</option>
                                <option value="LGU">LGU</option>
                                <option value="NGO">NGO</option>
                                <option value="Private">Private</option>
                            </select>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIBavailreceived">
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" id="exampleFormControlInput1"
                                name="IIBdatereceived">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIBvolumepax">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIBremarks">
                        </div>
                    </div>
                    <!-- III. -->
                    <br>
                    <div style="display:flex;">
                        <div class="col">
                            <label for="exampleFormControlInput1">III. Micronutrient Supplementation</label>
                        </div>
                        <div class="col">

                        </div>
                        <div class="col">

                        </div>
                        <div class="col">

                        </div>
                        <div class="col">


                        </div>
                        <div class="col">

                        </div>
                    </div>
                    <div style="display:flex;">
                        <div class="col">
                            <label for="exampleFormControlInput1">1. Iron-folic Acid Supplementation for
                                Pregnant Women</label>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Commodity</label>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIIAsource">
                                <option value="NGA">NGA</option>
                                <option value="LGU">LGU</option>
                                <option value="NGO">NGO</option>
                                <option value="Private">Private</option>
                            </select>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIIAavailreceived">
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" id="exampleFormControlInput1"
                                name="IIIAdatereceived">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIIAvolumepax">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIIAremarks">
                        </div>
                    </div>
                    <div style="display:flex;">
                        <div class="col">
                            <label for="exampleFormControlInput1">2. Vitamin A Supplementation for children 6-11
                                months</label>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Commodity</label>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIIBsource">
                                <option value="NGA">NGA</option>
                                <option value="LGU">LGU</option>
                                <option value="NGO">NGO</option>
                                <option value="Private">Private</option>
                            </select>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIIBavailreceived">
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" id="exampleFormControlInput1"
                                name="IIIBdatereceived">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIIBvolumepax">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIIBremarks">
                        </div>
                    </div>
                    <div style="display:flex;">
                        <div class="col">
                            <label for="exampleFormControlInput1">3. Vitamin A Supplementation for children
                                12-59 months</label>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Commodity</label>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIICsource">
                                <option value="NGA">NGA</option>
                                <option value="LGU">LGU</option>
                                <option value="NGO">NGO</option>
                                <option value="Private">Private</option>
                            </select>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIICavailreceived">
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" id="exampleFormControlInput1"
                                name="IIICdatereceived">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIICvolumepax">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIICremarks">
                        </div>
                    </div>
                    <div style="display:flex;">
                        <div class="col">
                            <label for="exampleFormControlInput1">4. Micronutrient Powder for children 6-23
                                months</label>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Commodity</label>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIIDsource">
                                <option value="NGA">NGA</option>
                                <option value="LGU">LGU</option>
                                <option value="NGO">NGO</option>
                                <option value="Private">Private</option>
                            </select>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIIDavailreceived">
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" id="exampleFormControlInput1"
                                name="IIIDdatereceived">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIIDvolumepax">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIIDremarks">
                        </div>
                    </div>
                    <div style="display:flex;">
                        <div class="col">
                            <label for="exampleFormControlInput1">5. Weekly Iron-Folic Acic Supplementation for
                                female adolescents in public schools</label>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Commodity</label>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIIEsource">
                                <option value="NGA">NGA</option>
                                <option value="LGU">LGU</option>
                                <option value="NGO">NGO</option>
                                <option value="Private">Private</option>
                            </select>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIIEavailreceived">
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" id="exampleFormControlInput1"
                                name="IIIEdatereceived">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIIEvolumepax">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIIEremarks">
                        </div>
                    </div>
                    <div style="display:flex;">
                        <div class="col">
                            <label for="exampleFormControlInput1">6. Weekly Iron-Folic Acic Supplementation for
                                female adolescents in outside the public schools</label>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Commodity</label>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIIFsource">
                                <option value="NGA">NGA</option>
                                <option value="LGU">LGU</option>
                                <option value="NGO">NGO</option>
                                <option value="Private">Private</option>
                            </select>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIIFavailreceived">
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" id="exampleFormControlInput1"
                                name="IIIFdatereceived">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIIFvolumepax">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIIFremarks">
                        </div>
                    </div>

                    <!-- IV. -->
                    <br>
                    <div style="display:flex;">
                        <div class="col">
                            <label for="exampleFormControlInput1">IV. Mandatory Food Fortification</label>
                        </div>
                        <div class="col">

                        </div>
                        <div class="col">

                        </div>
                        <div class="col">

                        </div>
                        <div class="col">


                        </div>
                        <div class="col">

                        </div>
                    </div>
                    <div style="display:flex;">
                        <div class="col">
                            <label for="exampleFormControlInput1">1. Retail outlets selling adequately iodized
                                salt</label>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Dropdown</label>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IVAsource">
                                <option value="NGA">NGA</option>
                                <option value="LGU">LGU</option>
                                <option value="NGO">NGO</option>
                                <option value="Private">Private</option>
                            </select>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IVAavailreceived">
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" id="exampleFormControlInput1"
                                name="IVAdatereceived">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IVAvolumepax">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IVAremarks">
                        </div>
                    </div>

                    <!-- V. -->
                    <br>
                    <div style="display:flex;">
                        <div class="col">
                            <label for="exampleFormControlInput1">V. Nuitrition-in-Emergencies</label>
                        </div>
                        <div class="col">

                        </div>
                        <div class="col">

                        </div>
                        <div class="col">

                        </div>
                        <div class="col">


                        </div>
                        <div class="col">

                        </div>
                    </div>
                    <div style="display:flex;">
                        <div class="col">
                            <label for="exampleFormControlInput1">1. NIEM Plan integrated in the local Disaster
                                Risk Reduction Management Plan</label>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Training</label>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="VAsource">
                                <option value="NGA">NGA</option>
                                <option value="LGU">LGU</option>
                                <option value="NGO">NGO</option>
                                <option value="Private">Private</option>
                            </select>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="VAavailreceived">
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" id="exampleFormControlInput1" name="VAdatereceived">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="VAvolumepax">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="VAremarks">
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top:30px;margin-right:20px;justify-content: flex-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

@endsection