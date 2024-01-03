<?php

namespace App\Http\Controllers;

use App\Http\Requests\AttendanceRuleRequest;
use Illuminate\Http\Request;
use App\Models\Absensiadmin;
use App\Models\ApprovalIzin;
use App\Http\Requests\StoreAbsensiadminRequest;
use App\Http\Requests\UpdateAbsensiadminRequest;
use App\Models\Attendance;
use App\Models\AttendanceRule;
use App\Models\Siswa;
use Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use DB;
use Dompdf\Dompdf;
use Dompdf\Options;
use Carbon\Carbon; // Import Carbon untuk bekerja dengan tanggal
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class AbsensiadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request): View
    {

        if ($request->has('cari')) {
            $keyword = $request->cari;
            $Hadir_jan = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 1)->count();
            $Hadir_feb = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 2)->count();
            $Hadir_mar = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 3)->count();
            $Hadir_apr = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 4)->count();
            $Hadir_mei = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 5)->count();
            $Hadir_jun = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 6)->count();
            $Hadir_jul = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 7)->count();
            $Hadir_aug = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 8)->count();
            $Hadir_sep = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 9)->count();
            $Hadir_okt = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 10)->count();
            $Hadir_nov = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 11)->count();
            $Hadir_des = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 12)->count();

            $Telat_jan = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 1)->count();
            $Telat_feb = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 2)->count();
            $Telat_mar = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 3)->count();
            $Telat_apr = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 4)->count();
            $Telat_mei = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 5)->count();
            $Telat_jun = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 6)->count();
            $Telat_jul = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 7)->count();
            $Telat_aug = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 8)->count();
            $Telat_sep = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 9)->count();
            $Telat_okt = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 10)->count();
            $Telat_nov = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 11)->count();
            $Telat_des = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 12)->count();

            $izin_jan = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 1)->count();
            $izin_feb = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 2)->count();
            $izin_mar = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 3)->count();
            $izin_apr = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 4)->count();
            $izin_mei = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 5)->count();
            $izin_jun = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 6)->count();
            $izin_jul = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 7)->count();
            $izin_aug = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 8)->count();
            $izin_sep = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 9)->count();
            $izin_okt = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 10)->count();
            $izin_nov = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 11)->count();
            $izin_des = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 12)->count();

            $Alfa_jan = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 1)->count();
            $Alfa_feb = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 2)->count();
            $Alfa_mar = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 3)->count();
            $Alfa_apr = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 4)->count();
            $Alfa_mei = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 5)->count();
            $Alfa_jun = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 6)->count();
            $Alfa_jul = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 7)->count();
            $Alfa_aug = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 8)->count();
            $Alfa_sep = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 9)->count();
            $Alfa_okt = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 10)->count();
            $Alfa_nov = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 11)->count();
            $Alfa_des = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->whereHas('siswa', function ($q) use ($keyword) { $q->where('name', 'LIKE', '%'.$keyword.'%'); })->whereMonth('tanggal', '=', 12)->count();

            $terima = Siswa::with(['absens' => function ($q) {
                $q->where('tanggal', Carbon::now()->format('Y-m-d'));
            }])
            ->where('name', 'LIKE', '%'.$keyword.'%')
            ->orWhere('sekolah', 'LIKE', '%'.$keyword.'%')
            ->latest()
            ->paginate(10);
            $terima->appends(['cari' => $keyword]);
            return view('absensi_admin.index', compact('terima','Hadir_jan','Hadir_feb','Hadir_mar','Hadir_apr','Hadir_mei','Hadir_jun','Hadir_jul','Hadir_aug','Hadir_sep','Hadir_okt','Hadir_nov','Hadir_des','Telat_jan','Telat_feb','Telat_mar','Telat_apr','Telat_mei','Telat_jun','Telat_jul','Telat_aug','Telat_sep','Telat_nov','Telat_okt','Telat_nov','Telat_des','izin_jan','izin_feb','izin_mar','izin_apr','izin_mei','izin_jun','izin_jul','izin_aug','izin_sep','izin_nov','izin_okt','izin_nov','izin_des','Alfa_jan','Alfa_feb','Alfa_mar','Alfa_apr','Alfa_mei','Alfa_jun','Alfa_jul','Alfa_aug','Alfa_sep','Alfa_nov','Alfa_okt','Alfa_nov','Alfa_des'));

            // $terima->appends(['cari' => $keyword]);
            // return view('absensi_admin.index', compact('item'));
        }

        $Hadir_jan = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->whereMonth('tanggal', '=', 1)->count();
        $Hadir_feb = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->whereMonth('tanggal', '=', 2)->count();
        $Hadir_mar = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->whereMonth('tanggal', '=', 3)->count();
        $Hadir_apr = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->whereMonth('tanggal', '=', 4)->count();
        $Hadir_mei = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->whereMonth('tanggal', '=', 5)->count();
        $Hadir_jun = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->whereMonth('tanggal', '=', 6)->count();
        $Hadir_jul = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->whereMonth('tanggal', '=', 7)->count();
        $Hadir_aug = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->whereMonth('tanggal', '=', 8)->count();
        $Hadir_sep = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->whereMonth('tanggal', '=', 9)->count();
        $Hadir_okt = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->whereMonth('tanggal', '=', 10)->count();
        $Hadir_nov = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->whereMonth('tanggal', '=', 11)->count();
        $Hadir_des = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->whereMonth('tanggal', '=', 12)->count();


        $Telat_jan = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->whereMonth('tanggal', '=', 1)->count();
        $Telat_feb = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->whereMonth('tanggal', '=', 2)->count();
        $Telat_mar = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->whereMonth('tanggal', '=', 3)->count();
        $Telat_apr = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->whereMonth('tanggal', '=', 4)->count();
        $Telat_mei = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->whereMonth('tanggal', '=', 5)->count();
        $Telat_jun = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->whereMonth('tanggal', '=', 6)->count();
        $Telat_jul = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->whereMonth('tanggal', '=', 7)->count();
        $Telat_aug = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->whereMonth('tanggal', '=', 8)->count();
        $Telat_sep = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->whereMonth('tanggal', '=', 9)->count();
        $Telat_okt = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->whereMonth('tanggal', '=', 10)->count();
        $Telat_nov = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->whereMonth('tanggal', '=', 11)->count();
        $Telat_des = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->whereMonth('tanggal', '=', 12)->count();


        $izin_jan = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->whereMonth('tanggal', '=', 1)->count();
        $izin_feb = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->whereMonth('tanggal', '=', 2)->count();
        $izin_mar = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->whereMonth('tanggal', '=', 3)->count();
        $izin_apr = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->whereMonth('tanggal', '=', 4)->count();
        $izin_mei = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->whereMonth('tanggal', '=', 5)->count();
        $izin_jun = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->whereMonth('tanggal', '=', 6)->count();
        $izin_jul = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->whereMonth('tanggal', '=', 7)->count();
        $izin_aug = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->whereMonth('tanggal', '=', 8)->count();
        $izin_sep = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->whereMonth('tanggal', '=', 9)->count();
        $izin_okt = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->whereMonth('tanggal', '=', 10)->count();
        $izin_nov = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->whereMonth('tanggal', '=', 11)->count();
        $izin_des = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->whereMonth('tanggal', '=', 12)->count();

        $Alfa_jan = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->whereMonth('tanggal', '=', 1)->count();
        $Alfa_feb = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->whereMonth('tanggal', '=', 2)->count();
        $Alfa_mar = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->whereMonth('tanggal', '=', 3)->count();
        $Alfa_apr = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->whereMonth('tanggal', '=', 4)->count();
        $Alfa_mei = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->whereMonth('tanggal', '=', 5)->count();
        $Alfa_jun = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->whereMonth('tanggal', '=', 6)->count();
        $Alfa_jul = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->whereMonth('tanggal', '=', 7)->count();
        $Alfa_aug = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->whereMonth('tanggal', '=', 8)->count();
        $Alfa_sep = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->whereMonth('tanggal', '=', 9)->count();
        $Alfa_okt = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->whereMonth('tanggal', '=', 10)->count();
        $Alfa_nov = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->whereMonth('tanggal', '=', 11)->count();
        $Alfa_des = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->whereMonth('tanggal', '=', 12)->count();

        $terima = Siswa::with(['absens' => function ($q) {
            $q->where('tanggal', Carbon::now()->format('Y-m-d'));
        }])
        ->latest()
        ->paginate(10);
        return view('absensi_admin.index', compact('terima','Hadir_jan','Hadir_feb','Hadir_mar','Hadir_apr','Hadir_mei','Hadir_jun','Hadir_jul','Hadir_aug','Hadir_sep','Hadir_okt','Hadir_nov','Hadir_des','Telat_jan','Telat_feb','Telat_mar','Telat_apr','Telat_mei','Telat_jun','Telat_jul','Telat_aug','Telat_sep','Telat_nov','Telat_okt','Telat_nov','Telat_des','izin_jan','izin_feb','izin_mar','izin_apr','izin_mei','izin_jun','izin_jul','izin_aug','izin_sep','izin_nov','izin_okt','izin_nov','izin_des','Alfa_jan','Alfa_feb','Alfa_mar','Alfa_apr','Alfa_mei','Alfa_jun','Alfa_jul','Alfa_aug','Alfa_sep','Alfa_nov','Alfa_okt','Alfa_nov','Alfa_des'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


        $terima = ApprovalIzin::where('nama', 'LIKE', $request ->serch)->GET();
        $siswa = $request->serch;
        $Hadir_jan = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 1)->count();
        $Hadir_feb = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 2)->count();
        $Hadir_mar = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 3)->count();
        $Hadir_apr = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 4)->count();
        $Hadir_mei = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 5)->count();
        $Hadir_jun = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 6)->count();
        $Hadir_jul = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 7)->count();
        $Hadir_aug = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 8)->count();
        $Hadir_sep = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 9)->count();
        $Hadir_okt = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 10)->count();
        $Hadir_nov = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 11)->count();
        $Hadir_des = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 12)->count();


        $Telat_jan = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 1)->count();
        $Telat_feb = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 2)->count();
        $Telat_mar = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 3)->count();
        $Telat_apr = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 4)->count();
        $Telat_mei = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 5)->count();
        $Telat_jun = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 6)->count();
        $Telat_jul = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 7)->count();
        $Telat_aug = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 8)->count();
        $Telat_sep = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 9)->count();
        $Telat_okt = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 10)->count();
        $Telat_nov = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 11)->count();
        $Telat_des = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 12)->count();


        $izin_jan = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 1)->count();
        $izin_feb = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 2)->count();
        $izin_mar = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 3)->count();
        $izin_apr = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 4)->count();
        $izin_mei = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 5)->count();
        $izin_jun = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 6)->count();
        $izin_jul = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 7)->count();
        $izin_aug = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 8)->count();
        $izin_sep = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 9)->count();
        $izin_okt = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 10)->count();
        $izin_nov = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 11)->count();
        $izin_des = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 12)->count();

        $Alfa_jan = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 1)->count();
        $Alfa_feb = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 2)->count();
        $Alfa_mar = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 3)->count();
        $Alfa_apr = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 4)->count();
        $Alfa_mei = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 5)->count();
        $Alfa_jun = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 6)->count();
        $Alfa_jul = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 7)->count();
        $Alfa_aug = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 8)->count();
        $Alfa_sep = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 9)->count();
        $Alfa_okt = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 10)->count();
        $Alfa_nov = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 11)->count();
        $Alfa_des = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 12)->count();

        return view('absensi_admin.grafik', compact('siswa','terima','Hadir_jan','Hadir_feb','Hadir_mar','Hadir_apr','Hadir_mei','Hadir_jun','Hadir_jul','Hadir_aug','Hadir_sep','Hadir_okt','Hadir_nov','Hadir_des','Telat_jan','Telat_feb','Telat_mar','Telat_apr','Telat_mei','Telat_jun','Telat_jul','Telat_aug','Telat_sep','Telat_nov','Telat_okt','Telat_nov','Telat_des','izin_jan','izin_feb','izin_mar','izin_apr','izin_mei','izin_jun','izin_jul','izin_aug','izin_sep','izin_nov','izin_okt','izin_nov','izin_des','Alfa_jan','Alfa_feb','Alfa_mar','Alfa_apr','Alfa_mei','Alfa_jun','Alfa_jul','Alfa_aug','Alfa_sep','Alfa_nov','Alfa_okt','Alfa_nov','Alfa_des'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAbsensiadminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'dari' => 'required',
            'sampai' => 'required',
            'keterangan'=> 'required',
            'deskripsi' => 'required',
            'bukti' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);
        $image = $request->file('bukti');
        $image->storeAs('public/bukti_izin', $image->hashName());


    ApprovalIzin::create([
            'nama' => $request->nama,
            'sekolah' => $request->sekolah,
            'email' => $request->email,
            'dari' => $request->dari,
            'sampai' => $request->sampai,
            'keterangan' => $request->keterangan,
            'deskripsi' => $request->deskripsi,
            'status' => 'menunggu',
            'bukti' => $image->hashName()
        ]);
        // Mail::to($request->email)->send(new dataizinEmail($approvalIzin));
        return redirect()->route('absensi_siswa.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absensiadmin  $Absensiadmin
     * @return \Illuminate\Http\Response
     */
    public function show(Absensiadmin $Absensiadmin)
    {
        return view('absensi_admin.grafik');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absensiadmin  $Absensiadmin
     * @return \Illuminate\Http\Response
     */
    public function edit(Absensiadmin $Absensiadmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAbsensiadminRequest  $request
     * @param  \App\Models\Absensiadmin  $Absensiadmin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAbsensiadminRequest $request, Absensiadmin $Absensiadmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absensiadmin  $Absensiadmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absensiadmin $Absensiadmin)
    {
        //
    }
    public function exportToDocxabsen(Request $request)
{
    // Mendapatkan data dari database (contoh menggunakan model User)

    $users = ApprovalIzin::all();

    $data = $request->pencarian;
    if($data !== null){
        $datas = Siswa::Where('name', $data)->first();
        $users = ApprovalIzin::where('siswa_id', $datas->id)->first();

          // Membuat objek PhpWord
      $phpWord = new PhpWord();

      // Membuat halaman baru
      $section = $phpWord->addSection();

      // Judul tabel dengan border dan background abu-abu
      $section->addText("Daftar Absensi Siswa", ['bold' => true, 'size' => 14, 'color' => '000000']);
      $section->addTextBreak(1);
      $titleStyle = array('borderSize' => 6, 'borderColor' => '000000', 'bgColor' => 'D3D3D3');
      $section->addText(" ", $titleStyle);

      // Membuat tabel
      $table = $section->addTable();
      $table->addRow();
      $table->addCell(600, $titleStyle)->addText("No.", ['bold' => true, 'alignment' => 'center']);
      $table->addCell(4000, $titleStyle)->addText("Nama", ['bold' => true, 'alignment' => 'center']);
      $table->addCell(1500, $titleStyle)->addText("Tanggal", ['bold' => true, 'alignment' => 'center']);
      $table->addCell(2500, $titleStyle)->addText("Sekolah", ['bold' => true, 'alignment' => 'center']);
      $table->addCell(3000, $titleStyle)->addText("Keterangan", ['bold' => true, 'alignment' => 'center']);
    //   $table->addCell(2000, $titleStyle)->addText("Bukti", ['bold' => true, 'alignment' => 'center']);

      // Menambahkan data dari database ke tabel
      $count = 1;

          $table->addRow();
          $table->addCell(600)->addText($count++, ['alignment' => 'center']);

           // Menambahkan gambar berdasarkan nama file yang ada di kolom 'image'

        //   $imagePath = 'storage/image/'. $users->image;
          $table->addCell(4000)->addText($users->Siswa->name, ['alignment' => 'center']);
          $table->addCell(1500)->addText($users->tanggal, ['alignment' => 'center']);
          $table->addCell(2500)->addText($users->Siswa->sekolah, ['alignment' => 'center']);
          $table->addCell(3000)->addText($users->keterangan, ['alignment' => 'center']);
        //   if($imagePath == "storage/image/". $user->image){
        //       $table->addCell(2000)->addImage($imagePath, ['width' => 150, 'height' => 150, 'alignment' => 'center']);
        //   }else{
        //       $table->addCell(2000)->addText('Gambar Tidak Ditemukan', ['alignment' => 'center']);
        //   }


      // Menyimpan dokumen sebagai file .docx
      $filename = "database_export.docx";
      $path = public_path('storage/image/' . $filename); // Sesuaikan dengan lokasi penyimpanan yang diinginkan
      $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
      $objWriter->save($path);

      // Mengembalikan file dokumen untuk diunduh
      return response()->download($path, $filename);
    }

      // Membuat objek PhpWord
      $phpWord = new PhpWord();

      // Membuat halaman baru
      $section = $phpWord->addSection();

      // Judul tabel dengan border dan background abu-abu
      $section->addText("Daftar Absensi Siswa", ['bold' => true, 'size' => 14, 'color' => '000000']);
      $section->addTextBreak(1);
      $titleStyle = array('borderSize' => 6, 'borderColor' => '000000', 'bgColor' => 'D3D3D3');
      $section->addText(" ", $titleStyle);

      // Membuat tabel
      $table = $section->addTable();
      $table->addRow();
      $table->addCell(600, $titleStyle)->addText("No.", ['bold' => true, 'alignment' => 'center']);
      $table->addCell(4000, $titleStyle)->addText("Nama", ['bold' => true, 'alignment' => 'center']);
      $table->addCell(1500, $titleStyle)->addText("Tanggal", ['bold' => true, 'alignment' => 'center']);
      $table->addCell(2500, $titleStyle)->addText("Sekolah", ['bold' => true, 'alignment' => 'center']);
      $table->addCell(3000, $titleStyle)->addText("Keterangan", ['bold' => true, 'alignment' => 'center']);
    //   $table->addCell(2000, $titleStyle)->addText("Bukti", ['bold' => true, 'alignment' => 'center']);

      // Menambahkan data dari database ke tabel
      $count = 1;
      foreach ($users as $user) {
          $table->addRow();
          $table->addCell(600)->addText($count++, ['alignment' => 'center']);

           // Menambahkan gambar berdasarkan nama file yang ada di kolom 'image'

        //   $imagePath = 'storage/image/'. $user->image;



          $table->addCell(4000)->addText($user->Siswa->name, ['alignment' => 'center']);
          $table->addCell(1500)->addText($user->tanggal, ['alignment' => 'center']);
          $table->addCell(2500)->addText($user->Siswa->sekolah, ['alignment' => 'center']);
          $table->addCell(3000)->addText($user->keterangan, ['alignment' => 'center']);
        //   if($imagePath == "storage/image/". $user->image){
        //       $table->addCell(2000)->addImage($imagePath, ['width' => 150, 'height' => 150, 'alignment' => 'center']);
        //   }else{
        //       $table->addCell(2000)->addText('Gambar Tidak Ditemukan', ['alignment' => 'center']);
        //   }
      }

      // Menyimpan dokumen sebagai file .docx
      $filename = "database_export.docx";
      $path = public_path('storage/image/' . $filename); // Sesuaikan dengan lokasi penyimpanan yang diinginkan
      $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
      $objWriter->save($path);

      // Mengembalikan file dokumen untuk diunduh
      return response()->download($path, $filename);
}

    public function grafik_absen_docx()
{
    // Mendapatkan data dari database (contoh menggunakan model User)
    $users = ApprovalIzin::all();

    // Membuat objek PhpWord
   // Membuat objek PhpWord
   $phpWord = new PhpWord();

   // Membuat halaman baru
   $section = $phpWord->addSection();

   // Judul tabel dengan border dan background abu-abu
   $section->addText("Daftar Absensi Siswa", ['bold' => true, 'size' => 14, 'color' => '000000']);
   $section->addTextBreak(1);
   $titleStyle = array('borderSize' => 6, 'borderColor' => '000000', 'bgColor' => 'D3D3D3');
   $section->addText(" ", $titleStyle);

   // Membuat tabel
   $table = $section->addTable();
   $table->addRow();
   $table->addCell(600, $titleStyle)->addText("No.", ['bold' => true, 'alignment' => 'center']);
   $table->addCell(4000, $titleStyle)->addText("Nama", ['bold' => true, 'alignment' => 'center']);
   $table->addCell(1500, $titleStyle)->addText("Tanggal", ['bold' => true, 'alignment' => 'center']);
   $table->addCell(2500, $titleStyle)->addText("Sekolah", ['bold' => true, 'alignment' => 'center']);
   $table->addCell(3000, $titleStyle)->addText("Keterangan", ['bold' => true, 'alignment' => 'center']);
 //   $table->addCell(2000, $titleStyle)->addText("Bukti", ['bold' => true, 'alignment' => 'center']);

   // Menambahkan data dari database ke tabel
   $count = 1;
   foreach ($users as $user) {
       $table->addRow();
       $table->addCell(600)->addText($count++, ['alignment' => 'center']);

        // Menambahkan gambar berdasarkan nama file yang ada di kolom 'image'

     //   $imagePath = 'storage/image/'. $user->image;



       $table->addCell(4000)->addText($user->Siswa->name, ['alignment' => 'center']);
       $table->addCell(1500)->addText($user->tanggal, ['alignment' => 'center']);
       $table->addCell(2500)->addText($user->Siswa->sekolah, ['alignment' => 'center']);
       $table->addCell(3000)->addText($user->keterangan, ['alignment' => 'center']);
     //   if($imagePath == "storage/image/". $user->image){
     //       $table->addCell(2000)->addImage($imagePath, ['width' => 150, 'height' => 150, 'alignment' => 'center']);
     //   }else{
     //       $table->addCell(2000)->addText('Gambar Tidak Ditemukan', ['alignment' => 'center']);
     //   }
   }

   // Menyimpan dokumen sebagai file .docx
   $filename = "database_export.docx";
   $path = public_path('storage/Image/' . $filename); // Sesuaikan dengan lokasi penyimpanan yang diinginkan
   $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
   $objWriter->save($path);

   // Mengembalikan file dokumen untuk diunduh
   return response()->download($path, $filename);
}

public function absen_pdf(Request $request)  {
    set_time_limit(0);
    $datas = $request->pencarian;
    if($datas !== null)
    {
        $users = Siswa::where('name', $datas)->first();
        $data = ApprovalIzin::where('siswa_id', $users->id)->get();
        $pdf = Pdf::loadView('desain_pdf.absensi', ['data' => $data]);
        return $pdf->download('absen_siswa.pdf');
    }
    $data = ApprovalIzin::all();
    $pdf = Pdf::loadView('desain_pdf.absensi', ['data' => $data]);
    return $pdf->download('absen_siswa.pdf');
}

public function absen_pdf1(Request $request)  {
    set_time_limit(0);
    $data = ApprovalIzin::where('nama' , $request->serch)->get;
    $pdf = Pdf::loadView('desain_pdf.absensi', ['data' => $data]);
    return $pdf->download('absen_siswa.pdf');
}

    /**
     * attendanceRule
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function attendanceRule(AttendanceRuleRequest $request): RedirectResponse
    {
        $data = $request->validated();
        AttendanceRule::query()->updateOrCreate(['day' => $data['day']], $data);
        return redirect()->back()->with('success', 'Berhasil memperbarui');
    }

    /**
     * listAttendance
     *
     * @param  mixed $request
     * @return View
     */
    public function listAttendance(Request $request): View
    {
        $students = Siswa::query()
            ->withCount('attendances')
            ->with(['attendances' => function ($query) {
                $query->whereDate('created_at', now());
            }])
            ->when($request->name, function ($query) use ($request) {
                $query->where('name', 'LIKE', '%' . $request->name . '%');
            })
            ->whereNull('status')
            ->orderByDesc('attendances_count')
            ->get();

        $attendanceRule = AttendanceRule::query()
            ->where('day', now()->format('l'))
            ->first();
        return view('master.data-collection.absensi', compact('students', 'attendanceRule'));
    }

    /**
     * attendanceDetail
     *
     * @param  mixed $attendance
     * @return View
     */
    public function attendanceDetail(Attendance $attendance): View
    {
        return view('master.data-collection.detail-absensi', compact('attendance'));
    }

}
