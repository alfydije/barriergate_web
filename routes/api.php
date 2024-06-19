<?php

use App\Http\Controllers\api\HistoryParkController;
use App\Http\Controllers\api\VehycleListController;
use App\Http\Controllers\api\ApiLoginController;
use App\Http\Controllers\api\ParkController;
use App\Http\Controllers\api\UserProfilController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('login', [ApiLoginController::class, 'login']);

Route::middleware(['auth:sanctum','verify_token','role:mahasiswa|pegawai'])->group(function () {
    
    Route::post('logout', [ApiLoginController::class, 'logout']);
    Route::put('update-password/{id}', [UserProfilController::class, 'UpdatePassword']);
    Route::get('riwayat-parkir/datatable', [HistoryParkController::class, 'parkHistoryDatatable']);
    Route::get('riwayat-parkir', [HistoryParkController::class, 'parkHistory']);
    Route::delete('riwayat-parkir/{id}', [HistoryParkController::class, 'delete']);
    Route::get('data-kendaraan', [VehycleListController::class, 'VehycleList']);
    Route::delete('kendaraan/{id}/delete', [VehycleListController::class, 'DeleteVehicles']);
    Route::get('user-profile/{id}', [UserProfilController::class, 'userProfilList']);
    Route::put('edit-profile/{id}', [UserProfilController::class, 'userProfilEdit']);
    
    // Rute untuk menampilkan data kendaraan yang ingin diedit
    // Route::get('/kendaraan/{id}', [VehycleListController::class, 'editVehycle']);

    // Rute untuk memperbarui data kendaraan
    Route::put('kendaraan/{id}/update', [VehycleListController::class, 'updateVehycle']);
});



Route::post('/park/{id?}/in', [ParkController::class, 'in']);
Route::get('/park/{id?}/out', [ParkController::class, 'out']);
// Route::post('/sgin-in', [AuthController::class, 'login']);
// Route::apiResource('/park', ParkController::class);
