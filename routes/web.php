<?php

use App\Http\Controllers\LoginController;
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
    return view('jurnal_admin.grafik');
});

Route::resource('/dudi', App\Http\Controllers\DashboardController::class);
Route::resource('/mou', App\Http\Controllers\MOUController::class);


Route::resource('/siswamagang', App\Http\Controllers\DashboardSiswaController::class);


Route::resource('/guru', App\Http\Controllers\DashboardGuruController::class);


Route::resource('/chat', App\Http\Controllers\ChatController::class);


Route::resource('/absensi_guru', App\Http\Controllers\AbsensiGuruController::class);
Route::resource('/login', App\Http\Controllers\LoginController::class);
Route::resource('/sp', App\Http\Controllers\SpController::class);
Route::resource('/aproval', App\Http\Controllers\AprovalController::class);
Route::resource('/piket', App\Http\Controllers\PiketController::class);
Route::get('/register', [LoginController::class, 'register'])->name('register');

Route::resource('/sp', App\Http\Controllers\SpController::class);

Route::resource('/aproval', App\Http\Controllers\AprovalController::class);

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::resource('/siswa_admin', App\Http\Controllers\SiswaController::class);

Route::resource('/tatatertib', App\Http\Controllers\TataTertibController::class);
Route::resource('/pembimbing', App\Http\Controllers\PembimbingController::class);
Route::resource('/Berita', App\Http\Controllers\BeritaController::class);
Route::resource('/chat_siswa', App\Http\Controllers\ChatSiswaController::class);


Route::resource('/guru_admin', App\Http\Controllers\GuruAdminController::class);

Route::get('/sidebar', function () {
    return view('sidebar.layout');
});
Route::resource('/absensi_admin', App\Http\Controllers\AbsensiadminController::class);
Route::resource('/tolak',App\Http\Controllers\TolakController::class);