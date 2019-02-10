<?php
//Recibimos del formulario de iniciar la sesión el dni del usuario y la clave introducidas
$dni="";
if (!isset($_POST['dni'])){
	header("Location: login.php?mensaje=".urlencode("No se ha podido obtener el dni"));
	exit;
}
$dni=strip_tags(trim($_POST['dni']));
$clave="";
if (!isset($_POST['clave'])){
	header("Location: login.php?mensaje=".urlencode("No se ha podido obtener la clave"));
	exit;
}
$clave=strip_tags(trim($_POST['clave']));

if (empty($dni) || strlen($dni)>20 || empty($clave) || strlen($clave)>20){
	header("Location: login.php?mensaje=".urlencode("Usuario inexistente o clave no reconocida"));
	exit;
}

//Crear canal y mostrar mensaje de error en caso de no realizarse correctamente
$canal=new mysqli(VideosBD::IP, VideosBD::USUARIO, VideosBD::CLAVE, VideosBD::BD);
if (!$canal){
	echo "Ha ocurrido el error1: ".mysqli_connect_errno()." ".mysqli_connect_error()."<br />";
exit;
}
mysqli_set_charset($canal,"utf8");


$sql="select clave from usuarios where dni=?";
//Se prepara la consulta
$consulta=mysqli_prepare($canal,$sql);
if (!$consulta){
	echo "Ha ocurrido el error2: ".mysqli_errno($canal)." ".mysqli_error($canal)."<br />";
exit;	
}

mysqli_stmt_bind_param($consulta,"s",$ddni);
$ddni=$dni;
mysqli_stmt_execute($consulta);
mysqli_stmt_bind_result($consulta, $cclave);
mysqli_stmt_fetch($consulta);
    
//Se verifican las claves (La introducida y la recibida gracias a la consulta), si no son iguales se muestra el mensaje de contraseña incorrecta

if (!password_verify($clave, $cclave)) {
    header("Location: login.php?mensaje=".urlencode("Contraseña incorrecta"));
    exit;
}

//Se inicia sesión
session_name("SESION");
session_cache_limiter('nocache');
session_start();

//Datos del usuario 
$_SESSION['validado']=true;
$_SESSION['dni']=$dni;
$_SESSION["variable"] = uniqid();
	

//Cierre
mysqli_stmt_close($consulta);
unset($consulta);
mysqli_close($canal);
?>