<?php

namespace App\Http\Controllers;

use App\Enums\DayEnum;
use App\Models\AttendanceRule;
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
                ->where('day', DayEnum::MONDAY->value)
                ->first();
        return view('master.index', compact('senin', 'selasa', 'rabu', 'kamis', 'jumat'));
    }
}
