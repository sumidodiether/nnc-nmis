<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/joboy.css') }}" >
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
                    <a class="btn btn-outline-primary" href="{{route('personnelDnaDirectory.create')}}">Add Personnel DNA Directory</a>
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
                    <table id="naoTable" class="table table-striped table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>sampleTH</th>
                                <th>sampleTH</th>
                                <th>sampleTH</th>
                                <th>sampleTH</th>
                                <th>sampleTH</th>
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
                <div class="tab-content" id="tab2">
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