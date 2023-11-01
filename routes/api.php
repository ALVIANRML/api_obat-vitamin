<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Obatvitamin\ObatvitaminController;
use App\Models\obatvitamin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('register', [AuthController::class,'register']);
Route::apiResource('obat_dan_vitamin', App\Http\Controllers\Obatvitamin\ObatvitaminController::class);
Route::post('login', [AuthController::class,'login']);



Route::middleware(['auth:api'])->group(function()
{
    Route::post('logout', [AuthController::class, 'logout']);
});
