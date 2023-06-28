<?php

 $destino="martindeco13@gmail.com";
 $nombre=$_POST ["nombre"];
 $apellidos=$_POST["apellidos"];
 $correo=$_POST ["correo"];
 $telefono=$_POST ["telefono"];
 $mensaje=$_POST ["mensaje"];
 $contenidoFinal =  "Nombres: " . $nombre . "\nApellidos: " . $apellidos . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;
 mail($destino, "Contacto", $contenidoFinal);
 echo "<script> alert('mensaje enviado')</script>";  
 echo "<script> setTimeout(\"location.href='formulario.html'\",1000)</script>";  
?>