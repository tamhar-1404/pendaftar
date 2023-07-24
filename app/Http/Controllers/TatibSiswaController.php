<?php

namespace App\Http\Controllers;

use App\Models\TatibSiswa;
use App\Models\TataTertib;
use App\Http\Requests\StoreTatibSiswaRequest;
use App\Http\Requests\UpdateTatibSiswaRequest;

class TatibSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $tatib = TataTertib::latest()->paginate(5);
        return view('tatib_siswa.index' , compact('tatib'));
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
     * @param  \App\Http\Requests\StoreTatibSiswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTatibSiswaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TatibSiswa  $tatibSiswa
     * @return \Illuminate\Http\Response
     */
    public function show(TatibSiswa $tatibSiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TatibSiswa  $tatibSiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(TatibSiswa $tatibSiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTatibSiswaRequest  $request
     * @param  \App\Models\TatibSiswa  $tatibSiswa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTatibSiswaRequest $request, TatibSiswa $tatibSiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TatibSiswa  $tatibSiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(TatibSiswa $tatibSiswa)
    {
        //
    }
}
