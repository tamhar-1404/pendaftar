<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Resources\AttendanceResource;
use App\Models\Anggota_piket;
use App\Models\ApprovalIzin;
use App\Models\Attendance;
use App\Models\AttendanceDetail;
use App\Models\AttendanceRule;
use App\Models\Siswa;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * index
     *
     * @param  mixed $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        $data = Attendance::query()
            ->with('detailAttendances')
            ->whereDate('created_at', '<=', now())
            ->where('student_id', auth()->user()->Siswa->id)
            ->get();
        return ResponseHelper::success(AttendanceResource::collection($data));
    }

    /**
     * attendanceToday
     *
     * @return JsonResponse
     */
    public function attendanceToday(): JsonResponse
    {
        $data = Attendance::query()
            ->with('detailAttendances')
            ->whereDate('created_at', now())
            ->where('student_id', auth()->user()->Siswa->id)
            ->first();
        return ResponseHelper::success(AttendanceResource::make($data));
    }

    /**
     * store
     *
     * @return JsonResponse
     */
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

    /**
     * permission
     *
     * @param  mixed $request
     * @return JsonResponse
     */
    public function permission(Request $request): JsonResponse
    {
        $this->validate($request, [
            'dari' => 'required|date',
            'sampai' => 'required|date',
            'keterangan' => 'required',
            'deskripsi' => 'required',
            'bukti' => 'required|image|mimes:jpeg,jpg,png'
        ]);
        if($request-> dari > $request->sampai ){
            return ResponseHelper::error(null, 'tanggal izin tidak valid');
        }
        $image = $request->file('bukti');
        $image->storeAs('public/bukti_izin', $image->hashName());
        $dari = $request->dari;
        $tanggal_dari = Carbon::parse($dari)->format('Y-m-d');
        $data = ApprovalIzin::where('siswa_id', auth()->user()->Siswa->id)
                            ->whereNot('status', 'tolak')
                            ->whereNot('status2', 'tolak')
                            ->where(function ($query) use ($tanggal_dari) {
                                $query->whereNotNull('created_at')
                                      ->whereDate('created_at', $tanggal_dari);
                            })
                            ->orWhereNull('created_at')
                            ->doesntExist();
        if (!$data) {
            return ResponseHelper::error(null, 'Anda sudah memiliki izin pada tanggal ini');
        }
        $cek_dulu_gk_sih = ApprovalIzin::where('siswa_id', auth()->user()->Siswa->id)
                        ->where('dari', $dari)
                        ->whereNot('status', 'tolak')
                        ->whereNot('status2', 'tolak')
                        ->exists();
        if ($cek_dulu_gk_sih) {
            return ResponseHelper::error(null, 'Anda sudah memiliki izin pada tanggal ini');
        }
        $image = $request->file('bukti');
        $image->storeAs('public/bukti_izin', $image->hashName());

        $user = auth()->user();
        ApprovalIzin::create([
            'siswa_id' => $user->Siswa->id,
            'dari' => $request->dari,
            'sampai' => $request->sampai,
            'keterangan' => $request->keterangan,
            'deskripsi' => $request->deskripsi,
            'status' => 'menunggu',
            'status2' => 'menunggu',
            'bukti' => $image->hashName(),
            'tanggal' => Carbon::now()->format('Y-m-d'),
            'jam' => Carbon::now()->format('H:i'),
        ]);

        return ResponseHelper::success(null, "Berhasil mengajukan izin");
    }

    /**
     * getStudentByRfid
     *
     * @param  mixed $rfid
     * @return mixed
     */
    private function getStudentByRfid($rfid): mixed
    {
        $query = User::query()
            ->where('RFID', $rfid);
        if (!$query->exists()) return ResponseHelper::error(null, "Siswa tidak ditemukan");
        $user = $query->first();
        return Siswa::query()
            ->findOrFail($user->siswa_id);
    }

    /**
     * doAttendanceNow
     *
     * @param  mixed $rfid
     * @return mixed
     */
    private function doAttendanceNow($rfid): mixed
    {
        $today = now()->format('l');
        $student = $this->getStudentByRfid($rfid);
        if (!$attendance = Attendance::query()->where(['student_id' => $student->id])->whereDate('created_at', now()->format('Y-m-d'))->first()) {
            $attendance = Attendance::query()
                ->create(['student_id' => $student->id]);
        }
        $attendance_id = $attendance->id;
        $time = now()->format('H:i:s');
        $attendanceRule = AttendanceRule::query()
            ->where('day', $today)
            ->first();

        if ($time >= $attendanceRule->checkin_starts && $time <= Carbon::createFromFormat('H:i:s', $attendanceRule->checkin_ends)->addMinutes(40)->format('H:i:s')) {
            return AttendanceDetail::query()
                ->updateOrCreate(
                    ['attendance_id' => $attendance_id, 'status' => 'present'],
                    ['status' => 'present']
                );
        } else if ($time >= $attendanceRule->break_starts && $time <= $attendanceRule->break_ends) {
            return AttendanceDetail::query()
                ->updateOrCreate(
                    ['attendance_id' => $attendance_id, 'status' => 'break'],
                    ['status' => 'break']
                );
        } else if ($time >= $attendanceRule->return_starts && $time <= Carbon::createFromFormat('H:i:s', $attendanceRule->return_ends)->addMinutes(40)->format('H:i:s')) {
            return AttendanceDetail::query()
                ->updateOrCreate(
                    ['attendance_id' => $attendance_id, 'status' => 'return_break'],
                    ['status' => 'return_break']
                );
        } else if ($time >= $attendanceRule->checkout_starts && $time <= $attendanceRule->checkout_ends) {
            return AttendanceDetail::query()
                ->updateOrCreate(
                    ['attendance_id' => $attendance_id, 'status' => 'return'],
                    ['status' => 'return']
                );
        }
        return null;
    }

    /**
     * attendanceByRfid
     *
     * @param  mixed $rfid
     * @return JsonResponse
     */
    public function attendanceByRfid($rfid): JsonResponse
    {
        $today = now()->format('l');
        $attendanceRule = AttendanceRule::query()
            ->where('day', $today)
            ->first();
        if (!$attendanceRule) return ResponseHelper::error(null, "Tidak ada jam absen hari ini");
        $doAttendance = $this->doAttendanceNow($rfid);
        if (!$doAttendance) return ResponseHelper::error(null, "Jam absensi tidak tersedia");
        if (!$doAttendance->wasRecentlyCreated) return ResponseHelper::error(null, "Anda telah absensi pada jam ini");
        return ResponseHelper::success($this->getStudentByRfid($rfid), "Berhasil absensi");
    }
}
