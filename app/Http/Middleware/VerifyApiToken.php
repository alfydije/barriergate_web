<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifyApiToken
{
    public function handle(Request $request, Closure $next)
    {
        
    // if ($request->is('login')) {
    //         // Jika ya, langsung lanjutkan permintaan tanpa memeriksa otentikasi
    //         return $next($request);
    //     }

        // Periksa otentikasi pengguna
        if (Auth::guard('sanctum')->check()) {
            // Jika pengguna diotentikasi, lanjutkan permintaan
            return $next($request);
        } else {
            // Jika tidak diotentikasi, kembalikan respons JSON dengan pesan kesalahan
            return response()->json(['error' => 'Unauthenticated'], 401);
        }
    }
}

