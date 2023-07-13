<?php

namespace App\Http\Controllers;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\jurnalsiswa;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\PhpWord;
use Barryvdh\DomPDF\Facade\Pdf;
use PhpOffice\PhpWord\IOFactory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorejurnalsiswaRequest;
use App\Http\Requests\UpdatejurnalsiswaRequest;

class JurnalsiswaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(jurnalsiswa $jurnalsiswa)
    {
        $jurnalsiswa = jurnalsiswa::all();
        $nama = Auth::user()->name;
        $item = jurnalsiswa::where('nama',$nama)->get();
        return view('jurnal_siswa.index',compact('item' ,'jurnalsiswa'));
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
     * @param  \App\Http\Requests\StorejurnalsiswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' =>"required",
            'tanggal' => "required",
            'sekolah' => "required",
            'kegiatan'  => "required",

        ]);
        $image = $request->file('image');
        $image->storeAs('public/image', $image->hashName());
        jurnalsiswa::create([
            'image'=>$image->hashName(),
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'sekolah' => $request->sekolah,
            'kegiatan'=>$request->kegiatan,
            'status' => $request -> status

        ]);
        return redirect()->route('jurnal_siswa.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jurnalsiswa  $jurnalsiswa
     * @return \Illuminate\Http\Response
     */
    public function show(jurnalsiswa $jurnalsiswa)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jurnalsiswa  $jurnalsiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(jurnalsiswa $jurnalsiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatejurnalsiswaRequest  $request
     * @param  \App\Models\jurnalsiswa  $jurnalsiswa
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request, $id)
{
    $jurnalsiswa = jurnalsiswa::find($id);
    $oldImage = $jurnalsiswa->image;

    $this->validate($request, [
        'nama' => 'required',
        'tanggal' => 'required',
        'sekolah' => 'required',
        'kegiatan' => 'required'
    ]);

    $jurnalsiswa->nama = $request->nama;
    $jurnalsiswa->tanggal = $request->tanggal;
    $jurnalsiswa->sekolah = $request->sekolah;
    $jurnalsiswa->kegiatan = $request->kegiatan;
    $jurnalsiswa->status = $request->status;

    if ($request->hasFile('image')) {
        // Hapus gambar lama
        if ($oldImage != 'default.jpg') {
            Storage::delete('public/image/' . $oldImage);
        }

        // Upload gambar baru
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/image', $imageName);
        $jurnalsiswa->image = $imageName;
    } else {
        $jurnalsiswa->image = $oldImage; // Menggunakan gambar lama jika tidak ada gambar yang diupload
    }

    $jurnalsiswa->save();

    return redirect()->route('jurnal_siswa.index')->with('success', 'Data berhasil diubah');
}
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jurnalsiswa  $jurnalsiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(jurnalsiswa $jurnalsiswa)
    {
        //
    }

    public function downloadPDF()
    {
        set_time_limit(0);
        $data = JurnalSiswa::where('nama',Auth::user()->name)->get();
        $pdf = Pdf::loadView('desain_pdf.jurnal', ['data' => $data]);
        return $pdf->download('jurnal_siswa.pdf');

    }
    public function getData()
    {
        $data = JurnalSiswa::all();

        return response()->json($data);
    }
    public function print()
    {
        $data = JurnalSiswa::all();

        return view('desain_pdf.jurnal',compact('data'));
    }
    public function printjurnal()
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
    // Mendapatkan data dari database (contoh menggunakan model User)
    $users = JurnalSiswa::where('nama', Auth::user()->name)->get();

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
    $filename = "database_export.docx";
    $path = storage_path('app/public/image/' . $filename); // Sesuaikan dengan lokasi penyimpanan yang diinginkan
    $phpWord->save($path);

    // Mengembalikan file dokumen untuk diunduh
    return response()->download($path, $filename);
}
}
