<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Place\BookingController;


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
    return view('top');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login/admin', [App\Http\Controllers\Auth\LoginController::class, 'showAdminLoginForm']);
Route::get('/register/admin', [App\Http\Controllers\Auth\RegisterController::class, 'showAdminRegisterForm']);

Route::post('/login/admin', [App\Http\Controllers\Auth\LoginController::class, 'adminLogin'])->name('admin-login');
Route::post('/register/admin', [App\Http\Controllers\Auth\RegisterController::class, 'registerAdmin'])->name('admin-register');

 Route::view('/admin', 'admin')->middleware('auth:admin')->name('admin-home');



// 管理者用予約フォーム
Route::prefix('admin')->group(function () {

    Route::resource('/reservation', 'App\Http\Controllers\Admin\ReservationController');
});

Route::prefix('place')->group(function () {

    Route::resource('/booking', 'App\Http\Controllers\Place\BookingController');
});

Route::get('/search', [App\Http\Controllers\Place\BookingController::class, 'index']);


Route::group(['middleware' => 'auth'], function () {
    Route::get('user/index', [App\Http\Controllers\UserController::class,'index']);
    Route::get('user/edit',  [App\Http\Controllers\UserController::class,'edit']);
    Route::post('user/edit',  [App\Http\Controllers\UserController::class,'update']);
});

Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('admin-mypage/index', [App\Http\Controllers\AdminController::class,'index']);
    Route::get('admin-mypage/edit',  [App\Http\Controllers\AdminController::class,'edit']);
    Route::post('admin-mypage/edit',  [App\Http\Controllers\AdminController::class,'update']);
});
