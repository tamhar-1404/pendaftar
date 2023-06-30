<?php

namespace App\Http\Controllers;

use App\Models\aproval;
use App\Models\User;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Requests\StoreaprovalRequest;
use App\Http\Requests\UpdateaprovalRequest;

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
        return view('aproval.view');
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
        $user = User::create([
            'name' => $aproval->name,
            'email' => $aproval->email,
            'role' => 'siswa',
            'password' => bcrypt($aproval->password)
        ]);
        Siswa::create([
            'foto' => $aproval->foto,
            'nama' => $aproval->nama,
            'jurusan' => $aproval->jurusan,
            'status_sp' => $aproval->status_sp,
            'email' => $aproval->email,
            'no' => $aproval->no,
            'awal' => $aproval->awal,
            'akhir' => $aproval->akhir,
            'sekolah' => $aproval->sekolah,
            'jk' => $aproval->jk,
            'kelas' => $aproval->kelas,
            'tempat_lahir' => $aproval->tempat_lahir,
            'tanggal_lahir' => $aproval->tanggal_lahir,
            'nisn' => $aproval->nisn,
            'alamat' => $aproval->alamat
        ]);

        $aproval->delete();

        return redirect()->route('aproval.index');
    } else {
        // Kondisi tidak memenuhi persyaratan
        return redirect()->back()->with('error', 'Maaf, tidak dapat melakukan konfirmasi pada data');
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
        // $data = aproval::where('id', 'LIKE', $id);
        return view('aproval.view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\aproval  $aproval
     * @return \Illuminate\Http\Response
     */
    public function edit(aproval $aproval)
    {
        //
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
