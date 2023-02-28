<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Events\Logout;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\KendaraanController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', RegisterController::class);
Route::post('login', LoginController::class);

Route::middleware(['auth'])->group(function () {
    Route::post('logout', LogoutController::class);
    Route::resource('kendaraan', KendaraanController::class);

    Route::get('mobil', [KendaraanController::class, 'getAllMobil']);
    Route::get('mobil/stock', [KendaraanController::class, 'getAllStockMobil']);
    Route::get('mobil/terjual', [KendaraanController::class, 'getAllTerjualMobil']);

    Route::get('motor', [KendaraanController::class, 'getAllMotor']);
    Route::get('motor/stock', [KendaraanController::class, 'getAllStockMotor']);
    Route::get('motor/terjual', [KendaraanController::class, 'getAllTerjualMotor']);
});
