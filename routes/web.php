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
//rutas empleados
Route::get('/empleados', 'empleadosController@index')->name('empleados');
Route::get('/empleado/{id}', 'empleadosController@show')->name('empleado');
//rutas proyectos
Route::get('/proyectos', 'proyectoController@index')->name('proyectos');
route::get('/proyecto/create', 'proyectoController@create')->name('proyecto.create');
route::post('/proyecto/store', 'proyectoController@store')->name('proyecto.store');
Route::get('/proyecto/{id}', 'proyectoController@show')->name('proyecto');
//rutas departamentos
Route::get('/departamentos', 'departamentosController@index')->name('departamentos');
Route::get('/departamento/{id}', 'departamentosController@show')->name('departamento');
//rutas resources
Route::resource('proyecto', 'proyectoController');
Route::resource('empleado', 'empleadosController');