@extends('layout.default')
@section('content')
<!-- First Step -->
              <div class="row">
                    <div class="col-md-7 pr-1">
                        <div class="form-group">
                            <label>{{__(" Barangay")}}</label>
                            <select class="form-control" name="barangay">
                              <option selected>Open this select menu</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label>{{__(" Municipality/City")}}</label>
                      <select class="form-control" name="municipality">
                              <option selected>Open this select menu</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label >{{__(" Province")}}</label>
                      <select class="form-control" name="province">
                              <option selected>Open this select menu</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                      </select>
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label >{{__(" Income class")}}</label>
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
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label >{{__(" Date of monitoring")}}</label>
                      <input type="date" name="date_monitoring" class="form-control" value="">
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label >{{__(" Period Covered")}}</label>
                      <input type="text" name="period_covered" class="form-control" value="">
                      
                    </div>
                  </div>
                </div>
                
                <!-- End First Step -->
@endsection