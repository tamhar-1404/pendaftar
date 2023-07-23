<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Siswa;
use App\Mail\AkunGuru;
use App\Models\Guru_admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreGuru_adminRequest;
use App\Http\Requests\UpdateGuru_adminRequest;

class GuruAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $guru_admin = Guru_admin::all();
    if ($request->has('cari')) {
        $keyword = $request->cari;
        $guru_admin = Guru_admin::where('name', 'LIKE', '%' . $keyword . '%')->orWhere('sekolah', 'LIKE', '%' . $keyword . '%')->paginate(3);
        return view('guru_admin.index', compact('guru_admin'));

        $guru_admin->appends(['cari' => $keyword]);
        return view('guru_admin.index', compact('guru_admin'));

    }
        $guru_admin =  Guru_admin::latest()->paginate(3);
        return view('guru_admin.index' , compact('guru_admin'));
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
    public function detail (Guru_admin $guru)
    {

        $guru = Guru_admin::latest()->get()->first();
        return view('guru_admin.detail' , compact('guru','siswas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGuru_adminRequest  $request
     * @return \Illuminate\Http\Response
     */


     public function store(Request $request)
     {
         $this->validate($request, [
             'image' => 'required',
             'name' => 'required',
             'sekolah' => 'required',
             'email' => 'required|unique:guru_admins',
             'alamat' => 'required',
             'no' => 'required|unique:guru_admins|min:10|max:14',
             'password' => 'required'
         ]);

         $password = $request->password; // Simpan password yang belum di-hash
         $image = $request->file('image');
         $image->storeAs('public/guru_image', $image->hashName());
         $guruAdmin = Guru_admin::create([
             'image' => $image->hashName(),
             'name' => $request->name,
             'sekolah' => $request->sekolah,
             'email' => $request->email,
             'alamat' => $request->alamat,
             'no' => $request->no,
              'password' => Hash::make($request->password),
         ]);

         User::create([
             'name' => $request->name,
             'email' => $request->email,
             'sekolah' => $request->sekolah,
             'role' => 'guru',
            'password' => Hash::make($request->password),
         ]);

         // Mengirim email konfirmasi dengan password yang belum di-hash
         Mail::to($request->email)->send(new AkunGuru($password));

         return redirect()->route('guru_admin.index');
     }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guru_admin  $guru_admin
     * @return \Illuminate\Http\Response
     */
    public function show(Guru_admin $guru_admin)
    {
     //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guru_admin  $guru_admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru_admin $guru_admin )
    {
        $sekolah = $guru_admin->sekolah;
        $siswas = Siswa::where('sekolah', $sekolah)->latest()->paginate(5);
        return view('guru_admin.detail', compact('guru_admin', 'siswas'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGuru_adminRequest  $request
     * @param  \App\Models\Guru_admin  $guru_admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGuru_adminRequest $request, Guru_admin $guru_admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guru_admin  $guru_admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru_admin $guru_admin)
    {
        //
    }
}
