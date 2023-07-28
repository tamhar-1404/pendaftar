<?php

namespace App\Http\Controllers;

use DB;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\User;
use App\Models\Jurnaladmin;
use App\Models\Jurnalsiswa;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\PhpWord;
use Barryvdh\DomPDF\Facade\Pdf;
use PhpOffice\PhpWord\IOFactory;
use App\Http\Requests\StorejurnaladminRequest;
use App\Http\Requests\UpdatejurnaladminRequest;
use Carbon\Carbon; // Import Carbon untuk bekerja dengan tanggal

class JurnaladminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $item = Jurnalsiswa::all();
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $item = Jurnalsiswa::where('nama', 'LIKE', '%' . $keyword . '%')->orWhere('sekolah', 'LIKE', '%' . $keyword . '%')->paginate(10);
            return view('jurnal_admin.index', compact('item'));

            $item->appends(['cari' => $keyword]);
            return view('jurnal_admin.index', compact('item'));
        }

        $item = Jurnalsiswa::latest()->paginate(10);
        return view('jurnal_admin.index',compact( 'item'));

    }

    public function Absenhariini()
    {
        return view('Absenhariini.index');
    }

    public function Jurnalhariini(Request $request) {

        $Cek = Jurnalsiswa::whereDate('created_at', Carbon::today())
        ->pluck('nama')
        ->toArray();

        $users = User::whereNotIn('name', $Cek)
        ->where('role', 'siswa')
        ->get();

        $jurnalSudahKirim = Jurnalsiswa::whereDate('created_at', Carbon::today())
                                       ->where('status', 'mengisi')
                                       ->paginate(10);

        return view('Jurnalhariini.index', compact('jurnalSudahKirim', 'users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $item = JurnalSiswa::where('nama', 'LIKE', $request->serch)->GET();
        $siswa = $request->serch;

        $mengisi_jan = Jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 1)->count();
        $mengisi_feb = Jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 2)->count();
        $mengisi_mar = Jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 3)->count();
        $mengisi_apr = Jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 4)->count();
        $mengisi_mei = Jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 5)->count();
        $mengisi_jun = Jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 6)->count();
        $mengisi_jul = Jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 7)->count();
        $mengisi_aug = Jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 8)->count();
        $mengisi_sep = Jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 9)->count();
        $mengisi_okt = Jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 10)->count();
        $mengisi_nov = Jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 11)->count();
        $mengisi_des = Jurnalsiswa::where('status', 'LIKE', 'mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 12)->count();


        $tdk_mengisi_jan = Jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 1)->count();
        $tdk_mengisi_feb = Jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 2)->count();
        $tdk_mengisi_mar = Jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 3)->count();
        $tdk_mengisi_apr = Jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 4)->count();
        $tdk_mengisi_mei = Jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 5)->count();
        $tdk_mengisi_jun = Jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 6)->count();
        $tdk_mengisi_jul = Jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 7)->count();
        $tdk_mengisi_aug = Jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 8)->count();
        $tdk_mengisi_sep = Jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 9)->count();
        $tdk_mengisi_okt = Jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 10)->count();
        $tdk_mengisi_nov = Jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 11)->count();
        $tdk_mengisi_des = Jurnalsiswa::where('status', 'LIKE', 'tidak_mengisi')->where('nama', 'LIKE', $request->serch)->whereMonth('tanggal', '=', 12)->count();

        return view('jurnal_admin.grafik', compact('siswa','item','mengisi_jan','mengisi_feb','mengisi_mar','mengisi_apr','mengisi_mei','mengisi_jun','mengisi_jul','mengisi_aug','mengisi_sep','mengisi_okt','mengisi_nov','mengisi_des','tdk_mengisi_jan','tdk_mengisi_feb','tdk_mengisi_mar','tdk_mengisi_apr','tdk_mengisi_mei','tdk_mengisi_jun','tdk_mengisi_jul','tdk_mengisi_aug','tdk_mengisi_sep','tdk_mengisi_nov','tdk_mengisi_okt','tdk_mengisi_nov','tdk_mengisi_des'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorejurnaladminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorejurnaladminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jurnaladmin  $Jurnaladmin
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // $hasil = $request->input('serch');
        // $item = jurnalsiswa::where('nama', 'like', '%'.$hasil.'%')->get();
        // return view('jurnal_admin.grafik',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jurnaladmin  $Jurnaladmin
     * @return \Illuminate\Http\Response
     */
    public function edit(jurnaladmin $jurnaladmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatejurnaladminRequest  $request
     * @param  \App\Models\Jurnaladmin  $jurnaladmin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatejurnaladminRequest $request, Jurnaladmin $Jurnaladmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jurnaladmin  $Jurnaladmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jurnaladmin $Jurnaladmin)
    {
        //
    }
    public function jurnal_admin_pdf()  {
        set_time_limit(0);
        $data = JurnalSiswa::all();
        $pdf = Pdf::loadView('desain_pdf.jurnal', ['data' => $data]);
        return $pdf->download('jurnal_siswa.pdf');
    }
    public function jurnal_admin_pdf_grafik(Request $request)  {
        set_time_limit(0);
        $data = JurnalSiswa::where('nama', $request->nama)->get();

        $pdf = Pdf::loadView('desain_pdf.jurnal', ['data' => $data]);
        return $pdf->download('jurnal_siswa.pdf');
    }
    public function admin_docx()
{
    // Mendapatkan data dari database (contoh menggunakan model User)
    $users = JurnalSiswa::all();

    // Membuat objek PhpWord
    $phpWord = new PhpWord();

    // Membuat halaman baru
    $section = $phpWord->addSection();

    // Menambahkan data dari database ke dokumen
    foreach ($users as $user) {
        $section->addText($user->nama);
        $section->addText($user->tanggal);
        $section->addText($user->sekolah);
        $section->addText($user->kegiatan);
        // Tambahkan data lain yang Anda butuhkan
        $section->addText("--------------------"); // Pemisah antara setiap entri
    }

    // Menyimpan dokumen sebagai file .docx
    $filename = "jurnal_siswa.docx";
    $path = Storage_path('app/public/image/' . $filename); // Sesuaikan dengan lokasi penyimpanan yang diinginkan
    $phpWord->save($path);

    // Mengembalikan file dokumen untuk diunduh
    return response()->download($path, $filename);
}
    public function grafik_docx(Request $request)
{
       // Mendapatkan data dari database (contoh menggunakan model JurnalSiswa)
       $users = JurnalSiswa::where('nama', $request->nama)->get();

       // Membuat objek PhpWord
       $phpWord = new PhpWord();

       // Membuat halaman baru
       $section = $phpWord->addSection();

       // Judul tabel dengan border dan background abu-abu
       $section->addText("Daftar Jurnal ". $request->nama, ['bold' => true, 'size' => 14, 'color' => '000000']);
       $section->addTextBreak(1);
       $titleStyle = array('borderSize' => 6, 'borderColor' => '000000', 'bgColor' => 'D3D3D3');
       $section->addText(" ", $titleStyle);

       // Membuat tabel
       $table = $section->addTable();
       $table->addRow();
       $table->addCell(600, $titleStyle)->addText("No.", ['bold' => true, 'alignment' => 'center']);
       $table->addCell(4000, $titleStyle)->addText("Nama", ['bold' => true, 'alignment' => 'center']);
       $table->addCell(1500, $titleStyle)->addText("Tanggal", ['bold' => true, 'alignment' => 'center']);
       $table->addCell(2500, $titleStyle)->addText("Sekolah", ['bold' => true, 'alignment' => 'center']);
       $table->addCell(3000, $titleStyle)->addText("Kegiatan", ['bold' => true, 'alignment' => 'center']);
       $table->addCell(2000, $titleStyle)->addText("Bukti", ['bold' => true, 'alignment' => 'center']);

       // Menambahkan data dari database ke tabel
       $count = 1;
       foreach ($users as $user) {
           $table->addRow();
           $table->addCell(600)->addText($count++, ['alignment' => 'center']);

            // Menambahkan gambar berdasarkan nama file yang ada di kolom 'image'

           $imagePath = 'storage/image/'. $user->image;



           $table->addCell(4000)->addText($user->nama, ['alignment' => 'center']);
           $table->addCell(1500)->addText($user->tanggal, ['alignment' => 'center']);
           $table->addCell(2500)->addText($user->sekolah, ['alignment' => 'center']);
           $table->addCell(3000)->addText($user->kegiatan, ['alignment' => 'center']);
           if($imagePath == "storage/image/". $user->image){
               $table->addCell(2000)->addImage($imagePath, ['width' => 150, 'height' => 150, 'alignment' => 'center']);
           }else{
               $table->addCell(2000)->addText('Gambar Tidak Ditemukan', ['alignment' => 'center']);
           }
       }

       // Menyimpan dokumen sebagai file .docx
       $filename = "database_export.docx";
       $path = public_path('storage/Image/' . $filename); // Sesuaikan dengan lokasi penyimpanan yang diinginkan
       $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
       $objWriter->save($path);

       // Mengembalikan file dokumen untuk diunduh
       return response()->download($path, $filename);
}
}
