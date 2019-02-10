<?php
    require_once("../../seguridad/videoStreaming/Funciones.class.php");
    require_once("../../seguridad/videoStreaming/Cripto.class.php");
    require_once("Pantalla.class.php");
    require_once("AccesoVideos.class.php");

    $ruta="";
    if (isset($_POST['ruta'])){
        $ruta=trim(strip_tags($_POST['ruta']));
    }

    $funciones=new Funciones();
    $funciones -> inicioSesion();
    $funciones -> validar();

    $cripto=new Cripto();
    $rutaEncriptada = $cripto -> encriptar($_SESSION["variable"], $ruta);

    $parametros = array('ruta' => $rutaEncriptada);
    
    $pantalla = new Pantalla("../../pantallas/videoStreaming");
    $pantalla -> mostrar("ver.tpl", $parametros);

?>