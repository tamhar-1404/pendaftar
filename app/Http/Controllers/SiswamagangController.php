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
        return view('siswamagang.index', compact('tatib', 'user'));
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
    public function update(Request $request, siswamagang $siswamagang)
    {

        dd('hello');
    }

    public function saldo(Request $request, $id)
    {
        $user = User::find($id);
        $this->validate($request, [
            'saldo' => 'required'
        ]);

        $hashedSaldo = Hash::make($request->saldo);
        $decryptedSaldo = $request->saldo;

        $user->update([
            'saldo' => $hashedSaldo,
        ]);

        return redirect()->back()->with('decryptedSaldo', $decryptedSaldo);
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
