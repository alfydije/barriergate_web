<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vehycle;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('read');
        return view('contents.pegawai-account.index');
    }

    /**
     * Show the form for creating a new resource.
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
        // dd($request);
        
        $request->validate([
            'username' => 'required|unique:users|min:6',
            'name' => 'required|string|max:50',
            'email' => 'required|unique:users|email:dns',
            'card_id' => 'required|unique:user_profiles',
            'brand' => 'required|max:30',
            'type' => 'required|max:30',
            'vehycle_number' => 'required|unique:vehycles|max:20',
            'chassis_number' => 'required|unique:vehycles|max:20',
            'image' => 'required|image|file|max:2048|mimes:jpeg,jpg,png,webp,svg',
        ]);

        try {
            DB::beginTransaction();
            $data = User::get();
    
            $user = User::create([
                'username'          => $request->username,
                'email'             => $request->email,
                'password'          => bcrypt('password'),
            ])->assignRole('pegawai');
    
            UserProfile::create([
                'user_id' => $user->id,
                'name' => $request->name,
                'card_id' => $request->card_id,
            ]);
    
            $file = $request->file('image')->store('vehycle-images');
            
            Vehycle::create([
                'user_id' => $user->id,
                'brand' => $request->brand,
                'type' => $request->type,
                'image' => $file,
                'vehycle_number' => $request->vehycle_number,
                'chassis_number' => $request->chassis_number,
            ]);
    
            DB::commit();
    
            return response()->json([
                'status'    => true,
                'message'   => 'Success add pegawai account!',
            ]);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json([
                'status'    => false,
                'message'   => 'Something Went Wrong!',
            ]);
        }
        
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
    public function edit($id)
    {
        return response()->json([
            'data'  => User::with(['user_profile', 'vehycle'])->find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = User::findOrFail($id);
        $dataUser = UserProfile::where('user_id', $id)->first();

        $rules = [
            'username' => 'required|min:6',
            'email' => 'required|email:dns',
            'card_id' => 'required',
        ];
        
        if ($request->username != $data->username) {
            $rules['username'] = 'required|unique:users|min:6';
        }
        if ($request->email != $data->email) {
            $rules['email'] = 'required|unique:users|email:dns';
        }
        if ($request->card_id != $dataUser->card_id) {
            $rules['card_id'] = 'required|unique:user_profiles';
        }
        
        $validatedData = $request->validate($rules);

        
        User::where('id', $id)->update([
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
        ]);
        UserProfile::where('user_id', $id)->update([
            'card_id' => $validatedData['card_id'],
        ]);

        return response()->json([
            'status'    => true,
            'message'   => 'Success update mahasiswa account!',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            UserProfile::where('user_id', $id)->delete();
            Vehycle::where('user_id', $id)->delete();
            User::find($id)->delete();
            
            DB::commit();
            return response()->json([
                'status'    => true,
                'message'   => 'Success delete account!',
            ]);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json([
                'status'    => false,
                'message'   => 'Something went wrong!',
            ]);
            //throw $th;
        }
    }

    public function datatable(Request $request){
        $data = User::role('pegawai')->orderBy('created_at', 'DESC')->get();

        return DataTables::of($data)->make();
    }
}