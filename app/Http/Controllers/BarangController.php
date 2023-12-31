<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Http\Requests\StoreBarangRequest;
use App\Http\Requests\UpdateBarangRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $barangs = Barang::query()
            ->when($request->cari, function ($query) use ($request) {
                $query->where('nama', 'LIKE', '%' . $request->cari . '%');
            })
            ->latest()
            ->paginate(10);
        $barangs->appends(['cari' => $request->cari]);
        return view('master.transaksi.goods-data-collection', compact('barangs'));
        // return view('barang.index',compact('barangs'));
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
     * Store a newly created resource in Storage.
     *
     * @param  \App\Http\Requests\StoreBarangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|max:225',
            'harga' => 'required|max:225|numeric',
            'deskripsi' => 'required|max:225',
            'kategori' => 'required',
            'foto' => 'required|image|mimes:png,jpg,jpeg',
            'kode' => 'required|unique:barangs,kode|max:225',
        ],[
            'nama.max' => 'nama maksimal 225 karakter',
            'harga.max' => 'harga maksimal 225 karakter',
            'deskripsi.max' => 'deskripsi maksimal 225 karakter',
            'kode.max' => 'kode maksimal 225 karakter',
        ]);

        try {
            $image = $request->file('foto');
            $image->storeAs('public/pendataanbarang', $image->hashName());

            Barang::create([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi,
                'kategori' => $request->kategori,
                'foto' => $image->hashName(),
                'kode' => $request->kode,
            ]);

            return redirect()->back()->with('success', 'Berhasil menambahkan data');
        } catch (\Illuminate\Database\QueryException $e) {

            return redirect()->back()->withErrors('Kode barang sudah ada!');
        }
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
     * Update the specified resource in Storage.
     *
     * @param  \App\Http\Requests\UpdateBarangRequest  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        try {
            if ($request->hasFile('foto')) {
                $this->validate($request, [
                    'nama' => 'required|max:225',
                    'foto' => 'required|image|mimes:png,jpg,jpeg',
                    'kode' => 'required|max:225|unique:barangs,kode,' . $barang->id,
                    'harga' => 'required|max:225|numeric',
                    'kategori' => 'required',
                    'deskripsi' => 'required|max:225'
                ],[
                    'nama.max' => 'nama maksimal 225 karakter',
                    'harga.max' => 'harga maksimal 225 karakter',
                    'deskripsi.max' => 'deskripsi maksimal 225 karakter',
                    'kode.max' => 'kode maksimal 225 karakter',
                ]);
                $image = $request->file('foto');
                $image->storeAs('public/pendataanbarang/', $image->hashName());
                if (Storage::exists('public/pendataanbarang/' . $barang->foto)) {
                    Storage::delete('public/pendataanbarang/' . $barang->foto);
                }

                $barang->update([
                    'nama' => $request->nama,
                    'kode' => $request->kode,
                    'harga' => $request->harga,
                    'kategori' => $request->kategori,
                    'foto' => $image->hashName(),
                    'deskripsi' => $request->deskripsi
                ]);
            } else {
                $this->validate($request, [
                    'nama' => 'required|max:225',
                    'kode' => 'required|max:225|unique:barangs,kode,' . $barang->id,
                    'harga' => 'required|max:225|numeric',
                    'kategori' => 'required',
                    'deskripsi' => 'required|max:225'
                ],[
                    'nama.max' => 'nama maksimal 225 karakter',
                    'harga.max' => 'harga maksimal 225 karakter',
                    'deskripsi.max' => 'deskripsi maksimal 225 karakter',
                    'kode.max' => 'kode maksimal 225 karakter',
                ]);
                $barang->update([
                    'nama' => $request->nama,
                    'kode' => $request->kode,
                    'harga' => $request->harga,
                    'kategori' => $request->kategori,
                    'deskripsi' => $request->deskripsi
                ]);
            }

            return redirect()->back()->with('success', 'Berhasil mengedit data');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Masukan data yang valid');
        }
    }


    /**
     * Remove the specified resource from Storage.
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
