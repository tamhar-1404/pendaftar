<?php

namespace App\Http\Controllers;

use App\Models\tolak;
use App\Http\Requests\StoretolakRequest;
use App\Http\Requests\UpdatetolakRequest;
use Illuminate\Http\Request;

class TolakController extends Controller
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
            $tolaks = tolak::where('name', 'LIKE', '%' . $keyword . '%')->orWhere('sekolah', 'LIKE', '%' . $keyword . '%')->paginate(3);
            return view('tolak.index', compact('tolaks'));
        }
        $tolaks = tolak::latest()->paginate(5);
        return view('tolak.index' , compact('tolaks'));
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
     * @param  \App\Http\Requests\StoretolakRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretolakRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tolak  $tolak
     * @return \Illuminate\Http\Response
     */
    public function show(tolak $tolak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tolak  $tolak
     * @return \Illuminate\Http\Response
     */
    public function edit(tolak $tolak)
    {
        return view('tolak.detail', compact('tolak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetolakRequest  $request
     * @param  \App\Models\tolak  $tolak
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetolakRequest $request, tolak $tolak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tolak  $tolak
     * @return \Illuminate\Http\Response
     */
    public function destroy(tolak $tolak)
    {
        //
    }
}
