<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/joboy.css') }}" >
<script src="{{ asset('assets/js/joboy.js') }}"></script> 

@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'lncFunction',
    'activePage' => 'lncFunction',
    'activeNav' => '',
])

@section('content')
  <div class="panel-header panel-header-sm"> 
  </div> 
  <div class="content">
    <div class="card">
      <div class="row-md-12" style="display:flex; flex-direction: row;  ">
        <div class="card-header">
          <h5 class="title">{{__(" LNC Functional Provincial")}}</h5>
        </div> 
        <div> 
        <a  class="btn btn-outline-primary" href="{{route('lncFunction.create')}}" >Create data</a> 
        </div>
      </div>
      <div class="row row-md-12" >
        <table class="table table-bordered border-primary" style="max-width: 1500px!important; ">
          <div>
             <tr class="alignCenter"> 
                <th rowspan="2"  class="theadheight fixed-1column " scope="row ">Key Activities <br> (1)</th>
                <th rowspan="2"  class="theadheight fixed-1column " scope="row "> Indicators <br> (1)</th> 
                <th colspan='5'>Name of Provinces/ Cities <br> (3)</th> 
              </tr> 
          </div>

          {{-- loop manucipalities --}}
            <div >
             <tr class="alignCenter cellwidth" > 
                <th>Abra</th>
                <th>Apayao</th> 
                <th>Benguet</th>
                <th>Kalinga</th> 
                <th>Mt. Prov.</th> 
              </tr> 
          </div>
             
        <div>
            {{-- 1st row --}}
            <tr>
              <td class=" fixed-1column tableColWidth" scope="row" style="font-weight:bold">Capacity Development</td>
              <td class=" fixed-2column tableColWidth" scope="row">a. Members if local nutrition committee trained/completed training on Nutrition Program management</td>
              {{-- start loop td --}}
                <td class="alignCenter" >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"    >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>

              {{-- end --}}
            </tr>
            {{-- 2nd row --}}
            <tr>
              <td colspan='2' style="font-weight:bold"  class=" fixed-1column tableColWidth" scope="row">Program Planning</td>
              {{-- start loop td --}}
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
              {{-- end --}}
            </tr>
            {{-- 3rd row --}}
            <tr>
              <td class=" fixed-1column tableColWidth" scope="row" rowspan="2">1. Organization/Re-Organization/Strengthening of PNC</td>
              <td class=" fixed-2column tableColWidth" scope="row">a. Meetings regularly held at least once every quarter presided by the mayor or designated representative</td>
              {{-- start loop td --}}
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
              {{-- end --}}
            </tr> 
            {{-- 4th row --}}
            <tr>
              <td class=" fixed-2column tableColWidth" scope="row">b. Minutes of meetings documented</td>
              {{-- start loop td --}}
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
              {{-- end --}}
            </tr>
              {{-- 5th  row --}}
            <tr>
              <td class=" fixed-1column tableColWidth" scope="row" rowspan="2">2. Conduct of Nutritional Assessment</td>
              <td class=" fixed-2column tableColWidth" scope="row">a. OPT & school weighing report updated</td>
              {{-- start loop td --}}
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
              {{-- end --}}
            </tr> 
            {{-- 6th row --}}
            <tr>
              <td class=" fixed-2column tableColWidth" scope="row">b. Nutrition situation report prepared</td>
              {{-- start loop td --}}
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
              {{-- end --}}
            </tr>

            {{-- 6th  row --}}
            <tr>
              <td class=" fixed-1column tableColWidth" scope="row" rowspan="2">3. Formulation of Nutrition Action Plan</td>
              <td class=" fixed-2column tableColWidth" scope="row">a. NAP integrated into the Local Development Plan with budget</td>
              {{-- start loop td --}}
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
              {{-- end --}}
            </tr> 
            {{-- 7th row --}}
            <tr>
              <td class=" fixed-2column tableColWidth" scope="row">b. NAP integrated into the Annual Investment Plan</td>
            {{-- start loop td --}}
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
              {{-- end --}}
            </tr>

            <tr>
              <td class=" fixed-1column tableColWidth" scope="row">4.  Resource Generation and Mobilization</td>
              <td class=" fixed-2column tableColWidth" scope="row">a. Funds allocated and expended for nutrition and related activities from annual budget</td>
              {{-- start loop td --}}
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
              {{-- end --}}
            </tr>

            <tr>
              <td class=" fixed-1column tableColWidth" scope="row" ><span style="font-weight:bold"> Service Delivery</span> (e.g. counseling on breastfeeding, organization of peer counsellors, counduct of nutrition education activities, vitamin A and iron supplementation to preschool children and pregnant women; distribution of seedlings to families with underweight children; supplementary feeding)</td>
              <td class=" fixed-2column tableColWidth" scope="row">a. Targeted groups provided with nutrition and related interventions</td>
              {{-- start loop td --}}
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
              {{-- end --}}
            </tr>
  
            <tr>
              <td class=" fixed-1column tableColWidth" scope="row" rowspan="3">Monitoring and Evaluation</td>
              <td class=" fixed-2column tableColWidth" scope="row">a. Monitoring visits conducted and documented at least twice a year</td>
            {{-- start loop td --}}
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
              {{-- end --}}
            </tr> 
    
            <tr>
              <td class=" fixed-2column tableColWidth" scope="row">b. Quarterly monitoring report prepared and submitted to Provincial Nutrition Office</td>
              {{-- start loop td --}}
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
              {{-- end --}}
            </tr>

              <tr>
              <td class=" fixed-2column tableColWidth" scope="row"  >c. Program Implementation Review (PIR) conducted at least once a year with documentation and submitted to Provincial Nutrition Office</td>
              {{-- start loop td --}}
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
                <td class="alignCenter"  >2sfsdfsdfsdfsfsdfsdfsdf7</td>
              {{-- end --}}
            </tr>
        </div> 
        </table> 
      </div>
    </div>
  </div>
     
@endsection