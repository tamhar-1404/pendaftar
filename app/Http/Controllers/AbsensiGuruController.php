<?php

namespace App\Http\Controllers;

use App\Models\absensi_guru;
use App\Http\Requests\Storeabsensi_guruRequest;
use App\Http\Requests\Updateabsensi_guruRequest;

class AbsensiGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('absensi_guru.grafik');
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
     * @param  \App\Http\Requests\Storeabsensi_guruRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeabsensi_guruRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\absensi_guru  $absensi_guru
     * @return \Illuminate\Http\Response
     */
    public function show(absensi_guru $absensi_guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\absensi_guru  $absensi_guru
     * @return \Illuminate\Http\Response
     */
    public function edit(absensi_guru $absensi_guru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateabsensi_guruRequest  $request
     * @param  \App\Models\absensi_guru  $absensi_guru
     * @return \Illuminate\Http\Response
     */
    public function update(Updateabsensi_guruRequest $request, absensi_guru $absensi_guru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\absensi_guru  $absensi_guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(absensi_guru $absensi_guru)
    {
        //
    }
}
