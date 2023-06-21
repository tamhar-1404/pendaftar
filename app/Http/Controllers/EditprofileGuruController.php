<?php

namespace App\Http\Controllers;

use App\Models\EditprofileGuru;
use App\Http\Requests\StoreEditprofileGuruRequest;
use App\Http\Requests\UpdateEditprofileGuruRequest;

class EditprofileGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profileguru.editprofile');
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
     * @param  \App\Http\Requests\StoreEditprofileGuruRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEditprofileGuruRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EditprofileGuru  $editprofileGuru
     * @return \Illuminate\Http\Response
     */
    public function show(EditprofileGuru $editprofileGuru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EditprofileGuru  $editprofileGuru
     * @return \Illuminate\Http\Response
     */
    public function edit(EditprofileGuru $editprofileGuru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEditprofileGuruRequest  $request
     * @param  \App\Models\EditprofileGuru  $editprofileGuru
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEditprofileGuruRequest $request, EditprofileGuru $editprofileGuru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EditprofileGuru  $editprofileGuru
     * @return \Illuminate\Http\Response
     */
    public function destroy(EditprofileGuru $editprofileGuru)
    {
        //
    }
}
