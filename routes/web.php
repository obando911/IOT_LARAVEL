<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


use App\Http\Controllers\{
ContactController,
StastionController,
SensorController
};
use App\Http\Controllers\DataApiController;

Route::get('/', [DashboardController::class, 'index'])->name('home'); // o 'dashboard'
Route::resource('stations', StastionController::class)->only(['index','create','store']);
Route::resource('sensors', SensorController::class)->only(['index','create','store']);
Route::get('/telemetry', [DataApiController::class,'series'])->name('api.telemetry');
