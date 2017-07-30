@extends('master_admin')

@section('contenido')
<table class="table table-hover">
	<thead>
		<h2>Consultar Articulos</h2>
		<hr>
			<tr>
			<th>ID</th>
			<th>Precio</th>
			<th>Descripción</th>
			<th>Costo</th>
			<th>Categoría</th>
			</tr>
	</thead>
	<tbody>
		@foreach($articulos as $a)
		<tr>
			<td>{{$a->id}}</td>
			<td>{{$a->precio}}</td>
			<td>{{$a->descripcion}}</td>
			<td>{{$a->costo}}</td>
			<td>{{$a->id_categoria}}</td>
			<td>
				<a href="{{url('/editarArticulo')}}/{{$a->id}}" class="btn btn-xs btn-primary">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</a>
				<a href="{{url('/eliminarArticulo')}}/{{$a->id}}" class="btn btn-xs btn-danger">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@stop