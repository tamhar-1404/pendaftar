<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\AbsensiadminController;
use App\Http\Controllers\GuruAdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\TopUpController;
use App\Http\Controllers\BeritaGuruController;
use App\Http\Controllers\AlumniGuruController;
use App\Http\Controllers\SiswamagangController;
use App\Http\Controllers\BeritaSiswaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AbsensiGuruController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TataTertibController;
use App\Http\Controllers\JurnaladminController;
use App\Http\Controllers\JurnalsiswaController;
use App\Http\Controllers\AprovalController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\LupaPasswordController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PiketController;
use App\Http\Controllers\AbsensiSiswaController;
use App\Http\Controllers\ApprovalIzinController;
use App\Models\LupaPassword;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OpnameController;
use App\Http\Controllers\RestockController;
use App\Http\Controllers\transaksirfidController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ProfilsiswaController;

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
Route::post('/validate_password',['passwordController@validatePassword']);
Route::post('/get_user', [App\Http\Controllers\GetuserController::class, 'get_user'])->name('get_user');
Route::post('/find_rfid', [App\Http\Controllers\GetuserController::class, 'find_rfid'])->name('find_rfid');
Route::post('/check_password', [App\Http\Controllers\GetuserController::class, 'check_password'])->name('check_password');
Route::post('/cari_barang', [App\Http\Controllers\TransaksiController::class, 'cari'])->name('cari_barang');
Route::get('/pw/{user_id}/{user_password}', [SiswamagangController::class, 'cek_password']);
Route::resource('transaksi', App\Http\Controllers\TransaksiController::class);


Route::put('/saldo/{user}', [SiswamagangController::class, 'saldo'])->name('saldo');
Route::get('/rfid' , [SiswaController::class , 'rfid'])->name('rfid');
Route::get('lihat' , [AbsensiSiswaController::class , 'lihat'])->name('lihat');
Route::get('send-email' , [MailController::class,'index']);


// akhir admin

// Siswa
Route::get('/download-pdf-JurnalSiswa', [JurnalsiswaController::class, 'downloadPDF']);
Route::get('/print', [JurnalsiswaController::class, 'print']);
Route::get('/getData', [JurnalsiswaController::class, 'getData']);
Route::get('/txt', [JurnalsiswaController::class, 'printjurnal']);
Route::get('/export-to-docx', [JurnalsiswaController::class, 'exportToDocx']);
Route::get('/export-to-docx-absen', [AbsensiadminController::class, 'exportToDocxabsen'])->name('exportToDocxabsen');
Route::get('/absensi_pdf', [ApprovalIzinController::class, 'absen_siswa_pdf']);
Route::get('/absensi_pdf_admin', [AbsensiadminController::class, 'absen_pdf'])->name('absensi_pdf_admin');
Route::get('/grafik_absen_docx', [AbsensiadminController::class, 'grafik_absen_docx'])->name('grafik_absen_docx');
Route::get('/absen_pdf1', [AbsensiadminController::class, 'absen_pdf1'])->name('absen_pdf1');
Route::get('/jurnal_pdf', [JurnaladminController::class, 'jurnal_admin_pdf']);
// Route::get('/', [AbsensiadminController::class, 'index']);
Route::get('/jurnal_docx', [JurnaladminController::class, 'admin_docx']);
Route::get('/grafik_pdf', [JurnaladminController::class, 'jurnal_admin_pdf_grafik'])->name('grafik_pdf');
Route::get('/grafik_docx', [JurnaladminController::class, 'grafik_docx'])->name('grafik_docx');
// akhir siswa

// login
Route::resource('/login', App\Http\Controllers\LoginController::class);
Route::post('/postlogin', [LoginController::class, 'login'])->name('postlogin');
Route::get('/', [LoginController::class, 'halaman_awal'])->name('/');
Route::get('/percobaan', function () {
    return view('desain_pdf.percobaan');
});

Route::get('/absen/sakit', [JurnaladminController::class, 'absensakit']);

// Route::get('/q', function () {
    //     return view('welcome');
    // });

    Route::get('/kode_beli', [TransaksirfidController::class, 'index'])->name('kode_beli');
    Route::resource('/data', App\Http\Controllers\TransaksiController::class);
    Route::resource('/transaksi', App\Http\Controllers\TransaksiController::class);
    Route::resource('/History_Admin', App\Http\Controllers\HistoryAdminController::class);




// Rute untuk mengirim email reset password
Route::get('/keluar', [LoginController::class, 'Logout'])->name('keluar');
Route::resource('/aproval', App\Http\Controllers\AprovalController::class);

Route::middleware(['auth'])->group(function () {
    Route::middleware(['role:Admin'])->group(function () {
        // Route khusus untuk admin
        Route::resource('/dudi', App\Http\Controllers\DashboardController::class);
        Route::resource('/approvalizin', App\Http\Controllers\ApprovalIzinController::class);
        Route::resource('/siswa_admin', App\Http\Controllers\SiswaController::class);
        Route::put('/siswa_admin/banned/{id}', [App\Http\Controllers\SiswaController::class, 'banned'])->name('siswa.banned');
        Route::resource('/alumni_admin', App\Http\Controllers\SiswaAlumniController::class);
        Route::resource('/guru_admin', App\Http\Controllers\GuruAdminController::class);
        Route::resource('/absensi_admin', App\Http\Controllers\AbsensiadminController::class);
        Route::resource('/tatatertib', App\Http\Controllers\TataTertibController::class);
        Route::resource('/sp', App\Http\Controllers\SpController::class);
        Route::resource('/Berita', App\Http\Controllers\BlogController::class);
        Route::resource('/chat', App\Http\Controllers\ChatController::class);
        Route::resource('/piket', App\Http\Controllers\PiketController::class);
        Route::post('/rubah', [PiketController::class, 'rubah'])->name('rubah');
        Route::resource('/mou', App\Http\Controllers\MOUController::class);
        Route::resource('/tolak', App\Http\Controllers\TolakController::class);
        Route::resource('/pelanggaran', App\Http\Controllers\PelanggaranController::class);
        Route::post('/aproval/{aproval}/confirm', [App\Http\Controllers\AprovalController::class, 'confirm'])->name('aproval.confirm');
        Route::post('/aproval/{aproval}/tolak', [App\Http\Controllers\AprovalController::class, 'Tolak'])->name('aproval.tolak');
        Route::get('lihat' , [AbsensiSiswaController::class , 'lihat'])->name('lihat');
        Route::get('send-email' , [MailController::class,'index']);
        Route::resource('/jurnal_admin', App\Http\Controllers\JurnaladminController::class);
        // Admin
        Route::resource('/History_transaksi', App\Http\Controllers\HistoryTransaksiController::class);
        Route::resource('TopUp', App\Http\Controllers\TopUpController::class);
        Route::resource('barang', App\Http\Controllers\BarangController::class);
        Route::resource('opname', App\Http\Controllers\OpnameController::class);
        Route::resource('siswa_magang', App\Http\Controllers\SiswaController::class);

    });

    Route::middleware(['role:Siswa'])->group(function () {

        Route::resource('History', App\Http\Controllers\HistorySiswaController::class);

        Route::put('izin_update', [App\Http\Controllers\ApprovalIzinController::class, 'izin_update'])->name('izin_update');
        Route::resource('absensi_siswa', App\Http\Controllers\AbsensiSiswaController::class);
        Route::resource('berita_siswa', App\Http\Controllers\BeritaSiswaController::class);
        Route::resource('tatib_siswa', App\Http\Controllers\TatibSiswaController::class);
        Route::resource('piket_siswa', App\Http\Controllers\PiketSiswaController::class);
        Route::resource('chat_siswa', App\Http\Controllers\ChatSiswaController::class);
        Route::resource('jurnal_siswa', App\Http\Controllers\JurnalsiswaController::class);
        Route::resource('Siswamagang', App\Http\Controllers\SiswamagangController::class);
        Route::resource('/History_topup', App\Http\Controllers\HistoryTopupController::class);
        Route::get('/siswamagang_siswa' , [SiswaController::class,'siswamagang_siswa'])->name('siswamagang_siswa');
        Route::get('profil_siswa', [ProfilsiswaController::class, 'index'])->name('profile_siswa');
        Route::put('update_siswa', [ProfilsiswaController::class, 'update'])->name('update_siswa');
        Route::post('ganti_password', [ProfilsiswaController::class, 'ganti_password'])->name('ganti_password');
    });

    Route::middleware(['role:guru'])->group(function () {
        // Route khusus untuk guru
        // Pembimbing
        Route::resource('/guru', App\Http\Controllers\DashboardGuruController::class);
        Route::resource('/siswa_guru', App\Http\Controllers\SiswaGuruController::class);
        Route::resource('/alumni_guru', App\Http\Controllers\AlumniGuruController::class);
        Route::resource('/jurnal_guru', App\Http\Controllers\JurnalGuruController::class);
        Route::resource('/absensi_guru', App\Http\Controllers\AbsensiGuruController::class);
        Route::resource('/chat_guru', App\Http\Controllers\ChatGuruController::class);
        Route::resource('/berita_guru', App\Http\Controllers\BeritaController::class);
        // akhir Pembimbing
    });
    Route::middleware(['role:Admin,Siswa'])->group(function () {
        Route::resource('/laporansiswa', App\Http\Controllers\LaporanSiswaController::class);
        Route::resource('/laporan_piket', App\Http\Controllers\LaporanPiketController::class);
        Route::resource('/approvalizin', App\Http\Controllers\ApprovalIzinController::class);

        });
    });

//lupa password
Route::resource('Lupapassword', App\Http\Controllers\LupaPasswordController::class);
Route::post('/reset-password', [LupaPasswordController::class, 'update'])->name('password.update');
Route::post('/absensi_date', [JurnaladminController::class, 'Absenhariini'])->name('absensi_date');
Route::get('/Absenhariini', [JurnaladminController::class, 'Absenhariini'])->name('Absenhariini');
Route::get('/Jurnalhariini', [JurnaladminController::class, 'Jurnalhariini'])->name('Jurnalhariini');
Route::get('/reset-password/{token}', [LupaPasswordController::class, 'reset'])->name('password.reset');

Route::resource('/profileguru', App\Http\Controllers\ProfileGuruController::class);
Route::resource('/data', App\Http\Controllers\TransaksiController::class);
Route::get('/nota', [TransaksiController::class , 'nota'])->name('nota');
Route::post('Berita/{post}/like', [BlogController::class, 'like'])->name('Berita.like');
Route::post('comment/store', [BlogController::class, 'comment_store'])->name('comment.store');
Route::post('comment/reply', [BlogController::class, 'reply_comment'])->name('comment.reply');
Route::delete('Berita/{post}/unlike', [BlogController::class, 'unlike'])->name('Berita.unlike');
Route::get('Edit_profile_siswa', [ProfilsiswaController::class, 'edit'])->name('Edit_profile_siswa');
Route::put('Edit_profile_siswa/perbarui', [ProfilsiswaController::class, 'perbarui'])->name('Edit_profile_siswa.perbarui');

