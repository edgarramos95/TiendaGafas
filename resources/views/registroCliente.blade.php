@extends('master_admin')

@section('contenido')
<form action="{{url('/guardarEncargado')}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">

	<h2>Registrar Cliente</h2>
	<hr>

	<div class="form-group">
		<label for="nombre">Nombres:</label>
		<input type="text" class="form-control" name="nombre" maxlength="50" required>
	</div>
	<div class="form-group">
		<label for="apellidos">Apellidos:</label>
		<input type="text" class="form-control" name="apellidos" maxlength="50" required>
	</div>
	<div class="form-group">
		<label for="correo">Correo electrónico:</label>
		<input type="text" class="form-control" name="correo" maxlength="50" required>
	</div>
	<div class="form-group">
		<label for="contraseña">Contraseña:</label>
		<input type="text" class="form-control" name="contraseña" maxlength="8" required>
	</div>
	<div class="form-group">
		<label for="domicilio">Domicilio:</label>
		<input type="text" class="form-control" name="domicilio" maxlength="500" required>
	</div>
	<div class="form-group">
		<label for="estado">Estado:</label>
		<select name="estado" onchange="change_country(this.value)" class="form-control">
			<option value="null">Selecciona una opción</option>         
		    <option value="AG">Aguascalientes</option>
		    <option value="BC">Baja California</option>
		    <option value="BS">Baja California Sur</option>
		    <option value="CA">Campeche</option>
		    <option value="CS">Chiapas</option>
		    <option value="CH">Chihuahua</option>
		    <option value="CM">Ciudad de México</option>
		    <option value="CO">Coahuila</option>
		    <option value="CL">Colima</option>
		    <option value="DU">Durango</option>
		    <option value="DF">Distrito Federal</option>
		    <option value="EM">Estado de México</option>
		    <option value="GU">Guanajuato</option>
		    <option value="GO">Guerrero</option>
	        <option value="HI">Hidalgo</option>
		    <option value="JA">Jalisco</option>
		    <option value="MI">Michoacán</option>
		    <option value="MO">Morelos</option>
		    <option value="NA">Nayarit</option>
		    <option value="NL">Nuevo León</option>
		    <option value="OA">Oaxaca</option>
		    <option value="PU">Puebla</option>
		    <option value="QU">Querétaro</option>
		    <option value="QR">Quintana Roo</option>
		    <option value="SL">San Luis Potosí</option>
		    <option value="SI">Sinaloa</option>
		    <option value="SO">Sonora</option>
			<option value="TA">Tabasco</option>
		    <option value="TS">Tamaulipas</option>
		    <option value="TL">Tlaxcala</option>
		    <option value="VE">Veracruz</option>
		    <option value="YU">Yucatán</option>
		    <option value="ZA">Zacatecas</option>
		</select>
	</div>
	<div class="form-group">
		<label for="ciudad">Ciudad:</label>
		<input type="text" class="form-control" name="ciudad" maxlength="50" required>
	</div>
	<div class="form-group">
		<label for="telefono">Numero de Telefono:</label>
		
		<input type="text" class="form-control" name="domicilio" maxlength="10" required>
	</div>
		          
		<button type="submit" class="btn btn-primary">Registrar</button>
		<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
	
</form>
<div class="clear"></div>

@stop