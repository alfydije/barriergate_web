<?php

namespace App\Http\Controllers;

use App\Models\Park;
use App\Models\User;
use App\Models\Vehycle;
use App\Models\AppConfig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = '';
        $vehycles = '';
        $appConfig = AppConfig::first();
        if(Auth::user()->hasRole('admin')){
            $data = Park::get();
            $vehycles = Vehycle::get();
        }else if(Auth::user()->hasRole('pegawai') || Auth::user()->hasRole('mahasiswa')){
            $vehycleId = Auth::user()->vehycle[0]->id ?? "";
            $vehycles = Auth::user()->vehycle;
            $data = Park::where('vehycle_id', $vehycleId)->get();
        }
        // dd($data);
        $user = User::role('admin')->get();
        $user1 = User::role('pegawai')->get();
        $user2 = User::role('mahasiswa')->get();
        return view('contents.dashboard', compact('data','user','user1','user2','vehycles', 'appConfig'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
