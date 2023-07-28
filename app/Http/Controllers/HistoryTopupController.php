<?php

namespace App\Http\Controllers;

use App\Models\TopUp;
use App\Models\HistoryTopup;
use Illuminate\Http\Request;
use App\Mail\Topup as MailTopup;
use App\Models\HistoryTransaksi;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreHistoryTopupRequest;
use App\Http\Requests\UpdateHistoryTopupRequest;

class HistoryTopupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $userName = Auth::user()->name;

        if ($request->has('cari')) {
            $keyword = $request->cari;
    
            $TopUp = TopUp::where('user_id',Auth()->user()->id)
                ->where(function ($query) use ($keyword) {
                    $query->where('tanggal', 'LIKE', '%' . $keyword . '%')
                        ->orWhere('status', 'LIKE', '%' . $keyword . '%');
                })
                ->paginate(5);
    
            $TopUp->appends(['cari' => $keyword]);
        } else {
            $TopUp = Topup::where('user_id',Auth()->user()->id)->latest()->paginate(10);
        }
        return view('History_siswa.topup', compact('TopUp'));

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
     * @param  \App\Http\Requests\StoreHistoryTopupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHistoryTopupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HistoryTopup  $historyTopup
     * @return \Illuminate\Http\Response
     */
    public function show(HistoryTopup $historyTopup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HistoryTopup  $historyTopup
     * @return \Illuminate\Http\Response
     */
    public function edit(HistoryTopup $historyTopup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHistoryTopupRequest  $request
     * @param  \App\Models\HistoryTopup  $historyTopup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHistoryTopupRequest $request, HistoryTopup $historyTopup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HistoryTopup  $historyTopup
     * @return \Illuminate\Http\Response
     */
    public function destroy(HistoryTopup $historyTopup)
    {
        //
    }
}
