<?php

namespace App\Http\Controllers;

use App\Models\pelanggaran;
use Illuminate\Http\Request;

class PelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggaran = pelanggaran::latest()->paginate(5);
        return view('pelanggaran_admin.index', compact('pelanggaran')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggaran_admin.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
     
        $this->validate($request, [
            'nama' => 'required',
            'tanggal' => 'required',
            'sekolah' => 'required',
            'pelanggaran' => 'required'   
        ]);
    
       pelanggaran::create([
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'sekolah' => $request->sekolah,
            'pelanggaran' => $request->pelanggaran
        ]);
        return redirect()->route('approvalizin.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function show(pelanggaran $pelanggaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function edit(pelanggaran $pelanggaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pelanggaran $pelanggaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(pelanggaran $pelanggaran)
    {
        //
    }
}
