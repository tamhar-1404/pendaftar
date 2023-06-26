<?php

namespace App\Http\Controllers;

use App\Models\TataTertib;
use App\Http\Requests\StoreTataTertibRequest;
use App\Http\Requests\UpdateTataTertibRequest;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Request;

class TataTertibController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TataTertib::paginate(5); // Mengambil 5 data per halaman
        return view('tatatertib.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tatatertib.laycreate');
    }

    public function inserttatib(HttpRequest $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',

        ], [
            'judul.required' => 'Harus diisi',
            'deskripsi.required' => 'Harus diisi',

        ]);

        $data = TataTertib::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        $data->save();

        return redirect()->route('tatatertib.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTataTertibRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTataTertibRequest $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TataTertib  $tataTertib
     * @return \Illuminate\Http\Response
     */
    public function show(TataTertib $tataTertib)
    {
        return view('tatatertib.laydetail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TataTertib  $tataTertib
     * @return \Illuminate\Http\Response
     */
    public function edit(TataTertib $tataTertib, $id)
    {

    }

    public function edittatib($id)
    {
        $data = TataTertib::find($id);
        return view('tatatertib.layedit', compact('data'));
    }

    public function updatetatib(HttpRequest $request , TataTertib  $tataTertib, $id)
    {
        // dd($data);
       $data = TataTertib::find($id);
       $data->update([
        'judul'=>$request->judul,
        'deskripsi'=>$request->deskripsi,
       ]);
        return redirect()->route('tatatertib.index')->with('success', 'Data Berhasil Di Update');
    }

    public function deletetatib(TataTertib $tataTertib, $id)
    {
        // Temukan item berdasarkan ID
        $data = TataTertib::findOrFail($id);

        // Hapus item
        $data->delete();

        // Redirect atau berikan respons sesuai kebutuhan Anda
        return redirect()->route('tatatertib')->with('success', 'Item berhasil dihapus');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTataTertibRequest  $request
     * @param  \App\Models\TataTertib  $tataTertib
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTataTertibRequest $request, TataTertib $tataTertib)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TataTertib  $tataTertib
     * @return \Illuminate\Http\Response
     */
    public function destroy(TataTertib $tataTertib, $id)
    {

    }
}
