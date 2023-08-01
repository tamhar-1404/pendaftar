<?php

namespace App\Http\Controllers;

use App\Models\Dashbord_guru;
use App\Models\Jurnalsiswa;
use App\Models\Siswa;
use App\Models\MOU;
use App\Models\ApprovalIzin;
use App\Models\Blog;
use App\Models\Guru_admin;
use Illuminate\Support\Facades\Auth;
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
        $jurnal = Jurnalsiswa::where('sekolah', Auth()->user()->sekolah)->count();
        $siswa = Siswa::where([['sekolah', Auth()->user()->sekolah], ['role', 'Siswa']])->count();
        $data_siswa = Siswa::where('sekolah', Auth()->user()->sekolah)->where('role' , 'siswa')->get();
        $absen = ApprovalIzin::where('sekolah', Auth()->user()->sekolah)->count();
        $mou = MOU::all();
        $berita = Blog::all();
        $guru = Guru_admin::where('name' , Auth()->user()->name)->first();



        $Hadir_jan = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 1)->count();
        $Hadir_feb = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 2)->count();
        $Hadir_mar = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 3)->count();
        $Hadir_apr = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 4)->count();
        $Hadir_mei = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 5)->count();
        $Hadir_jun = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 6)->count();
        $Hadir_jul = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 7)->count();
        $Hadir_aug = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 8)->count();
        $Hadir_sep = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 9)->count();
        $Hadir_okt = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 10)->count();
        $Hadir_nov = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 11)->count();
        $Hadir_des = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 12)->count();


        $Telat_jan = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 1)->count();
        $Telat_feb = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 2)->count();
        $Telat_mar = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 3)->count();
        $Telat_apr = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 4)->count();
        $Telat_mei = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 5)->count();
        $Telat_jun = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 6)->count();
        $Telat_jul = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 7)->count();
        $Telat_aug = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 8)->count();
        $Telat_sep = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 9)->count();
        $Telat_okt = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 10)->count();
        $Telat_nov = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 11)->count();
        $Telat_des = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 12)->count();


        $izin_jan =ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 1)->count();
        $izin_feb =ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 2)->count();
        $izin_mar =ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 3)->count();
        $izin_apr =ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 4)->count();
        $izin_mei =ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 5)->count();
        $izin_jun =ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 6)->count();
        $izin_jul =ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 7)->count();
        $izin_aug =ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 8)->count();
        $izin_sep =ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 9)->count();
        $izin_okt =ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 10)->count();
        $izin_nov =ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 11)->count();
        $izin_des =ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 12)->count();

        $Alfa_jan =ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 1)->count();
        $Alfa_feb =ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 2)->count();
        $Alfa_mar =ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 3)->count();
        $Alfa_apr =ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 4)->count();
        $Alfa_mei =ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 5)->count();
        $Alfa_jun =ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 6)->count();
        $Alfa_jul =ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 7)->count();
        $Alfa_aug =ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 8)->count();
        $Alfa_sep =ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 9)->count();
        $Alfa_okt =ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 10)->count();
        $Alfa_nov =ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 11)->count();
        $Alfa_des =ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('sekolah' , Auth()->user()->sekolah)->whereMonth('tanggal', '=', 12)->count();

        return view('guru.index', compact('guru','berita','mou','jurnal','data_siswa', 'siswa', 'absen', 'Hadir_jan','Hadir_feb','Hadir_mar','Hadir_apr','Hadir_mei','Hadir_jun','Hadir_jul','Hadir_aug','Hadir_sep','Hadir_okt','Hadir_nov','Hadir_des','Telat_jan','Telat_feb','Telat_mar','Telat_apr','Telat_mei','Telat_jun','Telat_jul','Telat_aug','Telat_sep','Telat_nov','Telat_okt','Telat_nov','Telat_des','izin_jan','izin_feb','izin_mar','izin_apr','izin_mei','izin_jun','izin_jul','izin_aug','izin_sep','izin_nov','izin_okt','izin_nov','izin_des','Alfa_jan','Alfa_feb','Alfa_mar','Alfa_apr','Alfa_mei','Alfa_jun','Alfa_jul','Alfa_aug','Alfa_sep','Alfa_nov','Alfa_okt','Alfa_nov','Alfa_des'));
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
    public function edit($dashboard_guru)
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
    public function update(UpdateDashboard_guruRequest $request, $dashboard_guru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dashbord_guru  $dashboard_guru
     * @return \Illuminate\Http\Response
     */
    public function destroy($dashboard_guru)
    {
        //
    }
}
