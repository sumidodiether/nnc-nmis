@extends('layouts.BSapp', [
'class' => 'sidebar-mini ',
'namePage' => 'LGU Profile LNFP',
'activePage' => 'LGUPROFILELNFP',
'activeNav' => '',
])

@section('content')
<!-- <div class="panel-header panel-header-sm"></div> -->
<div class="content" style="margin-top:50px;padding:2%">
    <div class="row-12">
        <div class="col flex">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{__("LGU Profile LNFP")}}</h5>
                    <a href="{{route('MellpiProForLNFPCreate.create')}}" class="btn btn-primary">Create data</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection