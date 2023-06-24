<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\UpdateLoginRequest;
use App\Models\aproval;
use App\Models\User;
use Illuminate\Auth\Events\Registered;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('loginregister.login');
    }

    public function postlogin(Request $request){
        $this->validate($request, [
            'email' => 'required|exists:users,email',
            'password' => 'required|min:6',
        ],[
            'email.required' => 'Masukkan Email Anda !!',
            'email.exists' => 'Email Yang Anda Masukkan Belum Terdaftar !!',
            'password.required' => 'Masukkan Kata Sandi Anda !!',
            'password.min' => 'Password Minimal 6 Huruf !!',
        ]);
        // toastr()->success('Berhasil Login!');

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'Admin'])) {
            return redirect()->route('dudi.index')->with('success','Berhasil Login Sebagai Admin');
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'Siswa'])) {
            return redirect()->route('siswamagang.index')->with('success','Berhasil Login Sebagai Siswa');
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'Guru'])) {
            return redirect()->route('guru.index')->with('success','Berhasil Login Sebagai Guru');
        }

            return redirect('login')->with('error','Password atau Email Salah');
    }

    public function register()
    {
        return view('loginregister.register');
    }

    public function postregister(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'name'=> 'required|unique:users|regex:/^[a-zA-Z ]+$/',
            'tempat'=> 'required',
            'tanggal'=> 'required',
            'kelas'=> 'required',
            'nisn'=> 'required|unique:users',
            'kelas'=> 'required',
            'jeniskelamin'=> 'required',
            'alamat'=> 'required',
            'sekolah'=> 'required',
            'jurusan'=> 'required',
            'magang_awal'=> 'required',
            'magang_akhir'=> 'required',
            'foto_siswa' => 'required|image|mimes:jpeg,png,jpg,|max:2048',
            'sp_diri' => 'required|mimes:pdf,doc,docx|max:2048',
            'sp_ortu' => 'required|mimes:pdf,doc,docx|max:2048',
            'skck' => 'mimes:pdf,doc,docx|max:2048',
            'cv' => 'required|mimes:pdf,doc,docx|max:2048',

            'email' => 'required|unique:users',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required|min:6'


        ],[
            'name.required' => 'Nama Siswa Harus Diisi !!',
            'name.unique' => 'Nama Siswa Sudah Digunakan !!',
            'name.regex' => 'Nama Siswa Tidak Boleh Menggunakan Angka !!',
            'tempat.required' => 'Kota Harus Diisi !!',
            'tanggal.required' => 'Tanggal lahir Harus Diisi !!',
            'jeniskelamin.required' => 'Jenis Kelamin Harus Diisi !!',
            'alamatsiswa.required' => 'Alamat Siswa Harus Diisi !!',
            'sekolah.required' => 'Sekolah Harus Diisi !!',
            'jurusan.required' => 'Jurusan Harus Diisi !!',
            'magang_awal.required' => 'Tanggal Awal Magang Harus Diisi !!',
            'magang_akhir.required' => 'Tanggal Akhir Magang Harus Diisi !!',
            'foto_siswa.required' => 'Foto Harus Diisi !!',
            'foto_siswa.mimes' => 'File harus berupa gambar dengan format jpeg, png, atau jpg',
            'sp_diri.required' => 'Surat Pernyataan Harus Diisi !!',
            'sp_diri.mimes' => 'File harus berupa gambar dengan format pdf, doc, atau dpcx',
            'sp_ortu.required' => 'Surat Pernyataan Harus Diisi !!',
            'sp_ortu.mimes' => 'File harus berupa gambar dengan format pdf, doc, atau dpcx',
            'skck.mimes' => 'File harus berupa gambar dengan format pdf, doc, atau dpcx',
            'cv.mimes' => 'File harus berupa gambar dengan format pdf, doc, atau dpcx',

            'email.required' => 'Email Harus Diisi !!',
            'email.unique' => 'Email Sudah Digunakan !!',
            'password.required' => 'Password Harus Diisi !!',
            'password.confirmed' => 'Sandi Tidak Sama!!',
            'password.min' => 'Isi Password Minimal 6 Huruf !!',
        ]);

        aproval::create([
            'name' => $request ->name,
            'email' => $request ->email,

            'tempat' => $request ->tempat,
            'tanggal' => $request ->tanggal,
            'kelas' => $request ->kelas,
            'nisn' => $request ->nisn,
            'jeniskelamin' => $request ->jeniskelamin,
            'alamat' => $request ->alamat,
            'sekolah' => $request ->sekolah,
            'jurusan' => $request ->jurusan,
            'magang_awal' => $request ->magang_awal,
            'magang_akhir' => $request ->magang_akhir,
            'foto_siswa' => $request ->foto_siswa,
            'sp_diri' => $request ->sp_diri,
            'sp_ortu' => $request ->sp_ortu,
            'skck' => $request ->skck,
            'cv' => $request ->cv,

            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
            'role' => 'Siswa'
        ]);

        return redirect('login')->with('success','Siswa Berhasil Daftar');
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
     * @param  \App\Http\Requests\StoreLoginRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoginRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLoginRequest  $request
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLoginRequest $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Login $login)
    {
        //
    }
}
