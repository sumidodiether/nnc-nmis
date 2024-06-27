
@extends('layouts.BSapp', [
'class' => 'sidebar-mini ',
'namePage' => 'Budget AIP',
'activePage' => 'budgetAIP',
'activeNav' => '',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content" style="margin:30px">
    <div class="row"> 
            <p style="margin-bottom:0px;margin-left:25px; font-weight:900;font-size:25px">MELLPI PRO FORM B: BARANGAY PROFILE SHEET</p>
                <a href="{{route('governance.create')}}" class="btn btn-primary">Create data</a>
            </div>
    
    </div>
</div>
@endsection