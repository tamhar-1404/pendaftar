<?php

namespace App\Http\Controllers;

use App\Models\Laporan_piket;
use App\Http\Requests\Storelaporan_piketRequest;
use App\Http\Requests\Updatelaporan_piketRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class LaporanPiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->back();
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
     * @param  \App\Http\Requests\Storelaporan_piketRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'waktu' => "required",
            'deskripsi' => "required",
            'bukti' => "required"
        ]);
        $image = $request->file('bukti');
        $image->storeAs('public/image', $image->hashName());
        $today = Carbon::now()->format('l');
        laporan_piket::create([
            'bukti' => $image->hashName(),
            'name' => Auth::user()->name,
            'waktu' => $request->waktu,
            'hari' => $today,
            'deskripsi' => $request->deskripsi

        ]);
    return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\laporan_piket  $laporan_piket
     * @return \Illuminate\Http\Response
     */
    public function show(laporan_piket $laporan_piket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\laporan_piket  $laporan_piket
     * @return \Illuminate\Http\Response
     */
    public function edit(laporan_piket $laporan_piket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatelaporan_piketRequest  $request
     * @param  \App\Models\laporan_piket  $laporan_piket
     * @return \Illuminate\Http\Response
     */
    public function update(Updatelaporan_piketRequest $request, laporan_piket $laporan_piket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\laporan_piket  $laporan_piket
     * @return \Illuminate\Http\Response
     */
    public function destroy(laporan_piket $laporan_piket)
    {
        //
    }
}
