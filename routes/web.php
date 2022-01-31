<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\homeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/home',        [ homeController::class,'index' ]);
Route::get ('/superadmin', [ homeController::class,'superadmin' ])->middleware('admin');
Route::get ('/register',    [ authController::class,'register' ]);
Route::post('/postregister',[ authController::class,'postregister' ]);
Route::get ('/login',       [ authController::class,'login' ])->name('login');
Route::get ('/logout',      [ authController::class,'logout' ]);
Route::post('/postlogin',   [ authController::class,'postlogin' ]);