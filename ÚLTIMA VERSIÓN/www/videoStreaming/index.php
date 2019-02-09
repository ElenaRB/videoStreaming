<?php
    //require_once("./src/Video.class.php");
    //require_once("./src/AccesoVideos.class.php");
    require_once("../../seguridad/videoStreaming/Funciones.class.php");
    require_once("Pantalla.class.php");
    require_once("AccesoPerfiles.class.php");
    require_once("AccesoVideos.class.php");

    $mensaje="";
    if (isset($_GET['mensaje'])){
        $mensaje=trim(strip_tags($_GET['mensaje']));
    }

    $funciones=new Funciones();
    $funciones -> inicioSesion();
    $funciones -> validar();

    $accesoPerfiles = new AccesoPerfiles();
    $descripciones = $accesoPerfiles -> getPerfil($_SESSION['dni']);
    $perfiles = $accesoPerfiles -> getCodPerfil($_SESSION['dni']);
    
    $accesoVideos = new AccesoVideos();
    $videos = $accesoVideos -> $getVideos($perfiles);


    $parametros = array('mensaje' => $mensaje, 'descripciones' => $descripciones);
    
    $pantalla = new Pantalla("../../pantallas/videoStreaming");
    $pantalla -> mostrar("index.tpl", $parametros);

   
    
    
?>
