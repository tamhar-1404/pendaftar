<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PasswordController extends Controller
{
    public function validatePassword(Request $request)
    {
        $password = $request->input('password');

        // Lakukan validasi password dengan tabel users
        $user = User::where('email', 'example@example.com')->first(); // Ganti dengan kondisi sesuai kebutuhan
        if (!$user) {
            // Jika email tidak ditemukan dalam tabel users, kembalikan respon password tidak valid
            $response = [
                'valid' => false
            ];
        } else {
            // Jika email ditemukan dalam tabel users, verifikasi password
            if (Hash::check($password, $user->password)) {
                // Password valid, kembalikan respon password valid
                $response = [
                    'valid' => true
                ];
            } else {
                // Password tidak valid, kembalikan respon password tidak valid
                $response = [
                    'valid' => false
                ];
            }
        }

        return response()->json($response);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
