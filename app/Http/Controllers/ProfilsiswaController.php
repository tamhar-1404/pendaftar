<?php

namespace App\Http\Controllers;

use App\Models\profilsiswa;
use App\Http\Requests\StoreprofilsiswaRequest;
use App\Http\Requests\UpdateprofilsiswaRequest;

class ProfilsiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profil_siswa.detail');
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
     * @param  \App\Http\Requests\StoreprofilsiswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreprofilsiswaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\profilsiswa  $profilsiswa
     * @return \Illuminate\Http\Response
     */
    public function show(profilsiswa $profilsiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\profilsiswa  $profilsiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(profilsiswa $profilsiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateprofilsiswaRequest  $request
     * @param  \App\Models\profilsiswa  $profilsiswa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateprofilsiswaRequest $request, profilsiswa $profilsiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\profilsiswa  $profilsiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(profilsiswa $profilsiswa)
    {
        //
    }
}
