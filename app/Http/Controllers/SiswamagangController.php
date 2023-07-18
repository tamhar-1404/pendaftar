<?php

namespace App\Http\Controllers;

use App\Models\siswamagang;
use App\Models\TataTertib;
use App\Models\User;
use App\Models\LaporanSiswa;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests\StoresiswamagangRequest;
use App\Http\Requests\UpdatesiswamagangRequest;
use App\Models\TopUp;
use Carbon\Carbon;

class SiswamagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $tatib = TataTertib::latest()->paginate(5);
        $password_user = User::find(auth()->user()->id)->password;
        return view('siswamagang.index', compact('tatib', 'user', 'password_user'));
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
     * @param  \App\Http\Requests\StoresiswamagangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\siswamagang  $siswamagang
     * @return \Illuminate\Http\Response
     */
    public function show(siswamagang $siswamagang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\siswamagang  $siswamagang
     * @return \Illuminate\Http\Response
     */
    public function edit(siswamagang $siswamagang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesiswamagangRequest  $request
     * @param  \App\Models\siswamagang  $siswamagang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $siswamagang)
    {
        //
    }

    public function saldo(Request $request, $id)
    {
        // dd($request->all());
        $user_id = auth()->user()->id;
        $this->validate($request, [
            'saldo' => 'required',
            'password' => 'required'
        ]);

        $user_password = User::find(auth()->user()->id)->password;
        if (!Hash::check($request->password, $user_password)) {
            return back()->with('error', 'Password salah');
        }
        $hashedSaldo = Hash::make($request->saldo);
        $decryptedSaldo = $request->saldo;

        TopUp::create([
            'user_id' => $user_id,
            'status' => 'menunggu',
            'saldo' => $request->saldo,
            'tanggal' => Carbon::now()->format('Y-m-d'),
        ]);

        return redirect()->back()->with('success', 'Transaksi anda sedang di proses');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\siswamagang  $siswamagang
     * @return \Illuminate\Http\Response
     */
    public function destroy(siswamagang $siswamagang)
    {
        //
    }
}
