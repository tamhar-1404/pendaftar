<?php

namespace App\Http\Controllers;

use App\Models\aproval;
use App\Http\Requests\StoreaprovalRequest;
use App\Http\Requests\UpdateaprovalRequest;

class AprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = 'aproval';
        return view('aproval.index',compact('id'));
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
     * @param  \App\Http\Requests\StoreaprovalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreaprovalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\aproval  $aproval
     * @return \Illuminate\Http\Response
     */
    public function show(aproval $aproval)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\aproval  $aproval
     * @return \Illuminate\Http\Response
     */
    public function edit(aproval $aproval)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateaprovalRequest  $request
     * @param  \App\Models\aproval  $aproval
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateaprovalRequest $request, aproval $aproval)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\aproval  $aproval
     * @return \Illuminate\Http\Response
     */
    public function destroy(aproval $aproval)
    {
        //
    }
}
