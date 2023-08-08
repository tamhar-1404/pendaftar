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
use Illuminate\Support\Facades\View;
use Exception;
use Carbon\Carbon;
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
        if ($hariIni !== 'Saturday' && $hariIni !== 'Sunday') {
            if (Auth::user()->Siswa->role == 'siswa') {
                $jam = Carbon::now()->format('H-i');
                if ($jam > '22-00') {
                    $hari = Carbon::now()->format('Y-m-d');
                    $yang_sudah_hari_ini = Jurnalsiswa::where('tanggal', $hari)->pluck('nama')->toArray();
                    $cek_semua_siswa_yang_belum = Siswa::where('role', 'siswa')->whereNotIn('name', $yang_sudah_hari_ini);
                    if ($cek_semua_siswa_yang_belum->exists()) {
                        foreach ($cek_semua_siswa_yang_belum->get() as $siswa) {
                            Jurnalsiswa::create([
                                'image' => "Tidak mengisi",
                                'nama' => $siswa->name,
                                'tanggal' => $hari,
                                'sekolah' => $siswa->sekolah,
                                'kegiatan' => "Tidak mengisi",
                                'status' => 'Tidak mengisi'
                            ]);
                        }
                    }
                }
            }
        }
    $userName = Auth::user()->name;

    if ($request->has('cari')) {
        $keyword = $request->cari;

        $item = Jurnalsiswa::where('nama', $userName)
            ->where(function ($query) use ($keyword) {
                $query->where('tanggal', 'LIKE', '%' . $keyword . '%')
                    ->orWhere('status', 'LIKE', '%' . $keyword . '%');
            })->latest('created_at')->paginate(5);

        $item->appends(['cari' => $keyword]);
    } else {
        $item = Jurnalsiswa::where('nama', $userName)->where('status', 'mengisi')->latest('created_at')->paginate(5);
    }

    return view('jurnal_siswa.index', compact('item'));
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
    public function store(Request $request)
    {
        $hariIni = Carbon::now()->format('l');
        if ($hariIni == 'Saturday' OR $hariIni == 'Sunday') {
            return redirect()->back()->with('error', 'Hari ini libur');
        } else {

            $hari = Carbon::now()->format('Y-m-d');
            $jam = Carbon::now()->format('H-i');
            // dd($jam > '16-00');
            if($jam < '22-00'){
                $data = Jurnalsiswa::where('nama', Auth()->user()->name)->where('tanggal', $hari)->exists();
                if(!$data){
                    try {
                        $this->validate($request, [
                            'kegiatan' => "required",
                            'image' => 'required|image|mimes:png,jpg,jpeg',
                        ]);

                        $image = $request->file('image');
                        $image->storeAs('public/image', $image->hashName());

                        Jurnalsiswa::create([
                            'image' => $image->hashName(),
                            'nama' => Auth()->user()->name,
                            'tanggal' => $hari,
                            'sekolah' => Auth()->user()->sekolah,
                            'kegiatan' => $request->kegiatan,
                            'status' => 'mengisi'
                        ]);

                        return redirect()->route('jurnal_siswa.index')->with('success', 'Anda berhasil mengisi jurnal');
                    } catch (\Illuminate\Database\QueryException $e) {
                            return redirect()->back()->withInput()->withErrors(['tanggal' => 'Anda sudah melakukan pengumpulan']);
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
   Public function update(Request $request, $id)
{
    $Jurnalsiswa = Jurnalsiswa::find($id);
    $oldImage = $Jurnalsiswa->image;

    $this->validate($request, [

        'kegiatan' => 'required'
        
    ]);

    $Jurnalsiswa->nama = Auth()->user()->name;
    $Jurnalsiswa->tanggal = $Jurnalsiswa->created_at;
    $Jurnalsiswa->sekolah = Auth()->user()->sekolah;
    $Jurnalsiswa->kegiatan = $request->kegiatan;
    $Jurnalsiswa->status = $request->status;

    if ($request->hasFile('image')) {
        // Hapus gambar lama
        if ($oldImage != 'default.jpg') {
            Storage::delete('public/Image/' . $oldImage);
        }

        // Upload gambar baru
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/image', $imageName);
        $Jurnalsiswa->image = $imageName;
    } else {
        $Jurnalsiswa->image = $oldImage; // Menggunakan gambar lama jika tidak ada gambar yang diupload
    }

    $Jurnalsiswa->save();

    return redirect()->route('jurnal_siswa.index')->with('success', 'Data berhasil diubah');
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
        $data = Jurnalsiswa::where('nama',Auth::user()->name)->where('status', 'mengisi')->get();
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
        $txt .= "Name: " . $user->name . "\n";
        $txt .= "Tanggal: " . $user->Tanggal . "\n";
        $txt .= "Sekolah: " . $user->Sekolah . "\n";
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
    $users = JurnalSiswa::where('nama', Auth::user()->name)->where('status', 'mengisi')->get();

    // Membuat objek PhpWord
    $phpWord = new PhpWord();

    // Membuat halaman baru
    $section = $phpWord->addSection();

    // Judul tabel dengan border dan background abu-abu
    $section->addText("Daftar Jurnal Siswa", ['bold' => true, 'size' => 14, 'color' => '000000']);
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
        // dd($imagePath);



        $table->addCell(4000)->addText($user->nama, ['alignment' => 'center']);
        $table->addCell(1500)->addText($user->tanggal, ['alignment' => 'center']);
        $table->addCell(2500)->addText($user->sekolah, ['alignment' => 'center']);
        $table->addCell(3000)->addText($user->kegiatan, ['alignment' => 'center']);
        if (file_exists($imagePath)) {
            $table->addCell(2000)->addImage($imagePath, ['width' => 150, 'height' => 150, 'alignment' => 'center']);
        } else {
            $table->addCell(2000)->addText('Gambar Tidak Ditemukan', ['alignment' => 'center']);
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
}
