<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Http\Requests\StoreBarangRequest;
use App\Http\Requests\UpdateBarangRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        $barangs = Barang::all();
        return view('barang.index',compact('barang','barangs'));
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
     * @param  \App\Http\Requests\StoreBarangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama'=>'required',
            'harga'=>'required',
            'deskripsi'=>'required',
            'kategori'=>'required',
            'foto'=>'required',
            'kode'=>'required'
        ]);
        $image = $request->file('foto');
        $image->storeAs('public/pendataanbarang', $image->hashName());
        Barang::create([
            'nama'=>$request->nama,
            'harga'=>$request->harga,
            'deskripsi'=>$request->deskripsi,
            'kategori'=>$request->kategori,
            'foto'=>$image->hashName(),
            'kode'=>$request->kode,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBarangRequest  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang )
    {
        // dd($request);
      $this->validate($request ,[
        'nama'=>'required',
        'kode'=>'required',
        'harga'=>'required',
        'kategori'=>'required',
        'deskripsi'=>'required'
      ]);
      if ($request->hasFile('foto')) {

        $image = $request->file('foto');
        $image->storeAs('public/pendataanbarang', $image->hashName());

        Storage::delete('public/pendataanbarang/'.$barang->image);

    $barang->update([
        'nama'=>$request->nama,
        'kode'=>$request->kode,
        'harga'=>$request->harga,
        'kategori'=>$request->kategori,
        'foto'=>$image->hashName(),
        'deskripsi'=>$request->deskripsi
    ]);
}else{
    $barang->update([
        'nama'=>$request->nama,
        'kode'=>$request->kode,
        'harga'=>$request->harga,
        'kategori'=>$request->kategori,
        'deskripsi'=>$request->deskripsi
    ]);
    }
    return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {

        Storage::delete('public/pendataanbarang/'. $barang->foto);
        $barang->delete();
        return redirect()->back();
    }
}
