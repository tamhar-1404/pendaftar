<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::paginate(10);
        return view('Berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBeritaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'foto' => 'required', // Aturan validasi untuk gambar
            'judul' => 'required',
            'keterangan' => 'required',
            'deskripsi'  => 'required',
            'kategori'  => 'required'
        ]);
        $image = $request->file('foto');
        $image->storeAs('public/fotoberita', $image->hashName());

        Berita::create([
            'foto' => $image->hashName(),
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori
        ]);
        return redirect()->route('Berita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        return view('Berita.detail', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        return view('Berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBeritaRequest  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        $this->validate($request, [
            'foto' => 'required|image', // Aturan validasi untuk gambar
            'judul' => 'required',
            'keterangan' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required'
        ]);

        if ($request->hasFile('foto')) {
            // Unggah dan simpan gambar baru
            $image = $request->file('foto');
            $imagePath = $image->storeAs('storage/fotoberita', $image->hashName());

            // Hapus gambar lama jika ada
            if ($berita->foto) {
                Storage::delete('storage/fotoberita/' . $berita->foto);
            }

            $berita->foto = $image->hashName();


            $berita->update([
                'foto' => $image->hashName(),
                'judul' => $request->judul,
                'keterangan' => $request->keterangan,
                'tanggal' => $request->tanggal,
                'deskripsi' => $request->deskripsi,
                'kategori' => $request->kategori
            ]);
            return redirect()->route('Berita.index');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Temukan data berita berdasarkan ID
        $berita = Berita::findOrFail($id);

        // Hapus gambar terkait jika ada
        if ($berita->foto) {
            Storage::delete('storage/fotoberita/' . $berita->foto);
        }

        // Hapus data berita
        $berita->delete();

        return redirect()->route('Berita.index')->with('success', 'Data berita berhasil dihapus');
    }
}
