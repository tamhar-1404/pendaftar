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
        $approvalizin = ApprovalIzin::latest()->paginate(5);
        return view('approvalizin.index', compact('approvalizin'));
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
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'nama' => 'required',
            'sekolah' => 'required',
            'dari' => 'required',
            'sampai' => 'required',
            'keterangan'=> 'required',
            'deskripsi' => 'required',
            'bukti' => 'required'
        ]);

       ApprovalIzin::create([
            'nama' => $request->nama,
            'sekolah' => $request->sekolah,
            'dari' => $request->dari,
            'sampai' => $request->sampai,
            'keterangan' => $request->keterangan,
            'deskripsi' => $request->deskripsi,
            'bukti' => $request->bukti,
            'status' => $request->status
        ]);
        return redirect()->route('approvalizin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApprovalIzin  $approvalIzin
     * @return \Illuminate\Http\Response
     */
    public function show(ApprovalIzin $approvalIzin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApprovalIzin  $approvalIzin
     * @return \Illuminate\Http\Response
     */
    public function edit(ApprovalIzin $approvalIzin)
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
    public function update(UpdateApprovalIzinRequest $request, ApprovalIzin $approvalIzin)
    {
        //
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
