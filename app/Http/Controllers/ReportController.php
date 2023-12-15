<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\MonthEnum;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()  {
        $date = Carbon::now();
        $month = $date->format('m');
        $data = Siswa::with(['jurnals' => function ($query) use ($month) {
            $query->whereMonth('created_at', $month);
        }, 'absens' => function ($query) use ($month) {
            $query->whereMonth('created_at', $month);
        }])->get();
        return view('report.index', compact('data'));
    }
}
