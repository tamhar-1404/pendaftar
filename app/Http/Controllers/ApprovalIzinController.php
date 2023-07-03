<?php

namespace App\Http\Controllers;

use App\Models\ApprovalIzin;
use App\Http\Requests\StoreApprovalIzinRequest;
use App\Http\Requests\UpdateApprovalIzinRequest;
use Illuminate\Http\Request;




class ApprovalIzinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menunggu = ApprovalIzin::where('status','menunggu')
        ->get();


        $terima = ApprovalIzin::where('status', 'terima')
        ->get();
        return view('approvalizin.index', compact('menunggu', 'terima'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ApprovalIzin $izin)
    {

        return view('approvalizin.content');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreApprovalIzinRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ApprovalIzin $approvalIzin)
    {
        // dd($request);
        $this->validate($request, [
            'nama' => 'required',
            'sekolah' => 'required',
            'dari' => 'required',
            'sampai' => 'required',
            'keterangan'=> 'required',
            'deskripsi' => 'required',
            'bukti' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);
        $image = $request->file('bukti');
        $image->storeAs('public/bukti_izin', $image->hashName());
       
       ApprovalIzin::create([
            'nama' => $request->nama,
            'sekolah' => $request->sekolah,
            'dari' => $request->dari,
            'sampai' => $request->sampai,
            'keterangan' => $request->keterangan,
            'deskripsi' => $request->deskripsi,
            'status' => 'menunggu',
            'bukti' => $image->hashName()
        ]);
        return redirect()->route('approvalizin.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApprovalIzin  $approvalIzin
     * @return \Illuminate\Http\Response
     */
    public function confirm(ApprovalIzin $izin)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApprovalIzin  $approvalIzin
     * @return \Illuminate\Http\Response
     */
    public function edit(ApprovalIzin $approval)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateApprovalIzinRequest  $request
     * @param  \App\Models\ApprovalIzin  $approvalIzin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Temukan data izin berdasarkan ID
        $izin = ApprovalIzin::findOrFail($id);

        // Ubah status menjadi 'Terima'
        $izin->status = 'Terima';
        $izin->save();

        return redirect()->route('approvalizin.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
        
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApprovalIzin  $approvalIzin
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApprovalIzin $approvalIzin)
    {
        //
    }
}
