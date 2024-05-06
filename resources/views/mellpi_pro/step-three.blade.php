@extends('layout.default')
@section('content')
<!-- Start third step -->
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label >{{__(" Population")}}</label>
                      <input type="number" name="population" class="form-control" value="">
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label >{{__(" Nutritional Status")}}</label>
                      <input type="number" name="nutritional_status" class="form-control" value="">
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label >{{__(" Land Use Classification")}}</label>
                      <input type="text" name="land_classification" class="form-control" value="">
                      
                    </div>
                  </div>
                </div>
                <!-- End third step  -->
@endsection