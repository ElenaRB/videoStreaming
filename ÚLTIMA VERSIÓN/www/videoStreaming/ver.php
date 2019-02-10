<?php
    require_once("../../seguridad/videoStreaming/Funciones.class.php");
    require_once("../../seguridad/videoStreaming/Cripto.class.php");
    require_once("Pantalla.class.php");
    require_once("AccesoVideos.class.php");

    $codigo="";
    if (isset($_POST['codigo'])){
        $codigo=trim(strip_tags($_POST['codigo']));
    }

    $funciones=new Funciones();
    $funciones -> inicioSesion();
    $funciones -> validar();
    
    $dni = $_SESSION['dni'];

    $accesoVideos = new AccesoVideos();
    $video = $accesoVideos -> getVideo($codigo);

    $cripto=new Cripto();
    $rutaEncriptada = $cripto -> encriptar($_SESSION["variable"], $video->video);

    $canal=new mysqli(VideosBD::IP, VideosBD::USUARIO, VideosBD::CLAVE, VideosBD::BD);
    if ($canal->connect_errno){
        die("Error de conexión con la base de datos ");
    }
    $canal -> set_charset("utf8");
    //--------------------- CONSULTA --------------------------------------------------------
    $consulta = $canal ->prepare("select * from visionado where dni = ? and codigo_video = ?");
    $consulta-> bind_param("ss", $dni1, $cod_video1);
    $dni1 = $dni;
    $cod_video1 = $video->codigo;
    $consulta ->execute();
    $consulta ->store_result();
    if ($consulta ->num_rows() == 0) {
        $consulta ->close();
        $consulta = $canal ->prepare("insert into visionado values (null, ?, ?, CURRENT_TIMESTAMP, ?)");
        $consulta-> bind_param("sss", $dni2, $cod_video2, $sinopsis2);
        $dni2 = $dni;
        $cod_video2 = $video->codigo;
        $sinopsis2 = $video->sinopsis;
        $consulta ->execute();
        $consulta ->close();
    }

    $parametros = array('ruta' => $rutaEncriptada);
    
    $pantalla = new Pantalla("../../pantallas/videoStreaming");
    $pantalla -> mostrar("ver.tpl", $parametros);

?>