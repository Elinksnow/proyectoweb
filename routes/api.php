<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CentroDistribucionController;
use App\Http\Controllers\DetalleEgresoController;
use App\Http\Controllers\DetalleIngresoController;
use App\Http\Controllers\DetalleTraspasoController;
use App\Http\Controllers\EgresoController;
use App\Http\Controllers\FarmaciaController;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\StockCdController;
use App\Http\Controllers\TraspasoController;

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

Route::resource('centro_distribucion',CentroDistribucionController::class);
Route::resource('farmacia',FarmaciaController::class);
Route::resource('medicamento',MedicamentoController::class);
Route::resource('detalle_egresos',DetalleEgresoController::class);
Route::resource('detalle_ingresos',DetalleIngresoController::class);
Route::resource('detalle_traspasos',DetalleTraspasoController::class);
Route::resource('egreso',EgresoController::class);
Route::resource('ingreso',IngresoController::class);
Route::resource('stockcd',StockCdController::class);
Route::resource('traspaso',TraspasoController::class);
