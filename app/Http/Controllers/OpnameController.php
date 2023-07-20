<?php

namespace App\Http\Controllers;

use App\Models\Opname;
use App\Http\Requests\StoreOpnameRequest;
use App\Http\Requests\UpdateOpnameRequest;
use App\Models\Barang;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OpnameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        $opname = Opname::all();
        // dd($opname);
        return view('opname.index', compact('barang', 'opname'));
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
     * @param  \App\Http\Requests\StoreOpnameRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tanggal = Carbon::now()->format('Y-m-d');
        $oldstok = (int) Barang::find($request->barang_id)->stok;
        $stok = $oldstok + (int) $request->stok;
        Barang::findOrFail($request->barang_id)->update([
            'stok' => $stok,
        ]);

        Opname::create([
            'barang_id' => $request->barang_id,
            'tanggal' => $tanggal,
            'stok' => (int) $request->stok,
        ]);
        return back()->with('success', 'Berhasil menambah stok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Opname  $opname
     * @return \Illuminate\Http\Response
     */
    public function show(Opname $opname)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Opname  $opname
     * @return \Illuminate\Http\Response
     */
    public function edit(Opname $opname)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOpnameRequest  $request
     * @param  \App\Models\Opname  $opname
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Opname $opname)
    {
        $old_stok = (int) $opname->stok;
        $new_stok = (int) $request->stok;
        $selisih_stok = $new_stok - $old_stok;
        $stok_barang = (int) Barang::find($opname->barang_id)->stok;

        $opname->update([
            'stok' => $new_stok,
        ]);

        Barang::find($opname->barang_id)->update([
            'stok' => $stok_barang + $selisih_stok,
        ]);
        return back()->with('success', 'Berhasil mengedit barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Opname  $opname
     * @return \Illuminate\Http\Response
     */
    public function destroy(Opname $opname)
    {
        // dd($opname->stok, $opname->barang_id);
        $barang = Barang::find($opname->barang_id);
        $stokBarang = (int) $barang->stok - (int) $opname->stok;
        $barang->update([
            'stok' => $stokBarang,
        ]);
        $opname->delete();
        return back();
    }
}
