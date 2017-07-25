@extends('master')

@section('contenido')
          <div class="register_account">
            <div class="wrap">
            <h4 class="title">REGISTRO DE CLIENTES</h4>
           <form>
           <div class="col_1_of_2 span_1_of_2">
          <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" maxlength="50" required>
          </div>
          <div class="form-group">
            <label for="apellidos">Apellidos:</label>
            <input type="text" class="form-control" name="apellidos" maxlength="50" required>
          </div>
          <div class="form-group">
            <label for="correo_electronico">Correo:</label>
            <input type="text" class="form-control" name="correo_electronico" maxlength="50" required>
          </div>
          <div class="form-group">
            <label for="contraseña">Contraseña:</label>
            <input type="text" class="form-control" name="contraseña" maxlength="8" required>
          </div>
          <br>
           <div class="form-group">
              <button class="grey" >Registrar</button>
           </div>

           </div>
            <div class="col_1_of_2 span_1_of_2">
          <div class="form-group">
            <label for="domicilio">Domicilio:</label>
            <input type="text" class="form-control" name="domicilio" maxlength="500" required>
          </div>
            <div>
            <label for="estado">Estado:</label>
            <select id="estado" name="estado" onchange="change_country(this.value)" class="frm-field required">
            <option value="null">Selecciona una opción</option>         
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
             </select></div>
          <div class="form-group">
            <label for="ciudad">Ciudad:</label>
            <input type="text" class="form-control" name="ciudad" maxlength="50" required>
          </div>
              
                <div class="form-group">
                  <label for="telefono">Numero de Telefono:</label>
                  <br>
                  <input type="text" value="" maxlength="10" class="number">                  
                </div>
              </div>
              </div>

        <div class="clear"></div>
        </form>
      </div>
    </div>

@stop
