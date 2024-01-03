<?php

namespace App\Http\Controllers;

use App\Enums\DayEnum;
use App\Models\Aproval;
use App\Models\AttendanceRule;
use App\Models\Siswa;
use App\Models\Tolak;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index(Request $request): View
    {
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
        return view('master.index', compact('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'studentCount', 'pendingCount', 'rejectedCount'));
    }
}
