<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApprovalIzin;
use App\Http\Requests\Storeabsensi_siswaRequest;
use App\Http\Requests\Updateabsensi_siswaRequest;

class AbsensiSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $absensisiswa = ApprovalIzin::all();
       return view('absensi_siswa.index' , compact('absensisiswa'));
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
     * @param  \App\Http\Requests\Storeabsensi_siswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,ApprovalIzin $approvalIzin)
    {
        $telat='telat';
        $this->validate($request, [
            'nama' => 'required',       
            'tanggal' => 'date',
            'jam'=>'date_format:H:i', 'Asia/Jakarta',
            'keterangan'=> 'required',
        ]);
        // dd($request->jam);
        $keterangan = $request->keterangan;
        if($request->jam > '11:00' ){
               $keterangan = $request->jam;
                $keterangan = $telat;
        }

        // dd($keterangan);
        ApprovalIzin::create([
            'nama' => $request->nama,   
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'keterangan' => $keterangan,
            'status' => 'Diterima'
        ]);
        return redirect()->route('absensi_siswa.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\absensi_siswa  $absensi_siswa
     * @return \Illuminate\Http\Response
     */
    public function show(absensi_siswa $absensi_siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\absensi_siswa  $absensi_siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(absensi_siswa $absensi_siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateabsensi_siswaRequest  $request
     * @param  \App\Models\absensi_siswa  $absensi_siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Updateabsensi_siswaRequest $request, absensi_siswa $absensi_siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\absensi_siswa  $absensi_siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(absensi_siswa $absensi_siswa)
    {
        //
    }
}
