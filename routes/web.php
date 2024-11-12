<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinsiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/provinsi', [ProvinsiController::class, 'index'])->name('provinsi');