<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="images/logoico.ico">
	<title>Lunetes</title>
	<link rel="stylesheet" href="{{asset("css/bootstrap.css")}}"">
	<script src="{{asset("js/jquery-3.2.1.js")}}"></script>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('/')}}">Lunetes</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
               
        <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Registrar <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">

            <li><a href="{{url('/registrarEncargado')}}">Registrar Cliente</a></li>
            <li><a href="{{url('/registrarProyecto')}}">Registrar Categoria</a></li>            
            <li><a href="{{url('/registrarPuesto')}}">Registrar Articulo</a></li>
            <li><a href="{{url('/registrarRecurso')}}">Registrar Imagen</a></li>
            
          </ul>
        </li>

        <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Consultar <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">

            <li><a href="{{url('/consultarEncargados')}}">Consultar Cliente</a></li>
            <li><a href="{{url('/consultarProyectos')}}">Consultar Categoria</a></li>
            <li><a href="{{url('/consultarPuestos')}}">Consultar Articulo</a></li>
            <li><a href="{{url('/consultarRecursos')}}">Consultar Imagen</a></li>
          
          </ul>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
		@yield('contenido')
		</div>
	</div>
</div>

<footer class="text-center">
	<hr>
	Lunettes©2017
</footer>
<script src="{{asset("js/bootstrap.js")}}"></script>
</body>
</html>