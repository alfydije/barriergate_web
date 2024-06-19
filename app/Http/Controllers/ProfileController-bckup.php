<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'name' => 'required|min:6|max:100',
            'phone_number' => 'required|min:11|max:15|numeric',
            'address' => 'required',
        ];
        $user = User::find($request->id);
        $userProfile = UserProfile::where('user_id', $user->id)->first();
        if($request->username != $user->username){
            $rules['username'] = 'required|min:6|max:100|unique:users';
        }
        if($request->email != $user->email){
            $rules['email'] = 'required|email:dns|unique:users';
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
                    'user_id' => $user->id,
                    'phone_number' => $request->phone_number,
                    'address' => $request->address,
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
}
