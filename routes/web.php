<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PamongController;
use App\Http\Controllers\KelasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('siswa', [SiswaController::class, 'index']);

Route::get('pamong', [PamongController::class, 'index']);

Route::get('kelas', [KelasController::class, 'index']);
