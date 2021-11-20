<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[App\Http\Controllers\Auth\LoginController::class,'showLoginForm'])->name('login');
Route::post('/logout',[App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');
Route::group(['middleware' => 'auth',],function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
    Route::get('/Myapi',[App\Http\Controllers\MyapiController::class,'index']);
    Route::get('/About',[App\Http\Controllers\AboutController::class,'index']);
    Route::view('/laravel','welcome');
});

Auth::routes();

