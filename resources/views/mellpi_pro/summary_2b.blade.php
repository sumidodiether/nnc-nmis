@extends('layouts.app', [
'class' => 'sidebar-mini ',
'namePage' => 'Mellpi Pro Summary',
'activePage' => 'mellpi_pro_summary',
'activeNav' => '',
])

@section('content')


<div class="panel-header panel-header-sm"></div>
<div class="content">
    <div class="row-12">
        <div class="col flex">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{__(" MELLPI Pro FORM B 2b: SUMMARY OF CHANGES IN THE NUTRITIONAL STATUS IN THE BARANGAY")}}</h5>
                           
                    <div class="container">
                      <div class="row">
                        <div class="col">Provine</div>
                        <div class="col">Date Monitoring</div>
                        <div class="w-100"></div>
                        <div class="col">Period Covered</div>
                        <div class="col">Income Class</div>
                      </div>
                    </div>

                    <table class="table table-striped" > 
                    <thead>
                        <tr>
                            <th>ELEMENTS</th>
                            <th>PERFORMANCE LEVEL</th>
                            <th>CURRENT RATING</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1. Prevalence of underweight 0-59 months children </td>
                            <td class="performance-level-1a">{{ $row->underweight_child_rating }}</td>
                            <td class="current-rating-1a">0.00</td>
                        </tr>
                        <tr>
                            <td>2. Prevalence of stunted 0-59 months children </td>
                            <td class="performance-level-1b">{{ $row->stundent_child_rating }}</td>
                            <td class="current-rating-1b">0.00</td>
                        </tr>
                        <tr>
                            <td>3. Prevalence of wasted 0-59 months children</td>
                            <td class="performance-level-1c">{{ $row->wasted_child_rating }}</td>
                            <td class="current-rating-1c">0.00</td>
                        </tr>
                        <tr>
                            <td>4. Prevalence of overweight and obesity among children 0-59 months children  </td>
                            <td class="performance-level-1c">{{ $row->obese_child_rating }}</td>
                            <td class="current-rating-1c">0.00</td>
                        </tr>
                        <tr>
                            <td>5. Prevalence of wasted school-age children </td>
                            <td class="performance-level-1c">{{ $row->wasted_school_rating }}</td>
                            <td class="current-rating-1c">0.00</td>
                        </tr>
                        <tr>
                            <td>6. Prevalence of overweight and obesity school-age children </td>
                            <td class="performance-level-1c">{{ $row->obese_school_rating }}</td>
                            <td class="current-rating-1c">0.00</td>
                        </tr>
                        <tr>
                            <td>7. Prevalence of nutritionally at-risk pregnant women </td>
                            <td class="performance-level-1c">{{ $row->risk_pregnant_rating }}</td>
                            <td class="current-rating-1c">0.00</td>
                        </tr>
                        <tr>
                            <td>8. Operation Timbang Plus Coverage</td>
                            <td class="performance-level-1c">{{ $row->timbang_plus_rating }}</td>
                            <td class="current-rating-1c">0.00</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><b>Performance Rating</b></td>
                            <td class="performance-rating-total">0.00</td>
                        </tr>

                      
                       
                    </tbody>
                    </table>


                    <div class="form-navigation">
                    <a href="{{ route('mellpi_pro.summary2b') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Primary link &gt;</a>
                    
                         
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>












@endsection
