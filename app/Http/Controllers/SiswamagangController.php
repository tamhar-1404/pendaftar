<?php

namespace App\Http\Controllers;

use App\Models\siswamagang;
use App\Models\TataTertib;
use App\Models\ApprovalIzin;
use App\Models\jurnalsiswa;
use App\Models\User;
use App\Models\LaporanSiswa;
use App\Models\mou;
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Hadir = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('nama', Auth()->user()->name)->count();
        $Telat = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('nama', Auth()->user()->name)->count();
        $izin = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('nama', Auth()->user()->name)->count();
        $Alfa = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('nama', Auth()->user()->name)->count();


        // jurnal

        $mengisi_jan = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', Auth()->user()->name)->whereMonth('tanggal', '=', 1)->count();
        $mengisi_feb = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', Auth()->user()->name)->whereMonth('tanggal', '=', 2)->count();
        $mengisi_mar = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', Auth()->user()->name)->whereMonth('tanggal', '=', 3)->count();
        $mengisi_apr = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', Auth()->user()->name)->whereMonth('tanggal', '=', 4)->count();
        $mengisi_mei = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', Auth()->user()->name)->whereMonth('tanggal', '=', 5)->count();
        $mengisi_jun = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', Auth()->user()->name)->whereMonth('tanggal', '=', 6)->count();
        $mengisi_jul = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', Auth()->user()->name)->whereMonth('tanggal', '=', 7)->count();
        $mengisi_aug = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', Auth()->user()->name)->whereMonth('tanggal', '=', 8)->count();
        $mengisi_sep = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', Auth()->user()->name)->whereMonth('tanggal', '=', 9)->count();
        $mengisi_okt = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', Auth()->user()->name)->whereMonth('tanggal', '=', 10)->count();
        $mengisi_nov = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', Auth()->user()->name)->whereMonth('tanggal', '=', 11)->count();
        $mengisi_des = jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', Auth()->user()->name)->whereMonth('tanggal', '=', 12)->count();


        $tdk_mengisi_jan = jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', Auth()->user()->name)->whereMonth('tanggal', '=', 1)->count();
        $tdk_mengisi_feb = jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', Auth()->user()->name)->whereMonth('tanggal', '=', 2)->count();
        $tdk_mengisi_mar = jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', Auth()->user()->name)->whereMonth('tanggal', '=', 3)->count();
        $tdk_mengisi_apr = jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', Auth()->user()->name)->whereMonth('tanggal', '=', 4)->count();
        $tdk_mengisi_mei = jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', Auth()->user()->name)->whereMonth('tanggal', '=', 5)->count();
        $tdk_mengisi_jun = jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', Auth()->user()->name)->whereMonth('tanggal', '=', 6)->count();
        $tdk_mengisi_jul = jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', Auth()->user()->name)->whereMonth('tanggal', '=', 7)->count();
        $tdk_mengisi_aug = jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', Auth()->user()->name)->whereMonth('tanggal', '=', 8)->count();
        $tdk_mengisi_sep = jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', Auth()->user()->name)->whereMonth('tanggal', '=', 9)->count();
        $tdk_mengisi_okt = jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', Auth()->user()->name)->whereMonth('tanggal', '=', 10)->count();
        $tdk_mengisi_nov = jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', Auth()->user()->name)->whereMonth('tanggal', '=', 11)->count();
        $tdk_mengisi_des = jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', Auth()->user()->name)->whereMonth('tanggal', '=', 12)->count();

        $user = auth()->user();
        $tatib = TataTertib::latest()->paginate(5);
        $password_user = User::find(auth()->user()->id)->password;
        $mou = mou::all();
        return view('siswamagang.index', compact('tatib','mou', 'user', 'password_user', 'Hadir','Telat','izin','Alfa','mengisi_jan','mengisi_feb','mengisi_mar','mengisi_apr','mengisi_mei','mengisi_jun','mengisi_jul','mengisi_aug','mengisi_sep','mengisi_okt','mengisi_nov','mengisi_des','tdk_mengisi_jan','tdk_mengisi_feb','tdk_mengisi_mar','tdk_mengisi_apr','tdk_mengisi_mei','tdk_mengisi_jun','tdk_mengisi_jul','tdk_mengisi_aug','tdk_mengisi_sep','tdk_mengisi_nov','tdk_mengisi_okt','tdk_mengisi_nov','tdk_mengisi_des'));
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
