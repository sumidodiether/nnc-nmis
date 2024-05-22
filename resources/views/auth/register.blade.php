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

                <div class="d-flex name">

                  <div class="input-group mr-2 {{ $errors->has('name') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="now-ui-icons users_circle-08"></i>
                      </div>
                    </div>
                    <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('First Name') }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                      <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                      </span>
                    @endif
                  </div>

                  <div class="input-group mr-2 {{ $errors->has('name') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="now-ui-icons users_circle-08"></i>
                      </div>
                    </div>
                    <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Middle Name') }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                      <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                      </span>
                    @endif
                  </div>

                  <div class="input-group {{ $errors->has('name') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="now-ui-icons users_circle-08"></i>
                      </div>
                    </div>
                    <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Last Name') }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                      <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                      </span>
                    @endif
                  </div>

                </div>

                <div class="d-flex region">

                  <div class="input-group mr-2 {{ $errors->has('name') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="now-ui-icons users_circle-08"></i>
                      </div>
                    </div>
                    <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Region') }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                      <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                      </span>
                    @endif
                  </div>

                  <div class="input-group mr-2 {{ $errors->has('name') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="now-ui-icons users_circle-08"></i>
                      </div>
                    </div>
                    <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Province') }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                      <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                      </span>
                    @endif
                  </div>

                  <div class="input-group {{ $errors->has('name') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="now-ui-icons users_circle-08"></i>
                      </div>
                    </div>
                    <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('City/Municipality') }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                      <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                      </span>
                    @endif
                  </div>

                </div>

                <div class="d-flex mb-2">                
                  <select class="form-control mr-2" name="gender" data-group="block-0">
                    <option selected="">Agency/Office/LGU</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                  </select>
              
                  <select class="form-control mr-2" name="gender" data-group="block-0">
                    <option selected="">Division/Unit</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                  </select>

                  <select class="form-control" name="gender" data-group="block-0">
                    <option selected="">Designation</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                  </select>
                </div>
                
                <!--Begin input email -->
                <div class="input-group w-50 mr-2 {{ $errors->has('email') ? ' has-danger' : '' }}">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="now-ui-icons ui-1_email-85"></i>
                    </div>
                  </div>
                  <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" required>
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
                    <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" type="password" name="password" required>
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
                    <input class="form-control" placeholder="{{ __('Confirm Password') }}" type="password" name="password_confirmation" required>
                  </div>
                </div>

                {{-- Gender --}}                
                <div class="form-check text-left">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox">
                    <span class="form-check-sign"></span>
                    {{ __('I agree to the') }}
                    <a href="#something">{{ __('terms and conditions') }}</a>.
                  </label>
                </div>
                <div class="card-footer ">
                  <button type="submit" class="btn btn-primary btn-round btn-lg">{{__('Get Started')}}</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      demo.checkFullPageBackgroundImage();
    });
  </script>
@endpush
