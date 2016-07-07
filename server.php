<?php 
		$nombre = $_POST['nombre'];
		$mail = $_POST['email'];
		$asunto = $_POST['asunto'];
		$mensajeUsuario = $_POST['mensaje'];

		
		$header = 'From: ' . $mail . " \r\n";
		$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
		$header .= "Mime-Version: 1.0 \r\n";
		$header .= "Content-Type: text/plain";
		
		$mensaje = "Message send by " . $nombre . "\r\n";
		$mensaje .= "e-mail: " . $mail . " \r\n";
		//$mensaje .= "Su telefono es: " . $telefono . " \r\n";
		$mensaje .= "Message: " . $mensajeUsuario . " \r\n";

		$mensaje .= "Send:" . date('d/m/Y', time());
		
		$para = 'geninteractive@gmail.com';
		$asunto = 'Contact from PatienVoice';
		
		$mail = mail($para, $asunto, $mensaje, $header);
		
		//echo ($mail);

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/JavaScript">
<!--
setTimeout("location.href = 'index.html';",3000000);
-->
</script>

<title>Your message has been sent, thank you very much</title>
<link href="css/my_styles.css" media="screen" rel="stylesheet" type="text/css">
</head>

<body st>
<div id="server" style="width: 80%; margin: 0 auto; text-align: center;">
<br><br>
<h3>Your message has been sent, thank you very much<a href="index.html">Go to home</a></h3>
</div>
</body>
</html>
