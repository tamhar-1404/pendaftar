<?php

namespace App\Http\Controllers;
use App\Models\HistoryTopup;
use App\Models\HistoryTransaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistorySiswaController extends Controller
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
    
            $siswaLogin = Auth::user();
            $siswas = HistoryTransaksi::where('nama', $siswaLogin->name)
                ->where(function ($query) use ($keyword) {
                    $query->where('harga', 'LIKE', '%' . $keyword . '%')
                        ->orWhere('tanggal', 'LIKE', '%' . $keyword . '%');
                })
                ->paginate(10);
    
            $siswas->appends(['cari' => $keyword]);
        } else {
            $siswas = HistoryTransaksi::where('nama',Auth()->user()->name)->latest()->paginate(10);
        }
        return view('History.index' , compact('siswas'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
