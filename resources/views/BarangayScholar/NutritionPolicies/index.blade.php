@extends('layouts.BSapp', [
'class' => 'sidebar-mini ',
'namePage' => 'Nutrition Policies',
'activePage' => 'NutritionPolicies',
'activeNav' => '',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content" style="margin:30px">
    <div class="row">
            <div>
                <a href="{{route('nutritionpolicies.create')}}" class="btn btn-primary">Create data</a>
            </div>
    
    </div>
</div>
@endsection