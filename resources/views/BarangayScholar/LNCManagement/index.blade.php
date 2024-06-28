@extends('layouts.BSapp', [
'class' => 'sidebar-mini ',
'namePage' => 'LNC Management',
'activePage' => 'LNCManagement',
'activeNav' => '',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row-12">
        <div class="col flex">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{__("MELLPI PRO FORM B 1a: BARANGAY NUTRITION MONITORING")}}</h5>
                    <div class="content" style="margin:30px">
                        <div class="row">
                            <div style="display:flex;align-items:center">
                                <a href="{{route('lncmanagement.create')}}" class="btn btn-primary">Create data</a>
                                <p style="margin-bottom:0px;margin-left:25px; font-weight:900;font-size:25px">MELLPI PRO
                                    FORM B 1a: BARANGAY NUTRITION MONITORING</p>
                            </div>
                            @if(session('status'))
                            <div class="alert alert-success">{{session('status')}}</div>
                            @endif


                            <!-- add table here! -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection