<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\PreguntasController;
use App\Http\Controllers\Reportes_GrupalesController;
use App\Http\Controllers\Reportes_PersonalesController;
use App\Http\Controllers\RespuestasController;
use App\Http\Controllers\UsuariosController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource ('tabla',EmpresasController::class);
Route::resource ('tabla',PreguntasController::class);
Route::resource ('tabla',Reportes_GrupalesController::class);
Route::resource ('tabla',Reportes_PersonalesController::class);
Route::resource ('tabla',RespuestasController::class);
Route::resource ('tabla',UsuariosController::class);

