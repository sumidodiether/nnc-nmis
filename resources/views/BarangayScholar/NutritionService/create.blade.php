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
            <form action="{{ route('nutritionservice.store') }}" method="POST">
                @csrf

                <input type="hidden" name="status" value="1">
                <input type="hidden" name="dateCreated" value="05/19/2024">
                <input type="hidden" name="dateUpdates" value="05/19/2024">
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
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
                <br>
                <div>
                    <!-- tablehearder -->
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

                    <!-- 51a -->
                    <div  class="row"style="display:flex">
                        <!-- Top -->
                        <div class="row-12" style="display:flex;">
                                <div class="col" style="padding-right:15px"><label for="exampleFormControlInput1"><b>5a </b></label></div>
                                <div class="col-11"  style="padding-left:0px">
                                    <label for="exampleFormControlInput1">
                                        <b>Infant and Young Child Feeding</b>
                                        <br>Community-based health and nutrition support strengthening
                                    </label>
                                </div>
                        </div>
                            <!-- endTop --> 
                        <div class="row"  style="display:flex; margin-top:10px">
                            <div class="col" style="padding:0px!important">
                                <div style="display:flex" style="justify-content:center!important">
                                    <div class="col" style="margin-left:45px">
                                        <label for="exampleFormControlInput1">
                                        1. Functional
                                        breastfeeding
                                        support group</label>
                                    </div>
                                    <div class="col">
                                        <label for="exampleFormControlInput1">
                                        Breastfeeding support group established in the barangay with written agreement of its establishment and directory of members </label>
                                    </div>
                                    <div class="col">
                                        <label for="exampleFormControlInput1">
                                        Breastfeeding
                                        support group
                                        oriented on Infant
                                        and Young Child
                                        Feeding and Milk Code and provided guidance in the conduct of peer counselling and referral </label>
                                    </div>
                                    <div class="col">
                                        <label for="exampleFormControlInput1">
                                        Breastfeeding
                                        support group
                                        conducted
                                        activities such as
                                        peer counseling,
                                        sharing of
                                        experience and
                                        assistance in
                                        breastfeeding and
                                        complementary
                                        feeding for
                                        pregnant and
                                        lactating mothers</label>
                                    </div>
                                    <div class="col">
                                        <label for="exampleFormControlInput1">
                                        Breastfeeding
                                        support group
                                        conducted
                                        activities in Level 3 and maintains a list of lactating mothers 
                                        and status of breastfeeding and/or complementary feeding includin
                                        information on those with breastfeeding  or complementary feeding challenge
                                </label>
                                    </div>
                                    <div class="col">
                                        <label for="exampleFormControlInput1">
                                        Breastfeeding
                                        support group
                                        conducted activities
                                        and maintains a list of lactating mothers and status of breastfeeding 
                                        and/or complementary feeding and conducts follow through activities until 
                                        the lactating mother have ransitioned from exclusive breastfeeding to 
                                        continued breastfeeding with complementary feeding
                                    </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1" style="padding:0px!important">
                                <label for="exampleFormControlInput1">
                                Written agreement on
                                estbalishment of
                                Breastfeeding Support 
                                Group
                                Directory of members
                                Documentation of activities
                                Masterlist of lactating
                                mothers with breastfeeding
                                and complementary
                                feeding status
                            </label>
                            </div>
                            <div class=" col-1 ">
                                <select id="loadProvince1" class="form-control" name="rating1a">
                                    <option>Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="col col-1   ">
                                <textarea type="text" name="remarks1a" placeholder="Your remarks"
                                    style="background-color:#F5F5F5;border:0px;font-size:12px;width:inherit;max-height:120px;height:120px"></textarea>
                            </div>    
                        </div> 
                    </div>

                      <!-- 51b -->
                    <div  class="row"style="display:flex">
                        <!-- Top -->
                        <div class="row-12" style="display:flex;">
                                <div class="col" style="padding-right:15px"><label for="exampleFormControlInput1"><b></b></label></div>
                                <div class="col-12"  style="padding-left:0px">
                                    <label for="exampleFormControlInput1">
                                        <b>Establishment of breastfeeding places in barangay facilities</b> 
                                    </label>
                                </div>
                        </div>
                            <!-- endTop --> 
                        <div class="row"  style="display:flex; margin-top:10px">
                            <div class="col" style="padding:0px!important">
                                <div style="display:flex" style="justify-content:center!important">
                                    <div class="col" style="margin-left:45px">
                                        <label for="exampleFormControlInput1">
                                        2. Lactation stations
                                        established in
                                        barangay facilities
                                        such as Barangay
                                        Health Stations,
                                        multi-purpose hall and in public schools </label>
                                    </div>
                                    <div class="col">
                                        <label for="exampleFormControlInput1">
                                        The barangay has one lactation station but not maintained </label>
                                    </div>
                                    <div class="col">
                                        <label for="exampleFormControlInput1">
                                        The barangay has one lactation station accessible to the public and well-maintained
                                    </label>
                                    </div>
                                    <div class="col">
                                        <label for="exampleFormControlInput1">
                                        The barangay has one lactation station accessible to the public, well-maintained and has accessible handwashing facility, comfortable seats and proper ventilation 
                                    </label>
                                    </div>
                                    <div class="col">
                                        <label for="exampleFormControlInput1">
                                        The barangay has one lactation station as described in level 3 and maintains a logbook of users
                                </label>
                                    </div>
                                    <div class="col">
                                        <label for="exampleFormControlInput1">
                                        The barangay has more than one lactation station as described in level 3 and maintains a logbook of users
                                    </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1" style="padding:0px!important">
                                <label for="exampleFormControlInput1">
                                (By ocular
                                inspection)
                                Documentation
                                report
                                Lactation station logbook
                                of users
                            </label>
                            </div>
                            <div class=" col-1 ">
                                <select id="loadProvince1" class="form-control" name="rating1a">
                                    <option>Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="col col-1   ">
                                <textarea type="text" name="remarks1a" placeholder="Your remarks"
                                    style="background-color:#F5F5F5;border:0px;font-size:12px;width:inherit;max-height:120px;height:120px"></textarea>
                            </div>    
                        </div> 
                    </div>

                          <!-- 51c -->
                    <div  class="row"style="display:flex">
                        <!-- Top -->
                        <div class="row-12" style="display:flex;">
                                <div class="col" style="padding-right:15px"><label for="exampleFormControlInput1"><b></b></label></div>
                                <div class="col-12"  style="padding-left:0px">
                                    <label for="exampleFormControlInput1">
                                        <b>Promotion of compliance to the Milk Code</b> 
                                    </label>
                                </div>
                        </div>
                            <!-- endTop --> 
                        <div class="row"  style="display:flex; margin-top:10px">
                            <div class="col" style="padding:0px!important">
                                <div style="display:flex" style="justify-content:center!important">
                                    <div class="col" style="margin-left:45px">
                                        <label for="exampleFormControlInput1">
                                        3. Activities
                                        conducted to
                                        promote compliance
                                        to Executive Order
                                        51, Milk Code
                                    </label>
                                    </div>
                                    <div class="col">
                                        <label for="exampleFormControlInput1">
                                        The barangay have Milk Code materials posted in the Barangay Health Station
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label for="exampleFormControlInput1">
                                        The Barangay
                                        Health Station is
                                        compliant to the
                                        Milk Code
                                    </label>
                                    </div>
                                    <div class="col">
                                        <label for="exampleFormControlInput1">
                                        The Barangay Health Station includes the Milk Code in its Infant and Young Child Feeding classes for pregnant and lactating mothers  
                                    </label>
                                    </div>
                                    <div class="col">
                                        <label for="exampleFormControlInput1">
                                        The Barangay
                                        issued a
                                        resolution in
                                        support of the Milk Code including regular inspection of Barangay Health Station/s 
                                </label>
                                    </div>
                                    <div class="col">
                                        <label for="exampleFormControlInput1">
                                        Members of the
                                        Barangay Nutrition
                                        Committee conduct
                                        inspection in the
                                        Barangay Health
                                        Stations at least
                                        twice a year to
                                        ensure compliance of
                                        health workers and clients in the public health facility
                                    </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1" style="padding:0px!important">
                                <label for="exampleFormControlInput1">
                                Milk code materials
                                Ocular inspection of the
                                Barangay Health Station
                                IYCF classes learning
                                materials
                                Resolution
                                Documentation Report
                            </label>
                            </div>
                            <div class=" col-1 ">
                                <select id="loadProvince1" class="form-control" name="rating1a">
                                    <option>Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="col col-1   ">
                                <textarea type="text" name="remarks1a" placeholder="Your remarks"
                                    style="background-color:#F5F5F5;border:0px;font-size:12px;width:inherit;max-height:120px;height:120px"></textarea>
                            </div>    
                        </div> 
                    </div>

                      <!-- 52a -->
                      <br>
                      <div  class="row"style="display:flex">
                        <!-- Top -->
                        <div class="row-12" style="display:flex;">
                                <div class="col" style="padding-right:15px"><label for="exampleFormControlInput1"><b>5b</b></label></div>
                                <div class="col-11"  style="padding-left:0px">
                                    <label for="exampleFormControlInput1">
                                        <b>Philippine Integrated Management of Acute Malnutrition</b>
                                        <br>Provision of services for Severe Acute Malnutrition (SAM) and Moderate Acute Malnutrition (MAM)
                                    </label>
                                </div>
                        </div>
                            <!-- endTop --> 
                        <div class="row"  style="display:flex; margin-top:10px">
                            <div class="col" style="padding:0px!important">
                                <div style="display:flex" style="justify-content:center!important">
                                    <div class="col" style="margin-left:45px">
                                        <label for="exampleFormControlInput1">
                                        4. Referral of
                                        severely and
                                        moderately acute
                                        malnourished
                                        children to Barangay Health Stations and/or Rural Health Units
                                    </label>
                                    </div>
                                    <div class="col">
                                        <label for="exampleFormControlInput1">
                                        The LGU only
                                        maintains a
                                        master list of
                                        children with
                                        severe and
                                        moderate acute
                                        malnutrition
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label for="exampleFormControlInput1">
                                        Barangay conducts active case finding of SAM and MAM cases 
                                    </label>
                                    </div>
                                    <div class="col">
                                        <label for="exampleFormControlInput1">
                                        Barangay conducts
                                        active case finding
                                        of SAM and MAM
                                        cases and refers
                                        cases to the 
                                        appropriate facility
                                        for PIMAM
                                    </label>
                                    </div>
                                    <div class="col">
                                        <label for="exampleFormControlInput1">
                                        Barangay conducts
                                        active case finding
                                        of SAM and MAM
                                        cases, refers cases to the appropriate 
                                        facility for PIMAM and monitors the 
                                        progress of the SAM and MAM cases 
                                        enrolled but not reported monthly 
                                </label>
                                    </div>
                                    <div class="col">
                                        <label for="exampleFormControlInput1">
                                        Barangay conducts
                                        active case finding
                                        of SAM and MAM
                                        cases, refers cases to the 
                                        appropriate facility for PIMAM 
                                        and monitors the progress of the 
                                        SAM and MAM cases enrolled and reports monthly 
                                    </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1" style="padding:0px!important">
                                <label for="exampleFormControlInput1">
                                Masterlist of
                                children with SAM
                                Referral forms
                            </label>
                            </div>
                            <div class=" col-1 ">
                                <select id="loadProvince1" class="form-control" name="rating1a">
                                    <option>Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="col col-1   ">
                                <textarea type="text" name="remarks1a" placeholder="Your remarks"
                                    style="background-color:#F5F5F5;border:0px;font-size:12px;width:inherit;max-height:120px;height:120px"></textarea>
                            </div>    
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