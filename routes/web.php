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
use App\Http\Controllers\SiswaGuruController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PiketController;
use App\Http\Controllers\AbsensiSiswaController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\ApprovalIzinController;
use App\Http\Controllers\DashboardAdminController;
use App\Models\LupaPassword;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OpnameController;
use App\Http\Controllers\LaporanPiketController;
use App\Http\Controllers\RestockController;
use App\Http\Controllers\TransaksirfidController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfilsiswaController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TolakController;
use App\Models\Jurnaladmin;

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

Route::get('auth-login', function () {return view('auth.login');})->name('auth-login');
Route::get('auth-register', function () {return view('auth.register');});

// Admin
Route::post('/find_rfid', [App\Http\Controllers\GetuserController::class, 'find_rfid'])->name('find_rfid');
Route::post('/check_password', [App\Http\Controllers\GetuserController::class, 'check_password'])->name('check_password');
Route::post('/cari_barang', [App\Http\Controllers\TransaksiController::class, 'cari'])->name('cari_barang');
Route::post('/sedikit', [App\Http\Controllers\PiketController::class, 'dikit'])->name('sedikit');
Route::resource('transaksi', App\Http\Controllers\TransaksiController::class);
Route::put('/saldo/{user}', [SiswamagangController::class, 'saldo'])->name('saldo');
Route::get('lihat' , [AbsensiSiswaController::class , 'lihat'])->name('lihat');
// akhir admin

// Siswa
// Route::get('/print', [JurnalsiswaController::class, 'print']);
// Route::get('/getData', [JurnalsiswaController::class, 'getData']);
// Route::get('/txt', [JurnalsiswaController::class, 'printjurnal']);
// akhir siswa

// login
Route::resource('/login', App\Http\Controllers\LoginController::class)->middleware('guest');
Route::post('/postlogin', [LoginController::class, 'login'])->name('postlogin');
// Route::get('/', [LoginController::class, 'halaman_awal'])->name('/');

Route::get('/kode_beli', [TransaksirfidController::class, 'index'])->name('kode_beli');
Route::post('/postrfid', [TransaksiController::class, 'postbeli'])->name('postrfid');
Route::resource('/transaksi', App\Http\Controllers\TransaksiController::class);
Route::resource('/transaksi', App\Http\Controllers\TransaksiController::class);

Route::get('/keluar', [LoginController::class, 'Logout'])->name('keluar');
Route::get('/selesai', [LoginController::class, 'selesai'])->name('selesai');

// Rute untuk mengirim email reset password
Route::get('/', function () {return view('landing-page.index');});
// Route::get('/menu-divisi', function () {return view('master.divisi.index');});


Route::middleware(['auth'])->group(function () {
    Route::middleware(['role:Admin'])->group(function () {
        // admin baru
        Route::get('menu-persentasi', function () {return view('master.persentasi.index');});
        Route::get('menu-mentor', function () {return view('master.Mentor.index');});
        Route::get('menu-divisi', function () {return view('master.divisi.index');});
        Route::get('siswa-hummataks', function () {return view('master.user.hummataks');});
        Route::get('master', [DashboardAdminController::class, 'index'])->name('master');
        Route::get('master-jurnal', function () {return view('master.jurnal');});
        Route::get('data-tertib', function () {return view('master.regulation.index');});
        Route::get('laporan-siswa', function () {return view('master.regulation.report-student');});
        Route::get('laporan-sp', function () {return view('master.regulation.report-sp');});
        Route::get('news', function () {return view('master.news.index');});
        Route::get('cek-absensi', [AbsensiadminController::class, 'checkAttendance']);
        Route::get('detail-news', function () {return view('master.news.detail');});
        Route::get('piket-siswa', function () {return view('master.all.report-piket');});
        Route::get('data-mou', function () {return view('master.all.mou');});
        Route::get('master-absensi', function () {return view('master.absensi');});
        Route::get('pendaftaran', [RegistrationController::class, 'index'])->name('registration.index');
        Route::get('izin', [PermissionController::class, 'index'])->name('permission.index');
        Route::resource('TopUp', TopUpController::class);
        // Route::get('data-rfid', function () {return view('master.user.rfid');}); // Done
        Route::get('data-banned', [SiswaController::class, 'blockedStudent'])->name('list-banned');
        Route::get('data-ditolak', [TolakController::class, 'listRejected'])->name('list-rejected');
        // Route::get('data-siswa', function () {return view('master.user.index');}); // Done
        // Route::get('data-penanggung-jawab', function () {return view('master.user.person-responsible');}); // Done
        Route::get('history-topup', function () {return view('master.history.index');});
        Route::get('history-transaksi', function () {return view('master.history.transaksi');});
        // Route::get('pendataan-barang', function () {return view('master.transaksi.goods-data-collection');});
        // Route::get('transaksi-opname', function () {return view('master.transaksi.opname');});

        Route::get('data-jurnal', [JurnaladminController::class, 'Jurnalhariini']);
        // Route::get('data-jurnal', function () {return view('master.data-collection.index');});
        Route::get('data-absensi', [AbsensiadminController::class, 'listAttendance'])->name('list.attendance.admin');
        Route::get('attendance-detail/{attendance}', [AbsensiadminController::class, 'attendanceDetail'])->name('attendance.detail');
        // end

        Route::post('attendance-rule', [AbsensiadminController::class, 'attendanceRule'])->name('attendance.rule');

        Route::delete('approval/{approval}/delete', [ApprovalController::class, 'destroy'])->name('approval.delete');
        Route::get('/cari_siswa', [App\Http\Controllers\PiketController::class, 'cari'])->name('cari_siswa');
        Route::post('absen' ,[AbsensiSiswaController::class ,'absen'])->name('absen.index');
        Route::get('/grafik_absen_docx', [AbsensiadminController::class, 'grafik_absen_docx'])->name('grafik_absen_docx');
        Route::get('/export-to-docx-absen', [AbsensiadminController::class, 'exportToDocxabsen'])->name('exportToDocxabsen');
        Route::get('/absensi_pdf_admin', [AbsensiadminController::class, 'absen_pdf'])->name('absensi_pdf_admin');
        Route::resource('/History_Admin', App\Http\Controllers\HistoryAdminController::class);
        // Route khusus untuk admin
        Route::resource('/Berita', App\Http\Controllers\BlogController::class);
        Route::resource('/aproval', App\Http\Controllers\AprovalController::class);
        Route::post('/absensi_date', [JurnaladminController::class, 'Absenhariini'])->name('absensi_date');
        Route::get('/Absenhariini', [JurnaladminController::class, 'Absenhariini'])->name('Absenhariini');
        Route::get('/Belum_mengisi', [JurnaladminController::class, 'Belum_mengisi'])->name('Belum_mengisi');
        Route::get('Alfa', [AprovalController::class, 'Alfa'])->name('Alfa');
        Route::get('/Sakit.index', [AprovalController::class, 'Sakit'])->name('Sakit.index');
        Route::post('/Hadir.index', [AprovalController::class, 'Hadir'])->name('Hadir.index');
        Route::get('/Izin.index', [AprovalController::class, 'Izin'])->name('Izin.index');
        Route::get('/Jurnalhariini', [JurnaladminController::class, 'Jurnalhariini'])->name('Jurnalhariini');
        Route::post('/share', [JurnaladminController::class, 'share'])->name('share');
        // Post tidak mengisi jurnal
        Route::post('/Jurnalhariini/belum_mengisi', [JurnaladminController::class, 'belum_mengisi'])->name('jurnal.belum_mengisi');
        Route::resource('/dudi', App\Http\Controllers\DashboardController::class);
        Route::resource('/approvalizin', App\Http\Controllers\ApprovalIzinController::class);
        Route::resource('/siswa_admin', App\Http\Controllers\SiswaController::class);
        Route::delete('delete-student/{student}', [SiswaController::class, 'destroy'])->name('student.delete');
        Route::get('student-detail/{student}', [SiswaController::class, 'show'])->name('student.detail');
        Route::get('download-student-files/{student}', [SiswaController::class, 'downloadFiles'])->name('siswa.download-file');
        Route::put('lulus/{id}' , [SiswaController::class ,'lulus'])->name('lulus/');
        Route::put('/siswa_admin/banned/{id}', [App\Http\Controllers\SiswaController::class, 'banned'])->name('siswa.banned');
        Route::patch('siswa-admin/unban/{student}', [SiswaController::class, 'unban'])->name('siswa.unban');
        Route::get('unblock-siswa', [SiswaController::class, 'blockedStudent'])->name('unblock-siswa');
        Route::resource('/alumni_admin', App\Http\Controllers\SiswaAlumniController::class);
        Route::resource('/guru_admin', App\Http\Controllers\GuruAdminController::class);
        Route::resource('/absensi_admin', App\Http\Controllers\AbsensiadminController::class);
        Route::resource('/tatatertib', App\Http\Controllers\TataTertibController::class);
        Route::resource('/sp', App\Http\Controllers\SpController::class);
        Route::resource('/piket', App\Http\Controllers\PiketController::class);
        Route::post('/rubah', [PiketController::class, 'rubah'])->name('rubah');
        Route::resource('/mou', App\Http\Controllers\MOUController::class);
        Route::resource('/tolak', App\Http\Controllers\TolakController::class);
        Route::post('update-to-student/{reject}', [TolakController::class, 'changeToStudent'])->name('reject.change-to-student');
        Route::get('/download-file-rejected/{reject}', [TolakController::class, 'downloadFiles'])->name('reject.download-file');
        Route::resource('/pelanggaran', App\Http\Controllers\PelanggaranController::class);
        Route::post('/aproval/{aproval}/confirm', [App\Http\Controllers\AprovalController::class, 'confirm'])->name('aproval.confirm');
        Route::post('/aproval/{aproval}/tolak', [App\Http\Controllers\AprovalController::class, 'Tolak'])->name('aproval.tolak');
        Route::get('lihat' , [AbsensiSiswaController::class , 'lihat'])->name('lihat');
        Route::get('send-email' , [MailController::class,'index']);
        Route::get('List/Siswa' , [PiketController::class,'list'])->name('List/Siswa');
        Route::get('report' , [ReportController::class,'index'])->name('report');
        Route::resource('/jurnal_admin', App\Http\Controllers\JurnaladminController::class);
        Route::resource('/History_transaksi', App\Http\Controllers\HistoryTransaksiController::class);
        Route::resource('barang', App\Http\Controllers\BarangController::class);
        Route::resource('opname', App\Http\Controllers\OpnameController::class);
        Route::resource('siswa_magang', App\Http\Controllers\SiswaController::class);
        Route::get('/jurnal_pdf', [JurnaladminController::class, 'jurnal_admin_pdf'])->name('jurnal_pdf');
        Route::get('/jurnal_docx', [JurnaladminController::class, 'admin_docx'])->name('jurnal_docx');
        Route::get('/rfid' , [SiswaController::class , 'rfid'])->name('rfid');
        Route::put('rfid/{id}', [SiswaController::class ,'update']);
        Route::patch('/Extend/{id}' , [SiswaController::class , 'Extend'])->name('Extend');
        Route::delete('/hapus_laporan_piket/{id}' , [LaporanPiketController::class , 'hapus'])->name('hapus/laporan/piket');
        Route::post('catatan', [PiketController::class, 'tambah'])->name('tambahCatatan');
        Route::post('/hadir_siswa', [App\Http\Controllers\JurnaladminController::class, 'hadir'])->name('hadir_siswa');
        //Reset password
        Route::patch('student/reset-password/{student}', [SiswaController::class, 'resetPassword'])->name('reset-admin-password/');
        //Total not send
        Route::get('journal/total-not-send', [JurnalsiswaController::class, 'totalNotSend'])->name('student.not_send');
    });

    Route::middleware(['role:Siswa'])->group(function () {

        Route::resource('History', App\Http\Controllers\HistorySiswaController::class);
        Route::get('Edit_profile_siswa', [ProfilsiswaController::class, 'edit'])->name('Edit_profile_siswa');
        Route::put('Edit_profile_siswa/perbarui', [ProfilsiswaController::class, 'perbarui'])->name('Edit_profile_siswa.perbarui');
        Route::put('izin_update', [App\Http\Controllers\ApprovalIzinController::class, 'izin_update'])->name('izin_update');
        Route::resource('absensi_siswa', App\Http\Controllers\AbsensiSiswaController::class);
        Route::resource('berita_siswa', App\Http\Controllers\BeritaSiswaController::class);
        Route::resource('tatib_siswa', App\Http\Controllers\TatibSiswaController::class);
        Route::resource('piket_siswa', App\Http\Controllers\PiketSiswaController::class);
        Route::resource('chat_siswa', App\Http\Controllers\ChatSiswaController::class);
        Route::resource('jurnal_siswa', App\Http\Controllers\JurnalsiswaController::class);
        Route::post('jurnal_siswa.update',[JurnalsiswaController::class,'update']);
        Route::resource('Siswamagang', App\Http\Controllers\SiswamagangController::class);
        Route::resource('/History_topup', App\Http\Controllers\HistoryTopupController::class);
        Route::get('/siswamagang_siswa' , [SiswaController::class,'siswamagang_siswa'])->name('siswamagang_siswa');
        Route::get('profil_siswa', [ProfilsiswaController::class, 'index'])->name('profile_siswa');
        Route::put('update_siswa', [ProfilsiswaController::class, 'update'])->name('update_siswa');
        Route::post('ganti_password', [ProfilsiswaController::class, 'ganti_password'])->name('ganti_password');
        Route::post('Absensi/Siswa', [AbsensiSiswaController::class, 'AbsensiSiswa'])->name('Absensi/Siswa');
        Route::get('/export-to-docx', [JurnalsiswaController::class, 'exportToDocx']);
        Route::get('/data', [JurnalsiswaController::class, 'data'])->name('data.ajax');
        Route::get('/download-pdf-JurnalSiswa', [JurnalsiswaController::class, 'downloadPDF']);
        Route::get('/absen_pdf1', [AbsensiadminController::class, 'absen_pdf1'])->name('absen_pdf1');
        Route::get('/JurnalPrint', [JurnalsiswaController::class, 'JurnalPrint']);

    });

    Route::middleware(['role:guru'])->group(function () {
        // Route khusus untuk guru
        // Pembimbing
        Route::get('profil/siswa/guru', [SiswaGuruController::class, 'profilesiswa'])->name('profile.siswa.guru');
        Route::put('/gantipasswordguru', [App\Http\Controllers\ProfileGuruController::class, 'updatePassword'])->name('guru.updatepassword');
        Route::resource('/profileguru', App\Http\Controllers\ProfileGuruController::class);
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
    Route::middleware(['role:Admin,Siswa,guru'])->group(function () {
    });
});


Route::resource('/History_Admin', App\Http\Controllers\HistoryAdminController::class);

//lupa password
Route::resource('Lupapassword', App\Http\Controllers\LupaPasswordController::class);
Route::post('/reset-password', [LupaPasswordController::class, 'update'])->name('password.update');
Route::get('/reset-password/{token}', [LupaPasswordController::class, 'reset'])->name('password.reset');
Route::get('/get-users', [BlogController::class, 'Cek'])->name('get-user');

Route::middleware(['auth'])->group(function () {
    Route::post('Berita/like', [BlogController::class, 'like'])->name('Berita.like');
    Route::post('comment/store', [BlogController::class, 'comment_store'])->name('comment.store');
    Route::post('comment/reply', [BlogController::class, 'reply_comment'])->name('comment.reply');
});
