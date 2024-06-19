<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Vehycle;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class VehycleListController extends Controller
{
    // Fungsi untuk menampilkan daftar kendaraan
        public function VehycleList(Request $request)
    {
        // Ambil pengguna yang sedang aktif
        $user = $request->user();

        // Pastikan pengguna memiliki daftar kendaraan
        if ($user->vehycle()->exists()) {
            // Ambil daftar kendaraan pengguna
            $vehicles = $user->vehycle()->get();

            // Format data kendaraan sesuai kebutuhan Anda
            $formattedVehicles = $vehicles->map(function ($vehicle) {
                return [
                    'brand' => $vehicle->brand,
                    'image' => $vehicle->image,
                    'type' => $vehicle->type,
                    'vehicle_number' => $vehicle->vehycle_number,
                ];
            });

            // Kirim respons dengan data kendaraan
            return response()->json([
                'status' => 'success',
                'data' => $formattedVehicles
            ]);
        } else {
            // Jika pengguna tidak memiliki kendaraan, kirim pesan error
            return response()->json([
                'status' => 'error',
                'message' => 'Belum ada kendaraan terdaftar untuk pengguna ini'
            ], 404);
        }
    }


    public function editVehycle(Request $request, string $id)
    {
        $user = $request->user();
        try {
            $vehicle = $user->vehicles()->findOrFail($id);
            
            return response()->json([
                'status' => true,
                'data' => $vehicle,
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Terjadi kesalahan saat mengambil data kendaraan!',
                'error' => $e->getMessage(),
            ]);
        }
    }

    // Fungsi untuk menghapus kendaraan
    public function DeleteVehicles(Request $request, $id)
    {
        $user = $request->user();
        
        // Temukan kendaraan yang akan dihapus, pastikan milik pengguna saat ini
        $vehicle = $user->vehicles()->find($id);

        if (!$vehicle) {
            return response()->json([
                'status' => 'error',
                'message' => 'Kendaraan tidak ditemukan atau tidak dimiliki oleh pengguna saat ini'
            ], 404);
        }

        $vehicle->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Kendaraan berhasil dihapus'
        ]);
    }
}
