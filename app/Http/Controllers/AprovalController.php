<?php

namespace App\Http\Controllers;

use App\Models\Aproval;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Tolak;
use App\Models\TopUp;
use Illuminate\Http\Request;
use App\Http\Requests\StoreaprovalRequest;
use App\Http\Requests\UpdateaprovalRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Mail\DemoMail;
use App\Mail\Konfirmasi;
use App\Mail\Guru_email;
use App\Mail\TolakEmail;
use App\Mail\TolakTopup;
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
            $aprovals = Aproval::where('name', 'LIKE', '%' . $keyword . '%')->orWhere('jurusan', 'LIKE', '%' . $keyword . '%')->paginate(10);
            return view('aproval.layout', compact('aprovals'));

            $aprovals->appends(['cari' => $keyword]);
            return view('aproval.layout', compact('aprovals'));
        }

        $aprovals = Aproval::latest()->paginate(10);
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
     * Store a newly created resource in Storage.
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
        // Send DemoMail to the email associated with $aproval
        Mail::to($aproval->email)->send(new DemoMail($aproval));

        // Get all users with role 'guru' and the same school as $aproval
        $users = User::where('role', 'guru')->where('sekolah', $aproval->sekolah)->get();

        // Send Guru_email to each guru's email
        foreach ($users as $user) {
            Mail::to($user->email)->send(new Guru_email($aproval->name));
        }

        // Check if there are any records in Tolak with the same nisn as $aproval, and delete them
        $tolak = Tolak::where('nisn', $aproval->nisn)->count();
        if ($tolak > 0) {
            Tolak::where('nisn', $aproval->nisn)->delete();
        }

        // Create a new Siswa record with the data from $aproval
        $data = Siswa::create($aproval->toArray());

        // Move the file from pendaftaran to Siswa folder
        $foto_siswa = $aproval->foto_siswa;
        Storage::move('public/pendaftaran/' . $foto_siswa, 'public/Siswa/' . $foto_siswa);

        // Delete files from pendaftaran folder
        Storage::delete([
            'public/pendaftaran/' . $aproval->foto_siswa,
            'public/pendaftaran/' . $aproval->skck,
            'public/pendaftaran/' . $aproval->cv,
            'public/pendaftaran/' . $aproval->sp_ortu,
            'public/pendaftaran/' . $aproval->sp_diri,
        ]);

        // Delete the $aproval record
        $aproval->delete();

        // Create a new User record associated with the Siswa record
        $user = User::create([
            'name' => $aproval->name,
            'email' => $aproval->email,
            'sekolah' => $aproval->sekolah,
            'password' => $aproval->password,
            'role' => 'Siswa',
            'remember_token' => $aproval->remember_token,
            'siswa_id' => $data->id,
        ]);

        return redirect()->route('aproval.index');
    } else {
        return redirect()->back()->with('error', 'Maaf, tidak dapat melakukan konfirmasi pada data');
    }
}
public function Tolak(Request $request, Aproval $aproval)
{
    $alasan = $request->input('alasan');

    if ($alasan) {
        $emailData = [
            'content' => 'Data Anda telah ditolak dengan alasan: ' . $alasan,
        ];
        $pesanguru = [
            'content' => 'Siswa dengan nama : '. $aproval->name . ' Data Anda telah ditolak dengan alasan: ' . $alasan,
        ];

        $foto_siswa = $aproval->foto_siswa;
        $sp_diri = $aproval->sp_diri;
        $sp_ortu = $aproval->sp_ortu;
        $skck = $aproval->skck;
        $cv = $aproval->cv;

        Tolak::create([
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

        Mail::to($aproval->email)->send(new TolakEmail($emailData)); // Mengirim email ke siswa yang diTolak

        $guruList = User::where('role', 'guru')
            ->where('sekolah', $aproval->sekolah)
            ->get();

        if ($guruList->isNotEmpty()) {
            $guruEmails = $guruList->pluck('email')->toArray();
            Mail::to($guruEmails)->send(new TolakEmail($pesanguru)); // Mengirim email ke guru dengan nama sekolah yang sama
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
     * @param  \App\Models\Aproval  $Aproval
     * @return \Illuminate\Http\Response
     */
    public function show(Aproval $aproval)
    {
    //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aproval  $Aproval
     * @return \Illuminate\Http\Response
     */
    public function edit(Aproval $aproval)
    {
        return view('aproval.edit' , compact('aproval'));
    }

    /**
     * Update the specified resource in Storage.
     *
     * @param  \App\Http\Requests\UpdateaprovalRequest  $request
     * @param  \App\Models\Aproval  $Aproval
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TopUp $topup , $id)
    {
        $topup = TopUp::find($id);
        $user = $topup->user;
        $this->validate($request, [
            'status' => 'required',
        ]);

        $topup->update([
            'status' => $request->status,
        ]);
        Mail::to($user->email)->send(new TolakTopup());

        return redirect()->back()->with('success', 'Berhasil menolak topup');
    }

    /**
     * Remove the specified resource from Storage.
     *
     * @param  \App\Models\Aproval  $Aproval
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aproval $aproval)
    {
        //
    }
}
