<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\Konfimasi;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\UpdateLoginRequest;
use App\Models\aproval;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login.login');
    }

    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|exists:users,email',
            'password' => 'required|min:6',
        ],[
            'email.required' => 'Masukkan Email Anda !!',
            'email.exists' => 'Email Yang Anda Masukkan Belum Terdaftar !!',
            'password.required' => 'Masukkan Kata Sandi Anda !!',
            'password.min' => 'Password Minimal 6 Huruf !!',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autentikasi berhasil
            $user = Auth::user();
            // Periksa peran pengguna dan arahkan ke rute yang sesuai
            if ($user->role == 'Admin') {
                return redirect()->route('dudi.index');
            } elseif ($user->role == 'Siswa') {
                return redirect()->route('siswamagang.index');
            } elseif ($user->role == 'guru') {
                return redirect()->route('guru.index');
            } elseif ($user->role == 'banned') {
                Auth::logout();
                return back()->with('error', 'Akun anda telah di banned');
            }

        }

        // Autentikasi gagal
        return redirect()->back()->withErrors('Login failed. Please check your credentials.');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLoginRequest  $request
     * @return \Illuminate\Http\Response
     */

public function store(Request $request)
{
    $this->validate($request , [
        'name'=>'required',
        'tempat'=>'required',
        'tanggal'=>'required',
        'kelas'=>'required',
        'nisn'=>'required',
        'jeniskelamin'=>'required',
        'alamat'=>'required',
        'sekolah'=>'required',
        'jurusan'=>'required',
        'magang_awal'=>'required',
        'magang_akhir'=>'required',
        'foto_siswa'=>'required',
        'sp_diri'=>'required',
        'sp_ortu'=>'required',
        'skck'=>'',
        'cv'=>'required',
        'email'=>'required',
        'password'=>'required',
    ]);

    if($request->file('skck') === null){
        $foto_siswa = $request->file('foto_siswa');
        $sp_diri = $request->file('sp_diri');
        $sp_ortu = $request->file('sp_ortu');
        $cv = $request->file('cv');

        $foto_siswa->storeAs('public/pendaftaran', $foto_siswa->hashName());
        $sp_diri->storeAs('public/pendaftaran', $sp_diri->hashName());
        $sp_ortu->storeAs('public/pendaftaran', $sp_ortu->hashName());
        $cv->storeAs('public/pendaftaran', $cv->hashName());

        $data = aproval::create([
            'name' => $request->name,
            'tempat' => $request->tempat,
            'tanggal' => $request->tanggal,
            'kelas' => $request->kelas,
            'nisn' => $request->nisn,
            'jeniskelamin' => $request->jeniskelamin,
            'alamat' => $request->alamat,
            'sekolah' => $request->sekolah,
            'jurusan' => $request->jurusan,
            'magang_awal' => $request->magang_awal,
            'magang_akhir' => $request->magang_akhir,
            'foto_siswa' => $foto_siswa->hashName(),
            'sp_diri' => $sp_diri->hashName(),
            'sp_ortu' => $sp_ortu->hashName(),
            'cv' => $cv->hashName(),
            'email' => $request->email,
            'no' => $request->no,
            'password' => Hash::make($request->password),
            'remember_token' => Str::random(60)
        ]);

        // Kirim email konfirmasi
        Mail::to($data->email)->send(new Konfimasi());

        return redirect()->route('login.index');
    }
}
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
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
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('login.index');
    }
}
