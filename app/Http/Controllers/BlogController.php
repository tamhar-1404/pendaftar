<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::paginate(6);
        return view('Berita.index', compact('blog'));
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
     * @param  \Illuminate\Http\Request  $request
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

        Blog::create([
            'name' => auth()->user()->name,
            'foto' => $image->hashName(),
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'tanggal' => Carbon::now()->format('Y-m-d'),
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori
        ]);
        return redirect()->route('Berita.index')->with('success', 'Data berita berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($blog)
    {
        $berita = Blog::find($blog);
        return view('Berita.detail', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog, $id)
    {
        $blog = Blog::find($id);
        return view('Berita.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog, $id)
    {
        // Temukan data berita berdasarkan ID
        $blog = Blog::find($id);

        $this->validate($request, [
            'judul' => 'required',
            'keterangan' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required'
        ]);

        if ($request->hasFile('foto')) {
            // Unggah dan simpan gambar baru
            $image = $request->file('foto');
            $image->storeAs('storage/fotoberita/', $image->hashName());

            // Hapus gambar lama jika ada
            if ($blog->foto !== null) {
                Storage::delete('storage/fotoberita/' . $blog->foto);
            }

            // $blog->foto = $image->hashName();

            $blog->update([
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
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        // Temukan data berita berdasarkan ID
        $blog = Blog::findOrFail($id);

        // Hapus gambar terkait jika ada
        if ($blog->foto) {
            Storage::delete('storage/fotoberita/' . $blog->foto);
        }

        // Hapus data berita
        $blog->delete();

        return redirect()->route('Berita.index')->with('success', 'Data berita berhasil dihapus');
    }


    public function like(Blog $blog, $blogId)
    {
        $blog = Blog::find($blogId);
        $isLikedByUser = $blog->isLikedByUser();
        $blog->like();
        return redirect()->back();
    }

    public function unlike(Blog $blog, $blogId)
    {
        $blog = Blog::find($blogId);
        $isLikedByUser = $blog->isLikedByUser();
        $blog->unlike();
        return redirect()->back();
    }
}
