<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rd.css') }}" >


@extends('layouts.app', [
    'namePage' => 'Mellpi Pro',
    'activePage' => 'mellpi_pro',
    'activeNav' => '',
    'backgroundImage' => asset('assets') . "/img/background1.png",
])

@section('content')


<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="request card shadow">
                <div class="card-header">
                    <h5 class="text-dark title">{{__(" Request Portal ")}}</h5>
                </div>
                <div class="card-body">
                    <form>
                    <div class="form-group">
                            <label for="name" class="text-dark">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name">
                        </div>

                        <div class="form-group">
                            <label for="email" class="text-dark">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="message"class="text-dark">Request Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Enter your request"></textarea>
                        </div>
                        <div class="text-center"> 
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
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
