@extends('master_admin')

@section('contenido')
<form action="{{url('/actualizarArticulo')}}/{{$articulo->id}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label for="precio">Precio:</label>
		<input type="text" class="form-control" name="precio" maxlength="11" required>
	</div>
	<div class="form-group">
		<label for="descripcion">Descripción:</label>
		<input type="text" class="form-control" name="descripcion" maxlength="500" required>
	</div>
	<div class="form-group">
		<label for="costo">Costo:</label>
		<input type="text" class="form-control" name="costo" maxlength="11" required>
	</div>
	
	<div class="form-group">
		<label for="categoria">Categoria:</label>
		<select name="categoria" onchange="change_country(this.value)" class="form-control">
			<option value="null">Selecciona una opción</option>         
		    @foreach($categorias as $c)
				<option value="{{$c->id}}">{{$c->descripcion}}</option>
			@endforeach
		</select>
	</div>
	<div>
		<button type="submit" class="btn btn-primary">Actualizar</button>
		<a href="{{url('/consultarArticulos')}}" class="btn btn-danger">Cancelar</a>
	</div>
</form>
@stop