<?php

namespace App\Http\Controllers;

use App\Models\siswa_guru;
use App\Models\Siswa;
use App\Http\Requests\Storesiswa_guruRequest;
use App\Http\Requests\Updatesiswa_guruRequest;

class SiswaGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = Siswa::where('role', 'Siswa')->get();
        return view('siswa_guru.index', compact('siswas'));
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
     * @param  \App\Http\Requests\Storesiswa_guruRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storesiswa_guruRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\siswa_guru  $siswa_guru
     * @return \Illuminate\Http\Response
     */
    public function show(siswa_guru $siswa_guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\siswa_guru  $siswa_guru
     * @return \Illuminate\Http\Response
     */
    public function edit(siswa_guru $siswa_guru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatesiswa_guruRequest  $request
     * @param  \App\Models\siswa_guru  $siswa_guru
     * @return \Illuminate\Http\Response
     */
    public function update(Updatesiswa_guruRequest $request, siswa_guru $siswa_guru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\siswa_guru  $siswa_guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(siswa_guru $siswa_guru)
    {
        //
    }
}
