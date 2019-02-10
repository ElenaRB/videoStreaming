<?php
    require_once("../../seguridad/videoStreaming/VideoStream.class.php");
    require_once("../../seguridad/videoStreaming/Cripto.class.php");
    require_once("../../seguridad/videoStreaming/Funciones.class.php");

    $rutaEncriptada="";
    if (isset($_GET['ruta'])){
        $rutaEncriptada=trim(strip_tags($_GET['ruta']));
    }

    $funciones=new Funciones();
    $funciones -> inicioSesion();
    $funciones -> validar();

    $cripto = new Cripto();
    $ruta = trim($cripto -> desencriptar($_SESSION['variable'], $rutaEncriptada));

    $stream = new VideoStream("../../recursos/videoStreaming/videos/$ruta");
    $stream->start();

?>