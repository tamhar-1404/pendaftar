<?php

namespace App\Http\Controllers;

use App\Models\TataTertib;
use App\Http\Requests\StoreTataTertibRequest;
use App\Http\Requests\UpdateTataTertibRequest;

class TataTertibController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tatatertib.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tatatertib.laycreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTataTertibRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTataTertibRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TataTertib  $tataTertib
     * @return \Illuminate\Http\Response
     */
    public function show(TataTertib $tataTertib)
    {
        return view('tatatertib.laydetail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TataTertib  $tataTertib
     * @return \Illuminate\Http\Response
     */
    public function edit(TataTertib $tataTertib)
    {
        return view('tatatertib.layedit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTataTertibRequest  $request
     * @param  \App\Models\TataTertib  $tataTertib
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTataTertibRequest $request, TataTertib $tataTertib)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TataTertib  $tataTertib
     * @return \Illuminate\Http\Response
     */
    public function destroy(TataTertib $tataTertib)
    {
        //
    }
}
