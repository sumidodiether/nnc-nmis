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
       <div style="display:flex; align-items:center;">
       <a href="{{route('lncmanagement.index')}}" class="btn btn-primary">Back</a>
        <label style="font-size:20px;color:black;margin-left:10px"><b>EDIT MELLPI PRO FORM B 1a: BARANGAY NUTRITION MONITORING</b></label>
       </div>
        <br>

        @if(session('status'))
            <div class="alert alert-success">{{session('status')}}</div>
        @endif

        <div>
            <form action="{{ route('lncmanagement.update', $lncbarangay->id) }}" method="POST">
                @csrf
                @method('PUT')

                <input type="hidden" name="status"  value="{{$lncbarangay->status}}">
                <input type="hidden" name="dateCreated" value="{{$lncbarangay->dateCreated}}">
                <input type="hidden" name="dateUpdates" value="{{$lncbarangay->dateUpdates}}">
                <input type="hidden" name="user_id" value="{{$lncbarangay->user_id}}">
                <!-- header -->
                <div style="display:flex">
                    <div class="form-group col">
                        <label for="exampleFormControlInput1">Barangay:</label>
                        <input type="text" class="form-control" name="barangay_id" value="{{$lncbarangay->barangay_id}}">
                    </div>
                    <div class="form-group col">
                        <label for="exampleFormControlInput1">Municipality/City:</label>
                        <input type="text" class="form-control" name="municipal_id"
                            value="{{$lncbarangay->municipal_id}}">
                    </div>
                    <div class="form-group col">
                        <label for="exampleFormControlInput1">Province:</label>
                        <input type="text" class="form-control" name="province_id"  value="{{$lncbarangay->province_id}}">
                        <input type="hidden" class="form-control" name="region_id" value="{{$lncbarangay->region_id}}">
                    </div>

                </div>
                <br>
                <div style="display:flex">

                    <div class="form-group col">
                        <label for="exampleFormControlInput1">Date of Monitoring:</label>
                        <input type="date" class="form-control" id="exampleFormControlInput1" name="dateMonitoring" value="{{$lncbarangay->dateMonitoring}}">
                    </div>
                    <div class="form-group col">
                        <label for="exampleFormControlInput1">Period Covered:</label>
                        <input type="date" class="form-control" id="exampleFormControlInput1" data-date-format="mm-yyyy"
                            name="periodCovereda" value="{{$lncbarangay->periodCovereda}}">
                    </div>
                    <div class="form-group col">
                        <label for="exampleFormControlInput1">Period Covered:</label>
                        <input type="date" class="form-control" id="exampleFormControlInput1" data-date-format="mm-yyyy"
                            name="periodCoveredb" value="{{$lncbarangay->periodCoveredb}}">
                    </div>
                </div>
                <!-- endheader -->
                <br>
                <br>
                <div>
                    <!-- endtablehearder -->
                    <div class="row" style="display:flex;background-color:#F5F5F5;padding:10px;border-radius:5px;justify-content:center; text-align: center;" >
                        <div class="col-2 justify-content-center">
                            <label for="exampleFormControlInput1"><b>ELEMENTS</b></label>
                        </div>
                        <div class="col" style="padding:0px!important">
                            <div>
                                <label for="exampleFormControlInput1"><b>PERFORMANCE LEVEL</b></label>
                            </div>
                            <div style="display:flex" style="justify-content:center!important">
                                <div class="col">
                                    <label for="exampleFormControlInput1"><b>1</b></label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1"><b>2</b></label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1"><b>3</b></label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1"><b>4</b></label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1"><b>5</b></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-1" style="padding:0px!important">
                            <label for="exampleFormControlInput1"><b>DOCUMENT SOURCE</b></label>
                        </div>
                        <div class="col-1">
                            <label for="exampleFormControlInput1"><b>RATING</b></label>
                        </div>
                        <div class="col-1">
                            <label for="exampleFormControlInput1"><b>REMARKS/EVIDENCE</b></label>
                        </div>
                    </div>
                    <br>
                    <!-- endtablehearder -->

                    <!-- 4a -->
                    <div class="row" style="display:flex">
                        <div style="display:flex" class="col-2 justify-content-center">
                            <div>
                                <label for="exampleFormControlInput1"><b>4a</b></label>
                            </div>
                            <div class="col">
                                <label for="exampleFormControlInput1">Nutrition Assessment</label>
                            </div>
                        </div>
                        <div class="col" style="padding:0px!important">
                            <div style="display:flex" style="justify-content:center!important">
                                <div class="col">
                                    <label for="exampleFormControlInput1">
                                    Updated Operation
                                    Timbang Plus
                                    reports available
                                    but not
                                    consolidated</label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">
                                    Only updated and
                                    consolidated OPT Plus reports are available</label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">
                                    Updated and consolidated OPT Plus reports available and school weighing reports as applicable and reported during BNC meetings</label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">
                                    OPT Plus and school weighing reports (as applicable) used to prepare nutrition situation report</label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">
                                    Nutrition situation
                                    prepared and used in the formulation of the Barangay Nutrition Action Plan</b></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-1" style="padding:0px!important">
                            <label for="exampleFormControlInput1">
                            Consolidated OPT
                            Plus reports
                            School weighing
                            reports
                            Nutrition Situation
                            Barangay Nutrition
                            Action Plan</label>
                        </div>
                        <div class="col-1">
                            <select id="loadProvince1" class="form-control" name="rating4a">
                                <option value="1" {{ old('rating4a', $lncbarangay->rating4a) == '1' ? 'selected' : '' }}>1</option>
                                <option value="2" {{ old('rating4a', $lncbarangay->rating4a) == '2' ? 'selected' : '' }}>2</option>
                                <option value="3" {{ old('rating4a', $lncbarangay->rating4a) == '3' ? 'selected' : '' }}>3</option>
                                <option value="4" {{ old('rating4a', $lncbarangay->rating4a) == '4' ? 'selected' : '' }}>4</option>
                                <option value="5" {{ old('rating4a', $lncbarangay->rating4a) == '5' ? 'selected' : '' }}>5</option>
                            </select>
                        </div>
                        <div class="col-1">
                            <textarea type="text" name="remarks4a"  
                                style="background-color:#F5F5F5;border:0px;font-size:12px;width:inherit;max-height:120px;height:120px">{{ old('remarks4a', $lncbarangay->remarks4a) }}</textarea>
                        </div>
                    </div>

                    <!-- 4b -->
                    <br>
                    <div class="row" style="display:flex">
                        <div style="display:flex" class="col-2 justify-content-center">
                            <div>
                                <label for="exampleFormControlInput1"><b>4b</b></label>
                            </div>
                            <div class="col">
                                <label for="exampleFormControlInput1">Planning</label>
                            </div>
                        </div>
                        <div class="col" style="padding:0px!important">
                            <div style="display:flex" style="justify-content:center!important">
                                <div class="col">
                                    <label for="exampleFormControlInput1">Barangay Nutrition Action Plan is formulated but not adopted through a resolution</label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">BNAP is formulated
                                        and adopted
                                        through a
                                        resolution with
                                        allocation of funds</label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">BNAP formulated
                                        and adopted
                                        through a
                                        resolution with
                                        allocation of fund adopts a three year format</label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">BNAP formulated
                                        in Level 3 is 
                                        reviewed and
                                        updated at least
                                        once a year</label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">PAPs in the BNAP is integrated in the Barangay Development Plan</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-1" style="padding:0px!important">
                            <label for="exampleFormControlInput1">Barangay Nutrition
                                        Action Plan
                                        Resolutions
                                        Minutes of Meeting
                                        Barangay
                                        Development Plan</label>
                        </div>
                        <div class="col-1">
                            <select id="loadProvince1" class="form-control" name="rating4b">
                                <option value="1" {{ old('rating4b', $lncbarangay->rating4b) == '1' ? 'selected' : '' }}>1</option>
                                <option value="2" {{ old('rating4b', $lncbarangay->rating4b) == '2' ? 'selected' : '' }}>2</option>
                                <option value="3" {{ old('rating4b', $lncbarangay->rating4b) == '3' ? 'selected' : '' }}>3</option>
                                <option value="4" {{ old('rating4b', $lncbarangay->rating4b) == '4' ? 'selected' : '' }}>4</option>
                                <option value="5" {{ old('rating4b', $lncbarangay->rating4b) == '5' ? 'selected' : '' }}>5</option>
                            </select>
                        </div>
                        <div class="col-1">
                            <textarea type="text" name="remarks4b"  
                                style="background-color:#F5F5F5;border:0px;font-size:12px;width:inherit;max-height:120px;height:120px">{{ old('remarks4b', $lncbarangay->remarks4b) }}</textarea>
                        </div>
                    </div>

                    <!-- 4c -->
                    <br>
                    <div class="row" style="display:flex">
                        <div style="display:flex" class="col-2 justify-content-center">
                            <div>
                                <label for="exampleFormControlInput1"><b>4c</b></label>
                            </div>
                            <div class="col">
                                <label for="exampleFormControlInput1">Presence of nutrition-related concerns in the Annual Investment Program</label>
                            </div>
                        </div>
                        <div class="col" style="padding:0px!important">
                            <div style="display:flex" style="justify-content:center!important">
                                <div class="col">
                                    <label for="exampleFormControlInput1">At least one nutrition-related PAP integrated in the Annual Investment Program</label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">At least two nutrition-related PAP integrated in the Annual Investment Program</label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">At least three PPAN-related PAP integrated in the Annual Investment Program</label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">At least four PPAN-related PAP and/or PS for nutrition integrated in the Annual Investment Program</label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">More than four PPAN-related PAP and/or PS for nutrition integrated in the Annual Investment Program</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-1" style="padding:0px!important">
                            <label for="exampleFormControlInput1">Annual Investment Program</label>
                        </div>
                        <div class="col-1">
                            <select id="loadProvince1" class="form-control" name="rating4c"> 
                                <option value="1" {{ old('rating4c', $lncbarangay->rating4c) == '1' ? 'selected' : '' }}>1</option>
                                <option value="2" {{ old('rating4c', $lncbarangay->rating4c) == '2' ? 'selected' : '' }}>2</option>
                                <option value="3" {{ old('rating4c', $lncbarangay->rating4c) == '3' ? 'selected' : '' }}>3</option>
                                <option value="4" {{ old('rating4c', $lncbarangay->rating4c) == '4' ? 'selected' : '' }}>4</option>
                                <option value="5" {{ old('rating4c', $lncbarangay->rating4c) == '5' ? 'selected' : '' }}>5</option>
                            </select>
                        </div>
                        <div class="col-1">
                        <textarea type="text" name="remarks4c"  
                                style="background-color:#F5F5F5;border:0px;font-size:12px;width:inherit;max-height:120px;height:120px">{{ old('remarks4c', $lncbarangay->remarks4c) }}</textarea>
                        </div>
                    </div>


                      <!-- 4d -->
                    <br>
                    <div class="row" style="display:flex">
                        <div style="display:flex" class="col-2 justify-content-center">
                            <div>
                                <label for="exampleFormControlInput1"><b>4d</b></label>
                            </div>
                            <div class="col">
                                <label for="exampleFormControlInput1">Service Delivery</label>
                            </div>
                        </div>
                        <div class="col" style="padding:0px!important">
                            <div style="display:flex" style="justify-content:center!important">
                                <div class="col">
                                    <label for="exampleFormControlInput1">Less than 50% of the malnourished are targeted in delivery of barangay-funded nutrition programs</label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">More than 50% of the malnourished are targeted in delivery of barangay-funded nutrition programs</label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">At least 80% of the malnourished are targeted in delivery of barangay-funded nutrition programs</label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">More than 80% of the malnourished are targeted in delivery of barangay-funded nutrition programs</label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">100% of the malnourished are targeted in delivery of barangay-funded nutrition programs</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-1" style="padding:0px!important">
                            <label for="exampleFormControlInput1">Barangay Nutrition
                                    Action Plan
                                    Masterlist of
                                    malnourished
                                    children
                                    Masterlist of
                                    beneficiaries</label>
                        </div>
                        <div class="col-1">
                            <select id="loadProvince1" class="form-control" name="rating4d"> 
                                <option value="1" {{ old('rating4d', $lncbarangay->rating4d) == '1' ? 'selected' : '' }}>1</option>
                                <option value="2" {{ old('rating4d', $lncbarangay->rating4d) == '2' ? 'selected' : '' }}>2</option>
                                <option value="3" {{ old('rating4d', $lncbarangay->rating4d) == '3' ? 'selected' : '' }}>3</option>
                                <option value="4" {{ old('rating4d', $lncbarangay->rating4d) == '4' ? 'selected' : '' }}>4</option>
                                <option value="5" {{ old('rating4d', $lncbarangay->rating4d) == '5' ? 'selected' : '' }}>5</option>
                            </select>
                        </div>
                        <div class="col-1">
                        <textarea type="text" name="remarks4d"  
                                style="background-color:#F5F5F5;border:0px;font-size:12px;width:inherit;max-height:120px;height:120px">{{ old('remarks4d', $lncbarangay->remarks4d) }}</textarea>
                        </div>
                    </div>

                    <!-- 4e -->
                    <br>
                    <div class="row" style="display:flex">
                        <div style="display:flex" class="col-2 justify-content-center">
                            <div>
                                <label for="exampleFormControlInput1"><b>4e</b></label>
                            </div>
                            <div class="col">
                                <label for="exampleFormControlInput1">Monitoring and Evaluation</label>
                            </div>
                        </div>
                        <div class="col" style="padding:0px!important">
                            <div style="display:flex" style="justify-content:center!important">
                                <div class="col">
                                    <label for="exampleFormControlInput1">Monitoring
                                                            conducted by BNS only</label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">
                                    Interagency
                                    monitoring
                                    conducted but not documented</label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">
                                    Interagency
                                    monitoring
                                    conducted and
                                    documented at
                                    least once a year</label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">
                                    Interagency
                                    monitoring
                                    conducted and
                                    documented at
                                    least twice a year</label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">
                                    Results of
                                    interagency
                                    monitoring
                                    disseminated during BNC meeting/s and used in BNAP formulation</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-1" style="padding:0px!important">
                            <label for="exampleFormControlInput1">
                            Barangay Nutrition
                            Action Plan
                            Monitoring report
                            Documentation
                            report
                            Minutes of meeting</label>
                        </div>
                        <div class="col-1">
                            <select id="loadProvince1" class="form-control" name="rating4e"> 
                                <option value="1" {{ old('rating4e', $lncbarangay->rating4e) == '1' ? 'selected' : '' }}>1</option>
                                <option value="2" {{ old('rating4e', $lncbarangay->rating4e) == '2' ? 'selected' : '' }}>2</option>
                                <option value="3" {{ old('rating4e', $lncbarangay->rating4e) == '3' ? 'selected' : '' }}>3</option>
                                <option value="4" {{ old('rating4e', $lncbarangay->rating4e) == '4' ? 'selected' : '' }}>4</option>
                                <option value="5" {{ old('rating4e', $lncbarangay->rating4e) == '5' ? 'selected' : '' }}>5</option>
                            </select>
                        </div>
                        <div class="col-1">
                        <textarea type="text" name="remarks4e"  placeholder="Your remarks"
                                style="background-color:#F5F5F5;border:0px;font-size:12px;width:inherit;max-height:120px;height:120px"> {{ old('remarks4e', $lncbarangay->remarks4e) }}</textarea>
                        </div>
                    </div>

                      <!-- 4f -->
                      <br>
                    <div class="row" style="display:flex">
                        <div style="display:flex" class="col-2 justify-content-center">
                            <div>
                                <label for="exampleFormControlInput1"><b>4f</b></label>
                            </div>
                            <div class="col">
                                <label for="exampleFormControlInput1">
                                            Capacity
                                            Development
                                            <br>
                                            Barangay Nutrition
                                            Committee members</label>
                            </div>
                        </div>
                        <div class="col" style="padding:0px!important">
                            <div style="display:flex" style="justify-content:center!important">
                                <div class="col">
                                    <label for="exampleFormControlInput1">
                                    Only one member of the Barangay Nutrition Committee trained/ oriented on Baranagy Nutrition Action Plan formulation</label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">
                                    Only two members of the BNAP trained/ oriented on BNAP formulation</label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">
                                    Barangay Captain, Kagawad on Health and one BNC member trained/ oriented on BNAP formulation</label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">
                                    Three BNC members in Level 3 trained/ oriented in BNAP formulation and attended least one nutrition-related trainings/ forums within the year</label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">
                                    More than three BNC members trained/ oriented in BNAP formulation and attended at least one nutrition-related training/ forum within the year </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-1" style="padding:0px!important">
                            <label for="exampleFormControlInput1">
                                    Barangay Nutrition Action Plan
                                    Accomplishment Report
                                    Training Cetificates
                                    Documentation</label>
                        </div>
                        <div class="col-1">
                            <select id="loadProvince1" class="form-control" name="rating4f"> 
                                <option value="1" {{ old('rating4f', $lncbarangay->rating4f) == '1' ? 'selected' : '' }}>1</option>
                                <option value="2" {{ old('rating4f', $lncbarangay->rating4f) == '2' ? 'selected' : '' }}>2</option>
                                <option value="3" {{ old('rating4f', $lncbarangay->rating4f) == '3' ? 'selected' : '' }}>3</option>
                                <option value="4" {{ old('rating4f', $lncbarangay->rating4f) == '4' ? 'selected' : '' }}>4</option>
                                <option value="5" {{ old('rating4f', $lncbarangay->rating4f) == '5' ? 'selected' : '' }}>5</option>
                            </select>
                        </div>
                        <div class="col-1">
                        <textarea type="text" name="remarks4f"  
                                style="background-color:#F5F5F5;border:0px;font-size:12px;width:inherit;max-height:120px;height:120px">{{ old('remarks4f', $lncbarangay->remarks4f) }}</textarea>
                        </div>
                    </div>
                    
                    <!-- 4g -->
                    <br>
                    <div class="row" style="display:flex">
                        <div style="display:flex" class="col-2 justify-content-center">
                            <div>
                                <label for="exampleFormControlInput1"><b>4g</b></label>
                            </div>
                            <div class="col">
                                <label for="exampleFormControlInput1">
                                Barangay Nutrition Scholars</label>
                            </div>
                        </div>
                        <div class="col" style="padding:0px!important">
                            <div style="display:flex" style="justify-content:center!important">
                                <div class="col">
                                    <label for="exampleFormControlInput1">
                                    Less than 100% of BNSs trained in Basic Course for BNS</label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">
                                        100% of BNSs
                                        trained in Basic
                                        Course for BNS</label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">
                                    100% of BNSs trained in Basic Course for BNS and at least one BNS trained/ oriented on Barangay Nutrition Action Plan formulation</label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">
                                    100% of BNSs trained in Basic Course for BNS and at least one BNS trained/ oriented on Barangay Nutrition Action Plan formulation and less than 50% of the BNSs attended at least one nutrition-related training/ forum</label>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">
                                    100% of BNSs trained in Basic Course for BNS and at least one BNS trained/ oriented on Barangay Nutrition Action Plan formulation and more than 50% of the BNSs attended at least one nutrition-related training/ forum</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-1" style="padding:0px!important">
                            <label for="exampleFormControlInput1">
                                    Barangay Nutrition Action Plan
                                    Accomplishment Report
                                    Training Cetificates
                                    Documentation</label>
                        </div>
                        <div class="col-1">
                            <select id="loadProvince1" class="form-control" name="rating4g"> 
                                <option value="1" {{ old('rating4g', $lncbarangay->rating4g) == '1' ? 'selected' : '' }}>1</option>
                                <option value="2" {{ old('rating4g', $lncbarangay->rating4g) == '2' ? 'selected' : '' }}>2</option>
                                <option value="3" {{ old('rating4g', $lncbarangay->rating4g) == '3' ? 'selected' : '' }}>3</option>
                                <option value="4" {{ old('rating4g', $lncbarangay->rating4g) == '4' ? 'selected' : '' }}>4</option>
                                <option value="5" {{ old('rating4g', $lncbarangay->rating4g) == '5' ? 'selected' : '' }}>5</option>
                            </select>
                        </div>
                        <div class="col-1">
                        <textarea type="text" name="remarks4g"  placeholder="Your remarks"
                                style="background-color:#F5F5F5;border:0px;font-size:12px;width:inherit;max-height:120px;height:120px">{{ old('remarks4g', $lncbarangay->remarks4g) }}</textarea>
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