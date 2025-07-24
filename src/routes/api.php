<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SamsatController;
use App\Http\Controllers\PendaftaranSimController;
use App\Http\Controllers\PenilaianUjianSimController;
use App\Http\Controllers\SimMateriController;

Route::middleware('apikey')->group(function () {
    Route::apiResource('samsats', SamsatController::class);
    Route::post('/pendaftaran-sim', [PendaftaranSimController::class, 'store']);
    Route::get('/pendaftaran-sim/cetak/{id}', [PendaftaranSimController::class, 'cetak']);
    Route::middleware('apikey')->apiResource('materi', SimMateriController::class);
    Route::apiResource('penilaian-ujian-sims', PenilaianUjianSimController::class);
});
