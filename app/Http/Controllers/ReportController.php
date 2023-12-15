<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\MonthEnum;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(Request $request)  {
        $date = Carbon::now();
        $month = $date->format('m');
        $MonthYear = $date->format('Y-m');
        if($request->has('month')){
            $MonthYear = \DateTime::createFromFormat('Y-m',$request->input('month'));
            $month = $MonthYear->format('m');
            $MonthYear = $MonthYear->format('Y-m');

        }
        // dd($month);
        $data = Siswa::with(['jurnals' => function ($query) use ($month) {
            $query->whereMonth('created_at', $month)->where('status', 'Tidak mengisi');
        }, 'absens' => function ($query) use ($month) {
            $query->whereMonth('created_at', $month)->whereIn('status', ['telat','alfa']);
        }])->orderBy('name', 'asc')->paginate(15);
        $data->appends(['cari' => $MonthYear]);
        return view('report.index', compact('data','MonthYear'));
    }
}
