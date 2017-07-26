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


    public function guardarCli(Request $datos)
    {
    	$cliente=new Cliente();
		$cliente->nombres=$datos->input('nombres');
		$cliente->apellidos=$datos->input('apellidos');
		$cliente->correo_electronico=$datos->input('correo_electronico');
		$cliente->contraseña=$datos->input('contraseña');
		$cliente->domicilio=$datos->input('domicilio');
		$cliente->estado=$datos->input('estado');
		$cliente->ciudad=$datos->input('ciudad');
		$cliente->telefono=$datos->input('telefono'); 
		$cliente->save();

		return redirect('/consultarClientes');   	
    }
	public function guardarAdmin(Request $datos)
    {
    	$administrador=new Administrador();
		$administrador->nombres=$datos->input('nombres');
		$administrador->apellidos=$datos->input('apellidos');
		$administrador->correo_electronico=$datos->input('correo_electronico');
		$administrador->contraseña=$datos->input('contraseña');
		$administrador->domicilio=$datos->input('domicilio');
		$administrador->estado=$datos->input('estado');
		$administrador->ciudad=$datos->input('ciudad');
		$administrador->telefono=$datos->input('telefono'); 
		$administrador->save();

		return redirect('/consultarAdministradores');   	
    }
    public function guardarCat(Request $datos)
    {
    	$categoria=new Categoria();
    	$categoria->descripcion=$datos->input('descripcion');
    	$categoria->save();

    	return redirect('/consultarCategorias');
    }

    public function guardarArt(Request $datos)
    {
        $articulo = new Articulo();
        $articulo->precio=$datos->input('precio');
        $articulo->descripcion=$datos->input('descripcion');
        $articulo->costo=$datos->input('costo');
        $articulo->id_categoria=$datos->input('categoria');
        $articulo->save();

        return redirect('/consultarArticulos');
    }

    public function consultarCli()
    {
    	$clientes=Cliente::all();

    	return view('consultarClientes', compact('clientes'));
    }
    public function consultarAdmin()
    {
    	$administradores=Administrador::all();

    	return view('consultarAdministradores',compact('administradores'));
    }
    public function consultarCat()
    {
    	$categorias=Categoria::all();

    	return view('consultarCategorias', compact('categorias'));
    }
    public function consultarArt()
    {
        $articulos=DB::table('articulo')
            ->join('categoria', 'articulos.id_categoria', '=', 'categoria.id')
            ->select('articulo.*','categoria.descripcion')
            ->get();

        return view('consultarArticulos', compact('articulo'));
    }

    public function eliminarCli($id)
    {
        $cliente=Cliente::find($id);
        $cliente->delete();

        return redirect('/consultarClientes');
    }

    public function eliminarAdmin($id)
    {
        $administrador=Administrador::find($id);
        $administrador->delete();

        return redirect('/consultarAdministradores');
    }

    public function eliminarCat($id)
    {
        $categoria=Categoria::find($id);
        $categoria->delete();

        return redirect('/consultarCategorias');
    }

}
