<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\mahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/', function () {
    return view('welcome');
});
Route::resource('mahasiswa', MahasiswaController::class);
Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
 