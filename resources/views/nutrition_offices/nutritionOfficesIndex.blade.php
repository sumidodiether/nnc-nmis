<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/joboy.css') }}">
<script src="{{ asset('assets/js/joboy.js') }}"></script>

@extends('layouts.app', [
'class' => 'sidebar-mini ',
'namePage' => 'Nutrition Offices',
'activePage' => 'NutritionOfficesIndex',
'activeNav' => '',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="card">
        <div class="row row-12" style="display:inline-block">
            <div class="card-header">
                <h5 class="title">{{__("Nutrition Offices")}}</h5>
                <div>
                    <a class="btn btn-outline-primary" href="{{route('nutritionOffices')}}">Nutrition Offices</a>
                </div>
            </div>
        </div>
        <div class="row row-12">
            <table id="nutriTable" class="table table-striped table-bordered" style="width: 100%;">
                <thead>
                    <tr>
                        <th>10-digit PSGC</th>
                        <th>Geographic Level</th>
                        <th>Region</th>
                        <th>Province</th>
                        <th>City/Mun</th>
                        <th>Income Class</th>
                        <th>Nutrition Office</th>
                        <th>Separate Nutrition Budget</th>
                        <th>Under What Office</th>
                        <th>P/CNAO Position</th>
                        <th>P/CNAO Job Title</th>
                        <th>P/CNAO Employment Status</th>
                        <th>P/CNAO Salary Grade</th>
                        <th>More than 1 P/CNAO</th>
                        <th>D/CNPC Position</th>
                        <th>D/CNPC Job Title</th>
                        <th>D/CNPC Employment Status</th>
                        <th>D/CNPC Salary Grade</th>
                        <th>More than 1 D/CNPC</th>
                        <th>Number of Technical Support Staff</th>
                        <th>Number of Administrative Support Staff</th>
                    </tr>
                </thead>
                @foreach ($NutriOffice as $nutriOffice)
                <tbody>
                    <tr>
                        <td>{{$nutriOffice->psgcs_code}}</td>
                        <td>{{$nutriOffice->geoLevel}}</td>
                        <td>{{$nutriOffice->regions_name}}</td>
                        <td>{{$nutriOffice->province_name}}</td>
                        <td>{{$nutriOffice->municipal_id}}</td>
                        <td>{{$nutriOffice->income_class}}</td>
                        <td>{{$nutriOffice->nutritionOffice}}</td>
                        <td>{{$nutriOffice->separateNutritionBudget}}</td>
                        <td>{{$nutriOffice->underWhatOffice}}</td>
                        <td>{{$nutriOffice->pcnao_position}}</td>
                        <td>{{$nutriOffice->pcnao_jobTitle}}</td>
                        <td>{{$nutriOffice->pcnao_emplStat}}</td>
                        <td>{{$nutriOffice->pcnao_salaryGrade}}</td>
                        <td>{{$nutriOffice->pcnao_moreThanOne}}</td>
                        <td>{{$nutriOffice->dcnpc_position}}</td>
                        <td>{{$nutriOffice->dcnpc_jobTitle}}</td>
                        <td>{{$nutriOffice->dcnpc_emplStat}}</td>
                        <td>{{$nutriOffice->dcnpc_salaryGrade}}</td>
                        <td>{{$nutriOffice->dcnpc_moreThanOne}}</td>
                        <td>{{$nutriOffice->numTechSupp}}</td>
                        <td>{{$nutriOffice->numAdminSupp}}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection