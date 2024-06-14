<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LNCController;
use App\Http\Controllers\MellpiPro\MellpiProController;
use App\Http\Controllers\MellproLGUController;
use App\Http\Controllers\RequestPortalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\publicDashboardController;
use App\Http\Controllers\EquipmentInventoryController;
use App\Http\Controllers\NutritionOfficesController;
use App\Http\Controllers\PersonnelDnaDirectoryController;

// added
use App\Http\Controllers\CentralAdmin\PermissionController;
use App\Http\Controllers\CentralAdmin\RolesController;
use App\Http\Controllers\CentralAdmin\ProfileController;
use App\Http\Controllers\CentralAdmin\AdminUserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;


use function PHPSTORM_META\map;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');  
});

// Outside User Role
Route::get('/request-portal', [RequestPortalController::class, 'index'])->name('requestportal.view');
Route::get('/publicDashboard', [publicDashboardController::class, 'index'])->name('guest');


// Please Check
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



// For review
Route::middleware('auth')->group(function () {
 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // bulk upload - Ryan
    Route::get('/mellpi_pro_LGU' ,  [MellproLGUController::class, 'index'])->name('mellpi_pro_LGU.index');
    Route::post('/mellpi_pro_LGU' ,  [MellproLGUController::class, 'Regionupload'])->name('mellpi_pro_LGU.Regionupload');
    Route::post('/mellpi_pro_LGU/province' ,  [MellproLGUController::class, 'Provinceupload'])->name('mellpi_pro_LGU.Provinceupload');
    Route::post('/mellpi_pro_LGU/city' ,  [MellproLGUController::class, 'Cityupload'])->name('mellpi_pro_LGU.Cityupload');
    Route::post('/mellpi_pro_LGU/mun' ,  [MellproLGUController::class, 'Munupload'])->name('mellpi_pro_LGU.Munupload');
    Route::post('/mellpi_pro_LGU/brgy' ,  [MellproLGUController::class, 'Barangayupload'])->name('mellpi_pro_LGU.Barangayupload'); 
    
    // Melpi Pro Controller
    Route::get('/mellpi_pro', [MellpiProController::class, 'index'])->name('mellpi_pro.view');
    Route::post('/mellpi_pro' ,  [MellpiProController::class, 'upload'])->name('mellpi_pro.upload');
    Route::post('/mellpi_pro_create', [MellpiProController::class, 'create'])->name('mellpi_pro.create');
    Route::get('/mellpi_pro_summary1b', [MellpiProController::class, 'summary1b'])->name('mellpi_pro.summary1b');
    Route::get('/mellpi_pro_summary2b', [MellpiProController::class, 'summary2b'])->name('mellpi_pro.summary2b');
    Route::post('/mellpi_pro_store', [MellpiProController::class, 'store'])->name('mellpi_pro.store');

    //Route::get('/lncFunction' ,  [LNCController::class, 'index' ]->name('LNCIndex.view'));
    Route::resource('/lncFunction', LNCController::class);
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Admin
    Route::get('/provinces/{region}', [AdminUserController::class, 'getProvincesByRegion'])->name('provinces.byRegion.get');
    Route::get('/cities/{provcode}', [AdminUserController::class, 'getCitiesByProvince'])->name('cities.byProvince.get');
    Route::get('/regions', [AdminUserController::class, 'getRegions'])->name('regions.get');

    // Equipment Inventory
    Route::get('/provinces/{region}', [EquipmentInventoryController::class, 'getProvincesByRegion'])->name('provinces.byRegion.get');
    Route::get('/cities/{provcode}', [EquipmentInventoryController::class, 'getCitiesByProvince'])->name('cities.byProvince.get');
    Route::get('/regions', [EquipmentInventoryController::class, 'getRegions'])->name('regions.get');

    // Mellpi Pro
    // Route::get('/provinces/{region}', [MellpiProController::class, 'getProvincesByRegion'])->name('provinces.byRegion.get');
    // Route::get('/barangays/{city}', [MellpiProController::class, 'getBarangays'])->name('barangays.get');
    // Route::get('/cities/{provcode}', [MellpiProController::class, 'getCitiesByProvince'])->name('cities.byProvince.get');
    // Route::get('/regions', [MellpiProController::class, 'getRegions'])->name('regions.get');

    Route::get('/regions', [MellpiProController::class, 'getRegions'])->name('regions.get');
    Route::get('/provinces/{region}', [MellpiProController::class, 'getProvinces'])->name('provinces.get');
    Route::get('/cities/{province}', [MellpiProController::class, 'getCities'])->name('cities.get');
    // Route::get('/barangays/{city}', [MellpiProController::class, 'getBarangays'])->name('barangays.get');
    Route::get('/barangays/{citymuncode}', [MellpiProController::class, 'getBarangays'])->name('barangays.get');


    //personal DNA
    Route::get('/provinces/{region}', [PersonnelDnaDirectoryController::class, 'getProvincesByRegion'])->name('provinces.byRegion.get');
    Route::get('/cities/{provcode}', [PersonnelDnaDirectoryController::class, 'getCitiesByProvince'])->name('cities.byProvince.get');
    Route::get('/regions', [PersonnelDnaDirectoryController::class, 'getRegions'])->name('regions.get');
 

    Route::get('/personnelDnaDirectoryIndex' ,[PersonnelDnaDirectoryController::class, 'index'])->name('personnelDnaDirectoryIndex');
    Route::get('/personnelDnaDirectory' ,[PersonnelDnaDirectoryController::class, 'create'])->name('personnelDnaDirectory.create');
    Route::post('/personnelDnaDirectory/nao' ,[PersonnelDnaDirectoryController::class, 'storeNAO'])->name('personnelDnaDirectory.storeNAO');
    Route::post('/personnelDnaDirectory/npc' ,[PersonnelDnaDirectoryController::class, 'storeNPC'])->name('personnelDnaDirectory.storeNPC');
    Route::post('/personnelDnaDirectory/bns' ,[PersonnelDnaDirectoryController::class, 'storeBNS'])->name('personnelDnaDirectory.storeBNS');

    Route::get('/nutritionOfficesIndex' ,[NutritionOfficesController::class, 'index'])->name('nutritionOfficesIndex');
    Route::get('/nutritionOffices', [NutritionOfficesController::class, 'create'])->name('nutritionOffices');
    Route::post('/nutritionOffices', [NutritionOfficesController::class, 'store'])->name('nutritionOffices.store');
    Route::get('/equipmentInventoryIndex' ,[EquipmentInventoryController::class, 'index'])->name('equipmentInventoryIndex');
    Route::get('/equipmentInventory' ,[EquipmentInventoryController::class, 'create'])->name('equipmentInventory');
    Route::post('/equipmentInventory', [EquipmentInventoryController::class, 'store'])->name('equipmentInventory.store');

    // action="{{ route('upload.csv') }}" 
    // ->name('upload.csv');

});

require __DIR__.'/auth.php';


Auth::routes();

// Route::get('/home', 'App\Http\Controllers\HomeController@ind kex')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);

	// Route::get('profiles', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	// Route::put('profiles', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	// Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
    Route::get('users',[UserController::class,'index']);
    Route::post('users', [UserController::class, 'store'])->name('users.store');

     
    Route::prefix('CentralAdmin')->middleware(['auth', 'CentralAdmin'])->group(function () {
    //=======================================================================================================================================================
        // Roles
        Route::GET('/roles', [RolesController::class, 'index'])->name('roles.index');
        Route::POST('/roles', [RolesController::class, 'store'])->name('roles.store');
        Route::GET('/roles/{role}/give-permission' ,[RolesController::class,'addPermissionToRole'])->name('roles.addPermissionToRole');
        Route::PUT('/roles/{role}/give-permission' ,[RolesController::class,'givePermissionToRole'])->name('roles.givePermissionToRole');
        Route::PUT('/roles/{role}' ,[RolesController::class,'update'])->name('roles.update');
        Route::GET('/roles/{role}/edit', [RolesController::class, 'edit'])->name('roles.edit');
        Route::DELETE('/roles/{role}', [RolesController::class, 'destroy'])->name('roles.destroy');

        // Permission 
        Route::GET('/permissions', [PermissionController::class, 'index'])->name('permission.index');
        Route::POST('/permissions', [PermissionController::class, 'store'])->name('permission.store');
        Route::PUT('/permissions/{permission}' ,[PermissionController::class,'update'])->name('permission.update');
        Route::GET('/permissions/{permission}/edit', [PermissionController::class, 'edit'])->name('permission.edit');
        Route::DELETE('/permissions/{permission}', [PermissionController::class, 'destroy'])->name('permission.destroy');
    //==========================================================================================================================================

        //AdminUser List Controller
        Route::get('/admin', [AdminUserController::class, 'index'])->name('CAadmin.index');
        Route::POST('/admin', [AdminUserController::class, 'store'])->name('CAadmin.store');
        Route::get('/admin/create', [AdminUserController::class, 'create'])->name('CAadmin.create');
        Route::get('/admin/{admin}', [AdminUserController::class, 'update'])->name('CAadmin.update');
        Route::get('/admin/{admin}/edit', [AdminUserController::class, 'create'])->name('CAadmin.edit');
        Route::get('/admin/{admin}', [AdminUserController::class, 'destroy'])->name('CAadmin.destroy');

        // // Userprofile
        //Route::get('/profile', [ProfileController::class, 'index'])->name('CAprofile.index');
        //Route::POST('/profile', [ProfileController::class, 'store'])->name('CAadmin.store');
        //Route::get('/profile/create', [ProfileController::class, 'create'])->name('CAprofile.create');
        Route::get('/profile', [ProfileController::class, 'update'])->name('CAprofile.update');
        Route::get('/profile', [ProfileController::class, 'create'])->name('CAprofile.edit');
        Route::DELETE('/profile/password', [ProfileController::class, 'password'])->name('CAprofile.password');

        //DashboardController
        Route::get('/dashboard', [AdminUserController::class, 'index'])->name('CAdashboard.index');
        Route::POST('/dashboard', [AdminUserController::class, 'store'])->name('CAdashboard.store');
        Route::get('/dashboard/create', [AdminUserController::class, 'create'])->name('CAdashboard.create');
        Route::get('/dashboard/{admin}', [AdminUserController::class, 'update'])->name('CAdashboard.update');
        Route::get('/dashboard/{admin}/edit', [AdminUserController::class, 'create'])->name('CAdashboard.edit');
        Route::DELETE('/dashboard/{admin}', [AdminUserController::class, 'destroy'])->name('CAdashboard.destroy');





    });

    Route::prefix('CentralOfficer')->middleware(['auth', 'CentralOfficer'])->group(function () {
        
        //AdminUserController
        Route::get('/admin', [AdminUserController::class, 'index'])->name('COadmin.index');
        Route::POST('/admin', [AdminUserController::class, 'store'])->name('COadmin.store');
        Route::get('/admin/create', [AdminUserController::class, 'create'])->name('COadmin.create');
        Route::get('/admin/{admin}', [AdminUserController::class, 'update'])->name('COadmin.update');
        Route::get('/admin/{admin}/edit', [AdminUserController::class, 'create'])->name('COadmin.edit');
        Route::get('/admin/{admin}', [AdminUserController::class, 'destroy'])->name('COadmin.destroy');

    });

    Route::prefix('CentralStaff')->middleware(['auth', 'CentralStaff'])->group(function () {
        
        //AdminUserController
        // Route::get('/admin', [AdminUserController::class, 'index'])->name('admin.index');
        // Route::POST('/admin', [AdminUserController::class, 'store'])->name('admin.store');
        // Route::get('/admin/create', [AdminUserController::class, 'create'])->name('admin.create');
        // Route::get('/admin/{admin}', [AdminUserController::class, 'update'])->name('admin.update');
        // Route::get('/admin/{admin}/edit', [AdminUserController::class, 'create'])->name('admin.edit');
        // Route::get('/admin/{admin}', [AdminUserController::class, 'destroy'])->name('admin.destroy');

    });

    Route::prefix('RegionalOfficer')->middleware(['auth', 'RegionalOfficer'])->group(function () {
        
        //AdminUserController
        // Route::get('/admin', [AdminUserController::class, 'index'])->name('admin.index');
        // Route::POST('/admin', [AdminUserController::class, 'store'])->name('admin.store');
        // Route::get('/admin/create', [AdminUserController::class, 'create'])->name('admin.create');
        // Route::get('/admin/{admin}', [AdminUserController::class, 'update'])->name('admin.update');
        // Route::get('/admin/{admin}/edit', [AdminUserController::class, 'create'])->name('admin.edit');
        // Route::get('/admin/{admin}', [AdminUserController::class, 'destroy'])->name('admin.destroy');

    });

    Route::prefix('RegionalStaff')->middleware(['auth', 'RegionalStaff'])->group(function () {
        
        //AdminUserController
        // Route::get('/admin', [AdminUserController::class, 'index'])->name('admin.index');
        // Route::POST('/admin', [AdminUserController::class, 'store'])->name('admin.store');
        // Route::get('/admin/create', [AdminUserController::class, 'create'])->name('admin.create');
        // Route::get('/admin/{admin}', [AdminUserController::class, 'update'])->name('admin.update');
        // Route::get('/admin/{admin}/edit', [AdminUserController::class, 'create'])->name('admin.edit');
        // Route::get('/admin/{admin}', [AdminUserController::class, 'destroy'])->name('admin.destroy');

    });

    Route::prefix('ProvincialOfficer')->middleware(['auth', 'ProvincialOfficer'])->group(function () {
        
        //AdminUserController
        // Route::get('/admin', [AdminUserController::class, 'index'])->name('admin.index');
        // Route::POST('/admin', [AdminUserController::class, 'store'])->name('admin.store');
        // Route::get('/admin/create', [AdminUserController::class, 'create'])->name('admin.create');
        // Route::get('/admin/{admin}', [AdminUserController::class, 'update'])->name('admin.update');
        // Route::get('/admin/{admin}/edit', [AdminUserController::class, 'create'])->name('admin.edit');
        // Route::get('/admin/{admin}', [AdminUserController::class, 'destroy'])->name('admin.destroy');

    });

    Route::prefix('ProvincialStaff')->middleware(['auth', 'ProvincialStaff'])->group(function () {
        
        //AdminUserController
        // Route::get('/admin', [AdminUserController::class, 'index'])->name('admin.index');
        // Route::POST('/admin', [AdminUserController::class, 'store'])->name('admin.store');
        // Route::get('/admin/create', [AdminUserController::class, 'create'])->name('admin.create');
        // Route::get('/admin/{admin}', [AdminUserController::class, 'update'])->name('admin.update');
        // Route::get('/admin/{admin}/edit', [AdminUserController::class, 'create'])->name('admin.edit');
        // Route::get('/admin/{admin}', [AdminUserController::class, 'destroy'])->name('admin.destroy');

    });

    Route::prefix('BarangayScholar')->middleware(['auth', 'BarangayScholar'])->group(function () {
        
        //AdminUserController
        // Route::get('/admin', [AdminUserController::class, 'index'])->name('admin.index');
        // Route::POST('/admin', [AdminUserController::class, 'store'])->name('admin.store');
        // Route::get('/admin/create', [AdminUserController::class, 'create'])->name('admin.create');
        // Route::get('/admin/{admin}', [AdminUserController::class, 'update'])->name('admin.update');
        // Route::get('/admin/{admin}/edit', [AdminUserController::class, 'create'])->name('admin.edit');
        // Route::get('/admin/{admin}', [AdminUserController::class, 'destroy'])->name('admin.destroy');

    });

    

});

Route::get('/UserDashboard',[DashboardController::class,'index'])->name('accountDashboard');
Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
