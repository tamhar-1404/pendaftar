<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApprovalIzin;
use App\Http\Requests\Storeabsensi_siswaRequest;
use App\Http\Requests\Updateabsensi_siswaRequest;
use App\Mail\EmailLulus as MailEmailLulus;
use App\Mail\IzinTenggat;
use App\Mail\DataizinEmail;
use App\Models\Absensi_siswa;
use App\Models\Anggota_piket;
use App\Models\EmailLulus;
use App\Models\Siswa;
use App\Models\TenggatIzin;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Mail;

class AbsensiSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $terima = ApprovalIzin::all();
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $userName = Auth::user()->name;

            $telat = ApprovalIzin::where('keterangan', 'telat')->Where('nama', Auth()->user()->name)->count();
            $hadir = ApprovalIzin::where('keterangan', 'hadir')->Where('nama', Auth()->user()->name)->count();
            $izin = ApprovalIzin::where('keterangan', 'izin')->where('nama', Auth()->user()->name)->where('status', 'terimaabsen')->where('status2', 'izin')->count();
            $sakit = ApprovalIzin::where('keterangan', 'sakit')->where('nama', Auth()->user()->name)->where('status', 'terimaabsen')->where('status2', 'izin')->count();
            $alfa = ApprovalIzin::where('keterangan', 'alfa')->Where('nama', Auth()->user()->name)->count();
            $izinsakit = $izin + $sakit;

            $all = ApprovalIzin::where('nama', $userName)->where('status', 'terimaabsen')->where('status2', 'izin')->where('status', 'terimaabsen')->where('status2', 'izin')->count();
            $cek_sudah_absen = ApprovalIzin::where([
                ['tanggal', Carbon::now()->format('Y-m-d')],
                ['nama', $userName]
            ])->whereNotIn('keterangan', ['sakit', 'izin'])->exists();

            $terima = ApprovalIzin::where('nama', $userName)
            ->where(function ($query) use ($keyword) {
                $query->where('tanggal', 'LIKE', '%' . $keyword . '%')
                    ->orWhere('keterangan', 'LIKE', '%' . $keyword . '%');
            })->latest()
            ->paginate(5);

            return view('absensi_siswa.index', compact('terima', 'hadir', 'telat', 'all', 'alfa', 'izinsakit', 'cek_sudah_absen'));

        }

        $terima = ApprovalIzin::latest()->paginate(5);


        //Email lulus
        $siswa_lulus = Siswa::where('magang_akhir', Carbon::now()->format('Y-m-d'));
        if ($siswa_lulus->exists()) {
            foreach ($siswa_lulus->get() as $siswa) {
                if (!EmailLulus::where('email', $siswa->email)->where('tanggal', Carbon::now()->format('Y-m-d'))->exists()) {
                    EmailLulus::create([
                        'email' => $siswa->email,
                        'tanggal' => Carbon::now()->format('Y-m-d'),
                    ]);
                    Mail::to($siswa->email)->send(new MailEmailLulus());
                }
            }
        }

        //Kirim email tenggat
        $izin_tenggat_sekarang = ApprovalIzin::where('sampai', Carbon::now()->format('Y-m-d'))->where('keterangan', 'izin');
        if ($izin_tenggat_sekarang->exists()) {
            $ambil_email_izin = $izin_tenggat_sekarang->get();
            foreach ($ambil_email_izin as $user) {
                if (!TenggatIzin::where('email', $user->email)->where('tanggal', Carbon::now()->format('Y-m-d'))->exists()) {
                    $data = [
                        'nama' => $user->nama,
                    ];
                    Mail::to($user->email)->send(new IzinTenggat($data));
                    TenggatIzin::create([
                        'email' => $user->email,
                        'tanggal' => Carbon::now()->format('Y-m-d'),
                    ]);
                }
            }
        }


        $cek_sudah_absen = ApprovalIzin::where([['tanggal', Carbon::now()->format('Y-m-d')], ['nama', auth()->user()->name]])->whereNotIn('keterangan', ['sakit','izin'])->exists();
        // dd($cek_sudah_absen);
        $terima = ApprovalIzin::where('status', 'terimaabsen')->where('nama', Auth::user()->name )
        ->latest()->paginate(5);
        // Calculate the number of the last page you want to display

        $currentHour = now()->format('H:i');
        $currentDay = now()->format('l');
        // dd($currentDay);
        // $currentDay = 'Sunday';
        $currentDateTime = date('Y-m-d');
        $data= ApprovalIzin::where('nama', Auth::user()->name)->where('tanggal',$currentDateTime)->count();
        if($currentDay !== 'Saturday' && $currentDay !== 'Sunday'){

            if($data === 0){
                if($currentHour > '16:00'){
                    ApprovalIzin::create([
                        'nama' => Auth::user()->name,
                        'sekolah'=> Auth::user()->sekolah ,
                        'tanggal' =>$currentDateTime ,
                        'jam' => $currentHour,
                        'keterangan' => 'Alfa',
                        'status' => 'terimaabsen'
                    ]);
                }
            }
        }
        $telat = ApprovalIzin::where('keterangan', 'telat')->where('nama', Auth()->user()->name)->count();
        $hadir = ApprovalIzin::where('keterangan', 'hadir')->where('nama', Auth()->user()->name)->count();
        $izin = ApprovalIzin::where('keterangan', 'izin')->where('nama', Auth()->user()->name)->where('status', 'terimaabsen')->where('status2', 'izin')->count();
        $sakit = ApprovalIzin::where('keterangan', 'sakit')->where('nama', Auth()->user()->name)->where('status', 'terimaabsen')->where('status2', 'izin')->count();
        $alfa = ApprovalIzin::where('keterangan', 'alfa')->where('nama', Auth()->user()->name)->count();
        $izinsakit = $izin + $sakit;
        $all = ApprovalIzin::where('nama', Auth::user()->name)->where('status', 'terimaabsen')->where('status2', 'izin')->where('status', 'terimaabsen')->where('status2', 'izin')->count();
        // $terima = ApprovalIzin::latest()->paginate(5);
       return view('absensi_siswa.index' , compact('terima','hadir','telat','all','alfa','izinsakit', 'cek_sudah_absen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, ApprovalIzin $approvalIzin)
    {
       //
    }
    public function lihat()
    {
        return view('absensi_siswa.edit');
    }
    /**
     * Store a newly created resource in Storage.
     *
     * @param  \App\Http\Requests\Storeabsensi_siswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,ApprovalIzin $approvalIzin)
    {
        $hariIni = Carbon::now()->format('l');
        if ($hariIni == 'Saturday' OR $hariIni == 'Sunday') {
            return back()->with('error', 'Hari ini libur');
        }
        else {
            $telat='telat';
            $this->validate($request, [
                'tanggal' => 'date',
                'jam'=>'date_format:H:i', 'Asia/Jakarta',
                'keterangan'=> 'required',
            ]);
            // dd($request->jam);
            $keterangan = $request->keterangan;


            $hari_ini = Carbon::now()->format('Y-m-d');
            $currentDay = Carbon::now()->format('D');
            $cek_izin = ApprovalIzin::where([['tanggal', $hari_ini], ['keterangan', 'izin'], ['status2', 'izin']]);
            $cek_izin_hari_ini = $cek_izin->exists();
            if ($cek_izin_hari_ini) {
                $tanggal_hari_ini = Carbon::parse($cek_izin->first()->tanggal);
                $izin_sampai = Carbon::parse($cek_izin->first()->sampai);
                while ($tanggal_hari_ini <= $izin_sampai) {
                    $tanggal_hapus_kedepan = $tanggal_hari_ini->addDay()->format('Y-m-d');
                    ApprovalIzin::where('nama', auth()->user()->name)->where('tanggal', $tanggal_hapus_kedepan)->delete();
                }
                ApprovalIzin::where('nama', auth()->user()->name)->where('tanggal', $hari_ini)->where('keterangan', 'izin')->delete();
            }
            // dd(Auth::user()->siswa_id, Carbon::now()->locale('id')->dayName);
            $piket = Anggota_piket::where([['siswa_id', Auth::user()->siswa_id], ['hari', Carbon::now()->locale('id')->dayName], ['waktu', 'pagi']])->exists();
            if ($piket) {
                if ($request->jam > '07:45') {
                    $keterangan = $request->jam;
                    $keterangan = $telat;
                }
            }
            else {
                if($request->jam > '08:00' ){
                       $keterangan = $request->jam;
                        $keterangan = $telat;
                }
            }
            $nama = Auth::user()->name;
            $tanggal = $request->input('tanggal');

            $cek = ApprovalIzin::where('nama', $nama)->where('tanggal', $tanggal)->get();
            if($cek->count() > 0){
                return redirect()->back()->with('error', 'Anda sudah absen');
            }
            // dd($keterangan);
            // $currentDay = 'Sunday';
            if($currentDay !== 'Saturday' && $currentDay !== 'Sunday'){
                ApprovalIzin::create([
                    'nama' => $request->nama,
                    'sekolah' => $request->sekolah,
                    'tanggal' => $request->tanggal,
                    'jam' => $request->jam,
                    'keterangan' => $keterangan,
                    'status' => 'terimaabsen'
                ]);
            }elseif ($currentDay === 'Saturday' && $currentDay === 'Sunday'){
                return redirect()->back()->with('error', 'Anda tidak bisa absen pada hari Sabtu & Minggu');
            }
            return redirect()->route('absensi_siswa.index')->with('success', 'anda berhasil absen');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\absensi_siswa  $absensi_siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Absensi_siswa $absensi_siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\absensi_siswa  $absensi_siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, ApprovalIzin $approvalIzin)
    {
          // dd($request);
          $this->validate($request, [
            'nama' => 'required',
            'sekolah' => 'required',
            'email' => 'required',
            'dari' => 'required',
            'sampai' => 'required',
            'keterangan'=> 'required',
            'deskripsi' => 'required',
            'bukti' => 'required|image|mimes:jpeg,jpg,png'
        ]);
        $image = $request->file('bukti');
        $image->storeAs('public/bukti_izin', $image->hashName());


    ApprovalIzin::create([
            'nama' => $request->nama,
            'sekolah' => $request->sekolah,
            'email' => $request->email,
            'dari' => $request->dari,
            'sampai' => $request->sampai,
            'keterangan' => $request->keterangan,
            'deskripsi' => $request->deskripsi,
            'status' => 'menunggu',
            'status2' => 'menunggu',
            'bukti' => $image->hashName()
        ]);
        Mail::to($request->email)->send(new DataizinEmail($approvalIzin));
        return redirect()->route('absensi_siswa.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Update the specified resource in Storage.
     *
     * @param  \App\Http\Requests\Updateabsensi_siswaRequest  $request
     * @param  \App\Models\absensi_siswa  $absensi_siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Updateabsensi_siswaRequest $request, absensi_siswa $absensi_siswa)
    {
        //
    }

    /**
     * Remove the specified resource from Storage.
     *
     * @param  \App\Models\absensi_siswa  $absensi_siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(absensi_siswa $absensi_siswa)
    {
        //
    }
}
