@extends('master_admin')

@section('contenido')
<form action="{{url('/guardarEncargado')}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">

	<h2>Registrar Categoria</h2>
	<hr>

	<div class="form-group">
		<label for="descripcion">Descripción:</label>
		<input type="text" class="form-control" name="descripcion" maxlength="500" required>
	</div>
	<button type="submit" class="btn btn-primary">Registrar</button>
	<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
</form>
<div class="clear"></div>

@stop