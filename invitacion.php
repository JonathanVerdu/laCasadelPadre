<?php
    require("PHPMailer-5.2-stable/class.phpmailer.php");
    require("PHPMailer-5.2-stable/class.smtp.php");
?>

<!doctype html>

<html lang="es">
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  	<title>La Casa del Padre / Invitación</title>
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
            $organizacion = $_POST['organizacion'];
            $productor = $_POST['productor'];
            $telefono = $_POST['telefono'];
            $pais = $_POST['pais'];
            $ciudad = $_POST['ciudad'];
            $direccion = $_POST['direccion'];

            $titulo = "Petición de evento de parte de ".$organizacion;
            $mensaje = "DATOS OBTENIDOS DEL FORMULARIO<br /><br />Correo: ".$correo."<br />Organización: ".$organizacion."<br />Productor: ".$productor."<br />Teléfono: ".$telefono."<br />Dirección: ".$direccion."<br />País y ciudad: ".$pais."/".$ciudad;

       
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
                $mail->SetFrom($correo, $productor);
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

	 	<h3 class="text-center pt-3">INVITACIÓN</h3>

	 	<div class="row bg_blanco">
	 		<h3 class="color_black" style="padding-left: 40px; padding-right: 40px;">Formulario de invitación del Apostol Antonio Rico</h3>

	 		<p  class="pt-3 color_black" style="font-size: 1.5em; padding-left: 40px; padding-right: 40px;">
	 			Gracias por haberse tomado el tiempo de llegar hasta esta página, nos complace que hayan pensado en nosotros para su próximo evento. Participamos en una gran variedad de eventos y muchas veces es difícil tener una clara visión de lo que tenemos que hacer en cada uno de ellos, es por esa razón que usted esta aquí.<br />POR FAVOR no se preocupe por este formulario, nuestra intención es conocerle más. Rellene el formulario para que podamos ponernos en contacto con usted y conocer su idea de evento, ¡Gracias!
	 		</p>

            <div class="row pt-5" style="width: 100%;">
                <div class="col-2 col-md-1"></div>
                <div class="col-8 col-md-10">

                    <div class="info-form">
                        <form action="invitacion.php" class="was-validated justify-content-center" method="POST">
                            <div class="form-group">
                                <label class="color_black" for="correo">Dirección de correo electrónico:</label>
							    <input type="email" class="form-control" id="correo" placeholder="" name="correo" required>
                            </div>
                            <div class="form-group pt-3">
                                <label class="color_black" for="organizacíon">Nombre de la Iglesia / Organización / Compañía</label>
                                <input type="text" class="form-control" placeholder="" id="organizacion" name="organizacion" required>
                            </div>
                          	<div class="form-group pt-3">
                                <label class="color_black" for="organizacíon">Pastor Principal / Productor</label>
                                <input type="text" class="form-control" placeholder="" id="productor" name="productor" required>
                            </div>
                            <div class="form-group pt-3">
                                <label class="color_black" for="organizacíon">Teléfono</label>
                                <input type="number" min="1" step="1" pattern="[0-9]" class="form-control" placeholder="" id="telefono" name="telefono" required>
                            </div>
                             <div class="form-group pt-3">
                                <label class="color_black" for="organizacíon">País</label>
                                <input type="text" class="form-control" placeholder="" id="pais" name="pais" required>
                            </div>
                            <div class="form-group pt-3">
                                <label class="color_black" for="organizacíon">Ciudad</label>
                                <input type="text" class="form-control" placeholder="" id="ciudad" name="ciudad" required>
                            </div>
                            <div class="form-group pt-3 pb-3">
                                <label class="color_black" for="organizacíon">Dirección</label>
                                <input type="text" class="form-control" placeholder="" id="direccion" name="direccion" required>
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