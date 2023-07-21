<?php

namespace App\Http\Controllers;

use App\Models\JurnalGuru;
use App\Models\Jurnalsiswa;
use App\Models\Siswa;
use App\Http\Requests\StoreJurnalGuruRequest;
use App\Http\Requests\UpdateJurnalGuruRequest;
use Auth;
class JurnalGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Auth::user();
        $jurnals = Jurnalsiswa::where('sekolah', $guru->sekolah)
                       ->get();
        return view('jurnal_guru.index' , compact('jurnals'));
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
     * @param  \App\Http\Requests\StoreJurnalGuruRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJurnalGuruRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JurnalGuru  $jurnalGuru
     * @return \Illuminate\Http\Response
     */
    public function show(JurnalGuru $jurnalGuru)
    {
        return view('jurnal_guru.grafik');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JurnalGuru  $jurnalGuru
     * @return \Illuminate\Http\Response
     */
    public function edit(JurnalGuru $jurnalGuru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJurnalGuruRequest  $request
     * @param  \App\Models\JurnalGuru  $jurnalGuru
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJurnalGuruRequest $request, JurnalGuru $jurnalGuru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JurnalGuru  $jurnalGuru
     * @return \Illuminate\Http\Response
     */
    public function destroy(JurnalGuru $jurnalGuru)
    {
        //
    }
}
