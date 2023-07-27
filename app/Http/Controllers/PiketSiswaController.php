<?php

namespace App\Http\Controllers;

use App\Models\Piket_siswa;
use App\Models\Piket;
use App\Http\Requests\StorePiket_siswaRequest;
use App\Http\Requests\UpdatePiket_siswaRequest;

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
        $senin = Piket::where('hari', 'LIKE', 'senin')->where('waktu', 'LIKE', 'pagi')->get();
        $selasa = Piket::where('hari', 'LIKE', 'selasa')->where('waktu', 'LIKE', 'pagi')->get();
        $rabu = Piket::where('hari', 'LIKE', 'rabu')->where('waktu', 'LIKE', 'pagi')->get();
        $kamis = Piket::where('hari', 'LIKE', 'kamis')->where('waktu', 'LIKE', 'pagi')->get();
        $jumat = Piket::where('hari', 'LIKE', 'jumat')->where('waktu', 'LIKE', 'pagi')->get();
        $catat = Piket::where('id_siswa', 'LIKE', 'catatan')->where('waktu', 'LIKE', 'catatan')->get();

        $senin_sore= Piket::where('hari', 'LIKE', 'senin')->where('waktu', 'LIKE', 'sore')->get();
        $selasa_sore = Piket::where('hari', 'LIKE', 'selasa')->where('waktu', 'LIKE', 'sore')->get();
        $rabu_sore = Piket::where('hari', 'LIKE', 'rabu')->where('waktu', 'LIKE', 'sore')->get();
        $kamis_sore= Piket::where('hari', 'LIKE', 'kamis')->where('waktu', 'LIKE', 'sore')->get();
        $jumat_sore= Piket::where('hari', 'LIKE', 'jumat')->where('waktu', 'LIKE', 'sore')->get();
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
     * @param  \App\Http\Requests\StorePiket_siswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePiket_siswaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Piket_siswa  $Piket_siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Piket_siswa $Piket_siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Piket_siswa  $Piket_siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Piket_siswa $Piket_siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePiket_siswaRequest  $request
     * @param  \App\Models\Piket_siswa  $Piket_siswa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePiket_siswaRequest $request, Piket_siswa $Piket_siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Piket_siswa  $Piket_siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Piket_siswa $Piket_siswa)
    {
        //
    }
}
