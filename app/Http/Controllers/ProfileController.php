<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $data = User::with('user_profile')->find($user->id);
        return view('contents.profile.index', compact('data'));
    }

    /**
     * Show the form for creating aPP new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    function updateImage(Request $request, string $id) {
        // dd($request);

        $validator = Validator::make($request->all(), [
            'image'             => 'required|image|file|max:2048|mimes:jpeg,jpg,png,webp,svg',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
            ->with('error', $validator->errors()->first())
            ->withInput();
        }

        try {
            if($request->old_image){
                Storage::delete($request->old_image);
            }
    
            $file = $request->file('image')->store('users-image');
    
            $userProfile = UserProfile::where('user_id', $id)->first();
            UserProfile::updateorCreate(
                ['id'   => optional($userProfile)->id ?? null],
                [
                    'image' => $file,
                    'user_id' => $id,
                ]
            );

            // return response()->json([
            //     'status'    => true,
            //     'message'   => 'Foto profil berhasil diperbarui!',
            // ]);

            return redirect()->back()->with('success', 'Foto profil berhasil diperbarui!');
            
        } catch (\Throwable $th) {
            // dd($th);
            return redirect()->back()->with('error', 'Something went wrong!');
            // return response()->json([
            //     'status'    => false,
            //     'message'   => 'Something went wrong!',
            // ]);
        }


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'name' => 'required|min:6|max:50',
            'nip_nim' => 'required|max:20',
            'phone_number' => 'required|min:11|numeric',
            'address' => 'required',
            'gender' => 'required',
        ];
        $user = User::find($request->id);
        $userProfile = UserProfile::where('user_id', $user->id)->first();
        if($request->username != $user->username){
            $rules['username'] = 'required|min:6|max:50|unique:users';
        }
        if($request->email != $user->email){
            $rules['email'] = 'required|email|unique:users';
        }
        $request->validate($rules);

        try {
            User::updateorCreate(
                ['id'   => optional($user)->id ?? null],
                [
                    'username' => $request->username,
                    'email' => $request->email,
                ],
            );
    
            UserProfile::updateorCreate(
                ['id'   => optional($userProfile)->id ?? null],
                [
                    'name' => $request->name,
                    'nip_nim' => $request->nip_nim,
                    'user_id' => $user->id,
                    'phone_number' => $request->phone_number,
                    'address' => $request->address,
                    'gender' => $request->gender,
                ]
            );

            return response()->json([
                'status'    => true,
                'message'   => 'Profil Berhasil diperbarui!',
            ]);

        } catch (\Throwable $th) {
            return response()->json([
                'status'    => false,
                'message'   => 'Something Went Wrong!',
            ]);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function destroyImage(string $id)
    {
        try {
            $userProfile = UserProfile::where('user_id', $id)->first();
            $image = $userProfile->image;
            if($image != null){
                Storage::delete($image);
            }
            $userProfile->update([
                'image' => null
            ]);
    
            return response()->json([
                'status'    => true,
                'message'   => 'Berhasil menghapus foto!',
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status'    => false,
                'message'   => 'Somthing went wrong!',
            ]);
        }
    }

    public function updatePassword(Request $request,string $id){

        $request->validate([
            'currentPassword' => 'required|min:8',
            'password' => 'required|min:8|confirmed',
        ]);

        try {
            if(Hash::check($request->currentPassword, Auth::user()->password)){
                User::find($id)->update([
                    'password' => bcrypt($request->password),
                ]);
                return response()->json([
                    'status'    => true,
                    'message'   => 'Berhasil mengubah password!',
                ]);
            }else{
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
