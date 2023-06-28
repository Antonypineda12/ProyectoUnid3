<?php



require("class.phpmailer.php");
require("class.smtp.php.php");

// Valores enviados desde el formulario
if ( !isset($_POST["nombre"]) || !isset($_POST["apellidos"]) || !isset($_POST["correo"]) || !isset($_POST["telefono"])   || !isset($_POST["mensaje"]) ) {
    die ("Es necesario completar todos los datos del formulario");





$destinatario = "darwinqa316@gmail.com";
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];

$contenido = "Nombres: " . $nombre . "\nApellidos: " . $apellidos . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;



// Datos de la cuenta de correo utilizada para enviar v�a SMTP
$smtpHost = "smtp.gmail.com";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "martindeco13@gmail.com";  // Mi cuenta de correo
$smtpClave = "ingeniero.123DQA";  // Mi contrase�a




$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 587; 
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";

// VALORES A MODIFICAR //
$mail->Host = $smtpHost; 
$mail->Username = $smtpUsuario; 
$mail->Password = $smtpClave;


$mail->From = $correo; // Email desde donde env�o el correo.
$mail->FromName = $nombre;
$mail->AddAddress($destinatario); // Esta es la direcci�n a donde enviamos los datos del formulario

$mail->Subject = "Formulario desde el Sitio Web Satwa"; // Este es el titulo del email.
$mensajeHtml = nl2br($mensaje);
$mail->Body = $contenido;




$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$estadoEnvio = $mail->Send(); 
if($estadoEnvio){
    echo "El correo fue enviado correctamente.";
    echo "<script> setTimeout(\"location.href='formulario.html'\",1000)</script>";  

} else {
    echo "Ocurri� un error inesperado.";
}




}

else{
    echo"no hay datos que procesar";
    exit();
}




?>

