<?php 
require_once("../../seguridad/videoStreaming/VideosBD.class.php");
require_once("../../seguridad/videoStreaming/Funciones.class.php");
require_once("Video.class.php");
class AccesoVideos {
    public function getVideos ($perfiles) {
        $funciones = new Funciones();
        $canal=new mysqli(VideosBD::IP, VideosBD::USUARIO, VideosBD::CLAVE, VideosBD::BD);
		if ($canal->connect_errno){
			die("Error de conexión con la base de datos ");
		}
        $canal -> set_charset("utf8");
        //--------------------- CONSULTA VIDEOS --------------------------------------------------------
        $consulta =$canal ->prepare("select * from videos where codigo_perfil = ?");
        $videos=array();
        for ($i=0; $i<count($perfiles); $i++) {
            $consulta-> bind_param("s", $perfil);
            $perfil = $perfiles[$i];
            $consulta ->execute();
            $consulta -> bind_result($codigo,$titulo,$cartel,$descargable,$cod_perfil,$sinopsis,$video);
            while ($consulta->fetch()) {
                array_push($videos, new Video($codigo,$titulo,$cartel,$descargable,$cod_perfil,$sinopsis,$video));
            }
        }
        
        $canal -> close();
        return $videos;
    }
}

?>