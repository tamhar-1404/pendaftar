<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\absensiadmin;
use App\Models\ApprovalIzin;
use App\Http\Requests\StoreabsensiadminRequest;
use App\Http\Requests\UpdateabsensiadminRequest;

class AbsensiadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('absensi_admin.index');
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
     * @param  \App\Http\Requests\StoreabsensiadminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
    
 
        
            'dari' => 'required',
            'sampai' => 'required',
            'keterangan'=> 'required',
            'deskripsi' => 'required',
            'bukti' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);
        $image = $request->file('bukti');
        $image->storeAs('public/bukti_izin', $image->hashName());
       
    
    ApprovalIzin::create([
            'nama' => $request->nama,   
            'sekolah' => $request->sekolah,
            'email' => $request->email,
            'dari' => $request->dari,
            'sampai' => $request->sampai,
            'keterangan' => $request->keterangan,
            'deskripsi' => $request->deskripsi,
            'status' => 'menunggu',
            'bukti' => $image->hashName()
        ]);
        // Mail::to($request->email)->send(new dataizinEmail($approvalIzin));
        return redirect()->route('absensi_siswa.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\absensiadmin  $absensiadmin
     * @return \Illuminate\Http\Response
     */
    public function show(absensiadmin $absensiadmin)
    {
        return view('absensi_admin.grafik');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\absensiadmin  $absensiadmin
     * @return \Illuminate\Http\Response
     */
    public function edit(absensiadmin $absensiadmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateabsensiadminRequest  $request
     * @param  \App\Models\absensiadmin  $absensiadmin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateabsensiadminRequest $request, absensiadmin $absensiadmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\absensiadmin  $absensiadmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(absensiadmin $absensiadmin)
    {
        //
    }
}
