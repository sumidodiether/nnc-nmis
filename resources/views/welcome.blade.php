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
                                    <div class="navigation-titles" style="position: relative;right: 200%;bottom: 40%;">
                                      <h6 class="nav-title" style="width: 17rem; font-size: 30px; text-align: right;">Dashboard</h4>
                                      <p class="nav-text" style="margin-top: 0;margin-bottom: 1rem;line-height: 1;font-size: 13px;width: 17rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing at in tellus integer feugiat scelerisque.</p>
                                    </div>
                                  </a>
                                </li>
                                <li class="menu-item">                                  
                                  <a class="nmis-icon" href="#">
                                    <img class="icon-nmis" src="{{ asset('assets/img/nmicon/Test Passed.png') }}" alt="">
                                    <div class="navigation-titles" style="position: relative;left: 110%;bottom: 37%;">
                                      <h6 class="nav-title" style="width: 17rem; font-size: 30px; text-align: left;">Resources</h4>
                                      <p class="nav-text" style="margin-top: 0;margin-bottom: 1rem;line-height: 1;font-size: 13px;width: 17rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing at in tellus integer feugiat scelerisque.</p>
                                    </div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a class="icon-nmis" class="nmis-icon"href="#">
                                    <img class="icon-nmis" src="{{ asset('assets/img/nmicon/People.png') }}" alt="">
                                    <div class="navigation-titles" style="position: relative;left: 110%;bottom: 37%;">
                                      <h6 class="nav-title" style="width: 17rem; font-size: 30px; text-align: left;">Operation Timbang Plus</h4>
                                      <p class="nav-text" style="margin-top: 0;margin-bottom: 1rem;line-height: 1;font-size: 13px;width: 17rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing at in tellus integer feugiat scelerisque.</p>
                                    </div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a class="nmis-icon" href="#">
                                    <img class="icon-nmis" src="{{ asset('assets/img/nmicon/Profile.png') }}" alt="">
                                    <div class="navigation-titles" style="position: relative;right: 200%;bottom: 40%;">
                                      <h6 class="nav-title" style="width: 17rem; font-size: 30px; text-align: right;">LGU Performance</h4>
                                      <p class="nav-text" style="margin-top: 0;margin-bottom: 1rem;line-height: 1;font-size: 13px;width: 17rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing at in tellus integer feugiat scelerisque.</p>
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

   {{-- <section class="section bg-light py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5>About Us</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="col-md-4">
          <h5>Contact Information</h5>
          <ul class="list-unstyled">
            <li>Email: info@example.com</li>
            <li>Phone: (123) 456-7890</li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>Follow Us</h5>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Facebook</a></li>
            <li class="list-inline-item"><a href="#">Twitter</a></li>
            <li class="list-inline-item"><a href="#">Instagram</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section> --}}

@endsection

@section('footer')
 
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      demo.checkFullPageBackgroundImage();
    });
  </script>
@endpush
