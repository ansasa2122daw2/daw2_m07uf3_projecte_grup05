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

Route::get('/', function () {
    return view('login');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/autentica','ControladorLogin@autentica')->name('autenticacio');

Route::resource('clients', ControladorClients::class);
Route::resource('autos', ControladorAutos::class);
Route::resource('lloguers', ControladorLloguers::class);
Route::resource('usuaris', ControladorUsuaris::class);

