<?php

    include("HPMailer.php");
    include("Exception.php");
    include("SMTP.php");

   

    try {

        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $telefono = $_POST["telefono"];
        $mensaje = $_POST["mensaje"];
        $contenidoFinal =  "Nombres: " . $nombre . "<br>Apellidos: " . $apellidos . "<br>Telefono: " . $telefono . "<br>Mensaje: " . $mensaje;




        $emailto = "darwinqa316@gmail.com";
        $Subject = "Enviado desde la pagina satwa";
        $bodyemail =  $contenidoFinal;


        $fromemail = "masnacito_23@hotmail.com";
        $passoword = "ingeniero123";
        $fromname = "dd";
        $host = "smtp.live.com";
        $port = "587";
        $SMTPAuth = "login";
        $SMTPSecure = "tls"; 


        $mail = new PHPMailer\PHPMailer\PHPMailer();
        
        $mail->SMTPDebug = 1;                       // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = $host;                    // Set the SMTP server to send through
        $mail->SMTPAuth   =  $SMTPAuth;                                   // Enable SMTP authentication
        $mail->Username   =  $fromemail ;                     // SMTP username
        $mail->Password   =  $passoword;                               // SMTP password
        $mail->SMTPSecure =  $SMTPSecure;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       =  $port ;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom($fromemail,  $fromname );
        $mail->addAddress($emailto);     // Add a recipient
        
    
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
       if(!$mail->send()) {
       echo" no se pudo enviar el correo!"; die();

       }

       echo"correo enviado con exito"; die();
        




    } catch (\Throwable $th) {
       

    }
?>