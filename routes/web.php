<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParkController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VehycleController;
use App\Http\Controllers\AppConfigController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\PushNotificationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/send-notification', [PushNotificationController::class, 'sendPushNotification']);

Route::get('/sign-in', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/sign-in', [LoginController::class, 'auth'])->name('login-proccess')->middleware('guest');


Route::get('/password/reset', function (){
    return view('contents.password.reset');
});

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', [ForgotPasswordController::class, 'forgotPassword'])->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function (string $token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', [ForgotPasswordController::class , 'resetPassword'])->middleware('guest')->name('password.update');

Route::middleware('auth')->group(function () {
    Route::get('/sign-out', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
    Route::resource('/dashboard', DashboardController::class);

    Route::get('/',[DashboardController::class , 'index'])->name('dashboard');
    
    Route::put('/profile/{id?}/update-image', [ProfileController::class, 'updateImage'])->name('profile-image.update');
    Route::put('/profile/{id?}/change-password', [ProfileController::class, 'updatePassword'])->name('profile-password.change');
    Route::delete('/profile/{id?}/delete-image', [ProfileController::class, 'destroyImage'])->name('profile-image.delete');
    Route::resource('/profile', ProfileController::class);
    
});

Route::group(['middleware' => ['role:admin']], function () {
    
    Route::get('/data-parkir', [ParkController::class, 'index'])->name('park.index');
    Route::get('data-parkir/datatable', [ParkController::class, 'datatable'])->name('park.datatable');
    Route::get('data-parkir/{id?}', [ParkController::class, 'show'])->name('park.show');
    Route::get('data-parkir/detail/{id?}', [ParkController::class, 'detailDatatable'])->name('detail.datatable');
    Route::post('app-config/store', [AppConfigController::class, 'store'])->name('app-config.store');


    Route::post('kendaraan/{id?}/update', [VehycleController::class, 'update'])->name('kendaraan-update.update');
    Route::post('kendaraan/store', [VehycleController::class, 'store'])->name('kendaraan-store.store');
    Route::get('kendaraan/datatable', [VehycleController::class, 'datatable'])->name('kendaraan.datatable');
    Route::get('kendaraan/select2', [VehycleController::class, 'select2'])->name('kendaraan.select2');
    Route::resource('/kendaraan', VehycleController::class);
    
});

Route::group(['middleware' => ['role:mahasiswa|pegawai']], function () {
    Route::get('/riwayat-parkir', [ParkController::class, 'parkHistory'])->name('park-history.index');
    Route::get('riwayat-parkir/datatable', [ParkController::class, 'parkHistoryDatatable'])->name('park-history.datatable');
    
});

Route::group(['middleware' => ['role:superAdmin']], function () {
    Route::get('admin/datatable', [AdminController::class, 'datatable'])->name('admin.datatable');
    Route::resource('/admin', AdminController::class);
});

Route::group(['middleware' => ['role:superAdmin|admin']], function () {
    Route::get('pegawai/datatable', [PegawaiController::class, 'datatable'])->name('pegawai.datatable');
    Route::resource('/pegawai', PegawaiController::class);

    Route::get('mahasiswa/datatable', [MahasiswaController::class, 'datatable'])->name('mahasiswa.datatable');
    Route::resource('/mahasiswa', MahasiswaController::class);
    
});