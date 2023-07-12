<?php

namespace App\Http\Controllers;

use App\Models\sp;
use App\Http\Requests\StorespRequest;
use App\Http\Requests\UpdatespRequest;
use App\Mail\Sp as MailSp;
use App\Mail\SpGuru;
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
    public function index()
    {
        $data = sp::all();
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

        $this->validate($request, [


        ]);
        if (sp::where('nama', $request->nama)->exists()) {
            if ($request->keterangan == 'Sp1') {
                if (sp::where([['nama', $request->nama], ['sp_1', 'Sp1']])->exists()) {
                    $image = $request->file('buktisp');
                    $image->storeAs('public/image', $image->hashName());
                    $iname = $image->hashName();
                    sp::where('nama', $request->nama)->update([
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
                    $email_guru = User::where('sekolah', $sekolah)->where('role', 'guru')->first()->email;
                    Mail::to($email_guru)->send(new SpGuru($data));
                }
                $image = $request->file('buktisp');
                $image->storeAs('public/image', $image->hashName());
                $iname = $image->hashName();
                sp::where('nama', $request->nama)->update([
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
                $email_guru = User::where('sekolah', $sekolah)->where('role', 'guru')->first()->email;
                Mail::to($email_guru)->send(new SpGuru($data));
            }
            else {
                $image = $request->file('buktisp');
                $image->storeAs('public/image', $image->hashName());
                $iname = $image->hashName();

                sp::where('nama', $request->nama)->update([
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
                $email_guru = User::where('sekolah', $sekolah)->where('role', 'guru')->first()->email;
                Mail::to($email_guru)->send(new SpGuru($data));
            }
        } else {
            if ($request->keterangan == 'Sp1') {
                $image = $request->file('buktisp');
                $image->storeAs('public/image', $image->hashName());
                $iname = $image->hashName();

                sp::create([
                    'nama' => $request->nama,
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
                $email_guru = User::where('sekolah', $sekolah)->where('role', 'guru')->first()->email;
                Mail::to($email_guru)->send(new SpGuru($data));
            } else {
                $image = $request->file('buktisp');
                $image->storeAs('public/image', $image->hashName());
                $iname = $image->hashName();
                sp::create([
                    'nama' => $request->name,
                    'bukti_2' => $iname,
                    'deskripsi_2' => $request->deskripsi,
                    'sp_2' => $request->keterangan,
                ]);
                $user = User::where('name', $request->nama)->first();
                $sekolah = $user->sekolah;
                $data = [
                    'nama' => $user->name,
                    'sp' => 'Sp 2',
                    'alasan' => $request->deskripsi,
                    'bukti' => $iname,
                ];
                Mail::to($user->email)->send(new MailSp($data));
                $email_guru = User::where('sekolah', $sekolah)->where('role', 'guru')->first()->email;
                Mail::to($email_guru)->send(new SpGuru($data));

            }
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sp  $sp
     * @return \Illuminate\Http\Response
     */
    public function show(sp $sp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sp  $sp
     * @return \Illuminate\Http\Response
     */
    public function edit(sp $sp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatespRequest  $request
     * @param  \App\Models\sp  $sp
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatespRequest $request, sp $sp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sp  $sp
     * @return \Illuminate\Http\Response
     */
    public function destroy(sp $sp)
    {
        //
    }
}
