<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * login
     *
     * @param  mixed $request
     * @return JsonResponse
     */
    public function login(Request $request): JsonResponse
    {
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            if (auth()->user()->role == 'Siswa') {
                if(auth()->user()->Siswa->magang_awal > now()){
                    return ResponseHelper::error(null, "Belum mulai magang");
                }
                $data['token'] =  auth()->user()->createToken('auth_token')->plainTextToken;
                $data['user'] = UserResource::make(auth()->user());
                return ResponseHelper::success($data, "Berhasil login");
            }
            else {
                return ResponseHelper::error(null, "Anda telah di blokir");
            }
        }
        else {
            return ResponseHelper::error(null, "Username / password salah");
        }
    }

    /**
     * logout
     *
     * @param  mixed $request
     * @return JsonResponse
     */
    public function logout(Request $request): JsonResponse
    {
        auth()->user()->currentAccessToken()->delete();
        return ResponseHelper::success(auth()->user()->token, 'success logout');
    }
}
