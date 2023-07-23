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
use Exception;
use Carbon\Carbon;


class JurnalsiswaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Jurnalsiswa $Jurnalsiswa)
    {
        $Jurnalsiswa = Jurnalsiswa::all();
        $nama = Auth::user()->name;
        $item = Jurnalsiswa::where('nama',$nama)->get();
        return view('jurnal_siswa.index',compact('item' ,'Jurnalsiswa'));
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
        $hari = Carbon::now()->format('Y-m-d');
        $jam = Carbon::now()->format('H-i');
        // dd($jam > '16-00');
        $data = Jurnalsiswa::where('nama', Auth()->user()->name)->where('tanggal', $hari)->exists();
        if($data){
            // dd('uhgfg');
            if($jam < '23-59'){
                try {
                    $this->validate($request, [
                        'kegiatan' => "required",
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

                    return redirect()->route('jurnal_siswa.index');
                } catch (\Illuminate\Database\QueryException $e) {
                        return redirect()->back()->withInput()->withErrors(['tanggal' => 'Tanggal sudah ada dalam database.']);
            }
            }else{
                try {
                    $this->validate($request, [
                        'kegiatan' => "required",
                    ]);

                    $image = $request->file('image');
                    $image->storeAs('public/image', $image->hashName());

                    Jurnalsiswa::create([
                        'image' => $image->hashName(),
                        'nama' => Auth()->user()->name,
                        'tanggal' => $hari,
                        'sekolah' => Auth()->user()->sekolah,
                        'kegiatan' => $request->kegiatan,
                        'status' => 'tidak_mengisi',
                    ]);

                    return redirect()->route('jurnal_siswa.index');
                } catch (\Illuminate\Database\QueryException $e) {
                    return redirect()->back()->withInput()->withErrors(['tanggal' => 'Tanggal sudah ada dalam database.']);
            }
            }

        }else{
            return redirect()->back()->withInput()->withErrors(['tanggal' => 'Tanggal sudah ada dalam database.']);
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
        'nama' => 'required',
        'tanggal' => 'required',
        'sekolah' => 'required',
        'kegiatan' => 'required'
    ]);

    $Jurnalsiswa->nama = $request->nama;
    $Jurnalsiswa->tanggal = $request->tanggal;
    $Jurnalsiswa->sekolah = $request->sekolah;
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
        $data = Jurnalsiswa::where('nama',Auth::user()->name)->get();
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
    $path = Storage_path('App/public/Image/' . $filename); // Sesuaikan dengan lokasi penyimpanan yang diinginkan
    $phpWord->save($path);

    // Mengembalikan file dokumen untuk diunduh
    return response()->download($path, $filename);
}
}
