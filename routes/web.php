<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/siswa', [SiswaController::class, 'tampil'])->name('siswa.tampil');
Route::get('/siswa/tambah', [SiswaController::class, 'tambah'])->name('siswa.tambah');
Route::post('/siswa/submit', [SiswaController::class, 'submit'])->name('siswa.submit');