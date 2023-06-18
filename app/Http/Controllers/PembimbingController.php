<?php

namespace App\Http\Controllers;

use App\Models\Pembimbing;
use App\Http\Requests\StorePembimbingRequest;
use App\Http\Requests\UpdatePembimbingRequest;

class PembimbingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePembimbingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePembimbingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembimbing  $pembimbing
     * @return \Illuminate\Http\Response
     */
    public function show(Pembimbing $pembimbing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembimbing  $pembimbing
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembimbing $pembimbing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePembimbingRequest  $request
     * @param  \App\Models\Pembimbing  $pembimbing
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePembimbingRequest $request, Pembimbing $pembimbing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembimbing  $pembimbing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembimbing $pembimbing)
    {
        //
    }
}
