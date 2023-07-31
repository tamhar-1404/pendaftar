<?php

namespace App\Http\Controllers;

use App\Models\Siswa_guru;
use App\Models\Siswa;
use App\Models\Laporansiswa;
use App\Models\Guru_admin;
use Illuminate\Http\Request;
use App\Http\Requests\Storesiswa_guruRequest;
use App\Http\Requests\Updatesiswa_guruRequest;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class SiswaGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sekolah = FacadesAuth::user()->sekolah;
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $guru = Guru_admin::where('email' , Auth()->user()->email)->get();
            $siswas = Siswa::where([['name', 'LIKE', '%'.$keyword.'%'],['role', 'Siswa'], ['sekolah', $sekolah]])->get();
            return view('siswa_guru.index', compact('siswas' , 'guru'));
        }
        $guru = Guru_admin::where('name', Auth()->user()->name)->get();
        $siswas = Siswa::where([['role', 'siswa'], ['sekolah', $sekolah]])->get();
        return view('siswa_guru.index', compact('siswas' , 'guru'));
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
     * @param  \App\Http\Requests\Storesiswa_guruRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storesiswa_guruRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\siswa_guru  $siswa_guru
     * @return \Illuminate\Http\Response
     */
    public function show( Siswa_guru $siswa_guru)
    {

    }
    public function profilesiswa(Request $request)
    {
        $Siswa=Siswa::find($request->id);
        $pelanggaran = Laporansiswa::Where('name', $Siswa->name)->get();
        $sp = "Sp1";
        $guru = Guru_admin::where('email' , Auth()->user()->email)->get();
        return view ('profilesiswa_guru.index', compact('Siswa', 'guru', 'sp', 'pelanggaran'));}
    /**
    * Update the specified resource in storage.
    *
    * @param  \App\Http\Requests\Updatesiswa_guruRequest  $request
    * @param  \App\Models\siswa_guru  $siswa_guru
    * @return \Illuminate\Http\Response
    */
    public function edit(siswa_guru $siswa_guru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatesiswa_guruRequest  $request
     * @param  \App\Models\siswa_guru  $siswa_guru
     * @return \Illuminate\Http\Response
     */
    public function update(Updatesiswa_guruRequest $request, siswa_guru $siswa_guru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\siswa_guru  $siswa_guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(siswa_guru $siswa_guru)
    {
        //
    }
}
