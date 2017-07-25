<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

use App\Http\Controllers\Controller;

class proyectoController extends Controller
{
    public function registroCli()
    {
    	$clientes=Cliente::all();

    	return view('registroCliente');
    }
}
