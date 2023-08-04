<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GetuserController extends Controller
{
    public function find_rfid(Request $request)
    {
        $rfid = $request->rfid;
        if (User::where('rfid', $rfid)->exists()) {
            $user = User::where('rfid', $rfid)->first();
            // $usr = $user->first();
            return response()->json([
                'foto' => $user->Siswa->foto_siswa,
                'nama' => $user->name,
                'email' => $user->email,
                'sekolah' => $user->sekolah,
                'saldo' => $user->saldo,
            ]);
        }
        else {
            return "not found";
        }
    }

    public function check_password(Request $request) {
        $user_password = User::find($request->id)->password;
        $password_input = $request->password;

        if (Hash::check($password_input, $user_password)) {
            return User::find($request->id)->saldo;
        }
        else {
            return "error";
        }
    }
}
