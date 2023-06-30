<?php

namespace App\Http\Controllers;

use App\Models\jurnaladmin;
use App\Models\jurnalsiswa;
use App\Http\Requests\StorejurnaladminRequest;
use App\Http\Requests\UpdatejurnaladminRequest;
use Illuminate\Http\Request;

class JurnaladminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = jurnalsiswa::paginate(10);
        return view('jurnal_admin.index',compact('item'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $item = jurnalsiswa::where('nama', 'LIKE', $request -> serch)->GET();
        $mengisi_jan = jurnalsiswa::where('status', 'LIKE', 'mengisi')->whereMonth('tanggal', '=', 1)->count();
        $mengisi_feb = jurnalsiswa::where('status', 'LIKE', 'mengisi')->whereMonth('tanggal', '=', 2)->count();
        $mengisi_mar = jurnalsiswa::where('status', 'LIKE', 'mengisi')->whereMonth('tanggal', '=', 3)->count();
        $mengisi_apr = jurnalsiswa::where('status', 'LIKE', 'mengisi')->whereMonth('tanggal', '=', 4)->count();
        $mengisi_mei = jurnalsiswa::where('status', 'LIKE', 'mengisi')->whereMonth('tanggal', '=', 5)->count();
        $mengisi_jun = jurnalsiswa::where('status', 'LIKE', 'mengisi')->whereMonth('tanggal', '=', 6)->count();
        $mengisi_jul = jurnalsiswa::where('status', 'LIKE', 'mengisi')->whereMonth('tanggal', '=', 7)->count();
        $mengisi_aug = jurnalsiswa::where('status', 'LIKE', 'mengisi')->whereMonth('tanggal', '=', 8)->count();
        $mengisi_sep = jurnalsiswa::where('status', 'LIKE', 'mengisi')->whereMonth('tanggal', '=', 9)->count();
        $mengisi_okt = jurnalsiswa::where('status', 'LIKE', 'mengisi')->whereMonth('tanggal', '=', 10)->count();
        $mengisi_nov = jurnalsiswa::where('status', 'LIKE', 'mengisi')->whereMonth('tanggal', '=', 11)->count();
        $mengisi_des = jurnalsiswa::where('status', 'LIKE', 'mengisi')->whereMonth('tanggal', '=', 12)->count();
        return view('jurnal_admin.grafik', compact('item'))->with('mengisi_jan', $mengisi_jan)->with('mengisi_feb', $mengisi_feb)->with('mengisi_mar', $mengisi_mar)->with('mengisi_apr', $mengisi_apr)->with('mengisi_mei', $mengisi_mei)->with('mengisi_jun', $mengisi_jun)->with('mengisi_jul', $mengisi_jul)->with('mengisi_aug', $mengisi_aug)->with('mengisi_sep', $mengisi_sep)->with('mengisi_okt', $mengisi_okt)->with('mengisi_nov', $mengisi_nov)->with('mengisi_des', $mengisi_des);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorejurnaladminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorejurnaladminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jurnaladmin  $jurnaladmin
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // $hasil = $request->input('serch');
        // $item = jurnalsiswa::where('nama', 'like', '%'.$hasil.'%')->get();
        // return view('jurnal_admin.grafik',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jurnaladmin  $jurnaladmin
     * @return \Illuminate\Http\Response
     */
    public function edit(jurnaladmin $jurnaladmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatejurnaladminRequest  $request
     * @param  \App\Models\jurnaladmin  $jurnaladmin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatejurnaladminRequest $request, jurnaladmin $jurnaladmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jurnaladmin  $jurnaladmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(jurnaladmin $jurnaladmin)
    {
        //
    }
}
