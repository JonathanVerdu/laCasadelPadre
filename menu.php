<?php
    if(ISSET($_POST['mensaje'])){
        $mensaje = $_POST['mensaje'];
        $telefono = 34643949972;
        $url="https://wa.me/".$telefono."?text=".$mensaje;
        header("Location:".$url);
    }
?>

<!-- Header Movil -->
<nav class="navbar navbar-expand-lg navbar-dark header fixed-top" id="header_movil">
  <div class="container">
	  <a class="navbar-brand" href="#"><img src="img/logo.jpg"></a>
      <button type="button" class="btn btn-primary boton_whatsapp" style="font-size:1.5em;" data-toggle="modal" data-target="#myModal"><i class="fab fa-whatsapp"></i></button>
	  <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
      aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
	  class="fas fa-bars fa-1x"></i></span></button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent1">

	    <ul class="navbar-nav mr-auto" style="font-size:0.6em">
	      <li class="nav-item active">
	        <a class="nav-link font_walkway" href="index.php">INICIO <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link font_walkway" href="donaciones.php">DONACIONES</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link font_walkway" href="sermones.php">SERVICIOS</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link font_walkway" href="oracion.php">ORACION</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link font_walkway" href="social.php">SOCIAL</a>
	      </li>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link font_walkway" data-toggle="modal" data-target="#contacto">CONTACTO</a>
	      </li>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link font_walkway" href="radio.php">RADIO</a>
	      </li>
	    </ul>

	  </div>
  	</div>
</nav>

<!-- Header Desktop-->
<nav class="navbar navbar-expand-lg navbar-dark header fixed-top" id="header_desktop">
  <a class="navbar-brand" href="#"><img src="img/logo.jpg"></a>
  <ul class="navbar-nav ml-auto">
      	<li class="nav-item active font_walkway">
    	<a class="nav-link font_walkway" href="index.php">INICIO <span class="sr-only">(current)</span></a>
  	</li>
  	<li class="nav-item font_walkway">
    	<a class="nav-link font_walkway" style="padding-right:15px !important" href="donaciones.php">DONACIONES</a>
  	</li>
    	<li class="nav-item font_walkway">
    	<a class="nav-link font_walkway" style="padding-right:15px !important" href="sermones.php">SERVICIOS</a>
  	</li>
  	<li class="nav-item font_walkway">
    	<a class="nav-link font_walkway" style="padding-right:15px !important" href="oracion.php">ORACION</a>
  	</li>
  	<li class="nav-item font_walkway">
    	<a class="nav-link font_walkway" style="padding-right:15px !important" href="social.php">SOCIAL</a>
  	</li>
  	<li class="nav-item font_walkway">
    	<a class="nav-link font_walkway" style="padding-right:15px !important" data-toggle="modal" data-target="#contacto">CONTACTO</a>
  	</li>
  	<li class="nav-item font_walkway">
    	<a class="nav-link font_walkway" style="padding-right:15px !important" href="radio.php">RADIO</a>
  	</li>
  	<li class="nav-item">
  	    <button type="button" class="btn btn-primary boton_whatsapp" style="background-color:black; font-size:1.5em;" data-toggle="modal" data-target="#myModal"><i class="fab fa-whatsapp"></i></button>
  	</li>
  </ul>
</nav>

<!-- MODAL PARA CONTACTO -->
<!-- The Modal -->
<div class="modal" id="contacto">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body">
        <h3>Contacto</h3>
        <ul class="list-unstyled">
          <li class="mt-2"><i class="fas fa-mobile-alt"></i> &nbsp;643 949 972</li>
          <li class="mt-2"><i class="far fa-envelope"></i> &nbsp;info@iglesialcp.com</li>
          <li class="mt-2"><i class="fab fa-instagram"></i> <a href="https://www.instagram.com/iglesialcp/">&nbsp;instagram/iglesialcp</a></li>
          <li class="mt-2"><i class="fab fa-facebook"></i> <a href="https://www.facebook.com/iglesialcpelche/">&nbsp;facebook/iglesialcpelche</a></li>
        </ul>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">X</button>
      </div>

    </div>
  </div>
</div>


<!-- MODAL PARA ENVIAR WHATSAPP -->
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body">
         <form action="menu.php" class="was-validated justify-content-center" method="POST">
            <div class="form-group">
                <label style="" for="detallePeticion">Mensaje</label>
                <textarea class="form-control" name="mensaje" id="detallePeticion" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-success ">ENVIAR WHATSAPP</button>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">X</button>
      </div>

    </div>
  </div>
</div>