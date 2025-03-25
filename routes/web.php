<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('helloworld', [HelloWorldController::class, 'index']);
Route::get('ambilFile', [HelloWorldController::class, 'ambilFile']);
Route::get('getlorem', [HelloWorldController::class, 'getlorem']);