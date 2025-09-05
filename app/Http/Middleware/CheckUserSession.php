<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$level)
    {
        if (!$request->session()->has('user')) {
            return redirect('/')->with('resp_msg', 'Sesi anda tidak ditemukan, silahkan masuk kembali.');
        }

        $userSession = session('user');

        if (!isset($userSession['ID_ROLE'])) {
            $request->session()->forget('user');
            return redirect('/')->with('resp_msg', 'Sesi tidak valid, silakan login kembali.');
        }

        if (in_array($userSession['ID_ROLE'], $level)) {
            return $next($request);
        } else {
            return redirect('/')->with('resp_msg', 'Akses tidak diizinkan.');
        }
    }
}
