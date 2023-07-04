<?php

namespace App\Http\Controllers;

use App\Models\piket;
use App\Models\Siswa;
use App\Http\Requests\StorepiketRequest;
use App\Http\Requests\UpdatepiketRequest;
use Illuminate\Http\Request;


class PiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $siswa = Siswa::where('piket_id', $piketId)->first();
        $senin = piket::where('hari','LIKE', 'senin')->where('waktu', 'LIKE','pagi')->get();
        $selasa=piket::where('hari','LIKE', 'selasa')->where('waktu', 'LIKE','pagi')->get();
        $rabu=piket::where('hari','LIKE', 'rabu')->where('waktu', 'LIKE','pagi')->get();
        $kamis=piket::where('hari','LIKE', 'kamis')->where('waktu', 'LIKE','pagi')->get();
        $jumat=piket::where('hari','LIKE', 'jumat')->where('waktu', 'LIKE','pagi')->get();
        $catat=piket::where('id_siswa','LIKE', 'catatan')->where('waktu', 'LIKE','catatan')->get();
        $data = Siswa::all();

        return view('piket.index',compact('senin','selasa','rabu','kamis','jumat','catat','data'));
    }
    public function sore()  {
        $senin=piket::where('hari','LIKE', 'senin')->where('waktu', 'LIKE','sore')->get();
        $selasa=piket::where('hari','LIKE', 'selasa')->where('waktu', 'LIKE','sore')->get();
        $rabu=piket::where('hari','LIKE', 'rabu')->where('waktu', 'LIKE','sore')->get();
        $kamis=piket::where('hari','LIKE', 'kamis')->where('waktu', 'LIKE','sore')->get();
        $jumat=piket::where('hari','LIKE', 'jumat')->where('waktu', 'LIKE','sore')->get();
        $catat=piket::where('nama_siswa','LIKE', 'catatan')->where('waktu', 'LIKE','catatan')->get();

        return view('piket.sidebar_sore',compact('senin','selasa','rabu','kamis','jumat','catat'));
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
     * @param  \App\Http\Requests\StorepiketRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'waktu' =>"required",
            'hari' => "required"
        ]);
        $hari = $request->input('hari');
        $waktu = $request->input('waktu');

        $cek = piket::where('waktu', 'LIKE', $waktu)->where('hari', 'LIKE', $hari)->get();
        if($cek->count() > 0){
            return redirect()->back()->with('error', 'Data yang anda masukan sudah ada');
        }
        $nama_siswa = $request->input('nama_siswa');
        foreach ($nama_siswa as $item) {
            piket::create([
                'waktu' => $request->waktu,
                'hari' => $request->hari,
                'id_siswa' => $item
            ]);
        }
        return redirect()->route('piket.index');

    }
    
    public function rubah(Request $request){
        $hari = $request->input('hari');
        $waktu = $request->input('waktu');
        $rubah = $request->input('nama_siswa_rubah');
        if($rubah !== null){
            foreach ($rubah as $item){
                $cek = piket::find($item);
                $cek->delete();
                }
        }

        $nama_siswa = $request->input('nama_siswa');
        if($nama_siswa !== null){
            foreach ($nama_siswa as $item) {
                piket::create([
                    'waktu' => $request->waktu,
                    'hari' => $request->hari,
                    'nama_siswa' => $item
                ]);
            }
        }


        return redirect()->back()->with('sukses', 'Data telah di edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\piket  $piket
     * @return \Illuminate\Http\Response
     */
    public function show(piket $piket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\piket  $piket
     * @return \Illuminate\Http\Response
     */
    public function edit(piket $piket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepiketRequest  $request
     * @param  \App\Models\piket  $piket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, piket $piket)
    {
        $nama_siswa = $request->input('nama_siswa');
        foreach ($nama_siswa as $item) {
            $piket->update([
                'waktu' => $request->waktu,
                'hari' => $request->hari,
                'nama_siswa' => $item
            ]);
        }
        return redirect()->back()->with('sukses', 'Data telah di edit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\piket  $piket
     * @return \Illuminate\Http\Response
     */
    public function destroy(piket $piket)
    {
        //
    }
}
