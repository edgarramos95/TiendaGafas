@extends('master_admin')

@section('contenido')
<table class="table table-hover">
	<thead>
		<h2>Consultar Administradores</h2>
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
		@foreach($administradores as $a)
		<tr>
			<td>{{$a->id}}</td>
			<td>{{$a->nombres}}</td>
			<td>{{$a->apellidos}}</td>
			<td>{{$a->correo_electronico}}</td>
			<td>{{$a->contraseña}}</td>
			<td>{{$a->domicilio}}</td>
			<td>{{$a->estado}}</td>
			<td>{{$a->ciudad}}</td>
			<td>{{$a->telefono}}</td>
			<td>
				<a href="{{url('/editarAdministrador')}}/{{$a->id}}" class="btn btn-xs btn-primary">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</a>
				<a href="{{url('/eliminarAdministrador')}}/{{$a->id}}" class="btn btn-xs btn-danger">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@stop