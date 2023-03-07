<?php

use App\Http\Controllers\ModuloAlumno;
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

// Route::get('/', function () {
//     return view('inicio');
// });

Route::get('/modulos', function () {
    return view('inicio');
});

Route::controller(ModuloAlumno::class)->group(function () {

    Route::get('/', 'listarModulos')->name('inicio');
    Route::get('/modulos/{id}/alumnos', 'listarModuloAlumnos')->name('listarModuloAlumnos');
    Route::get('guardarAlumno/{idModulo}', 'guardarAlumno')->name('guardarAlumno');
    Route::get('eliminarAlumno/{id}', 'eliminarAlumno')->name('eliminarAlumno');
});
