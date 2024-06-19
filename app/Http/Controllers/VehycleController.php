<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vehycle;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class VehycleController extends Controller
{
    /*
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contents.vehycles.index');
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
            'user_id' => 'required',
            'brand' => 'required|max:30',
            'type' => 'required|max:30',
            'vehycle_number' => 'required|unique:vehycles|max:20',
            'chassis_number' => 'required|unique:vehycles|max:20',
            'image' => 'required|image|file|max:2048|mimes:jpeg,jpg,png,webp,svg',
        ]);

        try {
            $file = $request->file('image')->store('vehycle-images');
    
            Vehycle::create([
                'user_id' => $request->user_id,
                'brand' => $request->brand,
                'type' => $request->type,
                'image' => $file,
                'vehycle_number' => $request->vehycle_number,
                'chassis_number' => $request->chassis_number,
            ]);
    
            return response()->json([
                'status'    => true,
                'message'   => 'Berhasil menambahkan data kendaraan!',
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status'    => false,
                'message'   => 'Something went wrong!',
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
    public function edit(string $id)
    {
        return response()->json([
            'data'  => Vehycle::with(['user'])->find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'brand' => 'required|max:30',
            'type' => 'required|max:30',
            'vehycle_number' => 'required|max:20',
            'chassis_number' => 'required|max:20',
            'image' => 'image|file|max:2048|mimes:jpeg,jpg,png,webp,svg',
        ];

        $vehycle = Vehycle::find($id);

        if($request->vehycle_number != $vehycle->vehycle_number){
            $rules['vehycle_number'] = 'required|unique:vehycles|max:20';
        }

        if($request->chassis_number != $vehycle->chassis_number){
            $rules['chassis_number'] = 'required|unique:vehycles|max:20';
        }

        $request->validate($rules);

        try {
            $file = '';
            $data = [
                'brand' => $request->brand,
                'type' => $request->type,
                'vehycle_number' => $request->vehycle_number,
                'chassis_number' => $request->chassis_number,
            ];
    
            if ($request->file('image')) {
                Storage::delete($request->old_image);
                $file = $request->file('image')->store('vehycle-images');
                $data += ['image' => $file];
            }
    
            Vehycle::find($id)->update($data);
    
            return response()->json([
                'status'    => true,
                'message'   => 'Berhasil mengubah data kendaraan!',
            ]);
            
        } catch (\Throwable $th) {
            return response()->json([
                'status'    => false,
                'message'   => 'Something went wrong!',
            ]);
        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Vehycle::find($id)->delete();

        return response()->json([
            'status'    => true,
            'message'   => 'Berhasil Menghapus Data Kendaraan!',
        ]);
    }

    public function datatable()
    {
        $data = Vehycle::orderBy('created_at', 'DESC')->get();

        return DataTables::of($data)->make();
    }

    function select2(Request $request){
        $query = $request->term['term'] ??'';
        $data = UserProfile::where('name', 'LIKE', "%$query%")->get();
        
        return response()->json($data);
    }
}
