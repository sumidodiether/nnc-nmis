

@extends('layout.default')
@section('content')

<!--Start fourth step  -->
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label >{{__(" Interventions with Action Lines from NGA/New Standards")}}</label>
                      </br >
                      <label >{{__(" Tabulated Inputs")}}</label>
                   
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label >{{__(" Source and remarks")}}</label>
                      <input type="text" name="source_remarks" class="form-control" value="">
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label >{{__(" Available/Received")}}</label>
                      <select class="form-group" name="available">
                              <option selected>Open this select menu</option>
                              <option value="1">Yes</option>
                              <option value="2">No</option>
                      </select>
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label >{{__(" Date Received")}}</label>
                      <input type="date" name="date_received" class="form-control" value="">
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label >{{__(" Volume/No. of Pax")}}</label>
                      <input type="text" name="volume" class="form-control" value="">
                      
                    </div>
                  </div>
                </div>

@endsection