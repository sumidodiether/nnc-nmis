@extends('layout.default')
  
@section('content')
<!-- Start Second Step -->
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label >{{__(" LGU Demographics")}}</label>
                     
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label >{{__(" Total population")}}</label>
                      <input type="number" name="total_population" class="form-control" value="">
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label >{{__(" No. of households")}}</label>
                      <input type="number" name="num_households" class="form-control" value="">
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label >{{__(" No. of sitios/puroks")}}</label>
                      <input type="number" name="num_sitios" class="form-control" value="">
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label >{{__(" No. of households with access to safe water")}}</label>
                      <input type="number" name="num_household_safe_water" class="form-control" value="">
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label >{{__(" No. of households with sanitary toilets")}}</label>
                      <input type="number" name="num_household_sanitary_toilets" class="form-control" value="">
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label >{{__(" No. of Day Care Center")}}</label>
                      <input type="number" name="num_day_care_center" class="form-control" value="">
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label >{{__(" No. of public elementary and secondary schools")}}</label>
                      <input type="number" name="num_public_secondary_schools" class="form-control" value="">
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label >{{__(" No. of Barangay Health Stations")}}</label>
                      <input type="number" name="num_brgy_health_stations" class="form-control" value="">
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label >{{__(" No. of retail outlets/ sari-sari stores")}}</label>
                      <input type="number" name="num_retail_outlets" class="form-control" value="">
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label >{{__(" No. of bakeries, public markets, transport terminals")}}</label>
                      <input type="number" name="num_bakeries_market" class="form-control" value="">
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label >{{__(" Percent of lactating mothers exclusively breastfeeding until the 5th month")}}</label>
                      <input type="number" name="pertcent_lacting_mothers" class="form-control" value="">
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label >{{__(" Percent(%) of lactating mothers exclusively breastfeeding until the 5th month")}}</label>
                      <input type="text" name="pertcent_lacting_mothers" class="form-control" value="">
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label >{{__(" Terrain")}}</label>
                      <input type="text" name="terrain" class="form-control" value="">
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label >{{__(" Hazards (Type/Month) and respective LGU/Households affected")}}</label>
                      <input type="text" name="hazards" class="form-control" value="">
                      
                    </div>
                  </div>
                </div>
                <!-- End Second Step -->
@endsection