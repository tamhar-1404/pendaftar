<?php

namespace App\Http\Controllers;

use App\Models\SiswaAlumni;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSiswaAlumniRequest;
use App\Http\Requests\UpdateSiswaAlumniRequest;

class SiswaAlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $alumni = Siswa::where('role', 'alumni')->get();

    if ($request->has('cari')) {
        $keyword = $request->cari;
        $aprovals = Siswa::where('name', 'LIKE', '%' . $keyword . '%')->orWhere('jurusan', 'LIKE', '%' . $keyword . '%')->paginate(3);
        return view('alumni_admin.index', compact('aprovals', 'alumni'));
    }

    $aprovals = Siswa::latest()->paginate(3);
    return view('alumni_admin.index', ['alumni' => $alumni], compact('aprovals'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumni_admin.tabel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSiswaAlumniRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSiswaAlumniRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiswaAlumni  $siswaAlumni
     * @return \Illuminate\Http\Response
     */
    public function show(SiswaAlumni $siswaAlumni)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SiswaAlumni  $siswaAlumni
     * @return \Illuminate\Http\Response
     */
    public function edit(SiswaAlumni $siswaAlumni)
    {
        $alumni = Siswa::where('role', 'alumni')->get();
        return view('alumni_admin.detail', compact('alumni'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSiswaAlumniRequest  $request
     * @param  \App\Models\SiswaAlumni  $siswaAlumni
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSiswaAlumniRequest $request, SiswaAlumni $siswaAlumni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiswaAlumni  $siswaAlumni
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiswaAlumni $siswaAlumni)
    {
        //
    }
}
