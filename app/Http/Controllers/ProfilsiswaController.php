<?php

namespace App\Http\Controllers;

use App\Models\Profilsiswa;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Siswa;
use App\Http\Requests\StoreProfilsiswaRequest;
use App\Http\Requests\UpdateProfilsiswaRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfilsiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Siswa = Siswa::Where('id', Auth()->user()->siswa_id)->get();
        // dd($Siswa);
        return view('profil_siswa.detail', compact('Siswa'));
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
     * @param  \App\Http\Requests\StoreProfilsiswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfilsiswaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profilsiswa  $Profilsiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Profilsiswa $Profilsiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profilsiswa  $Profilsiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Profilsiswa $Profilsiswa)
    {
        $siswa = Siswa::where('id', Auth()->user()->siswa_id)->first();
        return view('profil_siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfilsiswaRequest  $request
     * @param  \App\Models\Profilsiswa  $Profilsiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profilsiswa $Profilsiswa)
    {
        $this->validate($request , [
            'foto_siswa'=>'mimes:jpg,png',
        ]);
        $Siswa = Siswa::where('id', Auth()->user()->id)->first();
        $data = Siswa::find( Auth()->user()->id);
        $foto_old = $Siswa->foto_siswa;
        // dd($foto_old);
        if($request->foto == null){

            $Siswa->update([
                'name'=>$request->nama,
                'email'=>$request->email,
                'no'=>$request->no,
                'alamat'=>$request->alamat
            ]);

            return redirect()->route('profile_siswa');
        }elseif($foto_old == null){
            // $image = $request->file('foto');
            // $image->storeAs('public/Siswa/', $image->hashName());
            // $data->update([
            //     'foto_siswa'=>$image->hashName(),
            //     'name'=>$request->nama,
            //     'email' =>$request->email,
            //     'no' => $request->no,
            //     'alamat' => $request->alamat
            // ]);
            return redirect()->route('profile_siswa');
        }
        else{
            $data = Siswa::find($Siswa->id);
            Storage::delete([
                'public/Siswa/' . $foto_old,
            ]);
            $image = $request->file('foto');
            $image->storeAs('public/Siswa/', $image->hashName());
            $data->update([
                'foto_siswa'=>$image->hashName(),
                'name'=>$request->nama,
                'email' =>$request->email,
                'no' => $request->no,
                'alamat' => $request->alamat
            ]);
            return redirect()->route('profile_siswa');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profilsiswa  $Profilsiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profilsiswa $Profilsiswa)
    {
        //
    }
    public function perbarui(Request $request) {
        // dd($request->all());
        $siswa_id = $request->siswa_id;
        if ($request->has('foto')) {
            $old_foto = Siswa::find($siswa_id)->foto_siswa;
            if (File::exists(public_path('storage/Siswa/'.$old_foto))) {
                File::delete(public_path('storage/Siswa/'.$old_foto));
            }
            $foto = $request->file('foto');
            $nama_foto = $foto->hashName();
            $foto->storeAs('public/Siswa', $nama_foto);
            Siswa::find($siswa_id)->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'foto_siswa' => $nama_foto,
                'no' => $request->no,
                'alamat' => $request->alamat,
            ]);
            User::where('siswa_id', $siswa_id)->update([
                'email' => $request->email,
            ]);
            return redirect()->route('profile_siswa')->with('success', 'Berhasil mengedit profil');
        }
        Siswa::find($siswa_id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'no' => $request->no,
            'alamat' => $request->alamat,
        ]);
        User::where('siswa_id', $siswa_id)->update([
            'email' => $request->email,
        ]);
        return redirect()->route('profile_siswa')->with('success', 'Berhasil mengedit profil');
    }
}
