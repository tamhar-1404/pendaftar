<?php

namespace App\Http\Controllers;

use App\Models\jurnalsiswa;
use App\Http\Requests\StorejurnalsiswaRequest;
use App\Http\Requests\UpdatejurnalsiswaRequest;
use Illuminate\Http\Request;


class JurnalsiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = jurnalsiswa::paginate(10);
        return view('jurnal_siswa.index',compact('item'));
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
     * @param  \App\Http\Requests\StorejurnalsiswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' =>"required",
            'tanggal' => "required",
            'sekolah' => "required",
            'kegiatan'  => "required",
            'image'  => "required"

        ]);

        $image = $request->file('image');
        $image->storeAs('public/image', $image->hashName());

        jurnalsiswa::create([
            'image'=>$image->hashName(),
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'sekolah' => $request->sekolah,
            'kegiatan'=>$request->kegiatan,

        ]);

        return redirect()->route('jurnalsiswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jurnalsiswa  $jurnalsiswa
     * @return \Illuminate\Http\Response
     */
    public function show(jurnalsiswa $jurnalsiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jurnalsiswa  $jurnalsiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(jurnalsiswa $jurnalsiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatejurnalsiswaRequest  $request
     * @param  \App\Models\jurnalsiswa  $jurnalsiswa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatejurnalsiswaRequest $request, jurnalsiswa $jurnalsiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jurnalsiswa  $jurnalsiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(jurnalsiswa $jurnalsiswa)
    {
        //
    }
}
