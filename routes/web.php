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
    return view('inicio');
});

Route::get('/registroCliente','proyectoController@registroCli');
Route::get('/registroAdministrador','proyectoController@registroAdmin');
Route::get('/registroCategoria','proyectoController@registroCat');
Route::get('/registroArticulo','proyectoController@registroArt');
//Route::get('/registroImagen','proyectoController@registroIma');

Route::post('/guardarCliente','proyectoController@guardarCli');
Route::post('/guardarAdministrador','proyectoController@guardarAdmin');
Route::post('/guardarCategoria','proyectoController@guardarCat');
Route::post('/guardarArticulo','proyectoController@guardarArt');


Route::get('/consultarClientes','proyectoController@consultarCli');
Route::get('/consultarAdministradores','proyectoController@consultarAdmin');
Route::get('/consultarCategorias','proyectoController@consultarCat');
Route::get('/consultarArticulos','proyectoController@consultarArt');


Route::get('/eliminarCliente/{id}','proyectoController@eliminarCli');
Route::get('/eliminarAdministrador/{id}','proyectoController@eliminarAdmin');
Route::get('/eliminarCategoria/{id}','proyectoController@eliminarCat');
Route::get('/eliminarArticulo/{id}','proyectoController@eliminarArt');


Route::get('/editarCliente/{id}','proyectoController@editarCli');
Route::get('/editarAdministrador/{id}','proyectoController@editarAdmin');
Route::get('/editarCategoria/{id}','proyectoController@editarCat');
Route::get('/editarArticulo{id}','proyectoController@editarArt');


Route::post('/actualizarCliente/{id}','proyectoController@actualizarCli');
Route::post('/actualizarAdministrador/{id}','proyectoController@actualizarAdmin');
Route::post('/actualizarCategoria/{id}','proyectoController@actualizarCat');
Route::post('/actualizarArticulo/{id}','proyectoController@actualizarArt');


Route::get('/gafasMujeres','proyectoController@gafasMujeres');
Route::get('/gafasHombres','proyectoController@gafasHombres');
Route::get('/inicio','proyectoController@inicio');
Route::get('/registrarCliente','proyectoController@registrarCliente');
Route::get('/iniciar_seccion','proyectoController@iniciar_seccion');
Route::get('/revisarCompras','proyectoController@revisarCompras');
Route::get('/admin','proyectoController@admin');
Route::get('/misionVision','proyectoController@misionVision');
Route::get('/enviarMensaje','proyectoController@enviarMensaje');
Route::get('/condicionesServicio','proyectoController@condicionesServicio');
Route::get('/politicasDevolucion','proyectoController@politicasDevolucion');
//Route::get('/verArticulo','proyectoController@verArticulo');
Route::get('/login','proyectoController@login');
Route::get('/master_admin','proyectoController@master_admin');

Route::post('/guardarClientes','proyectoController@guardarClientes');


Route::get('/{correo}/{nombres}','proyectoController@enviarCorreo');

