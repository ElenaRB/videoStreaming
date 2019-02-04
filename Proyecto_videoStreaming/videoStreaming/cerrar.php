<?php
include "./../../seguridad/videoStreaming/funciones.php";
inicioSesion();
session_destroy();
unset($_SESSION);
header("Location: login.php");
exit;
?>