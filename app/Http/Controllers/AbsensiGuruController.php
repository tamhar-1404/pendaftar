<?php

namespace App\Http\Controllers;

use App\Models\Absensi_guru;
use App\Http\Requests\Storeabsensi_guruRequest;
use App\Http\Requests\Updateabsensi_guruRequest;
use App\Models\ApprovalIzin;
use App\Models\Guru_admin;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDO;

class AbsensiGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request): View
    {
        $guru = Guru_admin::where('name', Auth::user()->name)->first();
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $terimas = ApprovalIzin::whereHas('siswa', function ($q) use ($keyword) {
                $q->where([['name', 'LIKE', '%'.$keyword.'%'],['sekolah', Auth::user()->sekolah]]);
            })
            ->orWhere('tanggal', 'LIKE', '%'.$keyword.'%')->whereRelation('siswa', 'sekolah', Auth::user()->sekolah)
            ->latest()
            ->paginate(5);
            $terimas->appends(['cari' => $keyword]);
        } else {
            $terimas = ApprovalIzin::whereHas('siswa', function ($q) {
                $q->where('sekolah', Auth::user()->sekolah);
            })->latest()->paginate(5);
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
