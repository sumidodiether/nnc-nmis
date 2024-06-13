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
use App\Http\Controllers\CentralAdmin\AdminUserController;
use App\Http\Controllers\Auth\RegisterController;


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
        // echo "<pre>";
        // var_dump($_SERVER["DOCUMENT_ROOT"]);
        // var_dump($_SERVER["DOCUMENT_URI"]);
        // echo "</pre>";
});

Route::get('/request-portal', [RequestPortalController::class, 'index'])->name('requestportal.view');
Route::get('/publicDashboard', [publicDashboardController::class, 'index'])->name('guest');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


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
    Route::get('/provinces/{region}', [MellpiProController::class, 'getProvincesByRegion'])->name('provinces.byRegion.get');
    Route::get('/cities/{provcode}', [MellpiProController::class, 'getCitiesByProvince'])->name('cities.byProvince.get');
    Route::get('/regions', [MellpiProController::class, 'getRegions'])->name('regions.get');

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


 // sample
 Route::GET('/permissions', [PermissionController::class, 'index'])->name('permission.index');
 Route::POST('/permissions', [PermissionController::class, 'store'])->name('permission.store');
 Route::PUT('/permissions/{permission}' ,[PermissionController::class,'update'])->name('permission.update');
 Route::GET('/permissions/{permission}/edit', [PermissionController::class, 'edit'])->name('permission.edit');
 Route::DELETE('/permissions/{permission}', [PermissionController::class, 'destroy'])->name('permission.destroy');

  // sample
Route::GET('/roles', [RolesController::class, 'index'])->name('roles.index');
Route::POST('/roles', [RolesController::class, 'store'])->name('roles.store');
Route::GET('/roles/{role}/give-permission' ,[RolesController::class,'addPermissionToRole'])->name('roles.addPermissionToRole');
Route::PUT('/roles/{role}/give-permission' ,[RolesController::class,'givePermissionToRole'])->name('roles.givePermissionToRole');
Route::PUT('/roles/{role}' ,[RolesController::class,'update'])->name('roles.update');
Route::GET('/roles/{role}/edit', [RolesController::class, 'edit'])->name('roles.edit');
Route::DELETE('/roles/{role}', [RolesController::class, 'destroy'])->name('roles.destroy');

Route::resource('/adminusers', AdminUserController::class);


 
Auth::routes();

// Route::get('/home', 'App\Http\Controllers\HomeController@ind kex')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
    Route::get('users',[UserController::class,'index']);
    Route::post('users', [UserController::class, 'store'])->name('users.store');
});

// sample routes Ryan  wag galawin hahaha----------------------------------------------------------------------------------
Route::group(['middleware' => 'auth'], function () {
    
    // CentralAdmin
    Route::group([
        'prefix' => 'CentralAdmin',
        'middleware' => 'is_centraladmin',
        'as' => 'cCentralAdmin.',
    ], function () {
        //Route
    });

    // CentralOfficer
    Route::group([
        'prefix' => 'CentralOfficer',
        'middleware' => 'is_centralofficer',
        'as' => 'CentralOfficer.',
    ], function () {
        //Route
    });

    // CentralStaff
    Route::group([
        'prefix' => 'CentralStaff',
        'middleware' => 'is_centralstaff',
        'as' => 'CentralStaff.',
    ], function () {
        //Route
    });


    // RegionalOfficer
    Route::group([
        'prefix' => 'RegionalOfficer',
        'middleware' => 'is_regionalofficer',
        'as' => 'RegionalOfficer.',
    ], function () {
        //Route
    });

    // RegionalStaff
    Route::group([
        'prefix' => 'RegionalStaff',
        'middleware' => 'is_regionalstaff',
        'as' => 'RegionalStaff.',
    ], function () {
            //Route
    });
    
    // ProvincialOfficer
    Route::group([
        'prefix' => 'ProvincialOfficer',
        'middleware' => 'is_provincialofficer',
        'as' => 'ProvincialOfficer.',
    ], function () {
        //Route
    });

    // Provincialstaff
    Route::group([
        'prefix' => 'Provincialstaff',
        'middleware' => 'is_provincialstaff',
        'as' => 'Provincialstaff.',
    ], function () {
            //Route
    });

    // BarangayScholar
    Route::group([
        'prefix' => 'BarangayScholar',
        'middleware' => 'is_barangayscholar',
        'as' => 'BarangayScholar.',
    ], function () {
            //Route
    });

        // PublicUser
        Route::group([
            'prefix' => 'PublicUser',
            'middleware' => 'is_publicuser',
            'as' => 'PublicUser.',
        ], function () {
                //Route
        });
});

// Route::middleware(['auth', 'role:super-admin'])->group(function () {
//     Route::resource('posts', PostController::class);
// });

// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::resource('admin/posts', PostController::class);
// });

// Route::group(['middleware' => ['role:centralAdmin']], function() {

   
//     //Route::get('permissions/{permissionId}/delete', [App\Http\Controllers\CentralAdmin\PermissionController::class, 'destroy']);

//     Route::resource('roles', App\Http\Controllers\CentralAdmin\RolesController::class);
//     Route::get('roles/{roleId}/delete', [App\Http\Controllers\CentralAdmin\RolesController::class, 'destroy']);
//     Route::get('roles/{roleId}/give-permissions', [App\Http\Controllers\CentralAdmin\RolesController::class, 'addPermissionToRole']);
//     Route::put('roles/{roleId}/give-permissions', [App\Http\Controllers\CentralAdmin\RolesController::class, 'givePermissionToRole']);

//     Route::resource('users', App\Http\Controllers\CentralAdmin\UserController::class);
//     Route::get('users/{userId}/delete', [App\Http\Controllers\CentralAdmin\UserController::class, 'destroy']);

// });




Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
