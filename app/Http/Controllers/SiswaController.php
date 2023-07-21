<?php

namespace App\Http\Controllers;

use App\Mail\Banned;
use App\Models\User;
use App\Models\Siswa;
use App\Mail\BannedGuru;
use App\Models\LaporanSiswa;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreSiswaRequest;
use App\Http\Requests\UpdateSiswaRequest;

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
        Siswa::whereDate('magang_akhir', '<=', $today)->update(['role' => 'alumni', 'status' => 'lulus']);
        $siswas = Siswa::where('role', 'siswa')->get();

        if ($request->has('cari')) {
            $keyword = $request->cari;
            $siswas = Siswa::where('name', 'LIKE', '%' . $keyword . '%')->orWhere('jurusan', 'LIKE', '%' . $keyword . '%')->paginate(3);
            return view('siswa_admin.index', compact('siswas'));
        }

        $aprovals = Siswa::latest()->paginate(3);

        return view('siswa_admin.index', compact('siswas'));
    }


    public function siswamagang_siswa()
    {
        $siswas = Siswa::all();
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
    public function rfid()
    {
        $users = User::where('role', 'Siswa')
                    ->whereNull('RFID')
                    ->get();
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
        $emailguru = User::where('role', 'Guru')->where('sekolah', $siswa->sekolah)->first()->email;
        $email = $siswa->email;
        $nama = $siswa->name;
        $data = [
            'alasan' => $alasan,
            'nama' => $nama,
        ];
        Mail::to($emailguru)->send(new BannedGuru($data));
        Mail::to($email)->send(new Banned($data));
        $siswa->update([
            'role' => 'Alumni',
            'status' => 'Dikeluarkan',
        ]);
        User::where('name', $siswa->name)->update(['role' => 'banned']);
        return back()->with('success', 'Berhasil banned');
    }
}
