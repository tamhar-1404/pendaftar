<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApprovalIzin;
use App\Http\Requests\Storeabsensi_siswaRequest;
use App\Http\Requests\Updateabsensi_siswaRequest;
use Auth;

class AbsensiSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terima = ApprovalIzin::where('status', 'terimaabsen')->where('nama', Auth::user()->name )
        ->get();
        $currentHour = now()->format('H:i');
        $currentDateTime = date('Y-m-d');
        $data= ApprovalIzin::where('nama', Auth::user()->name)->where('tanggal',$currentDateTime)->count();
        if($data === 0){
            if($currentHour > '16:00'){
                ApprovalIzin::create([
                    'nama' => Auth::user()->name,
                    'sekolah'=> Auth::user()->sekolah ,
                    'tanggal' =>$currentDateTime ,
                    'jam' => $currentHour,
                    'keterangan' => 'Alfa',
                    'status' => 'terimaabsen'
                ]);
            }
        }
        $telat = ApprovalIzin::where('keterangan', 'telat')->count();
        $hadir = ApprovalIzin::where('keterangan', 'hadir')->count() + $telat;
        $izin = ApprovalIzin::where('keterangan', 'izin')->count();
        $sakit = ApprovalIzin::where('keterangan', 'sakit')->count();
        $alfa = ApprovalIzin::where('keterangan', 'alfa')->count();
        $izinsakit = $izin + $sakit;
        $all = ApprovalIzin::where('nama', Auth::user()->name)->count();
       return view('absensi_siswa.index' , compact('terima','hadir','telat','all','alfa','izinsakit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, ApprovalIzin $approvalIzin)
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
        $nama = Auth::user()->name;
        $tanggal = $request->input('tanggal');

        $cek = ApprovalIzin::where('nama', $nama)->where('tanggal', $tanggal)->get();
        if($cek->count() > 0){
            return redirect()->back()->with('error', 'Data yang anda masukan sudah ada');
        }
        // dd($keterangan);
        ApprovalIzin::create([
            'nama' => $request->nama,
            'sekolah' => $request->sekolah,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'keterangan' => $keterangan,
            'status' => 'terimaabsen'
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
    public function edit(Request $request, ApprovalIzin $approvalIzin)
    {
          // dd($request);
          $this->validate($request, [
            'nama' => 'required',
            'sekolah' => 'required',
            'email' => 'required',
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
            'status2' => 'menunggu',
            'bukti' => $image->hashName()
        ]);
        Mail::to($request->email)->send(new dataizinEmail($approvalIzin));
        return redirect()->route('absensi_siswa.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
