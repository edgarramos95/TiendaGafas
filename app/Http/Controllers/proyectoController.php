<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Administrador;
use App\Categoria;
use App\Articulo;
use App\Imagen;

use App\Http\Controllers\Controller;

class proyectoController extends Controller
{
    public function registroCli()
    {
    	$clientes=Cliente::all();

    	return view('registroCliente');
    }
    public function registroAdmin()
    {
    	$administradores=Administrador::all();

    	return view('registroAdministrador');
    }
    public function registroCat()
    {
    	$categorias=Categoria::all();

    	return view('registroCategoria');
    }
    public function registroArt()
    {
    	$categorias=Categoria::all();

    	return view('registroArticulo',compact('categorias'));	
    }

}
