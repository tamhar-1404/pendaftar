<?php

namespace App\Http\Controllers;

use App\Models\Guru_admin;
use App\Http\Requests\StoreGuru_adminRequest;
use App\Http\Requests\UpdateGuru_adminRequest;

class GuruAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('guru_admin.index');
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
     * @param  \App\Http\Requests\StoreGuru_adminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGuru_adminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guru_admin  $guru_admin
     * @return \Illuminate\Http\Response
     */
    public function show(Guru_admin $guru_admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guru_admin  $guru_admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru_admin $guru_admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGuru_adminRequest  $request
     * @param  \App\Models\Guru_admin  $guru_admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGuru_adminRequest $request, Guru_admin $guru_admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guru_admin  $guru_admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru_admin $guru_admin)
    {
        //
    }
}
