<?php

namespace App\Http\Controllers;

use App\Models\MOU;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreMOURequest;
use App\Http\Requests\UpdateMOURequest;

class MOUController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $mous = MOU::where('nama', 'LIKE', '%' . $keyword . '%')->orWhere('alamat', 'LIKE', '%' . $keyword . '%')->paginate(3);
            return view('mou.index', compact('mous'));

            $mous->appends(['cari' => $keyword]);
            return view('mou.index', compact('mous'));
        }
        $mous = MOU::latest()->paginate(3);
        return view('mou.index' ,compact('mous')) ;
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
     * @param  \App\Http\Requests\StoreMOURequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request ,[
            'logo'=>'required',
            'nama'=>'required',
            'email'=>'required',
            'no'=>'required',
            'alamat'=>'required'
        ]);

        $image = $request->file('logo');
        $image->storeAs('public/mou', $image->hashName());

        MOU::create([
            'logo'=>$image->hashName(),
            'nama'=>$request->nama,
            'email'=>$request->email,
            'no'=>$request->no,
            'alamat'=>$request->alamat
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MOU  $mOU
     * @return \Illuminate\Http\Response
     */
    public function show(MOU $mOU)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MOU  $mOU
     * @return \Illuminate\Http\Response
     */
    public function edit(MOU $mOU)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMOURequest  $request
     * @param  \App\Models\MOU  $mOU
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MOU $mOU)
    {

        $data = mou::find($request->id);
        if ($request->logo != null) {
            Storage::delete('public/mou' . $request->imageold);


            $image = $request->file('logo');
            $image->storeAs('public/mou', $image->hashName());

           $data->update([
                'logo'=>$image->hashName(),
                'nama'=>$request->nama,
                'email'=>$request->email,
                'no'=>$request->notelepon,
                'alamat'=>$request->alamat
            ]);
            return redirect()->back();
        }

        $data->update([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'no'=>$request->notelepon,
            'alamat'=>$request->alamat
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MOU  $mOU
     * @return \Illuminate\Http\Response
     */
    public function destroy(MOU $mou)
    {
        Storage::delete('public/mou/'. $mou->logo);
        //delete post
        $mou->delete();
        return redirect()->back();
    }
}
