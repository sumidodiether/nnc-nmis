<style>
/*label color start*/
.sidebar .nav p {
    color: #000;
}

.sidebar .nav p:hover {
    color: #64987e;
}

.sidebar .nav .active p:hover {
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
            <li class="@if ($activePage == 'dashboard') active @endif">
                <a href="{{ route('CAdashboard.index') }}">
                    <i class="now-ui-icons users_single-02"></i>
                    <p> {{ __("Dashboard") }} </p>
                </a>
            </li>

            <!-- LNC Functionality Checklist -->
            <li class="@if ($activePage == 'notifications') active @endif">
                <a data-toggle="collapse" href="#LNC" style="padding-top:0px; padding-bottom:0px">
                    <p>
                        {{ __('LNC Functionality Checklist') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="LNC">
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

            <!-- MellPi Pro LGUs -->
            <li class="@if ($activePage == 'notifications') active @endif">
                <a data-toggle="collapse" href="#LGU"  >
                    <p>
                        {{ __('MellPi Pro FOR LGUs') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="LGU" style="">
                    <ul class="nav">
                        <li class="@if ($activePage == 'PersonnelDnaDirectoryIndex') active @endif">
                            <a href="{{ route('personnelDnaDirectoryIndex') }}" >
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

            <!-- MellPi Pro LNFP -->
            <li class="@if ($activePage == 'notifications') active @endif">
                <a data-toggle="collapse" href="#LNFP">
                    <p>
                        {{ __('MellPi Pro FOR LNFP') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="LNFP">
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

            <!-- MellPi Pro LNFP -->
            <li class="@if ($activePage == 'notifications') active @endif">
                <a data-toggle="collapse" href="#NOP">
                    <p>
                        {{ __('Nutrition Offices and Personnel') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="NOP">
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

             <!-- MellPi Pro LNFP -->
             <li class="@if ($activePage == 'notifications') active @endif">
                <a data-toggle="collapse" href="#PD">
                    <p>
                        {{ __('Personnel directory') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="PD">
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

            <!-- MellPi Pro LNFP -->
            <li class="@if ($activePage == 'notifications') active @endif">
                <a data-toggle="collapse" href="#AEI"> 
                    <p style="word-wrap: break-word">
                    Anthropometric Equipment Inventory
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="AEI">
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

            <li>
                <a data-toggle="collapse" href="#laravelExamples">
                    <p> {{ __("User Management") }} <b class="caret"></b> </p>
                </a>
                <div class="collapse show" id="laravelExamples">
                    <ul class="nav">
                        <li class="@if ($activePage == 'profile') active @endif">
                            <a href="{{ route('CAprofile.index') }}">
                                <i class="now-ui-icons users_single-02"></i>
                                <p> {{ __("User Profile") }} </p>
                            </a>
                        </li>
                        <li class="@if ($activePage == 'Users') active @endif">
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
            </li>
        </ul>
    </div>
</div>