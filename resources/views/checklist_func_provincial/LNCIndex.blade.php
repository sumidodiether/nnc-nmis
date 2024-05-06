<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/joboy.css') }}" >
<script src="{{ asset('assets/js/joboy.js') }}"></script> 

@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Mellpi Pro',
    'activePage' => 'mellpi_pro',
    'activeNav' => '',
])

@section('content')
  <div class="panel-header panel-header-sm"> 
  </div>
  <div class="content">
    <div class="card">
      <div class="row-md-12">
        <div class="card-header">
          <h5 class="title">{{__(" LNC Functional Provincial")}}</h5>
        </div> 
      </div>
      <div class="row row-lg-12 overflow-container">
        <table class="table table-bordered border-primary">
          <tr>
            <th class=" fixed-column tableColWidth">Key Activities  <br>(1)</th>
            <th class=" fixed-column tableColWidth">Indicators <br>(2)</th>
            <th>Name of Provinces/ Cities<br>(2)</th>
          </tr>

          {{-- 1st row --}}
          <tr>
            <td class=" fixed-column tableColWidth">Capacity Development</td>
            <td class=" fixed-column tableColWidth">a. Members if local nutrition committee trained/completed training on Nutrition Program management</td>
            <td>Germany</td>
          </tr>
          {{-- 2nd row --}}
          <tr>
            <td colspan='2'>Program Planning</td>
            {{-- create data loop --}}
            {{-- use <TR<Td to display new column in top merged column --}}
            <td>Mexico</td>
          </tr>
          {{-- 3rd row --}}
          <tr>
            <td class=" fixed-column tableColWidth" rowspan="2">1. Organization/Re-Organization/Strengthening of PNC</td>
            <td class=" fixed-column tableColWidth">a. Meetings regularly held at least once every quarter presided by the mayor or designated representative</td>
            <td>1. Org : a. Meeting : _______</td>
          </tr> 
          {{-- 4th row --}}
          <tr>
            <td class=" fixed-column tableColWidth">Program Planning</td>
            <td>1. Org :Program : Mexico</td>
          </tr>
            {{-- 5th  row --}}
          <tr>
            <td class=" fixed-column tableColWidth" rowspan="2">2. Conduct of Nutritional Assessment</td>
            <td class=" fixed-column tableColWidth">a. OPT & school weighing report updated</td>
            <td>2. Conduct : a. OPT : _______</td>
          </tr> 
          {{-- 6th row --}}
          <tr>
            <td class=" fixed-column tableColWidth">b. Nutrition situation report prepared</td>
            <td>2. Conduct :b. Nutrition : Mexico</td>
          </tr>

          {{-- 6th  row --}}
          <tr>
            <td class=" fixed-column tableColWidth" rowspan="2">3. Formulation of Nutrition Action Plan</td>
            <td class=" fixed-column tableColWidth">a. NAP integrated into the Local Development Plan with budget</td>
            <td>3. Formulation: a. NAP: _______</td>
          </tr> 
          {{-- 7th row --}}
          <tr>
            <td class=" fixed-column tableColWidth">b. NAP integrated into the Annual Investment Plan</td>
            <td>3. Formulation: b. NAP: _______</td>
          </tr>

          <tr>
            <td class=" fixed-column tableColWidth">4.  Resource Generation and Mobilization</td>
            <td class=" fixed-column tableColWidth">a. Funds allocated and expended for nutrition and related activities from annual budget</td>
            <td>Germany</td>
          </tr>

          <tr>
            <td class=" fixed-column tableColWidth" ><span style="font-weight:bold"> Service Delivery</span> (e.g. counseling on breastfeeding, organization of peer counsellors, counduct of nutrition education activities, vitamin A and iron supplementation to preschool children and pregnant women; distribution of seedlings to families with underweight children; supplementary feeding)</td>
            <td class=" fixed-column tableColWidth">a. Targeted groups provided with nutrition and related interventions</td>
            <td>Germany</td>
          </tr>
 
          <tr>
            <td class=" fixed-column tableColWidth" rowspan="3">Monitoring and Evaluation</td>
            <td class=" fixed-column tableColWidth">a. Monitoring visits conducted and documented at least twice a year</td>
            <td>3. Formulation: a. NAP: _______</td>
          </tr> 
   
          <tr>
            <td class=" fixed-column tableColWidth">b. Quarterly monitoring report prepared and submitted to Provincial Nutrition Office</td>
            <td>3. Formulation: b. NAP: _______</td>
          </tr>

            <tr>
            <td class=" fixed-column tableColWidth">c. Program Implementation Review (PIR) conducted at least once a year with documentation and submitted to Provincial Nutrition Office</td>
            <td>3. Formulation: b. NAP: _______</td>
          </tr>
        </table> 
      </div>
    </div>
  </div>
     
@endsection