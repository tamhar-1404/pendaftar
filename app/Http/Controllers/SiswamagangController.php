<?php

namespace App\Http\Controllers;

use App\Models\Siswamagang;
use App\Models\TataTertib;
use App\Models\ApprovalIzin;
use App\Models\Jurnalsiswa;
use App\Models\User;
use App\Models\Siswa;
use App\Models\LaporanSiswa;
use App\Models\MOU;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\Topup as Top;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests\StoreSiswamagangRequest;
use App\Http\Requests\UpdateSiswamagangRequest;
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
        $Hadir = ApprovalIzin::where('keterangan', 'LIKE', 'Hadir')->where('siswa_id', Auth()->user()->siswa_id)->count();
        $Telat = ApprovalIzin::where('keterangan', 'LIKE', 'Telat')->where('siswa_id', Auth()->user()->siswa_id)->count();
        $izin = ApprovalIzin::where('keterangan', 'LIKE', 'izin')->where('siswa_id', Auth()->user()->siswa_id)->count();
        $Alfa = ApprovalIzin::where('keterangan', 'LIKE', 'Alfa')->where('siswa_id', Auth()->user()->siswa_id)->count();
         // jurnal

        $mengisi_jan = Jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('siswa_id', Auth::user()->Siswa->id)->whereMonth('tanggal', '=', 1)->count();
        $mengisi_feb = Jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('siswa_id', Auth::user()->Siswa->id)->whereMonth('tanggal', '=', 2)->count();
        $mengisi_mar = Jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('siswa_id', Auth::user()->Siswa->id)->whereMonth('tanggal', '=', 3)->count();
        $mengisi_apr = Jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('siswa_id', Auth::user()->Siswa->id)->whereMonth('tanggal', '=', 4)->count();
        $mengisi_mei = Jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('siswa_id', Auth::user()->Siswa->id)->whereMonth('tanggal', '=', 5)->count();
        $mengisi_jun = Jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('siswa_id', Auth::user()->Siswa->id)->whereMonth('tanggal', '=', 6)->count();
        $mengisi_jul = Jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('siswa_id', Auth::user()->Siswa->id)->whereMonth('tanggal', '=', 7)->count();
        $mengisi_aug = Jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('siswa_id', Auth::user()->Siswa->id)->whereMonth('tanggal', '=', 8)->count();
        $mengisi_sep = Jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('siswa_id', Auth::user()->Siswa->id)->whereMonth('tanggal', '=', 9)->count();
        $mengisi_okt = Jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('siswa_id', Auth::user()->Siswa->id)->whereMonth('tanggal', '=', 10)->count();
        $mengisi_nov = Jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('siswa_id', Auth::user()->Siswa->id)->whereMonth('tanggal', '=', 11)->count();
        $mengisi_des = Jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('siswa_id', Auth::user()->Siswa->id)->whereMonth('tanggal', '=', 12)->count();


        $tdk_mengisi_jan = Jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('siswa_id', Auth::user()->Siswa->id)->whereMonth('tanggal', '=', 1)->count();
        $tdk_mengisi_feb = Jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('siswa_id', Auth::user()->Siswa->id)->whereMonth('tanggal', '=', 2)->count();
        $tdk_mengisi_mar = Jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('siswa_id', Auth::user()->Siswa->id)->whereMonth('tanggal', '=', 3)->count();
        $tdk_mengisi_apr = Jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('siswa_id', Auth::user()->Siswa->id)->whereMonth('tanggal', '=', 4)->count();
        $tdk_mengisi_mei = Jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('siswa_id', Auth::user()->Siswa->id)->whereMonth('tanggal', '=', 5)->count();
        $tdk_mengisi_jun = Jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('siswa_id', Auth::user()->Siswa->id)->whereMonth('tanggal', '=', 6)->count();
        $tdk_mengisi_jul = Jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('siswa_id', Auth::user()->Siswa->id)->whereMonth('tanggal', '=', 7)->count();
        $tdk_mengisi_aug = Jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('siswa_id', Auth::user()->Siswa->id)->whereMonth('tanggal', '=', 8)->count();
        $tdk_mengisi_sep = Jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('siswa_id', Auth::user()->Siswa->id)->whereMonth('tanggal', '=', 9)->count();
        $tdk_mengisi_okt = Jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('siswa_id', Auth::user()->Siswa->id)->whereMonth('tanggal', '=', 10)->count();
        $tdk_mengisi_nov = Jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('siswa_id', Auth::user()->Siswa->id)->whereMonth('tanggal', '=', 11)->count();
        $tdk_mengisi_des = Jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('siswa_id', Auth::user()->Siswa->id)->whereMonth('tanggal', '=', 12)->count();

        $user = Auth()->user();
        $tatib = TataTertib::limit(4)->get();
        $password_user = User::find(Auth()->user()->id)->password;
        $mou = MOU::all();
        $foto = Siswa::where('id', Auth()->user()->siswa_id)->latest('created_at')->get();

        return view('Siswamagang.index', compact('foto', 'tatib','mou', 'user', 'password_user', 'Hadir','Telat','izin','Alfa','mengisi_jan','mengisi_feb','mengisi_mar','mengisi_apr','mengisi_mei','mengisi_jun','mengisi_jul','mengisi_aug','mengisi_sep','mengisi_okt','mengisi_nov','mengisi_des','tdk_mengisi_jan','tdk_mengisi_feb','tdk_mengisi_mar','tdk_mengisi_apr','tdk_mengisi_mei','tdk_mengisi_jun','tdk_mengisi_jul','tdk_mengisi_aug','tdk_mengisi_sep','tdk_mengisi_nov','tdk_mengisi_okt','tdk_mengisi_nov','tdk_mengisi_des'));
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
     * @param  \App\Http\Requests\StoreSiswamagangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswamagang  $Siswamagang
     * @return \Illuminate\Http\Response
     */
    public function show(Siswamagang $Siswamagang)
    {
        $data = User::find(Auth()->user()->id);
        $Siswa = Siswa::where('id', $data->id)->get();

        return view('profil_siswa.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswamagang  $Siswamagang
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswamagang $Siswamagang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSiswamagangRequest  $request
     * @param  \App\Models\Siswamagang  $Siswamagang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $Siswamagang)
    {
        //
    }

    public function saldo(Request $request, $id)
    {
        $user_id = auth()->user()->id;
        $this->validate($request, [
            'saldo' => 'required|numeric|between:5000,100000',
            'password' => 'required|min:6|max:225'
        ], [
            'saldo.max' => 'saldo hanya bisa 225 karakter',
            'saldo.required' => 'Saldo tidak boleh kosong',
            'saldo.numeric' => 'Saldo hanya boleh angka',
            'saldo.between' => 'Saldo hanya boleh 5000 sampai 100000',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 6',
            'password.max' => 'Password maximal 225',
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

            return redirect()->back()->with('successIsi', 'Transaksi Anda sedang diproses');
        }else{
            return redirect()->back()->with('errorIsi', 'top up saldo minimal Rp.5000');
        }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswamagang  $Siswamagang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswamagang $Siswamagang)
    {
        //
    }
}
