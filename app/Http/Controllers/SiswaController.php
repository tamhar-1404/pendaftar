<?php

namespace App\Http\Controllers;

use App\Mail\Banned;
use App\Models\User;
use App\Models\Siswa;
use App\Models\EmailLulus;
use App\Mail\BannedGuru;
use App\Models\LaporanSiswa;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreSiswaRequest;
use Carbon\Carbon;
use App\Http\Requests\UpdateSiswaRequest;
use App\Mail\EmailLulus as MailEmailLulus;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $today = date('Y-m-d');
        if (Siswa::whereDate('magang_akhir', '<=', $today)->exists()) {
            $siswas = Siswa::whereDate('magang_akhir', '<=', $today)->get();
            foreach ($siswas as $siswa) {
                if (!EmailLulus::where('email', $siswa->email)->where('tanggal', Carbon::now()->format('Y-m-d'))->exists()) {
                    Mail::to($siswa->email)->send(new MailEmailLulus);
                    EmailLulus::create([
                        'email' => $siswa->email,
                        'tanggal' => Carbon::now()->format('Y-m-d'),
                    ]);
                }
            }
            Siswa::whereDate('magang_akhir', '<=', $today)->update(['role' => 'alumni', 'status' => 'lulus']);
        }
        $siswas = Siswa::where('role', 'siswa')->get();

        if ($request->has('cari')) {
            $keyword = $request->cari;
            $siswas = Siswa::where('name', 'LIKE', '%' . $keyword . '%')->orWhere('jurusan', 'LIKE', '%' . $keyword . '%')->paginate(3);
            return view('Siswa_admin.index', compact('siswas'));

            $siswas->appends(['cari' => $keyword]);
        return view('siswa_admin.index', compact('siswas'));

        }

        $siswas = Siswa::latest()->paginate(3);

        return view('Siswa_admin.index', compact('siswas'));
    }


    public function siswamagang_siswa()
    {
        $siswas = Siswa::whereNot('email', Auth::user()->email)->get();
        return view('siswamagang_siswa.index ', compact('siswas'));
    }
    public function view()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Siswa_admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSiswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa, $id)
    {
        $siswa = Siswa::find($id);
        $user = User::find($id);
        // dd($siswa);
        return view('Siswa_admin.detail',compact('siswa','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSiswaRequest  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Siswa $siswa , User $user , $id)
    {
        $user = User::find($id);
        $this->validate($request,[
          'RFID'=>'required'
        ]);
        $user->update([
            'RFID'=>$request->RFID
        ]);
        return redirect()->back();
    }
    public function rfid(Request $request)
    {

    $users = User::Where('role', 'Siswa')->whereNull('RFID')->latest()->paginate(3);
    if ($request->has('cari')) {
        if($request->cari == null){
            return view('rfid.index', compact('users'));
        }
        $keyword = $request->cari;
        $users = User::where('name', 'LIKE', '%' . $keyword . '%')->orWhere('sekolah', 'LIKE', '%' . $keyword . '%')->whereNull('RFID')->paginate(3);
        return view('rfid.index', compact('users'));
        // $users->appends(['cari' => $keyword]);
        // return view('rfid.index', compact('users'));

    }

        return view('rfid.index', compact('users'));
    }

    public function saldo(Request $request, Siswa $siswa, User $user, $id)
    {
        // $user = User::find($id);
        // $this->validate($request, [
        //     'saldo' => 'required'
        // ]);
        // $user->update([
        //     'saldo' => $request->hashName()
        // ]);
        // return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
    public function banned(Request $request, $id) {
        // dd($id);
        // dd($request->all());
        $alasan = $request->alasan;
        $siswa = Siswa::find($id);
        $email = $siswa->email;
        $nama = $siswa->name;
        $data = [
            'alasan' => $alasan,
            'nama' => $nama,
        ];
        if (User::where('role', 'Guru')->where('sekolah', $siswa->sekolah)->exists()) {
            $emailguru = User::where('role', 'Guru')->where('sekolah', $siswa->sekolah)->first()->email;
            Mail::to($emailguru)->send(new BannedGuru($data));
        }
        Mail::to($email)->send(new Banned($data));
        $siswa->update([
            'role' => 'Alumni',
            'status' => 'Dikeluarkan',
        ]);
        User::where('name', $siswa->name)->update(['role' => 'banned']);
        return back()->with('success', 'Berhasil banned');
    }
}
