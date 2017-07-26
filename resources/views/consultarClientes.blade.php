@extends('master_admin')

@section('contenido')
<table class="table table-hover">
	<thead>
		<h2>Consultar Clientes</h2>
		<hr>
			<tr>
			<th>ID</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Correo Electrónico</th>
			<th>Contraseña</th>
			<th>Domicilio</th>
			<th>Estado</th>
			<th>Ciudad</th>
			<th>Telefono</th>
			</tr>
	</thead>
	<tbody>
		@foreach($clientes as $c)
		<tr>
			<td>{{$c->id}}</td>
			<td>{{$c->nombres}}</td>
			<td>{{$c->apellidos}}</td>
			<td>{{$c->correo_electronico}}</td>
			<td>{{$c->contraseña}}</td>
			<td>{{$c->domicilio}}</td>
			<td>{{$c->estado}}</td>
			<td>{{$c->ciudad}}</td>
			<td>{{$c->telefono}}</td>
			<td>
				<a href="{{url('/editarCliente')}}/{{$c->id}}" class="btn btn-xs btn-primary">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</a>
				<a href="{{url('/eliminarCliente')}}/{{$c->id}}" class="btn btn-xs btn-danger">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@stop