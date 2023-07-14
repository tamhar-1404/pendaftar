<?php

namespace App\Http\Controllers;

use App\Models\TataTertib;
use App\Http\Requests\StoreTataTertibRequest;
use App\Http\Requests\UpdateTataTertibRequest;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Http\Request;

class TataTertibController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $tatatertib = TataTertib::where('judul', 'LIKE', '%' . $keyword . '%')->orWhere('deskripsi', 'LIKE', '%' . $keyword . '%')->paginate(3);
            return view('tatatertib.index', compact('tatatertib'));
        }

        $tatatertib = TataTertib::latest()->paginate(3); 
        return view('tatatertib.index', compact('tatatertib'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTataTertibRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, TataTertib  $tataTertib)
    {
            $this->validate($request, [
                'judul' => 'required',
                'deskripsi'  => 'required'
            ]);

            TataTertib::create([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi
            ]);
            return redirect()->route('tatatertib.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TataTertib  $tataTertib
     * @return \Illuminate\Http\Response
     */
    public function show(TataTertib $tataTertib, $id)
    {
        $data = TataTertib::where('id', $id)->get();
        return view('tatatertib.laydetail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TataTertib  $tataTertib
     * @return \Illuminate\Http\Response
     */
    public function edit(TataTertib $tataTertib, $id)
    {
        $tataTertib = TataTertib::find($id);
        return view('tatatertib.edit', compact('tataTertib'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTataTertibRequest  $request
     * @param  \App\Models\TataTertib  $tataTertib
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TataTertib $tataTertib, $id)
    {
        $tataTertib = TataTertib::findOrFail($id);
        $this->validate($request , [
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);
        $tataTertib->update([
            'judul'=>$request->judul,
            'deskripsi'=>$request->deskripsi
        ]);
        // dd($request);
         return redirect()->route('tatatertib.index')->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TataTertib  $tataTertib
     * @return \Illuminate\Http\Response
     */
    public function destroy(TataTertib $tataTertib, $id)
    {
        {
            // Temukan item berdasarkan ID
            $tataTertib = TataTertib::findOrFail($id);

            // Hapus item
            $tataTertib->delete();

            // Redirect atau berikan respons sesuai kebutuhan Anda
            return redirect()->route('tatatertib.index')->with('success', 'Item berhasil dihapus');
        }
    }
}
