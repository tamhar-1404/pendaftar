<?php

namespace App\Http\Controllers;

use App\Models\Dashboard_siswa;
use App\Models\ApprovalIzin;
use App\Models\jurnalsiswa;
use auth;
use App\Http\Requests\StoreDashboard_siswaRequest;
use App\Http\Requests\UpdateDashboard_siswaRequest;

class DashboardSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Hadir_jan = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 1)->count();
        $Hadir_feb = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 2)->count();
        $Hadir_mar = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 3)->count();
        $Hadir_apr = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 4)->count();
        $Hadir_mei = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 5)->count();
        $Hadir_jun = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 6)->count();
        $Hadir_jul = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 7)->count();
        $Hadir_aug = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 8)->count();
        $Hadir_sep = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 9)->count();
        $Hadir_okt = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 10)->count();
        $Hadir_nov = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 11)->count();
        $Hadir_des = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 12)->count();


        $Telat_jan = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 1)->count();
        $Telat_feb = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 2)->count();
        $Telat_mar = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 3)->count();
        $Telat_apr = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 4)->count();
        $Telat_mei = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 5)->count();
        $Telat_jun = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 6)->count();
        $Telat_jul = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 7)->count();
        $Telat_aug = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 8)->count();
        $Telat_sep = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 9)->count();
        $Telat_okt = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 10)->count();
        $Telat_nov = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 11)->count();
        $Telat_des = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 12)->count();


        $izin_jan = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 1)->count();
        $izin_feb = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 2)->count();
        $izin_mar = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 3)->count();
        $izin_apr = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 4)->count();
        $izin_mei = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 5)->count();
        $izin_jun = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 6)->count();
        $izin_jul = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 7)->count();
        $izin_aug = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 8)->count();
        $izin_sep = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 9)->count();
        $izin_okt = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 10)->count();
        $izin_nov = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 11)->count();
        $izin_des = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 12)->count();

        $Alfa_jan = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 1)->count();
        $Alfa_feb = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 2)->count();
        $Alfa_mar = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 3)->count();
        $Alfa_apr = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 4)->count();
        $Alfa_mei = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 5)->count();
        $Alfa_jun = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 6)->count();
        $Alfa_jul = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 7)->count();
        $Alfa_aug = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 8)->count();
        $Alfa_sep = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 9)->count();
        $Alfa_okt = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 10)->count();
        $Alfa_nov = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 11)->count();
        $Alfa_des = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 12)->count();

        // jurnal

        $mengisi_jan = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 1)->count();
        $mengisi_feb = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 2)->count();
        $mengisi_mar = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 3)->count();
        $mengisi_apr = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 4)->count();
        $mengisi_mei = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 5)->count();
        $mengisi_jun = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 6)->count();
        $mengisi_jul = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 7)->count();
        $mengisi_aug = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 8)->count();
        $mengisi_sep = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 9)->count();
        $mengisi_okt = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 10)->count();
        $mengisi_nov = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 11)->count();
        $mengisi_des = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 12)->count();


        $tdk_mengisi_jan = jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 1)->count();
        $tdk_mengisi_feb = jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 2)->count();
        $tdk_mengisi_mar = jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 3)->count();
        $tdk_mengisi_apr = jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 4)->count();
        $tdk_mengisi_mei = jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 5)->count();
        $tdk_mengisi_jun = jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 6)->count();
        $tdk_mengisi_jul = jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 7)->count();
        $tdk_mengisi_aug = jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 8)->count();
        $tdk_mengisi_sep = jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 9)->count();
        $tdk_mengisi_okt = jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 10)->count();
        $tdk_mengisi_nov = jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 11)->count();
        $tdk_mengisi_des = jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', auth()->user()->name)->whereMonth('tanggal', '=', 12)->count();


        $tatib = TataTertib::latest()->paginate(5);
        return view('siswamagang.index', compact('tatib', 'Hadir_jan','Hadir_feb','Hadir_mar','Hadir_apr','Hadir_mei','Hadir_jun','Hadir_jul','Hadir_aug','Hadir_sep','Hadir_okt','Hadir_nov','Hadir_des','Telat_jan','Telat_feb','Telat_mar','Telat_apr','Telat_mei','Telat_jun','Telat_jul','Telat_aug','Telat_sep','Telat_nov','Telat_okt','Telat_nov','Telat_des','izin_jan','izin_feb','izin_mar','izin_apr','izin_mei','izin_jun','izin_jul','izin_aug','izin_sep','izin_nov','izin_okt','izin_nov','izin_des','Alfa_jan','Alfa_feb','Alfa_mar','Alfa_apr','Alfa_mei','Alfa_jun','Alfa_jul','Alfa_aug','Alfa_sep','Alfa_nov','Alfa_okt','Alfa_nov','Alfa_des','mengisi_jan','mengisi_feb','mengisi_mar','mengisi_apr','mengisi_mei','mengisi_jun','mengisi_jul','mengisi_aug','mengisi_sep','mengisi_okt','mengisi_nov','mengisi_des','tdk_mengisi_jan','tdk_mengisi_feb','tdk_mengisi_mar','tdk_mengisi_apr','tdk_mengisi_mei','tdk_mengisi_jun','tdk_mengisi_jul','tdk_mengisi_aug','tdk_mengisi_sep','tdk_mengisi_nov','tdk_mengisi_okt','tdk_mengisi_nov','tdk_mengisi_des'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDashboard_siswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDashboard_siswaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dashboard_siswa  $dashboard_siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard_siswa $dashboard_siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dashboard_siswa  $dashboard_siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard_siswa $dashboard_siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDashboard_siswaRequest  $request
     * @param  \App\Models\Dashboard_siswa  $dashboard_siswa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDashboard_siswaRequest $request, Dashboard_siswa $dashboard_siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dashboard_siswa  $dashboard_siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard_siswa $dashboard_siswa)
    {
        //
    }
}
