<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/joboy.css') }}" >

@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Mellpi Pro',
    'activePage' => 'mellpi_pro',
    'activeNav' => '',
])

@section('content')

{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<style>
.form-section{
    display: none;
}

.form-section.current{
    display: inline;
}
.parsley-errors-list{
    color:red;
}

</style>

  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="title">{{__(" LGU Profile")}}</h5>
          </div>
          <div class="card-body">

          {{-- Joboy --}}
          <div class="nav nav-fill my-3">
                          <label class="nav-link shadow-sm step0    border ml-2 ">Step One</label>
                          <label class="nav-link shadow-sm step1   border ml-2 " >Step Two</label>
                          <label class="nav-link shadow-sm step2   border ml-2 " >Step Three</label>
                          <label class="nav-link shadow-sm step3   border ml-2 " >Step Four</label>
                        </div>
          {{-- Joboy --}}

            <form method="post" class="employee-form" action="{{ route('mellpi_pro.create') }}" autocomplete="off" enctype="multipart/form-data">
              @csrf
              @include('alerts.success')
              

              {{-- Joboy Start --}}

            <div class="form-section">
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
                </div>
                <div class="form-section">
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
                </div>
                <div class="form-section">
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
                </div>

                <div class="form-section">
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
                </div>

              <div class="form-navigation mt-3">
                 <button type="button" class="previous btn btn-primary float-left">&lt; Previous</button>
                 <button type="button" class="next btn btn-primary float-right">Next &gt;</button>
                 <button type="submit" class="btn btn-success float-right">Submit</button>
              </div>

              {{-- Joboy End --}}

            


            </form>
          </div>
      </div>
    </div>

{{-- <script type="text/javascript">

    $(function(){
        var $sections=$('.form-section');

        function navigateTo(index){

            $sections.removeClass('current').eq(index).addClass('current');

            $('.form-navigation .previous').toggle(index>0);
            var atTheEnd = index >= $sections.length - 1;
            $('.form-navigation .next').toggle(!atTheEnd);
            $('.form-navigation [Type=submit]').toggle(atTheEnd);

     
            const step= document.querySelector('.step'+index);
            step.style.backgroundColor="#64987e";
            step.style.color="white";



        }

        function curIndex(){

            return $sections.index($sections.filter('.current'));
        }

        $('.form-navigation .previous').click(function(){
            navigateTo(curIndex() - 1);
        });

        $('.form-navigation .next').click(function(){
            $('.employee-form').parsley().whenValidate({
                group:'block-'+curIndex()
            }).done(function(){
                navigateTo(curIndex()+1);
            });

        });

        $sections.each(function(index,section){
            $(section).find(':input').attr('data-parsley-group','block-'+index);
        });


        navigateTo(0);



    });


</script> --}}

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

<script type="text/javascript">
    $(function(){
        var $sections = $('.form-section');

        function navigateTo(index){
            $sections.removeClass('current').eq(index).addClass('current');
            $('.form-navigation .previous').toggle(index > 0);
            var atTheEnd = index >= $sections.length - 1;
            $('.form-navigation .next').toggle(!atTheEnd);
            $('.form-navigation [Type=submit]').toggle(atTheEnd);

            const step = document.querySelector('.step' + index);
            step.style.backgroundColor = "#64987e";
            step.style.color = "white";
        }

        function curIndex(){
            return $sections.index($sections.filter('.current'));
        }

        $('.form-navigation .previous').click(function(){
            navigateTo(curIndex() - 1);
        });

        $('.form-navigation .next').click(function(){
            $('.employee-form').parsley().whenValidate({
                group: 'block-' + curIndex()
            }).done(function(){
                navigateTo(curIndex() + 1);
            });
        });

        $sections.each(function(index, section){
            $(section).find(':input').attr('data-parsley-group', 'block-' + index);
        });

        navigateTo(0);
    });
</script>


@endsection