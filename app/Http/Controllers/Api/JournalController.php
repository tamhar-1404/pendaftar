<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Resources\JournalResource;
use App\Models\Jurnalsiswa;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    /**
     * index
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $data = Jurnalsiswa::where('siswa_id', auth()->user()->siswa_id)->latest()->get();
        return ResponseHelper::success(JournalResource::collection($data));
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $siswa_id = auth()->user()->Siswa->id;
        $hariIni = Carbon::now()->format('l');
        if ($hariIni == 'Saturday' || $hariIni == 'Sunday') {
            return ResponseHelper::error(null, "Hari Ini Libur");
        } else {
            $hari = Carbon::now()->format('Y-m-d');
            $jam = Carbon::now()->format('H-i');
            if($jam < '23:59'){
                $data = Jurnalsiswa::where('siswa_id', $siswa_id)->where('tanggal', $hari)->exists();
                if(!$data){
                        $request->validate([
                            'kegiatan' => "required|min:100",
                            'image' => 'required|image|mimes:png,jpg,jpeg'
                        ],[
                            'kegiatan.min' => 'jurnal minnimal 100 karakter'
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
                        return ResponseHelper::success(null, "Berhasil Mengumpulkan Jurnal");
                }else{
                    return ResponseHelper::error(null, "Sudah Mengumpulkan Jurnal");
                }
            }else{
                return ResponseHelper::error(null, 'Anda telat mengumpulkan jurnal');
            }
        }

    }
}
