<?php

use App\Http\Controllers\PenggunaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'pengguna'], function () {
    Route::post('login', [PenggunaController::class, 'login']);
    Route::get('/', [PenggunaController::class, 'data']);


});
