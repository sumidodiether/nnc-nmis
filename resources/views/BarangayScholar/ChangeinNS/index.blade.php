@extends('layouts.BSapp', [
'class' => 'sidebar-mini ',
'namePage' => 'change Nutrition Status',
'activePage' => 'changeNS',
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
                    <h5 class="title">{{__("Title")}}</h5>
                    <div class="content" style="margin:30px">
                        <div class="row">
                            <div>
                                <a href="{{route('changeNS.create')}}" class="btn btn-primary">Create data</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection