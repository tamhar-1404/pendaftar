<?php

namespace App\Http\Controllers;

use App\Enums\DayEnum;
use App\Models\Aproval;
use App\Models\Attendance;
use App\Models\AttendanceRule;
use App\Models\DiligentStudent;
use App\Models\Jurnalsiswa;
use App\Models\Siswa;
use App\Models\Tolak;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardAdminController extends Controller
{
    public function index(Request $request): View
    {

        if (now()->isSaturday()) {
            $days = [DayEnum::MONDAY->value, DayEnum::TUESDAY->value, DayEnum::WEDNESDAY->value, DayEnum::THURSDAY->value, DayEnum::FRIDAY->value];
            foreach ($days as $day) {
                if ($day == DayEnum::MONDAY->value) {
                    $dayCarbon = Carbon::MONDAY;
                } else if ($day == DayEnum::TUESDAY->value) {
                    $dayCarbon = Carbon::TUESDAY;
                } else if ($day == DayEnum::WEDNESDAY->value) {
                    $dayCarbon = Carbon::WEDNESDAY;
                } else if ($day == DayEnum::THURSDAY->value) {
                    $dayCarbon = Carbon::THURSDAY;
                } else {
                    $dayCarbon = Carbon::FRIDAY;
                }
                $data = Attendance::query()->whereDay('created_at', now()->previous($dayCarbon))->orderBy('created_at')->first();
                if ($data) DiligentStudent::query()->updateOrCreate(['day' => $day], ['attendance_id' => $data->id]);
            }
        }
        $absensis = DiligentStudent::get();
        $totalTidakMengumpulkanJurnal = Jurnalsiswa::query()
            ->whereDate('created_at', '>=', now()->previous(Carbon::MONDAY)->toDateString())
            ->whereDate('created_at', '<=', now())
            ->with('siswa')
            ->whereRelation('siswa', 'status', '=', null)
            ->where('status', 'Tidak mengisi')
            ->select('siswa_id', DB::raw('count(*) as total_kosong'))
            ->groupBy('siswa_id')
            ->orderByDesc('total_kosong')
            ->get();
            // dd($totalTidakMengumpulkanJurnal);

        $senin = AttendanceRule::query()
            ->where('day', DayEnum::MONDAY->value)
            ->first();
        $selasa = AttendanceRule::query()
            ->where('day', DayEnum::TUESDAY->value)
            ->first();

        $rabu = AttendanceRule::query()
            ->where('day', DayEnum::WEDNESDAY->value)
            ->first();

        $kamis = AttendanceRule::query()
            ->where('day', DayEnum::THURSDAY->value)
            ->first();
        $jumat = AttendanceRule::query()
            ->where('day', DayEnum::FRIDAY->value)
            ->first();

        $studentCount = Siswa::query()
            ->whereNull('status')
            ->count();
        $pendingCount = Aproval::query()
            ->where('status', 'menunggu')
            ->count();
        $rejectedCount = Tolak::query()
            ->count();
        return view('master.index', compact('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'studentCount', 'pendingCount', 'rejectedCount','totalTidakMengumpulkanJurnal','absensis'));
    }
}
