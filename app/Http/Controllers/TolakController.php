<?php

namespace App\Http\Controllers;

use App\Models\Tolak;
use App\Models\ApprovalIzin;
use App\Http\Requests\StoretolakRequest;
use App\Http\Requests\UpdatetolakRequest;
use App\Models\Siswa;
use App\Models\StudentFile;
use App\Models\User;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

class TolakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request): View
    {
        if ($request->has('cari')) {
            $izin = ApprovalIzin::where('status', 'tolak')->get();
            $keyword = $request->cari;
            $tolaks = Tolak::where('name', 'LIKE', '%' . $keyword . '%')->orWhere('sekolah', 'LIKE', '%' . $keyword . '%')->paginate(5);
            return view('tolak.index', compact('tolaks','izin'));
        }
        $tolaks = Tolak::latest()->paginate(5);
        $izin = ApprovalIzin::where('status', 'tolak')->get();
        return view('tolak.index' , compact('tolaks', 'izin'));
    }

    /**
     * listRejected
     *
     * @param  mixed $request
     * @return View
     */
    public function listRejected(Request $request): View
    {
        $tolaks = Tolak::query()
            ->when($request->cari, function ($query) use ($request) {
                $query->where('name', 'LIKE', '%' . $request->cari . '%')
                    ->orWhere('sekolah', 'LIKE', '%' . $request->cari . '%');
            })
            ->latest()
            ->paginate(5);
        return view('master.user.rejected', compact('tolaks'));
    }

    /**
     * changeToStudent
     *
     * @param  mixed $reject
     * @return void
     */
    public function changeToStudent(Tolak $reject)
    {
        $reject->status = null;
        $createStudent = Siswa::create($reject->toArray());
        Storage::move('public/pendaftaran/' . $reject->foto_siswa, 'public/Siswa/' . $reject->foto_siswa);
        $fileStudent = [
            'student_id' => $createStudent->id,
            'sp_diri' => $reject->sp_diri,
            'sp_ortu' => $reject->sp_ortu,
            'skck' => $reject->skck,
            'cv' => $reject->cv,
        ];
        StudentFile::create($fileStudent);
        $reject->delete();
        User::create([
            'name' => $reject->name,
            'email' => $reject->email,
            'sekolah' => $reject->sekolah,
            'password' => $reject->password,
            'role' => 'Siswa',
            'remember_token' => $reject->remember_token,
            'siswa_id' => $createStudent->id,
        ]);
        return redirect()->back()->with('success', 'Berhasil memperbarui');
    }

    /**
     * downloadFiles
     *
     * @param  mixed $reject
     * @return void
     */
    public function downloadFiles(Tolak $reject)
    {

        $fileName = str_replace(' ', '_', $reject->name) . '_' . now()->format('Y-m-d-H-i-s') .'.zip';
        try {

            $zip = new ZipArchive;
            if ($zip->open(storage_path('app/public/'.$fileName), ZipArchive::CREATE) === TRUE) {
                if (Storage::exists('public/pendaftaran/'. $reject->sp_diri)) {
                    $zip->addFile(storage_path('app/public/pendaftaran/'.$reject->sp_diri), basename($reject->sp_diri));
                }
                if (Storage::exists('public/pendaftaran/'. $reject->sp_ortu)) {
                    $zip->addFile(storage_path('app/public/pendaftaran/'.$reject->sp_ortu), basename($reject->sp_ortu));
                }
                if ($reject->skck != null) {
                    if (Storage::exists('public/pendaftaran/'. $reject->skck)) {
                        $zip->addFile(storage_path('app/public/pendaftaran/'.$reject->skck), basename($reject->skck));
                    }
                }
                if (Storage::exists('public/pendaftaran/'. $reject->cv)) {
                    $zip->addFile(storage_path('app/public/pendaftaran/'.$reject->cv), basename($reject->cv));
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
     * @param  \App\Http\Requests\StoretolakRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretolakRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tolak  $tolak
     * @return \Illuminate\Http\Response
     */
    public function show(Tolak $tolak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tolak  $tolak
     * @return \Illuminate\Http\Response
     */
    public function edit(Tolak $tolak): View
    {
        return view('tolak.detail', compact('tolak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetolakRequest  $request
     * @param  \App\Models\Tolak  $tolak
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetolakRequest $request, Tolak $tolak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tolak  $tolak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tolak $tolak)
    {
        //
    }
}
