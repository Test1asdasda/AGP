<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/guias', function () {
    return view('guias');
})->middleware(['auth', 'verified'])->name('guias');
Route::get('/enfermagem ', function () {
    return view('enfermagem');
})->middleware(['auth', 'verified'])->name('enfermagem');
Route::get('/inforgest', function () {
    return view('inforgest');
})->middleware(['auth', 'verified'])->name('inforgest');
Route::get('/video', function () {
    return view('video');
})->middleware(['auth', 'verified'])->name('video');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
