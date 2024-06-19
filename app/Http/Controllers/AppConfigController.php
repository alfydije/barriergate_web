<?php

namespace App\Http\Controllers;

use App\Models\AppConfig;
use Illuminate\Http\Request;

class AppConfigController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'maximum_capacity' => 'required|numeric'
        ]);

        try {
            $appConfig = AppConfig::first();
            AppConfig::updateorCreate(
                ['id'   => optional($appConfig)->id ?? null],
                [
                    'maximum_capacity' => $request->maximum_capacity,
                ]
            );

            return redirect()->back()->with('success', 'Kapasitas parkiran berhasil diperbarui!');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Ada sesuatu yang salah!');
        }

    }
}
