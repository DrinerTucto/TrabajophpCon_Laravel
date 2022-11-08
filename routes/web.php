<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecurController;
use Illuminate\Routing\ResourceRegistrar;

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
    return view('principal');
});

Route::get('/reservacion', function () {
    return view('reservacion.index');

});

route::get('/reservacion/reserva',[RecurController::class,'create']);
route::resource('reservacion',RecurController::class);