<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\Siswa;
use App\Models\Guru_admin;
use App\Models\MOU;
use App\Models\Tolak;
use App\Models\Blog;
use App\Models\aproval;
use App\Http\Requests\StoreDashboardRequest;
use App\Http\Requests\UpdateDashboardRequest;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::where('role', 'Siswa')->count();
        $guru = Guru_admin::all()->count();
        $mou = MOU::all()->count();
        $tolak = Tolak::all()->count();
        $menunggu = Aproval::where('status', 'menunggu')->count();

        $menunggu_jan = Aproval::where('status', 'menunggu')->whereMonth('tanggal', '=', 1)->count();
        $menunggu_feb = Aproval::where('status', 'menunggu')->whereMonth('tanggal', '=', 2)->count();
        $menunggu_mar = Aproval::where('status', 'menunggu')->whereMonth('tanggal', '=', 3)->count();
        $menunggu_apr = Aproval::where('status', 'menunggu')->whereMonth('tanggal', '=', 4)->count();
        $menunggu_mei = Aproval::where('status', 'menunggu')->whereMonth('tanggal', '=', 5)->count();
        $menunggu_jun = Aproval::where('status', 'menunggu')->whereMonth('tanggal', '=', 6)->count();
        $menunggu_jul = Aproval::where('status', 'menunggu')->whereMonth('tanggal', '=', 7)->count();
        $menunggu_aug = Aproval::where('status', 'menunggu')->whereMonth('tanggal', '=', 8)->count();
        $menunggu_sep = Aproval::where('status', 'menunggu')->whereMonth('tanggal', '=', 9)->count();
        $menunggu_okt = Aproval::where('status', 'menunggu')->whereMonth('tanggal', '=', 10)->count();
        $menunggu_nov = Aproval::where('status', 'menunggu')->whereMonth('tanggal', '=', 11)->count();
        $menunggu_des = Aproval::where('status', 'menunggu')->whereMonth('tanggal', '=', 12)->count();

        $Tolak_jan = Tolak::where('status', 'ditolak')->whereMonth('created_at', '=', 1)->count();
        $Tolak_feb = Tolak::where('status', 'ditolak')->whereMonth('created_at', '=', 2)->count();
        $Tolak_mar = Tolak::where('status', 'ditolak')->whereMonth('created_at', '=', 3)->count();
        $Tolak_apr = Tolak::where('status', 'ditolak')->whereMonth('created_at', '=', 4)->count();
        $Tolak_mei = Tolak::where('status', 'ditolak')->whereMonth('created_at', '=', 5)->count();
        $Tolak_jun = Tolak::where('status', 'ditolak')->whereMonth('created_at', '=', 6)->count();
        $Tolak_jul = Tolak::where('status', 'ditolak')->whereMonth('created_at', '=', 7)->count();
        $Tolak_aug = Tolak::where('status', 'ditolak')->whereMonth('created_at', '=', 8)->count();
        $Tolak_sep = Tolak::where('status', 'ditolak')->whereMonth('created_at', '=', 9)->count();
        $Tolak_okt = Tolak::where('status', 'ditolak')->whereMonth('created_at', '=', 10)->count();
        $Tolak_nov = Tolak::where('status', 'ditolak')->whereMonth('created_at', '=', 11)->count();
        $Tolak_des = Tolak::where('status', 'ditolak')->whereMonth('created_at', '=', 12)->count();

        $terima_jan = Siswa::where('role', 'siswa')->whereMonth('created_at', '=', 1)->count();
        $terima_feb = Siswa::where('role', 'siswa')->whereMonth('created_at', '=', 2)->count();
        $terima_mar = Siswa::where('role', 'siswa')->whereMonth('created_at', '=', 3)->count();
        $terima_apr = Siswa::where('role', 'siswa')->whereMonth('created_at', '=', 4)->count();
        $terima_mei = Siswa::where('role', 'siswa')->whereMonth('created_at', '=', 5)->count();
        $terima_jun = Siswa::where('role', 'siswa')->whereMonth('created_at', '=', 6)->count();
        $terima_jul = Siswa::where('role', 'siswa')->whereMonth('created_at', '=', 7)->count();
        $terima_aug = Siswa::where('role', 'siswa')->whereMonth('created_at', '=', 8)->count();
        $terima_sep = Siswa::where('role', 'siswa')->whereMonth('created_at', '=', 9)->count();
        $terima_okt = Siswa::where('role', 'siswa')->whereMonth('created_at', '=', 10)->count();
        $terima_nov = Siswa::where('role', 'siswa')->whereMonth('created_at', '=', 11)->count();
        $terima_des = Siswa::where('role', 'siswa')->whereMonth('created_at', '=', 12)->count();

        $mou1 = MOU::all();


        return view('dudi.index', compact('mou1','siswa','guru','mou','tolak','menunggu','menunggu_jan','menunggu_feb','menunggu_mar','menunggu_apr','menunggu_mei','menunggu_jun','menunggu_jul','menunggu_aug','menunggu_sep','menunggu_okt','menunggu_nov','menunggu_des','Tolak_jan',
        'Tolak_feb','Tolak_mar','Tolak_apr','Tolak_mei','Tolak_jun','Tolak_jul','Tolak_aug','Tolak_sep','Tolak_okt','Tolak_nov','Tolak_des',
        'terima_jan','terima_feb','terima_mar','terima_apr','terima_mei','terima_jun','terima_jul','terima_aug','terima_sep','terima_okt','terima_nov','terima_des',
    ));
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
     * @param  \App\Http\Requests\StoreDashboardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDashboardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDashboardRequest  $request
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDashboardRequest $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
