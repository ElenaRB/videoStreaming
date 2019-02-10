<?php
    require_once("../../seguridad/videoStreaming/VideoStream.class.php");

    $ruta="";
    if (isset($_POST['ruta'])){
        $ruta=trim(strip_tags($_POST['ruta']));
    }

    $stream = new VideoStream("../../recursos/videoStreaming/videos/video2.mp4");
    $stream->start();

?>