<?php

use App\Http\Controllers\TermController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TermController::class, 'index'])->name('index');
Route::post('/', [TermController::class, 'store'])->name('store');
Route::delete('/{term}', [TermController::class, 'destroy'])->name('destroy');
