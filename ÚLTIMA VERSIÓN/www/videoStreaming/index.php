<?php
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

    $dni = $_SESSION['dni'];

    $accesoPerfiles = new AccesoPerfiles();
    $descripciones = $accesoPerfiles -> getPerfil($_SESSION['dni']);
    $perfiles = $accesoPerfiles -> getCodPerfil($_SESSION['dni']);
    
    $accesoVideos = new AccesoVideos();
    $videos = $accesoVideos -> getVideos($perfiles);

    $canal=new mysqli(VideosBD::IP, VideosBD::USUARIO, VideosBD::CLAVE, VideosBD::BD);
    if ($canal->connect_errno){
        die("Error de conexión con la base de datos ");
    }
    $canal -> set_charset("utf8");
    //--------------------- CONSULTA --------------------------------------------------------
    $visionados = array();
    for ($i = 0; $i < count($videos); $i++) {
        $consulta = $canal ->prepare("select codigo_video from visionado where dni = ? and codigo_video = ?");
        $consulta-> bind_param("ss", $dni1, $cod_video1);
        $dni1 = $dni;
        $cod_video1 = $videos[$i]->codigo;
        $consulta ->bind_result($cod_vid);
        $consulta ->execute();
        $consulta ->fetch();
        array_push($visionados, $cod_vid);
        $consulta ->close();
    }

    $parametros = array('mensaje' => $mensaje, 'descripciones' => $descripciones, 'videos' => $videos, 'visionados' => $visionados);
    
    $pantalla = new Pantalla("../../pantallas/videoStreaming");
    $pantalla -> mostrar("index.tpl", $parametros);

   
    
    
?>
