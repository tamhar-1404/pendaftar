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
    public function create()
    {
        //
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
        return view('jurnal_admin.grafik',compact('item'));
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
