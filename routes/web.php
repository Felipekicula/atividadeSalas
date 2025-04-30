<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;

Route::get('/', [ReservaController::class, 'index'])->name('reservas.index');
Route::get('/create', [ReservaController::class, 'create'])->name('reservas.create');
Route::post('/', [ReservaController::class, 'store'])->name('reservas.store');
