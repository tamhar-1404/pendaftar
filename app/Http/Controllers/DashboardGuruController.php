<?php

namespace App\Http\Controllers;

use App\Models\dashbord_guru;
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
        return view('dashboard_guru.index');
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
