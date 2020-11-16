<!doctype html>

<html lang="es">
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  	<title>La Casa del Padre / Radio</title>
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

	<style>
        .gallery-block.compact-gallery .item .image {
            margin: 15px;
        }
        .gallery-block.compact-gallery .item{
            background: none;
        }
        
        .gallery-block {
            padding-top: 0px;
        }
    </style>

</head>

<body>

	<div class="container pl-0 pr-0">

		<!--- El Menu, incluido de otro html -->
	 	<?php include "menu.php" ?>


        <!-- Logo y texto -->
	 	<h3 class="text-center pt-3">RADIO LCP</h3>
 		<div>
    		<div class="row fondo_subpaginas mt-3 pt-2" style="padding:0px !important">
    			<div class="col-md-2"></div>
    			<div class="col-12 col-md-8 pl-4 pr-4 pb-4 text-center" id="capa_redes">
    			   <img class="mt-4" style="width:150px; height:150px" src="img/logoRadio.jpg">
                   <p class="texto_grande pt-3"><i><span class="comilla_abrir">"</span> Una emisora donde podrás escuchar una palabra de Dios para tu vida </i><span class="comilla_cerrar">"</span></p>
    			   <h3 class="text-center mb-4 mt-3" >PINCHA <a href="https://eu1.lhdserver.es:9223/stream">AQUÍ</a> Y CONÉCTATE CON EL CIELO</a></h3>
    			</div>
    			<div class="col-md-2"></div>
    		</div><!-- fin row -->
		</div>
	 	
 	    <section class="gallery-block compact-gallery mt-5">

            <div class="row">
                
                <?php for($i=1; $i<=9;$i++){?>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover">
                        <a class="lightbox" href="img/rad<?=$i?>.jpg">
                            <img class="img-fluid image" src="img/rad<?=$i?>.jpg">
                        </a>
                    </div>
                <?php } ?>
       
            </div>
            
    	</section>

	</div> <!-- fin container -->
	


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