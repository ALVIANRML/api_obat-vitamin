<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Obatvitamin\ObatvitaminController;
use App\Http\Controllers\Penyakit\PenyakitController;


use App\Models\penyakit;
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
//register
Route::get('register', function () {
            return view('login,logout,register/register');
        });
Route::post('register',[AuthController::class, 'storeregister'])->middleware('guest');

//login
Route::get('login', function () {
    return view('login,logout,register/login');
})->name('login')->middleware('guest');
Route::post('login',[AuthController::class, 'authenticate'])->middleware('guest');
Route::post('logout', [AuthController::class, 'logout']);




Route::get('/', function () {
    return view('home');
});


Route::get('/menu', function () {
        return view('menu');
    });

    // obatvitamin
    Route::get('/obatvitamin', function () {
        return view('menu/obatvitamin');
    });
    Route::apiResource('obatvitamin', \App\Http\Controllers\Obatvitamin\ObatvitaminController::class);

    //rumah sakit
    // Route::get('maps', function () {
    //             return view('maps');
    //         });
    Route::get('/rumahsakit', function () {
                return view('menu/rumah_sakit');
    });
    Route::apiResource('rumahsakit', \App\Http\Controllers\Rumahsakit\RumahsakitController::class);

    //penyakit
    Route::get('/penyakit', function () {
        return view('menu/penyakit');
    });
    Route::get('/penyakit', [PenyakitController::class,'index']);

    //  Route::apiResource('penyakit', \App\Http\Controllers\Penyakit\PenyakitController::class);

    //pembelian
    Route::get('/vitality', function () {
        return view('menu/pembelian');
    });
    Route::get('/vitality', [ObatvitaminController::class,'harga'])->middleware('auth');
    // Route::get('/vitality-keranjang', [ObatvitaminController::class,'keranjang'])->middleware('auth');




