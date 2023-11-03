<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Obatvitamin\Dosis_obatController;
use App\Http\Controllers\Obatvitamin\ObatvitaminController;

use App\Models\obatvitamin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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

Route::get('confirm-obat', [Dosis_obatController::class,'ConfirmObat']);
Route::apiResource('umur', App\Http\Controllers\Umur\UmurController::class);



// Route::middleware(['auth:api'])->group(function()
// {

    Route::apiResource('obat_dan_vitamin', App\Http\Controllers\Obatvitamin\ObatvitaminController::class);
    // Route::get('obat_dan_vitamin', [ObatvitaminController::class, 'umur']);
    Route::apiResource('umur', App\Http\Controllers\Umur\UmurController::class);
// });
