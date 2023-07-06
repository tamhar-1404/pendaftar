<?php

namespace App\Http\Controllers;


use App\Models\ApprovalIzin;
use App\Http\Requests\StoreApprovalIzinRequest;
use App\Http\Requests\UpdateApprovalIzinRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\tolakdataEmail;
use App\Mail\TerimaizinEmail;
use App\Mail\dataizinEmail;



class ApprovalIzinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = date('Y-m-d');
        ApprovalIzin::whereDate('sampai', '<=', $today)->delete();

        $menunggu = ApprovalIzin::where('status', 'menunggu')->get();
        $terima = ApprovalIzin::where('status', 'terima')->get();

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
        // if ($approvalIzin->status === 'menunggu') {
        //
                 // dd($request);
                $this->validate($request, [
                    'nama' => 'required',
                    'sekolah' => 'required',
                    'email' => 'required',
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
                    'email' => $request->email,
                    'dari' => $request->dari,
                    'sampai' => $request->sampai,
                    'keterangan' => $request->keterangan,
                    'deskripsi' => $request->deskripsi,
                    'status' => 'menunggu',
                    'bukti' => $image->hashName()
                ]);
                Mail::to($request->email)->send(new dataizinEmail($approvalIzin));
                return redirect()->route('approvalizin.index')->with(['success' => 'Data Berhasil Disimpan!']);
        //  } else {
        //         return redirect()->back()->with('error', 'Maaf, tidak dapat melakukan konfirmasi pada data');
        //  }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApprovalIzin  $approvalIzin
     * @return \Illuminate\Http\Response
     */
    public function tolak(Request $request, $id)
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
    public function update(Request $request, $id, ApprovalIzin $approvalIzin)
{
    $cek = $request->input('keterangan');
    $email = $request->input('email');
    $alasan = $request->input('alasan');

    if ($cek === 'terima') {
        $izin = ApprovalIzin::findOrFail($id);

        // Ubah status menjadi 'Terima'
        $izin->status = 'Terima';
        $izin->save();

        Mail::to($email)->send(new TerimaizinEmail($approvalIzin));
    }

    if ($cek === 'tolak') {
        $izin = ApprovalIzin::findOrFail($id);

        if ($alasan) {
            $mailData = [
                'content' => 'Data Anda telah ditolak dengan alasan: ' . $alasan,
            ];

            Mail::to($email)->send(new tolakdataEmail($mailData));
            $izin->delete();
        } else {
            // Tambahkan pesan error jika alasan tidak diisi
            return redirect()->back()->with(['error' => 'Silakan masukkan alasan penolakan.']);
        }
    }

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
