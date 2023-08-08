<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\JurnalGuru;
use App\Models\Jurnalsiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreJurnalGuruRequest;
use App\Http\Requests\UpdateJurnalGuruRequest;
use App\Models\Guru_admin;

class JurnalGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $guru = Guru_admin::where('name', Auth::user()->name)->first();
    if ($request->has('cari')) {
        $keyword = $request->cari;
        $jurnals = Jurnalsiswa::whereHas('siswa', function ($q) use ($keyword) {
            $q->where([['name', 'LIKE', '%'.$keyword.'%'], ['sekolah', Auth::user()->sekolah]])
            ->orWhere([['tanggal', 'LIKE', '%'.$keyword.'%'], ['sekolah', Auth::user()->sekolah]]);
        })
            ->paginate(5);
    } else {
        $jurnals = Jurnalsiswa::whereHas('siswa', function ($q) {
            $q->where('sekolah', Auth::user()->sekolah);
        })
            ->latest()
            ->paginate(5);
    }
    return view('jurnal_guru.index', compact('jurnals', 'guru'));
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
     * @param  \App\Http\Requests\StoreJurnalGuruRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJurnalGuruRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JurnalGuru  $jurnalGuru
     * @return \Illuminate\Http\Response
     */
    public function show(JurnalGuru $jurnalGuru)
    {
        return view('jurnal_guru.grafik');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JurnalGuru  $jurnalGuru
     * @return \Illuminate\Http\Response
     */
    public function edit(JurnalGuru $jurnalGuru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJurnalGuruRequest  $request
     * @param  \App\Models\JurnalGuru  $jurnalGuru
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJurnalGuruRequest $request, JurnalGuru $jurnalGuru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JurnalGuru  $jurnalGuru
     * @return \Illuminate\Http\Response
     */
    public function destroy(JurnalGuru $jurnalGuru)
    {
        //
    }
}
