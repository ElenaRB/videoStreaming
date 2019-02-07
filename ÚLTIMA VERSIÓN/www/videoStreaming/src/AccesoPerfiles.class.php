<?php
require_once("./../../seguridad/videoStreaming/VideosBD.class.php");
require_once("./../../seguridad/videoStreaming/Funciones.class.php");
class AccesoPerfiles {
    public function getPerfil (){
        $funciones = new Funciones();
        $funciones -> inicioSesion();
        $dni="";
        if (!isset($_SESSION['dni'])){
            header("Location: ./login.php?mensaje=".urlencode("No se ha podido obtener el dni"));
            exit;
        }
        $dni=$_SESSION['dni'];
        $canal=new mysqli(VideosBD::IP, VideosBD::USUARIO, VideosBD::CLAVE, VideosBD::BD);
		if ($canal->connect_errno){
			die("Error de conexión con la base de datos ");
		}
        $canal -> set_charset("utf8");
        //--------------------- CONSULTA PARA SABER EL/LOS CÓDIGO DE PERFIL QUE TIENE UN USUARIO --------------------------------------------------------
        $consulta = $canal ->prepare("select codigo_perfil from perfil_usuario where dni = ?");
        $consulta-> bind_param("s", $dni);
        $consulta ->execute();
        $consulta -> bind_result($codigo_perfil);
        $perfiles=array();
		while ($consulta->fetch()){
			array_push($perfiles, $codigo_perfil);
		}
        
        //------------------------ CONSULTA PARA OBTENER LA DESCRIPCIÓN DEL PERFIL/ES CONSEGUIDO/S EN LA CONSULTA ANTERIOR --------------------------------------
        $consulta =$canal ->prepare("select descripcion from perfil where codigo = ?");
        $descripciones=array();
        for ($i=0; $i<count($perfiles); $i++) {
            $consulta-> bind_param("s", $perfiles[$i]);
            $consulta ->execute();
            $consulta -> bind_result($perfil);
            $consulta->fetch();
            array_push($descripciones, $perfil);
        }        
       //-----------------------  DEVOLVEMOS EL ARRAY CON LAS DESCRIPCIONES DE LOS DISTINTOS PERFILES DEL USUARIO --------------------------------------------
    $canal ->close();
      return $descripciones;  
    }
}

?>
