<!doctype html>

<html lang="es">
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  	<title>Radio Ciudad</title>
  	<meta name="author" content="Jonathan Verdú Líria">

  	<!-- Bootstrap 4 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- Mis CSS -->
	<link rel="stylesheet" type="text/css" href="style_radio.css">
    <link rel="stylesheet" href="../compact-gallery.css">

	<!-- BaguetteBox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>

	<!-- Fuentes -->
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Red+Rose:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>

	<div class="container-fluid pl-0 pr-0">

		<!--- include del menu -->
	 	<?php include "menu_radio.html" ?>

		<!-- Imagen -->
		<div class="row">
			<div class="col-12" id="div_imagen_radio">
				<p class="texto_imagen p-5">RADIO CIUDAD</p>
				<p id="texto_imagen_horarios" class="texto_imagen p-5">Despierta tus sentidos<br />101.2 FM</p>
			</div>
		</div>
		
		<!-- Quienes somos -->
		<h3 class="mt-5 mb-5">Quienes somos</h3>
		<div class="row">
		    <div class="col-md-2"></div>
		    <div class="col-12 col-md-8">
		        <p>¿Eres de los que no puedes vivir sin escuchar la radio? ¿Se te hace raro ducharte sin esas canciones que tanto te gustan de fondo? ¿No aguantas el camino hasta el trabajo sin escuchar la voz de tu locutor favorito contándote qué está pasando en el mundo y en tu ciudad? aqui esta tu radio, tu amiga, amante y compañera en todo momento, la que siempre esta ahi para ti RADIO CIUDAD, despierta tus sentidos, capta tu atencion y potencia tu imaginacion para que vivas experiencias inolvidables, RADIO CIUDAD no solo en tus oidos si no tambien en tu corazon! conectate 101.2 fm y pincha aqui, este  link a traves de internet .................................musica, noticias, programas y sobre todo muchas ganas de pasarlo bien. RADIO CIUDAD!</p>
		    </div>
		    <div class="col-md-2"></div>
		</div>

		<br /><br />

        <!-- Include de footer -->
        <?php include "footer_radio.html" ?>

	</div> <!-- fin container-fluid -->

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