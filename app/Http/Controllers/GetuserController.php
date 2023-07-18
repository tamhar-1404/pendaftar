<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GetuserController extends Controller
{
    public function get_user(Request $request)
    {
        return "Oke";
    }

    public function find_rfid(Request $request)
    {
        $rfid = $request->rfid;
        if (User::where('rfid', $rfid)->exists()) {
            return User::where('rfid', $rfid)->first()->id;
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
