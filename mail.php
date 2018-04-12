<?php

    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
	$time_to_contact = $_POST['time_to_contact'];
	$message = $_POST['message'];
	
    $to = "ventas@mesquita.com.ar";
	$headers = "From: web@mostradorblindado.com\r\n";
	
    $subject = "www.espacioseguro.com.ar - Solicitud de Presupuesto";
			
    $body = "Nombre: $name\nTelefono: $tel\nE-Mail: $email\nHorario para contactarlo: $time_to_contact\nMensaje:\n $message";
	
	
    if (isset($_POST['submit'])){
		if (mail ($to, $subject, $body, $headers)){ 
			echo '<p>Tu mensaje fue enviado con exito!</p>';
		}else{ 
			echo '<p>El mensaje no pudo ser enviado, intenta nuevamente y si el problema persiste contactanos telefonicamente y menciona este inconveniente.</p>'; 
		}
	}
?>