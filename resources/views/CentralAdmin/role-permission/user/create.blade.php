<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/joboy.css') }}">

<style>
.form-section {
    display: none;
}

.form-section.current {
    display: inline;
}

.striped-rows .row:nth-child(odd) {
    background-color: #f2f2f2;
}

.col-sm {
    margin: auto;
    padding: 1rem 1rem;
}

.row .form-control {
    border-color: #bebebe !important;
    border: 1px solid;
    border-radius: 5px;
}
</style>

@extends('layouts.app', [
'class' => 'sidebar-mini ',
'namePage' => 'Users',
'activePage' => 'users',
'activeNav' => '',
])

@section('content')

<div class="panel-header panel-header-sm"></div>
<div class="content" style="padding:2%">

    <h4>Create account</h4>
    @if(session('status'))
        <div class="alert alert-success">{{session('status')}}</div> 
    @endif
  
    <div>
        <form action="{{ route('CAadmin.store') }}"   method="POST">
        @csrf
        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">First Name:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="Firstname"  >
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Middle Name:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="Middlename"  ">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Last name:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="Lastname"  >
            </div>
            <div class="form-group col-md-3">
                <label for="inputPSGC">Region</label>
                <select id="loadRegionUsers" class="form-control" name="inputRegionNAO">
                    <option selected>Region</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="inputPSGC">Province</label>
                <select id="loadProvinceUsers" class="form-control" name="inputProvinceNAO">
                    <option selected>Province</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="inputCM">City/Municipality</label>
                <select id="loadCityUsers" class="form-control" name="inputCityNAO">
                    <option selected>City/Municipality</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Agency Office/LGU</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="agency_office_lgu" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Division Unit</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"  name="Division_unit"  >
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Designation</label>
                <select class="form-control" id="exampleFormControlSelect1" name="role" >
                @foreach($roles as $roles)
                <option value="{{$roles->id}}">{{$roles->name}}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" name="email"  >
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Password</label>
                <input type="password" class="form-control" id="exampleFormControlInput1" name="password"  >
            </div>
            <div class="form-group">
                <label for="inputPSGC">Account Status</label>
                <select   class="form-control" name="status" placeholder="Choose...">   
                    <option selected>Choose...</option>
                    <option value="Approved">Approved</option>
                    <option value="Pending">Pending</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>  
    
</div>
</div>

@endsection

 <script>
    $(document).ready(function() {
        function loadRegions(regionSelectId) {
            $.ajax({
                url: '{{ route("regions.get") }}',
                method: 'GET',
                success: function(response) {
                    console.log('Regions:', response);
                    let regionSelect = $(regionSelectId);
                    regionSelect.find('option:not(:first)').remove();
                    response.forEach(function(region) {
                        regionSelect.append(new Option(region.region, region.id));
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error loading regions:', xhr.responseText);
                    alert('Error loading regions');
                }
            });
        }

        function loadProvincesByRegion(regionId, provinceSelectId) {
            console.log('Loading provinces for region:', regionId);
            $.ajax({
                url: '{{ url("provinces") }}/' + regionId,
                method: 'GET',
                success: function(response) {
                    console.log('Provinces:', response);
                    let provinceSelect = $(provinceSelectId);
                    provinceSelect.find('option:not(:first)').remove();
                    response.forEach(function(province) {
                        provinceSelect.append(new Option(province.province, province.provcode));
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error loading provinces:', xhr.responseText);
                    alert('Error loading provinces');
                }
            });
        }

        function loadCitiesByProvince(provcode, citySelectId) {
            console.log('Loading cities for province code:', provcode);
            $.ajax({
                url: '{{ url("cities") }}/' + provcode,
                method: 'GET',
                success: function(response) {
                    console.log('Cities:', response);
                    let citySelect = $(citySelectId);
                    citySelect.find('option:not(:first)').remove();
                    response.forEach(function(city) {
                        citySelect.append(new Option(city.cityname, city.id));
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error loading cities:', xhr.responseText);
                    alert('Error loading cities');
                }
            });
        }

        function setupDropdowns(regionSelectId, provinceSelectId, citySelectId) {
            loadRegions(regionSelectId);

            $(regionSelectId).change(function() {
                let selectedRegionId = $(this).val();
                console.log('Region changed to:', selectedRegionId);
                if (selectedRegionId) {
                    loadProvincesByRegion(selectedRegionId, provinceSelectId);
                    $(citySelectId).find('option:not(:first)').remove();
                } else {
                    $(provinceSelectId).find('option:not(:first)').remove();
                    $(citySelectId).find('option:not(:first)').remove();
                }
            });

            $(provinceSelectId).change(function() {
                let selectedProvcode = $(this).val();
                console.log('Province changed to:', selectedProvcode);
                if (selectedProvcode) {
                    loadCitiesByProvince(selectedProvcode, citySelectId);
                } else {
                    $(citySelectId).find('option:not(:first)').remove();
                }
            });
        }

        setupDropdowns('#loadRegionUsers', '#loadProvinceUsers', '#loadCityUsers');
    });
</script>