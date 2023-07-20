<?php

namespace App\Http\Controllers;

use App\Models\HistoryTopup;
use App\Models\TopUp;
use App\Models\HistoryTransaksi;
use App\Http\Requests\StoreHistoryTopupRequest;
use App\Http\Requests\UpdateHistoryTopupRequest;
use auth;

class HistoryTopupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TopUp = HistoryTransaksi::where('nama',Auth()->user()->nama)->get();
        return view('History_siswa.index', compact('TopUp'));
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
     * @param  \App\Http\Requests\StoreHistoryTopupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHistoryTopupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HistoryTopup  $historyTopup
     * @return \Illuminate\Http\Response
     */
    public function show(HistoryTopup $historyTopup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HistoryTopup  $historyTopup
     * @return \Illuminate\Http\Response
     */
    public function edit(HistoryTopup $historyTopup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHistoryTopupRequest  $request
     * @param  \App\Models\HistoryTopup  $historyTopup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHistoryTopupRequest $request, HistoryTopup $historyTopup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HistoryTopup  $historyTopup
     * @return \Illuminate\Http\Response
     */
    public function destroy(HistoryTopup $historyTopup)
    {
        //
    }
}
