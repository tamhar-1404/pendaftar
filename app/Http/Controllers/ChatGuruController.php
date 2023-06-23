<?php

namespace App\Http\Controllers;

use App\Models\ChatGuru;
use App\Http\Requests\StoreChatGuruRequest;
use App\Http\Requests\UpdateChatGuruRequest;

class ChatGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('chat_guru.index');
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
     * @param  \App\Http\Requests\StoreChatGuruRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChatGuruRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChatGuru  $chatGuru
     * @return \Illuminate\Http\Response
     */
    public function show(ChatGuru $chatGuru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChatGuru  $chatGuru
     * @return \Illuminate\Http\Response
     */
    public function edit(ChatGuru $chatGuru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChatGuruRequest  $request
     * @param  \App\Models\ChatGuru  $chatGuru
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChatGuruRequest $request, ChatGuru $chatGuru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChatGuru  $chatGuru
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChatGuru $chatGuru)
    {
        //
    }
}
