<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('/update/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::delete('/destroy/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');