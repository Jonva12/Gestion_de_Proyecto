<?php

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
})->name('inicio');
Route::get('/empleados', 'empleadosController@index')->name('empleados');
Route::get('/empleado/{id}', 'empleadosController@show')->name('empleado');
Route::resource('proyecto', 'proyectoController');

Route::resource('empleado', 'empleadosController');