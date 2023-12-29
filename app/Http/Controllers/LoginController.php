<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\Konfimasi;
use App\Models\Login;
use App\Models\Siswa;
use App\Models\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateLoginRequest;
use App\Mail\PendaftaranAdmin;
use App\Models\Aproval;
use App\Models\Guru_admin;
use App\Models\MOU;
use App\Models\Tolak;
use App\Models\User;
use App\Rules\EmailRule;
use App\Rules\NisnRule;
use Carbon\Carbon;
use Exception;
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
            'email' => 'required|exists:users,email|max:225',
            'password' => 'required|min:6|max:225',
        ],[
            'email.max' => 'Masukan 225 karakter!',
            'password.max' => 'Masukan 225 karakter!',
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
                    return redirect()->back()->with('error', 'anda masih belum masuk magang');
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
    return redirect()->back()->with('error', 'Email / password salah')->withInput();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $total_semua_siswa = Siswa::where('role', 'siswa')->count() + Aproval::count();
        if (!empty(Limit::first())) {
            $limit = (int) Limit::find(1)->limit;
            if ($total_semua_siswa >= $limit) {
                // dd("awokwok");
                return redirect()->route('login.index')->with('limitbang', "Kuota pendaftaran sudah habis");
            }
        }
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
    $total_semua_siswa = Siswa::where('role', 'siswa')->count() + Aproval::count();
    if (!empty(Limit::first())) {
        $limit = Limit::find(1)->limit;
        if ($total_semua_siswa > $limit) return redirect()->route('login.index')->with('limitbang', "Kuota pendaftaran sudah habis")->withInput();
    }

    try {
        $this->validate($request , [
            'name'=>'required',
            'tempat'=>'required',
            'tanggal'=>'required|date|before:today',
            'kelas'=>'required',
            'nisn'=> ['required', new NisnRule],
            'jeniskelamin'=>'required',
            'alamat'=>'required',
            'sekolah'=>'required',
            'jurusan'=>'required',
            'magang_awal'=>'required|date',
            'magang_akhir'=>'required|date|after:magang_awal',
            'foto_siswa'=>'required|image|mimes:jpg,jpeg,png',
            'sp_diri'=>'required|image|mimes:jpg,jpeg,png',
            'sp_ortu'=>'required|image|mimes:jpg,jpeg,png',
            'cv'=>'required|image|mimes:jpg,jpeg,png',
            'skck' => 'nullable|image',
            'email'=> ['required', 'email', new EmailRule],
            'password'=>'required|min:6',
            'confirm-password'=>'required|min:6',
        ],[
            'name.required' => 'Nama tidak boleh kosong',
            'tempat.required' => 'Tempat tidak boleh kosong',
            'tanggal.required' => 'Tanggal tidak boleh kosong',
            'tanggal.date' => 'Tanggal harus dalam format tanggal yang valid',
            'kelas.required' => 'Harap pilih salah satu kelas',
            'nisn.required' => 'NISN tidak boleh kosong',
            'magang_akhir.after' => 'Tanggal akhir magang harus setelah tanggal mulai magang!',
            'nisn.unique' => 'NISN sudah terdaftar',
            'tanggal.before' => 'Tanggal lahir harus kurang dari sekarang',
            'jeniskelamin.required' => 'Jenis kelamin tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'sekolah.required' => 'Sekolah tidak boleh kosong',
            'jurusan.required' => 'Jurusan tidak boleh kosong',
            'magang_awal.required' => 'Tanggal awal magang tidak boleh kosong',
            'magang_awal.date' => 'Tanggal awal magang harus dalam format tanggal yang valid',
            'magang_akhir.required' => 'Tanggal akhir magang tidak boleh kosong',
            'magang_akhir.date' => 'Tanggal akhir magang harus dalam format tanggal yang valid',
            'foto_siswa.required' => 'Foto siswa tidak boleh kosong',
            'foto_siswa.image' => 'Foto siswa harus berupa gambar',
            'foto_siswa.mimes' => 'Foto siswa harus berformat jpg, jpeg, atau png',
            'sp_diri.required' => 'Surat pernyataan diri tidak boleh kosong',
            'sp_diri.image' => 'Surat pernyataan diri harus berupa gambar',
            'sp_diri.mimes' => 'Surat pernyataan diri harus berformat jpg, jpeg, atau png',
            'sp_ortu.required' => 'Surat pernyataan orang tua tidak boleh kosong',
            'sp_ortu.image' => 'Surat pernyataan orang tua harus berupa gambar',
            'sp_ortu.mimes' => 'Surat pernyataan orang tua harus berformat jpg, jpeg, atau png',
            'cv.required' => 'CV tidak boleh kosong',
            'cv.image' => 'CV harus berupa gambar',
            'cv.mimes' => 'CV harus berformat jpg, jpeg, atau png',
            'email.required' => 'Email tidak boleh kosong',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password harus minimal 6 karakter',
            'confirm-password.required' => 'Konfirmasi password tidak boleh kosong',
            'confirm-password.min' => 'Konfirmasi password harus minimal 6 karakter',
            'skck.image' => 'SKCK Harus berupa gambar',
        ]);
        $foto_siswa = $request->file('foto_siswa');
        $sp_diri = $request->file('sp_diri');
        $sp_ortu = $request->file('sp_ortu');
        $skck = $request->file('skck');
        $cv = $request->file('cv');

        $foto_siswa->storeAs('public/pendaftaran', $foto_siswa->hashName());
        $sp_diri->storeAs('public/pendaftaran', $sp_diri->hashName());
        $sp_ortu->storeAs('public/pendaftaran', $sp_ortu->hashName());
        $cv->storeAs('public/pendaftaran', $cv->hashName());
        if ($skck !== null) {
            $skck->storeAs('public/pendaftaran', $skck->hashName());
        }

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
            'skck' => ($skck !== null) ? $skck->hashName() : null,
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
        return redirect()->route('login.index')->with('berhasil_daftar', 'Silahkan tunggu konfirmasi dari admin!');
    } catch (Exception $e) {

        return back()->with('error', $e->getMessage())->withInput();
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
    public function selesai()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('kode_beli');
    }
}
