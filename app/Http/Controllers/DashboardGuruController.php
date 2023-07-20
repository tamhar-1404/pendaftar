<?php

namespace App\Http\Controllers;

use App\Models\dashbord_guru;
use App\Models\jurnalsiswa;
use App\Models\Siswa;
use App\Models\MOU;
use App\Models\approvalizin;
use App\Models\Blog;
use auth;
use App\Http\Requests\StoreDashboard_guruRequest;
use App\Http\Requests\UpdateDashboard_guruRequest;


class DashboardGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurnal = jurnalsiswa::where('sekolah', Auth()->user()->sekolah)->count();
        $siswa = Siswa::where('sekolah', Auth()->user()->sekolah)->count();
        $data_siswa = Siswa::where('sekolah', Auth()->user()->sekolah)->get();
        $absen = approvalizin::where('sekolah', Auth()->user()->sekolah)->count();
        $mou = MOU::all();
        $berita = Blog::all();



        $Hadir_jan = approvalIzin::where('keterangan', 'LIKE', 'Hadir')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 1)->count();
        $Hadir_feb = approvalIzin::where('keterangan', 'LIKE', 'Hadir')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 2)->count();
        $Hadir_mar = approvalIzin::where('keterangan', 'LIKE', 'Hadir')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 3)->count();
        $Hadir_apr = approvalIzin::where('keterangan', 'LIKE', 'Hadir')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 4)->count();
        $Hadir_mei = approvalIzin::where('keterangan', 'LIKE', 'Hadir')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 5)->count();
        $Hadir_jun = approvalIzin::where('keterangan', 'LIKE', 'Hadir')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 6)->count();
        $Hadir_jul = approvalIzin::where('keterangan', 'LIKE', 'Hadir')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 7)->count();
        $Hadir_aug = approvalIzin::where('keterangan', 'LIKE', 'Hadir')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 8)->count();
        $Hadir_sep = approvalIzin::where('keterangan', 'LIKE', 'Hadir')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 9)->count();
        $Hadir_okt = approvalIzin::where('keterangan', 'LIKE', 'Hadir')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 10)->count();
        $Hadir_nov = approvalIzin::where('keterangan', 'LIKE', 'Hadir')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 11)->count();
        $Hadir_des = approvalIzin::where('keterangan', 'LIKE', 'Hadir')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 12)->count();


        $Telat_jan = approvalIzin::where('keterangan', 'LIKE', 'Telat')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 1)->count();
        $Telat_feb = approvalIzin::where('keterangan', 'LIKE', 'Telat')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 2)->count();
        $Telat_mar = approvalIzin::where('keterangan', 'LIKE', 'Telat')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 3)->count();
        $Telat_apr = approvalIzin::where('keterangan', 'LIKE', 'Telat')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 4)->count();
        $Telat_mei = approvalIzin::where('keterangan', 'LIKE', 'Telat')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 5)->count();
        $Telat_jun = approvalIzin::where('keterangan', 'LIKE', 'Telat')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 6)->count();
        $Telat_jul = approvalIzin::where('keterangan', 'LIKE', 'Telat')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 7)->count();
        $Telat_aug = approvalIzin::where('keterangan', 'LIKE', 'Telat')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 8)->count();
        $Telat_sep = approvalIzin::where('keterangan', 'LIKE', 'Telat')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 9)->count();
        $Telat_okt = approvalIzin::where('keterangan', 'LIKE', 'Telat')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 10)->count();
        $Telat_nov = approvalIzin::where('keterangan', 'LIKE', 'Telat')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 11)->count();
        $Telat_des = approvalIzin::where('keterangan', 'LIKE', 'Telat')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 12)->count();


        $izin_jan =approvalIzin::where('keterangan', 'LIKE', 'izin')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 1)->count();
        $izin_feb =approvalIzin::where('keterangan', 'LIKE', 'izin')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 2)->count();
        $izin_mar =approvalIzin::where('keterangan', 'LIKE', 'izin')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 3)->count();
        $izin_apr =approvalIzin::where('keterangan', 'LIKE', 'izin')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 4)->count();
        $izin_mei =approvalIzin::where('keterangan', 'LIKE', 'izin')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 5)->count();
        $izin_jun =approvalIzin::where('keterangan', 'LIKE', 'izin')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 6)->count();
        $izin_jul =approvalIzin::where('keterangan', 'LIKE', 'izin')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 7)->count();
        $izin_aug =approvalIzin::where('keterangan', 'LIKE', 'izin')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 8)->count();
        $izin_sep =approvalIzin::where('keterangan', 'LIKE', 'izin')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 9)->count();
        $izin_okt =approvalIzin::where('keterangan', 'LIKE', 'izin')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 10)->count();
        $izin_nov =approvalIzin::where('keterangan', 'LIKE', 'izin')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 11)->count();
        $izin_des =approvalIzin::where('keterangan', 'LIKE', 'izin')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 12)->count();

        $Alfa_jan =approvalIzin::where('keterangan', 'LIKE', 'Alfa')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 1)->count();
        $Alfa_feb =approvalIzin::where('keterangan', 'LIKE', 'Alfa')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 2)->count();
        $Alfa_mar =approvalIzin::where('keterangan', 'LIKE', 'Alfa')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 3)->count();
        $Alfa_apr =approvalIzin::where('keterangan', 'LIKE', 'Alfa')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 4)->count();
        $Alfa_mei =approvalIzin::where('keterangan', 'LIKE', 'Alfa')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 5)->count();
        $Alfa_jun =approvalIzin::where('keterangan', 'LIKE', 'Alfa')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 6)->count();
        $Alfa_jul =approvalIzin::where('keterangan', 'LIKE', 'Alfa')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 7)->count();
        $Alfa_aug =approvalIzin::where('keterangan', 'LIKE', 'Alfa')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 8)->count();
        $Alfa_sep =approvalIzin::where('keterangan', 'LIKE', 'Alfa')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 9)->count();
        $Alfa_okt =approvalIzin::where('keterangan', 'LIKE', 'Alfa')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 10)->count();
        $Alfa_nov =approvalIzin::where('keterangan', 'LIKE', 'Alfa')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 11)->count();
        $Alfa_des =approvalIzin::where('keterangan', 'LIKE', 'Alfa')->where('sekolah' , auth()->user()->sekolah)->whereMonth('tanggal', '=', 12)->count();

        return view('guru.index', compact('berita','mou','jurnal','data_siswa', 'siswa', 'absen', 'Hadir_jan','Hadir_feb','Hadir_mar','Hadir_apr','Hadir_mei','Hadir_jun','Hadir_jul','Hadir_aug','Hadir_sep','Hadir_okt','Hadir_nov','Hadir_des','Telat_jan','Telat_feb','Telat_mar','Telat_apr','Telat_mei','Telat_jun','Telat_jul','Telat_aug','Telat_sep','Telat_nov','Telat_okt','Telat_nov','Telat_des','izin_jan','izin_feb','izin_mar','izin_apr','izin_mei','izin_jun','izin_jul','izin_aug','izin_sep','izin_nov','izin_okt','izin_nov','izin_des','Alfa_jan','Alfa_feb','Alfa_mar','Alfa_apr','Alfa_mei','Alfa_jun','Alfa_jul','Alfa_aug','Alfa_sep','Alfa_nov','Alfa_okt','Alfa_nov','Alfa_des'));
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
     * @param  \App\Http\Requests\StoreDashboard_guruRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDashboard_guruRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dashbord_guru  $dashboard_guru
     * @return \Illuminate\Http\Response
     */
    public function show(dashbord_guru $dashboard_siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dashbord_guru  $dashboard_guru
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard_guru $dashboard_guru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDashboard_guruRequest  $request
     * @param  \App\Models\dashbord_guru  $dashboard_guru
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDashboard_guruRequest $request, Dashboard_guru $dashboard_guru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dashbord_guru  $dashboard_guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard_guru $dashboard_guru)
    {
        //
    }
}
