<?php

namespace App\Http\Controllers;

use App\Models\aproval;
use App\Models\User;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Requests\StoreaprovalRequest;
use App\Http\Requests\UpdateaprovalRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;
use App\Mail\tolakEmail;
use Illuminate\Support\Facades\Storage;

class AprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aprovals = aproval::latest()->paginate(5);
        return view('aproval.layout' , compact('aprovals'));
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
     * @param  \App\Http\Requests\StoreaprovalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Aproval $approval, Siswa $siswa)
{
    //
}

public function confirm(Aproval $aproval)
{
    if ($aproval->status === 'menunggu') {
        Mail::to($aproval->email)->send(new DemoMail($aproval));

        $user = User::create([
            'name' => $aproval->name,
            'email' => $aproval->email,
            'role' => 'siswa',
            'password' => bcrypt($aproval->password)
        ]);
        Siswa::create([
            'foto_siswa' => $aproval->foto_siswa,
            'name' => $aproval->name,
            'jurusan' => $aproval->jurusan,
            'status_sp' => $aproval->status_sp,
            'email' => $aproval->email,
            'no' => $aproval->no,
            'magang_awal' => $aproval->magang_awal,
            'magang_akhir' => $aproval->magang_akhir,
            'sekolah' => $aproval->sekolah,
            'jeniskelamin' => $aproval->jeniskelamin,
            'kelas' => $aproval->kelas,
            'tempat' => $aproval->tempat,
            'tanggal' => $aproval->tanggal,
            'nisn' => $aproval->nisn,
            'alamat' => $aproval->alamat
        ]);
        Storage::delete('public/pendaftaran/'. $aproval->foto_siswa);
        Storage::delete('public/pendaftaran/'. $aproval->skck);
        Storage::delete('public/pendaftaran/'. $aproval->cv);
        Storage::delete('public/pendaftaran/'. $aproval->sp_ortu);
        Storage::delete('public/pendaftaran/'. $aproval->sp_diri);
        $aproval->delete();

        return redirect()->route('aproval.index');
    } else {
        return redirect()->back()->with('error', 'Maaf, tidak dapat melakukan konfirmasi pada data');
    }
}
public function tolak(Request $request, Aproval $aproval)
{
    $alasan = $request->input('alasan');

    if ($alasan) {
        $emailData = [
            'content' => 'Data Anda telah ditolak dengan alasan: ' . $alasan,
        ];
        Mail::to($aproval->email)->send(new TolakEmail($emailData));
         Storage::delete('public/pendaftaran/'. $aproval->foto_siswa);
        Storage::delete('public/pendaftaran/'. $aproval->skck);
        Storage::delete('public/pendaftaran/'. $aproval->cv);
        Storage::delete('public/pendaftaran/'. $aproval->sp_ortu);
        Storage::delete('public/pendaftaran/'. $aproval->sp_diri);
        $aproval->delete();
        return redirect()->route('aproval.index')->with('status', 'Data berhasil ditolak!');
    } else {
        return redirect()->back()->with('error', 'Masukkan alasan penolakan.');
    }
}
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\aproval  $aproval
     * @return \Illuminate\Http\Response
     */
    public function show(aproval $aproval)
    {
    //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\aproval  $aproval
     * @return \Illuminate\Http\Response
     */
    public function edit(aproval $aproval)
    {
        return view('aproval.edit' , compact('aproval'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateaprovalRequest  $request
     * @param  \App\Models\aproval  $aproval
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, aproval $aproval)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\aproval  $aproval
     * @return \Illuminate\Http\Response
     */
    public function destroy(aproval $aproval)
    {
        //
    }
}
