<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\GuruAdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BeritaGuruController;
use App\Http\Controllers\AlumniGuruController;
use App\Http\Controllers\BeritaSiswaController;
use App\Http\Controllers\AbsensiGuruController;
use App\Http\Controllers\TataTertibController;
use App\Http\Controllers\JurnaladminControlle;
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
// Admin

Route::resource('/dudi', App\Http\Controllers\DashboardController::class);
Route::resource('/aproval', App\Http\Controllers\AprovalController::class);
Route::resource('/approvalizin', App\Http\Controllers\ApprovalIzinController::class);
Route::resource('/siswa_admin', App\Http\Controllers\SiswaController::class);
Route::resource('/alumni_admin', App\Http\Controllers\SiswaController::class);
Route::resource('/guru_admin', App\Http\Controllers\ASiswaController::class);
Route::resource('/absensi_admin', App\Http\Controllers\ASiswaController::class);
Route::resource('/tatatertib', App\Http\Controllers\ASiswaController::class);
Route::resource('/laporansiswa', App\Http\Controllers\ASiswaController::class);
Route::resource('/laporan_piket', App\Http\Controllers\ASiswaController::class);
Route::resource('/sp', App\Http\Controllers\ASiswaController::class);
Route::resource('/Berita', App\Http\Controllers\ASiswaController::class);
Route::resource('/chat', App\Http\Controllers\ASiswaController::class);
Route::resource('/piket', App\Http\Controllers\ASiswaController::class);
Route::resource('/mou', App\Http\Controllers\ASiswaController::class);
Route::resource('/tolak', App\Http\Controllers\ASiswaController::class);



// akhir admin

// Pembimbing



// akhir Pembimbing
// Siswa



// akhir siswa

// login

Route::resource('/login', App\Http\Controllers\LoginController::class);
Route::get('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');


// end login
