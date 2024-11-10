<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('beranda');
});

Route::view('/beranda', 'beranda')->name('beranda');
Route::view('/tentang', 'tentang')->name('tentang');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/penjemputan', function () {
    return view('penjemputan');
})->middleware(['auth', 'verified'])->name('penjemputan');

Route::get('/hadiah', function () {
    return view('hadiah');
})->middleware(['auth', 'verified'])->name('hadiah');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
