<?php
    //require_once("./src/Video.class.php");
    //require_once("./src/AccesoVideos.class.php");
    //require_once("./../../seguridad/videoStreaming/funciones.php");
    require_once("./src/Pantalla.class.php");
    require_once("./src/AccesoPerfiles.class.php");

    $mensaje="";
    if (isset($_GET['mensaje'])){
        $mensaje=trim(strip_tags($_GET['mensaje']));
    }

    $accesoPerfiles = new AccesoPerfiles();
    $descripciones = $accesoPerfiles -> getPerfil();

    $parametros = array('mensaje' => $mensaje, 'descripciones' => $descripciones);
    
    $pantalla = new Pantalla("./../../pantallas/videoStreaming");
    $pantalla -> mostrar("index.tpl", $parametros);

    //Lo que queremos imprimir 
    
    
?>
