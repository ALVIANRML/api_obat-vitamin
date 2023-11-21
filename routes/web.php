<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Penyakit\PenyakitController;
use App\Http\Controllers\Vitality\VitalityController;
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
Route::post('register',[AuthController::class, 'storeregister']);

//login
        Route::get('login', function () {
            return view('login,logout,register/login');
        });



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
    Route::get('maps', function () {
                return view('maps');
            });
    Route::get('/rumahsakit', function () {
                return view('menu/rumah_sakit');
    });

    //penyakit
    Route::get('/penyakit', function () {
        return view('menu/penyakit');
    });
    Route::get('/penyakit', [PenyakitController::class,'index']);

    //  Route::apiResource('penyakit', \App\Http\Controllers\Penyakit\PenyakitController::class);

    Route::get('/vitality', function () {
        return view('menu/pembelian');
    });
    Route::get('/vitality', [VitalityController::class,'index']);


//harus membawa token
Route::middleware(['auth:api'])->group(function () {

    Route::post('logout', [\app\Http\Controllers\Auth\AuthController::class, 'logout']);
});

Route::get('/umur', function () {
        return view('umur');
    });


