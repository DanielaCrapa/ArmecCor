<?php
$nombre= $_REQUEST['nombre'];
$mensaje= $_REQUEST['mensaje'];
$email= $_REQUEST['email'];
$destino = $_REQUEST['recipient'];
$subject = $_REQUEST['subject'];
$redirect = $_REQUEST['redirect'];



if ($nombre != '') {
$header = "From: $nombre <$email>\r\n";
}
else {
$header = "From: $email\r\n";
$header .= "Return-Path: $email\r\n";
$mensaje = "Nombre: $nombre\r\n";
$mensaje .="Email: $email\r\n";
$mensaje .="mensaje: $mensaje\r\n";
}


mail($destino, $subject, $mensaje, $header);
header('Location: ' . $redirect);
?>
