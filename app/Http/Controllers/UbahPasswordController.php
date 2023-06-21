<?php

namespace App\Http\Controllers;

use App\Models\UbahPassword;
use App\Http\Requests\StoreUbahPasswordRequest;
use App\Http\Requests\UpdateUbahPasswordRequest;

class UbahPasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ubahpassword.index');
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
     * @param  \App\Http\Requests\StoreUbahPasswordRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUbahPasswordRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UbahPassword  $ubahPassword
     * @return \Illuminate\Http\Response
     */
    public function show(UbahPassword $ubahPassword)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UbahPassword  $ubahPassword
     * @return \Illuminate\Http\Response
     */
    public function edit(UbahPassword $ubahPassword)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUbahPasswordRequest  $request
     * @param  \App\Models\UbahPassword  $ubahPassword
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUbahPasswordRequest $request, UbahPassword $ubahPassword)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UbahPassword  $ubahPassword
     * @return \Illuminate\Http\Response
     */
    public function destroy(UbahPassword $ubahPassword)
    {
        //
    }
}
