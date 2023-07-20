<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoryTransaksi;
use App\Http\Requests\StoreHistoryTransaksiRequest;
use App\Http\Requests\UpdateHistoryTransaksiRequest;

class HistoryTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $data = HistoryTransaksi::where('nama', 'LIKE', '%' . $keyword . '%')
                                   ->orWhere('rfid', 'LIKE', '%' . $keyword . '%')
                                   ->paginate(10);
            $data->appends(['cari' => $keyword]);
            return view('History_transaksi.index', compact('data'));
        }
        
        $data = HistoryTransaksi::latest()->paginate(10);
        return view('History_transaksi.index', compact('data'));        
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
     * @param  \App\Http\Requests\StoreHistoryTransaksiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHistoryTransaksiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HistoryTransaksi  $historyTransaksi
     * @return \Illuminate\Http\Response
     */
    public function show(HistoryTransaksi $historyTransaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HistoryTransaksi  $historyTransaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(HistoryTransaksi $historyTransaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHistoryTransaksiRequest  $request
     * @param  \App\Models\HistoryTransaksi  $historyTransaksi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHistoryTransaksiRequest $request, HistoryTransaksi $historyTransaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HistoryTransaksi  $historyTransaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(HistoryTransaksi $historyTransaksi)
    {
        //
    }
}
