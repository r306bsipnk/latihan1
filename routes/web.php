<?php

use App\Http\Controllers\KamarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
