<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/joboy.css') }}">
<script src="{{ asset('assets/js/joboy.js') }}"></script>

@extends('layouts.app', [
'class' => 'sidebar-mini ',
'namePage' => 'mellpi_pro_LGU',
'activePage' => 'mellpi_pro_LGU',
'activeNav' => '',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="card">
        <div class="row row-12" style="display:inline-block">
            <div class="card-header">
                <h5 class="title">{{__("PSGC Data-Bulk Upload")}}</h5>
            </div>
            <div>
            <form action="{{ route('mellpi_pro_LGU.upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="inputcsvfile" id="inputcsvfile"  required>
                                <label class="custom-file-label" aria-describedby="inputGroupFileAddon02">Upload PSGC file</label>
                            </div>

                            <div class="input-group-append" style="margin-left:5px">
                                <button class="btn btn-outline-primary" style="margin:0px; margin-left:0px" id="checkData" type="submit">Check data</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
       
    </div>
</div>

@endsection