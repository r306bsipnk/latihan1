<?php

use App\Http\Controllers\KamarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('/kamar')->group(function(){
    Route::get('/', [KamarController::class, 'all']);
    Route::post('/', [KamarController::class, 'store']);
    Route::delete('/', [KamarController::class, 'delete']);
});