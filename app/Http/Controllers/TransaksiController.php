<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use App\Models\User;
use App\Models\barang;
use Illuminate\Http\Request;
use App\Http\Requests\StoretransaksiRequest;
use App\Http\Requests\UpdatetransaksiRequest;
use App\Models\HistoryTransaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = barang::all();
        return view('transaksi.data', compact('barang' , 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = User::where('RFID', $request->rfid)->first();
        $user = User::where('saldo', $request->saldo)->where('RFID', $request->rfid)->first();
        $hasil = $data->count();
        if($hasil === 0){
            return redirect()->back();
        }
        $barang = barang::all();
        return view('transaksi.data', compact('data','barang' , 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretransaksiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetransaksiRequest  $request
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetransaksiRequest $request, transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaksi $transaksi)
    {
        //
    }
}
