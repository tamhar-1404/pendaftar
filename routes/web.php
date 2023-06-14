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
Route::resource('/dashboard_admin', App\Http\Controllers\DashboardController::class);
Route::resource('/dashboard_siswa', App\Http\Controllers\DashboardSiswaController::class);
Route::resource('/dashboard_guru', App\Http\Controllers\DashboardGuruController::class);

