@extends('master_admin')

@section('contenido')
<form action="{{url('/actualizarCategoria')}}/{{$categoria->id}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label for="descripcion">Descripción:</label>
		<input type="text" class="form-control" name="descripcion" maxlength="500" required>
	</div>
	<div>
		<button type="submit" class="btn btn-primary">Actualizar</button>
		<a href="{{url('/consultarCategorias')}}" class="btn btn-danger">Cancelar</a>
	</div>
</form>

@stop