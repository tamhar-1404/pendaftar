<?php

namespace App\Http\Controllers;

use App\Models\Berita_Siswa;
use App\Models\Blog;
use App\Http\Requests\StoreBerita_SiswaRequest;
use App\Http\Requests\UpdateBerita_SiswaRequest;

class BeritaSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Blog = Blog::latest()->paginate(5);
        return view('berita_siswa.index', compact('Blog'));
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
     * @param  \App\Http\Requests\StoreBerita_SiswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBerita_SiswaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita_Siswa  $berita_Siswa
     * @return \Illuminate\Http\Response
     */
    public function show($berita_Siswa)
    {
        // dd($berita_Siswa);
        $berita = Blog::find($berita_Siswa);
        return view('berita_siswa.detail', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita_Siswa  $berita_Siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita_Siswa $berita_Siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBerita_SiswaRequest  $request
     * @param  \App\Models\Berita_Siswa  $berita_Siswa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBerita_SiswaRequest $request, Berita_Siswa $berita_Siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita_Siswa  $berita_Siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita_Siswa $berita_Siswa)
    {
        //
    }
}
