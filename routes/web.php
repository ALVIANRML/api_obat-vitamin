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


Route::apiResource('obat_dan_vitamin', App\Http\Controllers\Obatvitamin\ObatvitaminController::class);


// Route::get('obat_dan_vitamin', function () {
//         return view('vitamin_obat');
// });
