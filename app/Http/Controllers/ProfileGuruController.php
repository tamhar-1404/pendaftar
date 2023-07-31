<?php

namespace App\Http\Controllers;

use App\Models\ProfileGuru;
use App\Models\Guru_admin;
use App\Models\Siswa;
use Auth;
use App\Http\Requests\StoreProfileGuruRequest;
use App\Http\Requests\UpdateProfileGuruRequest;
use Illuminate\Http\Request;

class ProfileGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::where('sekolah' , Auth()->user()->sekolah)->get();
        $id_guru = Guru_admin::where('name', Auth()->user()->name)->first()->id;
        $guru = Guru_admin::where('name' , Auth()->user()->name)->get();
        return view('profileguru.index' , compact('guru' , 'siswa', 'id_guru'));
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
    public function edit($profileGuru)
    {
        $guru = Guru_admin::where('id', $profileGuru)->get();
        $profil_guru = Guru_admin::find($profileGuru);
        return view('profileguru.editprofile', compact('guru', 'profil_guru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfileGuruRequest  $request
     * @param  \App\Models\ProfileGuru  $profileGuru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $profileGuru)
    {
        $request->validate([

        ]);

        if ($request->has('image')) {
            $file = $request->file('image');
        }
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
