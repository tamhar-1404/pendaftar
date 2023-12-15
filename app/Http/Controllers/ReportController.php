<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\MonthEnum;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()  {
        $data = Siswa::with('jurnals','absens')->get();
        // dd($data);
        return view('report.index', compact('data'));
    }
}
