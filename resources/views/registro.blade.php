@extends('master')

@section('contenido')

          <div class="register_account">
          	<div class="wrap">
    	      <h4 class="title">REGISTRO</h4>
    		   <form>
    			 <div class="col_1_of_2 span_1_of_2">
					<div class="form-group">
						<label for="nombre">Nombre:</label>
						<input type="text" class="form-control" name="nombre" required>
					</div>
					<div class="form-group">
						<label for="apellidos">Apellidos:</label>
						<input type="text" class="form-control" name="apellidos" required>
					</div>
					<div class="form-group">
						<label for="correo_electronico">Correo:</label>
						<input type="text" class="form-control" name="correo_electronico" required>
					</div>
					<div class="form-group">
						<label for="contraseña">Contraseña:</label>
						<input type="text" class="form-control" name="contraseña" required>
					</div>
		    	 </div>
		    	  <div class="col_1_of_2 span_1_of_2">
					<div class="form-group">
						<label for="domicilio">Domicilio:</label>
						<input type="text" class="form-control" name="domicilio" required>
					</div>
		    		<div><select id="Pais" name="Pais" onchange="change_country(this.value)" class="frm-field required">
		            <option value="null">Selecciona el estado</option>         
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
		         </select></div>
					<div class="form-group">
						<label for="ciudad">Ciudad:</label>
						<input type="text" class="form-control" name="ciudad" required>
					</div>
		          </div>
		          	<input type="text" value="" maxlength="3" class="code"> - <input type="text" value="" maxlength="10" class="number">
		          		<p class="code">Codigo del pais + Numero de telefono</p>
		          </div>
		      <button class="grey">Registrar</button>
		  
		    <div class="clear"></div>
		    </form>
    	</div>
    </div>

   @stop