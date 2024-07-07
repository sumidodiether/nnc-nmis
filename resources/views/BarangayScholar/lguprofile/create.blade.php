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
'namePage' => ' Mellpi Pro for LGU',
'activePage' => 'profile',
'activeNav' => '',
])

@section('content')
<!-- <div class="panel-header panel-header-sm"></div>  -->
<div class="content" style="margin-top:50px;padding:2%">
    <div class="card" style="border-radius:10px;padding-left:2rem!important;padding-right:1rem!important">
        <div style="display:flex;align-items:center">
            <a href="{{route('BSLGUprofile.index')}}" style="margin-right:15px"><i class="now-ui-icons arrows-1_minimal-left" style="font-size:18px!important;font-weight:bolder!important"></i></a>
            <h4 style="margin-top:18px">FORM B: BARANGAY PROFILE SHEET</h4>
        </div>

        <!-- alerts -->
        @include('layouts.page_template.crud_alert_message')

        <div style="padding:25px">
            <form action="{{ route('BSLGUprofile.store') }}" method="POST">
                @csrf

                <input type="hidden" name="status" value="1">
                <input type="hidden" name="dateCreated" value="05/19/2024">
                <input type="hidden" name="dateUpdates" value="05/19/2024">

                @include('layouts.page_template.location_header')

                <!-- Update create  -->
                 <!-- -added error message  per variable -->
                 <!-- -added value old for history data  -->
                 <!-- -added placeholder sample -->


                <br>
                <div style="display:flex">
                    <!-- Div1 -->
                    <div class="col col-4 col-2">
                        <div class="form-group">
                            <label for="totalPopulation">Total Population:<span style="color:red">*</span></label>
                            <input type="text" class="form-control" placeholder="ex. 100" id="totalPopulation" name="totalPopulation" value="{{ old('totalPopulation') }}">
                            @error('totalPopulation')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="householdWater">No. of household with access to safe
                                water:<span style="color:red">*</span></label>
                            <input type="text" class="form-control" id="householdWater" name="householdWater" 
                            placeholder="ex. 100"  
                            value="{{ old('householdWater') }}">
                            @error('totalPopulation')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="householdToilets">No. of household with sanitary toilets:<span style="color:red">*</span></label>
                            <input type="text" class="form-control" id="householdToilets" name="householdToilets"
                            placeholder="ex. 100" value="{{ old('householdToilets') }}">
                            @error('householdToilets')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="dayCareCenter">No. of Day Care Centers:<span style="color:red">*</span></label>
                            <input type="text" class="form-control" id="dayCareCenter" name="dayCareCenter"
                            placeholder="ex. 2 " value="{{ old('dayCareCenter') }}">
                            @error('dayCareCenter')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="elementary">No. of public elementary schools:<span style="color:red">*</span></label>
                            <input type="text" class="form-control" id="elementary" name="elementary">
                            @error('elementary')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="secondarySchool">No. of public secondary schools:<span style="color:red">*</span></label>
                            <input type="text" class="form-control" id="secondarySchool" name="secondarySchool">
                            @error('secondarySchool')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="healthStations">No. of Barangay Health Stations:<span style="color:red">*</span></label>
                            <input type="text" class="form-control" id="healthStations" name="healthStations">
                            @error('healthStations')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="retailOutlets">No. of retail outlets/sari-sari stores:<span style="color:red">*</span></label>
                            <input type="text" class="form-control" id="retailOutlets" name="retailOutlets">
                            @error('retailOutlets')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="bakeries">No. of bakeries:<span style="color:red">*</span></label>
                            <input type="text" class="form-control" id="bakeries" name="bakeries">
                            @error('bakeries')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="markets">No. of public markets:<span style="color:red">*</span></label>
                            <input type="text" class="form-control" id="markets" name="markets">
                            @error('markets')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="transportTerminals">No. of transport terminals:<span style="color:red">*</span></label>
                            <input type="text" class="form-control" id="transportTerminals" name="transportTerminals">
                            @error('transportTerminals')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="breastfeeding">Percent of Lactating mothers exclusively
                                breastfeeding until the 5th month:<span style="color:red">*</span></label>
                            <input type="text" class="form-control" id="breastfeeding" name="breastfeeding">
                            @error('breastfeeding')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="terrain">Terrain:<span style="color:red">*</span></label>
                            <input type="text" class="form-control" id="terrain" name="terrain">
                            @error('terrain')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="hazards">Hazard:<span style="color:red">*</span></label>
                            <textarea class="form-control" id="hazards" height="800px" style="max-height:380px;height:380px;border: 1px solid lightgray;border-radius:5px" name="hazards"></textarea>
                            @error('hazards')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group" style="max-height:800px">
                            <label for="affectedLGU">LGU/Households affected:<span style="color:red">*</span></label>
                            <textarea class="form-control" id="affectedLGU" style="max-height:380px;height:380px;border: 1px solid lightgray;border-radius:5px" name="affectedLGU"></textarea>
                            @error('affectedLGU')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <!-- div2 -->
                    <div class="col col-8 col-4">
                        <div style="display:flex" class="row">
                            <div class="form-group col">
                                <label for="noHousehold">No. of households:<span style="color:red">*</span></label>
                                <input type="text" class="form-control" id="noHousehold" name="noHousehold">
                                @error('noHousehold')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col">
                                <label for="noPuroks ">No.of SITIOS/PUROKS:<span style="color:red">*</span></label>
                                <input type="text" class="form-control" id="noPuroks " 
                                name="noPuroks">
                                @error('noPuroks')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
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
                                    <label for="exampleFormControlInput1">Estimated:<span style="color:red">*</span></label>
                                </div>
                                <div class="form-group" style="margin-left:10px">
                                    <input type="text" class="form-control" id="populationA"
                                     name="populationA">
                                     @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group" style="margin-left:10px">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" 
                                    name="populationB">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group" style="margin-left:10px">
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                     name="populationC">
                                     @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group" style="margin-left:10px">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" 
                                    name="populationD">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group" style="margin-left:10px">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" 
                                    name="populationE">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group" style="margin-left:10px">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" 
                                     name="populationF">
                                     @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group" style="width:170px">
                                    <label for="exampleFormControlInput1">Actual:<span style="color:red">*</span></label>
                                </div>
                                <div class="form-group" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" 
                                    name="actualA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" 
                                    name="actualB">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" 
                                    name="actualC">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                     name="actualD">
                                     @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" 
                                    name="actualE">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" 
                                    name="actualF">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
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
                                    <label for="exampleFormControlInput1">Normal:<span style="color:red">*</span></label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" 
                                    name="psnormalAAA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                     name="psnormalBAA">
                                     @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" 
                                    name="psnormalCAA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror 
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Underweight:<span style="color:red">*</span></label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" 
                                    name="psunderweightAAA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" 
                                    name="psunderweightBAA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" 
                                    name="psunderweightCAA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Severely Underweight:<span style="color:red">*</span></label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1"  
                                    name="pssevereUnderweightAAA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" 
                                    name="pssevereUnderweightBAA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="pssevereUnderweightCAA">  
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Overweight:<span style="color:red">*</span></label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="psoverweightAAA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="psoverweightBAA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="psoverweightCAA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                            </div>


                            <!-- Obese -->
                            <br>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Normal:<span style="color:red">*</span></label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="psnormalABA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="psnormalBBA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="psnormalCCA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Wasted:<span style="color:red">*</span></label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="pswastedABA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="pswastedBBA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="pswastedCCA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                            </div>

                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Severely Wasted:<span style="color:red">*</span></label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="psseverelyWastedABA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="psseverelyWastedBBA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="psseverelyWastedCCA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                            </div>

                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Overweight:<span style="color:red">*</span></label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="psoverweightABA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="psoverweightBBA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="psoverweightCCA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Obese:<span style="color:red">*</span></label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="psobeseABA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="psobeseBBA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="psobeseCCA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                            </div>
                            <br>


                            <!-- tall -->
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Normal:<span style="color:red">*</span></label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="psnormalAAB">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="psnormalBBB">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="psnormalCCC">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                            </div>

                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Stunted:<span style="color:red">*</span></label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="psstuntedAAB">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="psstuntedBBB">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="psstuntedCCC">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Severely Stunted:<span style="color:red">*</span></label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="pssevereStuntedAAB">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="pssevereStuntedBBB">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="pssevereStuntedCCC">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Tall:<span style="color:red">*</span></label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="pstallAAB">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="pstallBBB">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="pstallCCC">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                            </div>
                        </div>

                        <br>
                        <br>
                        <label><b>Nutrition Status of School Children:</b></label>
                        <div>

                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Normal:<span style="color:red">*</span></label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="scnormalABA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="scnormalBBA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="scnormalCCA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Wasted:<span style="color:red">*</span></label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="scwastedABA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="scwastedBBA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="scwastedCCA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Severely Wasted:<span style="color:red">*</span></label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="scseverelyWastedABA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="scseverelyWastedBBA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="scseverelyWastedCCA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                            </div>

                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Overweight:<span style="color:red">*</span></label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="scoverweightABA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="scoverweightBBA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="scoverweightCCA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Obese:<span style="color:red">*</span></label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="scobeseABA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="scobeseBBA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="scobeseCCA">
                                    @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                            </div>

                            <br>
                            <br>
                            <label><b>Nutrition Status of Pregnant Woman:</b></label>
                            <div>

                                <div style="display:flex;">
                                    <div class="form-group col" style="width:170px">
                                        <label for="exampleFormControlInput1">Normal:<span style="color:red">*</span></label>
                                    </div>
                                    <div class="form-group col" style="margin-left:10px">
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1" name="pwnormalAAA">
                                        @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                    </div>
                                    <div class="form-group col" style="margin-left:10px">
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1" name="pwnormalBAA">
                                        @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                    </div>
                                    <div class="form-group col" style="margin-left:10px">
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1" name="pwnormalCAA">
                                        @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                    </div>
                                </div>
                                <div style="display:flex;">
                                    <div class="form-group col" style="width:170px">
                                        <label for="exampleFormControlInput1">Nutritionally at-risk:<span style="color:red">*</span></label>
                                    </div>
                                    <div class="form-group col" style="margin-left:10px">
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1" name="pwnutritionllyatriskAAA">
                                        @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                    </div>
                                    <div class="form-group col" style="margin-left:10px">
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1" name="pwnutritionllyatriskBAA">
                                        @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                    </div>
                                    <div class="form-group col" style="margin-left:10px">
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1" name="pwnutritionllyatriskCAA">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                    </div>
                                </div>
                                <div style="display:flex;">
                                    <div class="form-group col" style="width:170px">
                                        <label for="exampleFormControlInput1">Overweight:<span style="color:red">*</span></label>
                                    </div>
                                    <div class="form-group col" style="margin-left:10px">
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1" name="pwoverweightAAA">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                    </div>
                                    <div class="form-group col" style="margin-left:10px">
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1" name="pwoverweightBAA">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                    </div>
                                    <div class="form-group col" style="margin-left:10px">
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1" name="pwoverweightCAA">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                    </div>
                                </div>

                                <div style="display:flex;">
                                    <div class="form-group col" style="width:170px">
                                        <label for="exampleFormControlInput1">Obese:<span style="color:red">*</span></label>
                                    </div>
                                    <div class="form-group col" style="margin-left:10px">
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1" name="pwobeseAAA">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                    </div>
                                    <div class="form-group col" style="margin-left:10px">
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1" name="pwobeseBAA">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                    </div>
                                    <div class="form-group col" style="margin-left:10px">
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1" name="pwobeseCAA">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
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
                                    <label for="exampleFormControlInput1">Residential:<span style="color:red">*</span></label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="landAreaResidential">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="remarksResidential">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Commercial:<span style="color:red">*</span></label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="landAreaCommercial">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="remarksCommercial">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Industrial:<span style="color:red">*</span></label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="landAreaIndustrial">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="remarksIndustrial">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Agricultural:<span style="color:red">*</span></label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="landAreaAgricultural">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="remarksAgricultural">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                            </div>
                            <div style="display:flex;">
                                <div class="form-group col" style="width:170px">
                                    <label for="exampleFormControlInput1">Forest Land, Mineral Land, National Park:<span style="color:red">*</span>
                                    </label>
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textarea" class="form-control" id="exampleFormControlInput1" name="landAreaFLMLNP">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group col" style="margin-left:10px">
                                    <input type="textArea" class="form-control" id="exampleFormControlInput1" name="remarksFLMLNP">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
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
                                Malnutrition<span style="color:red">*</span></label>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Training</label>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="Isource">
                            <option value="">Choose...</option> 
                                <option value="NGA">NGA</option>
                                <option value="LGU">LGU</option>
                                <option value="NGO">NGO</option>
                                <option value="Private">Private</option>
                            </select>  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="Iavailreceived">
                            <option value="">Choose...</option> 
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" id="exampleFormControlInput1" name="Idatereceived">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="Ivolumepax">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="Iremarks">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
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
                            <label for="exampleFormControlInput1">1. Pregnant Women<span style="color:red">*</span></label>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Dietary Supplementation</label>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIAsource">
                            <option value="">Choose...</option> 
                                <option value="NGA">NGA</option>
                                <option value="LGU">LGU</option>
                                <option value="NGO">NGO</option>
                                <option value="Private">Private</option>
                            </select>  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIAavailreceived">
                            <option value="">Choose...</option> 
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" id="exampleFormControlInput1" name="IIAdatereceived">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIAvolumepax">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIAremarks">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div style="display:flex;">
                        <div class="col">
                            <label for="exampleFormControlInput1">2. Children 6-23 months<span style="color:red">*</span></label>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Dietary Supplementation</label>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIBsource">
                            <option value="">Choose...</option> 
                                <option value="NGA">NGA</option>
                                <option value="LGU">LGU</option>
                                <option value="NGO">NGO</option>
                                <option value="Private">Private</option>
                            </select>  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIBavailreceived">
                            <option value="">Choose...</option> 
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" id="exampleFormControlInput1" name="IIBdatereceived">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIBvolumepax">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIBremarks">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
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
                                Pregnant Women<span style="color:red">*</span></label>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Commodity</label>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIIAsource">
                            <option value="">Choose...</option> 
                                <option value="NGA">NGA</option>
                                <option value="LGU">LGU</option>
                                <option value="NGO">NGO</option>
                                <option value="Private">Private</option>
                            </select>  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIIAavailreceived">
                            <option value="">Choose...</option> 
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" id="exampleFormControlInput1" name="IIIAdatereceived">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIIAvolumepax">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIIAremarks">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div style="display:flex;">
                        <div class="col">
                            <label for="exampleFormControlInput1">2. Vitamin A Supplementation for children 6-11
                                months<span style="color:red">*</span></label>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Commodity</label>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIIBsource">
                            <option value="">Choose...</option> 
                                <option value="NGA">NGA</option>
                                <option value="LGU">LGU</option>
                                <option value="NGO">NGO</option>
                                <option value="Private">Private</option>
                            </select>  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIIBavailreceived">
                            <option value="">Choose...</option> 
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" id="exampleFormControlInput1" name="IIIBdatereceived">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIIBvolumepax">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIIBremarks">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div style="display:flex;">
                        <div class="col">
                            <label for="exampleFormControlInput1">3. Vitamin A Supplementation for children
                                12-59 months<span style="color:red">*</span></label>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Commodity</label>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIICsource">
                            <option value="">Choose...</option> 
                                <option value="NGA">NGA</option>
                                <option value="LGU">LGU</option>
                                <option value="NGO">NGO</option>
                                <option value="Private">Private</option>
                            </select>  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIICavailreceived">
                            <option value="">Choose...</option> 
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" id="exampleFormControlInput1" name="IIICdatereceived">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIICvolumepax">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIICremarks">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div style="display:flex;">
                        <div class="col">
                            <label for="exampleFormControlInput1">4. Micronutrient Powder for children 6-23
                                months<span style="color:red">*</span></label>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Commodity</label>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIIDsource">
                            <option value="">Choose...</option>  
                                <option value="NGA">NGA</option>
                                <option value="LGU">LGU</option>
                                <option value="NGO">NGO</option>
                                <option value="Private">Private</option>
                            </select>  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIIDavailreceived">
                            <option value="">Choose...</option> 
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" id="exampleFormControlInput1" name="IIIDdatereceived">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIIDvolumepax">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIIDremarks">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div style="display:flex;">
                        <div class="col">
                            <label for="exampleFormControlInput1">5. Weekly Iron-Folic Acic Supplementation for
                                female adolescents in public schools<span style="color:red">*</span></label>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Commodity</label>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIIEsource">
                            <option value="">Choose...</option> 
                                <option value="NGA">NGA</option>
                                <option value="LGU">LGU</option>
                                <option value="NGO">NGO</option>
                                <option value="Private">Private</option>
                            </select>  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIIEavailreceived">
                            <option value="">Choose...</option> 
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" id="exampleFormControlInput1" name="IIIEdatereceived">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIIEvolumepax">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIIEremarks">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div style="display:flex;">
                        <div class="col">
                            <label for="exampleFormControlInput1">6. Weekly Iron-Folic Acic Supplementation for
                                female adolescents in outside the public schools<span style="color:red">*</span></label>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Commodity</label>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIIFsource">                            <option value="">Choose...</option>
                            <option value="">Choose...</option> 
                                <option value="NGA">NGA</option>
                                <option value="LGU">LGU</option>
                                <option value="NGO">NGO</option>
                                <option value="Private">Private</option>
                            </select>  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IIIFavailreceived">
                            <option value="">Choose...</option> 
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" id="exampleFormControlInput1" name="IIIFdatereceived">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIIFvolumepax">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IIIFremarks">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
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
                                salt<span style="color:red">*</span></label>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Dropdown</label>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IVAsource">
                            <option value="">Choose...</option> 
                                <option value="NGA">NGA</option>
                                <option value="LGU">LGU</option>
                                <option value="NGO">NGO</option>
                                <option value="Private">Private</option>
                            </select>  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="IVAavailreceived">
                            <option value="">Choose...</option> 
                            <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" id="exampleFormControlInput1" name="IVAdatereceived">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IVAvolumepax">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="IVAremarks">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
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
                                Risk Reduction Management Plan<span style="color:red">*</span></label>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Training</label>
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="VAsource">
                            <option value="">Choose...</option>
                                <option value="NGA">NGA</option>
                                <option value="LGU">LGU</option>
                                <option value="NGO">NGO</option>
                                <option value="Private">Private</option>
                            </select>  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <select id="loadProvince1" class="form-control" name="VAavailreceived">
                            <option value="">Choose...</option>
                            <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" id="exampleFormControlInput1" name="VAdatereceived">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="VAvolumepax">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="VAremarks">  @error('populationA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
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