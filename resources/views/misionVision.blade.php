@extends('master')
@section('contenido')
  	   <div class="login">
          <div class="wrap">
				<ul class="breadcrumb breadcrumb__t"><a class="home" href="{{url('/inicio')}}">Inicio</a></ul>
				<div class="section group">
				   <div class="labout span_1_of_about">
					 <h3>Testimonios</h3>
					  <div class="testimonials ">
						<div class="testi-item">
						<blockquote class="testi-item_blockquote">
							<a href="#">"Hemos conseguido los lentes que había necesitado, me encanto el diseño que se utilizo" </a>
							<div class="clear"></div>
						</blockquote>
							<small class="testi-meta"><span class="user">zahory_reyes@hotmail.com</span>
							<span class="info"></span><br><a href="#">http://demolink.org</a></small></div>
					   </div>
					   <div class="testimonials ">
						<div class="testi-item">
						<blockquote class="testi-item_blockquote">
							<a href="#">"Sin duda alguna la mejor tienda en línea de lentes, nunca tuve algún problema, me llegaron a tiempo". </a>
							<div class="clear"></div>
						</blockquote>
							<small class="testi-meta"><span class="user">cristina_chavez@hotmail.com</span>
							<span class="info"></span><br><a href="#">http://demolink.org</a></small></div>
					   </div>
				    </div>
				    <div class="cont span_2_of_about">
				       <h3>Nuestra misión</h3>
					   	<p>Nuestra misión como tienda en línea es brindar la facilidad de poder adquirir el producto de lentes, dependiendo su necesidad como cliente. En la tienda línea se pueden registrar para que al correo del cliente le puedan llegar promociones y si es de gusto poder realizar la compra. Al momento de crear su cuenta se obtendrá su dirección la cual estará protegido, y cuando realice una compra le llegará hasta su casa.</p>
					   <h3>Nuestra visión</h3>
					   	<p>Nuestra visión en un futuro es poder llegar a tener mas productos de acuerdo a las necesidades de los clientes, tener mas variedad de lentes. De esta misma manera se quiere llegar a otros país, y de esta manera poder extender los productos de la tienda en línea, poder llegar ser una tienda reconocida en otros países a como valla avanzando el tiempo.</p>
				        <h5 class="m_6">Conoce a nuestro equipo</h5>	
				     <div class="section group">
						<div class="col_1_of_about-box span_1_of_about-box">
						   <a class="popup-with-zoom-anim" href="#small-dialog3">  <span class="rollover"></span><img src="images/a-img.jpg" title="continue" alt=""/></a>
		                     <div id="small-dialog3" class="mfp-hide">
							   <div class="pop_up2">
								</div>
							 </div>
							 <h4 class="m_7"><a href="">Administrador</a></h4>
							 <p>Edgar Ramos Félix.</p>
					     </div>
						<div class="col_1_of_about-box span_1_of_about-box">
						   <a class="popup-with-zoom-anim" href="#small-dialog3">  <span class="rollover"></span><img src="images/a-img1.jpg" title="continue" alt=""/></a>
		                    <h4 class="m_7"><a href="#">Consultor en línea</a></h4>
							 <p>Claudia Selena Alanis Valle.</p>
					     </div>
						<div class="col_1_of_about-box span_1_of_about-box">
						   <a class="popup-with-zoom-anim" href="#small-dialog3">  <span class="rollover"></span><img src="images/a-img2.jpg" title="continue" alt=""/></a>
		                    <h4 class="m_7"><a href="#">Diseñador</a></h4>
							 <p>Zaida Jazmin Sanchez Ramirez.</p>
					     </div>
				        <div class="clear"></div> 
							
		   </div>
		   <!-- Add fancyBox main JS and CSS files -->
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>
           </div>
		   <div class="clear"></div>	
		  </div>
	</div>	
   </div>  
@stop