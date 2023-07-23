<?php

namespace App\Http\Controllers;

use App\Models\profilsiswa;
use App\Models\User;
use App\Models\Siswa;
use App\Http\Requests\StoreprofilsiswaRequest;
use App\Http\Requests\UpdateprofilsiswaRequest;
use Illuminate\Support\Facades\Auth;

class ProfilsiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Siswa = Siswa::Where('id', Auth()->user()->siswa_id)->get();
        // dd($Siswa);
        return view('profil_siswa.detail', compact('Siswa'));
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
        return view('profil_siswa.edit');
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
