<?php

namespace App\Http\Controllers;

use App\Mail\Banned;
use App\Models\User;
use App\Models\Siswa;
use App\Models\EmailLulus;
use App\Mail\BannedGuru;
use App\Models\LaporanSiswa;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreSiswaRequest;
use Carbon\Carbon;
use App\Http\Requests\UpdateSiswaRequest;
use App\Mail\EmailLulus as MailEmailLulus;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (Siswa::whereDate('magang_akhir', '<=', now())->exists()) {
            $siswas = Siswa::whereDate('magang_akhir', '<=', now())->get();
            foreach ($siswas as $siswa) {
                if (!EmailLulus::where('email', $siswa->email)->exists()) {
                    Mail::to($siswa->email)->send(new MailEmailLulus);
                    EmailLulus::create([
                        'email' => $siswa->email,
                        'tanggal' => Carbon::now()->format('Y-m-d'),
                    ]);
                }
            }
            Siswa::whereDate('magang_akhir', '<=', now())->update(['role' => 'alumni', 'status' => 'lulus']);
        }

        $siswas = Siswa::query()
            ->whereNull('status')
            ->when($request->cari, function ($query) use ($request) {
                $query->where('name', 'LIKE', '%' . $request->cari . '%')->orWhere('jurusan', 'LIKE', '%' . $request->cari . '%');
            })
            ->latest()
            ->paginate(8);

        return view('master.user.index', compact('siswas'));
    }

    /**
     * downloadFiles
     *
     * @param  mixed $student
     * @return void
     */
    public function downloadFiles(Siswa $student)
    {
        try {

            $fileName = str_replace(' ', '_', $student->name) . '_' . now()->format('Y-m-d-H-i-s') .'.zip';
            $studentFile = $student->studentFile;
            $zip = new ZipArchive;
            if ($zip->open(storage_path('app/public/'.$fileName), ZipArchive::CREATE) === TRUE) {
                if (Storage::exists('public/pendaftaran/'. $studentFile->sp_diri)) {
                    $zip->addFile(storage_path('app/public/pendaftaran/'.$studentFile->sp_diri), basename($studentFile->sp_diri));
                }
                if (Storage::exists('public/pendaftaran/'. $studentFile->sp_ortu)) {
                    $zip->addFile(storage_path('app/public/pendaftaran/'.$studentFile->sp_ortu), basename($studentFile->sp_ortu));
                }
                if ($studentFile->skck != null) {
                    if (Storage::exists('public/pendaftaran/'. $studentFile->skck)) {
                        $zip->addFile(storage_path('app/public/pendaftaran/'.$studentFile->skck), basename($studentFile->skck));
                    }
                }
                if (Storage::exists('public/pendaftaran/'. $studentFile->cv)) {
                    $zip->addFile(storage_path('app/public/pendaftaran/'.$studentFile->cv), basename($studentFile->cv));
                }
                $zip->close();
                return response()->download(storage_path('app/public/'.$fileName))->deleteFileAfterSend(true);
            } else {
                return abort(404, "Dokumen tidak ditemukan");
            }
        }
        catch (Exception $e) {
            return abort(404, "Dokumen tidak ditemukan");
        }
    }


    public function siswamagang_siswa(Request $request)
    {
        $userEmail = Auth::user()->email;

        if ($request->has('cari')) {
            $keyword = $request->cari;
            $siswas = Siswa::where(function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%')
                      ->orWhere('jurusan', 'LIKE', '%' . $keyword . '%');
            })
            ->where('email', '!=', $userEmail)->where('role' , 'siswa')
            ->paginate(9);

            $siswas->appends(['cari' => $keyword]);
        } else {
            $siswas = Siswa::whereNot('email', $userEmail)
            ->where('role', 'siswa')
            ->paginate(9);
        }

        return view('siswamagang_siswa.index', compact('siswas'));
    }

    public function Extend(Request $request, $id)
    {
        $data = Siswa::FindOrFail($id);
        $this->validate($request, [
            'TanggalAkhir' => 'required|date|after_or_equal:' . $data->magang_akhir,
        ], [
            'TanggalAkhir.required' => 'Kolom tanggal akhir harus diisi.',
            'TanggalAkhir.date' => 'Kolom tanggal akhir harus berupa tanggal.',
            'TanggalAkhir.after_or_equal' => 'Tanggal akhir harus setelah atau sama dengan tanggal: ' . $data->magang_akhir,
        ]);

        $data->magang_akhir = $request->TanggalAkhir;
        $data->save();
        return redirect()->back()->with('success', 'Siswa Berhasil di Extend');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Siswa_admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSiswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $student)
    {
       $aproval = $student;
       return view('master.user.detail-student', compact('aproval'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa, $id)
    {
        $siswa = Siswa::find($id);
        $user = User::find($id);
        return view('Siswa_admin.detail',compact('siswa','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSiswaRequest  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, User $user , $id)
    {
        $this->validate($request,[
            'RFID'=>'required|unique:users,RFID|max:225',
        ], [
            'RFID.max' => 'Maksimal 225 karakter yaa!',
            'RFID.required'=> 'RFID tidak boleh kosong',
            'RFID.unique'=> 'RFID ini telah digunakan',
        ]);
        $user = User::find($id);
        $user->update([
            'RFID'=>$request->RFID
        ]);
        return redirect()->back()->with('success', 'Berhasil menambah rfid');
    }

    /**
     * rfid
     *
     * @param  mixed $request
     * @return void
     */
    public function rfid(Request $request)
    {
        $users = User::query()
            ->where('role', 'Siswa')
            ->whereRelation('Siswa', function ($query) {
                $query->whereNull('status');
            })
            ->when($request->cari, function ($query) use ($request) {
                $query->where('name', 'LIKE', '%'. $request->cari .'%')
                    ->orWhere('sekolah', 'LIKE', '%' . $request->cari . '%');
            })
            ->whereNull('RFID')
            ->latest()
            ->paginate(10);
        $siswas = User::query()
            ->where('role', 'Siswa')
            ->whereRelation('Siswa', function ($query) {
                $query->whereNull('status');
            })
            ->when($request->name, function ($query) use ($request) {
                $query->where('name', 'LIKE', '%'. $request->name .'%')
                    ->orWhere('RFID', 'LIKE', '%' . $request->name . '%');
            })
            ->whereNotNull('RFID')
            ->latest()
            ->paginate(10);

        return view('master.user.rfid', compact('users','siswas'));

    }

    public function saldo(Request $request, Siswa $siswa, User $user, $id)
    {
        // $user = User::find($id);
        // $this->validate($request, [
        //     'saldo' => 'required'
        // ]);
        // $user->update([
        //     'saldo' => $request->hashName()
        // ]);
        // return redirect()->back();
    }

    public function destroy(Siswa $student)
    {
        $student->delete();
        return redirect()->back()->with('success', 'Berhasil hapus siswa');
    }
    public function banned(Request $request, $id) {
        // dd($id);
        // dd($request->all());
        $alasan = $request->alasan;
        $siswa = Siswa::find($id);
        $email = $siswa->email;
        $nama = $siswa->name;
        $data = [
            'alasan' => $alasan,
            'nama' => $nama,
        ];
        if (User::where('role', 'Guru')->where('sekolah', $siswa->sekolah)->exists()) {
            $emailguru = User::where('role', 'Guru')->where('sekolah', $siswa->sekolah)->first()->email;
            Mail::to($emailguru)->send(new BannedGuru($data));
        }
        Mail::to($email)->send(new Banned($data));
        $siswa->update([
            'status' => 'Dikeluarkan',
        ]);
        User::where('name', $siswa->name)->update(['role' => 'banned']);
        return back()->with('success', 'Berhasil banned');
    }

    public function lulus (Request $request, $id){
        $siswa = Siswa::findOrfail($id);
        $siswa->update([
            'status' => 'Lulus',
            'role' => 'alumni',
        ]);
        User::where('name', $siswa->name)->update(['role' => 'Siswa']);
        return back()->with('success', 'Siswa telah lulus');
    }

    /**
     * unban
     *
     * @param  mixed $student
     * @return RedirectResponse
     */
    public function unban(Siswa $student) : RedirectResponse
    {
        $student->update(['status' => null, 'role' => 'siswa']);
        User::where('name', $student->name)->update(['role' =>'Siswa']);
        return back()->with('success', 'Berhasil memperbarui data');
    }

    /**
     * blockedStudent
     *
     * @return View
     */
    public function blockedStudent(): View
    {
        $students = Siswa::where('status', 'Dikeluarkan')->get();
        return view('master.user.banned', compact('students'));
        // return view('unblock_siswa.index', compact('students'));
    }

    /**
     * resetPassword
     *
     *
     * @param  mixed $student
     * @return RedirectResponse
     */
    public function resetPassword(Siswa $student): RedirectResponse {
        User::where('name', $student->name)->update(['password' => Hash::make('password')]);
                return back()->with('success', 'Berhasil mereset password, password baru : password');
    }
}
