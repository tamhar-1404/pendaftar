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
    public function index(Request $request)
    {
        $barang = Barang::all();
        $opname = Opname::query()
            ->when($request->cari, function ($query) use ($request) {
                $keyword = $request->cari;
                $query->whereHas('barang', function ($query) use ($keyword) {
                    $query->where('nama', 'LIKE', '%' . $keyword . '%');
                });
            })
            ->latest()
            ->paginate(10);
            $opname->appends(['cari' => $request->cari]);
        return view('master.transaksi.opname', compact('barang', 'opname'));
        // return view('opname.index', compact('barang', 'opname'));
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
        $request->validate([
            'stok' => 'required',
            'barang_id' => 'required',
            'kode_barang' => 'required',
        ]);
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
        $request->validate([
            'stok' => 'required|max:225',
        ],[
            'stok.max' => 'maksimal 225 karakter'
        ]);
        $old_stok = (int) $opname->stok;
        $new_stok = (int) $request->stok;
        $selisih_stok = $new_stok - $old_stok;
        $stok_barang = (int) Barang::find($opname->barang_id)->stok;

        $stok_baru = $stok_barang + $selisih_stok;
        if ($stok_baru < 0) {
            return back()->with('error', 'Stok tidak valid');
        }
        $opname->update([
            'stok' => $new_stok,
        ]);

        Barang::find($opname->barang_id)->update([
            'stok' => $stok_baru
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
        if ($stokBarang < 0) {
            return back()->with('error', 'Stok tidak valid');
        }
        $barang->update([
            'stok' => $stokBarang,
        ]);
        $opname->delete();
        return back();
    }
}
