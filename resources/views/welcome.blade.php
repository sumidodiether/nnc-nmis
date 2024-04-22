@extends('layouts.app', [
    'namePage' => 'NMIS',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'welcome',
    'backgroundImage' => asset('assets') . "/img/background1.png",
])

<style>

.menu-toggler {
  position: absolute;
  display: block;
  top:0;
  bottom:0;
  right:0;
  left:0;
  margin:auto;
  width:40px;
  height:40px;
  z-index:2;
  opacity:0;
  cursor:pointer;
}
.menu-toggler:hover + label,
.menu-toggler:hover + label:before,
.menu-toggler:hover + label:after,{
  background: white;
}
.menu-toggler:checked + label {
  background: transparent;
}
.menu-toggler:checked + label:before,
.menu-toggler:checked + label:after,{
  top:0;
  width:40px;
  transform-origin: 50% 50%;
}
.menu-toggler:checked + label:before {
  transform: rotate(45deg) translateY(-15px) translateX(-15px);
}
.menu-toggler:checked + label:after {
  transform: rotate(-45deg);
}
.menu-toggler:checked ~ ul .menu-item { 
  opacity: 1;
}
.menu-toggler:checked ~ ul .menu-item:nth-child(1) {
  transform: rotate(29deg) translate(-110px);
}
.menu-toggler:checked ~ ul .menu-item:nth-child(2) {
  transform: rotate(85deg) translateX(-110px);
}
.menu-toggler:checked ~ ul .menu-item:nth-child(3) {
  transform: rotate(149deg) translateX(-110px);
}
.menu-toggler:checked ~ ul .menu-item:nth-child(4) {
  transform: rotate(210deg) translateX(-110px);
}
.menu-toggler:checked ~ ul .menu-item:nth-child(5) {
  transform: rotate(274deg) translateX(-110px);
}
.menu-toggler:checked ~ ul .menu-item:nth-child(6) {
  transform: rotate(328deg) translateX(-110px);
}
.menu-toggler:checked ~ ul .menu-item a {
  pointer-events:auto;
}
.menu-toggler + label {
  width: 40px;
  height: 5px;
  display: block;
  z-index: 1;
  border-radius: 2.5px;
  background: rgba(230, 239, 250, 0.9);
  transition: transform 0.5s top 0.5s;
  position: absolute;
  display: block;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
}
.menu-toggler + label:before,
.menu-toggler + label:after {
  width: 40px;
  height: 5px;
  display: block;
  z-index: 1;
  border-radius: 2.5px;
  background: rgba(255, 255, 255, 0.7);
  transition: transform 0.5s top 0.5s;
  content: "";
  position: absolute;
  display: block;
  left: 0;
}
.menu-toggler + label:before {
  top: 10px;
}
.menu-toggler + label:after {
  top: -10px;
}
.menu-item:nth-child(1) a {
  transform: rotate(-28deg);
}
.menu-item:nth-child(2) a {
  transform: rotate(-85deg);
}
.menu-item:nth-child(3) a {
  transform: rotate(-149deg);
}
.menu-item:nth-child(4) a {
  transform: rotate(-209deg);
}
.menu-item:nth-child(5) a {
  transform: rotate(-273deg);
}
.menu-item:nth-child(6) a {
  transform: rotate(-328deg);
}
.menu-item {
  position: absolute;
  display: block;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  width: 150px;
  height: 150px;
  opacity: 0;
  transition: 0.5s;
}
.menu-item a {
  margin: -12rem;
  display: block;
  width: inherit;
  height: inherit;
  line-height: 150px;
  color: rgba(0, 0, 0, 1);
  background: rgba(255, 255, 255, 1);
  border-radius: 50%;
  text-align: center;
  text-decoration: none;
  font-size: 40px;
  pointer-events: none;
  transition: 0.2s;
}
.menu-item a:hover {
  box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.3);
  color: white;
  background: rgba(255, 255, 255, 0.3);
  font-size: 44.44px
}

.icon-nmis {
  width: 50%;
  position: relative;
  top: 22%;
}

</style>

@section('content')
  <div class="content">
    <div class="container">
      <div class="col-md-12 ml-auto mr-auto">
          <div class="header bg-gradient-primary py-10 py-lg-2 pt-lg-12">
              <div class="container">
                  <div class="header-body text-center mb-7">
                      <div class="row justify-content-center">
                          <div class="col-lg-5 col-md-9">
                            <!--<img class="rounded-circle bg-white p-3" src="{{ asset('assets/img/logo.png') }}" alt="">-->


                            <nav class="menu">
                              <!-- Replace the input element with the image -->
                              <label for="menu-toggler">
                                  <img class="rounded-circle bg-white p-3" src="{{ asset('assets/img/logo.png') }}" alt="">
                              </label>
                              <!-- Keep the checkbox input for toggling functionality -->
                              <input checked="checked" class="menu-toggler" type="checkbox" id="menu-toggler">
                              <!-- Add your menu items here -->
                              <!-- Example: -->
                          
                          
                              <ul>
                                <li class="menu-item">                                  
                                  <a class="nmis-icon" href="">
                                    <img class="icon-nmis" src="{{ asset('assets/img/nmicon/Demographics.png') }}" alt="">
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a class="nmis-icon" href="#">
                                    <img class="icon-nmis" src="{{ asset('assets/img/nmicon/Puzzle.png') }}" alt="">
                                  </a>
                                </li>
                                <li class="menu-item">                                  
                                  <a class="nmis-icon" href="#">
                                    <img class="icon-nmis" src="{{ asset('assets/img/nmicon/Accounting.png') }}" alt="">
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a class="icon-nmis" class="nmis-icon"href="#">
                                    <img class="icon-nmis" src="{{ asset('assets/img/nmicon/People.png') }}" alt="">
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a class ="nmis-icon" href="#">
                                    <img class="icon-nmis" src="{{ asset('assets/img/nmicon/User Groups.png') }}" alt="">
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a class="nmis-icon" href="#">
                                    <img class="icon-nmis" src="{{ asset('assets/img/nmicon/Profile.png') }}" alt="">
                                  </a>
                                </li>
                              </ul>
                            </nav>


                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-4 ml-auto mr-auto">
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
