<?php

namespace App\Http\Controllers;

use App\Models\Chat_Siswa;
use App\Http\Requests\StoreChat_SiswaRequest;
use App\Http\Requests\UpdateChat_SiswaRequest;

class ChatSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('chat_siswa.index');
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
     * @param  \App\Http\Requests\StoreChat_SiswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChat_SiswaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chat_Siswa  $chat_Siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Chat_Siswa $chat_Siswa)
    {
        return view('chat_siswa.chatadmin');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chat_Siswa  $chat_Siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Chat_Siswa $chat_Siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChat_SiswaRequest  $request
     * @param  \App\Models\Chat_Siswa  $chat_Siswa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChat_SiswaRequest $request, Chat_Siswa $chat_Siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chat_Siswa  $chat_Siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chat_Siswa $chat_Siswa)
    {
        //
    }
}
