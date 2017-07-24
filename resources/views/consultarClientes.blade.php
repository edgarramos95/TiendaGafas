@extends('master')


@section('contenido')
<!--@include('flash::message')-->
<h1>Lista de clientes TAP </h1>
<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Ocupación</th>
			<th>Edad</th>
			<th>Hijos</th>
			<th>Sexo</th>
			<th>Correo</th>
			<th>Teléfono </th>
			<th>Domicilio </th>
			<th>Localidad </th>
			<th>
				<a href="{{url('/clientesPDF')}}">PDF</a>
			</th>
		</tr>
	</thead>
	<tbody>
	<!--@foreach($clientes as $c)
		<tr>
			<td>{{$c->id}}</td>
			<td>{{$c->nombres}}</td>
			<td>{{$c->apellidos}}</td>
			<td>{{$c->ocupacion}}</td>
			<td>{{$c->edad}}</td>
			<td>{{$c->hijos}}</td>
			<td>{{$c->sexo}}</td>
			<td>{{$c->correo}}</td>
			<td>{{$c->telefono}}</td>
			<td>{{$c->domicilio}}</td>
			<td>{{$c->municipio}}, {{$c->estado}}, {{$c->pais}}</td>
			<td>
				<a href="{{url('/editarCli')}}/{{$c->id}}" class="btn btn-xs btn-primary">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</a>
				<a href="{{url('/eliminarCli')}}/{{$c->id}}" class="btn btn-xs btn-danger">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</a>
			</td>
	@endforeach-->
	</tbody>
</table>
<!--
<script type="text/javascript">
		setTimeout(function() 
		{
			$(".alert").fadeOut(1500);
		},1500);
</script>
-->
@stop