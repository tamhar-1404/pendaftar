<?php

namespace App\Http\Controllers;

use App\Models\Alumni_guru;
use App\Models\Siswa;
use App\Http\Requests\StoreAlumni_guruRequest;
use App\Http\Requests\UpdateAlumni_guruRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AlumniGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $siswaLogin = Auth::user();
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $siswas = Siswa::where([['role', 'alumni'], ['sekolah', $siswaLogin->sekolah], ['name', 'LIKE', '%'.$keyword.'%']])->get();
            return view('alumni_guru.index' , compact('siswas'));
        }
        $siswas = Siswa::where([['role', 'alumni'], ['sekolah', $siswaLogin->sekolah]])
                       ->get();
        return view('alumni_guru.index' , compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('alumni_guru.tabel');
    }

    /**
     * Store a newly created resource in Storage.
     *
     * @param  \App\Http\Requests\StoreAlumni_guruRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlumni_guruRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumni_guru  $alumni_guru
     * @return \Illuminate\Http\Response
     */
    public function show(Alumni_guru $alumni_guru)
    {
      return view('alumni_guru.view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumni_guru  $alumni_guru
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumni_guru $alumni_guru)
    {
        //
    }

    /**
     * Update the specified resource in Storage.
     *
     * @param  \App\Http\Requests\UpdateAlumni_guruRequest  $request
     * @param  \App\Models\Alumni_guru  $alumni_guru
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAlumni_guruRequest $request, Alumni_guru $alumni_guru)
    {
        //
    }

    /**
     * Remove the specified resource from Storage.
     *
     * @param  \App\Models\Alumni_guru  $alumni_guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumni_guru $alumni_guru)
    {
        //
    }
}
