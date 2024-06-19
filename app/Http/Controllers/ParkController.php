<?php

namespace App\Http\Controllers;

use App\Models\Park;
use App\Models\User;
use App\Models\Vehycle;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;

class ParkController extends Controller
{

    public function index()
    {
        return view('contents.data-parkir.index');
    }

    public function show($id)
    {

        return response()->json([
            'data' => User::where('id', $id)->with(['user_profile', 'vehycle'])->first(),
        ]);
    }

    public function datatable(){

        $data = Park::with(['vehycle', 'vehycle.user.user_profile', 'vehycle.user'])->orderBy('time_in', 'DESC')->get();

        // return response()->json($data);
        return DataTables::of($data)->make();
    }

    public function parkHistory()
    {
        return view('contents.riwayat-parkir.index');
    }

    public function parkHistoryDatatable(){
        
        try {
            $data = [];
            $id = Auth::user()->id;
            $vehycle = Vehycle::where('user_id', $id)->first();
            if ($vehycle != null) {
                $data = Park::where('vehycle_id', $vehycle->id)->orderBy('time_in', 'DESC')->get();
            }
        } catch (\Throwable $th) {
            return response()->json([
                'status'    => false,
                'message'   => $th->getMessage(),
            ]);
        }

        return DataTables::of($data)->make();
    }
    
    public function detailDatatable(string $id){
        $data = Vehycle::where('user_id', $id)->get();

        // return response()->json($data);

        return DataTables::of($data)->make();
    }
}
