<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Resources\AttendanceResource;
use App\Models\Anggota_piket;
use App\Models\ApprovalIzin;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * index
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $data = ApprovalIzin::whereRelation('Siswa', 'id', auth()->user()->Siswa->id)->where('status', 'terimaabsen')->latest()->take(15)->get();
        return ResponseHelper::success(AttendanceResource::collection($data));
    }

    public function store(): JsonResponse
    {
        $hariIni = Carbon::now()->format('l');
        if ($hariIni == 'Saturday' OR $hariIni == 'Sunday') {
            return ResponseHelper::error(null, "Hari ini libur");
        }
        else {
            $telat='telat';
            $keterangan = "Hadir";
            $p = Carbon::now()->format('H:i');
            if($p < '06.00'){
                return ResponseHelper::error(null, 'Anda Masih belum bisa absen');
            }
            $hari_ini = Carbon::now()->format('Y-m-d');
            $currentDay = Carbon::now()->format('D');
            $cek_izin = ApprovalIzin::where([['tanggal', $hari_ini], ['keterangan', 'izin'], ['status2', 'izin']]);
            $cek_izin_hari_ini = $cek_izin->exists();
            if ($cek_izin_hari_ini) {
                $tanggal_hari_ini = Carbon::parse($cek_izin->first()->tanggal);
                $izin_sampai = Carbon::parse($cek_izin->first()->sampai);
                while ($tanggal_hari_ini <= $izin_sampai) {
                    $tanggal_hapus_kedepan = $tanggal_hari_ini->addDay()->format('Y-m-d');
                    ApprovalIzin::where('siswa_id', auth()->user()->siswa_id)->where('tanggal', $tanggal_hapus_kedepan)->delete();
                }
                ApprovalIzin::where('siswa_id', auth()->user()->siswa_id)->where('tanggal', $hari_ini)->where('keterangan', 'izin')->delete();
            }
            $piket = Anggota_piket::where([['siswa_id', auth()->user()->siswa_id], ['hari', Carbon::now()->locale('id')->dayName], ['waktu', 'pagi']])->exists();
            if ($piket) {
                if (Carbon::now()->format('H:i') > '07:45') {
                    $keterangan = $telat;
                }
            }
            else {
                if(Carbon::now()->format('H:i') > '08:00' ){
                    $keterangan = $telat;
                }
            }
            $tanggal = Carbon::now()->format('Y-m-d');
            $cek = ApprovalIzin::where('siswa_id', auth()->user()->siswa_id)->where('tanggal', $tanggal)->where('status', 'terimaabsen')->get();
            if($cek->count() > 0){
                return ResponseHelper::error(null, 'Anda Sudah Absen');
            }
            if($currentDay !== 'Saturday' && $currentDay !== 'Sunday'){
                $user = auth()->user()->siswa_id;
                ApprovalIzin::create([
                    'siswa_id' => $user,
                    'tanggal' => Carbon::now()->format('Y-m-d'),
                    'jam' => Carbon::now()->format('H:i'),
                    'keterangan' => $keterangan,
                    'status' => 'terimaabsen'
                ]);
            }
            return ResponseHelper::success(null, 'Berhasil Absen');
        }
    }
}
