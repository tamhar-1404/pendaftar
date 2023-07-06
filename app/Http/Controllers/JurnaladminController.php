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
        $item = jurnalsiswa::where('nama', 'LIKE', $request ->serch)->GET();
        $mengisi_jan = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 1)->count();
        $mengisi_feb = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 2)->count();
        $mengisi_mar = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 3)->count();
        $mengisi_apr = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 4)->count();
        $mengisi_mei = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 5)->count();
        $mengisi_jun = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 6)->count();
        $mengisi_jul = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 7)->count();
        $mengisi_aug = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 8)->count();
        $mengisi_sep = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 9)->count();
        $mengisi_okt = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 10)->count();
        $mengisi_nov = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 11)->count();
        $mengisi_des = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 12)->count();


        $tdk_mengisi_jan = jurnalsiswa::where('status', 'LIKE', 'tidak mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 1)->count();
        $tdk_mengisi_feb = jurnalsiswa::where('status', 'LIKE', 'tidak mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 2)->count();
        $tdk_mengisi_mar = jurnalsiswa::where('status', 'LIKE', 'tidak mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 3)->count();
        $tdk_mengisi_apr = jurnalsiswa::where('status', 'LIKE', 'tidak mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 4)->count();
        $tdk_mengisi_mei = jurnalsiswa::where('status', 'LIKE', 'tidak mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 5)->count();
        $tdk_mengisi_jun = jurnalsiswa::where('status', 'LIKE', 'tidak mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 6)->count();
        $tdk_mengisi_jul = jurnalsiswa::where('status', 'LIKE', 'tidak mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 7)->count();
        $tdk_mengisi_aug = jurnalsiswa::where('status', 'LIKE', 'tidak mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 8)->count();
        $tdk_mengisi_sep = jurnalsiswa::where('status', 'LIKE', 'tidak mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 9)->count();
        $tdk_mengisi_okt = jurnalsiswa::where('status', 'LIKE', 'tidak mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 10)->count();
        $tdk_mengisi_nov = jurnalsiswa::where('status', 'LIKE', 'tidak mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 11)->count();
        $tdk_mengisi_des = jurnalsiswa::where('status', 'LIKE', 'tidak mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 12)->count();

        return view('jurnal_admin.grafik', compact('item','mengisi_jan','mengisi_feb','mengisi_mar','mengisi_apr','mengisi_mei','mengisi_jun','mengisi_jul','mengisi_aug','mengisi_sep','mengisi_okt','mengisi_nov','mengisi_des','tdk_mengisi_jan','tdk_mengisi_feb','tdk_mengisi_mar','tdk_mengisi_apr','tdk_mengisi_mei','tdk_mengisi_jun','tdk_mengisi_jul','tdk_mengisi_aug','tdk_mengisi_sep','tdk_mengisi_nov','tdk_mengisi_okt','tdk_mengisi_nov','tdk_mengisi_des'));
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
