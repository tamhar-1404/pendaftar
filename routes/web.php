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
use App\Http\Controllers\JurnalSiswaController;
use App\Http\Controllers\AprovalController;
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
Route::resource('/absensi_admin', App\Http\Controllers\AbsensiadminController::class);
Route::resource('/tatatertib', App\Http\Controllers\ASiswaController::class);
Route::resource('/laporansiswa', App\Http\Controllers\ASiswaController::class);
Route::resource('/laporan_piket', App\Http\Controllers\ASiswaController::class);
Route::resource('/sp', App\Http\Controllers\ASiswaController::class);
Route::resource('/Berita', App\Http\Controllers\ASiswaController::class);
Route::resource('/chat', App\Http\Controllers\ASiswaController::class);
Route::resource('/piket', App\Http\Controllers\ASiswaController::class);
Route::resource('/mou', App\Http\Controllers\ASiswaController::class);
Route::resource('/tolak', App\Http\Controllers\ASiswaController::class);
Route::resource('/jurnal_admin', App\Http\Controllers\JurnaladminController::class);
Route::post('/aproval/{aproval}/confirm', [App\Http\Controllers\AprovalController::class, 'confirm'])->name('aproval.confirm');
Route::post('/aproval/{aproval}/reject', [App\Http\Controllers\AprovalController::class, 'reject'])->name('aproval.reject');

// akhir admin

// Pembimbing
Route::resource('/guru', App\Http\Controllers\DashboardGuruController::class);
Route::resource('/siswa_guru', App\Http\Controllers\SiswaGuruController::class);
Route::resource('/alumni_guru', App\Http\Controllers\AlumniGuruController::class);
Route::resource('/jurnal_guru', App\Http\Controllers\JurnalGuruController::class);
Route::resource('/absensi_guru', App\Http\Controllers\AbsensiGuruController::class);
Route::resource('/chat_guru', App\Http\Controllers\ChatGuruController::class);
Route::resource('/berita_guru', App\Http\Controllers\BeritaController::class);


// akhir Pembimbing
// Siswa
Route::resource('jurnal_siswa', App\Http\Controllers\JurnalSiswaController::class);
Route::get('/download-pdf-JurnalSiswa', [JurnalSiswaController::class, 'downloadPDF']);


// akhir siswa

// login

Route::resource('/login', App\Http\Controllers\LoginController::class);
Route::get('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');


// end login





