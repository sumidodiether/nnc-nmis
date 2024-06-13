@extends('layouts.app', [
'class' => 'sidebar-mini ',
'namePage' => 'Mellpi Pro Summary',
'activePage' => 'mellpi_pro_summary1b',
'activeNav' => '',
])

@section('content')

<div class="panel-header panel-header-sm"></div>
<div class="content">
    <div class="row-12">
        <div class="col flex">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{__(" MELLPI Pro FORM P-1b: SUMMARY OF PROVINCIAL NUTRITION MONITORING")}}</h5>
                           
                    <div class="container">
                      <div class="row">
                        <div class="col">Province</div>
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
                            <td colspan="3"><b>DIMENSION 1: VISION AND MISSION</b></td>
                        </tr>
                        
                        <tr>
                            <td>1a. Presence and knowledge of vision-mission statement</td>
                            <td class="performance-level-1a">{{ $rowVM->rating1a }}</td>
                            <td class="current-rating-1a">{{ ($rowVM->rating1a / 5) * 100 }}</td>
                        </tr>
                        <tr>
                            <td>1b. Presence of nutrition-related concerns in the Comprehensive Development Plan</td>
                            <td class="performance-level-1b">{{ $rowVM->rating1b }}</td>
                            <td class="current-rating-1b">{{ ($rowVM->rating1b / 5) * 100 }}</td>
                        </tr>
                        <tr>
                            <td>1c. Presence of nutrition-related concerns in the Annual Investment Program</td>
                            <td class="performance-level-1c">{{ $rowVM->rating1c }}</td>
                            <td class="current-rating-1c">{{ ($rowVM->rating1c / 5) * 100 }}</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><b>Performance Rating</b></td>
                            <td class="performance-rating-total">{{ $VM_Ave }}</td>
                        </tr>

                        <tr>
                                <td colspan="3"><b>DIMENSION 2: NUTRITION LAWS AND POLICIES</b></td>
                        </tr>
                        <tr>
                                <td>2a. Adoption, implementation and monitoring of local nutrition action plan</td>
                                <td class="performance-level-2a">{{ $rowNP->rating2a }}</td>
                                <td class="current-rating-2a">{{ ($rowNP->rating2a / 5) * 100 }}</td>
                            </tr>
                            <tr>
                                <td>2b. Republic Act 11148 Kalusugan at Nutrisyon ng Mag-Nanay Act 2019</td>
                                <td class="performance-level-2b">{{ $rowNP->rating2b }}</td>
                                <td class="current-rating-2b">{{ ($rowNP->rating2ab / 5) * 100 }}</td>
                            </tr>
                            <tr>
                                <td>2c. Republic Act 11037 Masustansyang Pagkain para sa Batang Pilipino</td>
                                <td class="performance-level-2c">{{ $rowNP->rating2c }}</td>
                                <td class="current-rating-2c">{{ ($rowNP->rating2c / 5) * 100 }}</td>
                            </tr>
                            <tr>
                                <td>2d. Executive Order 51 National Code of Marketing of breastmilk substitutes, breastmilk supplements and other related products</td>
                                <td class="performance-level-2d">{{ $rowNP->rating2d }}</td>
                                <td class="current-rating-2d">{{ ($rowNP->rating2d / 5) * 100 }}</td>
                            </tr>
                            <tr>
                                <td>2e. Republic Act 10028 Expanded Breastfeeding Promotion Act of 2009</td>
                                <td class="performance-level-2e">{{ $rowNP->rating2e }}</td>
                                <td class="current-rating-2e">{{ ($rowNP->rating2e / 5) * 100 }}</td>
                            </tr>
                            <tr>
                                <td>2f. Republic Act 8172 An Act for Salt Iodization Nationwide</td>
                                <td class="performance-level-2f">{{ $rowNP->rating2f }}</td>
                                <td class="current-rating-2f">{{ ($rowNP->rating2f / 5) * 100 }}</td>
                            </tr>
                            <tr>
                                <td>2g. Republic Act 8676 Philippine Food Fortification Act of 2003</td>
                                <td class="performance-level-2g">{{ $rowNP->rating2g }}</td>
                                <td class="current-rating-2g">{{ ($rowNP->rating2g / 5) * 100 }}</td>
                            </tr>
                            <tr>
                                <td>2h. NNC Governing Board Resolution No. 1 S. 2017 Approving and Adopting the Philippine Plan of Action for Nutrition 2017 - 2022</td>
                                <td class="performance-level-2h">{{ $rowNP->rating2h }}</td>
                                <td class="current-rating-2h">{{ ($rowNP->rating2h / 5) * 100 }}</td>
                            </tr>
                            <tr>
                                <td>2i. NNC Governing Board Resolution No. 3 S. 2014 Approving and Adopting the Guidelines on Local Nutrition Planning</td>
                                <td class="performance-level-2i">{{ $rowNP->rating2i }}</td>
                                <td class="current-rating-2i">{{ ($rowNP->rating2i / 5) * 100 }}</td>
                            </tr>
                            <tr>
                                <td>2j. NNC Governing Board Resolutions Nos.<br>1) 3 S.2012: Approving the Guidelines on the Fabrication, Verification, and Maintenance of Wooden Height Boards<br>2) 3 S.2018: Approving the Guidelines on the Selection of Non-Wood Height and Length Measuring Tool</td>
                                <td class="performance-level-2j">{{ $rowNP->rating2j }}</td>
                                <td class="current-rating-2j">{{ ($rowNP->rating2j / 5) * 100 }}</td>
                            </tr>
                            <tr>
                                <td>2k. NNC Governing Board Resolution No. 2 S. 2012 Approving the Revised Implementing Guidelines on Operation Timbang Plus</td>
                                <td class="performance-level-2k">{{ $rowNP->rating2k }}</td>
                                <td class="current-rating-2k">{{ ($rowNP->rating2k / 5) * 100 }}</td>
                            </tr>
                            <tr>
                                <td>2l. NNC Governing Board Resolution No.6 series of 2012: Adoption of the 2012 Nutritional Guidelines for Filipinos</td>
                                <td class="performance-level-2l">{{ $rowNP->rating2l }}</td>
                                <td class="current-rating-2l">{{ ($rowNP->rating2l / 5) * 100 }}</td>
                            </tr>
                            <tr>
                                <td>2m. NNC Governing Board Resolution No. 2 series of 2009: Adopting the National Policy on Nutrition Management in Emergencies and Disasters</td>
                                <td class="performance-level-2m">{{ $rowNP->rating2m }}</td>
                                <td class="current-rating-2m">{{ ($rowNP->rating2m / 5) * 100 }}</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><b>Performance Rating</b></td>
                                <td class="performance-rating-tatol2">{{ $NP_Ave }}</td>
                            </tr>
                        <tr>
                            <td colspan="3"><b>DIMENSION 3: GOVERNANCE AND ORGANIZATIONAL STRUCTURE</b></td>
                        </tr>
                        <tr>
                            <td>3a. Presence of Local Nutrition Committee (LNC)</td>
                            <td class="performance-level-3a">{{ $rowGv->rating3a }}</td>
                            <td class="current-rating-3a">{{ ($rowGv->rating3a / 5) * 100}}</td>
                        </tr>
                        <tr>
                            <td>3b. Presence of Nutrition Office and Personnel</td>
                            <td class="performance-level-3b">{{ $rowGv->rating3b }}</td>
                            <td class="current-rating-3b">{{ ($rowGv->rating3b / 5) * 100}}</td>
                        </tr>
                        <tr>
                            <td>3c. Decision-making and Leadership of the Local Nutrition Committee</td>
                            <td class="performance-level-3c">{{ $rowGv->rating3c }}</td>
                                <td class="current-rating-3c">{{ ($rowGv->rating3c / 5) * 100}}</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><b>Performance Rating</b></td>
                            <td class="performance-rating3">{{ $Gv_Ave }}</td>
                        </tr>
                        <tr>
                            <td colspan="3"><b>DIMENSION 4: LOCAL NUTRITION COMMITTEE MANAGEMENT FUNCTIONS</b></td>
                        </tr>
                        <tr>
                            <td>4a. Nutrition Assessment</td>
                            <td class="performance-level-4a">{{ $rowLMF->rating4a }}</td>
                                <td class="current-rating-4a">{{ ($rowLMF->rating4a / 5) * 100 }}</td>
                        </tr>
                        <tr>
                            <td>4b. Planning</td>
                             <td class="performance-level-4b">{{ $rowLMF->rating4b }}</td>
                                <td class="current-rating-4b">{{ ($rowLMF->rating4b / 5) * 100 }}</td>
                        </tr>
                        <tr>
                            <td>4c. Resource Generation and Mobilization</td>
                            <td class="performance-level-4c">{{ $rowLMF->rating4c }}</td>
                                <td class="current-rating-4c">{{ ($rowLMF->rating4c / 5) * 100 }}</td>
                        </tr>
                        <tr>
                            <td>4d. Service Delivery</td>
                            <td class="performance-level-4d">{{ $rowLMF->rating4d }}</td>
                                <td class="current-rating-4d">{{ ($rowLMF->rating4d / 5) * 100 }}</td>
                        </tr>
                        <tr>
                            <td>4e. Monitoring and Evaluation</td>
                            <td class="performance-level-4e">{{ $rowLMF->rating4e }}</td>
                                <td class="current-rating-4e">{{ ($rowLMF->rating4e / 5) * 100 }}</td>
                        </tr>
                        <tr>
                            <td>4f. Capacity building</td>
                            <td class="performance-level-4f">{{ $rowLMF->rating4f }}</td>
                                <td class="current-rating-4f">{{ ($rowLMF->rating4f / 5) * 100 }}</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><b>Performance Rating</b></td>
                            <td class="performance-rating4">{{ $LMF_Ave }}</td>
                        </tr>
                        <tr>
                            <td colspan="3"><b>DIMENSION 5: NUTRITION INTERVENTIONS/SERVICES</b></td>
                        </tr>
                        <tr>
                            <td>5a. Infant and Young Child Feeding</td>
                            <td id="performance-level-5a">{{ $row->young_child_feeding_average }}</td>
                                <td id="current-rating-5a">0.00</td>
                        </tr>
                        <tr>
                            <td>5b. Philippine Integrated Management of Acute Malnutrition</td>
                            <td id="performance-level-5b">{{ $row->acute_malnutrition_average }}</td>
                                <td id="current-rating-5b">0.00</td>
                        </tr>
                        <tr>
                            <td>5c. National Dietary Supplementation Program</td>
                            <td id="performance-level-5c">{{ $row->national_dietary_average }}</td>
                                <td id="current-rating-5c">0.00</td>
                        </tr>
                        <tr>
                            <td>5d. National Nutrition Promotion Program for Behavior Change</td>
                            <td id="performance-level-5d">{{ $row->behavioral_change_average }}</td>
                                <td id="current-rating-5d">0.00</td>
                        </tr>
                        <tr>
                            <td>5e. Micronutrient Supplementation</td>
                            <td id="performance-level-5e">{{ $row->micro_supplement_average }}</td>
                                <td id="current-rating-5e">0.00</td>
                        </tr>
                        <tr>
                            <td>5f. Mandatory Food Fortification</td>
                            <td id="performance-level-5f">{{ $row->mandatory_food_average }}</td>
                                <td id="current-rating-5f">0.00</td>
                        </tr>
                        <tr>
                            <td>5g. Nutrition in Emergencies Program</td>
                            <td id="performance-level-5g">{{ $row->emergencies_program_average }}</td>
                                <td id="current-rating-5g">0.00</td>
                        </tr>
                        <tr>
                            <td>5h. Overweight and Obesity Management and Prevention Program</td>
                            <td id="performance-level-5h">{{ $row->prevention_program_average }}</td>
                                <td id="current-rating-5h">0.00</td>
                        </tr>
                        <tr>
                            <td>5i. Nutrition-Sensitive Programs</td>
                            <td id="performance-level-5i">{{ $row->nutri_sensitive_average }}</td>
                                <td id="current-rating-5i">0.00</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><b>Performance Rating</b></td>
                            <td id="performance-rating5">0.00</td>
                        </tr>
                    </tbody>
                    </table>


                    <div class="form-navigation">
                    <a href="{{ route('mellpi_pro.summary2b') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">MELLPI Pro FORM B 2b &gt;</a>
                    
                         
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
