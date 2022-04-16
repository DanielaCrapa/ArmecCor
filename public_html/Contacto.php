<?php

error_reporting(0);
$nombre= $_POST['nombre'];
$mensaje= $_POST['mensaje'];
$email= $_POST['email'];
$destino = $_REQUEST['recipient'];
$subject = $_REQUEST['subject'];
$redirect = $_REQUEST['redirect'];



if ($nombre != '') {
$header = "From: $nombre <$email>\r\n";
}
else {
$header = "From: $email\r\n";
}
$header .= "Return-Path: $email\r\n";
$nombre = "Nombre: $nombre\r\n";
$email ="Email: $email\r\n";
$mensaje ="mensaje: $mensaje\r\n";


mail($destino, $subject, $mensaje, $header);
header('Location: ' . $redirect);

?>