<?php

namespace App\Http\Controllers;

use App\Models\Berita_Siswa;
use App\Http\Requests\StoreBerita_SiswaRequest;
use App\Http\Requests\UpdateBerita_SiswaRequest;

class BeritaSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('berita_siswa.index');
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
     * @param  \App\Http\Requests\StoreBerita_SiswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBerita_SiswaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita_Siswa  $berita_Siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Berita_Siswa $berita_Siswa)
    {
        return view('berita_siswa.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita_Siswa  $berita_Siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita_Siswa $berita_Siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBerita_SiswaRequest  $request
     * @param  \App\Models\Berita_Siswa  $berita_Siswa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBerita_SiswaRequest $request, Berita_Siswa $berita_Siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita_Siswa  $berita_Siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita_Siswa $berita_Siswa)
    {
        //
    }
}
