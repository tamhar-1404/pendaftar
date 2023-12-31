<?php

namespace App\Http\Controllers;

use App\HariEnum;
use App\Models\Piket;
use App\Models\Siswa;
use App\Models\Anggota_piket;
use App\Models\Laporan_piket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\piket as pikets;
use App\Models\Catatan;
use App\waktuPiketEnum;
use Carbon\Carbon;

class PiketController extends Controller
{
    function cari(Request $request) {
        $Cek = Anggota_piket::pluck('siswa_id')->toArray();

        $siswa = Siswa::whereNotIn('id', $Cek)->where('role', 'siswa')->orderBy('id', 'asc')
        ->skip(10)->limit(100)->get();

        return response()->json(['siswa' => $siswa]);
    }
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
         $senin = Anggota_piket::where('hari',  'senin')->where('waktu', 'pagi')->get();
         $selasa = Anggota_piket::where('hari', 'LIKE', 'selasa')->where('waktu', 'LIKE', 'pagi')->get();
         $rabu = Anggota_piket::where('hari', 'LIKE', 'rabu')->where('waktu', 'LIKE', 'pagi')->get();
         $kamis = Anggota_piket::where('hari', 'LIKE', 'kamis')->where('waktu', 'LIKE', 'pagi')->get();
         $jumat = Anggota_piket::where('hari', 'LIKE', 'jumat')->where('waktu', 'LIKE', 'pagi')->get();
         $catatan = Catatan::get();

         $senin_sore= Anggota_piket::where('hari', 'LIKE', 'senin')->where('waktu', 'LIKE', 'sore')->get();
         $selasa_sore = Anggota_piket::where('hari', 'LIKE', 'selasa')->where('waktu', 'LIKE', 'sore')->get();
         $rabu_sore = Anggota_piket::where('hari', 'LIKE', 'rabu')->where('waktu', 'LIKE', 'sore')->get();
         $kamis_sore= Anggota_piket::where('hari', 'LIKE', 'kamis')->where('waktu', 'LIKE', 'sore')->get();
         $jumat_sore= Anggota_piket::where('hari', 'LIKE', 'jumat')->where('waktu', 'LIKE', 'sore')->get();
         $Cek = Anggota_piket::pluck('siswa_id')
         ->toArray();

         $siswa = Siswa::whereNotIn('id', $Cek)
         ->where('role', 'siswa');
        //  $siswa = Siswa::all();
         $laporan_piket = Laporan_piket::all();


         return view('piket.index', compact('laporan_piket','senin', 'selasa', 'rabu', 'kamis', 'jumat','senin_sore', 'selasa_sore', 'rabu_sore', 'kamis_sore', 'jumat_sore', 'siswa', 'catatan'));
     }

     private function isEmailSentToday()
     {
         // Cek apakah sudah ada log pengiriman email hari ini
         // Misalnya dengan menyimpan tanggal terakhir pengiriman email di database
         $lastSentDate = Piket::whereDate('created_at', Carbon::today())->first();

         return $lastSentDate != null;
     }

     private function sendEmail()
     {
         $today = Carbon::now()->format('l');

         if ($today === 'Monday') {
             $data = Anggota_piket::where('hari', 'LIKE', 'senin')->where('waktu', 'LIKE', 'pagi')->get();
             foreach ($data as $datas) {
                 $email = Siswa::find($datas->siswa_id);
                 $mailData = [
                     'title' => 'Pengingat Piket Senin',
                     'body' => 'Hari ini anda piket pada hari Senin. Mohon datang sebelum jam 7:45 .'
                 ];
                 Mail::to($email->email)->send(new pikets($mailData));
             }
         } elseif ($today === 'Tuesday') {
             $data = Anggota_piket::where('hari', 'LIKE', 'selasa')->where('waktu', 'LIKE', 'pagi')->get();
             foreach ($data as $datas) {
                 $email = Siswa::find($datas->siswa_id);
                 $mailData = [
                     'title' => 'Pengingat Piket Selasa',
                     'body' => 'Hari ini anda piket pada hari Selasa. Mohon datang sebelum jam 7:45 .'
                 ];
                 Mail::to($email->email)->send(new pikets($mailData));
             }
         } elseif ($today === 'Wednesday') {
             $data = Anggota_piket::where('hari', 'LIKE', 'rabu')->where('waktu', 'LIKE', 'pagi')->get();
             foreach ($data as $datas) {
                 $email = Siswa::find($datas->siswa_id);
                 $mailData = [
                     'title' => 'Pengingat Piket Rabu',
                     'body' => 'Hari ini anda piket pada hari Rabu. Mohon datang sebelum jam 7:45.'
                 ];
                 Mail::to($email->email)->send(new pikets($mailData));
             }
         } elseif ($today === 'Thursday') {
             $data = Anggota_piket::where('hari', 'LIKE', 'kamis')->where('waktu', 'LIKE', 'pagi')->get();
             foreach ($data as $datas) {
                 $email = Siswa::find($datas->siswa_id);
                 $mailData = [
                     'title' => 'Pengingat Piket Kamis',
                     'body' => 'Hari ini anda piket pada hari Kamis. Mohon datang sebelum jam 7:45.'
                 ];
                 Mail::to($email->email)->send(new pikets($mailData));
             }
         } elseif ($today === 'Friday') {
             $data = Anggota_piket::where('hari', 'LIKE', 'jumat')->where('waktu', 'LIKE', 'pagi')->get();
             foreach ($data as $datas) {
                 $email = Siswa::find($datas->siswa_id);
                 $mailData = [
                     'title' => 'Pengingat Piket Jumat',
                     'body' => 'Hari ini anda piket pada hari Jumat. Mohon datang sebelum jam 7:45.'
                 ];
                 Mail::to($email->email)->send(new pikets($mailData));
             }
         }
     }

     private function markEmailAsSent()
     {
         // Tandai bahwa email telah dikirim hari ini
         // Misalnya dengan menyimpan tanggal terakhir pengiriman email di database
         $log = new piket();
         $log->created_at = Carbon::now();
         $log->save();
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
            'waktu' => [
                    'required',
                    'in:' . implode(',', [
                    waktuPiketEnum::Pagi,
                    waktuPiketEnum::Sore,
                ]),
            ],
            'hari' =>  [
                'required',
                'in:' . implode(',', [
                HariEnum::Senin,
                HariEnum::Selasa,
                HariEnum::Rabu,
                HariEnum::Kamis,
                HariEnum::Jumat,
            ]),
        ],
            'nama_siswa' => "required"
        ],[
            'waktu.required' => 'waktu harus di isi',
            'waktu.in' => 'waktu tidak valid',
            'hari.in' => 'hari tidak valid',
            'hari.required' => 'hari harus di isi',
            'nama_siswa.required' => 'harus memilih minimlah 1 siswa'
        ]);
        $hari = $request->input('hari');
        $waktu = $request->input('waktu');

        $cek = Anggota_piket::where('waktu', 'LIKE', $waktu)->where('hari', 'LIKE', $hari)->get();
        if($cek->count() > 0){
            return redirect()->back()->with('error', 'Data yang anda masukan sudah ada');
        }
        $nama_siswa = $request->input('nama_siswa');
        if($nama_siswa == null){
            return redirect()->back();
        }
        foreach ($nama_siswa as $item) {
            $mailData = [
                'title' => 'Pemberitahuan jadwa piket',
                'body' => 'Anda mandapatkan piket pada hari '. $hari . ' dan waktu anda piket adalah ' . $waktu
            ];
            $data = Siswa::find($item);
            Mail::to($data->email)->send(new pikets($mailData));
            Anggota_piket::create([
                'waktu' => $request->waktu,
                'hari' => $request->hari,
                'siswa_id' => $item
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
                $mailData = [
                    'title' => 'Pemberitahuan jadwa piket',
                    'body' => 'Anda dihapus dari piket pada hari '. $hari . ' pada waktu piket ' . $waktu . ' dan silakan tunggu kabar piket anda selanjutnya '
                ];
                $p = Anggota_piket::where('id', $item)->first();

                $siswa = $p->siswa_id;
                $data = Siswa::find($p->siswa_id);
                Mail::to($data->email)->send(new pikets($mailData));
                $cek = Anggota_piket::find($item);
                $p->delete();

                }
        }
        $nama_siswa = $request->input('nama_siswa');
        if($nama_siswa !== null){
            foreach ($nama_siswa as $item) {
                $mailData = [
                    'title' => 'Pemberitahuan jadwa piket',
                    'body' => 'Anda mandapatkan piket pada hari '. $hari . ' dan waktu anda piket adalah ' . $waktu
                ];
                $data = Siswa::find($item);
                Mail::to($data->email)->send(new pikets($mailData));
                Anggota_piket::create([
                    'waktu' => $request->waktu,
                    'hari' => $request->hari,
                    'siswa_id' => $item
                ]);
            }
        }


        return redirect()->back()->with('sukses', 'Data telah di edit');
    }

    public function tambah(Request $request){
        $this->validate($request,[
            'catatan' => 'required',
        ]);

        Catatan::create([
            'catatan' => $request->catatan,
        ]);

        return redirect()->route('piket.index')->with('success', 'berhasil menambahkan catatan!');

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
        public function list()
        {
            $Cek = Anggota_piket::pluck('siswa_id')->toArray();

            $siswa = Siswa::whereNotIn('id', $Cek)->where('role', 'siswa')->orderBy('id', 'asc')->limit(10)->get();
            // dd($siswa);

            return response()->json(['siswa' => $siswa]);


        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepiketRequest  $request
     * @param  \App\Models\piket  $piket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $this->validate($request, [
            'catatan' => 'required',
        ]);
        try {
            $piket = Catatan::findOrFail($id);
            $piket->update([
                'catatan' => $request->catatan,
            ]);

            return redirect()->back()->with('success', 'Data telah di edit');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\piket  $piket
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {

            // Temukan item berdasarkan ID
            $catatan = Catatan::findOrFail($id);

            // Hapus item
            $catatan->delete();

            // Redirect atau berikan respons sesuai kebutuhan Anda
            return redirect()->route('piket.index')->with('success', 'Item berhasil dihapus');
    }
}
