<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\User;
use App\Models\Barang;
use Illuminate\Http\Request;
use App\Http\Requests\StoretransaksiRequest;
use App\Http\Requests\UpdatetransaksiRequest;
use App\Models\HistoryTransaksi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class TransaksiController extends Controller
{
    public function cari(Request $request) {
        $keyword = $request->value;
        $barangs = Barang::where('nama', 'LIKE', '%'.$keyword.'%')->get()->toArray();
        return $barangs;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $barang = Barang::all();
        // return view('transaksi.data', compact('barang'));
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $a = session('rfid');
        // dd(Auth()->user()->RFID);
        $data = User::where('RFID', $a)->first();
        if (!$data) {
            $message = 'RFID anda tidak ditemukan!';
            return redirect()->back()->with('error', $message);
        }
        $user = $data->saldo;
        $barang = Barang::all();
        $makanan = Barang::where('kategori', 'makanan')->get();
        $minuman = Barang::where('kategori', 'minuman')->get();
        $saldo = User::where('rfid', $a)->first()->saldo;
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        // dd($saldo);
        return view('transaksi.data', compact('data', 'barang', 'minuman', 'user', 'saldo', 'makanan'))->with('a', json_encode($a));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretransaksiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      dd($request);
      $a = $request->rfid;
      $data = User::where('RFID', $request->rfid)->first();
      if (!$data) {
          $message = 'RFID anda tidak ditemukan!';
          return redirect()->back()->with('error', $message);
      }
      $user = $data->saldo;
      $barang = Barang::all();
      $makanan = Barang::where('kategori', 'makanan')->get();
      $minuman = Barang::where('kategori', 'minuman')->get();
      $saldo = User::where('rfid', $request->rfid)->first()->saldo;
      // dd($saldo);
      return view('transaksi.data', compact('data','barang','minuman' , 'user', 'saldo', 'makanan'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
    }
    public function nota(){
        return view('nota.index');
    }
    public function postbeli(Request $request){
        // dd($request);
        // // dd('test');
        // $a = $request->rfid;
        // $data = User::where('RFID', $request->rfid)->first();
        // if (!$data) {
        //     $message = 'RFID anda tidak ditemukan!';
        //     return redirect()->back()->with('error', $message);
        // }
        // $user = $data->saldo;
        // $barang = Barang::all();
        // $makanan = Barang::where('kategori', 'makanan')->get();
        // $minuman = Barang::where('kategori', 'minuman')->get();
        // $saldo = User::where('rfid', $request->rfid)->first()->saldo;
        // // dd($saldo);
        // return redirect()->route('transaksi.create')->compact('data', 'barang', 'minuman', 'user', 'saldo', 'makanan')->with('a', json_encode($a));


        $credentials = $request->only('rfid');
        $user = User::where('rfid', $credentials['rfid'])->first();

        if ($user) {


            if ($user->role === 'Siswa') {
                Auth::login($user);
                // dd(Auth()->user()->role);
                return redirect()->route('transaksi.create')->with('rfid', $credentials['rfid']);
            } else {
                $message = 'Anda tidak memiliki izin untuk mengakses halaman ini.';
                return redirect()->back()->with('error', $message);
            }
        } else {
            $message = 'RFID anda tidak ditemukan!';
            return redirect()->back()->with('error', $message);
        }


    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetransaksiRequest  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetransaksiRequest $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
