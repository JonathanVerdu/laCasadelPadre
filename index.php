<!doctype html>

<html lang="es">
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  	<title>La Casa del Padre</title>
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
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital@1&display=swap" rel="stylesheet">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>
    
    <!-- Código para abrir los vídeos de facebook -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v8.0" nonce="BtGLkqlz"></script>

	<div class="container-fluid pl-0 pr-0">

		<!--- El Menu, incluido de otro html -->
	 	<?php include "menu.php" ?>
		
		<div class="row">
    		<div id="cabecera_video">
    		     <!--
                <video id="video" playsinline class="headervideo" autoplay="autoplay" loop="loop" muted="muted" autobuffer="autobuffer"controls>
                    <source src="video/inicio.mp4" type='video/mp4' />
                </video>
                 -->
                <!-- 
                <iframe id="video" src="https://www.youtube.com/embed/fLu6BDd7ReU" frameborder="0" muted="1" loop="1" autoplay="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                -->
 
                <div id="video"></div>
                
                <div id="texto_video">
                    <p class="texto_imagen pt-5"><span class="font_coolvetica">La Casa del Padre</span></p>
    				<p class="texto_imagen"><span class="font_aliens" id="texto_imagen_sub">Un lugar donde la presencia de Dios es real</span></p>
    			</div>
            </div>
        </div>

		<br /><br />
		
		<!-- Servicios -->
		<div class="row">
		    <div class="col-1 col-md-2"></div> 
			<div id="texto_servicios" class="col-10 col-md-8">
			    <h3 class="mb-3">¡Dos Servicios cada Domingo!</h3>
			    <p>Gracias por visitar nuestro sitio web, a continuación encontrará algunos de los últimos anuncios.</p>
			    <p class="mb-5">¡Conéctate a traves de nuestras redes sociales para ver los servicios en vivo!</p>
			    <h3>HORAS DE SERVICIO</h3>
			    <p style="text-align:center">DOMINGO | 10AM & 12PM</p>
			    <p style="text-align:center">JUEVES | 20:30PM</p>
		    </div>
		    <div class="col-1 col-md-2"></div> 
		</div>
		
		<br />

		<!--- Donación -->
		<div class="bg_personal">
			<div class="row">
				<div class="col-12">
					<h3 class="mobile-size-text p-3">Tu aporte nos ayuda a llevar el evangelio alrededor del mundo</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-3 pl-4 pr-4 p-3 mx-auto">
					<div class="text-center mb-2"><a href="donaciones.php"><i style="color: white;" class="far fa-3x fa-credit-card icono_color"></i></a></div>
					<h3 class="text-center">Transferencia</h3>
				</div>
				<div class="col-12 col-md-3 pl-4 pr-4 p-3 mx-auto">
					<div class="text-center mb-2"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=Y2XHS2BDCA6DW&source=url"><i style="color: white;" class="fab fa-3x fa-paypal icono_color"></i></a></div>
					<h3 class="text-center">PayPal</h3>
				</div>
				<div class="col-12 col-md-3 pl-4 pr-4 p-3 mx-auto">
					<div class="text-center mb-2"><a href="donaciones.php"><i style="color: white;" class="fas fa-3x fa-mobile-alt icono_color"></i></a></div>
					<h3 class="text-center">Bizum</h3>
				</div>
			</div>
		</div>

		<!-- Vídeo bienvenida y Último Sermón -->
		<div class="row mt-5">
			<div class="col-1 col-md-2"></div> 
			<div id="div_ultimo_sermon" class="col-10 col-md-8">
			    
			    <h3 id="titulo_sermon">ÚLTIMO SERVICIO</h3> 
			    
    			<div id="texto_ultimo_sermon">
    				<span class="datos_sermon"><b>Conociendo al Espíritu Santo.</b>&nbsp;&nbsp;&nbsp;<i>Ap. Antonio Rico&nbsp;&nbsp;&nbsp;15/11/2020</i></span><br />
    			</div>
    		
				<div class="fb-video" data-href="https://www.facebook.com/iglesialcpelche/videos/850785082357602/" data-show-text="false" data-width="">
				    <blockquote cite="https://www.facebook.com/iglesialcpelche/videos/308173943936293/" class="fb-xfbml-parse-ignore">
				    <a href="https://developers.facebook.com/iglesialcpelche/videos/680500085869300/"></a><p>El ascenso.
                    Ap. Antonio Rico.</p>Publicado por <a href="https://www.facebook.com/iglesialcpelche/">Iglesia La casa del Padre</a>27 de Septiembre de 2020</blockquote>
                </div>
                
				<button type="button" class="btn btn-danger btn-lg mt-3"><a class="link_sin_estilo" href="sermones.php">VER TODOS</a></i></button>
				
    		</div>
			<div class="col-1 col-md-2"></div>
		</div>
		
		<!-- Acceso a redes -->
		<div class="bg_personal">
    		<div class="row mt-5 pt-3">
    			<div class="col-md-2"></div>
    			<div class="col-12 col-md-8 pl-4 pr-4 pb-4 text-center" id="capa_redes">
    				<h3 class="text-center mb-4 mt-3" id="titulo_sermon">VISÍTANOS EN NUESTRAS REDES</h3>
                    <a class="text-center mr-5 icono_color link_sin_estilo" style="font-size: 3em;" href="https://www.instagram.com/iglesialcp/"><i class="fab fa-instagram"></i></a>
                    <a class="link_sin_estilo icono_color mr-5" style="font-size: 3em;" href=""><i class="fab fa-youtube"></i></i></a>
                    <a class="link_sin_estilo icono_color" style="font-size: 3em;" href="https://www.facebook.com/iglesialcpelche/"><i class="fab fa-facebook"></i></a>
    			</div>
    			<div class="col-md-2"></div>
    		</div><!-- fin row -->
		</div>

		<!-- Nuestra voz -->
		<div class="row mt-5">
			<div class="col-md-1"></div> 
			<div id="div_pastor" class="col-12 col-md-5">
				<div style="border-radius: 20px 20px 0px 0px;" id="imagen_pastor"></div>
				<div style="border-radius: 0px 0px 20px 20px;" id="texto_pastor">
					<h1 class="text-center pt-3" style="color:black">AP. ANTÓNIO RICO</h1>
					<p class="texto_grande pt-3 pl-5 pr-5 pb-3">
						<span class="comilla_abrir">"</span>Un ministerio que te ayudará a romper tus límites y provocará en ti pasión por Dios. Pastor fundador de la iglesia La Casa del Padre<span class="comilla_cerrar">"</span>
					</p>
					<div class="text-center pb-3">
						<button type="button" class="btn btn-danger btn-md text-center">VER BIO COMPLETA</button>
						<button type="button" class="btn btn-danger btn-md text-center"><a class="link_sin_estilo" href="invitacion.php">INVITACIONES</a></button>
					</div>
				</div>
			</div>
			<div id="div_pastora" class="col-12 col-md-5">
				<div style="border-radius: 20px 20px 0px 0px;" id="imagen_pastora"></div>
				<div style="border-radius: 0px 0px 20px 20px;" id="texto_pastor">
					<h1 class="text-center pt-3" style="color:black">PR. SOTERIA MORENO</h1>
					<p class="texto_grande pt-3 pl-5 pr-5 pb-3">
						<span class="comilla_abrir">"</span>Una mujer apasionada por las almas, mostrando amor y cariño a todo aquel que lo necesita. Pastora de La Casa del Padre y presidenta de la asociación SUEÑA DE NUEVO<span class="comilla_cerrar">"</span>
					</p>
					<div class="text-center pb-3">
						<button type="button" class="btn btn-danger btn-md text-center">VER BIO COMPLETA</i></button>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>

		<!-- Nuestro mensaje -->
		<div class="row mt-5">
			<div class="col-md-3"></div> 
			<div id="div_video" class="col-12 col-md-6">
				<div class="text-center p-3">
					<h3 class="mobile-size-text"><h3>Nuestro mensaje y nuestra aportación a la comunidad</h3>
				</div>
				
                <!--
				<div class="embed-responsive embed-responsive-1by1" id="div_video_mobile">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/_l68xfzS1MQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>

				<div class="embed-responsive embed-responsive-16by9" id="div_video_desktop">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/_l68xfzS1MQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
                -->
				
				<div class="embed-responsive embed-responsive-1by1" id="div_video_mobile">
    				<video playsinline class="headervideo" autobuffer="autobuffer"controls>
                        <source src="video/mensaje.mp4" type='video/mp4' />
                    </video>
                </div>
                <div class="embed-responsive embed-responsive-16by9" id="div_video_desktop">
                    <video playsinline class="headervideo" autobuffer="autobuffer"controls id="div_video_desktop">
                        <source src="video/mensaje.mp4" type='video/mp4' />
                    </video>
                </div>
                
			</div>
			<div class="col-md-3"></div> 
		</div>

		<!-- Aportación -->
		<div class="row pt-5 p-3">
			<div class="col-12 col-md-3 pl-4 pr-4 mx-auto">
				<div class="text-center mb-2"><a href="oracion.php"><i aria-hidden="true" class="fas fa-3x fa-hands icono_color"></i></a></div>
				<h3 class="text-center">ORACIÓN</h3>
				<p class="text-center texto_interaccion">Nos gustaría orar por ti. ¿Cuál es tu necesidad? envíanos un WhatsApp y un equipo de intercesión unirá su fe para que tu petición sea escuchada.</p>
			</div>
			<div class="col-12 col-md-3 pl-4 pr-4 mx-auto">
				<div class="text-center mb-2"><a href="social.php"><i aria-hidden="true" class="fas fa-3x fa-user icono_color"></i></a></div>
				<h3 class="text-center">SOCIAL</h3>
				<p class="text-center texto_interaccion">"Sueña de nuevo" es nuestra área comprometida con la sociedad, no solo en lo espiritual, sino también dando asistencia a quienes mas lo necesitan.</p>
			</div>
			<div class="col-12 col-md-3 pl-4 pr-4 mx-auto">
				<div class="text-center mb-2"><a href="donaciones.php"><i aria-hidden="true" class="fas fa-3x fa-dollar-sign icono_color"></a></i></div>
				<h3 class="text-center">DONATIVO</h3>
				<p class="text-center texto_interaccion">Ayudanos a ayudar y se un protagonista de este gran trabajo, cumplamos juntos la gran misión, id y predicad el evangelio a toda criatura hasta el fin del mundo.</p>
			</div>
		</div><!-- Fin row-->
		
		<!-- Ver en directo -->
		<div class="bg_personal">
    		<div class="row mt-5 pt-3">
    			<div class="col-md-2"></div>
    			<div class="col-12 col-md-8 pl-4 pr-4 pb-4 text-center" id="capa_redes">
    				<h3 class="text-center mb-4 mt-3" id="titulo_sermon">ESCUCHA NUESTRO MENSAJE EN TIEMPO REAL</h3>
                    <button type="button" id="boton_youtube" class="btn btn-lg btn-danger text-center mr-5"><a class="link_sin_estilo" href="https://www.facebook.com/watch/live/?v=285567992592974&ref=watch_permalink"><i style="padding-left:5px" class="fas fa-play"></i></button>
    			</div>
    			<div class="col-md-2"></div>
    		</div><!-- fin row -->
		</div>
		
		<!-- Galería -->
	    <section class="gallery-block compact-gallery">

            <div class="row no-gutters">
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/galeria/9.jpg">
                        <img class="img-fluid image" src="img/galeria/9.jpg">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/galeria/2.jpg">
                        <img class="img-fluid image" src="img/galeria/2.jpg">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/galeria/18.jpg">
                        <img class="img-fluid image" src="img/galeria/18.jpg">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/galeria/4.jpg">
                        <img class="img-fluid image" src="img/galeria/4.jpg">
                        </a>
                    </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/galeria/12.jpg">
                        <img class="img-fluid image" src="img/galeria/12.jpg">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/galeria/15.jpg">
                        <img class="img-fluid image" src="img/galeria/15.jpg">
                    </a>
                </div>
            </div>
    	</section>

        <!-- Include de footer -->
        <?php include "footer.php" ?>

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