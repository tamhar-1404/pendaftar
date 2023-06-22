<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\GuruAdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BeritaGuruController;
use App\Http\Controllers\AlumniGuruController;
use App\Http\Controllers\BeritaSiswaController;
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
Route::get('/approvalizin', function () {
    return view('izinadmin.index');
});
Route::get('/chatguru', function () {
    return view('chat_guru.index');
});
Route::get('/chatadmin', function () {
    return view('chat_guru.chatadmin');
});
Route::get('/laporansiswa', function () {
    return view('laporansiswa.index');
});
Route::get('/jurnal_admin', function () {
    return view('jurnal_admin.index');
});
Route::get('/sore', function () {
    return view('piket.sidebar_sore');
});
Route::get('/detail_daftar', function () {
    return view('aproval.view');
});
Route::get('/navbar', function () {
    return view('navbar.index');
});
Route::get('/detail_siswaguru', function () {
    return view('siswa_guru.detail');
});
Route::get('/detail_pelangaran_siwaguru', function () {
    return view('siswa_guru.detail_pelanggaran');
});
Route::get('/sidebar', function () {
    return view('sidebar.layout');
});
Route::resource('/alumni_guru', App\Http\Controllers\AlumniGuruController::class);
Route::resource('/berita_guru', App\Http\Controllers\BeritaGuruController::class);
Route::resource('/laporansiswa', App\Http\Controllers\LaporanSiswaController::class);
Route::resource('/dudi', App\Http\Controllers\DashboardController::class);
Route::resource('/mou', App\Http\Controllers\MOUController::class);
Route::resource('/siswamagang', App\Http\Controllers\DashboardSiswaController::class);
Route::resource('/guru', App\Http\Controllers\DashboardGuruController::class);
Route::resource('/chat', App\Http\Controllers\ChatController::class);
Route::resource('/absensi_guru', App\Http\Controllers\AbsensiGuruController::class);
Route::resource('/login', App\Http\Controllers\LoginController::class);
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::resource('/lupapassword', App\Http\Controllers\LupaPasswordController::class);
Route::resource('/ubahpassword', App\Http\Controllers\UbahPasswordController::class);
Route::resource('/sp', App\Http\Controllers\SpController::class);
Route::resource('/aproval', App\Http\Controllers\AprovalController::class);
Route::resource('/piket', App\Http\Controllers\PiketController::class);
Route::resource('/aproval', App\Http\Controllers\AprovalController::class);
Route::resource('/guru_admin', App\Http\Controllers\GuruAdminController::class);
Route::get('/detail', [GuruAdminController::class, 'detail'])->name('detail');
Route::get('/view', [AlumniGuruController::class, 'show'])->name('view');
Route::get('/tabel', [AlumniGuruController::class, 'create'])->name('tabel');
Route::resource('/siswa_admin', App\Http\Controllers\SiswaController::class);
Route::resource('/tatatertib', App\Http\Controllers\TataTertibController::class);
Route::resource('/tatib_siswa', App\Http\Controllers\TatibSiswaController::class);
Route::resource('/pembimbing', App\Http\Controllers\PembimbingController::class);
Route::resource('/Berita', App\Http\Controllers\BeritaController::class);
Route::get('/edit', [BeritaController::class, 'edit'])->name('edit');
Route::get('/detail_berita_guru', [BeritaGuruController::class, 'show'])->name('detail_berita_guru');
Route::resource('/chat_siswa', App\Http\Controllers\ChatSiswaController::class);
Route::resource('/laporan_piket', App\Http\Controllers\LaporanPiketController::class);
Route::resource('/guru_admin', App\Http\Controllers\GuruAdminController::class);
Route::resource('/alumni_admin', App\Http\Controllers\SiswaAlumniController::class);
Route::resource('/profileguru', App\Http\Controllers\ProfileGuruController::class);
Route::resource('/editprofileguru', App\Http\Controllers\EditprofileGuruController::class);
Route::resource('/absensi_admin', App\Http\Controllers\AbsensiadminController::class);
Route::resource('/tolak',App\Http\Controllers\TolakController::class);
Route::resource('/pelanggaran', App\Http\Controllers\PelanggaranController::class);
Route::resource('/berita_siswa', App\Http\Controllers\BeritaSiswaController::class);
Route::resource('/absensi_siswa',App\Http\Controllers\AbsensiSiswaController::class);
Route::resource('/pelanggaran', App\Http\Controllers\PelanggaranController::class);
Route::resource('/profilesiswa', App\Http\Controllers\ProfilsiswaController::class);
Route::resource('/piket_siswa', App\Http\Controllers\PiketSiswaController::class);
Route::resource('/siswa_guru', App\Http\Controllers\SiswaGuruController::class);
Route::resource('/jurnal_guru', App\Http\Controllers\JurnalGuruController::class);
Route::resource('/jurnalsiswa', App\Http\Controllers\JurnalsiswaController::class);
Route::resource('/siswa_magang', App\Http\Controllers\SiswamagangController::class);
