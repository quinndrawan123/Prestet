<?php

use App\Http\Controllers\KelasController;
use Illuminate\Support\Facades\Route;

Route::post('/update', [KelasController::class, 'update'])->name('update');

Route::get('/', [KelasController::class, 'index'])->name('home');
Route::get('/create', [KelasController::class, 'create'])->name('create');
Route::post('/store', [KelasController::class, 'store'])->name('store');
Route::get('/delete/{id}', [KelasController::class, 'destroy'])->name('delete');
Route::get('/edit/{id}', [KelasController::class, 'edit']);

// Only need one route for the save function (using PUT for update)

?>