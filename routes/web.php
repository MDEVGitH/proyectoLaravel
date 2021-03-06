<?php

use App\Http\Controllers\EmpEmpleadoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/empleado', [EmpEmpleadoController::class, 'index']);
Route::get('/empleado/crear', function () {
    return view('index');
});
Route::get('/empleado/registrar', function () {
    return view('registrar');
});
Route::get('/empleado/crear/done', [EmpEmpleadoController::class, 'store']);
