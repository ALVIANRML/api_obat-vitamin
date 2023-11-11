<?php

use App\Models\obatvitamin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Gejala\GejalaController;
use App\Http\Controllers\Obatvitamin\Dosis_obatController;
use App\Http\Controllers\Obatvitamin\ObatvitaminController;
use App\Http\Controllers\Vitality\VitalityController;

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


Route::apiResource('umur', \App\Http\Controllers\Umur\UmurController::class);
Route::apiResource('gejala', \App\Http\Controllers\Gejala\GejalaController::class);
Route::apiResource('penyakit', \App\Http\Controllers\Penyakit\PenyakitController::class);
Route::apiResource('obatvitamin', \App\Http\Controllers\Obatvitamin\ObatvitaminController::class);
Route::get('bronkritis',[VitalityController::class,'bronkritis']);



// Route::middleware(['auth:api'])->group(function()
// {


