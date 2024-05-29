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
                <h5 class="title">{{__("Mellpi Pro LGU-Bulk Upload")}}</h5>
            </div>
            <div>
                @include('alerts.success')
                <form action="{{ route('mellpi_pro_LGU.Regionupload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="inputcsvfileRegion" id="inputcsvfileRegion" required>
                            <label class="custom-file-label" aria-describedby="inputGroupFileAddon02">Upload Region
                                file</label>
                        </div>

                        <div class="input-group-append" style="margin-left:5px">
                            <button class="btn btn-outline-primary" style="margin:0px; margin-left:0px" id="checkData"
                                type="submit">Check data</button>
                        </div>
                    </div>
                </form>
            </div>
            <div>
                <form action="{{ route('mellpi_pro_LGU.Provinceupload') }}" method="POST" enctype="multipart/form-data">
                    @csrf 
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="inputcsvfileProvince" id="inputcsvfileProvince" required>
                            <label class="custom-file-label" aria-describedby="inputGroupFileAddon02">Upload Province
                                file</label>
                        </div>

                        <div class="input-group-append" style="margin-left:5px">
                            <button class="btn btn-outline-primary" style="margin:0px; margin-left:0px" id="checkData"
                                type="submit">Check data</button>
                        </div>
                    </div>
                </form>
            </div>
            <div>
                <form action="{{ route('mellpi_pro_LGU.Cityupload') }}" method="POST" enctype="multipart/form-data">
                    @csrf 
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="inputcsvfileCity" id="inputcsvfileCity" required>
                            <label class="custom-file-label" aria-describedby="inputGroupFileAddon02">Upload Mun/City
                                file</label>
                        </div>

                        <div class="input-group-append" style="margin-left:5px">
                            <button class="btn btn-outline-primary" style="margin:0px; margin-left:0px" id="checkData"
                                type="submit">Check data</button>
                        </div>
                    </div>
                </form>
                <form action="{{ route('mellpi_pro_LGU.Munupload') }}" method="POST" enctype="multipart/form-data">
                    @csrf 
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="inputcsvfileMun" id="inputcsvfileMun" required>
                            <label class="custom-file-label" aria-describedby="inputGroupFileAddon02">Upload Mun/City
                                file</label>
                        </div>

                        <div class="input-group-append" style="margin-left:5px">
                            <button class="btn btn-outline-primary" style="margin:0px; margin-left:0px" id="checkData"
                                type="submit">Check data</button>
                        </div>
                    </div>
                </form>
                <form action="{{ route('mellpi_pro_LGU.Barangayupload') }}" method="POST" enctype="multipart/form-data">
                    @csrf 
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="inputcsvfileBarangay" id="inputcsvfileBarangay" required>
                            <label class="custom-file-label" aria-describedby="inputGroupFileAddon02">Upload Barangay
                                file</label>
                        </div>

                        <div class="input-group-append" style="margin-left:5px">
                            <button class="btn btn-outline-primary" style="margin:0px; margin-left:0px" id="checkData"
                                type="submit">Check data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection