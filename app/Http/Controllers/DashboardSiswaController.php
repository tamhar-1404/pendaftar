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
        return view('siswamagang.index', compact('tatib'));
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
