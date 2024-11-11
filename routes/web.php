<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return redirect()->route('beranda');
});

Route::view('/beranda', 'beranda')->name('beranda');
Route::view('/tentang', 'tentang')->name('tentang');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/penjemputan', function () {
//     return view('penjemputan');
// })->middleware(['auth', 'verified'])->name('penjemputan');

// Route::get('/penjemputan', [OrderController::class, 'create'])->name('penjemputan');
// Route::post('/penjemputan', [OrderController::class, 'store'])->name('penjemputan.store');

Route::get('/hadiah', function () {
    return view('hadiah');
})->middleware(['auth', 'verified'])->name('hadiah');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/penjemputan', [OrderController::class, 'create'])->name('penjemputan');
    Route::post('/penjemputan', [OrderController::class, 'store'])->name('penjemputan.store');
});

require __DIR__.'/auth.php';
