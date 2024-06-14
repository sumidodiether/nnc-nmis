@extends('layouts.app', [
'namePage' => 'Register page',
'activePage' => 'register',
'backgroundImage' => asset('assets') . "/img/background1.png",
])


@section('content')
<div class="content">
    <div class="container">
        <div class="row">


            {{-- <div class="col-md-5 ml-auto">
          <div class="info-area info-horizontal mt-2">
            <div class="icon icon-primary">
              <i class="now-ui-icons media-2_sound-wave"></i>
            </div>
            <div class="description">
              <h5 class="info-title">{{ __('Marketing') }}</h5>
            <p class="description">
                {{ __("We've created the marketing campaign of the website. It was a very interesting collaboration.") }}
            </p>
        </div>
    </div>
    <div class="info-area info-horizontal">
        <div class="icon icon-info">
            <i class="now-ui-icons users_single-02"></i>
        </div>
        <div class="description">
            <h5 class="info-title">{{ __('Built Audience') }}</h5>
            <p class="description">
                {{ __('There is also a Fully Customizable CMS Admin Dashboard for this product.') }}
            </p>
        </div>
    </div>
</div> --}}


<div class="col-md-12 mr-auto">
    <div class="card card-signup text-center">
        <div class="card-header ">
            <h4 class="card-title">{{ __('Register') }}</h4>
        </div>
        <div class="card-body ">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <!--Begin input name -->
                <input type="hidden"  name="status" value="pending" />
                <div class="d-flex name">

                    <div class="input-group mr-2 {{ $errors->has('Firstname') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="now-ui-icons users_circle-08"></i>
                            </div>
                        </div>
                        <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                            placeholder="{{ __('First Name') }}" type="text" name="Firstname" value="{{ old('Firstname') }}"
                            required autofocus>
                        @if ($errors->has('Firstname'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('Firstname') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="input-group mr-2 {{ $errors->has('Middlename') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="now-ui-icons users_circle-08"></i>
                            </div>
                        </div>
                        <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                            placeholder="{{ __('Middle Name') }}" type="text" name="Middlename" value="{{ old('Middlename') }}"
                            required autofocus>
                        @if ($errors->has('Middlename'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('Middlename') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="input-group {{ $errors->has('Lastname') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="now-ui-icons users_circle-08"></i>
                            </div>
                        </div>
                        <input class="form-control {{ $errors->has('Lastname') ? ' is-invalid' : '' }}"
                            placeholder="{{ __('Last Name') }}" type="text" name="Lastname" value="{{ old('Lastname') }}"
                            required autofocus>
                        @if ($errors->has('Lastname'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('Lastname') }}</strong>
                        </span>
                        @endif
                    </div>

                </div>

                <div class="d-flex region">
                    <select id="loadRegion1" class="form-control" name="Region"  >
                        <option value="428" selected>Region</option>
                    </select>

                    <select id="loadProvince1" class="form-control" name="Province" >
                        <option value="1301" selected>Province</option>
                    </select>

                    <select id="loadCity1" class="form-control" name="city_municipal" >
                        <option value="1923" selected>City/Municipality</option>
                    </select>
                </div>


        </div>

        <div class="d-flex mb-2">

            <div class="input-group {{ $errors->has('agency_office_lgu') ? ' has-danger' : '' }}" style="margin-right:10px">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="now-ui-icons users_circle-08"></i>
                    </div>
                </div>
                <input class="form-control {{ $errors->has('agency_office_lgu') ? ' is-invalid' : '' }}"
                    placeholder="{{ __('Agency/Office/Unit') }}" type="text" name="agency_office_lgu" value="{{ old('agency_office_lgu') }}"
                    required autofocus>
                @if ($errors->has('agency_office_lgu'))
                <span class="invalid-feedback" style="display: block;" role="alert">
                    <strong>{{ $errors->first('agency_office_lgu') }}</strong>
                </span>
                @endif
            </div>

            <div class="input-group {{ $errors->has('Division_unit') ? ' has-danger' : '' }}" style="margin-right:10px">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="now-ui-icons users_circle-08"></i>
                    </div>
                </div>
                <input class="form-control {{ $errors->has('Division_unit') ? ' is-invalid' : '' }}"
                    placeholder="{{ __('Division/Unit') }}" type="text" name="Division_unit" value="{{ old('Division_unit') }}" required
                    autofocus>
                @if ($errors->has('Division_unit'))
                <span class="invalid-feedback" style="display: block;" role="alert">
                    <strong>{{ $errors->first('Division_unit') }}</strong>
                </span>
                @endif
            </div>

            <select class="form-control" name="role" data-group="block-0"> 
               <option >Designation</option>
                @foreach($Role as $role)
                <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
            </select>
        </div>

        <!--Begin input email -->
        <div class="input-group w-50 mr-2 {{ $errors->has('email') ? ' has-danger' : '' }}">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="now-ui-icons ui-1_email-85"></i>
                </div>
            </div>
            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}"
                type="email" name="email" value="{{ old('email') }}" required>
        </div>
        @if ($errors->has('email'))
        <span class="invalid-feedback" style="display: block;" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
        <!--Begin input user type-->


        <div class="d-flex hays">
            <!--Begin input password -->
            <div class="input-group mr-2 {{ $errors->has('password') ? ' has-danger' : '' }}">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="now-ui-icons objects_key-25"></i>
                    </div>
                </div>
                <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                    placeholder="{{ __('Password') }}" type="password" name="password" required>
                @if ($errors->has('password'))
                <span class="invalid-feedback" style="display: block;" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
            <!--Begin input confirm password -->
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="now-ui-icons objects_key-25"></i></i>
                    </div>
                </div>
                <input class="form-control" placeholder="{{ __('Confirm Password') }}" type="password"
                    name="password_confirmation" required>
            </div>
        </div>


        <div class="card-footer ">
            <button type="submit" class="btn btn-primary btn-round btn-lg">Submit</button>
        </div>

        </form>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection
 
 