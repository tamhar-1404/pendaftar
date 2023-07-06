<?php

namespace App\Http\Controllers;

use App\Models\piket;
use App\Models\Siswa;
use App\Http\Requests\StorepiketRequest;
use App\Http\Requests\UpdatepiketRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\piket as pikets;
use Carbon\Carbon;

class PiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
     {
         // Ambil hari saat ini
         $today = Carbon::now()->format('l');

         // Cek apakah hari saat ini adalah hari kerja (Senin-Jumat)
         if ($today != 'Saturday' && $today != 'Sunday') {
             // Cek apakah email sudah dikirim hari ini
             $isEmailSent = $this->isEmailSentToday();

             // Jika email belum dikirim hari ini, kirim email
             if (!$isEmailSent) {
                 // Lakukan pengiriman email
                 $this->sendEmail();

                 // Tandai bahwa email telah dikirim hari ini
                 $this->markEmailAsSent();
             }
         }

         // Sisa kode yang ada sebelumnya
         $senin = piket::where('hari', 'LIKE', 'senin')->where('waktu', 'LIKE', 'pagi')->get();
         $selasa = piket::where('hari', 'LIKE', 'selasa')->where('waktu', 'LIKE', 'pagi')->get();
         $rabu = piket::where('hari', 'LIKE', 'rabu')->where('waktu', 'LIKE', 'pagi')->get();
         $kamis = piket::where('hari', 'LIKE', 'kamis')->where('waktu', 'LIKE', 'pagi')->get();
         $jumat = piket::where('hari', 'LIKE', 'jumat')->where('waktu', 'LIKE', 'pagi')->get();
         $catat = piket::where('id_siswa', 'LIKE', 'catatan')->where('waktu', 'LIKE', 'catatan')->get();

         $senin_sore= piket::where('hari', 'LIKE', 'senin')->where('waktu', 'LIKE', 'sore')->get();
         $selasa_sore = piket::where('hari', 'LIKE', 'selasa')->where('waktu', 'LIKE', 'sore')->get();
         $rabu_sore = piket::where('hari', 'LIKE', 'rabu')->where('waktu', 'LIKE', 'sore')->get();
         $kamis_sore= piket::where('hari', 'LIKE', 'kamis')->where('waktu', 'LIKE', 'sore')->get();
         $jumat_sore= piket::where('hari', 'LIKE', 'jumat')->where('waktu', 'LIKE', 'sore')->get();
         $siswa = Siswa::all();


         return view('piket.index', compact('senin', 'selasa', 'rabu', 'kamis', 'jumat','senin_sore', 'selasa_sore', 'rabu_sore', 'kamis_sore', 'jumat_sore', 'siswa', 'catat'));
     }

     private function isEmailSentToday()
     {
         // Cek apakah sudah ada log pengiriman email hari ini
         // Misalnya dengan menyimpan tanggal terakhir pengiriman email di database
         $lastSentDate = piket::whereDate('created_at', Carbon::today())->first();

         return $lastSentDate != null;
     }

     private function sendEmail()
     {
         $mailData = []; // Tambahkan data email yang diperlukan ke dalam array $mailData

         // Logika pengiriman email
         // Gunakan library/email service yang tersedia di Laravel
         // Contoh menggunakan Laravel Mail
         Mail::to('kaderofficial33@gmail.com')->send(new pikets($mailData)); // Ganti 'email@example.com' dengan alamat email tujuan
     }

     private function markEmailAsSent()
     {
         // Tandai bahwa email telah dikirim hari ini
         // Misalnya dengan menyimpan tanggal terakhir pengiriman email di database
         $log = new piket();
         $log->created_at = Carbon::now();
         $log->save();
     }

     public function sore()
     {
         $senin = piket::where('hari', 'LIKE', 'senin')->where('waktu', 'LIKE', 'sore')->get();
         $selasa = piket::where('hari', 'LIKE', 'selasa')->where('waktu', 'LIKE', 'sore')->get();
         $rabu = piket::where('hari', 'LIKE', 'rabu')->where('waktu', 'LIKE', 'sore')->get();
         $kamis = piket::where('hari', 'LIKE', 'kamis')->where('waktu', 'LIKE', 'sore')->get();
         $jumat = piket::where('hari', 'LIKE', 'jumat')->where('waktu', 'LIKE', 'sore')->get();
         $catat = piket::where('nama_siswa', 'LIKE', 'catatan')->where('waktu', 'LIKE', 'catatan')->get();

         return view('piket.sidebar_sore', compact('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'catat'));
     }
    //  public function sore()
    //  {
    //      $senin = piket::where('hari', 'LIKE', 'senin')->where('waktu', 'LIKE', 'sore')->get();
    //      $selasa = piket::where('hari', 'LIKE', 'selasa')->where('waktu', 'LIKE', 'sore')->get();
    //      $rabu = piket::where('hari', 'LIKE', 'rabu')->where('waktu', 'LIKE', 'sore')->get();
    //      $kamis = piket::where('hari', 'LIKE', 'kamis')->where('waktu', 'LIKE', 'sore')->get();
    //      $jumat = piket::where('hari', 'LIKE', 'jumat')->where('waktu', 'LIKE', 'sore')->get();
    //      $catat = piket::where('nama_siswa', 'LIKE', 'catatan')->where('waktu', 'LIKE', 'catatan')->get();

    //      return view('piket.sidebar_sore', compact('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'catat'));
    //  }


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
