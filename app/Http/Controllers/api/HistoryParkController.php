<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Park;
use App\Models\Vehycle;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryParkController extends Controller
{
    public function parkHistory(Request $request)
    {
        // Mendapatkan ID pengguna yang sedang login
        $user = $request->user();

        // Mengambil data kendaraan milik pengguna yang sedang login
        $vehycles = $user->vehycle()->pluck('id'); // Mendapatkan ID kendaraan

        // Mengambil riwayat parkir berdasarkan vehicle_id dari kendaraan pengguna
        $parkings = Park::whereIn('vehycle_id', $vehycles)->orderBy('time_in', 'DESC')->get();

        if ($vehycles->isEmpty()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Tidak ada kendaraan terdaftar untuk pengguna'
            ], 404);
        }

        // Memeriksa apakah ada data riwayat parkir
        if ($parkings->isEmpty()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Belum ada riwayat parkir'
            ], 404);
        }

        // Memformat data untuk hanya termasuk time_in, time_out, date, dan name
        $formattedParkings = $parkings->map(function ($parking) {
            return [
                'date' => $parking->date, // Menggunakan accessor getDateAttribute() dari model
                'time_in' => $parking->time_in,
                'time_out' => $parking->time_out,
                'name' => $parking->name, // Menggunakan accessor getNameAttribute() dari model
            ];
        });

        // Mengembalikan data yang telah diformat sebagai respons JSON
        return response()->json([
            'status' => 'success',
            'data' => $formattedParkings
        ]);
    }

    public function delete(Request $request, $id)
    {
        $parking = Park::find($id);

        if (!$parking) {
            return response()->json([
                'status' => 'error',
                'message' => 'Riwayat parkir tidak ditemukan'
            ], 404);
        }

        $parking->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Riwayat parkir berhasil dihapus'
        ]);
    }
}
