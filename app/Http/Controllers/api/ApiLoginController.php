<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ApiLoginController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'kode' => 400,
                'status' => false,
                'message' => $validator->errors()->first(),
            ], 400);
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'kode' => 200,
                'status' => true,
                'user' => $user,
                'token' => $token,
            ], 200);
        } else {
            return response()->json([
                'kode' => 401,
                'status' => false,
                'message' => 'Maaf, Akun Anda Tidak Ditemukan',
            ], 401);
        }
        
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json([
            'kode' => 200,
            'status' => true,
            'message' => 'Logout Berhasil',
        ], 200);
    }

}
