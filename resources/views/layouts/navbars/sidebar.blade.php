<style>
  /*label color start*/
  .sidebar .nav p {
    color: #000;
  }
  .sidebar .nav p:hover{
    color: #64987e;
  }
  .sidebar .nav .active p:hover{
    color: #fff;
  }
  /* .sidebar .nav p:hover{
    color: #64987e;
  } */
  /*end */
  /*icon color start */
  /* .sidebar .nav i {
    color: #000;
  } */
  /*end */
  /*logo color start */
  .sidebar .logo-normal {
    color: #000 !important;
  }
  .sidebar .logo-normal:hover {
    color: #64987e !important;
  }
  /*end*/


</style>

<div class="sidebar" data-color="white">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | darkgreen | orange | red | yellow"
-->
  <div class="logo">
    <a href="#" class="simple-text logo-mini">
      <img src="{{ asset('assets') }}/img/logo.png">
    </a>
    <a href="#" class="simple-text logo-normal">
      {{ __('NMIS') }}
    </a>
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
      <li class="@if ($activePage == 'home') active @endif">
        <a href="{{ route('home') }}">
          <i class="now-ui-icons business_chart-pie-36"></i>
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      
      <li class="@if ($activePage == 'icons') active @endif">
        <!-- <a href="{{ route('page.index','icons') }}">
          <i class="now-ui-icons business_chart-bar-32"></i>
          <p>{{ __('LGU Demographics') }}</p>
        </a> -->
        <!-- <a href="{{ route('page.index','icons') }}">
          <i class="now-ui-icons business_chart-bar-32"></i>
          <p>{{ __('LGU Performance') }}</p>
        </a> -->
        <a data-toggle="collapse" href="#LguPerformance">
            <!-- <i class="now-ui-icons ui-1_settings-gear-63"></i> -->
          <p>
             {{ __('LGU Performance') }}
            <b class="caret"></b>
          </p>
        </a>
        
        <div class="collapse show" id="LguPerformance">
          <ul class="nav">
            <li>
              <a data-toggle="collapse" href="#MellpiPro">
                <p> {{ __("MELLPI Pro for LGU") }}
                <b class="caret"></b>    
                </p>
              </a>
              <div class="collapse show" id="MellpiPro">
              <ul class="nav">
                <li class="@if ($activePage == 'mellpi_pro') active @endif">
                  <a href="{{ route('mellpi_pro.view') }}">
                  <i class="now-ui-icons files_paper"></i>
                    <p> {{ __("Create") }} </p>
                  </a>
                </li>
                <li class="@if ($activePage == 'mellpi_pro_summary1b') active @endif">
                  <a href="{{ route('mellpi_pro.summary1b') }}">
                    <i class="now-ui-icons files_paper"></i>
                    <p> {{ __("Summary") }} </p>
                  </a>
                </li>
              </ul>
            </div>
            </li>
            <li class="@if ($activePage == 'lncFunction') active @endif">
              <a href="{{ route('lncFunction.index') }}">
                <i class="now-ui-icons files_paper"></i>
                <p> {{ __("LNC Functionality") }} </p>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="@if ($activePage == 'notifications') active @endif">
        <a data-toggle="collapse" href="#AvailableResource">
        <!-- <i class="now-ui-icons files_single-copy-04"></i> -->
          <p>
             {{ __('Resources') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="AvailableResource">
          <ul class="nav">
            <li class="@if ($activePage == 'PersonnelDnaDirectoryIndex') active @endif">
              <a href="{{ route('personnelDnaDirectoryIndex') }}">
              <i class="now-ui-icons files_paper"></i>
                <p> {{ __("Personnel DNA Directory") }} </p>
              </a>
            </li>
            <li class="@if ($activePage == 'NutritionOfficesIndex') active @endif">
              <a href="{{ route('nutritionOfficesIndex') }}">
                <i class="now-ui-icons files_paper"></i>
                <p> {{ __("Nutrition Offices") }} </p>
              </a>
            </li>
            <li class="@if ($activePage == 'EquipmentInventoryIndex') active @endif">
              <a href="{{ route('equipmentInventoryIndex') }}">
                <i class="now-ui-icons files_paper"></i>
                <p> {{ __("Equipment Inventory") }} </p>
              </a>
            </li>
          </ul>
        </div>
      </li>
      
      <li class = "@if ($activePage == 'typography') active @endif">
        <!-- <a href="{{ route('page.index','typography') }}">
          <i class="now-ui-icons design_palette"></i>
          <p>{{ __('Structure') }}</p>
        </a> -->
        <a href="#">
          <i class="now-ui-icons design_palette"></i>
          <p>{{ __('Operation Timbang Plus') }}</p>
        </a>
      </li>
      
      <li class = "@if ($activePage == 'typography') active @endif">

        <a href="#">
          <i class="now-ui-icons files_single-copy-04"></i>
          <p>{{ __('Request Approval') }}</p>
        </a>
      </li>
      <li>
        <a data-toggle="collapse" href="#laravelExamples">
            <!-- <i class="now-ui-icons files_paper"></i> -->
          <p>
            {{ __("User Management") }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExamples">
          <ul class="nav">
            <li class="@if ($activePage == 'profile') active @endif">
              <a href="{{ route('profile.edit') }}">
                <i class="now-ui-icons users_single-02"></i>
                <p> {{ __("User Profile") }} </p>
              </a>
            </li>
            <li class="@if ($activePage == 'users') active @endif">
              <a href="{{ route('CAadmin.index') }}">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p> {{ __("List of Users") }} </p>
              </a>
            </li>
            <li class="@if ($activePage == 'Roles') active @endif">
              <a href="{{ route('roles.index') }}">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p> {{ __("List of Roles") }} </p>
              </a>
            </li>
            <li class="@if ($activePage == 'Permissions') active @endif">
              <a href="{{ route('permission.index') }}">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p> {{ __("List of Permission") }} </p>
              </a>
            </li>
            <li class="@if ($activePage == 'mellpi_pro_LGU') active @endif">
              <a href="{{ route('mellpi_pro_LGU.index') }}">
              <i class="now-ui-icons files_paper"></i>
                <p> {{ __("MELLPI Pro LGU -Bulk Upload") }} </p>
              </a>
            </li>
          </ul>
        </div>
    </ul>
  </div>
</div>
