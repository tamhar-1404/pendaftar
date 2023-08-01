<?php

namespace App\Http\Controllers;

use App\Models\BeritaGuru;
use App\Http\Requests\StoreBeritaGuruRequest;
use App\Http\Requests\UpdateBeritaGuruRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BeritaGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('berita_guru.detail', compact('berita'));
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
     * @param  \App\Http\Requests\StoreBeritaGuruRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBeritaGuruRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BeritaGuru  $beritaGuru
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $berita = Blog::all();
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $berita = Blog::where('nama', 'LIKE', '%' . $keyword . '%')->orWhere('tanggal', 'LIKE', '%' . $keyword . '%')->paginate(6);
            return view('berita_guru.detail', compact('berita'));
    
            $berita->appends(['cari' => $keyword]);
            return view('berita_guru.detail', compact('berita'));
    
        }
        $berita = Blog::latest()->paginate(6);

       return view('berita_guru.detail', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BeritaGuru  $beritaGuru
     * @return \Illuminate\Http\Response
     */
    public function edit(BeritaGuru $beritaGuru)
    {
        //
    }

    /**
     * Update the specified resource in Storage.
     *
     * @param  \App\Http\Requests\UpdateBeritaGuruRequest  $request
     * @param  \App\Models\BeritaGuru  $beritaGuru
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBeritaGuruRequest $request, BeritaGuru $beritaGuru)
    {
        //
    }

    /**
     * Remove the specified resource from Storage.
     *
     * @param  \App\Models\BeritaGuru  $beritaGuru
     * @return \Illuminate\Http\Response
     */
    public function destroy(BeritaGuru $beritaGuru)
    {
        //
    }
}
