<?php

use App\Http\Controllers\TransportesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TransportesController::class, 'index'])->name('transportes.index');

Route::get('/create', [TransportesController::class, 'create'])->name('transportes.create');

Route::post('/store', [TransportesController::class, 'store'])->name('transportes.store');

Route::get('/edit/{id}', [TransportesController::class, 'edit'])->name('transportes.edit');

Route::put('/update/{id}', [TransportesController::class, 'update'])->name('transportes.update');

Route::get('/show/{id}', [TransportesController::class, 'show'])->name('transportes.show');

Route::delete('/destroy/{id}', [TransportesController::class, 'destroy'])->name('transportes.destroy');
