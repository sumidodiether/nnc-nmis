<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UserController;

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

    // //testing only
    //fetch all users
    // $user = DB::table('users')
    // ->get();
    // $user = User::where('id', 1)->first();

    //insert
    // $user = DB::table('users')
    // ->insert([
    //     'name' => 'sample',
    //     'email' => 'email@gmail.com',
    //     'password' => 'password'
    // ]);
    // $user = User::create([
    //     'name' => 'test',
    //     'email' => 'test@gmail.com',
    //     'password' => 'test'
    // ]);

    //update
    // $user = DB::table('users')
    // ->where('id',5)
    // ->update([
    //     'email' => 'sample@gmail.com',
    //     'name' => 'samplename'
    // ]);
    // $user = User::find(7)->update([
    //     'name' => 'testNamessss',
    // ]);

    //delete
    // $user = DB::table('users')
    // ->where('id',5)
    // ->delete();
    // $user = User::where('id',7)->delete();


    // dd($user);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});
Route::get('users',[UserController::class,'index']);
