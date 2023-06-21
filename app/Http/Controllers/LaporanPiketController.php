<?php

namespace App\Http\Controllers;

use App\Models\laporan_piket;
use App\Http\Requests\Storelaporan_piketRequest;
use App\Http\Requests\Updatelaporan_piketRequest;

class LaporanPiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('laporan_piket.index');
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
     * @param  \App\Http\Requests\Storelaporan_piketRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storelaporan_piketRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\laporan_piket  $laporan_piket
     * @return \Illuminate\Http\Response
     */
    public function show(laporan_piket $laporan_piket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\laporan_piket  $laporan_piket
     * @return \Illuminate\Http\Response
     */
    public function edit(laporan_piket $laporan_piket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatelaporan_piketRequest  $request
     * @param  \App\Models\laporan_piket  $laporan_piket
     * @return \Illuminate\Http\Response
     */
    public function update(Updatelaporan_piketRequest $request, laporan_piket $laporan_piket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\laporan_piket  $laporan_piket
     * @return \Illuminate\Http\Response
     */
    public function destroy(laporan_piket $laporan_piket)
    {
        //
    }
}
