<?php

namespace App\Http\Controllers;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\Jurnalsiswa;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\PhpWord;
use Barryvdh\DomPDF\Facade\Pdf;
use PhpOffice\PhpWord\IOFactory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreJurnalsiswaRequest;
use App\Http\Requests\UpdateJurnalsiswaRequest;
use App\Models\JurnalGuru;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Exception;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use PhpOffice\PhpWord\Style\Table;
use PhpOffice\PhpWord\Style\Cell;
use PhpOffice\PhpWord\Style\Color;


class JurnalsiswaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {



        $hariIni = Carbon::now()->format('l');
        $hariIniLengkap = Carbon::now()->format('Y-m-d');
    if ($request->has('cari')) {
        $keyword = $request->cari;

        $item = Jurnalsiswa::where('siswa_id', Auth::user()->Siswa->id)
            ->where(function ($query) use ($keyword) {
                $query->where('tanggal', 'LIKE', '%' . $keyword . '%')
                    ->orWhere('status', 'LIKE', '%' . $keyword . '%');
            })->latest('created_at')->paginate(5);

        $item->appends(['cari' => $keyword]);
    }else if($request->has('date1') && $request->has('date2')){
        if($request->date1 != null && $request->date2 != null){

            $date1 = $request->date1;
            $date2 = $request->date2;
            if($date2 < $date1){
                return redirect()->back()->with('error', 'tanggal harus valid');
            }
            elseif($date1 === $date2 ){
                return redirect()->back()->with('error', 'tanggal awal dan tanggal akhir tidak boleh sama ');

            }else{
                $item = Jurnalsiswa::whereBetween('created_at', [$date1, $date2])
                ->where('siswa_id', auth()->user()->siswa_id)
                ->latest('created_at')
                ->paginate(5)
                ->withQueryString();

            $keyword = $date1 . '&&' . $date2;
            $item = $item->appends(['cari' => $keyword]);
            }
        }else{
            return redirect()->back()->with('error','Tanggal tidak boleh kosong');
        }
    } else {
        $date1 = "";
        $date2 = "";
        $item = Jurnalsiswa::where('siswa_id', Auth::user()->Siswa->id)->latest('created_at')->paginate(5);
    }

    return view('jurnal_siswa.index' ,compact('item','date1','date2'));
}
public function data ()
{
    $item = Jurnalsiswa::where('siswa_id', Auth::user()->Siswa->id)->get();
    return response()->json($item);
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
     * @param  \App\Http\Requests\StoreJurnalsiswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        $siswa_id = Auth::user()->Siswa->id;
        $hariIni = Carbon::now()->format('l');
        if ($hariIni == 'Saturday' || $hariIni == 'Sunday') {
            return redirect()->back()->with('error', 'Hari ini libur');
        } else {
            $hari = Carbon::now()->format('Y-m-d');
            $jam = Carbon::now()->format('H-i');
            // dd($jam > '16-00');
            if($jam < '22:00'){
                $data = Jurnalsiswa::where('siswa_id', $siswa_id)->where('tanggal', $hari)->exists();
                if(!$data){
                    try {
                        $request->validate([
                            'kegiatan' => "required",
                            'image' => 'required|image|mimes:png,jpg,jpeg'
                        ],[
                            'kegiatan.max' => 'jurnal maksimal 255 karakter'
                        ]);

                        $image = $request->file('image');
                        $image->storeAs('public/image', $image->hashName());

                        Jurnalsiswa::create([
                            'siswa_id' => $siswa_id,
                            'image' => $image->hashName(),
                            'tanggal' => $hari,
                            'kegiatan' => $request->kegiatan,
                            'status' => 'mengisi'
                        ]);
                        return redirect()->route('jurnal_siswa.index')->with('success', 'Anda berhasil mengisi jurnal');
                    } catch (\Illuminate\Database\QueryException $e) {
                        return redirect()->back()->withInput()->withErrors(['tanggal' => $e->getMessage()]);
                    }
                }else{
                    return redirect()->back()->withInput()->withErrors(['tanggal' => 'Anda sudah melakukan pengumpulan']);
                }
            }else{
                return back()->with('error', 'Anda telat mengumpulkan jurnal');
            }
        }

        // ],[
        //     'tanggal.unique' => 'jhvgghvb',
        // ]);


    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jurnalsiswa  $Jurnalsiswa
     * @return \Illuminate\Http\Response
     */
    Public function show(Jurnalsiswa $Jurnalsiswa)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jurnalsiswa  $Jurnalsiswa
     * @return \Illuminate\Http\Response
     */
    Public function edit(Jurnalsiswa $Jurnalsiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJurnalsiswaRequest  $request
     * @param  \App\Models\Jurnalsiswa  $Jurnalsiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $jurnalSiswa = Jurnalsiswa::find($id);
        if (!$jurnalSiswa) {
            return response()->json([
                'error' => 'Data jurnal tidak ditemukan'
            ]);
        }
        if($jurnalSiswa->siswa_id != Auth()->user()->siswa_id){
            return response()->json([
                'error' => 'Data jurnal tidak ditemukan'
            ]);
        }
        $oldImage = $jurnalSiswa->image;

        $this->validate($request, [
            'kegiatan' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg', // Validasi gambar opsional
        ], [
            'kegiatan.max' => 'Jurnal maksimal 255 karakter',
            'image.image' => 'File harus berupa gambar',
            'image.mimes' => 'Format gambar harus PNG, JPG, atau JPEG',
        ]);

        if ($jurnalSiswa->status === 'Tidak mengisi') {
            return response()->json([
                'status' => 'error',
            ]);
        }
        $jurnalSiswa->kegiatan = $request->kegiatan;

        if ($request->hasFile('image')) {
            // Hapus gambar lama
            if ($oldImage != 'default.jpg') {
                Storage::delete('public/image/' . $oldImage);
            }

            // Upload gambar baru
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/image', $imageName);
            $jurnalSiswa->image = $imageName;
        } // Tidak perlu else karena image akan tetap gambar lama jika tidak diupload baru
        $jurnalSiswa->save();
        return response()->json([
            'status' => 'success',
        ]);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jurnalsiswa  $Jurnalsiswa
     * @return \Illuminate\Http\Response
     */
    Public function destroy(Jurnalsiswa $Jurnalsiswa)
    {
        //
    }

    Public function downloadPDF()
    {
        set_time_limit(0);
        $data = Jurnalsiswa::where('siswa_id', Auth::user()->Siswa->id)->where('status', 'mengisi')->get();
        $pdf = Pdf::loadView('desain_pdf.jurnal', ['data' => $data]);
        return $pdf->download('jurnal_siswa.pdf');

    }
    Public function getData()
    {
        $data = JurnalSiswa::all();

        return response()->json($data);
    }
    Public function Print()
    {
        $data = JurnalSiswa::all();

        return view('desain_pdf.jurnal',compact('data'));
    }
    Public function Printjurnal()
{
    $users = JurnalSiswa::all();
    $txt = '';

    foreach ($users as $user) {
        $txt .= "Name: " . $user->siswa->name . "\n";
        $txt .= "Tanggal: " . $user->Tanggal . "\n";
        $txt .= "Sekolah: " . $user->siswa->sekolah . "\n";
        $txt .= "Kegiatan: " . $user->Kegiatan . "\n";
        $txt .= "Bukti: " . $user->Bukti . "\n";
        // Tambahkan kolom-kolom lain yang ingin Anda ambil datanya
        $txt .= "\n"; // Tambahkan baris kosong antara setiap entri pengguna
    }

    $headers = [
        'Content-Type' => 'text/plain',
        'Content-Disposition' => 'attachment; filename="users.txt"',
    ];

    return response($txt, 200, $headers);
}

public function exportToDocx()
{
    // Mendapatkan data dari database (contoh menggunakan model JurnalSiswa)
    $users = Jurnalsiswa::where('siswa_id', Auth::user()->Siswa->id)->where('status', 'mengisi')->get();

    // Membuat objek PhpWord
    $phpWord = new PhpWord();

    // Membuat halaman baru
    $section = $phpWord->addSection();

    // Judul tabel dengan border dan background abu-abu
    $section->addText("Daftar Jurnal Siswa", ['bold' => true, 'size' => 14, 'color' => '000000']);
    $section->addTextBreak(1);
    $titleStyle = array('borderSize' => 6, 'borderColor' => '000000', 'bgColor' => 'D3D3D3');
    $titleStyleBody = array('borderSize' => 6, 'borderColor' => '000000', 'bgColor' => 'D3D3D3');
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
        $table->addCell(600, $titleStyleBody)->addText($count++, ['alignment' => 'center']);

         // Menambahkan gambar berdasarkan nama file yang ada di kolom 'image'

        $imagePath = 'storage/image/'. $user->image;
        // dd($imagePath);



        $table->addCell(4000,  $titleStyleBody)->addText($user->siswa->name, ['alignment' => 'center']);
        $table->addCell(1500,  $titleStyleBody)->addText($user->tanggal, ['alignment' => 'center']);
        $table->addCell(2500,  $titleStyleBody)->addText($user->siswa->sekolah, ['alignment' => 'center']);
        $table->addCell(3000,  $titleStyleBody)->addText($user->kegiatan, ['alignment' => 'center']);
        if (file_exists($imagePath)) {
            $table->addCell(2000,  $titleStyleBody)->addImage($imagePath, ['width' => 150, 'height' => 150, 'alignment' => 'center']);
        } else {
            $table->addCell(2000,  $titleStyleBody)->addText('Gambar Tidak Ditemukan', ['alignment' => 'center']);
        }

    }

    // Menyimpan dokumen sebagai file .docx
    $filename = "database_export.docx";
    $path = public_path('storage/image/' . $filename); // Sesuaikan dengan lokasi penyimpanan yang diinginkan
    $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
    $objWriter->save($path);

    // Mengembalikan file dokumen untuk diunduh
    return response()->download($path, $filename);
}
public function JurnalPrint(Request $request){
    // dd($request->date1);
    $dataSiswa = User::FindOrFail(Auth()->User()->id);
    $data = Jurnalsiswa::where('siswa_id', Auth()->User()->siswa_id)->orderBy('tanggal', 'desc')->get();
    // dd($data);
     if($request->has('date1') && $request->has('date2')){
        // dd("asdusd");
        if($request->date1 != null && $request->date2 != null){
            if($request->date2 < $request->date1){
                return redirect()->back()->with('error', 'tanggal harus valid');
            }
            elseif($request->date1 === $request->date2 ){
                return redirect()->back()->with('error', 'tanggal awal dan tanggal akhir tidak boleh sama ');

            }else{
                $data = Jurnalsiswa::where('siswa_id', Auth()->User()->siswa_id)->whereBetween('created_at', [$request->date1 , $request->date2])->orderBy('created_at', 'desc')->get();
                // dd($data);
            }
        }
    }
    $jurnalAkhir = $data[0];
    $jurnalAwal = $data[($data->count() - 1)];
    return view('print.JurnalSiswa', compact('data', 'dataSiswa','jurnalAwal','jurnalAkhir'));
}
}
