<?php

use App\Http\Controllers\DataanakController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\KebutuhanController;
use App\Http\Controllers\KegiatanController;
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
    return view('frontend.index');
});

Auth::routes(
    [
        'register' => false,
    ]
);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//hanya untuk role Admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/', function () {
        return 'halaman admin';
    });
    Route::get('profile', function () {
        return 'halaman profile admin';
    });

    Route::resource('dataanak', DataanakController::class);
    Route::resource('kegiatan', KegiatanController::class);
    Route::resource('kebutuhan', KebutuhanController::class);
    Route::resource('donasi', DonasiController::class);

});
