<?php

namespace App\Http\Controllers;

use App\Models\piket_siswa;
use App\Models\Piket;
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
        // Sisa kode yang ada sebelumnya
        $senin = piket::where('hari', 'LIKE', 'senin')->where('waktu', 'LIKE', 'pagi')->get();
        $selasa = piket::where('hari', 'LIKE', 'selasa')->where('waktu', 'LIKE', 'pagi')->get();
        $rabu = piket::where('hari', 'LIKE', 'rabu')->where('waktu', 'LIKE', 'pagi')->get();
        $kamis = piket::where('hari', 'LIKE', 'kamis')->where('waktu', 'LIKE', 'pagi')->get();
        $jumat = piket::where('hari', 'LIKE', 'jumat')->where('waktu', 'LIKE', 'pagi')->get();
        $catat = piket::where('id_siswa', 'LIKE', 'catatan')->where('waktu', 'LIKE', 'catatan')->get();

        $senin_sore= piket::where('hari', 'LIKE', 'senin')->where('waktu', 'LIKE', 'sore')->get();
        $selasa_sore = piket::where('hari', 'LIKE', 'selasa')->where('waktu', 'LIKE', 'sore')->get();
        $rabu_sore = piket::where('hari', 'LIKE', 'rabu')->where('waktu', 'LIKE', 'sore')->get();
        $kamis_sore= piket::where('hari', 'LIKE', 'kamis')->where('waktu', 'LIKE', 'sore')->get();
        $jumat_sore= piket::where('hari', 'LIKE', 'jumat')->where('waktu', 'LIKE', 'sore')->get();
        return view('piket_siswa.index', compact('senin', 'selasa', 'rabu', 'kamis', 'jumat','senin_sore', 'selasa_sore', 'rabu_sore', 'kamis_sore', 'jumat_sore', 'catat'));
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
