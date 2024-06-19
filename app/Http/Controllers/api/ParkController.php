<?php

namespace App\Http\Controllers\api;

use App\Models\Park;
use App\Models\User;
use App\Models\AppConfig;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\FullNotification;
use Illuminate\Support\Facades\Notification;

class ParkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function in(Request $request, string $id)
    {
        try {

            $maxCapacity = AppConfig::pluck('maximum_capacity')->first();

            if(Park::where([['status', '=', 'Masuk'],['time_out', '=', null],])->count() >= $maxCapacity){
                return response()->json([
                    'status' => false,
                    'message' => 'Parkiran penuh!',
                ], 400);
            }

            $user = UserProfile::where('card_id', $id)->with(['user', 'user.vehycle'])->first();
            if ($user->user->vehycle->count() == 0) {
                return response()->json([
                    'status' => false,
                    'message' => 'Data kendaraan belum terdaftar',
                ], 400);
            }
            $park = Park::where([
                ['vehycle_id','=' ,$user->user->vehycle[0]->id],
                ['status', '=', 'Masuk'],
                ['time_out', '=', null],
                ])->first();
            if ($park != null) {
                return response()->json([
                    'status' => false,
                    'message' => 'Anda Belum Keluar Parkir',
                ], 400);
            }
            $data = Park::create([
                'vehycle_id' => $user->user->vehycle[0]->id,
                'image' => $request->image,
                'status' => 'Masuk',
                'owner' => $user->name,
                'time_in' => now()
            ]);

            if(Park::where([['status', '=', 'Masuk'],['time_out', '=', null],])->count() >= $maxCapacity){

                $email = User::all()->pluck('email');
                Notification::route('mail', $email)->notify(new FullNotification());

            }

            return response()->json([
                'status' => true,
                'message' => 'Berhasil Parkir',
                'data' => $data
            ], 200);
            
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
                'data' => null
            ], 500);
        }
        
    }

    public function out($id)
    {
        try {
            $user = UserProfile::where('card_id', $id)->with(['user', 'user.vehycle'])->first();

            $data = Park::where([
                ['vehycle_id', '=', $user->user->vehycle[0]->id],
                ['status', '=', 'Masuk'],
                ['time_out', '=', null]
            ])->first();

            if ($data == null) {
                return response()->json([
                    'status' => false,
                    'message' => 'Anda sudah keluar parkir',
                ], 200);
            }
            
            $data->update([
                'status' => 'keluar',
                'time_out' => now(),
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Berhasil keluar parkir',
                'data' => $data
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
                'data' => null
            ], 500);
        }
        
    }
}
