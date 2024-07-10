@extends('layouts.app', [
    'namePage' => 'NMIS',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'welcome',
    'backgroundImage' => asset('assets') . "/img/background1.png",
])

<style>
.gov-ul-links {
  width: 65%;
}

.bg-nmis {
  background: #d7eae3;
}

.bg-footer {
  background: #64987e;
}

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
.menu-toggler:hover + label:after {
  background: white;
}
.menu-toggler:checked + label {
  background: transparent;
}
.menu-toggler:checked + label:before,
.menu-toggler:checked + label:after {
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
  transform: rotate(15deg) translate(-110px);
}
.menu-toggler:checked ~ ul .menu-item:nth-child(2) {
  transform: rotate(99deg) translateX(-110px);
}
.menu-toggler:checked ~ ul .menu-item:nth-child(3) {
  transform: rotate(200deg) translateX(-110px);
}
.menu-toggler:checked ~ ul .menu-item:nth-child(4) {
  transform: rotate(278deg) translateX(-95px);
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
  transform: rotate(-15deg);
}
.menu-item:nth-child(2) a {
  transform: rotate(-99deg);
}
.menu-item:nth-child(3) a {
  transform: rotate(-200deg);
}
.menu-item:nth-child(4) a {
  transform: rotate(-278deg);
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
  background: #FFFDB5;
  border-radius: 50%;
  text-align: center;
  text-decoration: none;
  font-size: 40px;
  pointer-events: none;
  transition: 0.2s;
}
.menu-item a:hover {
  box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.3);
 color: black;
  /* background:#EFFAD3; */
  background:#FEFFD2;
  
  font-size: 44.44px
}

.nav-text1 {
  color:black;
}
.nav-text1:hover {
  color:black;
}
.icon-nmis {
  width: 50%;
  position: relative;
  top: 22%;
}

</style>

@section('content')
  <div class="content" style="margin-top:30px;margin-bottom: 30px ">
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
                                    <div class="navigation-titles" style="position: relative;right: 200%;bottom: 40%;">
                                      <h6 class="nav-title" style="width: 17rem; font-size: 30px; text-align: right;">Dashboard</h6>
                                      <p class="nav-text1" style="margin-top: 0;margin-bottom: 1rem;line-height: 1;font-weight:bold;font-size: 18px;width: 17rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing at in tellus integer feugiat scelerisque.</p>
                                    </div>
                                  </a>
                                </li>
                                <li class="menu-item">                                  
                                  <a class="nmis-icon" href="#">
                                    <img class="icon-nmis" src="{{ asset('assets/img/nmicon/Test Passed.png') }}" alt="">
                                    <div class="navigation-titles" style="position: relative;left: 110%;bottom: 37%;">
                                      <h6 class="nav-title" style="width: 17rem; font-size: 30px; text-align: left;">Resources</h6>
                                      <p class="nav-text1" style="margin-top: 0;margin-bottom: 1rem;line-height: 1;font-weight:bold;font-size: 18px;width: 17rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing at in tellus integer feugiat scelerisque.</p>
                                    </div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a class="icon-nmis" class="nmis-icon"href="#">
                                    <img class="icon-nmis" src="{{ asset('assets/img/nmicon/People.png') }}" alt="">
                                    <div class="navigation-titles" style="position: relative;left: 110%;bottom: 37%;">
                                      <h6 class="nav-title" style="width: 17rem; font-size: 30px; text-align: left;">Operation Timbang Plus</h6>
                                      <p class="nav-text1" style="margin-top:0;margin-bottom: 1rem;line-height: 1;font-weight:bold;font-size: 18px;width: 17rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing at in tellus integer feugiat scelerisque.</p>
                                    </div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a class="nmis-icon" href="#">
                                    <img class="icon-nmis" src="{{ asset('assets/img/nmicon/Profile.png') }}" alt="">
                                    <div class="navigation-titles" style="position: relative;right: 200%;bottom: 40%;">
                                      <h6 class="nav-title" style="width: 17rem; font-size: 30px; text-align: right;">LGU Performance</h6>
                                      <p class="nav-text1" style="margin-top:0;margin-bottom: 1rem;line-height: 1;font-weight:bold;font-size: 18px;width: 17rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing at in tellus integer feugiat scelerisque.</p>
                                    </div>
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

@section('additional-content')
<div class="additional-content bg-nmis">
    <div class="container p-5">
        <div class="additional-content-wrapper d-flex">
            <div class="additional-content-left">
              <h4 class ="additional-content-title" style="font-weight:bold;font-size:30px">About NNC</h4>
              <p class= "additional-content-text w-75" style="font-weight:500;font-size:18px">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            </div>
            <div class="additional-content-right">
              <img class="about-pic rounded shadow-lg" src="{{ asset('assets/img/nmis/about-welcome.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
<div class="footer bg-footer">
    <div class="container-fluid p-4">
        <div class="row">
            <div class="col-md-4">
                <h4 class="text-light">REPUBLIC OF THE PHILIPPINES</h4>
                <p class="footer-text text-light">All content is in the public domain unless otherwise stated.</p>
            </div>
            <div class="col-md-3">
                <h4 class="text-light">ABOUT GOVPH</h4>
                <p class="footer-text text-light w-75">Learn more about the Philippine government, its structure, how government works and the people behind it.</p>
            </div>
            <div class="col-md-3">
                <h4 class="text-light">GOV.PH</h4>
                <ul class="gov-ul-links list-unstyled text-light">
                    <li><a href="#">Open Data Portal</a></li>
                    <li><a href="#">Official Gazette</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h4 class="text-light">GOV.PH</h4>
                <ul class="list-unstyled text-light">
                    <li><a href="#">Office of the President</a></li>
                    <li><a href="#">Office of the Vice President</a></li>
                    <li><a href="#">Service of the Philippines</a></li>
                    <li><a href="#">House of Representatives</a></li>
                    <li><a href="#">Supreme Court</a></li>
                    <li><a href="#">Court of Appeals</a></li>
                    <li><a href="#">Sandiganbayan</a></li>
                </ul>
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
