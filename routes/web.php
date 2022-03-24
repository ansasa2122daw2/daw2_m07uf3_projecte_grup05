<?php

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

Route::get('/crearclients', function () {
    return view('crearclients');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/', function () {
    return view('login');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/actualitza', function () {
    return view('actualitza');
});

Route::resource('clients', ControladorClients::class);
Route::get('/autentica','ControladorLogin@autentica')->name('autenticacio');

Route::get('/crearautos', function () {
    return view('crearautos');
});

Route::get('/indexauto', function () {
    return view('indexauto');
});

Route::resource('autos', ControladorAutos::class);

Route::get('/crearlloguer', function () {
    return view('crearlloguer');
});

Route::get('/indexlloguer', function () {
    return view('indexlloguer');
});

Route::resource('lloguers', ControladorLloguers::class);

Route::get('/crearusuaris', function () {
    return view('crearusuaris');
});

Route::get('/indexusuaris', function () {
    return view('indexusuaris');
});

Route::resource('usuaris', ControladorUsuaris::class);

