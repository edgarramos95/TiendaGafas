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

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/', function () {
    return view('registrarCliente');
});

Route::get('/registroCliente','proyectoController@registroCli');
Route::get('/registroAdministrador','proyectoController@registroAdmin');
Route::get('/registroCategoria','proyectoController@registroCat');
Route::get('/registroArticulo','proyectoController@registroArt');
//Route::get('/registroImagen','proyectoController@registroIma');

Route::post('/guardarCliente','proyectoController@guardarCli');
Route::post('/guardarAdministrador','proyectoController@guardarAdmin');
Route::post('/guardarCategoria','proyectoController@guardarCat');


Route::get('/consultarClientes','proyectoController@consultarCli');
Route::get('/consultarAdministradores','proyectoController@consultarAdmin');
Route::get('/consultarCategorias','proyectoController@consultarCat');
