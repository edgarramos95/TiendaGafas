@extends('master_admin')

@section('contenido')
<table class="table table-hover">
	<thead>
		<h2>Consultar Clientes</h2>
		<hr>
			<tr>
			<th>ID</th>
			<th>Descripción</th>
			</tr>
	</thead>
	<tbody>
		@foreach($categorias as $c)
		<tr>
			<td>{{$c->id}}</td>
			<td>{{$c->descripcion}}</td>
			<td>
				<a href="{{url('/editarEncargado')}}/{{$c->id}}" class="btn btn-xs btn-primary">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</a>
				<a href="{{url('/eliminarEncargado')}}/{{$c->id}}" class="btn btn-xs btn-danger">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@stop