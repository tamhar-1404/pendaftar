<?php

namespace App\Http\Controllers;

use App\Models\siswamagang;
use App\Models\TataTertib;
use App\Models\User;
use App\Models\LaporanSiswa;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\Topup as Top;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests\StoresiswamagangRequest;
use App\Http\Requests\UpdatesiswamagangRequest;
use App\Models\TopUp;
use Carbon\Carbon;

class SiswamagangController extends Controller
{

function cek_password($user_id) {

    $user = find_user_by_rfid($user_id);


    if (!$user) {
        return "not found";
    }

    return $user;
}


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
        $user_id = auth()->user()->id;
        $this->validate($request, [
            'saldo' => 'required',
            'password' => 'required'
        ]);
        $data = $request -> saldo;
        if($data >= 5000){
            if (auth()->user()->RFID == null) {
                return back()->with('error', 'RFID tidak ada');
            }
            $user = User::find(auth()->user()->id);
            if (!Hash::check($request->password, $user->password)) {
                return back()->with('error', 'Password salah');
            }

            TopUp::create([
                'user_id' => $user_id,
                'status' => 'menunggu',
                'saldo' => $request->saldo,
                'tanggal' => Carbon::now()->format('Y-m-d'),
            ]);

            Mail::to($user->email)->send(new Top());

            return redirect()->back()->with('success', 'Transaksi Anda sedang diproses');
        }else{
            return redirect()->back()->with('error', 'top up saldo minimal Rp.5000');
        }
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
