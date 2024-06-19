<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserProfile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class UserProfilController extends Controller
{
    // Fungsi untuk menampilkan profil pengguna
    public function userProfilList(Request $request, string $id)
    {
        // Mendapatkan profil pengguna yang terkait dengan pengguna yang sedang login
        // $userProfile = $request->user()->user_profile;
        $userProfile = UserProfile::where('user_id', $id)->first();

        if (!$userProfile) {
            return response()->json([
                'status' => 'error',
                'message' => 'Profil pengguna tidak ditemukan'
            ], 404);
        }

        // Mengembalikan data profil pengguna yang dipilih sebagai respons JSON
        return response()->json([
            'status' => 'success',
            'data' => [
                'name' => $userProfile->name,
                'address' => $userProfile->address,
                'phone_number' => $userProfile->phone_number,
                'nip_nim' => $userProfile->nip_nim,
                'image' => $userProfile->image,
                'gender' => $userProfile->gender,
                'email' => $request->user()->email,
                'username' => $request->user()->username,
            ]
        ]);
    }

    // Fungsi untuk mengedit profil pengguna
    public function UserProfilEdit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'string',
            'address' => 'string',
            'phone_number' => 'string',
            'nip_nim' => 'string',
            'image' => 'file|image:png',
            'gender' => 'string|in:male,female',
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first()
            ], 400);
        }
        try {
            $user = User::find($request->id);
            $userProfile = UserProfile::where('user_id', $user->id)->first();

            $data = $request->all();
            if ($request->file('image')) {

                if($userProfile->image){
                        Storage::delete($userProfile->image);
                }

                $file = $request->file('image')->store('users-image');
                $data['image'] = $file;

            }
            
            $userProfile->update($data);

            return response()->json([
                'status' => 'success',
                'message' => 'Profil pengguna berhasil diperbarui'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'gagal',
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    public function UpdatePassword(Request $request, string $id)
    {
        $request->validate([
            'currentPassword' => 'required|min:8',
            'password' => 'required|min:8',
        ]);

        try {
            if (Hash::check($request->currentPassword, $request->user()->password)) {
                $request->user()->update([
                    'password' => bcrypt($request->password),
                ]);
                return response()->json([
                    'status'    => true,
                    'message'   => 'Berhasil mengubah password!',
                ]);
            } else {
                return response()->json([
                    'status'    => false,
                    'message'   => 'Password yang anda masukan salah!',
                ]);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'status'    => false,
                'message'   => $th->getMessage(),
            ]);
        }
    }
}