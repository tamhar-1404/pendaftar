<?php

namespace App\Http\Controllers;

use App\Models\Profilsiswa;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Siswa;
use App\Models\LaporanSiswa;
use App\Http\Requests\StoreProfilsiswaRequest;
use App\Http\Requests\UpdateProfilsiswaRequest;
use App\Models\Sp;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfilsiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Siswa = Siswa::where('id', Auth()->user()->siswa_id)->get();
        $sp = "";
        if (Sp::where('nama', Auth::user()->name)->exists()) {
            if (!empty(Sp::where('nama', Auth::user()->nama)->first()->sp_2)) {
                $sp = 'Sp2';
            }
            else {
                $sp = 'Sp1';
            }
        }
        else {
            $sp = 'Aman';
        }
        $data = LaporanSiswa::where('nama', Auth()->user()->name)->paginate(5);

        // dd($Siswa);
        return view('profil_siswa.detail', compact('Siswa', 'sp','data'));
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
        $siswa_id = Auth::user()->Siswa->id;
        if ($request->has('foto')) {
            $request->validate([
                'name' => 'required|max:255',
                'sekolah' => 'required|max:255',
                'foto' => 'required|image|mimes:png,jpg,jpeg',
                'email' => 'required|email|unique:siswas,email,' . $siswa_id,
                'no' => 'required',
                'alamat' => 'required',
            ], [
                'name.required' => 'nama tidak boleh kosong',
                'name.max' => 'nama tidak boleh lebih dari 255 huruf',
                'sekolah.max' => 'sekolah tidak boleh lebih dari 255 huruf',
                'sekolah.required' => 'sekolah tidak boleh kosong',
                'foto.required' => 'Kolom foto tidak boleh kosong.',
                'foto.image' => 'Kolom foto hanya boleh berisi gambar.',
                'foto.mimes' => 'Format gambar yang diperbolehkan hanya jpg, jpeg, dan png.',
                'email.required' => 'Kolom email tidak boleh kosong.',
                'email.email' => 'Format email tidak valid.',
                'email.unique' => 'Alamat email ini sudah digunakan.',
                'no.required' => 'Kolom nomor tidak boleh kosong.',
                'alamat.required' => 'Kolom alamat tidak boleh kosong.',
            ]);
            $old_foto = Siswa::find($siswa_id)->foto_siswa;
            if (File::exists(public_path('storage/Siswa/'.$old_foto))) {
                File::delete(public_path('storage/Siswa/'.$old_foto));
            }
            $foto = $request->file('foto');
            $nama_foto = $foto->hashName();
            $foto->storeAs('public/Siswa', $nama_foto);
            Siswa::find($siswa_id)->update([
                'name' => $request->name,
                'sekolah' => $request->sekolah,
                'email' => $request->email,
                'foto_siswa' => $nama_foto,
                'no' => $request->no,
                'alamat' => $request->alamat,
            ]);
            User::where('siswa_id', $siswa_id)->update([
                'sekolah' => $request->sekolah,
                'email' => $request->email,
            ]);
            return redirect()->route('profile_siswa')->with('success', 'Berhasil mengedit profil');
        }
        $request->validate([
            'name' => 'required|max:255',
            'sekolah' => 'required|max:255',
            'email' => 'required|email|unique:siswas,email,' . $siswa_id ,
            'no' => 'required',
            'alamat' => 'required',
        ],[
            'name.required' => 'nama tidak boleh kosong',
            'name.max' => 'nama tidak boleh lebih dari 255 huruf',
            'sekolah.max' => 'sekolah tidak boleh lebih dari 255 huruf',
            'sekolah.required' => 'sekolah tidak boleh kosong',
            'email.required' => 'Kolom email tidak boleh kosong.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Alamat email ini sudah digunakan.',
            'no.required' => 'Kolom nomor tidak boleh kosong.',
            'alamat.required' => 'Kolom alamat tidak boleh kosong.',
        ]);
        Siswa::find($siswa_id)->update([
            'name' => $request->name,
            'sekolah' => $request->sekolah,
            'email' => $request->email,
            'no' => $request->no,
            'alamat' => $request->alamat,
        ]);
        User::where('siswa_id', $siswa_id)->update([
            'sekolah' => $request->sekolah,
            'email' => $request->email,
        ]);
        return redirect()->route('profile_siswa')->with('success', 'Berhasil mengedit profil');
    }

    public function ganti_password(Request $request) {

        $request->validate([
            'old_password' => 'required',
            'password' => 'required|min:6|confirmed',
        ], [
            'old_password.required' => 'Password lama tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 6',
            'password.confirmed' => 'Password tidak sama',
        ]);
        $user_id = Auth::user()->id;
        if (Hash::check($request->old_password, User::find($user_id)->password)) {
            User::find($user_id)->update([
                'password' => Hash::make($request->password),
            ]);
            return redirect()->route('profile_siswa')->with('success', 'Berhasil mengedit password');
        }
        else {
            return redirect()->back()->with('error', 'Password lama tidak sama');
        }
    }
}
