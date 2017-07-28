@extends('master')
@section('contenido')
  	   <div class="login">
          <div class="wrap">
				<ul class="breadcrumb breadcrumb__t"></ul>
				    <div class="cont span_2_of_about">
				       <h3>Políticas de devolución</h3>
					   	<p>Queremos que estés completamente a gusto con tu compra en Lunettes o en cualquiera de nuestras aplicaciones. Nuestra garantía de 5 estrellas significa que estamos comprometidos a brindarte la mejor experiencia posible. Siempre estamos disponibles para ayudarte con cualquier duda o inquietud. Si necesitas solicitar un reembolso, por favor contacta nuestro Servicio al Cliente dentro de 30 días de la entrega.</p>
					   	<p>¿Cómo recibiré mi reembolso?</p>
					   	<p>Los reembolsos se procesan a la forma de pago utilizada previamente.</p>
					   	<p>Normalmente puedes esperar que tu proveedor de pagos te acredite tu reembolso dentro de 14 días hábiles. Si tienes dificultades al localizar tu reembolso, recomendamos que contactes a tu proveedor de pagos para mayor asistencia.</p>
					   	<p>Si utilizaste OXXO o Boleto, Ebanx emitirá tu reembolso según tu forma de pago.</p>
					   	<p>Todas las tarjetas de regalo son válidas para un solo uso. Lamentablemente no podemos acreditar las tarjetas de regalo a tu cuenta una vez que hayan sido utilizadas.</p>
					   	<p>Lunettes no proporciona un reembolso por los costos relacionados con los envíos de devolución, cobros de aduana, impuestos, tarifas postales o cualquier coste asociado al IVA.</p>
					   	<p>¿Cómo se aplican mis promociones?</p>
					   	<p>El saldo y la fecha de vencimiento de una tarjeta de regalo de Lunettes se pueden ver en la sección de Recompensas en tu cuenta. Se aplicará al costo de tu próximo pedido automáticamente para todos los pedidos elegibles.</p>
					   	<p>Las tarjetas de regalo de Lunettes no se pueden aplicar a los costos de envío. Las tarjetas de regalo se expiran a la media noche de la fecha de vencimiento.</p>
					   	<p>Las promociones son ofertas de tiempo limitado y son válidas según las condiciones de la oferta. No se pueden volver a emitir las promociones una vez que se hayan vencido.</p>
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