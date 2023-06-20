<?php

namespace App\Http\Controllers;

use App\Models\LaporanSiswa;
use App\Http\Requests\StoreLaporanSiswaRequest;
use App\Http\Requests\UpdateLaporanSiswaRequest;

class LaporanSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('laporansiswa.index');
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
     * @param  \App\Http\Requests\StoreLaporanSiswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLaporanSiswaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LaporanSiswa  $laporanSiswa
     * @return \Illuminate\Http\Response
     */
    public function show(LaporanSiswa $laporanSiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LaporanSiswa  $laporanSiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(LaporanSiswa $laporanSiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLaporanSiswaRequest  $request
     * @param  \App\Models\LaporanSiswa  $laporanSiswa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLaporanSiswaRequest $request, LaporanSiswa $laporanSiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaporanSiswa  $laporanSiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(LaporanSiswa $laporanSiswa)
    {
        //
    }
}
