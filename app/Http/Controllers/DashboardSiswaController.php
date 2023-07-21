<?php

namespace App\Http\Controllers;

use App\Models\Dashboard_siswa;
use App\Models\ApprovalIzin;
use App\Models\jurnalsiswa;
use Auth;
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



        $tatib = TataTertib::latest()->paginate(5);
        return view('siswamagang.index', compact('tatib', 'Hadir_jan', 'Hadir_feb', 'Hadir_mar', 'Hadir_apr', 'Hadir_mei', 'Hadir_jun', 'Hadir_jul', 'Hadir_aug', 'Hadir_sep', 'Hadir_okt', 'Hadir_nov', 'Hadir_des', 'Telat_jan', 'Telat_feb', 'Telat_mar', 'Telat_apr', 'Telat_mei', 'Telat_jun', 'Telat_jul', 'Telat_aug', 'Telat_sep', 'Telat_nov', 'Telat_okt', 'Telat_nov', 'Telat_des', 'izin_jan', 'izin_feb', 'izin_mar', 'izin_apr', 'izin_mei', 'izin_jun', 'izin_jul', 'izin_aug', 'izin_sep', 'izin_nov', 'izin_okt', 'izin_nov', 'izin_des', 'Alfa_jan', 'Alfa_feb', 'Alfa_mar', 'Alfa_apr', 'Alfa_mei', 'Alfa_jun', 'Alfa_jul', 'Alfa_aug', 'Alfa_sep', 'Alfa_nov', 'Alfa_okt', 'Alfa_nov', 'Alfa_des', 'mengisi_jan', 'mengisi_feb', 'mengisi_mar', 'mengisi_apr', 'mengisi_mei', 'mengisi_jun', 'mengisi_jul', 'mengisi_aug', 'mengisi_sep', 'mengisi_okt', 'mengisi_nov', 'mengisi_des', 'tdk_mengisi_jan', 'tdk_mengisi_feb', 'tdk_mengisi_mar', 'tdk_mengisi_apr', 'tdk_mengisi_mei', 'tdk_mengisi_jun', 'tdk_mengisi_jul', 'tdk_mengisi_aug', 'tdk_mengisi_sep', 'tdk_mengisi_nov', 'tdk_mengisi_okt', 'tdk_mengisi_nov', 'tdk_mengisi_des'));
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
