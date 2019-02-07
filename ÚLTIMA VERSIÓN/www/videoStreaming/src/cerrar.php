<?php
include "./../../../seguridad/videoStreaming/Funciones.class.php";
$funciones = new Funciones();
$funciones -> inicioSesion();
session_destroy();
unset($_SESSION);
header("Location: ./../login.php");
exit;
?>