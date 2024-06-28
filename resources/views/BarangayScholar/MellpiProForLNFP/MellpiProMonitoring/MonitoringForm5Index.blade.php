@extends('layouts.BSapp', [
'class' => 'sidebar-mini ',
'namePage' => 'Mellpi Pro Form 5 Monitoring',
'activePage' => 'mellpi_pro_form5',
'activeNav' => '',
])

@section('content')
<div class="panel-header panel-header-sm"></div>
<div class="content">
    <div class="row-12">
        <div class="col flex">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{__("Mellpi Pro Form 5 Monitoring")}}</h5>
                    <a href="#" class="btn btn-primary">Create data</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection