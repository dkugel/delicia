<?php
        
	$name = isset($_POST['name'])? $_POST['name'] : NULL;
	$email = isset($_POST['email'])? $_POST['email'] : NULL;
	$phone = isset($_POST['number'])? $_POST['number'] : NULL;
	$message = isset($_POST['message'])? $_POST['message'] : NULL;


		$para = 'info@lechonerialadelicia.com';
		$titulo = 'Nuevo contacto';
		$header = 'From: ' . $email;
		$msjCorreo = "Nombre: $name\n E-Mail: $email\n  Telefono: $phone\n   Mensaje:\n $message";
		  
		if (isset($_POST['submit'])) {
		if (mail($para, $titulo, $msjCorreo, $header)) {
		echo "<script language='javascript'>
		alert('Mensaje enviado, muchas gracias.');
		window.location.href = 'http://www.lechonerialadelicia.com';
		</script>";
		} else {
		echo 'Falló el envio';
		}
		}
?>			
        
      