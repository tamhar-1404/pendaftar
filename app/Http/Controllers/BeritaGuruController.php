<?php

namespace App\Http\Controllers;

use App\Models\BeritaGuru;
use App\Http\Requests\StoreBeritaGuruRequest;
use App\Http\Requests\UpdateBeritaGuruRequest;

class BeritaGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Berita_guru.index');
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
    public function show(BeritaGuru $beritaGuru)
    {
       //
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
     * Update the specified resource in storage.
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
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BeritaGuru  $beritaGuru
     * @return \Illuminate\Http\Response
     */
    public function destroy(BeritaGuru $beritaGuru)
    {
        //
    }
}
