@extends('master')

@section('contenido')

          <div class="register_account">
          	<div class="wrap">
    	      <h4 class="title">REGISTRO</h4>
    		   <form>
    			 <div class="col_1_of_2 span_1_of_2">
		   			 <div><input type="text" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre';}"></div>
		    			<div><input type="text" value="Apellidos" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Apellidos';}"></div>
		    			<div><input type="text" value="Correo Electrónico" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Correo Electrónico';}"></div>
		    			<div><input type="text" value="Contraseña" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Contraseña';}"></div>
		    	 </div>
		    	  <div class="col_1_of_2 span_1_of_2">	
		    		<div><input type="text" value="Domicilio" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Domicilio';}"></div>
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
		          <div><input type="text" value="Ciudad" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Ciudad';}"></div>
		           <div>
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