<?php

namespace App\Http\Controllers;

use App\Models\Absensi_guru;
use App\Http\Requests\Storeabsensi_guruRequest;
use App\Http\Requests\Updateabsensi_guruRequest;
use App\Models\ApprovalIzin;
use App\Models\Guru_admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbsensiGuruController extends Controller
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
            $terimas = ApprovalIzin::where([['sekolah', Auth()->user()->sekolah],['status', 'terimaabsen']])
                ->where(function($query) use ($keyword) {
                    $query->where('nama', 'LIKE', '%' . $keyword . '%')
                          ->orWhere('tanggal', 'LIKE', '%' . $keyword . '%');
                })
                ->paginate(5);
        } else {
            $terimas = ApprovalIzin::where([['sekolah', Auth()->user()->sekolah],['status', 'terimaabsen']])->latest()->paginate(5);
        }
        return view('absensi_guru.index', compact('terimas', 'guru'));
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
     * Store a newly created resource in Storage.
     *
     * @param  \App\Http\Requests\Storeabsensi_guruRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeabsensi_guruRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\absensi_guru  $absensi_guru
     * @return \Illuminate\Http\Response
     */
    public function show(absensi_guru $absensi_guru)
    {
        return view("absensi_guru.grafik");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\absensi_guru  $absensi_guru
     * @return \Illuminate\Http\Response
     */
    public function edit(absensi_guru $absensi_guru)
    {
        //
    }

    /**
     * Update the specified resource in Storage.
     *
     * @param  \App\Http\Requests\Updateabsensi_guruRequest  $request
     * @param  \App\Models\absensi_guru  $absensi_guru
     * @return \Illuminate\Http\Response
     */
    public function update(Updateabsensi_guruRequest $request, absensi_guru $absensi_guru)
    {
        //
    }

    /**
     * Remove the specified resource from Storage.
     *
     * @param  \App\Models\absensi_guru  $absensi_guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(absensi_guru $absensi_guru)
    {
        //
    }
}
