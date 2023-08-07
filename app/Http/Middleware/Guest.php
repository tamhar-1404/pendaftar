<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Guest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role == 'Admin') {
                return redirect()->route('dudi.index');
            } elseif ($user->role == 'Siswa') {
                return redirect()->route('Siswamagang.index');
            } elseif ($user->role == 'guru') {
                return redirect()->route('guru.index');
            }
        }
        return $next($request);
    }
}
