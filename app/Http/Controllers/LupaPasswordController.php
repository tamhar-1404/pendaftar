<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class LupaPasswordController extends Controller
{
    public function index(){
        return view('lupapassword.index');
    }

    public function store(Request $request){
        $request->validate([
            'email' => 'required|email'
        ]);

        try {
            $status = Password::sendResetLink(
                $request->only('email')
            );

            return $status === Password::RESET_LINK_SENT
                ? back()->with('success', __($status))
                : back()->withInput($request->only('email'))
                        ->withErrors(['email'=>__($status)]);
        } catch (\Exception $e) {
            return back()->withErrors(['email'=> $e->getMessage()]);
        }
    }

    public function reset(string $token, Request $request){
        $email = $request->email;
        return view('lupapassword.resetpassword', compact('token', 'email'));
    }

    public function update(Request $request){
        $request->validate([
            'token' => ['required'],
            'email' => ['required','email'],
            'password' => ['required', 'confirmed', 'min:6'],

        ]);
        $status = Password::reset(
            $request->only('email', 'password', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status == Password::PASSWORD_RESET
                ? redirect()->route('login.index')->with('success', __($status))
                : back()->withInput($request->only('email'))
                        ->withErrors(['email' => [__($status)]]);
    }
}
