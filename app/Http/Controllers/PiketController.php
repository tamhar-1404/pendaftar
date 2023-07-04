<?php

namespace App\Http\Controllers;

use App\Models\piket;
use App\Models\Siswa;
use App\Http\Requests\StorepiketRequest;
use App\Http\Requests\UpdatepiketRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\piket as pikets;


class PiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $siswa = Siswa::where('piket_id', $piketId)->first();
        $senin = piket::where('hari', 'LIKE', 'senin')->where('waktu', 'LIKE', 'pagi')->get();
        $selasa = piket::where('hari', 'LIKE', 'selasa')->where('waktu', 'LIKE', 'pagi')->get();
        $rabu = piket::where('hari', 'LIKE', 'rabu')->where('waktu', 'LIKE', 'pagi')->get();
        $kamis = piket::where('hari', 'LIKE', 'kamis')->where('waktu', 'LIKE', 'pagi')->get();
        $jumat = piket::where('hari', 'LIKE', 'jumat')->where('waktu', 'LIKE', 'pagi')->get();
        $catat = piket::where('id_siswa', 'LIKE', 'catatan')->where('waktu', 'LIKE', 'catatan')->get();
        $data = Siswa::all();

        set_time_limit(0);
        // Menginisialisasi variabel flag
        $emailSent = false;

        while (true) {
            // Mendapatkan nomor hari dalam seminggu
            $dayOfWeek = date('N');

            // Cek apakah hari tersebut bukan Sabtu (6), Minggu (7), atau tanggal merah
            if ($dayOfWeek < 6) {
                // Cek apakah email belum dikirim pada hari tersebut
                if (!$emailSent) {
                    $dayName = $this->getDayNameIndonesian(date('N'));
                    $mailData = [
                        'title' => 'Anda piket pada hari ' . $dayName,
                        'body' => 'Harap datang sebelum jam 8:00',
                    ];

                    Mail::to('rahmatmahendra74@gmail.com')->send(new pikets($mailData));

                    // Set flag emailSent menjadi true setelah mengirim email
                    $emailSent = true;
                }
            } else {
                // Set flag emailSent menjadi false pada hari Sabtu (6) dan Minggu (7)
                $emailSent = false;
            }

            usleep(86400);
        }

        // Menginisialisasi variabel $mailData jika email belum dikirim pada hari ini
        if (!$emailSent) {
            $dayName = $this->getDayNameIndonesian(date('N'));
            $mailData = [
                'title' => 'Hari ini bukan hari kerja',
                'body' => 'Tidak ada piket pada hari ' . $dayName,
            ];
        }

        return view('piket.index', compact('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'catat', 'data', 'mailData'));
    }

    private function getDayNameIndonesian($dayNumber)
    {
        $dayNames = [
            1 => 'Senin',
            2 => 'Selasa',
            3 => 'Rabu',
            4 => 'Kamis',
            5 => 'Jumat',
            6 => 'Sabtu',
            7 => 'Minggu',
        ];

        return $dayNames[$dayNumber];
    }

    public function sore()  {
        $senin=piket::where('hari','LIKE', 'senin')->where('waktu', 'LIKE','sore')->get();
        $selasa=piket::where('hari','LIKE', 'selasa')->where('waktu', 'LIKE','sore')->get();
        $rabu=piket::where('hari','LIKE', 'rabu')->where('waktu', 'LIKE','sore')->get();
        $kamis=piket::where('hari','LIKE', 'kamis')->where('waktu', 'LIKE','sore')->get();
        $jumat=piket::where('hari','LIKE', 'jumat')->where('waktu', 'LIKE','sore')->get();
        $catat=piket::where('nama_siswa','LIKE', 'catatan')->where('waktu', 'LIKE','catatan')->get();

        return view('piket.sidebar_sore',compact('senin','selasa','rabu','kamis','jumat','catat'));
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
     * @param  \App\Http\Requests\StorepiketRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'waktu' =>"required",
            'hari' => "required"
        ]);
        $hari = $request->input('hari');
        $waktu = $request->input('waktu');

        $cek = piket::where('waktu', 'LIKE', $waktu)->where('hari', 'LIKE', $hari)->get();
        if($cek->count() > 0){
            return redirect()->back()->with('error', 'Data yang anda masukan sudah ada');
        }
        $nama_siswa = $request->input('nama_siswa');
        foreach ($nama_siswa as $item) {
            piket::create([
                'waktu' => $request->waktu,
                'hari' => $request->hari,
                'id_siswa' => $item
            ]);
        }
        return redirect()->route('piket.index');

    }

    public function rubah(Request $request){
        $hari = $request->input('hari');
        $waktu = $request->input('waktu');
        $rubah = $request->input('nama_siswa_rubah');
        if($rubah !== null){
            foreach ($rubah as $item){
                $cek = piket::find($item);
                $cek->delete();
                }
        }

        $nama_siswa = $request->input('nama_siswa');
        if($nama_siswa !== null){
            foreach ($nama_siswa as $item) {
                piket::create([
                    'waktu' => $request->waktu,
                    'hari' => $request->hari,
                    'nama_siswa' => $item
                ]);
            }
        }


        return redirect()->back()->with('sukses', 'Data telah di edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\piket  $piket
     * @return \Illuminate\Http\Response
     */
    public function show(piket $piket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\piket  $piket
     * @return \Illuminate\Http\Response
     */
    public function edit(piket $piket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepiketRequest  $request
     * @param  \App\Models\piket  $piket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, piket $piket)
    {
        $nama_siswa = $request->input('nama_siswa');
        foreach ($nama_siswa as $item) {
            $piket->update([
                'waktu' => $request->waktu,
                'hari' => $request->hari,
                'nama_siswa' => $item
            ]);
        }
        return redirect()->back()->with('sukses', 'Data telah di edit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\piket  $piket
     * @return \Illuminate\Http\Response
     */
    public function destroy(piket $piket)
    {
        //
    }
}
