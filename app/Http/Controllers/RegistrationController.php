<?php

namespace App\Http\Controllers;

use App\Models\Aproval;
use App\Models\Limit;
use App\Models\Siswa;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * index
     *
     * @param  mixed $request
     * @return View
     */
    public function index(Request $request): View|RedirectResponse
    {
        $siswa = Siswa::where('role', 'siswa')->count();
        if($request->has('limit')){
            $this->validate($request, [
                'limit' => 'required|max:225',
            ], [
                'limit.required' => 'Limit tidak boleh kosong',
                'limit.max' => 'Limit maksimal :max',
            ]);

            $cek = Limit::find(1);
            if($request->limit < $siswa){
                return redirect()->back()->with('error', 'jumlah limit tidak valid');
            }
            if($cek){
                $cek->update([
                  'limit' => $request->limit
                ]);
                return redirect()->back()->with('success', 'berhasil menambahkan limit!');
            }else{
                Limit::create([
                  'limit' => $request->limit
                ]);
                return redirect()->back()->with('success', 'berhasil menambahkan limit!');
            }
        }
        $limit = 0;
        $sisalimit = 0;
        if (!empty(Limit::first())) {
            $limit= Limit::find(1)->limit;
            $sisalimit = $limit - $siswa;
        }

        $approvals = Aproval::query()
            ->when($request->cari, function ($query) use ($request) {
                $query->where('name', 'LIKE', '%' . $request->cari . '%')->orWhere('jurusan', 'LIKE', '%' . $request->cari . '%');
            })
            ->latest()
            ->paginate(10);
        return view('master.approval.index', compact('approvals', 'limit', 'sisalimit'));
    }
}
