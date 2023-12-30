<?php

namespace App\Http\Controllers;

use App\Models\ApprovalIzin;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index(Request $request): View
    {
        ApprovalIzin::whereDate('sampai', '<', now())->update(['status' => 'terimaabsen', 'status2' => '']);
        $menunggu = ApprovalIzin::query()
            ->where('status', 'menunggu')
            ->get();
        $terima = ApprovalIzin::query()
            ->where('status2', ['izin', 'tolak'])
            ->when($request->cari, function ($query) use ($request) {
                $query->where('tanggal', 'LIKE', '%' . $request->cari . '%');
            })
            ->latest()
            ->paginate(10);
        return view('master.approval.permission', compact('menunggu', 'terima'));
    }
}
