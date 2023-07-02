<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
          // Cek peran saat ini dengan peran yang diberikan
          if (in_array($request->user()->role, $roles)) {
            return $next($request);
        }

        // return redirect()->route('login.index');
        if (!in_array($request->user()->role, $roles)) {
            return redirect()->route('login.index');
        };

    }
}
