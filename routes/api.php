<?php

use App\Http\Controllers\CityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/city', [CityController::class, 'index']);
Route::post('/city', [CityController::class, 'create']);
Route::delete('/city', [CityController::class, 'delete']);
