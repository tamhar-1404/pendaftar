<?php

namespace App\Http\Controllers;

use App\Models\piket_siswa;
use App\Http\Requests\Storepiket_siswaRequest;
use App\Http\Requests\Updatepiket_siswaRequest;

class PiketSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('piket_siswa.index');
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
     * @param  \App\Http\Requests\Storepiket_siswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storepiket_siswaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\piket_siswa  $piket_siswa
     * @return \Illuminate\Http\Response
     */
    public function show(piket_siswa $piket_siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\piket_siswa  $piket_siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(piket_siswa $piket_siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatepiket_siswaRequest  $request
     * @param  \App\Models\piket_siswa  $piket_siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Updatepiket_siswaRequest $request, piket_siswa $piket_siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\piket_siswa  $piket_siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(piket_siswa $piket_siswa)
    {
        //
    }
}
