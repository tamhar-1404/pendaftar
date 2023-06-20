<?php

namespace App\Http\Controllers;

use App\Models\absensiadmin;
use App\Http\Requests\StoreabsensiadminRequest;
use App\Http\Requests\UpdateabsensiadminRequest;

class AbsensiadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('absensi_admin.grafik');
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
     * @param  \App\Http\Requests\StoreabsensiadminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreabsensiadminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\absensiadmin  $absensiadmin
     * @return \Illuminate\Http\Response
     */
    public function show(absensiadmin $absensiadmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\absensiadmin  $absensiadmin
     * @return \Illuminate\Http\Response
     */
    public function edit(absensiadmin $absensiadmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateabsensiadminRequest  $request
     * @param  \App\Models\absensiadmin  $absensiadmin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateabsensiadminRequest $request, absensiadmin $absensiadmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\absensiadmin  $absensiadmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(absensiadmin $absensiadmin)
    {
        //
    }
}
