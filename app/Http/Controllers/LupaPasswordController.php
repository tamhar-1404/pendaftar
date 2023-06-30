<?php

namespace App\Http\Controllers;

use App\Models\LupaPassword;
use App\Http\Requests\StoreLupaPasswordRequest;
use App\Http\Requests\UpdateLupaPasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class LupaPasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lupapassword.index');
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
     * @param  \App\Http\Requests\StoreLupaPasswordRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required','email'
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status = Password::RESET_LINK_SENT
            ? back()->with('status', ($status))
            : back()->withInput($request->only('email'))
                    ->withErrors(['email'=>($status)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LupaPassword  $lupaPassword
     * @return \Illuminate\Http\Response
     */
    public function show(LupaPassword $lupaPassword)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LupaPassword  $lupaPassword
     * @return \Illuminate\Http\Response
     */
    public function edit(LupaPassword $lupaPassword)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLupaPasswordRequest  $request
     * @param  \App\Models\LupaPassword  $lupaPassword
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLupaPasswordRequest $request, LupaPassword $lupaPassword)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LupaPassword  $lupaPassword
     * @return \Illuminate\Http\Response
     */
    public function destroy(LupaPassword $lupaPassword)
    {
        //
    }
}
