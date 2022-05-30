<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\penerimaController;
use App\Http\Controllers\pengirimController;
use App\Http\Controllers\pengirimanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Barang
Route::post('/barang', [ApiController::class, 'create']);
Route::get('/barangs', [ApiController::class, 'show']);
Route::put('/update/{id}', [ApiController::class, 'update']);
Route::delete('/delete/{id}', [ApiController::class, 'delete']);

// Penerima
Route::post('/penerima', [penerimaController::class, 'create']);
Route::get('/penerimas', [penerimaController::class, 'show']);
Route::put('/penerima/update/{id}', [penerimaController::class, 'update']);
Route::delete('/penerima/delete/{id}', [penerimaController::class, 'delete']);

// Pengirim
Route::post('/pengirim', [pengirimController::class, 'create']);
Route::get('/pengirims', [pengirimControlle::class, 'show']);
Route::put('/pengirim/update/{id}', [pengirimControlle::class, 'update']);
Route::delete('/pengirim/delete/{id}', [pengirimControlle::class, 'delete']);
