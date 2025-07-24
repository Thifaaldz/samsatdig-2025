<?php


use App\Http\Controllers\PendaftaranSimController;
use App\Livewire\HomePage;
use App\Livewire\PendaftaranSimForm;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use Illuminate\Support\Facades\Response;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/

Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', HomePage::class)->name('home');
Route::view('/pendaftaran-sim', 'pages.pendaftaran')->name('pendaftaran.sim');

Route::get('/pendaftaran/{id}/cetak', [PendaftaranSimController::class, 'cetak'])->name('pendaftaran.cetak');


Route::get('/cek-nilai', function () {
    return view('cek-nilai');
})->name('cek.nilai');