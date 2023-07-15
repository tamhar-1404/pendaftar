<?php

namespace App\Http\Controllers;

use App\Models\SiswaAlumni;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSiswaAlumniRequest;
use App\Http\Requests\UpdateSiswaAlumniRequest;
use App\Mail\Certificate;
use Illuminate\Support\Facades\Mail;

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
<<<<<<< HEAD

    if ($request->has('cari')) {
        $keyword = $request->cari;
        $aprovals = Siswa::where('name', 'LIKE', '%' . $keyword . '%')->orWhere('jurusan', 'LIKE', '%' . $keyword . '%')->paginate(3);
        return view('alumni_admin.index', compact('aprovals', 'alumni'));
    }

    $aprovals = Siswa::latest()->paginate(3);
    return view('alumni_admin.index', ['alumni' => $alumni], compact('aprovals'));
=======
    $list_alumni = Siswa::where('role', 'alumni')->get();
    return view('alumni_admin.index', compact('alumni', 'list_alumni'));
>>>>>>> 34382e7c6b176700470cf140b400c02155c62b64
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
    public function store(Request $request)
    {
        $request->validate([
            'sertifikat' => 'required',
        ]);
        $sertifikat = $request->file('sertifikat');
        $sertifikat_name = $sertifikat->hashName();
        $sertifikat->storeAs('public/certificate', $sertifikat_name);
        $data = [
            'sertifikat' => $sertifikat_name,
        ];
        Mail::to($request->email)->send(new Certificate($data));
        return back()->with('success', 'Berhasil mengirim sertifikat',);
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
