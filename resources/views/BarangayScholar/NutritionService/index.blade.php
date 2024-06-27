
@extends('layouts.BSapp', [
'class' => 'sidebar-mini ',
'namePage' => 'Nutrition Service',
'activePage' => 'nutritionservice',
'activeNav' => '',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content" style="margin:30px">
    <div class="row">
            <div>
                <a href="{{route('nutritionservice.create')}}" class="btn btn-primary">Create data</a>
            </div>
    
    </div>
</div>
@endsection