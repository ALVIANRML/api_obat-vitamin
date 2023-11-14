<?php

use App\Http\Controllers\Auth\AuthController;
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

Route::get('register', function () {
            return view('login,logout,register/register');
        });

        Route::get('login', function () {
            return view('login,logout,register/login');
        });


Route::post('register',[AuthController::class, 'storeregister']);
Route::post('login', [AuthController::class, 'authenticate']);
Route::apiResource('gejala', \App\Http\Controllers\Gejala\GejalaController::class);
Route::apiResource('penyakit', \App\Http\Controllers\Penyakit\PenyakitController::class);
Route::apiResource('obatvitamin', \App\Http\Controllers\Obatvitamin\ObatvitaminController::class);

Route::middleware(['auth:api'])->group(function () {

    Route::post('logout', [\app\Http\Controllers\Auth\AuthController::class, 'logout']);
});


// Route::get('obat_dan_vitamin', function () {
//         return view('vitamin_obat');
// });
