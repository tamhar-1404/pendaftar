<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\TopUp;
use App\Models\Barang;
use Illuminate\Http\Request;
use App\Models\History_Admin;
use App\Models\HistoryTransaksi;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreHistory_AdminRequest;
use App\Http\Requests\UpdateHistory_AdminRequest;
use App\Mail\stukEmail;

class HistoryAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $TopUp = TopUp::whereIn('status', ['Terima', 'Ditolak'])->get();
    return view('History_Admin.index', compact('TopUp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHistory_AdminRequest  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        
        $kode = $request->kode;
        $quantity = $request->quantity;
        $siswa = User::where('rfid', $request->rfid_user)->first();
        $i = 0;
        $total_semua = 0;
        $name = [];
        $harga = [];
        foreach ($kode as $item) {
            $data = Barang::where('kode', $item)->first();
            $total_semua += (int) $quantity[$i] * (int) $data->harga;

            if ($siswa->saldo > $total_semua) {
                array_push($name, $data->nama);
                array_push($harga, $data->harga);
                HistoryTransaksi::create([
                    'nama' => $siswa->name,
                    'rfid' => $request->rfid_user,
                    'name' => $data->nama,
                    'foto' => $data->foto,
                    'harga' => $data->harga,
                    'stok' => $quantity[$i],
                    'total' => (int) $quantity[$i] * (int) $data->harga,
                    'tanggal' => Carbon::now()->format('Y-m-d'),
                ]);

                $barang = Barang::where('kode', $item);
                $stok_lama = (int) $barang->first()->stok;
                $stok_baru = (int) $quantity[$i];
                $barang->update([
                    'stok' => $stok_lama - $stok_baru
                ]);

            }
            else {
                return redirect()->back()->with('error', 'Saldo anda tidak cukup');
            }

            $i++;
        }
        $user = User::where('rfid', $request->rfid_user);
        $user_saldo = $user->first()->saldo;

        $saldo = ['name'=> $name,'quantity' => $request->quantity, 'harga'=>$harga, 'total'=>$total_semua, 'total_saldo'=>(int) $user_saldo - (int) $total_semua];
        $user->update([
            'saldo' => (int) $user_saldo - (int) $total_semua,
        ]);
        // dd($user->first()->email);
        Mail::to($user->first()->email)->send(new stukEmail($saldo));
        return redirect()->route('kode_beli');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\History_Admin  $history_Admin
     * @return \Illuminate\Http\Response
     */
    public function show(History_Admin $history_Admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\History_Admin  $history_Admin
     * @return \Illuminate\Http\Response
     */
    public function edit(History_Admin $history_Admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHistory_AdminRequest  $request
     * @param  \App\Models\History_Admin  $history_Admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHistory_AdminRequest $request, History_Admin $history_Admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\History_Admin  $history_Admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(History_Admin $history_Admin)
    {
        //
    }
}
