<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/joboy.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/diether.css') }}">
<script src="{{ asset('assets/js/joboy.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style>
.tab {
    text-align: center;
    font-size: 11px;
    border: 1px solid green;
}

.tab.active {
    border-top: 1px solid green;
}
</style>

@extends('layouts.app', [
'class' => 'sidebar-mini ',
'namePage' => 'Personnel Dna Directory',
'activePage' => 'PersonnelDnaDirectoryIndex',
'activeNav' => '',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="card">
        <div class="row row-12" style="display:inline-block">
            <div class="card-header">
                <h5 class="title">{{__("Personnel Directory")}}</h5>
                <div>
                    <a class="btn btn-outline-primary" href="{{route('personnelDnaDirectory.create')}}">Add Personnel
                        DNA Directory</a>
                </div>
            </div>
        </div>
        <div class="form-row" style="border-bottom: 1px solid #ddd;">
            <div id="tabs" class="d-flex mr-3">
                <div class="tab" data-tab="tab1">NAO</div>
                <div class="tab" data-tab="tab2">NPC</div>
                <div class="tab" data-tab="tab3">BNS</div>
            </div>
        </div>
        <div class="form-row">
            <div id="tab-contents" class="col-md-12">
                <div class="tab-content" id="tab1">
                    <form action="#" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputPSGC">Region</label>
                                <select id="loadRegion1" class="form-control" name="inputRegion">
                                    <option selected>Region</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPSGC">Province</label>
                                <select id="loadProvince1" class="form-control" name="inputProvince">
                                    <option selected>Province</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputCM">City/Municipality</label>
                                <select id="loadCity1" class="form-control" name="inputCity">
                                    <option selected>City/Municipality</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <table id="naoTable" class="table table-striped table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Name of Gov/Mayor</th>
                                <th>Last Name</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Suffix</th>
                                <th>Sex</th>

                                <th>Cellphone Number</th>
                                <th>Telephone Number</th>
                                <th>Email Address</th>
                                <th>Address</th>

                                <th>Birthdate</th>
                                <th>Age</th>
                                <th>Educational Background</th>
                                <th>Degree, course or year finished</th>

                                <th>Type of NAO</th>
                                <th>Type of Designation</th>
                                <th>Date of Designation</th>
                                <th>Type of Appointment</th>
                                <th>Office Position</th>
                                <th>Office / Department</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($naosPersonnel as $naoPersonnel)
                            <tr>
                                @foreach ($naoPersonnel->NaoFuction as $naoFunction)
                                <td>{{$naoFunction->nameGovMayor}}</td>
                                <td>{{$naoPersonnel->lastname}}</td>
                                <td>{{$naoPersonnel->firstname}}</td>
                                <td>{{$naoPersonnel->middlename}}</td>
                                <td>{{$naoPersonnel->suffix}}</td>
                                <td>{{$naoPersonnel->sex}}</td>

                                <td>{{$naoPersonnel->cellphonenumer}}</td>
                                <td>{{$naoPersonnel->telephonenumber}}</td>
                                <td>{{$naoPersonnel->email}}</td>
                                <td>{{$naoPersonnel->address}}</td>

                                <td>{{$naoPersonnel->birthdate}}</td>
                                <td>{{$naoPersonnel->age}}</td>
                                <td>{{$naoPersonnel->educationalbackground}}</td>
                                <td>{{$naoPersonnel->degreeCourse}}</td>

                                <td>{{$naoFunction->typenao}}</td>
                                <td>{{$naoFunction->typedesignation}}</td>
                                <td>{{$naoFunction->datedesignation}}</td>
                                <td>{{$naoFunction->typeappointment}}</td>
                                <td>{{$naoFunction->position}}</td>
                                <td>{{$naoFunction->department}}</td>
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-content" id="tab2">
                    <form action="#" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputPSGC">Region</label>
                                <select id="loadRegion1" class="form-control" name="inputRegion">
                                    <option selected>Region</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPSGC">Province</label>
                                <select id="loadProvince1" class="form-control" name="inputProvince">
                                    <option selected>Province</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputCM">City/Municipality</label>
                                <select id="loadCity1" class="form-control" name="inputCity">
                                    <option selected>City/Municipality</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <table id="npcTable" class="table table-striped table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>sampleTHnpc</th>
                                <th>sampleTHnpc</th>
                                <th>sampleTHnpc</th>
                                <th>sampleTHnpc</th>
                                <th>sampleTHnpc</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>sampleTD</td>
                                <td>sampleTD</td>
                                <td>sampleTD</td>
                                <td>sampleTD</td>
                                <td>sampleTD</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-content" id="tab3">
                    <form action="#" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputPSGC">Region</label>
                                <select id="loadRegion1" class="form-control" name="inputRegion">
                                    <option selected>Region</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPSGC">Province</label>
                                <select id="loadProvince1" class="form-control" name="inputProvince">
                                    <option selected>Province</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputCM">City/Municipality</label>
                                <select id="loadCity1" class="form-control" name="inputCity">
                                    <option selected>City/Municipality</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <table id="bnsTable" class="table table-striped table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>sampleTHbns</th>
                                <th>sampleTHbns</th>
                                <th>sampleTHbns</th>
                                <th>sampleTHbns</th>
                                <th>sampleTHbns</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>sampleTD</td>
                                <td>sampleTD</td>
                                <td>sampleTD</td>
                                <td>sampleTD</td>
                                <td>sampleTD</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection