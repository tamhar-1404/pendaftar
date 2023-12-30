<?php

namespace App\Http\Controllers;

use App\Models\SiswaAlumni;
use App\Models\Siswa;
use App\Models\LaporanSiswa;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSiswaAlumniRequest;
use App\Http\Requests\UpdateSiswaAlumniRequest;
use App\Mail\Certificate;
use Illuminate\Support\Facades\Mail;

class SiswaAlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $alumni = Siswa::query()
            ->where('role', 'alumni')
            ->latest()
            ->paginate(8);
        $list_alumni = Siswa::query()
            ->where('role', 'alumni')
            ->when($request->cari, function ($query) use ($request) {
                $query->where([['role', 'alumni'], ['name', 'LIKE', '%' . $request->cari . '%']])
                    ->orWhere([['role', 'alumni'], ['jurusan', 'LIKE', '%' .$request->cari. '%']]);
            })
            ->get();
        $list_alumni->append(['cari' => $request->cari]);
        return view('master.user.alumni', compact('alumni', 'list_alumni'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumni_admin.tabel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSiswaAlumniRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'sertifikat' => 'required',
        ], [
            'sertifikat.required' => 'Sertifikat tidak boleh kosong',
        ]);
        $sertifikat = $request->file('sertifikat');
        $sertifikat_name = $sertifikat->hashName();
        $sertifikat->storeAs('public/certificate', $sertifikat_name);
        $data = [
            'sertifikat' => $sertifikat_name,
        ];
        Mail::to($request->email)->send(new Certificate($data));
        return back()->with('success', 'Berhasil mengirim sertifikat',);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiswaAlumni  $siswaAlumni
     * @return \Illuminate\Http\Response
     */
    public function show(SiswaAlumni $siswaAlumni)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SiswaAlumni  $siswaAlumni
     * @return \Illuminate\Http\Response
     */
    public function edit(SiswaAlumni $siswaAlumni, $id)
    {
        $alumni = Siswa::find($id);
        $pelanggaran = LaporanSiswa::where('name', $alumni->name)->paginate(5);
        // $alumni = Siswa::where('role', 'alumni')->get();
        return view('alumni_admin.detail', compact('alumni', 'pelanggaran'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSiswaAlumniRequest  $request
     * @param  \App\Models\SiswaAlumni  $siswaAlumni
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSiswaAlumniRequest $request, SiswaAlumni $siswaAlumni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiswaAlumni  $siswaAlumni
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiswaAlumni $siswaAlumni)
    {
        //
    }
}
