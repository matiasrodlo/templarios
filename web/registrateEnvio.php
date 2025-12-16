<?php

	$data_nombre = $HTTP_POST_VARS['nombre'];
	$data_nivel = $HTTP_POST_VARS['nivel'];
	$data_reglas = $HTTP_POST_VARS['reglas'];	
	$data_email = $HTTP_POST_VARS['email'];	
	
	$mensaje = "";
	$mensaje .= "Registro templarios";	
	$mensaje .= "\n-----------------------------------";	
	$mensaje .= "\nNombre: $data_nombre";	
	$mensaje .= "\nNivel: $data_nivel";	
	$mensaje .= "\nReglas: $data_reglas";			
	$mensaje .= "\nEmail: $data_email";		
	$mensaje .= "\n\n Tus datos han sido registrados.";			
	$mensaje .= "\n Únete a nosotros y vivirás el poder y la Groria.";				

	$para = "matitoromatador@hotmail.com";
	$from = "Sitio temparios <templarios@a2.cl>";
	$asunto =  "Registro templarios - $data_nombre";
	$pgexito =  "registrateOK.htm"; 
	$cabeceras = "";
	
	//genera la cabecera
	$cabeceras .= "From: ". $from ."\r\n";
	if($reply != "")
	{	$cabeceras  .= "Reply-To: ". $reply ."\r\n";}
	if($cc != "")
	{	$cabeceras .= "Cc: ". $cc ."\r\n";}
	if($cco != "")
	{	$cabeceras .= "Bcc: ". $cco ."\r\n";}
	 
	//envia el correo
	$envio = mail($para,$asunto,$mensaje,$cabeceras);
	$envio = mail($data_email,$asunto,$mensaje,$cabeceras);	
	
	//carga otra pagina dependiendo del exito o fracaso del envio del correo.
	if($envio)
	{ 
		?>
        <script>
			document.location = "<?php echo  $pgexito; ?>" ; 
	    </script>
      	<? 
	}
	else
	{	
		?>
        <script>
			document.location = "<?php echo  $pgfracaso; ?>"; 
	    </script>
      	<? 
	}

?>