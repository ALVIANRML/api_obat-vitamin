<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('maps', function () {
            return view('maps');
        });
Route::post('register',[\app\Http\Controllers\Auth\AuthController::class, 'register']);
Route::post('login', [\app\Http\Controllers\Auth\AuthController::class, 'login']);
// Route::apiResource('umur', \App\Http\Controllers\Umur\UmurController::class);
Route::apiResource('gejala', \App\Http\Controllers\Gejala\GejalaController::class);
Route::apiResource('penyakit', \App\Http\Controllers\Penyakit\PenyakitController::class);
Route::apiResource('obatvitamin', \App\Http\Controllers\Obatvitamin\ObatvitaminController::class);

Route::middleware(['auth:api'])->group(function () {

    Route::post('logout', [\app\Http\Controllers\Auth\AuthController::class, 'logout']);
});


// Route::get('obat_dan_vitamin', function () {
//         return view('vitamin_obat');
// });
