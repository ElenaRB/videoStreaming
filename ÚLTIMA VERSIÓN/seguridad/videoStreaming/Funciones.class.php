<?php
    class Funciones { 
        
        function inicioSesion() {
            session_name("SESION");
            session_cache_limiter("nocache, private");
            session_start();
       }
        
        function validar() {
            if (!isset($_SESSION['validado']) && $_SESSION['validado'] == false) {
                header("Location: login.php");
                exit;
            }
        }
        
    }
?>
