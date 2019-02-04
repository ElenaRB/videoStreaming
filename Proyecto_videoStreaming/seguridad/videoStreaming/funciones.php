<?php
function inicioSesion(){
	session_name("SESION");
	session_cache_limiter('nocache');
	session_start();
}

?>
