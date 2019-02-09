<?php
require_once("Pantalla.class.php");


$mensaje="";
if (isset($_GET['mensaje'])){
	$mensaje=trim(strip_tags($_GET['mensaje']));
}

$pantalla=new Pantalla("../../pantallas/videoStreaming");

$parametros=array('mensaje' => $mensaje);

$pantalla->mostrar("login.tpl",$parametros);

?>