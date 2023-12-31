<?php

namespace App\Http\Controllers;

use App\Models\TopUp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TerimaTopup;
use App\Http\Requests\StoreTopUpRequest;
use App\Http\Requests\UpdateTopUpRequest;
use App\Mail\Topup as MailTopup;
use Illuminate\Contracts\View\View;

class TopUpController extends Controller
{
    /**
     * index
     *
     * @param  mixed $request
     * @return View
     */
    public function index(Request $request): View
    {
        $topUp = TopUp::query()
            ->when($request->cari, function ($query) use ($request) {
                $query->where('tanggal', 'LIKE', '%' . $request->cari . '%');
            })
            ->where('status', 'menunggu')->latest()->paginate(10);
        $topUp->appends(['cari' => $request->cari]);
        return view('master.approval.topup', compact('topUp'));
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
     * @param  \App\Http\Requests\StoreTopUpRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
       //
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TopUp  $topUp
     * @return \Illuminate\Http\Response
     */
    public function show(TopUp $topUp)
    {
        dd('succes');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TopUp  $topUp
     * @return \Illuminate\Http\Response
     */
    public function edit(TopUp $topUp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTopUpRequest  $request
     * @param  \App\Models\TopUp  $topUp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TopUp $topUp, $id)
    {
        $topup = TopUp::find($id);
        $user = $topup->user;
        $this->validate($request, [
            'saldo' => 'required|numeric',
        ], [
            'saldo.required' => 'Saldo tidak boleh kosong',
            'saldo.numeric' => 'Saldo hanya boleh angka',
        ]);
        $saldoLama = $user->saldo;

        $saldoBaru = $request->saldo;

        $saldoAkhir = $saldoLama + $saldoBaru;

        $user->saldo = $saldoAkhir;
        $user->save();

        $topup->update([
            'status' => $request->status
        ]);

        // $emailData = [
        //     'topup' => $topup,
        //     'user' => $user
        // ];
        $saldo = ['saldo'=> $request->saldo, 'total_saldo'=>$user->saldo, 'name'=>$user->name];
        // Mail::to($user->email)->send(new TerimaTopup($saldo));

        return redirect()->back()->with('success', 'Berhasil menerima top up');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TopUp  $topUp
     * @return \Illuminate\Http\Response
     */

    public function tolaktopup (){
        dd('succes');
    }

    public function destroy(Request $request, $topUp)
    {
      //
    }
}
