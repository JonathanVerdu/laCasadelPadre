<!doctype html>

<html lang="es">
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  	<title>La Casa del Padre / Donaciones</title>
  	<meta name="author" content="Jonathan Verdú Líria">

  	<!-- Bootstrap 4 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- Mis CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="compact-gallery.css">

	<!-- BaguetteBox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>

	<!-- Fuentes -->
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Red+Rose:wght@700&display=swap" rel="stylesheet">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


</head>

<body>

	<div class="container pl-0 pr-0">

		<!--- El Menu, incluido de otro html -->
	 	<?php include "menu.php" ?>

	 	<h3 class="text-center pt-3">DONACIONES</h3>

	 	<div class="fondo_subpaginas">
	 		<p class="texto_grande"><i><span class="comilla_abrir">"</span class="font_lato"> Ayudanos a ayudar y se un protagonista de este gran trabajo, cumplamos juntos la gran misión, id y predicad el evangelio a toda criatura hasta el fin del mundo. </i><span class="comilla_cerrar">"</span></p>

 	    

	 		<p  class="pt-3 font_lato">Envíe su donativo u ofrenda mediante uno de los siguientes medios:</p>
	 		<p>
	 
	 			<b class="pt-1">- BIZUM:</b>&nbsp;&nbsp; <span class="importante">642 10 19 26</span><br />
	 			<b class="pt-1">- CAIXA:</b>&nbsp;&nbsp; <span class="importante">ES56 2100 1536 5602 0027 5077</span><br />
	 			<b class="pt-1">- ING:</b>&nbsp;&nbsp;<span class="importante">ES68 1465 0100 97 2051581783</span>
	 			
	 			<!-- Botón de Paypal -->
 			    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick" />
                    <input type="hidden" name="hosted_button_id" value="Y2XHS2BDCA6DW" />
                    <input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Botón Donar con PayPal" />
                    <img alt="" border="0" src="https://www.paypal.com/es_ES/i/scr/pixel.gif" width="1" height="1" />
                </form>
                
                <br /><br />
                
                <!-- Código QR Paypal-->
                <img src="img/qr_paypal.jpg">
	 		</p>
	 	</div>
 
	</div> <!-- fin container-fluid -->
	
	<br /><br />
	
    <!-- Include de footer -->
    <?php include "footer.php" ?>

	<!-- JavaScript de Jquery y Bootstrap 4 -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

	<!-- Script para lightbox -->
    <script>
        baguetteBox.run('.compact-gallery', { 
        	animation: 'slideIn',
    		buttons: true
        });
    </script>
 
 	<!--Código Jquery -->
 	<script type="text/javascript">

		$(document).ready(function() {


		});

	</script>

</body>
</html>