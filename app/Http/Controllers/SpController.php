<?php

namespace App\Http\Controllers;

use App\Models\sp;
use App\Http\Requests\StorespRequest;
use App\Http\Requests\UpdatespRequest;
use Illuminate\Http\Request;

class SpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = sp::all();
        return view('sp.index', compact('data'));
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
     * @param  \App\Http\Requests\StorespRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [


        ]);
        $image = $request->file('buktisp');
        $image->storeAs('public/image', $image->hashName());
        sp::create([
            'bukti'=>$image->hashName(),
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'sp' => $request->keterangan,

        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sp  $sp
     * @return \Illuminate\Http\Response
     */
    public function show(sp $sp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sp  $sp
     * @return \Illuminate\Http\Response
     */
    public function edit(sp $sp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatespRequest  $request
     * @param  \App\Models\sp  $sp
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatespRequest $request, sp $sp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sp  $sp
     * @return \Illuminate\Http\Response
     */
    public function destroy(sp $sp)
    {
        //
    }
}
