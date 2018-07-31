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


NUMERO DE INTERACCIONES POR EXPOSICION
INTERACCIONES POR HORA
... POR DIA



*/

Route::get('/', function () {
    return view('login');
})->name('home');

Route::get('/login','SessionsController@index')->name('login');
Route::post('/login','UserController@login');

Route::get('/registro','RegistrationController@index')->name('registro');
Route::post('/registro','RegistrationController@store');

Route::get('/prueba','RegistrationController@prueba');

Route::get('/reportes/global', 'ReportesController@global')->name('global');
Route::get('/reportes/encuesta', 'ReportesController@encuesta')->name('encuesta');
Route::get('/reportes/tiempo', 'ReportesController@tiempo')->name('tiempo');
Route::get('/reportes/interaccion/{id}', 'ReportesController@interaccion')->name('interaccion');


