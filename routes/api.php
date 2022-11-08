<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PulseraController;
use App\Http\Controllers\OrdenController;

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

Route::get('productos', [ProductoController::class, 'index']);
Route::get('productos/{producto}', [ProductoController::class, 'show']);
Route::post('productos', [ProductoController::class, 'store']);
Route::put('productos/{producto}', [ProductoController::class, 'update']);
Route::delete('productos/{producto}', [ProductoController::class, 'delete']);


Route::get('pulseras', [PulseraController::class, 'index']);
Route::get('pulseras/{pulsera}', [PulseraController::class, 'show']);
Route::post('pulseras', [PulseraController::class, 'store']);
Route::put('pulseras/{pulsera}', [PulseraController::class, 'update']);
Route::delete('pulseras/{pulsera}', [PulseraController::class, 'delete']);


Route::get('ordenes', [OrdenController::class, 'index']);
Route::get('ordenes/{orden}', [OrdenController::class, 'show']);
Route::post('ordenes', [OrdenController::class, 'store']);
Route::put('ordenes/{orden}', [OrdenController::class, 'update']);
Route::delete('ordenes/{orden}', [OrdenController::class, 'delete']);