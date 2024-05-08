<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/joboy.css') }}" >
<script src="{{ asset('assets/js/joboy.js') }}"></script> 

@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Mellpi Pro',
    'activePage' => 'mellpi_pro',
    'activeNav' => '',
])

@section('content')

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
            <form method="post" class="employee-form" action="{{ route('mellpi_pro.create') }}" autocomplete="off"
            enctype="multipart/form-data">
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

              {{-- Joboy End --}}

            


            </form>
          </div>
      </div>
    </div>

<script>

    $(function(){
        var $sections=$('.form-section');

        function navigateTo(index){

            $sections.removeClass('current').eq(index).addClass('current');

            $('.form-navigation .previous').toggle(index>0);
            var atTheEnd = index >= $sections.length - 1;
            $('.form-navigation .next').toggle(!atTheEnd);
            $('.form-navigation [Type=submit]').toggle(atTheEnd);

     
            const step= document.querySelector('.step'+index);
            step.style.backgroundColor="#17a2b8";
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


</script>
     
@endsection