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

    public function eliminarArt($id)
    {
        $articulo=Articulo::find($id);
        $articulo->delete();

        return redirect('/consultarArticulos');
    }
    public function editarCli($id)
    {
        $cliente=Cliente::find($id);

        return view('editarCliente',compact('cliente'));
    }
    public function editarAdmin($id)
    {
        $administrador=Administrador::find($id);

        return view('editarAdministrador',compact('administrador'));
    }
    public function editarCat($id)
    {
        $categoria=Categoria::find($id);

        return view('editarCategoria',compact('categoria'));
    }
    public function editarArt($id)
    {
        $articulo=DB::table('articulo')
            ->where('articulo.id', '=', $id)
            ->join('categoria','categoria.id','=','articulo.id_categoria')
            ->select('categoria.*','categoria.descripcion')
            ->first();
        $categorias=Categoria::all();

        return view('editarArticulo',compact('articulo','categoria'));
    }
    public function actualizarCli($id, Request $datos)
    {
        $cliente = Cliente::find($id);
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
    public function actualizarAdmin($id, Request $datos)
    {
        $administrador = Administrador::find($id);
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
    public function actualizarCat($id, Request $datos)
    {
        $categoria = Categoria::find($id);
        $categoria->descripcion=$datos->input('descripcion');
        $categoria->save();
        return redirect('/consultarCategorias');
    }
    public function actualizarArt($id, Request $datos)
    {
        $articulo = Articulo::find($id);
        $articulo->precio=$datos->input('precio');
        $articulo->descripcion=$datos->input('descripcion');
        $articulo->costo=$datos->input('costo');
        $articulo->id_categoria=$datos->input('categoria');
        $articulo->save();
        return redirect('/consultarArticulos');
    }
    public function gafasMujeres()
    {
        return view('/gafasMujeres');
    }
    public function gafasHombres()
    {
        return view('/gafasHombres');
    }
    public function inicio()
    {
        return view('/inicio');
    }
    public function registrarCliente()
    {
        return view('/registrarCliente');
    }
    public function iniciar_seccion()
    {
        return view('/iniciar_seccion');
    }
    public function revisarCompras()
    {
        return view('/revisarCompras');
    }
    public function misionVision()
    {
        return view('/misionVision');
    }
    public function admin()
    {
        return view('/admin');
    }
    public function enviarMensaje()
    {
        return view('/enviarMensaje');
    }
    public function verArticulo()
    {
        return view('/verArticulo');
    }
    public function condicionesServicio()
    {
        return view('/condicionesServicio');
    }
    public function politicasDevolucion()
    {
        return view('/politicasDevolucion');
    }
    public function login()
    {
        return view('/login');
    }
    public function master_admin()
    {
        return view('/admin');
    }
    public function guardarClientes(Request $datos)
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

		return redirect('/inicio');   	
    }

    public function enviarCorreo($correo_electronico, $nombres)
    {

    	$cliente=Cliente::find(1);
    	Mail::to($correo_electronico,$nombres)->send(new mailBienvenida($correo_electronico, $cliente));
    	return "Correo enviado correctamente";

    }

}
