<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Guru_admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $guru = Guru_admin::where('name', Auth::user()->name)->first();
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $blogs = Blog::where('judul', 'LIKE', '%'.$keyword.'%')->get();
            return view('Berita_guru.index', compact('blogs', 'guru'));
        }
        $blogs = Blog::all();
        return view('Berita_guru.index', compact('blogs', 'guru'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita = Blog::find($id);
        return view('Berita_guru.detail', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in Storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from Storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog )
    {
        $blog->delete();
        return redirect()->back();
    }
}
