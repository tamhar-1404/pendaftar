<?php

namespace App\Http\Controllers;

use App\Models\ProfileGuru;
use App\Http\Requests\StoreProfileGuruRequest;
use App\Http\Requests\UpdateProfileGuruRequest;

class ProfileGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profileguru.index');
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
     * @param  \App\Http\Requests\StoreProfileGuruRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfileGuruRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProfileGuru  $profileGuru
     * @return \Illuminate\Http\Response
     */
    public function show(ProfileGuru $profileGuru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProfileGuru  $profileGuru
     * @return \Illuminate\Http\Response
     */
    public function edit(ProfileGuru $profileGuru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfileGuruRequest  $request
     * @param  \App\Models\ProfileGuru  $profileGuru
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfileGuruRequest $request, ProfileGuru $profileGuru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProfileGuru  $profileGuru
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfileGuru $profileGuru)
    {
        //
    }
}
