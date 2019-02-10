<?php
    require_once("../../seguridad/videoStreaming/Funciones.class.php");
    require_once("Pantalla.class.php");
    require_once("AccesoVideos.class.php");

    $codigo="";
    if (isset($_POST['codigo'])){
        $codigo=trim(strip_tags($_POST['codigo']));
    }

    $funciones=new Funciones();
    $funciones -> inicioSesion();
    $funciones -> validar();

    $accesoVideos = new AccesoVideos();
    $video = $accesoVideos -> getVideo($codigo);

    $parametros = array('video' => $video);
    
    $pantalla = new Pantalla("../../pantallas/videoStreaming");
    $pantalla -> mostrar("info.tpl", $parametros);

?>