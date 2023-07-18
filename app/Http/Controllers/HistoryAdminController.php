<?php

namespace App\Http\Controllers;

use App\Models\History_Admin;
use App\Models\TopUp;
use Illuminate\Http\Request;
use App\Http\Requests\StoreHistory_AdminRequest;
use App\Http\Requests\UpdateHistory_AdminRequest;

class HistoryAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $TopUp = TopUp::whereIn('status', ['Terima', 'Ditolak'])->get();
    return view('History_Admin.index', compact('TopUp'));
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
     * @param  \App\Http\Requests\StoreHistory_AdminRequest  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        dd($request);
        $this->validate($request, [
            'nama' => 'required',
            'rfid' => 'required',
            'name' => 'required',
            'foto' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'total' => 'required',
            'tanggal' => 'required',
        ]);

        History_Admin::create([
            'nama' => $request->input('nama'),
            'rfid' => $request->input('rfid'),
            'name' => $request->input('name'),
            'foto' => $request->input('foto'),
            'harga' => $request->input('harga'),
            'stok' => $request->input('stok'),
            'total' => $request->input('total'),
            'tanggal' => $request->input('tanggal'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\History_Admin  $history_Admin
     * @return \Illuminate\Http\Response
     */
    public function show(History_Admin $history_Admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\History_Admin  $history_Admin
     * @return \Illuminate\Http\Response
     */
    public function edit(History_Admin $history_Admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHistory_AdminRequest  $request
     * @param  \App\Models\History_Admin  $history_Admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHistory_AdminRequest $request, History_Admin $history_Admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\History_Admin  $history_Admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(History_Admin $history_Admin)
    {
        //
    }
}
