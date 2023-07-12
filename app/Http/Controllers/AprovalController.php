<?php

namespace App\Http\Controllers;

use App\Models\aproval;
use App\Models\User;
use App\Models\Siswa;
use App\Models\tolak;
use Illuminate\Http\Request;
use App\Http\Requests\StoreaprovalRequest;
use App\Http\Requests\UpdateaprovalRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Mail\DemoMail;
use App\Mail\Konfirmasi;
use App\Mail\Guru_email;
use App\Mail\tolakEmail;
use Illuminate\Support\Facades\Storage;

class AprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $aprovals = aproval::where('name', 'LIKE', '%' . $keyword . '%')->orWhere('jurusan', 'LIKE', '%' . $keyword . '%')->get();
            return view('aproval.layout', compact('aprovals'));
        }
        $aprovals = aproval::latest()->paginate(5);
        return view('aproval.layout', compact('aprovals'));
        
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

        $users = User::where('role', 'guru')->where('sekolah', $aproval->sekolah)->get();

        foreach ($users as $user) {
           Mail::to($user->email)->send(new Guru_email($aproval->name));
        }

        $foto_siswa = $aproval->foto_siswa;
         $data = Siswa::create([
            'foto_siswa' => $foto_siswa,
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

        $data->save();



        Storage::move('public/pendaftaran/' . $foto_siswa, 'public/Siswa/' . $foto_siswa);

        Storage::delete('public/pendaftaran/'. $aproval->foto_siswa);
        Storage::delete('public/pendaftaran/'. $aproval->skck);
        Storage::delete('public/pendaftaran/'. $aproval->cv);
        Storage::delete('public/pendaftaran/'. $aproval->sp_ortu);
        Storage::delete('public/pendaftaran/'. $aproval->sp_diri);
        $aproval->delete();

        $user = User::create([
            'name' => $aproval->name,
            'email' => $aproval->email,
            'sekolah' => $aproval->sekolah,
            'password' =>$aproval->password,
            'role' => 'Siswa',
            'remember_token' =>$aproval->remember_token,
            'siswa_id' => $data->id
        ]);

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

        $foto_siswa = $aproval->foto_siswa;
        $sp_diri = $aproval->sp_diri;
        $sp_ortu = $aproval->sp_ortu;
        $skck = $aproval->skck;
        $cv = $aproval->cv;

        tolak::create([
            'name' => $aproval->name,
            'alasan' => $alasan,
            'tempat' => $aproval->tempat,
            'tanggal' => $aproval->tanggal,
            'kelas' => $aproval->kelas,
            'nisn' => $aproval->nisn,
            'jeniskelamin' => $aproval->jeniskelamin,
            'alamat' => $aproval->alamat,
            'sekolah' => $aproval->sekolah,
            'jurusan' => $aproval->jurusan,
            'magang_awal' => $aproval->magang_awal,
            'magang_akhir' => $aproval->magang_akhir,
            'foto_siswa' => $foto_siswa,
            'sp_diri' => $sp_diri,
            'sp_ortu' => $sp_ortu,
            'skck' => $skck,
            'cv' => $cv,
            'email' => $aproval->email,
            'no' => $aproval->no,
            'password' => bcrypt($aproval->password)
        ]);

        Mail::to($aproval->email)->send(new TolakEmail($aproval)); // Mengirim email ke siswa yang ditolak

        $guruList = User::where('role', 'guru')
            ->where('sekolah', $aproval->sekolah)
            ->get();

        if ($guruList->isNotEmpty()) {
            $guruEmails = $guruList->pluck('email')->toArray();
            Mail::to($guruEmails)->send(new TolakEmail($aproval)); // Mengirim email ke guru dengan nama sekolah yang sama
        }

        Storage::move('public/pendaftaran/' . $foto_siswa, 'public/ditolak/' . $foto_siswa);
        Storage::move('public/pendaftaran/' . $sp_diri, 'public/ditolak/' . $sp_diri);
        Storage::move('public/pendaftaran/' . $sp_ortu, 'public/ditolak/' . $sp_ortu);
        Storage::move('public/pendaftaran/' . $skck, 'public/ditolak/' . $skck);
        Storage::move('public/pendaftaran/' . $cv, 'public/ditolak/' . $cv);

        $aproval->delete();

        return redirect()->route('aproval.index');
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
