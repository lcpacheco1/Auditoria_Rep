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
});

//Route::get('/Usuarios', 'UsuariosController@index');
//Route::get('/Usuarios/create', 'UsuariosController@create');

Route::resource('Usuarios', 'UsuariosController');

//--------------------------------------------------//
Auth::routes();

Route::get('/log-viewer', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/log-viewer', 'HomeController@index')->name('home');
