<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\Konfimasi;
use App\Models\Login;
use App\Models\Siswa;
use App\Models\Limit;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\UpdateLoginRequest;
use App\Mail\PendaftaranAdmin;
use App\Models\Aproval;
use App\Models\Guru_admin;
use App\Models\MOU;
use App\Models\Tolak;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\QueryException;
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
         // Ambil hari saat ini
        $data = User::all();
        return view('login.login', compact('data'));
    }
    public function halaman_awal()
    {
         // Ambil hari saat ini
        return view('index');
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
        $today = Carbon::now()->format('Y-m-d');

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autentikasi berhasil
            $user = Auth::user();
            // Periksa peran pengguna dan arahkan ke rute yang sesuai
            if ($user->role == 'Admin') {
                return redirect()->route('dudi.index');
            } elseif ($user->role == 'Siswa') {
                $data = $user->siswa_id;
                $siswa = Siswa::where('id', $data)->first();
                $tanggal = $siswa->magang_awal;
                if($tanggal > now()){
                    return redirect()->back()->with('error', 'anda masih belum masuk magang');;
                }
                return redirect()->route('Siswamagang.index');

            } elseif ($user->role == 'guru') {
                return redirect()->route('guru.index');
            } elseif ($user->role == 'banned') {
                Auth::logout();
                return back()->with('error', 'Akun anda telah di banned');
            }

        }

        // Autentikasi gagal
    return redirect()->back()->with('error', 'Email / password salah');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $total_semua_siswa = Siswa::where('role', 'siswa')->count() + Aproval::count();
        $limit = Limit::find(1);
        // dd($limit->limit);
        if ($total_semua_siswa > $limit->limit) {
            // dd("awokwok");
            return redirect()->route('login.index')->with('limitbang', "Kuota pendaftaran sudah habis");
        } else {
            return view('login.register');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLoginRequest  $request
     * @return \Illuminate\Http\Response
     */

public function store(Request $request)
{
    $total_semua_siswa = (int) Siswa::where('role', 'siswa')->count() + (int) Aproval::count();
    $limit = (int) Limit::pluck('limit');
    if ($total_semua_siswa > $limit) {
        return back()->with('limitbang', "Kuota pendaftaran sudah habis");
    }
    if (User::where('email', $request->email)->exists() || Siswa::where('email', $request->email)->exists() || Guru_admin::where('email', $request->email)->exists() || MOU::where('email', $request->email)->exists() || Tolak::where('email', $request->email)->exists() ) {
        return back()->with('error', 'Email sudah digunakan');
        // return "Duplikat";
    }

    try {
        if($request->file('skck') === null){
            $this->validate($request , [
                'name'=>'required',
                'tempat'=>'required',
                'tanggal'=>'required',
                'kelas'=>'required',
                'nisn'=>'required:unique:users',
                'jeniskelamin'=>'required',
                'alamat'=>'required',
                'sekolah'=>'required',
                'jurusan'=>'required',
                'magang_awal'=>'required',
                'magang_akhir'=>'required',
                'foto_siswa'=>'required|image|mimes:jpg,jpeg,png',
                'sp_diri'=>'required|image|mimes:jpg,jpeg,png',
                'sp_ortu'=>'required|image|mimes:jpg,jpeg,png',
                'cv'=>'required|image|mimes:jpg,jpeg,png',
                'email'=>'required|unique:users,email',
                'password'=>'required|min:6',
                'confirm-password'=>'required|min:6',
            ],[
                'kelas.required' => 'pilih salah satu',
                'foto_siswa.mimes' => 'masukan gambar dengan ekstensi jpg, jpeg, png',
                'sp_diri.mimes' => 'masukan gambar dengan ekstensi jpg, jpeg, png',
                'sp_ortu.mimes' => 'masukan gambar dengan ekstensi jpg, jpeg, png',
                'cv.mimes' => 'masukan gambar dengan ekstensi jpg, jpeg, png',
                'password.required' => 'Password lama tidak boleh kosong',
                'confirm-password.required' => 'Password tidak boleh kosong',
                'password.min' => 'Password minimal 6',
            ]);
            $foto_siswa = $request->file('foto_siswa');
            $sp_diri = $request->file('sp_diri');
            $sp_ortu = $request->file('sp_ortu');
            $cv = $request->file('cv');

            $foto_siswa->storeAs('public/pendaftaran', $foto_siswa->hashName());
            $sp_diri->storeAs('public/pendaftaran', $sp_diri->hashName());
            $sp_ortu->storeAs('public/pendaftaran', $sp_ortu->hashName());
            $cv->storeAs('public/pendaftaran', $cv->hashName());

            $data = Aproval::create([
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
            $email_admin = User::where('role', 'Admin')->first()->email;
            $data = [
                'nama' => $request->name,
            ];
            Mail::to($email_admin)->send(new PendaftaranAdmin($data));

            return redirect()->route('login.index')->with('berhasil_daftar', 'silangkan Tunggu proses selama paling lama 2 hari.');
        }
    } catch (Exception $e) {
        return back()->with('error', "Email sudah digunakan");
    }

    try {
        $this->validate($request , [
            'name'=>'required',
            'tempat'=>'required',
            'tanggal'=>'required',
            'kelas'=>'required',
            'nisn'=>'required:unique:users',
            'jeniskelamin'=>'required',
            'alamat'=>'required',
            'sekolah'=>'required',
            'jurusan'=>'required',
            'magang_awal'=>'required',
            'magang_akhir'=>'required',
            'foto_siswa'=>'required|image|mimes:jpg,jpeg,png',
            'sp_diri'=>'required|image|mimes:jpg,jpeg,png',
            'sp_ortu'=>'required|image|mimes:jpg,jpeg,png',
            'cv'=>'required|image|mimes:jpg,jpeg,png',
            'skck'=>'required|image|mimes:jpg,jpeg,png',
            'email'=>'required|unique:users,email',
            'password'=>'required|min:6',
        ],[
            'kelas.required' => 'pilih salah satu',
            'foto_siswa.mimes' => 'masukan gambar dengan ekstensi jpg, jpeg, png',
            'sp_diri.mimes' => 'masukan gambar dengan ekstensi jpg, jpeg, png',
            'sp_ortu.mimes' => 'masukan gambar dengan ekstensi jpg, jpeg, png',
            'cv.mimes' => 'masukan gambar dengan ekstensi jpg, jpeg, png',
        ]);
        if($request->file('skck') !== null){
            $foto_siswa = $request->file('foto_siswa');
            $sp_diri = $request->file('sp_diri');
            $sp_ortu = $request->file('sp_ortu');
            $skck = $request->file('skck');
            $cv = $request->file('cv');

            $foto_siswa->storeAs('public/pendaftaran', $foto_siswa->hashName());
            $sp_diri->storeAs('public/pendaftaran', $sp_diri->hashName());
            $sp_ortu->storeAs('public/pendaftaran', $sp_ortu->hashName());
            $skck->storeAs('public/pendaftaran', $skck->hashName());
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
                'skck' => $skck->hashName(),
                'cv' => $cv->hashName(),
                'email' => $request->email,
                'no' => $request->no,
                'password' => Hash::make($request->password),
                'remember_token' => Str::random(60)
            ]);

            // Kirim email konfirmasi
            Mail::to($data->email)->send(new Konfimasi());

            return redirect()->route('login.index')->with('berhasil_daftar', 'silangkan Tunggu proses selama paling lama 2 hari.');
        }
    } catch (Exception $e) {
        return back()->with('error', "Email sudah digunakan");
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
            return redirect()->route('Siswamagang.index')->with('success','Berhasil Login Sebagai Siswa');
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
    public function Logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('login.index');
    }
}
