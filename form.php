<?php
//Conecto mi form / name / con el server a traves de los name
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['email'];
$telefono = $_POST['telefono'];
//$alquiler  = $_POST['alquiler'];
//$dosplantas = $_POST['dos_plantas'];
//$tipologia = $POST['tipologia'];
//$hab = $POST['hab'];
//$provincia = $POST['provincia'];
$mensaje = $POST['multi'];

//Vamos a mostrar un texto plano
//$header .= "Content-Type: text/plain";

// Como me va a llegar el cuerpo del mail a mi
$mensaje = "Nombre de quien consulta". $nombre .",\r\n";
$mensaje = "Apellido de quien consulta". $apellido . ",\r\n";
$mensaje = "Su e-mail es". $mail .",\r\n";
$mensaje = "Su número de teléfono es". $telefono . ",\r\n";
//$mensaje = "¿El cliente alquila actualmente?" . $alquiler . ",\r\n";
//$mensaje = "¿Al cliente le interesan las viviendas de dos plantas?" . $dosplantas . ",\r\n";
//$mensaje = "Tipología favorita:" . $tipologia . ",\r\n";
//$mensaje = "Cantidad de habitaciones:" . $hab . ",\r\n";
//$mensaje = "Provincia de instalación:" . $provincia . ",\r\n";
$mensaje = "Mensaje:". $mensaje . ",\r\n";
$mensaje = "Enviado el" . date('d/m/Y', time());


$destinatario = 'pauguastella@gmail.com';//defino destinatario
$asunto = 'Consulta Viviendas El Fuerte';//defino asunto

//La función mail envía un correo electrónico. Y el orden es:
// A quién se lo envía? - El titulo del correo - El mensaje - Header para añadir
mail($destinatario,$asunto, utf8_decode($mensaje), $header);

//Redireccion al haber enviado el form
header('Location:exito.html');

?>
