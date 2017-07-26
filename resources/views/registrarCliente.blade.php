@extends('master')

@section('contenido')
<form action="{{url('/guardarClientes')}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">

          <div class="register_account">
            <div class="wrap">
            <h4 class="title">REGISTRO DE CLIENTES</h4>
           
  <div class="form-group">
    <label for="nombres">Nombres:</label>
    <input type="text" class="form-control" name="nombres" maxlength="50" required>
  </div>
  <div class="form-group">
    <label for="apellidos">Apellidos:</label>
    <input type="text" class="form-control" name="apellidos" maxlength="50" required>
  </div>
  <div class="form-group">
    <label for="correo_electronico">Correo electrónico:</label>
    <input type="text" class="form-control" name="correo_electronico" maxlength="50" required>
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
        <option value="Aguascalientes">Aguascalientes</option>
        <option value="Baja California">Baja California</option>
        <option value="Baja California Sur">Baja California Sur</option>
        <option value="Campeche">Campeche</option>
        <option value="Chiapas">Chiapas</option>
        <option value="Chihuahua">Chihuahua</option>
        <option value="Ciudad de México">Ciudad de México</option>
        <option value="Coahuila">Coahuila</option>
        <option value="Colima">Colima</option>
        <option value="Durango">Durango</option>
        <option value="Distrito Federal">Distrito Federal</option>
        <option value="Estado de México">Estado de México</option>
        <option value="Guanajuato">Guanajuato</option>
        <option value="Guerrero">Guerrero</option>
          <option value="Hidalgo">Hidalgo</option>
        <option value="Jalisco">Jalisco</option>
        <option value="Michoacán">Michoacán</option>
        <option value="Morelos">Morelos</option>
        <option value="Nayarit">Nayarit</option>
        <option value="Nuevo León">Nuevo León</option>
        <option value="Oaxaca">Oaxaca</option>
        <option value="Puebla">Puebla</option>
        <option value="Querétaro">Querétaro</option>
        <option value="Quintana Roo">Quintana Roo</option>
        <option value="San Luis Potosí">San Luis Potosí</option>
        <option value="Sinaloa">Sinaloa</option>
        <option value="Sonora">Sonora</option>
      <option value="Tabasco">Tabasco</option>
        <option value="Tamaulipas">Tamaulipas</option>
        <option value="Tlaxcala">Tlaxcala</option>
        <option value="Veracruz">Veracruz</option>
        <option value="Yucatán">Yucatán</option>
        <option value="Zacatecas">Zacatecas</option>
    </select>
  </div>
  <div class="form-group">
    <label for="ciudad">Ciudad:</label>
    <input type="text" class="form-control" name="ciudad" maxlength="50" required>
  </div>
  <div class="form-group">
    <label for="telefono">Numero de Telefono:</label>
    
    <input type="text" class="form-control" name="telefono" maxlength="10" required>
  </div>
              
    <button type="submit" class="btn btn-primary">Registrar</button>
    <a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
  
    </div>
    </div>
    </form>
    
@stop
