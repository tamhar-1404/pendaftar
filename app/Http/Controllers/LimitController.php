<?php

namespace App\Http\Controllers;

use App\Models\Limit;
use App\Http\Requests\StoreLimitRequest;
use App\Http\Requests\UpdateLimitRequest;

class LimitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreLimitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLimitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Limit  $limit
     * @return \Illuminate\Http\Response
     */
    public function show(Limit $limit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Limit  $limit
     * @return \Illuminate\Http\Response
     */
    public function edit(Limit $limit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLimitRequest  $request
     * @param  \App\Models\Limit  $limit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLimitRequest $request, Limit $limit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Limit  $limit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Limit $limit)
    {
        //
    }
}
