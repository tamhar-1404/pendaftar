<?php

namespace App\Http\Controllers;

use App\Models\ApprovalIzin;
use App\Http\Requests\StoreApprovalIzinRequest;
use App\Http\Requests\UpdateApprovalIzinRequest;

class ApprovalIzinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('izinadmin.index');
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
     * @param  \App\Http\Requests\StoreApprovalIzinRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApprovalIzinRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApprovalIzin  $approvalIzin
     * @return \Illuminate\Http\Response
     */
    public function show(ApprovalIzin $approvalIzin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApprovalIzin  $approvalIzin
     * @return \Illuminate\Http\Response
     */
    public function edit(ApprovalIzin $approvalIzin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateApprovalIzinRequest  $request
     * @param  \App\Models\ApprovalIzin  $approvalIzin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApprovalIzinRequest $request, ApprovalIzin $approvalIzin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApprovalIzin  $approvalIzin
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApprovalIzin $approvalIzin)
    {
        //
    }
}
