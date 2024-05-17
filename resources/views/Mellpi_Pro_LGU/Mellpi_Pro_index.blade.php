<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/joboy.css') }}">
<script src="{{ asset('assets/js/joboy.js') }}"></script>

@extends('layouts.app', [
'class' => 'sidebar-mini ',
'namePage' => 'lncFunction',
'activePage' => 'lncFunction',
'activeNav' => '',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="card">
        <div class="row row-12" style="display:inline-block">
            <div class="card-header">
                <h5 class="title">{{__("Mellpi Pro LGU")}}</h5>
            </div>
            <div>
                <div class="input-group">
                    <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <button class="btn btn-outline-secondary" type="button">Button</button>
                </div>
            </div>
        </div>
        <div class="row row-12" style="min-height:1200px">
            <h3>MELLPI Pro FORM B 1b: SUMMARY OF BARANGAY NUTRITION MONITORING</h3>
        </div>
    </div>
</div>

@endsection