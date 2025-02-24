<?php

use App\Http\Controllers\Api\DictionaryController;
use App\Http\Controllers\Api\FolderController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\TermController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('profiles', ProfileController::class);
Route::apiResource('folders', FolderController::class);
Route::apiResource('dictionaries', DictionaryController::class);
Route::apiResource('terms', TermController::class);

