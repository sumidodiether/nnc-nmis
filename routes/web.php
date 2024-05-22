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
    Route::post('/mellpi_pro_LGU' ,  [MellproLGUController::class, 'upload'])->name('mellpi_pro_LGU.upload');
    
    // Melpi Pro Controller
    Route::get('/mellpi_pro', [MellpiProController::class, 'index'])->name('mellpi_pro.view');
    Route::post('/mellpi_pro' ,  [MellpiProController::class, 'upload'])->name('mellpi_pro.upload');
    Route::post('/mellpi_pro_create', [MellpiProController::class, 'create'])->name('mellpi_pro.create');
    Route::post('/mellpi_pro_store', [MellpiProController::class, 'store'])->name('mellpi_pro.store');

    //Route::get('/lncFunction' ,  [LNCController::class, 'index' ]->name('LNCIndex.view'));
    Route::resource('/lncFunction', LNCController::class);
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/personnelDnaDirectoryIndex' ,[PersonnelDnaDirectoryController::class, 'index'])->name('personnelDnaDirectoryIndex');
    Route::get('/personnelDnaDirectory' ,[PersonnelDnaDirectoryController::class, 'create'])->name('personnelDnaDirectory.create');
    Route::get('/nutritionOffices' ,[NutritionOfficesController::class, 'index'])->name('nutritionOffices');
    Route::get('/equipmentInventoryIndex' ,[EquipmentInventoryController::class, 'index'])->name('equipmentInventoryIndex');
    Route::get('/equipmentInventory' ,[EquipmentInventoryController::class, 'create'])->name('equipmentInventory');
    Route::post('/equipmentInventory', [EquipmentInventoryController::class, 'store'])->name('equipmentInventory.store');





    // action="{{ route('upload.csv') }}" 
    // ->name('upload.csv');

});

require __DIR__.'/auth.php';

Auth::routes();



Auth::routes();

// Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
    Route::get('users',[UserController::class,'index']);
    Route::post('users', [UserController::class, 'store'])->name('users.store');
});

Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
