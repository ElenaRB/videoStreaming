<?php
    require_once("../../seguridad/videoStreaming/Funciones.class.php");
    require_once("Pantalla.class.php");
    require_once("AccesoVideos.class.php");

    $ruta="";
    if (isset($_POST['ruta'])){
        $ruta=trim(strip_tags($_POST['ruta']));
    }

    $funciones=new Funciones();
    $funciones -> inicioSesion();
    $funciones -> validar();

    $nombre = "Pelicula.zip";

    $zip = new ZipArchive();
    if ($zip->open($nombre, ZIPARCHIVE::CREATE)) {
        $zip->addFile("../../recursos/videoStreaming/videos/$ruta", $ruta);
        $zip->close();
        
        if (file_exists($nombre)) {
            header("Content-type: application/zip");
            header("Content-Disposition: attachment; filename=$nombre");
            readfile($nombre);
        }
        
        unlink($nombre);
        exit;
    } else {
        header("Location: info.php?mensaje=".urlencode("Error al descargar la película"));
        exit;
    }

?>