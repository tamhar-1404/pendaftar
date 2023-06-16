<?php

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
Route::resource('/dudi', App\Http\Controllers\DashboardController::class);
Route::resource('/siswamagang', App\Http\Controllers\DashboardSiswaController::class);
Route::resource('/guru', App\Http\Controllers\DashboardGuruController::class);
Route::resource('/chat', App\Http\Controllers\ChatController::class);
Route::resource('/absensi_guru', App\Http\Controllers\AbsensiGuruController::class);
