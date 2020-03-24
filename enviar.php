<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Formulario de contacto</title>
</head>

<body>
	<center>
	<?php 
$myemail = 'info.tauliosanchez@gmail.com';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>

		<form method="post" action="enviar.php">
			<input type="text" name="nombre">
			<textarea type="email" name="mensaje" placeholder="mensaje"></textarea>
			<input type="submit" value="enviar">
		</form>
	</center>

                    
</body>
</html>