@extends('layouts.app', [
'class' => 'sidebar-mini ',
'namePage' => 'Mellpi Pro',
'activePage' => 'mellpi_pro',
'activeNav' => '',
])

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/joboy.css') }}">

<!-- Include jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Include local Parsley.js -->
<script src="{{ asset('assets/js/parsley.min.js') }}"></script>

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

<div class="panel-header panel-header-sm"></div>
<div class="content">
    <div class="row-12">
        <div class="col flex">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{__(" MellPi Pro LGU Profile")}}</h5>
                </div>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @include('alerts.success')
                <form method="post" class="employee-form" action="{{ route('mellpi_pro.store') }}" autocomplete="off"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="container d-flex flex-row">
                        <div class="row">
                        
                            <div class="form-group col-md-3">
                                <label for="inputPSGC">Region</label>
                                <select id="loadRegionMellpi" class="form-control" name="inputRegionNAO">
                                    <option selected>Region</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPSGC">Province</label>
                                <select id="loadProvinceMellpi" class="form-control" name="inputProvinceNAO">
                                    <option selected>Province</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputCM">City/Municipality</label>
                                <select id="loadCityMellpi" class="form-control" name="inputCityNAO">
                                    <option selected>City/Municipality</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputCM">Barangay</label>
                                <select id="loadBrgyMellpi" class="form-control" name="inputCityNAO">
                                    <option selected>Barangay</option>
                                </select>
                            </div>                   
                        </div>
                    </div>

                    <div class="card-body">
                        <div id="fileContents"></div>
                        <br>
                    </div>
                    <div class="card-body">
                        <div class="nav nav-fill my-3">
                            <label class="nav-link shadow-sm step0 border ml-2 ">LGU Profile</label>
                            <label class="nav-link shadow-sm step1 border ml-2 ">LGU Demographics</label>
                            <label class="nav-link shadow-sm step2 border ml-2 ">Vision Mission, Nutrition Policies,
                                Governance, LNC Management</label>
                            <label class="nav-link shadow-sm step3 border ml-2 ">Nutrition Services</label>
                            <label class="nav-link shadow-sm step4 border ml-2 ">Changes in NS</label>
                            <label class="nav-link shadow-sm step5 border ml-2 ">Discussion Questions</label>
                        </div>

                        <!-- Start LGU Profile -->
                        <div class="form-section">
                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>{{__(" Income class")}}</label>
                                        <select class="form-control" name="income_class">
                                            <option selected>Open this select menu</option>
                                            <option value="1">1st</option>
                                            <option value="2">2nd</option>
                                            <option value="3">3rd</option>
                                            <option value="4">4th</option>
                                            <option value="5">5th</option>
                                            <option value="6">6th</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>{{__(" Date of monitoring")}}</label>
                                        <input type="date" name="date_monitoring" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>{{__(" Period Covered")}}</label>
                                        <input type="text" name="period_covered" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>{{__(" Population")}}</label>
                                        <input type="number" name="population" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>{{__(" Nutritional Status")}}</label>
                                        <input type="number" name="nutritional_status" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>{{__(" Land Use Classification")}}</label>
                                        <input type="number" name="land_use_classification" class="form-control"
                                            value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>{{__(" Tabulated values of total land area and remarks")}}</label>
                                        <input type="text" name="total_land_remarks" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>{{__(" Interventions with Action Lines from NGA/New Standards")}}</label>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>{{__(" Source and remarks")}}</label>
                                        <input type="text" name="source_and_remarks" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>{{__("Available/Received")}}</label>
                                        <select class="form-control" name="received">
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>{{__(" Date Received")}}</label>
                                        <input type="date" name="date_received" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>{{__("  Volume/ No. of Pax")}}</label>
                                        <input type="number" name="no_pax" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>{{__("Remarks")}}</label>
                                        <textarea name="remarks" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End LGU Profile -->

                        <!-- Start LGU Demographics -->
                        <div class="form-section">
                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>{{__("Total population")}}</label>
                                        <input type="number" name="total_population" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>{{__("No. of households")}}</label>
                                        <input type="number" name="no_households" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>{{__("No. of sitios/puroks")}}</label>
                                        <input type="number" name="no_sitios" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>{{__("No. of households with access to safe water ")}}</label>
                                        <input type="number" name="households_safe_water" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>{{__(" No. of households with sanitary toilets ")}}</label>
                                        <input type="number" name="households_sanitary_toilet" class="form-control"
                                            value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>{{__(" No. of Day Care Center")}}</label>
                                        <input type="number" name="day_care_center" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>{{__("No. of public elementary and secondary schools")}}</label>
                                        <input type="number" name="public_elem_secondary_schools" class="form-control"
                                            value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>{{__("No. of Barangay Health Stations")}}</label>
                                        <input type="number" name="brgy_health_stations" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>{{__("No. of retail outlets/ sari-sari stores")}}</label>
                                        <input type="number" name="retails_outlets_stores" class="form-control"
                                            value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>{{__("No. of bakeries, public markets, transport terminals")}}</label>
                                        <input type="number" name="markets_transport_terminal" class="form-control"
                                            value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>{{__("Percent of lactating mothers exclusively breastfeeding until the 5th month")}}</label>
                                        <input type="text" name="monthers_breastfeeding" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>{{__("Terrain")}}</label>
                                        <input type="text" name="terrain" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>{{__("Hazards (Type/Month) and respective LGU/Households affected")}}</label>
                                        <input type="text" name="hazards" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End LGU Demographics -->

                        {{-- Page 2 --}}
                        <!-- Start Vision Mission, Nutrition Policies, Governance, LNC Management -->
                        <div class="form-section striped-rows">

                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>{{__("1. VISION AND MISSION")}}</label>

                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm">
                                    <label>{{__("ELEMENTS")}}</label>
                                </div>
                                <div class="col-sm">
                                    <label>{{__("RATING")}}</label>
                                </div>
                                <div class="col-sm">
                                    <label>{{__("REMARKS/EVIDENCE")}}</label>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm">
                                    <!-- <label><b>{{__("1a")}}</b></label> -->
                                    <p>Presence and knowledge of vision mission statement</p>
                                </div>
                                <div class="col-sm">
                                    <select class="form-control" name="vision_rating1">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <textarea name="vision_remarks1" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm">
                                    <!-- <label><b>{{__("1b")}}</b></label>     -->
                                    <p>Presence of nutrition-related concerns in the Barangay Development Plan</p>
                                </div>
                                <div class="col-sm">
                                    <select class="form-control" name="vision_rating2">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <textarea name="vision_remarks2" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm">
                                    <!-- <label><b>{{__("1c")}}</b></label>  -->
                                    <p>Presence of nutrition-related concerns in the Annual Investment Program</p>
                                </div>
                                <div class="col-sm">
                                    <select class="form-control" name="vision_rating3">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <textarea name="vision_remarks3" class="form-control"></textarea>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>{{__("2. NUTRITION POLICIES AND LAWS")}}</label>

                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm">
                                    <label>{{__("ELEMENTS")}}</label>
                                </div>
                                <div class="col-sm">
                                    <label>{{__("RATING")}}</label>
                                </div>
                                <div class="col-sm">
                                    <label>{{__("REMARKS/EVIDENCE")}}</label>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm">
                                    <!-- <label><b>{{__("1a")}}</b></label> -->
                                    <p>Adoption, implementation and monitoring of Barangay Nutrition Action Plan</p>
                                </div>
                                <div class="col-sm">
                                    <select class="form-control" name="policies_rating1">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <textarea name="policies_remarks1" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm">
                                    <!-- <label><b>{{__("1b")}}</b></label>     -->
                                    <p>Adoption of newly passed national/sectoral policies</p>
                                    <p>Republic Act 11148 Kalusugan at Nutrisyon ng Mag-Nanay Act of 2019</p>
                                </div>
                                <div class="col-sm">
                                    <select class="form-control" name="policies_rating2">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <textarea name="policies_remarks2" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm">
                                    <!-- <label><b>{{__("1c")}}</b></label>  -->
                                    <p>Republic Act 11037 Masustansyang Pagkain Para sa Batang Pilipino</p>
                                </div>
                                <div class="col-sm">
                                    <select class="form-control" name="policies_rating3">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <textarea name="policies_remarks3" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm">
                                    <!-- <label><b>{{__("1c")}}</b></label>  -->
                                    <p>Adoption, implementation and monitoring of national/ sectoral nutrition policies
                                    </p>
                                    <p>Executive Order 51: National Code of Marketing Breastmilk Substitutes, Breastmilk
                                        Supplements and Other Related Products</p>
                                </div>
                                <div class="col-sm">
                                    <select class="form-control" name="policies_rating4">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <textarea name="policies_remarks4" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm">
                                    <!-- <label><b>{{__("1c")}}</b></label>  -->
                                    <p>Republic Act 10028: Expanded Breastfeeding Promotion Act of 2009</p>
                                    <p>DILG Memorandum Circular 2011-54 Implementation and Monitoring of the National
                                        Breastfeeding Policy</p>
                                </div>
                                <div class="col-sm">
                                    <select class="form-control" name="policies_rating5">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <textarea name="policies_remarks5" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm">
                                    <!-- <label><b>{{__("1c")}}</b></label>  -->
                                    <p>Republic Act 8172: An Act for Salt Iodization Nationwide (ASIN Law)</p>

                                </div>
                                <div class="col-sm">
                                    <select class="form-control" name="policies_rating6">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <textarea name="policies_remarks6" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm">
                                    <!-- <label><b>{{__("1c")}}</b></label>  -->
                                    <p>Republic Act 8976: Philippine Food Fortification Act </p>

                                </div>
                                <div class="col-sm">
                                    <select class="form-control" name="policies_rating7">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <textarea name="policies_remarks7" class="form-control"></textarea>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm">
                                    <!-- <label><b>{{__("1c")}}</b></label>  -->
                                    <p>NNC Governing Board Resolution No.1 series of 2017: Approving and Adopting the
                                        Philippine Plan of Action for Nutrition 2017-2022</p>
                                    <p>DILG MC 2018-42 Adoption and Implementation of PPAN 2017-2022</p>
                                </div>
                                <div class="col-sm">
                                    <select class="form-control" name="policies_rating8">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <textarea name="policies_remarks8" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm">
                                    <!-- <label><b>{{__("1c")}}</b></label>  -->
                                    <p>NNC Governing Board Resolution No.3 series of 2014: Approving and Adopting the Guidelines on Local Nutrition Planning</p>

                                </div>
                                <div class="col-sm">
                                    <select class="form-control" name="policies_rating9">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <textarea name="policies_remarks9" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm">
                                    <!-- <label><b>{{__("1c")}}</b></label>  -->
                                    <p>NNC Governing Board Resolutions Nos. 1. 3 S.2012: Approving the Guidelines on the
                                        Fabrication, Verification, and Maintenance of Wooden Height Boards 2. 3 S.2018:
                                        Approving the Guidelines on the Selection of Non-Wood Height and Length
                                        Measuring Tool</p>

                                </div>
                                <div class="col-sm">
                                    <select class="form-control" name="policies_rating10">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <textarea name="policies_remarks10" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm">
                                    <!-- <label><b>{{__("1c")}}</b></label>  -->
                                    <p>NNC Governing Board Resolution No.2 S.2012: Approving the Revised Implementing
                                        Guidelines on OPT Plus</p>

                                </div>
                                <div class="col-sm">
                                    <select class="form-control" name="policies_rating11">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <textarea name="policies_remarks11" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm">
                                    <!-- <label><b>{{__("1c")}}</b></label>  -->
                                    <p>NNC Governing Board Resolution No. 6 series of 2012: Adoption of the 2012
                                        Nutritional Guidelines for Filipinos</p>

                                </div>
                                <div class="col-sm">
                                    <select class="form-control" name="policies_rating12">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <textarea name="policies_remarks12" class="form-control"></textarea>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm">
                                    <!-- <label><b>{{__("1c")}}</b></label>  -->
                                    <p>NNC Governing Board Resolution No. 2 series of 2009: Adopting the National Policy
                                        on Nutrition Management in Emergencies and Disasters</p>

                                </div>
                                <div class="col-sm">
                                    <select class="form-control" name="policies_rating13">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <textarea name="policies_remarks13" class="form-control"></textarea>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>{{__("3. GOVERNANCE AND ORGANIZATIONAL STRUCTURE")}}</label>

                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm">
                                    <label>{{__("ELEMENTS")}}</label>
                                </div>
                                <div class="col-sm">
                                    <label>{{__("RATING")}}</label>
                                </div>
                                <div class="col-sm">
                                    <label>{{__("REMARKS/EVIDENCE")}}</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm">
                                    <!-- <label><b>{{__("1c")}}</b></label>  -->
                                    <p>Presence of Barangay Nutrition Committee (BNC)</p>

                                </div>
                                <div class="col-sm">
                                    <select class="form-control" name="governance_rating1">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <textarea name="governance_remarks1" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm">
                                    <!-- <label><b>{{__("1c")}}</b></label>  -->
                                    <p>Presence of Nutrition Office and Personnel</p>

                                </div>
                                <div class="col-sm">
                                    <select class="form-control" name="governance_rating2">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <textarea name="governance_remarks2" class="form-control"></textarea>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm">
                                    <!-- <label><b>{{__("1c")}}</b></label>  -->
                                    <p>Decision-making and Leadership of the Barangay Nutrition Committee </p>

                                </div>
                                <div class="col-sm">
                                    <select class="form-control" name="governance_rating3">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <textarea name="governance_remarks3" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>{{__("4. LOCAL NUTRITION COMMITTEE MANAGEMENT FUNCTIONS")}}</label>

                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm">
                                    <label>{{__("ELEMENTS")}}</label>
                                </div>
                                <div class="col-sm">
                                    <label>{{__("RATING")}}</label>
                                </div>
                                <div class="col-sm">
                                    <label>{{__("REMARKS/EVIDENCE")}}</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm">
                                    <!-- <label><b>{{__("1c")}}</b></label>  -->
                                    <p>Nutrition Assessment </p>

                                </div>
                                <div class="col-sm">
                                    <select class="form-control" name="local_nutrition_rating1">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <textarea name="local_nutrition_remarks1" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm">
                                    <!-- <label><b>{{__("1c")}}</b></label>  -->
                                    <p>Planning</p>

                                </div>
                                <div class="col-sm">
                                    <select class="form-control" name="local_nutrition_rating2">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <textarea name="local_nutrition_remarks2" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm">
                                    <!-- <label><b>{{__("1c")}}</b></label>  -->
                                    <p>Resource Generation and Mobilization</p>

                                </div>
                                <div class="col-sm">
                                    <select class="form-control" name="local_nutrition_rating3">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <textarea name="local_nutrition_remarks3" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm">
                                    <!-- <label><b>{{__("1c")}}</b></label>  -->
                                    <p>Service Delivery</p>

                                </div>
                                <div class="col-sm">
                                    <select class="form-control" name="local_nutrition_rating4">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <textarea name="local_nutrition_remarks4" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm">
                                    <!-- <label><b>{{__("1c")}}</b></label>  -->
                                    <p>Monitoring and Evaluation</p>

                                </div>
                                <div class="col-sm">
                                    <select class="form-control" name="local_nutrition_rating5">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <textarea name="local_nutrition_remarks5" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm">
                                    <!-- <label><b>{{__("1c")}}</b></label>  -->
                                    <p>Capacity Development</p>
                                    <p>Barangay Nutrition Committee members</p>
                                </div>
                                <div class="col-sm">
                                    <select class="form-control" name="local_nutrition_rating6">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <textarea name="local_nutrition_remarks6" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm">
                                    <!-- <label><b>{{__("1c")}}</b></label>  -->
                                    <p>Barangay Nutrition Scholars</p>
                                </div>
                                <div class="col-sm">
                                    <select class="form-control" name="local_nutrition_rating7">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <textarea name="local_nutrition_remarks7" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- End Vision Mission, Nutrition Policies, Governance, LNC Management -->

                        {{-- Page 3 --}}
                        <!-- Nutrition Services -->
                        <div class="form-section">

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col"><label>{{__("ELEMENTS")}}</label></th>
                                        <th scope="col"><label>{{__("RATING")}}</label></th>
                                        <th scope="col"><label>{{__("REMARKS/EVIDENCE")}}</label></th>
                                        <th scope="col">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">{{__("Infant and Young Child Feeding")}}</th>
                                        <th id="young_child_feeding_average">0</th>
                                        <input type="hidden" id="young_child_feeding_average2"
                                            name="young_child_feeding_average" value="" class="form-control" />
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">1. Functional breastfeeding support group</td>
                                        <td>
                                            <select class="form-control rating1" name="young_child_feeding_rating1"
                                                id="breastfeeding_rating">
                                                <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><textarea name="young_child_feeding_remarks1"
                                                class="form-control"></textarea></td>
                                        <td> &nbsp; </td>
                                    </tr>

                                    <tr>
                                        <td scope="row">2. Lactation stations established in barangay facilities such as
                                            Barangay Health Stations, multi-purpose hall and in public schools</td>
                                        <td>
                                            <select class="form-control rating1" name="young_child_feeding_rating2">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>

                                        </td>
                                        <td><textarea name="young_child_feeding_remarks2"
                                                class="form-control"></textarea></td>
                                        <td> &nbsp; </td>
                                    </tr>

                                    <tr>
                                        <td scope="row">3. Activities conducted to promote compliance to Executive Order
                                            51, Milk Code</td>
                                        <td>
                                            <select class="form-control rating1" name="young_child_feeding_rating3">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>

                                        </td>
                                        <td><textarea name="young_child_feeding_remarks3"
                                                class="form-control"></textarea></td>
                                        <td> &nbsp; </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">{{__("Philippine Integrated Management of Acute Malnutrition")}}
                                        </th>
                                        <th id="acute_malnutrition_average">0</th>
                                        <input type="hidden" id="acute_malnutrition_average2"
                                            name="acute_malnutrition_average" value="" class="form-control" />
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">4. Referral of severely and moderately acute malnourished
                                            children to Barangay Health Stations and/or Rural Health Units</td>
                                        <td>
                                            <select class="form-control rating2" name="acute_malnutrition_rating4">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><textarea name="acute_malnutrition_remarks4"
                                                class="form-control"></textarea></td>
                                        <td> &nbsp; </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">{{__("National Dietary Supplementation Program")}}</th>
                                        <th id="national_dietary_average">0</th>
                                        <input type="hidden" id="national_dietary_average2"
                                            name="national_dietary_average" value="" class="form-control" />
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">5. Nutritionally-at-risk pregnant women enrolled/ covered in the
                                            dietary supplementation program</td>
                                        <td>
                                            <select class="form-control rating3" name="national_dietary_rating5">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><textarea name="national_dietary_remarks5" class="form-control"></textarea>
                                        </td>
                                        <td> &nbsp; </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">6. Infants and young children 6-23 months old enrolled in the
                                            dietary supplementation program </td>
                                        <td>
                                            <select class="form-control rating3" name="national_dietary_rating6">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><textarea name="national_dietary_remarks6" class="form-control"></textarea>
                                        </td>
                                        <td> &nbsp; </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">7. Children in child development centers and supervised
                                            neighborhood play provided with dietary supplementation </td>
                                        <td>
                                            <select class="form-control rating3" name="national_dietary_rating7">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><textarea name="national_dietary_remarks7" class="form-control"></textarea>
                                        </td>
                                        <td> &nbsp; </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">8. Support to the School-based Feeding Program (SBFP) targeting
                                            children from Kinder to Grade VI who are wasted</td>
                                        <td>
                                            <select class="form-control rating3" name="national_dietary_rating8">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><textarea name="national_dietary_remarks8" class="form-control"></textarea>
                                        </td>
                                        <td> &nbsp; </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">
                                            {{__("National Nutrition Promotion Program for Behavior Change")}}</th>
                                        <th id="behavioral_change_average">0</th>
                                        <input type="hidden" id="behavioral_change_average2"
                                            name="behavioral_change_average" value="" class="form-control" />
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">9. Nutrition promotion activities for behavior change conducted
                                            for population groups</td>
                                        <td>
                                            <select class="form-control rating4" name="behavioral_change_rating9">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><textarea name="behavioral_change_remarks9" class="form-control"></textarea>
                                        </td>
                                        <td> &nbsp; </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">10. Nutrition promotion for behavior change activities for the
                                            public conducted</td>
                                        <td>
                                            <select class="form-control rating4" name="behavioral_change_rating10">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><textarea name="behavioral_change_remarks10"
                                                class="form-control"></textarea></td>
                                        <td> &nbsp; </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">{{__("Micronutrient Supplementation")}}</th>
                                        <th id="micro_supplement_average">0</th>
                                        <input type="hidden" id="micro_supplement_average2"
                                            name="micro_supplement_average" value="" class="form-control" />
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">11. Pregnant women provided with iron-folic acid </td>
                                        <td>
                                            <select class="form-control rating5" name="micro_supplement_rating11">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><textarea name="micro_supplement_remark11" class="form-control"></textarea>
                                        </td>
                                        <td> &nbsp; </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">12. Vitamin A provided to children 6-11 months old</td>
                                        <td>
                                            <select class="form-control rating5" name="micro_supplement_rating12">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><textarea name="micro_supplement_remark12" class="form-control"></textarea>
                                        </td>
                                        <td> &nbsp; </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">13. Vitamin A capsules provided to children 12-59 months old
                                        </td>
                                        <td>
                                            <select class="form-control rating5" name="micro_supplement_rating13">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><textarea name="micro_supplement_remark13" class="form-control"></textarea>
                                        </td>
                                        <td> &nbsp; </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">14. Micronutrient powder provided to young children 6-23 months
                                            old</td>
                                        <td>
                                            <select class="form-control rating5" name="micro_supplement_rating14">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><textarea name="micro_supplement_remark14" class="form-control"></textarea>
                                        </td>
                                        <td> &nbsp; </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">15. Weekly provision of iron-folic acid tablets to adolescent
                                            female learners in public schools through Weekly Iron Folic Acid (WIFA)
                                            Supplementation Program </td>
                                        <td>
                                            <select class="form-control rating5" name="micro_supplement_rating15">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><textarea name="micro_supplement_remark15" class="form-control"></textarea>
                                        </td>
                                        <td> &nbsp; </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">16. Weekly Iron Folic Acid (WIFA) provided to adolescent females
                                            in Grade 7 to 10 from private schools, out-of-school adolescent females and
                                            women aged 10-49 years not covered by WIFA in public schools </td>
                                        <td>
                                            <select class="form-control rating5" name="micro_supplement_rating16">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><textarea name="micro_supplement_remark16" class="form-control"></textarea>
                                        </td>
                                        <td> &nbsp; </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">{{__("Mandatory Food Fortification")}}</th>
                                        <th id="mandatory_food_average">0</th>
                                        <input type="hidden" id="mandatory_food_average2" name="mandatory_food_average"
                                            value="" class="form-control" />
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">17. Retail outlets selling iodized salt</td>
                                        <td>
                                            <select class="form-control rating6" name="mandatory_food_rating17">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><textarea name="mandatory_food_remarks17" class="form-control"></textarea>
                                        </td>
                                        <td> &nbsp; </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">18. Bakery owners using vitamin A fortified flour</td>
                                        <td>
                                            <select class="form-control rating6" name="mandatory_food_rating18">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><textarea name="mandatory_food_remarks18" class="form-control"></textarea>
                                        </td>
                                        <td> &nbsp; </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">19. Retail stores selling vitamin A fortified cooking oil </td>
                                        <td>
                                            <select class="form-control rating6" name="mandatory_food_rating19">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><textarea name="mandatory_food_remarks19" class="form-control"></textarea>
                                        </td>
                                        <td> &nbsp; </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">{{__("Nutrition in Emergencies Program")}}</th>
                                        <th id="emergencies_program_average">0</th>
                                        <input type="hidden" id="emergencies_program_average2"
                                            name="emergencies_program_average" value="" class="form-control" />
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">20. NiEm Plan integration in the DRRM-H plan and Local DRRM Plan
                                        </td>
                                        <td>
                                            <select class="form-control rating7" name="emergencies_program_rating20">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><textarea name="emergencies_program_remarks20"
                                                class="form-control"></textarea></td>
                                        <td> &nbsp; </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">
                                            {{__("Overweight and Obesity Management and Prevention Program")}}</th>
                                        <th id="prevention_program_average">0</th>
                                        <input type="hidden" id="prevention_program_average2"
                                            name="prevention_program_average" value="" class="form-control" />
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">21. Activities promoting healthy diets and active lifestyle for
                                            preschool children conducted</td>
                                        <td>
                                            <select class="form-control rating8" name="prevention_program_rating21">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><textarea name="prevention_program_remarks21"
                                                class="form-control"></textarea></td>
                                        <td> &nbsp; </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">22. Activities promoting proper diet and healthy lifestyle for
                                            the general public conducted</td>
                                        <td>
                                            <select class="form-control rating8" name="prevention_program_rating22">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><textarea name="prevention_program_remarks22"
                                                class="form-control"></textarea></td>
                                        <td> &nbsp; </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">{{__("Nutrition-Sensitive Programs")}}</th>
                                        <th id="nutri_sensitive_average">0</th>
                                        <input type="hidden" id="nutri_sensitive_average2"
                                            name="nutri_sensitive_average" value="" class="form-control" />
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">23. Eligible households with nutritionally vulnerable or
                                            affected provided with seed capital/ material assistance for livelihood</td>
                                        <td>
                                            <select class="form-control rating9" name="nutri_sensitive_rating23">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><textarea name="nutri_sensitive_remarks23" class="form-control"></textarea>
                                        </td>
                                        <td> &nbsp; </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">24. Eligible households with nutritionally vulnerable or
                                            affected provided with livelihood training</td>
                                        <td>
                                            <select class="form-control rating9" name="nutri_sensitive_rating24">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><textarea name="nutri_sensitive_remarks24" class="form-control"></textarea>
                                        </td>
                                        <td> &nbsp; </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">25. Gulayan sa Paaralan established and maintained in school
                                        </td>
                                        <td>
                                            <select class="form-control rating9" name="nutri_sensitive_rating25">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><textarea name="nutri_sensitive_remarks25" class="form-control"></textarea>
                                        </td>
                                        <td> &nbsp; </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">26. Households with nutritionally vulnerable or affected
                                            provided with inputs for backyard vegetable gardening</td>
                                        <td>
                                            <select class="form-control rating9" name="nutri_sensitive_rating26">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><textarea name="nutri_sensitive_remarks26" class="form-control"></textarea>
                                        </td>
                                        <td> &nbsp; </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">27. Households have access to safe drinking water</td>
                                        <td>
                                            <select class="form-control rating9" name="nutri_sensitive_rating27">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><textarea name="nutri_sensitive_remarks27" class="form-control"></textarea>
                                        </td>
                                        <td> &nbsp; </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">28. Ho


                                            useholds have access to sanitary toilet facilities</td>
                                        <td>
                                            <select class="form-control rating9" name="nutri_sensitive_rating28">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><textarea name="nutri_sensitive_remarks28" class="form-control"></textarea>
                                        </td>
                                        <td> &nbsp; </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">29. Schools provided with access to safe water, adequate
                                            toilets, handwashing facilities through the WASH in Schools (WinS) program
                                        </td>
                                        <td>
                                            <select class="form-control rating9" name="nutri_sensitive_rating29">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><textarea name="nutri_sensitive_remarks29" class="form-control"></textarea>
                                        </td>
                                        <td> &nbsp; </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">30. Reproductive health programs for adolescents implemented
                                        </td>
                                        <td>
                                            <select class="form-control rating9" name="nutri_sensitive_rating30">
                                            <option selected>Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><textarea name="nutri_sensitive_remarks30" class="form-control"></textarea>
                                        </td>
                                        <td> &nbsp; </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- End Nutrition Services -->

                        <!-- Start Changes in NS -->
                        <div class="form-section">

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col"><label>{{__("ELEMENTS")}}</label></th>
                                        <th scope="col"><label>{{__("RATING")}}</label></th>
                                        <th scope="col"><label>{{__("REMARKS/EVIDENCE")}}</label></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">{{__("Prevalence of underweight children 0-59 months")}}</td>
                                        <td>
                                            <select class="form-control rating9" name="underweight_child_rating">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </td>
                                        <td><textarea name="underweight_child_remarks" class="form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">{{__("Prevalence of stunted children 0-59 months")}}</td>
                                        <td>
                                            <select class="form-control rating9" name="stundent_child_rating">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </td>
                                        <td><textarea name="stundent_child_remarks" class="form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">{{__("Prevalence of wasted children 0-59 months")}}</td>
                                        <td>
                                            <select class="form-control rating9" name="wasted_child_rating">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </td>
                                        <td><textarea name="wasted_child_remarks" class="form-control"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">
                                            {{__("Prevalence of overweight and obese children 0-59 months")}}</td>
                                        <td>
                                            <select class="form-control rating9" name="obese_child_rating">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </td>
                                        <td><textarea name="obese_child_remarks" class="form-control"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">{{__("Prevalence of wasted school children")}}</td>
                                        <td>
                                            <select class="form-control rating9" name="wasted_school_rating">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </td>
                                        <td><textarea name="wasted_school_remarks" class="form-control"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">{{__("Prevalence of overweight and obese school children")}}
                                        </td>
                                        <td>
                                            <select class="form-control rating9" name="obese_school_rating">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </td>
                                        <td><textarea name="obese_school_remarks" class="form-control"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">{{__("Prevalence of nutritionally at-risk pregnant women")}}
                                        </td>
                                        <td>
                                            <select class="form-control rating9" name="risk_pregnant_rating">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </td>
                                        <td><textarea name="risk_pregnant_remarks" class="form-control"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">{{__("Operation Timbang Plus Coverage")}}</td>
                                        <td>
                                            <select class="form-control rating9" name="timbang_plus_rating">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </td>
                                        <td><textarea name="timbang_plus_remarks" class="form-control"></textarea></td>
                                    </tr>

                                </tbody>
                            </table>


                        </div>
                        <!-- End Changes in NS -->

                        <!-- Start Discussion Questions -->
                        <div class="form-section">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col"><label>&nbsp;</label></th>
                                        <th scope="col">{{__("Dimensions")}}</th>
                                        <th scope="col">{{__("What are the good practices done/initiated?")}}</th>
                                        <th scope="col">{{__("What are the issues and problems and why?")}}</th>
                                        <th scope="col">{{__("What local initiatives have been done?")}}</th>
                                        <th scope="col">{{__("What are the immediate actions for improvement?")}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">{{__("1")}}</td>
                                        <td scope="row">{{__("Vision and Mission")}}</td>
                                        <td><textarea name="vision_good_practices_remarks"
                                                class="form-control"></textarea></td>
                                        <td><textarea name="vision_issues_problems_remarks"
                                                class="form-control"></textarea></td>
                                        <td><textarea name="vision_local_initiatives_remarks"
                                                class="form-control"></textarea></td>
                                        <td><textarea name="vision_immediate_actions_remarks"
                                                class="form-control"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">{{__("2")}}</td>
                                        <td scope="row">{{__("Nutrition Laws and Policies")}}</td>
                                        <td><textarea name="policies_good_practices_remarks"
                                                class="form-control"></textarea></td>
                                        <td><textarea name="policies_issues_problems_remarks"
                                                class="form-control"></textarea></td>
                                        <td><textarea name="policies_local_initiatives_remarks"
                                                class="form-control"></textarea></td>
                                        <td><textarea name="policies_immediate_actions_remarks"
                                                class="form-control"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">{{__("3")}}</td>
                                        <td scope="row">{{__("Governance and Organizational Structure")}}</td>
                                        <td><textarea name="governance_good_practices_remarks"
                                                class="form-control"></textarea></td>
                                        <td><textarea name="governance_issues_problems_remarks"
                                                class="form-control"></textarea></td>
                                        <td><textarea name="governance_local_initiatives_remarks"
                                                class="form-control"></textarea></td>
                                        <td><textarea name="governance_immediate_actions_remarks"
                                                class="form-control"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">{{__("4")}}</td>
                                        <td scope="row">{{__("Local Nutrition Committee Management Functions")}}</td>
                                        <td><textarea name="nutri_good_practices_remarks"
                                                class="form-control"></textarea></td>
                                        <td><textarea name="nutri_issues_problems_remarks"
                                                class="form-control"></textarea></td>
                                        <td><textarea name="nuti_local_initiatives_remarks"
                                                class="form-control"></textarea></td>
                                        <td><textarea name="nutri_immediate_actions_remarks"
                                                class="form-control"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">{{__("5")}}</td>
                                        <td scope="row">{{__("Nutrition Interventions/ Services")}}</td>
                                        <td><textarea name="services_good_practices_remarks"
                                                class="form-control"></textarea></td>
                                        <td><textarea name="services_issues_problems_remarks"
                                                class="form-control"></textarea></td>
                                        <td><textarea name="services_local_initiatives_remarks"
                                                class="form-control"></textarea></td>
                                        <td><textarea name="services_immediate_actions_remarks"
                                                class="form-control"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">{{__("5")}}</td>
                                        <td scope="row">
                                            {{__("Changes in Nutritional Status in the Local Government Unit")}}</td>
                                        <td><textarea name="changes_good_practices_remarks"
                                                class="form-control"></textarea></td>
                                        <td><textarea name="changes_issues_problems_remarks"
                                                class="form-control"></textarea></td>
                                        <td><textarea name="changes_local_initiatives_remarks"
                                                class="form-control"></textarea></td>
                                        <td><textarea name="changes_immediate_actions_remarks"
                                                class="form-control"></textarea></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- End Discussion Questions -->


                        <div class="form-navigation">
                            <button type="button" class="previous btn btn-outline-primary btn-info float-left">&lt;
                                Previous</button>
                            <button type="button" class="next btn btn-outline-primary btn-info float-right">Next
                                &gt;</button>
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

{{-- <script type="text/javascript">
$(function() {
    var $sections = $('.form-section');
    function navigateTo(index) {
        $sections.removeClass('current').eq(index).addClass('current');
        $('.form-navigation .previous').toggle(index > 0);
        var atTheEnd = index >= $sections.length - 1;
        $('.form-navigation .next').toggle(!atTheEnd);
        $('.form-navigation [type=submit]').toggle(atTheEnd);
        $('.nav-link').css({
            'background-color': '',
            'color': ''
        });
        const step = document.querySelector('.step' + index);
        step.style.backgroundColor = "#64987e";
        step.style.color = "white";
    }
    function curIndex() {
        return $sections.index($sections.filter('.current'));
    }
    function validateSection(index) {
        var isValid = true;
        $sections.eq(index).find(':input[required]').each(function() {
            if (!this.value.trim()) {
                isValid = false;
                $(this).addClass('is-invalid');
            } else {
                $(this).removeClass('is-invalid');
            }
        });
        return isValid;
    }
    $('.form-navigation .previous').click(function() {
        navigateTo(curIndex() - 1);
    });
    $('.form-navigation .next').click(function() {
        if (validateSection(curIndex())) {
            navigateTo(curIndex() + 1);
        }
    });
    $sections.each(function(index, section) {
        $(section).find(':input').attr('data-group', 'block-' + index);
    });
    navigateTo(0);
});

$(document).ready(function() {
    function loadRegions(regionSelectId) {
        $.ajax({
            url: '{{ route("regions.get") }}',
            method: 'GET',
            success: function(response) {
                console.log('Regions:', response);
                let regionSelect = $(regionSelectId);
                regionSelect.find('option:not(:first)').remove();
                response.forEach(function(region) {
                    regionSelect.append(new Option(region.region, region.id));
                });
            },
            error: function(xhr, status, error) {
                console.error('Error loading regions:', xhr.responseText);
                alert('Error loading regions');
            }
        });
    }

    function loadProvincesByRegion(regionId, provinceSelectId) {
        console.log('Loading provinces for region:', regionId);
        $.ajax({
            url: '{{ url("provinces") }}/' + regionId,
            method: 'GET',
            success: function(response) {
                console.log('Provinces:', response);
                let provinceSelect = $(provinceSelectId);
                provinceSelect.find('option:not(:first)').remove();
                response.forEach(function(province) {
                    provinceSelect.append(new Option(province.province, province.provcode));
                });
            },
            error: function(xhr, status, error) {
                console.error('Error loading provinces:', xhr.responseText);
                alert('Error loading provinces');
            }
        });
    }

    function loadCitiesByProvince(provcode, citySelectId) {
        console.log('Loading cities for province code:', provcode);
        $.ajax({
            url: '{{ url("cities") }}/' + provcode,
            method: 'GET',
            success: function(response) {
                console.log('Cities:', response);
                let citySelect = $(citySelectId);
                citySelect.find('option:not(:first)').remove();
                response.forEach(function(city) {
                    citySelect.append(new Option(city.cityname, city.id));
                });
            },
            error: function(xhr, status, error) {
                console.error('Error loading cities:', xhr.responseText);
                alert('Error loading cities');
            }
        });
    }

    function loadBrgyByCities(citymuncode, brgySelectId) {
        console.log('Loading brgy for city code:', citymuncode);
        $.ajax({
            url: '{{ url("cities") }}/' + citymuncode,
            method: 'GET',
            success: function(response) {
                console.log('Brgy:', response);
                let brgySelect = $(brgySelectId);
                brgySelect.find('option:not(:first)').remove();
                response.forEach(function(brgy) {
                    brgySelect.append(new Option(brgy.brgyname, brgy.id));
                });
            },
            error: function(xhr, status, error) {
                console.error('Error loading brgy:', xhr.responseText);
                alert('Error loading brgy');
            }
        });
    }

    function setupDropdowns(regionSelectId, provinceSelectId, citySelectId, brgySelectId) {
        loadRegions(regionSelectId);

        $(regionSelectId).change(function() {
            let selectedRegionId = $(this).val();
            console.log('Region changed to:', selectedRegionId);
            if (selectedRegionId) {
                loadProvincesByRegion(selectedRegionId, provinceSelectId);
                $(citySelectId).find('option:not(:first)').remove();
            } else {
                $(provinceSelectId).find('option:not(:first)').remove();
                $(citySelectId).find('option:not(:first)').remove();
            }
        });

        $(provinceSelectId).change(function() {
            let selectedProvcode = $(this).val();
            console.log('Province changed to:', selectedProvcode);
            if (selectedProvcode) {
                loadCitiesByProvince(selectedProvcode, citySelectId);
            } else {
                $(citySelectId).find('option:not(:first)').remove();
            }
        });

        $(brgySelectId).change(function() {
            let selectedCitymuncode = $(this).val();
            console.log('City changed to:', selectedCitymuncode);
            if (selectedCitymuncode) {
                loadBrgyByCities(selectedCitymuncode, brgySelectId);
            } else {
                $(brgySelectId).find('option:not(:first)').remove();
            }
        });
    }
    
    setupDropdowns('#loadRegionMellpi', '#loadProvinceMellpi', '#loadCityMellpi', 'loadBrgyMellpi');
    });
</script> --}}

<script>
    $(document).ready(function() {
    function loadRegions(regionSelectId) {
        $.ajax({
            url: '{{ route("regions.get") }}',
            method: 'GET',
            success: function(response) {
                console.log('Regions:', response);
                let regionSelect = $(regionSelectId);
                regionSelect.find('option:not(:first)').remove();
                response.forEach(function(region) {
                    regionSelect.append(new Option(region.region, region.id));
                });
            },
            error: function(xhr, status, error) {
                console.error('Error loading regions:', xhr.responseText);
                alert('Error loading regions');
            }
        });
    }

    function loadProvincesByRegion(regionId, provinceSelectId) {
        console.log('Loading provinces for region:', regionId);
        $.ajax({
            url: '{{ url("provinces") }}/' + regionId,
            method: 'GET',
            success: function(response) {
                console.log('Provinces:', response);
                let provinceSelect = $(provinceSelectId);
                provinceSelect.find('option:not(:first)').remove();
                response.forEach(function(province) {
                    provinceSelect.append(new Option(province.province, province.provcode));
                });
            },
            error: function(xhr, status, error) {
                console.error('Error loading provinces:', xhr.responseText);
                alert('Error loading provinces');
            }
        });
    }

    function loadCitiesByProvince(provcode, citySelectId) {
        console.log('Loading cities for province code:', provcode);
        $.ajax({
            url: '{{ url("cities") }}/' + provcode,
            method: 'GET',
            success: function(response) {
                console.log('Cities:', response);
                let citySelect = $(citySelectId);
                citySelect.find('option:not(:first)').remove();
                response.forEach(function(city) {
                    // Correctly log and append city data
                    console.log('City data:', city);
                    citySelect.append(new Option(city.cityname, city.citymuncode));
                });
            },
            error: function(xhr, status, error) {
                console.error('Error loading cities:', xhr.responseText);
                alert('Error loading cities');
            }
        });
    }

    function loadBarangaysByCity(citymuncode, brgySelectId) {
    console.log('Loading barangays for citymuncode:', citymuncode);
    $.ajax({
        url: '{{ url("barangays") }}/' + citymuncode,
        method: 'GET',
        success: function(response) {
            console.log('Barangays:', response);
            let brgySelect = $(brgySelectId);
            brgySelect.find('option:not(:first)').remove();

            if (response.error) {
                alert('Error loading barangays: ' + response.error);
                return;
            }

            response.forEach(function(brgy) {
                brgySelect.append(new Option(brgy.brgyname, brgy.id));
            });
        },
        error: function(xhr, status, error) {
            console.error('Error loading barangays:', xhr.responseText);
            alert('Error loading barangays');
        }
    });
}

    function setupDropdowns(regionSelectId, provinceSelectId, citySelectId, brgySelectId) {
        loadRegions(regionSelectId);

        $(regionSelectId).change(function() {
            let selectedRegionId = $(this).val();
            console.log('Region changed to:', selectedRegionId);
            if (selectedRegionId) {
                loadProvincesByRegion(selectedRegionId, provinceSelectId);
                $(citySelectId).find('option:not(:first)').remove();
                $(brgySelectId).find('option:not(:first)').remove();
            } else {
                $(provinceSelectId).find('option:not(:first)').remove();
                $(citySelectId).find('option:not(:first)').remove();
                $(brgySelectId).find('option:not(:first)').remove();
            }
        });

        $(provinceSelectId).change(function() {
            let selectedProvcode = $(this).val();
            console.log('Province changed to:', selectedProvcode);
            if (selectedProvcode) {
                loadCitiesByProvince(selectedProvcode, citySelectId);
                $(brgySelectId).find('option:not(:first)').remove();
            } else {
                $(citySelectId).find('option:not(:first)').remove();
                $(brgySelectId).find('option:not(:first)').remove();
            }
        });

        $(citySelectId).change(function() {
            let selectedCitymuncode = $(this).val();
            console.log('City changed to:', selectedCitymuncode);
            if (selectedCitymuncode) {
                loadBarangaysByCity(selectedCitymuncode, brgySelectId);
            } else {
                $(brgySelectId).find('option:not(:first)').remove();
            }
        });
    }
        // Setup for the specific view dropdowns
        setupDropdowns('#loadRegionMellpi', '#loadProvinceMellpi', '#loadCityMellpi', '#loadBrgyMellpi');
    });
</script>


@endsection

{{-- <script src="{{ asset('assets/js/joboy.js') }}"></script> --}}