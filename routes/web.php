<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\GuruAdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BeritaGuruController;
use App\Http\Controllers\AlumniGuruController;
use App\Http\Controllers\BeritaSiswaController;
use App\Http\Controllers\AbsensiGuruController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TataTertibController;
use App\Http\Controllers\JurnaladminControlle;
use App\Http\Controllers\JurnalSiswaController;
use App\Http\Controllers\AprovalController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\LupaPasswordController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PiketController;

use App\Models\LupaPassword;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
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

Route::get('send-email' , [MailController::class,'index']);
Route::resource('/dudi', App\Http\Controllers\DashboardController::class);
Route::resource('/aproval', App\Http\Controllers\AprovalController::class);
Route::resource('/approvalizin', App\Http\Controllers\ApprovalIzinController::class);
Route::resource('/siswa_admin', App\Http\Controllers\SiswaController::class);
Route::resource('/alumni_admin', App\Http\Controllers\SiswaController::class);
Route::resource('/guru_admin', App\Http\Controllers\GuruAdminController::class);
Route::resource('/absensi_admin', App\Http\Controllers\AbsensiadminController::class);
Route::resource('/tatatertib', App\Http\Controllers\TataTertibController::class);
Route::resource('/laporansiswa', App\Http\Controllers\LaporanSiswaController::class);
Route::resource('/laporan_piket', App\Http\Controllers\ASiswaController::class);
Route::resource('/sp', App\Http\Controllers\ASiswaController::class);

Route::resource('/Berita', App\Http\Controllers\BlogController::class);
Route::post('/like', [LikeController::class, 'store'])->name('Berita.like');

Route::resource('/chat', App\Http\Controllers\ChatController::class);
Route::resource('/piket', App\Http\Controllers\PiketController::class);
Route::post('/rubah', [PiketController::class, 'rubah'])->name('rubah');
Route::get('/sore', [PiketController::class, 'sore'])->name('sore');
Route::resource('/mou', App\Http\Controllers\ASiswaController::class);
Route::resource('/tolak', App\Http\Controllers\TolakController::class);
Route::resource('/pelanggaran', App\Http\Controllers\PelanggaranController::class);
Route::resource('/jurnal_admin', App\Http\Controllers\JurnaladminController::class);
Route::post('/aproval/{aproval}/confirm', [App\Http\Controllers\AprovalController::class, 'confirm'])->name('aproval.confirm');
Route::post('/aproval/{aproval}/tolak', [App\Http\Controllers\AprovalController::class, 'tolak'])->name('aproval.tolak');

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
Route::resource('siswamagang', App\Http\Controllers\SiswamagangController::class);
Route::get('/download-pdf-JurnalSiswa', [JurnalSiswaController::class, 'downloadPDF']);
Route::resource('/absensi_siswa', App\Http\Controllers\AbsensiSiswaController::class);


// akhir siswa

// login
Route::resource('/login', App\Http\Controllers\LoginController::class);
Route::post('/register', [LoginController::class, 'login'])->name('register');
Route::get('/percobaan', function () {
    return view('login.iyah');
});


// Rute untuk mengirim email reset password
Route::get('/lupapassword', [LupaPasswordController::class, 'index'])->name('password.request');
Route::post('/lupapassword', [LupaPasswordController::class, 'store'])->name('password.email');

// Rute untuk menampilkan form reset password
Route::get('/resetpassword/{token}', [LupaPasswordController::class, 'reset'])->name('password.reset');
Route::post('/resetpassword', [LupaPasswordController::class, 'update'])->name('password.update');

// Route::resource('/resetpassword', App\Http\Controllers\UbahPasswordController::class);
// end login
Route::middleware(['auth'])->group(function () {
    Route::middleware(['role:Admin'])->group(function () {
        // Route khusus untuk admin
        Route::resource('/dudi', App\Http\Controllers\DashboardController::class);
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    });

    Route::middleware(['role:murid'])->group(function () {

       Route::resource('absensi_siswa', App\Http\AbsensiSiswaController::class);
       Route::resource('berita_siswa', App\Http\AbsensiSiswaController::class);
       Route::resource('tatib_siswa', App\Http\AbsensiSiswaController::class);
       Route::resource('piket_siswa', App\Http\AbsensiSiswaController::class);
       Route::resource('chat_siswa', App\Http\AbsensiSiswaController::class);
       Route::resource('jurnal_siswa', App\Http\Controllers\JurnalSiswaController::class);
       Route::resource('siswa_magang', App\Http\AbsensiSiswaController::class);
       Route::resource('siswamagang', App\Http\Controllers\SiswamagangController::class);


    });

    Route::middleware(['role:guru'])->group(function () {
        // Route khusus untuk guru

    });
});





