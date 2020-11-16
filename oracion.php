<?php
    require("PHPMailer-5.2-stable/class.phpmailer.php");
    require("PHPMailer-5.2-stable/class.smtp.php");
?>

<!doctype html>

<html lang="es">
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  	<title>La Casa del Padre / Oración</title>
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
    
	<?php
		if(isset($_POST['correo'])){
            $correo = $_POST['correo'];
            $nombre = $_POST['nombre'];
            $tipoPeticion = $_POST['tipoPeticion'];
            $detallePeticion= $_POST['detallePeticion'];

            $titulo = "Petición de oración de parte de ".$nombre;
            $mensaje = "DATOS OBTENIDOS DEL FORMULARIO<br /><br />Correo: ".$correo."<br />Nombre: ".$nombre."<br />Tipo de petición: ".$tipoPeticion."<br />Detalle de la Petición: ".$detallePeticion."<br />";
       
            try {
                $mail = new PHPMailer(true);
                $mail->CharSet = 'utf-8';
                $mail->SMTPDebug = 0; // Enables SMTP debug information - SHOULD NOT be active on production servers!
               
                $mail->isSMTP();
                $mail->Host = 'localhost';
                $mail->SMTPAuth = false;
                $mail->SMTPAutoTLS = false; 
                $mail->Port = 25;
        
                $mail->AddAddress('info@iglesialcp.com', 'Iglesia LCP'); 
                $mail->SetFrom($correo, $nombre);
                $mail->Subject = $titulo;
                $mail->MsgHTML($mensaje);
                $mail->Send();
            } catch (phpmailerException $e) {
                   echo $e->errorMessage(); 
            } catch (Exception $e) {
                   echo $e->getMessage(); 
            }
            
            echo'<script type="text/javascript">
                alert("Mensaje enviado");
                window.location.href="invitacion.php";
                </script>';
           
        }
	?>


	<div class="container pl-0 pr-0">

		<!--- El Menu, incluido de otro html -->
	 	<?php include "menu.php" ?>

	 	<h3 class="text-center pt-3">ORACIÓN</h3>

	 	<div class="row bg_blanco text-center">
	 
            <div class="row" style="width: 100%;">
                <div class="col-2 col-md-1"></div>
                <div class="col-8 col-md-10">
                    
        			<h3 class="text-center color_black">Envíanos tu petición de oración</h3>
        			
                    <div class="info-form pt-3">
                        <form action="oracion.php" class="was-validated justify-content-center" method="POST">
                            <div class="form-group">
                                <label class="color_black" for="nombre">Nombre completo:</label>
							    <input type="text" class="form-control" id="nombre" placeholder="" name="nombre" required>
                            </div>
                            <div class="form-group">
                                <label class="color_black"  for="correo">Dirección de correo electrónico:</label>
							    <input type="email" class="form-control" id="correo" placeholder="" name="correo" required>
                            </div>
                            <div class="form-group">
                                <label class="color_black"  for="tipoPeticion">Tipo de petición</label>
                                <select class="form-control" style="background-image: none !important" id="tipoPeticion" name="tipoPeticion">
                                  <option valie="Otros">Otros</option>
                                  <option value="Salud">Salud</option>
                                  <option valie="Familia">Familia</option>
                                  <option valie="Conversion">Conversión</option>
                                  <option valie="Prosperidad">Prosperidad</option>
                                  <option valie="Liberacion">Liberación</option>
                                  <option valie="Temores">Temores</option>
                                  <option valie="Dudas">Dudas</option>
                                  <option valie="Amor">Amor</option>
                                  <option valie="Pais">El País</option>
                                  <option valie="Proteccion">Protección</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="color_black"  for="detallePeticion">Detalle de su petición</label>
                                <textarea class="form-control" name="detallePeticion" id="detallePeticion" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-success ">ENVIAR</button>
                        </form>
                    </div>            
                    
                </div>
                <div class="col-2 col-md-1"></div>
            </div>
	 
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