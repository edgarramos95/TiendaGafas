@extends('master')
@section('contenido')
    <div class="login">
       <div class="wrap">
	    <ul class="breadcrumb breadcrumb__t"><a class="home" href="{{url('/inicio')}}">Inicio</a></ul>
		   <div class="content-top">
			   <form method="post" action="contact-post.html">
					 <div class="form-group">
						<label for="nombre">Nombre:</label>
						<input type="text" class="form-control" name="nombre" required>
					</div>
					<div class="form-group">
						<label for="correo_electronico">Correo:</label>
						<input type="text" class="form-control" name="correo_electronico" required>
					</div>
					<div class="form-group">
						<label for="ciudad">Ciudad:</label>
						<input type="text" class="form-control" name="ciudad" required>
					</div>
					<div class="form-group">
						<label for="telefono">Teléfono:</label>
						<input type="text" class="form-control" name="telefono" required>
					</div>
					<div class="form-group">
						<label for="mensaje">Mensaje:</label>
						<input type="text" class="form-control" name="mensaje" required>
					</div>
	                <div class="submit">
	               		<input type="submit" value="Enviar">
	                </div>
               </form>
                <div class="map">
					<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px">Ver mapa más grande</a></small>
				</div>
            </div>
       </div> 
    </div>
@stop