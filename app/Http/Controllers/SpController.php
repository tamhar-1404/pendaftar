<?php

namespace App\Http\Controllers;

use App\Models\Sp;
use App\Http\Requests\StorespRequest;
use App\Http\Requests\UpdatespRequest;
use App\Mail\Sp as MailSp;
use App\Mail\SpGuru;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SpController extends Controller
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
            $data = Sp::where('nama', 'LIKE', '%' . $keyword . '%')->orWhere('deskripsi', 'LIKE', '%' . $keyword . '%')->paginate(10);
            return view('sp.index', compact('data'));

            $data->appends(['cari' => $keyword]);
            return view('sp.index', compact('data'));
        }

        $data = Sp::latest()->paginate(10);
        return view('sp.index', compact('data'));
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
     * @param  \App\Http\Requests\StorespRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'keterangan' => 'required',
            'buktisp' => 'required|image|mimes:png,jpg,jpeg',
        ], [
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
            'keterangan.required' => 'Keterangan harus dipilih',
            'buktisp.image' => 'Bukti sp harus gambar',
        ]);
        if (!Siswa::where('name', $request->nama)->exists()) {
            return back()->with('error', 'Siswa tidak ditemukan');
        }
        if (!empty(Siswa::where('name', $request->nama)->first()->status_sp)) {
            if (Siswa::where('name', $request->nama)->first()->status_sp != 'SP 2') {
                if ($request->keterangan == 'Sp1') {
                    Siswa::where('name', $request->nama)->update([
                        'status_sp' => 'SP 2',
                    ]);
                } else {
                    Siswa::where('name', $request->nama)->update([
                        'status_sp' => 'SP 2',
                    ]);
                }
            }
        }
        else {
            if ($request->keterangan == 'Sp1') {
                Siswa::where('name', $request->nama)->update([
                    'status_sp' => 'SP 1',
                ]);
            } else {
                Siswa::where('name', $request->nama)->update([
                    'status_sp' => 'SP 2',
                ]);
            }
        }
        if (Sp::where('nama', $request->nama)->exists()) {
            if ($request->keterangan == 'Sp1') {
                if (Sp::where([['nama', $request->nama], ['sp_1', 'Sp1']])->exists()) {
                    $image = $request->file('buktisp');
                    $iname = $image->hashName();
                    $image->storeAs('public/image', $iname);
                    Sp::where('nama', $request->nama)->update([
                        'bukti_2' => $iname,
                        'deskripsi_2' => $request->deskripsi,
                        'sp_2' => 'Sp2',
                    ]);
                    $user = User::where('name', $request->nama)->first();
                    $data = [
                        'nama' => $user->name,
                        'sp' => 'Sp2',
                        'alasan' => $request->deskripsi,
                        'bukti' => $iname,
                    ];
                    Mail::to($user->email)->send(new MailSp($data));
                    $sekolah = $user->sekolah;
                    if (User::where('sekolah', $sekolah)->where('role', 'guru')->exists()) {
                        $email_guru = User::where('sekolah', $sekolah)->where('role', 'guru')->first()->email;
                        Mail::to($email_guru)->send(new SpGuru($data));
                    }
                }
                $image = $request->file('buktisp');
                $iname = $image->hashName();
                $image->storeAs('public/image', $iname);
                Sp::where('nama', $request->nama)->update([
                    'bukti_1' => $iname,
                    'deskripsi_1' => $request->deskripsi,
                    'sp_1' => $request->keterangan,
                ]);
                $user = User::where('name', $request->nama)->first();
                $data = [
                    'nama' => $user->name,
                    'sp' => 'Sp 1',
                    'alasan' => $request->deskripsi,
                    'bukti' => $iname,
                ];
                Mail::to($user->email)->send(new MailSp($data));
                $sekolah = $user->sekolah;
                if (User::where('sekolah', $sekolah)->where('role', 'guru')->exists()) {
                    $email_guru = User::where('sekolah', $sekolah)->where('role', 'guru')->first()->email;
                    Mail::to($email_guru)->send(new SpGuru($data));
                }
            }
            else {
                $image = $request->file('buktisp');
                $iname = $image->hashName();
                $image->storeAs('public/image', $iname);
                Sp::where('nama', $request->nama)->update([
                    'bukti_2' => $iname,
                    'deskripsi_2' => $request->deskripsi,
                    'sp_2' => $request->keterangan,
                ]);
                $user = User::where('name', $request->nama)->first();
                $data = [
                    'nama' => $user->name,
                    'sp' => 'Sp 2',
                    'alasan' => $request->deskripsi,
                    'bukti' => $iname,
                ];
                Mail::to($user->email)->send(new MailSp($data));
                $sekolah = $user->sekolah;
                if (User::where('sekolah', $sekolah)->where('role', 'guru')->exists()) {
                    $email_guru = User::where('sekolah', $sekolah)->where('role', 'guru')->first()->email;
                    Mail::to($email_guru)->send(new SpGuru($data));
                }
            }
        } else {
            if ($request->keterangan == 'Sp1') {
                $image = $request->file('buktisp');
                $iname = $image->hashName();
                $image->storeAs('public/image', $iname);

                Sp::create([
                    'nama' => $request->nama,
                    'bukti_1' => $iname,
                    'deskripsi_1' => $request->deskripsi,
                    'sp_1' => $request->keterangan,
                ]);
                $user = User::where('name', $request->nama)->first();
                $data = [
                    'nama' => $user->nama,
                    'sp' => 'Sp 1',
                    'alasan' => $request->deskripsi,
                    'bukti' => $iname,
                ];
                Mail::to($user->email)->send(new MailSp($data));
                $sekolah = $user->sekolah;
                if (User::where('sekolah', $sekolah)->where('role', 'guru')->exists()) {
                    $email_guru = User::where('sekolah', $sekolah)->where('role', 'guru')->first()->email;
                    Mail::to($email_guru)->send(new SpGuru($data));
                }
            } else {
                $image = $request->file('buktisp');
                $iname = $image->hashName();
                $image->storeAs('public/image', $iname);
                Sp::create([
                    'nama' => $request->nama,
                    'bukti_2' => $iname,
                    'deskripsi_2' => $request->deskripsi,
                    'sp_2' => $request->keterangan,
                ]);
                $user = User::where('name', $request->nama)->first();
                $sekolah = $user->sekolah;
                $data = [
                    'nama' => $user->nama,
                    'sp' => 'Sp 2',
                    'alasan' => $request->deskripsi,
                    'bukti' => $iname,
                ];
                Mail::to($user->email)->send(new MailSp($data));
                if (User::where('sekolah', $sekolah)->where('role', 'guru')->exists()) {
                    $email_guru = User::where('sekolah', $sekolah)->where('role', 'guru')->first()->email;
                    Mail::to($email_guru)->send(new SpGuru($data));
                }
            }
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sp  $sp
     * @return \Illuminate\Http\Response
     */
    public function show(Sp $sp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sp  $Sp
     * @return \Illuminate\Http\Response
     */
    public function edit(Sp $Sp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatespRequest  $request
     * @param  \App\Models\Sp  $Sp
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatespRequest $request, Sp $Sp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sp  $Sp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sp $Sp)
    {
        //
    }
}
